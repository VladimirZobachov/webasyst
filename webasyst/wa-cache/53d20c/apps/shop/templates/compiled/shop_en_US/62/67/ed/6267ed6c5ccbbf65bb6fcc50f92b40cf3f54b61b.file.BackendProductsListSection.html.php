<?php /* Smarty version Smarty-3.1.14, created on 2024-12-08 12:45:43
         compiled from "/var/www/html/wa-apps/shop/templates/layouts/BackendProductsListSection.html" */ ?>
<?php /*%%SmartyHeaderCode:270724250675594f774d2a8-18737727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6267ed6c5ccbbf65bb6fcc50f92b40cf3f54b61b' => 
    array (
      0 => '/var/www/html/wa-apps/shop/templates/layouts/BackendProductsListSection.html',
      1 => 1730717946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '270724250675594f774d2a8-18737727',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sidebar' => 0,
    'content' => 0,
    'wa_app_static_url' => 0,
    'wa' => 0,
    '_templates' => 0,
    '_locales' => 0,
    '_urls' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_675594f775b715_77340499',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_675594f775b715_77340499')) {function content_675594f775b715_77340499($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_templates'] = new Smarty_variable(array(), null, 0);?><?php $_smarty_tpl->tpl_vars['_locales'] = new Smarty_variable(array(), null, 0);?><?php $_smarty_tpl->tpl_vars['_urls'] = new Smarty_variable(array(), null, 0);?>

<div class="s-products-page blank" id="js-products-page">
    <script>
        ( function($) {
            $("#js-products-page").data("ready", $.Deferred());
        })(jQuery);
    </script>

    <div class="s-products-page-body flexbox wrap-mobile">
        
        <?php echo $_smarty_tpl->tpl_vars['sidebar']->value;?>


        
        <div class="s-products-page-content" id="js-products-page-content">
            <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

        </div>
    </div>

    <script>
        ( function($) {

            var sources = [{
                id: "wa-shop-products-main-sidebar-js",
                type: "js",
                uri: "<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/backend/products/main/sidebar.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"
            }, {
                id: "wa-shop-products-main-js",
                type: "js",
                uri: "<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/backend/products/main/main.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"
            }];

            $.wa.loadSources(sources).done( function() {
                $.wa_shop_products.init.initProductsMain({
                    $wrapper: $("#js-products-page"),
                    templates: <?php echo json_encode($_smarty_tpl->tpl_vars['_templates']->value);?>
,
                    locales: <?php echo json_encode($_smarty_tpl->tpl_vars['_locales']->value);?>
,
                    urls: <?php echo json_encode($_smarty_tpl->tpl_vars['_urls']->value);?>

                });
            });

        })(jQuery);
    </script>
</div>
<?php }} ?>