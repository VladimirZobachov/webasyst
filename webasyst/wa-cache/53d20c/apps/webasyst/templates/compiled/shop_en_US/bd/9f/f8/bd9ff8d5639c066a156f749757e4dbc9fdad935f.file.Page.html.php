<?php /* Smarty version Smarty-3.1.14, created on 2024-12-08 12:46:40
         compiled from "/var/www/html/wa-system/page/templates/Page.html" */ ?>
<?php /*%%SmartyHeaderCode:255136961675595308715d4-29313962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd9ff8d5639c066a156f749757e4dbc9fdad935f' => 
    array (
      0 => '/var/www/html/wa-system/page/templates/Page.html',
      1 => 1715088900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '255136961675595308715d4-29313962',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'options' => 0,
    'wa_url' => 0,
    'wa' => 0,
    'lang' => 0,
    'sidebar' => 0,
    'routes' => 0,
    'r' => 0,
    'route' => 0,
    'unsettled_pages_count' => 0,
    'domain' => 0,
    'p' => 0,
    'page_url' => 0,
    'backend_pages_sidebar' => 0,
    '_' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_67559530a40e44_65630056',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_67559530a40e44_65630056')) {function content_67559530a40e44_65630056($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/html/wa-system/vendors/smarty3/plugins/modifier.truncate.php';
?><?php if ($_smarty_tpl->tpl_vars['options']->value['js']['storage']){?>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery.json.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery.store.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
    <script>
    if (!$.storage) {
        $.storage = new $.store();
    }
    </script>
<?php }?>

<script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.draggable.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.droppable.min.js"></script>

<?php if ($_smarty_tpl->tpl_vars['options']->value['js']['ace']||!$_smarty_tpl->tpl_vars['options']->value['is_ajax']){?>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/ace/ace.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
<?php }?>

<script>(function() { "use strict";

    var lang = <?php echo json_encode($_smarty_tpl->tpl_vars['lang']->value);?>
;
    var wa_url = <?php echo json_encode($_smarty_tpl->tpl_vars['wa_url']->value);?>
;
    var framework_version = <?php echo json_encode($_smarty_tpl->tpl_vars['wa']->value->version(true));?>
;

    // This promise is resolved when all WYSIWYG files are loaded
    // and $.fn.waEditor() function is ready.
    $.wa_editor_ready = (function() {
        // Load $.wa.loadFiles() if not loaded already
        if (!$.wa || !$.wa.loadFiles) {
            return $.ajax({
                url: wa_url+"wa-content/js/jquery-wa/wa.core.js?v"+framework_version,
                dataType: "script",
                cache: true
            });
        } else {
            return $.Deferred().resolve().promise();
        }
    }()).then(function() {
        var to_load = [];
        var load_locale = false;

        // Load Redactor II unless already loaded by application
        if (!$.Redactor) {
            to_load.push(wa_url+"wa-content/js/redactor/2/redactor.css?v"+framework_version);
            to_load.push(wa_url+"wa-content/js/redactor/2/redactor.min.js?v"+framework_version);
            load_locale = lang !== 'en';
        }

        if(!$.fileupload) {
            to_load.push(wa_url+"wa-content/js/jquery-plugins/fileupload/jquery.fileupload.js?v"+framework_version);
        }

        return $.wa.loadFiles(to_load).then(function() {
            if (load_locale) {
                // Load Redactor II locale when its ready
                return $.wa.loadFiles(wa_url+"wa-content/js/redactor/2/"+lang+".js?v"+framework_version);
            } else {
                return true;
            }
        }).then(function() {
            if ($.Redactor.VERSION.substr(0, 3) == '10.') {
                // Old RedactorI used by legacy application
                return $.wa.loadFiles(wa_url+"wa-content/js/jquery-wa/editor.js?v"+framework_version).then(function() {
                    return 'waEditor';
                });
            } else {
                // New RedactorII
                return $.wa.loadFiles(wa_url+"wa-content/js/jquery-wa/editor2.js?v"+framework_version).then(function() {
                    return 'waEditor2';
                });
            }
        });
    });

})();</script>

<style type="text/css">
    .wa-pages .wa-editor-core-wrapper { margin-left: auto; }
    .wa-pages .ace { padding: 0 2rem; position: relative; }
    .wa-pages .wa-editor-upload-img { position: absolute; top: 15px; right: 12px; z-index: 80; cursor: pointer; background-color: #f9f9f9; border: 1px solid #ccc; transition: all 0.2s ease; width: 1.8rem; height: 1.8rem; text-align: center; line-height: 1.8rem;
    }
    .wa-pages .heading { word-wrap: break-word; word-break: break-all; position: relative; margin-right: 15px; }
    .wa-pages .heading span.count { position: absolute; right: -15px; }

    .wa-page-gray { color: #AAA;}
    .wa-page-wysiwyg-html-toggle { margin-right: 17px; margin-top: -20px; float: right; margin-bottom: 0; }
    .wa-page-wysiwyg-html-toggle li { list-style: none;float: left;}
    .wa-page-wysiwyg-html-toggle li.selected a { background: white;}
    .wa-page-wysiwyg-html-toggle li a { display: block; color: #888; font-weight: bold; padding: 4px 12px 6px; text-decoration: none; font-size: 0.9em; }

    .wa-page-urls a i { margin: 0}

    .block-pages { margin-bottom: 2rem; }
    .block-pages .heading { margin-top: 1rem; cursor: pointer; }
    .block-pages .heading span { word-break: break-all; }
    .block-pages ul.menu li a { word-break: break-all; }
    .block-pages.unsettled ul.menu a, .block-pages.unsettled ul.menu a .hint { color: var(--text-color-hint) !important; }
    .block-pages.unsettled svg { color: var(--text-color-hint); }
    .block-pages.unsettled .wa-page-settle svg { font-size: .8rem; }

    a.wa-page-link .action { visibility: hidden; }
    a.wa-page-link > .wa-page-expander { flex: 0; position: relative; }
    a.wa-page-link > .wa-page-expander > * { position: absolute; top: 50%; transform: translateY(-50%); left: -11px; padding: 3px; }
    .block-pages a.wa-page-link > svg { color: var(--accent-color); }
    a.wa-page-link:hover .action { visibility: visible; }
    .wa-page-gray-toolbar { flex-wrap: wrap; }
    .wa-page-gray-toolbar > ul { margin: 0 }
    #wa-page-settings { flex: 1 0 100%; margin-top: 0; }
    #wa-page-advanced-params { margin-top: 2rem; }

    .block-pages ul:not(:has(li.dr)) li.drag-newposition { height: 5px !important; transform: translateY(3px); }
    .block-pages ul li.drag-newposition { height: 2px; }
    .block-pages ul li.drag-newposition.active { border-top: 3px solid var(--text-color-hint); background: none; }
    .wa-editor-core-wrapper .wa-editor-wysiwyg-html-toggle { padding-left:0 }
    .wa-editor-core-wrapper .wa-editor-wysiwyg-html-toggle > li > a { padding-right: 0; padding-left: 0; }
    .wa-editor-core-wrapper .redactor-box { background: var(--background-color-blank); margin: 0 1rem; border-radius: 0.75rem; overflow: hidden; }
    .wa-editor-core-wrapper .redactor-toolbar { box-shadow: none; border-bottom: 1px solid var(--border-color-soft); background: var(--background-color-blank); }
    .wa-editor-core-wrapper .redactor-layer { border: 0 none; background: var(--background-color-blank); }
    .wa-ibutton-checkbox ul.chips li { padding: 1px 0 10px; vertical-align: middle;}

    .wa-dropdown { float: right; margin: 2px 20px 0 0; }
    .wa-dropdown .wa-dropdown-content { padding: 20px;  width: auto; width: 760px;  min-height: 180px; max-height: 310px; overflow: auto; overflow-x: hidden;}
    .wa-dropdown .wa-dropdown-content .field .name .inline-link b i { font-weight: bold; }
    .wa-dropdown .wa-dropdown-content .field .name { width: 330px; }
    .wa-dropdown .wa-dropdown-content .field .value { margin-left: 350px; }
    .wa-dropdown .wa-dropdown-content .field.subfield .name { margin-left: 20px; }
    .wa-dropdown .wa-dropdown-content .field.subfield .name .inline-link b i { font-weight: normal; font-size: 0.9em; }
    .wa-dropdown .wa-drop-link { position: relative; padding: 6px 0 0 ; display: block;}
    .wa-dropdown .wa-dropdown-block { display: none; position: absolute; bottom:1.4em; right:0; background: #F3F3F3; border: 2px solid #AAAAAA; box-shadow: 0 2px 10px #777; -webkit-box-shadow: 0 2px 10px #777; -moz-box-shadow: 0 2px 10px #777; -o-box-shadow: 0 2px 10px #777; z-index: 1054; }
    .wa-dropdown ul.tabs { height: 45px; padding-top: 6px; }
    .wa-dropdown ul.tabs li.selected a { background: #fff;}
    .wa-dropdown ul.tabs li.no-tab { min-width: 70px;}
    .wa-dropdown ul.tabs li a { position: relative; padding:5px 15px 8px; height: 30px;}
    .wa-dropdown ul.tabs li.no-tab { padding:4px 0.8em 0 40px;}
    .wa-dropdown ul.tabs li.no-tab .hint { font-weight: bold;}
    .wa-dropdown ul.tabs li.no-tab p { margin: 0 ; line-height: 16px; white-space: nowrap;}
    .wa-dropdown ul.tabs li.no-tab img { float: left; vertical-align: top; margin:2px 0 0 -32px; width: 24px; height: 24px; }
    .wa-dropdown .field .name { word-wrap: break-word; }

    #wa-page-advanced-params-link { margin-left: 166px; }
</style>

<?php if ($_smarty_tpl->tpl_vars['sidebar']->value){?>
    <div class="sidebar width-21rem bordered-right bordered-left blank">
        <?php  $_smarty_tpl->tpl_vars['route'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['route']->_loop = false;
 $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['routes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['route']->key => $_smarty_tpl->tpl_vars['route']->value){
$_smarty_tpl->tpl_vars['route']->_loop = true;
 $_smarty_tpl->tpl_vars['r']->value = $_smarty_tpl->tpl_vars['route']->key;
?>
            <?php if ((count($_smarty_tpl->tpl_vars['routes']->value)>1)&&!$_smarty_tpl->tpl_vars['r']->value&&is_array($_smarty_tpl->tpl_vars['route']->value['pages'])&&$_smarty_tpl->tpl_vars['route']->value['pages']){?>
                <?php $_smarty_tpl->tpl_vars['unsettled_pages_count'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['route']->value['pages']), null, 0);?>
            <?php }else{ ?>
                <?php $_smarty_tpl->tpl_vars['unsettled_pages_count'] = new Smarty_variable(0, null, 0);?>
            <?php }?>
            <section class="block-pages<?php if ($_smarty_tpl->tpl_vars['unsettled_pages_count']->value){?> unsettled<?php }?>">
                <header class="heading<?php if (!$_smarty_tpl->tpl_vars['unsettled_pages_count']->value){?> black<?php }?>">
                    <span>
                        <span class="icon text-gray cursor-pointer js-collapse-handler">
                            <i class="fas fa-caret-down js-icon"></i>
                        </span>
                        <span><?php if ($_smarty_tpl->tpl_vars['r']->value){?><?php echo smarty_modifier_truncate(htmlspecialchars((string)str_replace('www.','',$_smarty_tpl->tpl_vars['route']->value['url_decoded']), ENT_QUOTES, 'UTF-8', true),23,'...',false,true);?>
<?php }else{ ?>Unpublished<?php }?></span>
                    </span>
                    <?php if ($_smarty_tpl->tpl_vars['unsettled_pages_count']->value){?>
                        <a id="wa-page-settle" class="count action wa-page-settle js-page-settle custom-ml-8" href="javascript:void(0);">
                            <i class="fas fa-exclamation-triangle text-yellow"></i>
                        </a>
                    <?php }?>
                    <a class="count action wa-page-add no-parent" href="javascript:void(0);">
                        <i class="fas fa-plus-circle text-green js-add-page-icon" <?php if (!$_smarty_tpl->tpl_vars['r']->value){?>style="display:none"<?php }?>></i>
                        <span class="count js-add-page-count" style="display: none;"></span>
                    </a>
                </header>

                <ul class="collapsible custom-px-16 menu" data-domain="<?php if (!$_smarty_tpl->tpl_vars['r']->value&&isset($_smarty_tpl->tpl_vars['domain']->value)){?><?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['route']->value['domain'];?>
<?php }?>" data-route="<?php echo $_smarty_tpl->tpl_vars['route']->value['route'];?>
">
                    <li class="drag-newposition"></li>
                    <?php if (!empty($_smarty_tpl->tpl_vars['route']->value['pages'])){?>
                        <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['route']->value['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
                            <li class="rounded dr" id="page-<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" data-page-id="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
">
                                <a class="wa-page-link" href="<?php echo $_smarty_tpl->tpl_vars['page_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
">
                                    <?php if (!empty($_smarty_tpl->tpl_vars['p']->value['childs'])){?>
                                        <span class="js-expander wa-page-expander custom-mr-4"><i class="fas fa-caret-down js-icon"></i></span>
                                    <?php }?>
                                    <i class="fas fa-<?php if ($_smarty_tpl->tpl_vars['p']->value['status']){?>file<?php }else{ ?>pencil<?php }?>-alt"></i>
                                    <span>
                                        <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                                        <span class="hint">/<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['p']->value['full_url'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    </span>
                                    <span class="count action small wa-page-add">
                                        <i class="fas fa-plus-circle fa-xs text-green"></i>
                                    </span>
                                </a>
                                <?php if (!empty($_smarty_tpl->tpl_vars['p']->value['childs'])){?>
                                    <?php echo waPageActions::printPagesTree($_smarty_tpl->tpl_vars['p']->value,$_smarty_tpl->tpl_vars['p']->value['childs'],$_smarty_tpl->tpl_vars['page_url']->value);?>

                                <?php }?>
                            </li>
                            <li class="drag-newposition"></li>
                        <?php } ?>
                    <?php }?>
                </ul>
            </section>
        <?php } ?>

        <?php if ($_smarty_tpl->tpl_vars['unsettled_pages_count']->value){?>
            <div class="dialog" id="wa-page-settle-dialog">
                <div class="dialog-background"></div>
                <form class="dialog-body" method="post" action="?module=pages&action=settle">
                    <a href="javascript:void(0);" class="dialog-close js-close-dialog"><i class="fas fa-times"></i></a>
                    <h3 class="dialog-header">Unpublished pages</h3>
                    <div class="dialog-content small">
                        <p>These pages are not connected to any of the site’s structure rules and are therefore not displayed on your site. To publish these pages now, select a site structure rule for them:</p>
                        <div class="wa-select">
                            <select>
                                <option value=""></option>
                                <?php  $_smarty_tpl->tpl_vars['route'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['route']->_loop = false;
 $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['routes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['route']->key => $_smarty_tpl->tpl_vars['route']->value){
$_smarty_tpl->tpl_vars['route']->_loop = true;
 $_smarty_tpl->tpl_vars['r']->value = $_smarty_tpl->tpl_vars['route']->key;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['r']->value){?>
                                        <option data-domain="<?php echo $_smarty_tpl->tpl_vars['route']->value['domain'];?>
" data-route="<?php echo $_smarty_tpl->tpl_vars['route']->value['route'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['r']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value;?>
</option>
                                    <?php }?>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <footer class="dialog-footer">
                        <input class="button" type="submit" value="Publish">
                        <a class="js-close-dialog button light-gray" href="javascript:void(0);">Cancel</a>
                    </footer>
                </form>
            </div>

            <script type="text/javascript">
            $(".js-page-settle").on('click', function (e) {
                e.preventDefault();
                $wrapper = $("#wa-page-settle-dialog").clone();
                $.waDialog({
                    $wrapper,
                    onOpen($dialog) {
                        const $form = $dialog.find('form');
                        $form.on('submit', function () {
                            let o = $form.find('select option:selected');
                            if (o.data('domain')) {
                                $.post($form.attr('action'), {
                                    domain:o.data('domain'), route:o.data('route')
                                }, function () {
                                    location.reload();
                                }, "json");
                            }
                            return false;
                        })
                    }
                });
            });
            </script>
        <?php }?>

        <!-- plugin hook: 'backend_pages_sidebar' -->
        
        <?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_pages_sidebar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?>

    </div>
<?php }?>
<div id="wa-page-container" class="wa-pages content not-blank">
    Loading... <i class="fas fa-spinner fa-spin loading"></i>
</div>
<script type="text/javascript">
    var wa_url = "<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
";
    var wa_app = "<?php echo $_smarty_tpl->tpl_vars['wa']->value->app();?>
";

    function changeCollapseIcon($icon, direction_or_class = 'caret-right') {
        const class_right = 'fa-caret-right',
              class_down = 'fa-caret-down';

        if (direction_or_class === 'caret-down') {
            $icon.attr('data-icon', direction_or_class).removeClass(class_right).addClass(class_down);
        } else if (direction_or_class === 'caret-right') {
            $icon.attr('data-icon', direction_or_class).removeClass(class_down).addClass(class_right);
        } else {
            $icon.removeClass(class_down).removeClass(class_right).addClass(direction_or_class);
        }
    }
    function waExpand(page_id) {
        var t = $('#page-'+page_id);
        var c = t.children('ul');
        if(c.length) {
            changeCollapseIcon(t.children('a').children('.js-expander').children(), 'caret-down');
            c.show();
        }

        var parent_id = t.parent().data('parent-id');
        if(parent_id) waExpand(parent_id);
    }

    function waLoadPage(params) {
        $(".block-pages ul li.selected").removeClass('selected');
        if (params % 1 === 0) {
            $("#page-" + params).addClass('selected');
            waExpand(params);
        }
        $("#wa-page-container").html('<div class="content">' +
            'Loading... <i class="fas fa-spinner wa-animation-spin loading"></i>' +
            '</div>');
        $("#wa-page-container").load("?module=pages&action=edit&id=" + params);
    }

    if (!jQuery.fn.liveDraggable) {
        jQuery.fn.liveDraggable = function (opts) {
            this.each(function(i,el) {
                var self = $(this);
                if (self.data('init_draggable')) {
                    self.off("mouseover", self.data('init_draggable'));
                }
            });
            this.on("mouseover", function() {
                var self = $(this);
                if (!self.data("init_draggable")) {
                    self.data("init_draggable", arguments.callee).draggable(opts);
                }
            });
        };
    }

    if (!jQuery.fn.liveDroppable) {
        jQuery.fn.liveDroppable = function (opts) {
            this.each(function(i,el) {
                var self = $(this);
                if (self.data('init_droppable')) {
                    self.off("mouseover", self.data('init_droppable'));
                }
            });

            var init = function() {
                var self = $(this);
                if (!self.data("init_droppable")) {
                    self.data("init_droppable", arguments.callee).droppable(opts);
                    self.mouseover();
                }
            };
            init.call(this);
            this.off("mouseover", init).on("mouseover", init);
        };
    }


    $(function () {
        function waClose(page_id) {
            var t = $('#page-'+page_id);
            var c = t.children('ul');
            var $icon = t.children('a').children('.js-expander').children();

            if(c.length) {
                changeCollapseIcon($icon, 'caret-right');
                c.hide();
            } else {
                changeCollapseIcon($icon, 'fa-notebook');
            }
        }

        $('.block-pages').on('click', '.js-expander', function(e) {
            e.preventDefault();
            e.stopPropagation();

            let $target = e.target;
            if ($target.tagName === 'path') {
                $target = $target.parentElement
            }

            var $icon = $($target);
            var page_id = $icon.closest('li').attr('id').replace(/page-/g, '');
            var k = wa_app+'/pages/page-' + page_id;

            if($target.classList.contains('fa-caret-right')) {
                waExpand(page_id);
                $.storage.del(k);
            } else {
                waClose(page_id);
                $.storage.set(k, 1);
            }
        });

        $(".block-pages").on('click', '.wa-page-add', function(e) {
            e.preventDefault();
            e.stopPropagation();
            let $target = e.target;
            if ($target.tagName === 'path') {
                $target = $target.parentElement
            }
            if($(this).hasClass('wa-page-add') || $target.classList.contains('wa-page-add')) {
                const that = $(this),
                    $li = $('<li class="rounded"><a class="wa-page-link" href="javascript:void(0);"><i class="fas fa-file-alt"></i><span>New page</span></a></li>');

                if (that.hasClass('no-parent')) {
                    that.closest('.heading').next('ul').append($li);
                } else {
                    const p = that.closest("li");
                    if (!p.children('ul').length) {
                        p.append('<ul class="menu" data-parent-id="' + p.attr('id').replace(/page-/, '') + '"></ul>');
                    }
                    p.children('ul').append($li);
                }

                $li.children('a').click();
            }
        });

        $(".block-pages ul").on('click', 'li a.wa-page-link', function (e) {
            let $target = e.target;
            if ($target.tagName === 'path') {
                $target = $target.parentElement
            }

            if ($(e.target).closest('.js-expander').hasClass('js-expander') || $(e.target).closest('.wa-page-add').hasClass('wa-page-add')) return true;

            const p = $(this).parent();
            let id = p.attr('data-page-id') || false;
            if (id) {
                <?php if ($_smarty_tpl->tpl_vars['options']->value['is_ajax']){?>
                let new_hash = <?php echo json_encode($_smarty_tpl->tpl_vars['page_url']->value);?>
 +id;
                if (new_hash == location.hash) {
                    $.wa.site.dispatch();
                } else {
                    $.wa.setHash(new_hash);
                }
                return false;
                <?php }else{ ?>
                waLoadPage(id);
                <?php }?>
            } else {
                const ul = p.closest('ul');
                if (ul.data('parent-id')) {
                    waLoadPage('&parent_id=' + ul.data('parent-id'));
                } else {
                    waLoadPage('&domain=' + ul.data('domain') + '&route=' + ul.data('route'));
                }
                $(this).parent().addClass('selected');
            }
            return <?php if ($_smarty_tpl->tpl_vars['options']->value['is_ajax']){?>false<?php }else{ ?>true<?php }?>;
        });

        var page_id = location.hash.replace(/.*?\/(\d+)\/?/, '$1');
        if (page_id && page_id % 1 === 0 && $("#page-" + page_id).length > 0) {
            waLoadPage(page_id);
        } else {
            if ($(".block-pages ul li a.wa-page-link").length) {
                $(".block-pages ul li a.wa-page-link:first").click();
            } else {
                $(".block-pages .wa-page-add:first").click();
            }
        }

        $(".block-pages .heading").on('click', function (e, not_save) {
            if ($(e.target).closest('.wa-page-add').hasClass('wa-page-add')) return true;

            var h = $(this);
            var ul = h.next('ul');
            var k = wa_app+'/pages/domain-' + ul.data('domain') + '/' + ul.data('route');
            var is_save = !(not_save || false)
            if (is_save) {
                if (!$.storage.get(k)) {
                    $.storage.set(k, 1);
                } else {
                    $.storage.del(k);
                }
            }

            var $icon_add_page = h.find('.js-add-page-icon'),
                $count = h.find('.js-add-page-count'),
                $icon = h.find('.js-icon');

            if (ul.is(':visible')) {
                $icon_add_page.hide();
                changeCollapseIcon($icon, 'caret-right');
                $count.html(ul.find('a.wa-page-link').length).show();
                ul.hide();
            } else {
                $count.hide();
                $icon_add_page.show();
                changeCollapseIcon($icon, 'caret-down');
                ul.show();
            }
        });

        $(".block-pages .heading").each(function () {
            var ul = $(this).next('ul');
            var k = wa_app+'/pages/domain-' + ul.data('domain') + '/' + ul.data('route');
            if ($.storage.get(k)) {
                $(this).trigger('click', true);
            }
        });

        
        $.initPagesDraggable = function () {
            $("li.dr", $('.block-pages ul')).liveDraggable({
                refreshPositions: true,
                revert: "invalid",
                helper: function() {
                    var self = $(this);
                    var parent = self.parents('.block-pages:first').find('>ul');
                    return self.clone().addClass('ui-draggable helper').css({
                        position: 'absolute'
                    }).appendTo(parent);
                },
                cursor: "move",
                opacity: 0.75,
                zIndex: 9999,
                distance: 5,
                cursorAt: { left: 5 }
            });

            $("li.drag-newposition", $('.block-pages ul')).liveDroppable({
                accept: 'li.dr',
                tolerance: 'pointer',
                greedy: true,
                hoverClass: 'active',
                over: function() {
                    $(this).parent().parent().addClass('drag-active');
                },
                out: function() {
                    $(this).parent().parent().removeClass('drag-active');
                },
                deactivate: function(event, ui) {
                    var self = $(this);
                    if (self.is(':animated') || self.hasClass('dragging')) {
                        self.stop().animate({height: '2px'}, 300, null, function() {self.removeClass('dragging');});
                    }
                    self.parent().parent().removeClass('drag-active');
                },
                drop: function(event, ui) {
                    var self = $(this);
                    var dr = ui.draggable;
                    var id = dr.attr('id').replace(/page-/, '');
                    var ul = self.parent();

                    var before_id = 0;
                    var before = self.next('li.dr');
                    if (before.length && !before.hasClass('helper')) {
                        before_id = before.attr('id').replace(/page-/, '');
                    }

                    var sep = dr.next();
                    // means that actually nothing will be changed
                    if (sep.get(0) == self.get(0) || id == before_id) {
                        return false;
                    }
                    var data = {
                        id: id,
                        route: ul.attr('data-route') || '',
                        domain: ul.attr('data-domain') || '',
                        parent_id: ul.attr('data-parent-id') || 0,
                        before_id: before_id
                    };

                    var home = dr.prev();

                    sep.insertAfter(self);
                    dr.insertAfter(self);

                    waPageMove(data, function() {}, function() {
                            // restore
                            home.after(dr.next()).after(dr);
                    });
                }
            });

            $(".heading", $('.block-pages')).liveDroppable({
                accept: 'li.dr',
                tolerance: 'pointer',
                greedy: true,
                over: function() {
                    if ($(this).find('.fa-caret-right').length) {
                        $(this).trigger('click');
                    }
                }
            });

            $("li.dr a", $('.block-pages ul')).liveDroppable({
                accept: 'li.dr',
                tolerance: 'pointer',
                greedy: true,
                out: function() {
                    $(this).parent().removeClass('drag-newparent');
                },
                over: function(event, ui) {
                    var self = $(this).parent(); // li
                    self.addClass('drag-newparent');

                    var dr = ui.draggable;
                    var drSelector = '.dr[id!="'+dr.attr('id')+'"]';
                    var nearby = $();

                    // helper to widen all spaces below the current li and above next li (which may be on another tree level, but not inside current)
                    var addBelow = function(nearby, current) {
                        if (!current.length) {
                            return nearby;
                        }
                        nearby = nearby.add(current.nextUntil(drSelector).filter('li.drag-newposition'));
                        if (current.nextAll(drSelector).length > 0) {
                            return nearby;
                        }
                        return arguments.callee(nearby, current.parent().closest('li'));
                    }

                    // widen all spaces above the current li and below the prev li (which may be on another tree level)
                    var above = self.prevAll(drSelector+':first');
                    if(above.length > 0) {
                        var d = above.find(drSelector);
                        if (d.length > 0) {
                            nearby = addBelow(nearby, d.last());
                        } else {
                            nearby = addBelow(nearby, above);
                        }
                    } else {
                        nearby = nearby.add(self.prevUntil(drSelector).filter('li.drag-newposition'));
                    }

                    // widen all spaces below the current li and above the next li (which may be on another tree level)
                    if (self.children('ul').children(drSelector).length > 0) {
                        nearby = nearby.add(self.children('ul').children('li.drag-newposition:first'));
                    } else {
                        nearby = addBelow(nearby, self);
                    }

                    var old = $('.drag-newposition:animated, .drag-newposition.dragging').not(nearby);

                    old.stop().animate({height: '2px'}, 300, null, function(){old.removeClass('dragging');});
                    nearby.stop().animate({height: '10px'}, 300, null, function(){nearby.addClass('dragging');});
                },
                drop: function(event, ui) {
                    var self = $(this).parent().removeClass('drag-newparent'); // li
                    var parent_id = self.attr('id').replace(/page-/, '');
                    var dr = ui.draggable;

                    var id = dr.attr('id').replace(/page-/, '');
                    if (id == parent_id) {
                        return false;
                    }

                    var ul;
                    var sep  = dr.next();
                    var home = dr.prev();
                    if (self.children('ul').length) {
                        ul =  self.children('ul');
                    } else {
                        ul = $('<ul class="menu unapproved" data-parent-id="' + parent_id + '"><li class="drag-newposition"></li></ul>').appendTo(self);
                        ul.find('.drag-newposition').mouseover(); // init droppable
                    }
                    ul.append(dr).append(sep);

                    waPageMove({id: id, parent_id: parent_id, before_id: 0}, function() {
                            ul.removeClass('unapproved');
                        },function() {
                            // restore
                            home.after(dr).after(sep);
                            if (ul.hasClass('unapproved')) {
                                ul.remove();
                            }
                    });
                }
            });
        }
        $.initPagesDraggable();
        

        function waPageMove(data, success, error) {
            $.post("?module=pages&action=move", data, function (response) {
                if (response.status == 'ok') {
                    var id = response.data.id;
                    var full_url = response.data.full_url;
                    if (full_url) {
                        $("#page-" + id + ' > a span.hint').html('/' + full_url);
                        if (response.data.old_full_url) {
                            var old_full_url = response.data.old_full_url;
                            $("#page-" + id + ' ul li span.hint').each(function () {
                                $(this).text('/' + full_url + (full_url.length > 0 && full_url.substr(-1) != '/' ? '/' : '') + $(this).text().substr(old_full_url.length + 1));
                            });
                        }
                        // if moved page is current active
                        if ($("#page-" + id).hasClass('selected')) {
                            waLoadPage(id);
                        }
                    }
                    success();
                } else {
                    error();
                }
            }, "json");
        }

        // after expanding, close using storage
        waitFaLoaded().then(() => {
            $('.js-expander').each(function () {
                var page_id = $(this).closest('li').attr('id').replace(/page-/g, '');
                var k = wa_app + '/pages/page-' + page_id;
                if ($.storage.get(k)) {
                    waClose(page_id);
                }
            });
        });

        // wait for font-awesome to be loaded
        function waitFaLoaded(timeout = 5000) {
            return new Promise((resolve, reject) => {
                const checkClass = () => {
                    if (document.documentElement.classList.contains('fontawesome-i2svg-complete')) {
                        resolve();
                    } else if (timeout > 0) {
                        setTimeout(checkClass, 100);
                        timeout -= 100;
                    } else {
                        reject();
                    }
                };

                checkClass();
            });
        }
    });

</script>
<?php }} ?>