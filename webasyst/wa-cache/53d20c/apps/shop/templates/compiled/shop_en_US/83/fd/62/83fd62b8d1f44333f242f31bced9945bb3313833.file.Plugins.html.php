<?php /* Smarty version Smarty-3.1.14, created on 2024-12-08 12:45:55
         compiled from "/var/www/html/wa-system/plugin/templates/Plugins.html" */ ?>
<?php /*%%SmartyHeaderCode:163996784667559503946669-54613345%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83fd62b8d1f44333f242f31bced9945bb3313833' => 
    array (
      0 => '/var/www/html/wa-system/plugin/templates/Plugins.html',
      1 => 1716361210,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163996784667559503946669-54613345',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_url' => 0,
    'wa' => 0,
    'installer' => 0,
    'wa_backend_url' => 0,
    'container_class' => 0,
    'plugins_list_url' => 0,
    'plugins_hash' => 0,
    'plugins' => 0,
    'plugin' => 0,
    'delete_plugin_url' => 0,
    'plugin_names' => 0,
    'is_ajax' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_675595039d88b3_36084296',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_675595039d88b3_36084296')) {function content_675595039d88b3_36084296($_smarty_tpl) {?><link href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/codemirror/lib/codemirror.css" type="text/css" rel="stylesheet"/>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/codemirror/lib/codemirror.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/codemirror/mode/xml/xml.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/codemirror/mode/javascript/javascript.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/codemirror/mode/css/css.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/codemirror/mode/htmlmixed/htmlmixed.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/ace/ace.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>

<?php if (!empty($_smarty_tpl->tpl_vars['installer']->value)&&$_smarty_tpl->tpl_vars['wa']->value->installer){?>
    <?php $_smarty_tpl->tpl_vars['delete_plugin_url'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['wa_backend_url']->value)."installer/assets/?module=plugins&action=remove", null, 0);?>
    <style>
    #wa-plugin-list > li:hover > .dropdown.count { visibility: visible; }
    #wa-plugin-list > li > .dropdown.count {
        visibility: hidden;
        position: absolute;
        top: .5rem;
        right: .5rem;
    }
    </style>
<?php }?>

<?php $_smarty_tpl->tpl_vars['plugin_names'] = new Smarty_variable(array(), null, 0);?>
<div id="wa-plugins-container" class="content flexbox<?php if (!empty($_smarty_tpl->tpl_vars['container_class']->value)){?> <?php echo $_smarty_tpl->tpl_vars['container_class']->value;?>
<?php }?>">
    <div class="sidebar flexbox blank width-21rem bordered-right bordered-left">
            <div class="sidebar-body<?php if (empty($_smarty_tpl->tpl_vars['installer']->value)){?> custom-pt-16<?php }?>">

                <?php if ($_smarty_tpl->tpl_vars['wa']->value->user()->getRights('installer')){?>
                    <?php if (empty($_smarty_tpl->tpl_vars['plugins_list_url']->value)){?>
                        <?php $_smarty_tpl->tpl_vars['plugins_list_url'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['wa_backend_url']->value)."installer/?module=plugins&action=view&slug=".((string)$_smarty_tpl->tpl_vars['wa']->value->app()), null, 0);?>
                    <?php }?>
                    <div class="box custom-mt-8 custom-mb-0">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['plugins_hash']->value;?>
/" data-url="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['plugins_list_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="button webasyst-magic-wand shadowed full-width js-plugins-list custom-py-8">
                            <i class="icon"></i>
                            <?php echo sprintf('Plugins for %s',$_smarty_tpl->tpl_vars['wa']->value->appName());?>

                        </a>
                    </div>
                <?php }?>

                <h5 class="heading custom-mt-12">Installed</h5>
                <ul class="menu js-plugin-list" id="wa-plugin-list">
                    <?php  $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plugin']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['plugins']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->key => $_smarty_tpl->tpl_vars['plugin']->value){
$_smarty_tpl->tpl_vars['plugin']->_loop = true;
?>
                        <?php $_smarty_tpl->createLocalArrayVariable('plugin_names', null, 0);
$_smarty_tpl->tpl_vars['plugin_names']->value[$_smarty_tpl->tpl_vars['plugin']->value['id']] = htmlspecialchars((string)$_smarty_tpl->tpl_vars['plugin']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
                        <li id="plugin-<?php echo $_smarty_tpl->tpl_vars['plugin']->value['id'];?>
"<?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['custom_settings_url'])){?>data-url="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['custom_settings_url'];?>
"<?php }elseif(!empty($_smarty_tpl->tpl_vars['plugin']->value['custom_settings'])){?>data-settings="1"<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['delete_plugin_url']->value)){?>data-plugin-slug="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['wa']->value->app(), ENT_QUOTES, 'UTF-8', true);?>
/plugins/<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['plugin']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
"data-plugin-vendor="<?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['vendor'])){?><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['plugin']->value['vendor'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['plugins_hash']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['plugin']->value['id'];?>
/">
                                <?php if (!isset($_smarty_tpl->tpl_vars['plugin']->value['img'])){?>
                                    <i class="fas fa-plug"></i>
                                <?php }else{ ?>
                                    <span class="icon">
                                        <img src="<?php echo wa_url();?>
<?php echo $_smarty_tpl->tpl_vars['plugin']->value['img'];?>
" alt="" class="size-20" />
                                    </span>
                                <?php }?>
                                <span><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['plugin']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                                    <?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['description'])){?>
                                        <p class="hint"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['plugin']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
</p>
                                    <?php }?>
                                </span>
                                <span class="count" style="width:16px;"></span>
                            </a>

                            <?php if (!empty($_smarty_tpl->tpl_vars['delete_plugin_url']->value)){?>
                                <div class="dropdown count action">
                                    <a class="dropdown-toggle without-arrow text-gray custom-px-8 custom-py-4" href="javascript:void(0);">
                                        <i class="fas fa-ellipsis-h text-light-gray"></i>
                                    </a>
                                    <div class="dropdown-body right">
                                        <ul class="menu">
                                            <li>
                                                <a class="js-delete-plugin" href="javascript:void(0);">
                                                    <i class="fas fa-trash-alt text-light-gray"></i>
                                                    <span>Delete plugin</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            <?php }?>

                        </li>
                    <?php } ?>
                </ul>
                <?php if (empty($_smarty_tpl->tpl_vars['plugins']->value)){?>
                    <div class="align-center hint box custom-mt-16">
                        No plugins are installed.
                    </div>
                <?php }?>

            </div>
        </div>
    <div class="content">
        <div class="article wider">
            <div id="wa-plugins-content" class="article-body">
                <?php if (!empty($_smarty_tpl->tpl_vars['plugins']->value)||!empty($_smarty_tpl->tpl_vars['installer']->value)){?>Loading... <i class="fas fa-spinner fa-spin loading"></i><?php }?>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
(function ($) {
    var plugins_title = <?php echo json_encode(_ws('Plugins'));?>
;

    $.plugins = {
        options: {
            loading: '<i class="fas fa-spinner fa-spin loading"></i>',
            path: '<?php echo $_smarty_tpl->tpl_vars['plugins_hash']->value;?>
/',
            useIframeTransport: false
        },
        path: {
            plugin: false,
            tail: null,
            params: {

            }
        },
        icon: {
            submit: '<i class="fas fa-spinner fa-spin loading"></i>',
            success: '<i class="fas fa-check-circle"></i>',
            error: '<i class="fas fa-times-circle"></i>'
        },

        ready: false,
        $menu: null,
        /**
         * @var Number
         */
        timer: null,
        xhr: null,

        init: function (options) {
            this.options = $.extend(this.options, options || { });
            if (!this.ready) {
                this.ready = true;
                this.$menu = $('.js-plugin-list');

                // Set up AJAX to never use cache
                $.ajaxSetup({
                    cache: false
                });

                this.initDropdowns();

                if ($.wa) $.wa.errorHandler = function (xhr) {
                    if ((xhr.status === 403) || (xhr.status === 404)) {
                        var text = $(xhr.responseText);
                        if (text.find('.dialog-content').length) {
                            text = $('<div class="block double-padded"></div>').append(text.find('.dialog-content'));

                        } else {
                            text = $('<div class="block double-padded"></div>').append(text.find(':not(style)'));
                        }
                        $("#wa-plugins-content").empty().append(text);
                        return false;
                    }
                    return true;
                };

                this.dispatch(location.hash, true);

                if (this.$menu.find('> li:not(.js-plugins-list) > a').length) {
                    this.helper.loadJqUI(function() {
                        Sortable.create($.plugins.$menu[0], {
                            draggable: 'li:not(.js-plugins-list)',
                            animation: 150,
                            removeCloneOnHide: true,
                            onEnd: function (evt) {
                                const $item = $(evt.item);
                                const { oldIndex, newIndex } = evt;

                                const revertSort = () => {
                                    $item.swap(oldIndex);
                                };

                                $.ajax({
                                    type: 'POST',
                                    url: '?module=plugins&action=sort',
                                    data: {
                                        slug: $item.attr('id').replace(/^plugin-/, ''),
                                        pos: newIndex
                                    },
                                    success: function (data, textStatus, jqXHR) {
                                        if (!data || !data.status || data.status != "ok") {
                                            revertSort();
                                        }

                                    },
                                    error: function () {
                                        revertSort();
                                    }
                                });
                            }
                        });
                    });
                }
            }
        },

        initDropdowns: function() {
            var that = this,
                delete_plugin_url = this.options.delete_plugin_url;
            if (!delete_plugin_url || !$.fn.waDropdown || !$.waDialog) {
                $("#wa-plugin-list .dropdown").hide();
                return;
            }

            $("#wa-plugin-list .dropdown").waDropdown();

            $('#wa-plugin-list').on('click', '.js-delete-plugin', function() {
                var $plugin_li = $(this).closest('[data-plugin-slug]');
                if (!$plugin_li.length) {
                    return;
                }
                var slug = $plugin_li.data('plugin-slug');
                var vendor = $plugin_li.data('plugin-vendor');


                $.waDialog.confirm({
                    title: that.options.locale.confirm_delete_title,
                    cancel_button_title: that.options.locale.confirm_delete_cancel_button,
                    success_button_title: that.options.locale.confirm_delete_confirm_button,
                    cancel_button_class: 'light-gray',
                    success_button_class: 'danger',
                    onSuccess() {

                        var data = { extras_id: {} };
                        data.extras_id[slug] = vendor;
                        $.post(delete_plugin_url, data).then(function(r) {
                            window.location.reload();
                        });

                    }
                });
            });
        },

        parsePath: function (path) {
            path = path.replace(new RegExp('^.*' + this.options.path), '');

            var splited_array = path.split("/"),
                tail = (splited_array.length > 1) ? splited_array[1] : null;

            return {
                plugin: path.replace(/\/.*$/, '') || null,
                tail: tail,
                raw: path
            };
        },

        dispatch: function (hash, force) {
            var $plugin;
            // in specific plugin inline script set it flag to true for iframe form posting
            this.options.useIframeTransport = false;

            if (hash === undefined) {
                hash = window.location.hash;
            }

            if (!hash) {
                $plugin = this.$menu.find('li:first > a:first');
                if ($plugin.length) {
                    hash = $plugin.attr('href');
                }
            }

            //
            // So, at this point `hash` can be either the full weindow.location.hash,
            // OR a part of the hash passed to us by wrapping controller
            // e.g. see pluginsAction in site.js
            //
            // parsePath() is supposed to deal with this mess
            var path = this.parsePath(hash);

            // Set a proper window.location.hash if we managed to parse the plugin
            if (path && path.plugin) {
                var full_hash = this.options.path + path.plugin;
                if (window.location.hash != full_hash) {
                    if (window.history && window.history.replaceState) {
                        window.history.replaceState(null, null, full_hash);
                    } else {
                        window.location.hash = full_hash;
                    }
                }
            }

            this.path.dispatch = path;
            var load = force || (path.plugin !== this.path.plugin);

            /* change plugins section */
            if (!load) {
                return;
            }

            var $content = $('#wa-plugins-content');
            this.path.tail = null;

            $plugin = $(path.plugin ? ("#plugin-" + path.plugin) : '.js-plugins-list');
            if (!$plugin.length) {
                let hash = $('.js-plugin-list').find('> li:first-child > a').attr('href');
                if (hash) {
                    $.wa.setHash(hash);
                    setTimeout(function() { $.plugins.dispatch(location.hash, true); }, 0);
                }
                return;
            }

            var url = this.helper.getContentUrl($plugin, path);
            if (!url) {
              return;
            }

            this.path.plugin = path.plugin;

            if (this.xhr) {
                this.xhr.abort();
            }

            $content.html(this.options.loading);
            var self = this;
            this.xhr = $.ajax({
                url: url,
                success: function (data) {
                    self.xhr = null;
                    if (self.path.plugin == path.plugin) {
                        $content.html(data);
                        // update title
                        if (self.path.plugin) {
                            document.title = self.options.plugin_names[self.path.plugin] + self.options.title_suffix;
                        } else {
                            document.title = plugins_title + self.options.title_suffix;
                        }

                        self.$menu.find('li.selected').removeClass('selected');
                        var href = self.options.path + (self.path.plugin ? self.path.plugin + '/' : '');
                        self.$menu.find('a[href="' + href + '"]').parents('li').addClass('selected');

                        $(document).trigger('wa_loaded');

                        if (!self.options.useIframeTransport) {
                            $('#plugins-settings-form').submit(function () {
                                self.saveHandlerAjax(this);
                                return false;
                            });
                        } else {
                            $('#plugins-settings-form').submit(function () {
                                self.saveHandlerIframe(this);
                            });
                        }
                    }
                }
            });
        },

        saveHandlerIframe: function (form) {
            var self = this;
            this.message('submit');
            $("#plugins-settings-iframe").one('load', function () {
                var r = null;
                try {
                    r = $.parseJSON($(this).contents().find('body').html());
                } catch (e) {
                }
                if (r && r.status == 'ok') {
                    var message = 'Saved';
                    if (r.data && r.data.message) {
                        message = r.data.message;
                    }
                    self.message('success', message);
                    $(self).trigger('success', [r]);
                } else {
                    self.message('error', r && r.errors || 'parsererror');
                    $(self).trigger('error', [r]);
                }
            });
        },
        saveHandlerAjax: function (form) {
            var self = this;
            this.message('submit');
            var $form = $(form),
                fields_data = $form.serializeArray(),
                form_data = new FormData();

            $.each(fields_data, function () {
                var field = $(this)[0];
                form_data.append(field.name, field.value);
            });

            // Add files
            var $file_controls = $form.find('input[type="file"]');
            $file_controls.each(function (i, input) {
                var $input = $(input);

                if (input['files'].length) {
                    form_data.append($input.attr('name'), input['files'][0]);
                }
            });

            $.ajax({
                url: $form.attr('action'),
                data: form_data,
                cache: false,
                contentType: false,
                processData: false,
                type: 'POST',
                success: function (data, textStatus, jqXHR) {
                    if (data && (data.status == 'ok')) {
                        var message = 'Saved';
                        if (data.data && data.data.message) {
                            message = data.data.message;
                        }
                        self.message('success', message);
                        $(self).trigger('success', [data]);
                    } else {
                        self.message('error', data.errors || []);
                        $(self).trigger('error', [data]);
                    }
                },
                error: function (jqXHR, errorText) {
                    self.message('error', [
                        [errorText]
                    ]);
                    $(self).trigger('error', [errorText]);
                }
            });
        },

        helper: {
            getContentUrl: function ($item, path) {

                var url = '';
                if ($item.data('url')) {
                    url = $item.data('url');
                } else if ($item.data('settings')) {
                    url = '?plugin=' + path.plugin + '&module=settings';
                } else if (path.plugin) {
                    url = '?module=plugins&action=settings&id=' + path.plugin;
                }

                url += ( path.tail ? "&" + path.tail : "" );

                return url;
            },

            loadJqUI: function(callback) {
                var files = [];
                if (!$.ui) {
                    files.push('wa-content/js/jquery-ui/jquery.ui.core.min.js');
                }
                if (!$.widget) {
                    files.push('wa-content/js/jquery-ui/jquery.ui.widget.min.js');
                }
                if (!$.ui || !$.ui.mouse) {
                    files.push('wa-content/js/jquery-ui/jquery.ui.mouse.min.js');
                }
                if (typeof Sortable === "undefined") {
                    files.push('wa-content/js/sortable/sortable.min.js');
                }
                if (!$().swap) {
                    files.push('wa-content/js/jquery-plugins/jquery.swap.js');
                }

                if (files.length) {
                    $.when.apply($, files.map(function(file) {
                        return $.getScript($.plugins.options.wa_url + file);
                    })).then(callback);
                } else {
                    callback();
                }
            }
        },

        message: function (status, message) {
            /* enable previous disabled inputs */

            var $container = $('#plugins-settings-form-status');
            $container.empty().show();
            var $parent = $container.parents('div.value');
            $parent.removeClass('errormsg successmsg status');

            if (this.timer) {
                clearTimeout(this.timer);
            }
            var timeout = null;
            $container.append(this.icon[status] || '');
            switch (status) {
                case 'submit':
                    $parent.addClass('status');
                    break;
                case 'error':
                    $parent.addClass('errormsg');
                    for (var i = 0; i < message.length; i++) {
                        $container.append(message[i][0]);
                    }
                    timeout = 20000;
                    break;
                case 'success':
                    if (message) {
                        $parent.addClass('successmsg');
                        $container.append(message);
                    }
                    timeout = 3000;
                    break;
            }
            if (timeout) {
                this.timer = setTimeout(function () {
                    $parent.removeClass('errormsg successmsg status');
                    $container.empty().show();
                }, timeout);
            }
        }
    };


    $.plugins.init({
        'wa_url': <?php echo json_encode($_smarty_tpl->tpl_vars['wa_url']->value);?>
,
        'loading': <?php echo json_encode('<div class="box">Loading... <i class="fas fa-spinner fa-spin loading"></i></div>');?>
,
        'title_suffix': ' — <?php echo strtr($_smarty_tpl->tpl_vars['wa']->value->accountName(false), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        'plugin_names': <?php echo json_encode($_smarty_tpl->tpl_vars['plugin_names']->value);?>
,

        'app_id': <?php echo json_encode($_smarty_tpl->tpl_vars['wa']->value->app());?>
,
        'delete_plugin_url': <?php echo json_encode((($tmp = @$_smarty_tpl->tpl_vars['delete_plugin_url']->value)===null||$tmp==='' ? null : $tmp));?>
,
        locale: {
            confirm_delete_title: <?php echo json_encode(_wd('installer',"This will delete the product’s source code and data, without a recovery option. Are you sure?"));?>
,
            confirm_delete_confirm_button: <?php echo json_encode(_w('Delete'));?>
,
            confirm_delete_cancel_button: <?php echo json_encode(_w('Cancel'));?>

        }
    });

    <?php if (empty($_smarty_tpl->tpl_vars['is_ajax']->value)){?>
        $('.js-plugin-list > li[id] > a, .js-plugins-list').on('click', function  () {
            $.plugins.dispatch($(this).attr('href'), true);
            return false;
        });
    <?php }?>

})(jQuery);
</script>
<?php }} ?>