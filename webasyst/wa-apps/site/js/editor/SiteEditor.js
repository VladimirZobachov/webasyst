"use strict";

// use a function because it's difficult to call static class method from another iframe
function registerEditorIframe(iframe_api) {
    return SiteEditor.registerIframe(iframe_api);
}

/**
 * Main class responsible for core editor operations.
 * Lives outside of iframe.
 */
class SiteEditor {
    static instance;

    static registerIframe(ifrapi) {
        if (!SiteEditor.instance) {
            throw new Error('SiteEditor is not ready');
        }
        SiteEditor.instance.iframe_api = ifrapi;
        return SiteEditor.instance;
    }

    /*
     * non-static
     */

    $addBlockDialogDOM;
    $addElementsListDOM;
    selected_block_id;
    current_mq = '';

    // inctance of BlockStorage
    block_storage;

    // instance of SiteEditorInsideIframe
    iframe_api;

    // instance of UndoRedoQueue
    undoredo;

    // instance of BlockSettingsDrawer
    _block_settings_drawer_promise;

    constructor(options) {
        SiteEditor.instance = this;

        this._block_settings_drawer_promise = this._initBlockSettingsDrawer();
        this.block_storage = new BlockStorage(options.block_storage_data, options.block_form_config);
        this.undoredo = new UndoRedoQueue()
        this.initCustomEvents();
        //this.updateEmptyClassEditor();
    }

    /**
     * Open dialog to select new block type to add at specified place.
     * successCb() gets called with new (re-rendered) HTML of parent block.
     * Called from inside iframe.
     */
    openAddBlockDialog(place_data, successCb, cancelCb) {

        if (!this.$addBlockDialogDOM) {
            this.$addBlockDialogDOM = $('#js-add-block-dialog').detach();
        }

        var dialog = $.waDialog({
            $wrapper: this.$addBlockDialogDOM.clone()
        });

        $.post('?module=editor&action=addBlockDialog', place_data, function(html) {
            dialog.$content.html(html).on('site_block_added', function(e, data) {
                successCb(data);
            });
        });
    }

    /**
     * Delete it later if you don't need it.
     */
    /*openAddElementsList(dropdown_id, place_data, successCb, cancelCb) {
        console.log(dropdown_id, place_data);
        $.post('?module=editor&action=addElementsList', place_data, function(html) {
            //console.log(html);
            const $dropdown = $('#' + dropdown_id);
            console.log('#' + dropdown_id, $dropdown)
            $dropdown.find('.dropdown-body').html(html);
            const $dropdown_instance = $dropdown.waDropdown({
                hover: false,
                //items: ".menu > li > a",
                ready: function(event, target, dropdown) {

                }
            });
            $dropdown.on('site_block_added', function(e, data) {
                successCb(data);
            });
        });
    }*/

    /**
     * Called from inside iframe when user clicks to select a block.
     * Shows right drawer with block settings form.
     */
    async setSelectedBlock(block_id, is_new_block, reset_block) {
        console.log(this.current_mq)
        this.selected_block_id = block_id;
        var bs = await this._block_settings_drawer_promise;
        bs.show();
        bs.setForm(block_id, this.block_storage.getFormConfig(block_id), this.block_storage.getData(block_id), this.current_mq, is_new_block, reset_block);
    }
    /**
     * Called from outside iframe when user clicks on device panel in wa-header .
     * resets block settings form.
     */
    resetMediaProp(media_prop) {
        var site_editor = this;
        this.current_mq = media_prop;
        //console.log(this.selected_block_id)
        if (this.selected_block_id) {
            site_editor.setSelectedBlock(this.selected_block_id);
        }
    }
    /**
     * Process some events for block settings
     * It is used to close block settings form 
     */
    initCustomEvents() {
        let site_editor = this;
        let last_alt = false;
        $(document).on('keydown', function(event) {
            if (event.keyCode == 27 && site_editor.selected_block_id && !$('.site-editor-left-drawer').length) {
                closerSettings()
            }
            if (event.ctrlKey || event.metaKey) {
                if (event.keyCode == 90) site_editor.undoredo.undo();
                if (event.keyCode == 89) site_editor.undoredo.redo();
            }
            if (event.altKey && !last_alt) {
                last_alt = true;
                site_editor.iframe_api?.$wrapper?.addClass('alt-down');  
            } 

        });
        $(document).on('keyup', function(event) {
            if (last_alt) {
                last_alt = false;
                site_editor.iframe_api?.$wrapper?.removeClass('alt-down');
            }
        })

        $(window).on('blur', function(event) {
            if (last_alt) {
                last_alt = false;
                site_editor.iframe_api?.$wrapper?.removeClass('alt-down');
            }
        });

        $(document).on('close_dropdown', function(event, data) {
            $('.block-settings-sidebar').find('.dropdown.is-opened').each(function(i, el){
                $(el).waDropdown('dropdown').toggleMenu(false);
            })
        })

        /*$(document).on('click', function(event) { //close settings if we click on wa-header
        if ($(event.target).closest('#wa-header').length) closerSettings()
        })*/
      
        function closerSettings() {
            site_editor._block_settings_drawer_promise.then(function(bs) {
                bs.hide();
                $('#js-main-editor-body').contents().find('.seq-child.selected-block').removeClass('selected-block');
                site_editor.selected_block_id = null;
            });
        }
    }

    _initBlockSettingsDrawer() {
        return $.Deferred((deferred) => {
            var $wrapper = $('#js-site-editor-block-settings').on('block_settings_form_ready', function(event, block_settings_drawer) {
                deferred.resolve(block_settings_drawer);
            });
        }).promise();
    }

    /**
     * Called from inside iframe by code of various blocks, as well as from block settings form
     * to upload a file to a given block into a given slot identified by `key`.
     * Returns a promise that will contain information about uploaded file such as URL.
     * Also propagates changes into WYSIWYG iframe once file is uploaded.
     */
    uploadFile(block_id, key, file) {
        var site_editor = this;

        var old_file_state = this.block_storage.getFile(block_id, key);
        var file_promise = $.Deferred();
        this.undoredo.addOperation(block_id, new UndoRedoQueue.Operation({
            delay: 0,
            mode: 'replace',
            type: 'file_upload',

            undo_url: null,
            undo_data: null,
            redo_url: null,
            redo_data: null,
            new_file_state: null,

            // This runs when queue reaches this operation as DO
            run: function(op) {

                let fd = new FormData();
                fd.append('block_id', block_id);
                fd.append('key', key);
                fd.append('file', file);
                return $.ajax({
                    method: 'POST',
                    url: '?module=editor&action=upload',
                    processData: false,
                    contentType: false,
                    data: fd
                }).then(function(r) {
                    try {
                        op.undo_url = r.data.undo.url;
                        op.undo_data = r.data.undo.post;
                        file_promise.resolve(r.data.file.url);
                    } catch (e) {
                        // something went wrong, no undo
                        console.log('Unable to upload block file to server', e, r);
                    }

                    // Apply new state to WYSIWYG iframe
                    op.new_file_state = r.data.file;
                    site_editor.block_storage.setFile(block_id, key, op.new_file_state);
                    site_editor.iframe_api.updateBlockFile(block_id, key, op.new_file_state);
                });

            },
            // this runs immediately when user clicks UNDO (no waiting for queue)
            localUndo: function(op) {
                // immediately revert DOM state inside WYSIWYG iframe
                site_editor.block_storage.setFile(block_id, key, old_file_state);
                site_editor.iframe_api.updateBlockFile(block_id, key, old_file_state);
            },
            // this runs when queue reaches UNDO operation
            undo: function(op) {
                if (!op.undo_url || !op.undo_data) {
                    return $.Deferred().resolve().promise();
                }
                return $.post(op.undo_url, op.undo_data).then(function(r) {
                    try {
                        op.redo_url = r.data.undo.url;
                        op.redo_data = r.data.undo.post;
                    } catch (e) {
                        // something went wrong, no redo
                        console.log('Error performing undo upload', e, r);
                    }
                    site_editor.iframe_api.updateBlockFile(block_id, key, r?.data?.file);
                });
            },
            // this runs immediately when user clicks REDO (no waiting for queue)
            localRedo: function(op) {
                // immediately set DOM state inside WYSIWYG iframe
                site_editor.block_storage.setFile(block_id, key, op.new_file_state);
                site_editor.iframe_api.updateBlockFile(block_id, key, op.new_file_state);
            },
            // This runs when queue reaches this operation as REDO
            redo: function(op) {
                if (!op.redo_url || !op.redo_data) {
                    return $.Deferred().resolve().promise();
                }
                return $.post(op.redo_url, op.redo_data).then(function(r) {
                    site_editor.iframe_api.updateBlockFile(block_id, key, r?.data?.file);
                });
            }
        }));

        return file_promise.promise();
    }

    /**
     * Called from inside iframe by code of various blocks, as well as from block settings form
     * to save block state to server when user changes something in WYSIWYG or form.
     */
    saveBlockData(block_id, data, opts) {

        var site_editor = this;

        var data_update_mode = opts?.mode || 'update';
        var undo_data;

        if (data_update_mode == 'update') {
            undo_data = this.block_storage.updateData(block_id, data);
        } else {
            undo_data = this.block_storage.setData(block_id, data);
        }

        this.undoredo.addOperation(block_id, new UndoRedoQueue.Operation({
            delay: opts?.delay || 0,
            undo_data: undo_data,
            mode: 'merge',
            type: 'data_'+data_update_mode,
            data: data,
            merge: function(op, old_op) {
                op.undo_data = old_op.undo_data;
            },
            localRedo: function(op) {
                // immediately set DOM state and block settings form
                //site_editor.block_storage.setData(block_id, op.data);
                site_editor.iframe_api.updateBlockData(block_id, op.data);
                site_editor._block_settings_drawer_promise.then(function(bs) {
                    if (site_editor.selected_block_id == block_id) {
                        site_editor.setSelectedBlock(block_id, false, true);
                        //bs.setForm(block_id, site_editor.block_storage.getFormConfig(block_id), op.data, site_editor.current_mq, false, true);
                        //bs.setData(op.data);
                    }
                });
            },
            run: function(op) {
                return $.post('?module=editor&action=saveBlockData', {
                    data: JSON.stringify(op.data),
                    mode: data_update_mode,
                    block_id: block_id
                }).then(function(r) {
                    try {
                        op.undo_data = JSON.parse(r.data.undo.post.data);
                    } catch (e) {
                        // will use existing op.undo_data
                    }
                });
            },
            localUndo: function(op) {
                // immediately revert DOM state and block settings form
                //site_editor.block_storage.setData(block_id, op.undo_data);
                site_editor.iframe_api.updateBlockData(block_id, op.undo_data);
                site_editor._block_settings_drawer_promise.then(function(bs) {
                    if (site_editor.selected_block_id === +block_id) {
                        site_editor.setSelectedBlock(block_id, false, true);
                        //bs.setForm(block_id, site_editor.block_storage.getFormConfig(block_id), op.undo_data, site_editor.current_mq, false, true);
                        //bs.setData(op.undo_data);
                    }
                });
                
            },
            undo: function(op) {
                return $.post('?module=editor&action=saveBlockData', {
                    data: JSON.stringify(op.undo_data),
                    mode: 'set',
                    block_id: block_id
                }).then(function(r) {
                    try {
                        op.data = JSON.parse(r.data.undo.post.data);
                        data_update_mode = 'set';
                    } catch (e) {
                        // will use existing op.data
                    }
                });
            }
        }));

        if (opts?.notify_block_settings_form) {
            site_editor._block_settings_drawer_promise.then(function(bs) {
                if (site_editor.selected_block_id == block_id) {
                    site_editor.setSelectedBlock(block_id, false, false);
                    //bs.setData(site_editor.block_storage.getData(block_id));
                    //bs.setForm(block_id, site_editor.block_storage.getFormConfig(block_id), site_editor.block_storage.getData(block_id), site_editor.current_mq, false, false);
                }
            });
        }
        if (opts?.notify_editor_inside_iframe) {
            site_editor.iframe_api.updateBlockData(block_id, site_editor.block_storage.getData(block_id));
        }
    }

    /**
     * Called from inside iframe to remove (hide and mark as deleted) given block_id
     */
    removeBlock(block_id, $wrapper) {
        var site_editor = this;
        var op = new UndoRedoQueue.Operation({
            delay: 0,
            mode: 'add',
            type: 'remove',
            localRedo: function(op) {
                op.$removed_block = $wrapper.find('[data-block-id="'+block_id+'"]').first();
                op.$parent = op.$removed_block.parent();
                op.after_block_id = op.$removed_block.prev().data('block-id');
                op.$removed_block.detach();
                site_editor.updateEmptyClass($wrapper);
            },
            run: function(op) {

                return $.post('?module=editor&action=deleteBlock', { block_id }, function(new_parent_block_html) {

                });
            },
            localUndo: function(op) {
                if (op.after_block_id) {
                    var $sibling = op.$parent.children('[data-block-id="'+op.after_block_id+'"]');
                    if ($sibling.length) {
                        $sibling.after(op.$removed_block);
                        return;
                    }
                }
                op.$parent.prepend(op.$removed_block);
                site_editor.updateEmptyClass($wrapper);
            },
            undo: function(op) {
                return $.post('?module=editor&action=restoreBlock', { block_id }, function(new_parent_block_html) {
                });
            }
        });
        op.op.localRedo(op.op);
        this.undoredo.addOperation(block_id, op);
        $(document).trigger('resize');
        //site_editor.updateEmptyClassEditor($wrapper);
    }

    /**
     * Called from inside iframe to add undo operation after new block has been added to page.
     * See PHP class: siteEditorAddBlockController
     */
    addBlockUndoOperation(block_id, $wrapper) {

        var skip_run = true;
        var site_editor = this;
        this.undoredo.addOperation(block_id, new UndoRedoQueue.Operation({
            delay: 0,
            mode: 'add',
            type: 'create_block',
            localRedo: function(op) {
                if (op.after_block_id) {
                    var $sibling = op.$parent.children('[data-block-id="'+op.after_block_id+'"]');
                    if ($sibling.length) {
                        $sibling.after(op.$removed_block);
                        return;
                    }
                }
                op.$parent.prepend(op.$removed_block);
                site_editor.updateEmptyClass($wrapper);
            },
            run: function(op) {
                if (skip_run) {
                    // no need to restore a block we've just added
                    // rest of run() only makes sense after undo()
                    return $.Deferred().resolve().promise();
                }
                return $.post('?module=editor&action=restoreBlock', { block_id }, function(new_parent_block_html) {
                });
            },
            localUndo: function(op) {
                op.$removed_block = $wrapper.find('[data-block-id="'+block_id+'"]').first();
                op.$parent = op.$removed_block.parent();
                op.after_block_id = op.$removed_block.prev().data('block-id');
                op.$removed_block.detach();
                site_editor.updateEmptyClass($wrapper);
            },
            undo: function(op) {
                skip_run = false;
                return $.post('?module=editor&action=deleteBlock', { block_id }, function(new_parent_block_html) {
                });
            }
        }));
        $(document).trigger('resize');
        //site_editor.updateEmptyClassEditor();
    }

    reorderBlocks(page_id, parent_block_id, before_child_ids, after_child_ids, $wrapper) {
        this.undoredo.addOperation(parent_block_id, new UndoRedoQueue.Operation({
            delay: 0,
            mode: 'replace',
            type: 'reorder',
            before_child_ids: before_child_ids,
            after_child_ids: after_child_ids,
            localRedo: function(op) {
                reorderChildren(after_child_ids);
            },
            run: function(op) {
                return saveToServer(after_child_ids);
            },
            localUndo: function(op) {
                reorderChildren(before_child_ids);
            },
            undo: function(op) {
                return saveToServer(before_child_ids);
            }
        }));

        function reorderChildren(child_ids) {
            const elements = {};
            $wrapper.children().each(function(i, el) {
                var $el = $(el);
                elements[$el.data('block-id')] = $el;
            });

            for (var id of child_ids) {
                if (elements[id]) {
                    $wrapper.append(elements[id]);
                    delete elements[id];
                }
            }
            for (var id in elements) {
                if (elements[id]) {
                    $wrapper.append(elements[id]);
                }
            }
        }

        function saveToServer(child_ids) {
            return $.post('?module=editor&action=moveBlock', {
                page_id, parent_block_id, child_ids
            }, function(new_parent_block_html) {
                // nothing to do
            });
        }

    }

    updateEmptyClass($wrapper) {
        if ($wrapper.find('.seq-child').length) {
            $wrapper.removeClass('no-children');
        }
        else if (!$wrapper.hasClass('no-children')){
            $wrapper.addClass('no-children')
        }
    }


}