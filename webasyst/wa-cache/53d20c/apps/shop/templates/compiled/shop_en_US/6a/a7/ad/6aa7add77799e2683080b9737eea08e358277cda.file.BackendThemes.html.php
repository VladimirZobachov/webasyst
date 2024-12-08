<?php /* Smarty version Smarty-3.1.14, created on 2024-12-08 12:46:47
         compiled from "/var/www/html/wa-apps/shop/templates/actions/backend/BackendThemes.html" */ ?>
<?php /*%%SmartyHeaderCode:116132144367559537df4fd5-82183361%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6aa7add77799e2683080b9737eea08e358277cda' => 
    array (
      0 => '/var/www/html/wa-apps/shop/templates/actions/backend/BackendThemes.html',
      1 => 1730717946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116132144367559537df4fd5-82183361',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'backend_themes_list' => 0,
    '_' => 0,
    'themes_list_url' => 0,
    'wa_app_static_url' => 0,
    'wa' => 0,
    '_page_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_67559537e347b6_84194753',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_67559537e347b6_84194753')) {function content_67559537e347b6_84194753($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_page_title'] = new Smarty_variable(_w("Themes"), null, 0);?>
<div class="s-themes-list-page blank box contentbox" id="js-themes-list-page" style="visibility: hidden;">
    
    <?php if (!empty($_smarty_tpl->tpl_vars['backend_themes_list']->value)){?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_themes_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['top']);?>
<?php } ?><?php }?>

    
    <div class="s-page-body">
        
        <?php if (!empty($_smarty_tpl->tpl_vars['backend_themes_list']->value)){?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_themes_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['middle']);?>
<?php } ?><?php }?>

        <div class="s-themes-list-wrapper">
            <div class="s-frame-wrapper" id="js-themes-list"></div>
            <script>( function($) {
                    let themes_url = sessionStorage.getItem("shop/themes/list");
                    themes_url = (themes_url ? themes_url : <?php echo json_encode($_smarty_tpl->tpl_vars['themes_list_url']->value);?>
);
                    $("#js-themes-list").html('<i class="fas fa-spin fa-spinner"></i>').load(themes_url);
                    sessionStorage.removeItem("shop/themes/list");
                })(jQuery);</script>
        </div>
    </div>

    <script>
        ( function($) {

            const sources = [{
                id: "wa-themes-list-css",
                type: "css",
                uri: "<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
css/backend/themes/themes.css?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"
            }, {
                id: "wa-themes-list-js",
                type: "js",
                uri: "<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/backend/themes/themes.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"
            }];

            $.shop.loadSources(sources).then(init, function() {
                alert("Page Loading Error");
            });

            function init() {
                window.initShopThemesListPage({
                    $wrapper: $("#js-themes-list-page")
                });
            }

            setTitle(<?php echo json_encode($_smarty_tpl->tpl_vars['_page_title']->value);?>
 + ' — ' + <?php echo json_encode($_smarty_tpl->tpl_vars['wa']->value->accountName());?>
);

            
            function setTitle(title) {
                document.title = title;

                const target = document.querySelector("title");
                const observer = new MutationObserver(function(mutations) {
                    mutations.forEach(function(mutation) {
                        if (document.title !== title) { document.title = title; }
                    });
                });
                const config = { childList: true };
                observer.observe(target, config);
            }

        })(jQuery);
    </script>

    
    <?php if (!empty($_smarty_tpl->tpl_vars['backend_themes_list']->value)){?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_themes_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['bottom']);?>
<?php } ?><?php }?>
</div>
<?php }} ?>