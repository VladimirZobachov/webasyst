<?php /* Smarty version Smarty-3.1.14, created on 2024-12-08 12:46:41
         compiled from "/var/www/html/wa-system/page/templates/Button.html" */ ?>
<?php /*%%SmartyHeaderCode:223714605675595312d6d77-36285769%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ccbb714d59cef36a3d289b72d27a41c1cc34221' => 
    array (
      0 => '/var/www/html/wa-system/page/templates/Button.html',
      1 => 1631697814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '223714605675595312d6d77-36285769',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cheat_sheet_name' => 0,
    'data' => 0,
    'wa_backend_url' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_675595312f3b14_32636254',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_675595312f3b14_32636254')) {function content_675595312f3b14_32636254($_smarty_tpl) {?><button class="button nobutton js-show-cheatsheet custom-ml-auto" id="wa-editor-help-link-<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['cheat_sheet_name']->value, ENT_QUOTES, 'UTF-8', true);?>
"><i class="fas fa-code"></i> Cheat sheet</button>

<script type="text/javascript">
    (function () {
        "use strict";
        const cheat_sheet_name = <?php echo json_encode($_smarty_tpl->tpl_vars['cheat_sheet_name']->value);?>
;
        let $cheatsheet_drawer;
        $.cheatsheet = $.cheatsheet || { };
        $.cheatsheet[cheat_sheet_name] = {
            data: <?php echo json_encode($_smarty_tpl->tpl_vars['data']->value);?>
,
            init: function () {
                this.createDrawer();
                this.getHelpEvent();
            },
            createDrawer() {
                const $cheatsheet_drawer_template = `
                            <div class="drawer js-cheatsheet-drawer" id="wa-editor-help-<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['cheat_sheet_name']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                                <div class="drawer-background"></div>
                                <div class="drawer-body">
                                    <div class="drawer-block"></div>
                                </div>
                            </div>`;
                document.querySelector("body").insertAdjacentHTML('beforeend', $cheatsheet_drawer_template);
                $cheatsheet_drawer = $('#wa-editor-help-<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['cheat_sheet_name']->value, ENT_QUOTES, 'UTF-8', true);?>
')
            },
            getHelpEvent: function () {
                $("#wa-editor-help-link-" + cheat_sheet_name).on('click', function(e) {
                    e.preventDefault();

                    let $help = $cheatsheet_drawer.find('.drawer-block'),
                        data = $.cheatsheet[cheat_sheet_name].data;

                    /*                            if ($help.is(":visible")) {
                                                    $help.hide();
                                                    return false;
                                                }*/

                    let loadHelp = function (afterLoad) {
                        $help.load('<?php echo $_smarty_tpl->tpl_vars['wa_backend_url']->value;?>
?module=backendCheatSheet&action=cheatSheet&ui=<?php echo $_smarty_tpl->tpl_vars['wa']->value->whichUi();?>
', data, afterLoad);
                    };

                    let showHelp = function () {
                        $help.show();
                        let f = function (e) {
                            if ($(e.target).attr('id') == 'wa-editor-help-' + cheat_sheet_name || $(e.target).parents('#wa-editor-help-' + cheat_sheet_name).length) {
                                $(document).one('click', f);
                            } else {
                                $("#wa-editor-help-" + cheat_sheet_name).hide();
                            }
                        };
                        $(document).one('click', f);
                    };

                    if (!data.need_cache || !$help.data('loaded')) {
                        loadHelp(function () {
                            showHelp();
                            $help.data('loaded', 1);
                            $(document).trigger('wa_cheatsheet_load.' + cheat_sheet_name);
                        });
                    } else {
                        showHelp();
                    }

                    $.waDrawer({
                        $wrapper: $cheatsheet_drawer,
                        onOpen($drawer) {
                            $.cheatsheet[cheat_sheet_name].insertVarEvent($drawer)
                        }
                    });

                    return false;
                });
            },
            insertVarEvent: function ($drawer) {
                $drawer.on('click', ".js-var", function(e) {
                    e.preventDefault();
                    let el = $(this),
                        $design_content = $("#wa-design-content"),
                        $el_rte = $(".el-rte"),
                        $page_content = $('#wa-page-content');

                    if (el.children('i').length) {
                        el = el.children('i');
                    }
                    if (el.children('b').length) {
                        el = el.children('b');
                    }

                    if ($design_content.length) {
                        //If the design reactor is turned on and the html editor is selected
                        if ($el_rte.length && $el_rte.is(':visible')) {
                            try {
                                $design_content.elrte()[0].elrte.selection.insertHtml(el.text());
                            } catch (e) {

                            }
                        } else {
                            //If the design reactor is turned and text editor is selected
                            try {
                                wa_editor.insert(el.text());
                            } catch (e) {

                            }
                        }
                    } else {
                        //If only text editor is selected
                        try {
                            wa_editor.insert(el.text());
                        } catch (e) {

                                }
                            }
                            if ($page_content.length) {
                                $.wa_editor_ready.then(function (method) {
                                    $page_content[method]('insert', el.text());
                                });
                            }
                        });
                    }
                };
                $(document).trigger('wa_cheatsheet_init.' + cheat_sheet_name);
                $.cheatsheet[cheat_sheet_name].init()

    }());
</script>
<?php }} ?>