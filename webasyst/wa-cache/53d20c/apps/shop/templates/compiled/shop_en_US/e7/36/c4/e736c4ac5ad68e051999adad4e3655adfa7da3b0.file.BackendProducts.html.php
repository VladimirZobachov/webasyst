<?php /* Smarty version Smarty-3.1.14, created on 2024-12-08 12:45:43
         compiled from "/var/www/html/wa-apps/shop/templates/layouts/BackendProducts.html" */ ?>
<?php /*%%SmartyHeaderCode:244511007675594f77687b3-34427968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e736c4ac5ad68e051999adad4e3655adfa7da3b0' => 
    array (
      0 => '/var/www/html/wa-apps/shop/templates/layouts/BackendProducts.html',
      1 => 1730717946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '244511007675594f77687b3-34427968',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'wa_app_static_url' => 0,
    'wa_url' => 0,
    'wa_app_url' => 0,
    '_dialog_deleted_product' => 0,
    'backend_prod_layout_event' => 0,
    '_' => 0,
    'content' => 0,
    '_confirm_dialog' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_675594f77b7c69_78976531',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_675594f77b7c69_78976531')) {function content_675594f77b7c69_78976531($_smarty_tpl) {?><!DOCTYPE html>
<html lang="<?php if ($_smarty_tpl->tpl_vars['wa']->value->locale()){?><?php echo $_smarty_tpl->tpl_vars['wa']->value->locale();?>
<?php }else{ ?>en<?php }?>">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo htmlspecialchars((string)(($tmp = @$_smarty_tpl->tpl_vars['wa']->value->title())===null||$tmp==='' ? $_smarty_tpl->tpl_vars['wa']->value->appName() : $tmp), ENT_QUOTES, 'UTF-8', true);?>
 — <?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
</title>

    
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    
    <?php echo $_smarty_tpl->tpl_vars['wa']->value->css();?>

    <link href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
css/backend/sidebar_menu.css?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" rel="stylesheet" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
css/backend/products/wa2/wa2.css?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" rel="stylesheet" />
    
    <link href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
css/backend/products/ui/ui.css?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
" rel="stylesheet" />
    
    <link href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
css/backend/products/main/main.css?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
" rel="stylesheet" />
    
    <link href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
css/backend/products/product/product.css?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
" rel="stylesheet" />

    
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery/jquery-3.6.0.min.js"></script>

    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/backend/products/wa2.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
    

    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/backend/products/products.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/fontawesome/fontawesome-all.min.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>

    
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/backend/products/product/jquery-ui/jquery-ui.min.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
    <link href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/backend/products/product/jquery-ui/jquery-ui.css?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" rel="stylesheet">
    <?php if (substr($_smarty_tpl->tpl_vars['wa']->value->locale(),0,2)!=="en"){?>
        <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/i18n/jquery.ui.datepicker-<?php echo $_smarty_tpl->tpl_vars['wa']->value->locale();?>
.js"></script>
    <?php }?>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/fileupload/jquery.fileupload.js"></script>

    <?php echo $_smarty_tpl->tpl_vars['wa']->value->js();?>


    <script>
        ( function($) {
            $.wa_shop_products.lang = "<?php echo substr($_smarty_tpl->tpl_vars['wa']->value->locale(),0,2);?>
";
            $.wa_shop_products.date_format = <?php echo json_encode(waDateTime::getFormatJS('date'));?>
;
            $.wa_shop_products.app_url = "<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['wa_app_url']->value, ENT_QUOTES, 'UTF-8', true);?>
";
            $.wa_shop_products.section_url = "<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['wa_app_url']->value, ENT_QUOTES, 'UTF-8', true);?>
products/";
            $.wa.title.pattern = "%s — <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['wa']->value->accountName(), ENT_QUOTES, 'UTF-8', true);?>
";
        })(jQuery);
    </script>

    
    <?php $_smarty_tpl->_capture_stack[0][] = array('default', "_dialog_deleted_product", null); ob_start(); ?>
        <div class="dialog s-deleted-product-dialog" id="js-deleted-product-dialog">
            <div class="dialog-background"></div>
            <div class="dialog-body">
                <div class="dialog-header">
                    <h2>The product has been deleted.</h2>
                </div>
                <div class="dialog-footer">
                    <button class="js-dialog-close button gray" type="button">Close</button>
                </div>
            </div>
        </div>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <script>
        ( function($) {
            const template = <?php echo json_encode($_smarty_tpl->tpl_vars['_dialog_deleted_product']->value);?>
;
            $.wa_shop_products.showDeletedProductDialog = function() {
                const url = "<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
products/";
                $.waDialog({
                    html: template,
                    onClose: function() {
                        $.wa_shop_products.router.load(url);
                    }
                });
            }

            $.wa_shop_products.alert = function (title, text) {
                $.wa.notice({
                    title,
                    text: '<div style="line-height: 1.5;font-size: 110%;">' + (text || '') + '</div>',
                    button_name: 'Close'
                });
            }
        })(jQuery);
    </script>

    <!-- plugin hook: 'backend_prod_layout.head' -->
    
    <?php if (!empty($_smarty_tpl->tpl_vars['backend_prod_layout_event']->value)){?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_prod_layout_event']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['head']);?>
<?php } ?><?php }?>
</head>

<body>
<div id="wa">
    
    <?php echo $_smarty_tpl->tpl_vars['wa']->value->header();?>


    <!-- plugin hook: 'backend_prod_layout.top' -->
    
    <?php if (!empty($_smarty_tpl->tpl_vars['backend_prod_layout_event']->value)){?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_prod_layout_event']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['top']);?>
<?php } ?><?php }?>

    
    <div class="s-app-wrapper" id="wa-app">
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    </div>

    <?php $_smarty_tpl->_capture_stack[0][] = array('default', "_confirm_dialog", null); ob_start(); ?>
        <div class="dialog">
            <div class="dialog-background"></div>
            <div class="dialog-body">
                <h2 class="dialog-header">Save modified data before leaving?</h2>
                <div class="dialog-content">
                    <p>Your changes will be lost if you do not save them.</p>
                </div>
                <div class="hidden dialog-content js-confirmation-type-media">
                    <p>Your changes will be lost if you do not save them.
                        Uploaded images are always saved until you delete them.</p>
                </div>
                <div class="dialog-footer flexbox middle">
                    <button class="js-save-button button green" type="button">Save</button>
                    <button class="js-dialog-close button light-gray" type="button">Stay</button>
                    <button class="js-leave-button button outlined orange custom-ml-auto" type="button">Leave without saving</button>
                </div>
            </div>
        </div>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <!-- plugin hook: 'backend_prod_layout.bottom' -->
    
    <?php if (!empty($_smarty_tpl->tpl_vars['backend_prod_layout_event']->value)){?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_prod_layout_event']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['bottom']);?>
<?php } ?><?php }?>

    <script>
        ( function($) {

            const sections = {
                "products": {
                    id: "products",
                    content_selector: "#js-products-page-content"
                },
                "product": {
                    id: "product",
                    content_selector: ".s-product-page .js-page-content"
                }
            }

            const routes = {
                "/products/"              : sections["products"],
                "/products/categories/"   : sections["products"],
                "/products/sets/"         : sections["products"],
                "/products/tags/"         : sections["products"],
                "/products/reviews/"      : sections["products"],
                "/products/stocks/"       : sections["products"],
                "/products/new/"          : sections["product"],
                "/products/\\d+/"         : sections["product"],
                "/products/\\d+/general/" : sections["product"],
                "/products/\\d+/sku/"     : sections["product"],
                "/products/\\d+/media/"   : sections["product"],
                "/products/\\d+/seo/"     : sections["product"],
                "/products/\\d+/services/": sections["product"],
                "/products/\\d+/related/" : sections["product"],
                "/products/\\d+/pages/"   : sections["product"],
                "/products/\\d+/reviews/" : sections["product"],
                "/products/\\d+/prices/"  : sections["product"]
            }

            $.wa_shop_products.init.initContentRouter({
                $wrapper: $("#wa-app"),
                main_url: <?php echo json_encode($_smarty_tpl->tpl_vars['wa_app_url']->value);?>
,
                sections: sections,
                routes: routes,
                onClick: function(node, url) {
                    const $link = $(node);
                    if ($link.hasClass("js-disable-router") || $link.data("router-disable")) {
                        return false;
                    }
                },
                templates: {
                    confirm_dialog: <?php echo json_encode(trim(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['_confirm_dialog']->value)));?>

                }
            });

        })(jQuery);
    </script>
</div>
</body>
</html>
<?php }} ?>