<?php /* Smarty version Smarty-3.1.14, created on 2024-12-08 12:45:43
         compiled from "/var/www/html/wa-apps/shop/templates/layouts/BackendSidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:1942074512675594f76a9705-32932827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cab7fc37d7925226b022e7b243880e0957409961' => 
    array (
      0 => '/var/www/html/wa-apps/shop/templates/layouts/BackendSidebar.html',
      1 => 1730717946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1942074512675594f76a9705-32932827',
  'function' => 
  array (
    '_sidebar_menu' => 
    array (
      'parameter' => 
      array (
        'placement' => 'body',
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'is_product_page' => 0,
    'wa_url' => 0,
    'wa' => 0,
    '_menu' => 0,
    '_item' => 0,
    'placement' => 0,
    '_userRights' => 0,
    '_userRights_result' => 0,
    '_sub_item' => 0,
    'backend_products' => 0,
    '_' => 0,
    '_locales' => 0,
    'frontend_url' => 0,
    'has_design_access' => 0,
    'wa_app_url' => 0,
    'frontend_url_label' => 0,
    '_tooltips' => 0,
    'sidebar_menu_state' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_675594f773ea21_14629316',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_675594f773ea21_14629316')) {function content_675594f773ea21_14629316($_smarty_tpl) {?><?php if (empty($_smarty_tpl->tpl_vars['is_product_page']->value)){?><?php $_smarty_tpl->tpl_vars['is_product_page'] = new Smarty_variable(false, null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['_sprite_url'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['wa_url']->value)."wa-apps/shop/img/backend/products/product/icons.svg?v=".((string)$_smarty_tpl->tpl_vars['wa']->value->version()), null, 0);?><?php $_smarty_tpl->tpl_vars['_tooltips'] = new Smarty_variable(array(), null, 0);?><?php $_smarty_tpl->tpl_vars['_locales'] = new Smarty_variable(array("pin_menu"=>htmlspecialchars((string)_w("Pin menu"), ENT_QUOTES, 'UTF-8', true),"unpin_menu"=>htmlspecialchars((string)_w("Unpin menu"), ENT_QUOTES, 'UTF-8', true)), null, 0);?><?php $_smarty_tpl->tpl_vars['_menu'] = new Smarty_variable(shopMainMenu::get(), null, 0);?><?php if (!function_exists('smarty_template_function__sidebar_menu')) {
    function smarty_template_function__sidebar_menu($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['_sidebar_menu']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?><?php  $_smarty_tpl->tpl_vars['_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_item']->key => $_smarty_tpl->tpl_vars['_item']->value){
$_smarty_tpl->tpl_vars['_item']->_loop = true;
?><?php if (ifset($_smarty_tpl->tpl_vars['_item']->value,'placement','body')!=$_smarty_tpl->tpl_vars['placement']->value){?><?php continue 1?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_item']->value["userRights"])){?><?php $_smarty_tpl->tpl_vars['_userRights_result'] = new Smarty_variable(array(), null, 0);?><?php  $_smarty_tpl->tpl_vars['_userRights'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_userRights']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_item']->value["userRights"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_userRights']->key => $_smarty_tpl->tpl_vars['_userRights']->value){
$_smarty_tpl->tpl_vars['_userRights']->_loop = true;
?><?php $_smarty_tpl->createLocalArrayVariable('_userRights_result', null, 0);
$_smarty_tpl->tpl_vars['_userRights_result']->value[] = $_smarty_tpl->tpl_vars['wa']->value->userRights($_smarty_tpl->tpl_vars['_userRights']->value);?><?php } ?><?php if (!max($_smarty_tpl->tpl_vars['_userRights_result']->value)){?><?php continue 1?><?php }?><?php }?><li class="rounded"><?php if (!empty($_smarty_tpl->tpl_vars['_item']->value["submenu"])){?><div class="item js-group-toggle js-<?php echo $_smarty_tpl->tpl_vars['_item']->value["id"];?>
-toggle"><span class="s-icon-main icon"><?php echo $_smarty_tpl->tpl_vars['_item']->value["icon"];?>
</span><span class="s-name"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['_item']->value["name"], ENT_QUOTES, 'UTF-8', true);?>
<span class="hint s-icon-toggle is-expanded"><i class="fas fa-caret-down"></i></span><span class="hint s-icon-toggle"><i class="fas fa-caret-right"></i></span></span></div><ul class="menu s-sub-menu"><?php  $_smarty_tpl->tpl_vars['_sub_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_sub_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_item']->value["submenu"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_sub_item']->key => $_smarty_tpl->tpl_vars['_sub_item']->value){
$_smarty_tpl->tpl_vars['_sub_item']->_loop = true;
?><?php if (!empty($_smarty_tpl->tpl_vars['_sub_item']->value["userRights"])){?><?php $_smarty_tpl->tpl_vars['_userRights_result'] = new Smarty_variable(array(), null, 0);?><?php  $_smarty_tpl->tpl_vars['_userRights'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_userRights']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_sub_item']->value["userRights"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_userRights']->key => $_smarty_tpl->tpl_vars['_userRights']->value){
$_smarty_tpl->tpl_vars['_userRights']->_loop = true;
?><?php $_smarty_tpl->createLocalArrayVariable('_userRights_result', null, 0);
$_smarty_tpl->tpl_vars['_userRights_result']->value[] = $_smarty_tpl->tpl_vars['wa']->value->userRights($_smarty_tpl->tpl_vars['_userRights']->value);?><?php } ?><?php if (!max($_smarty_tpl->tpl_vars['_userRights_result']->value)){?><?php continue 1?><?php }?><?php }?><li class="rounded"><a class="item" href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['_sub_item']->value["url"], ENT_QUOTES, 'UTF-8', true);?>
"><span class="s-name"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['_sub_item']->value["name"], ENT_QUOTES, 'UTF-8', true);?>
</span></a></li><?php } ?></ul><?php }else{ ?><a class="item" href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['_item']->value["url"], ENT_QUOTES, 'UTF-8', true);?>
"><span class="s-icon-main icon"><?php echo $_smarty_tpl->tpl_vars['_item']->value["icon"];?>
</span><span class="s-name"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['_item']->value["name"], ENT_QUOTES, 'UTF-8', true);?>
</span></a><?php }?></li><?php } ?><!-- plugin hook: 'backend_products.sidebar_top_li' --><?php if (!empty($_smarty_tpl->tpl_vars['backend_products']->value)){?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['sidebar_top_li']);?>
<?php } ?><?php }?><?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>



<?php if (!$_smarty_tpl->tpl_vars['is_product_page']->value){?>
<div class="s-page-menu">
    <div class="app-sidebar" id="js-app-sidebar" style="visibility: hidden">
<?php }else{ ?>
    <div class="s-products-page-menu" id="js-products-page-menu" style="visibility: hidden">
<?php }?>
        <div class="sidebar flexbox width-adaptive hide-scrollbar mobile-friendly overflow-visible">
            <?php if ($_smarty_tpl->tpl_vars['wa']->value->isSingleAppMode()){?>
                <?php echo $_smarty_tpl->tpl_vars['wa']->value->headerSingleAppUser();?>

            <?php }?>
            <nav class="sidebar-mobile-toggle">
                <div class="box align-center">
                    <a href="javascript:void(0);">
                        <i class="fas fa-bars"></i>&nbsp;
                        Menu
                    </a>
                </div>
            </nav>
            <div class="sidebar-body">
                <div class="box custom-py-0">
                    <ul class="menu s-main-menu custom-mb-0-mobile">
                        <?php smarty_template_function__sidebar_menu($_smarty_tpl,array());?>

                    </ul>

                    <!-- plugin hook: 'backend_products.sidebar_section' -->
                    
                    <?php if (!empty($_smarty_tpl->tpl_vars['backend_products']->value)){?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['sidebar_section']);?>
<?php } ?><?php }?>

                    <div class="desktop-and-tablet-only js-overlapped-element" style="margin-top: -1.5rem;"></div>
                </div>
            </div>

            <div class="sidebar-footer js-overflowing-gradient">
                <div class="box custom-py-0">
                    <ul class="menu s-main-menu custom-mb-0 custom-mt-4 custom-mt-0-mobile">
                        <?php smarty_template_function__sidebar_menu($_smarty_tpl,array('placement'=>"footer"));?>

                        <li class="rounded s-toggle-wrapper">
                            <div class="item js-toggle-products-page-sidebar">
                                <span class="s-icon-main icon">
                                    <i class="fas fa-caret-left"></i>
                                    <i class="fas fa-caret-right"></i>
                                </span>
                                <span class="s-name"><?php echo $_smarty_tpl->tpl_vars['_locales']->value["unpin_menu"];?>
</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="box custom-mb-4">
                    <?php if ($_smarty_tpl->tpl_vars['frontend_url']->value){?>
                        <div class="blank box rounded">
                            <div class="flexbox space-4 s-menu-link-storefront-status semibold">
                                <?php $_smarty_tpl->tpl_vars['has_design_access'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->userRights('design'), null, 0);?>
                                <?php if ($_smarty_tpl->tpl_vars['has_design_access']->value){?><span style="line-height: 1.125;"><i class="fas fa-circle text-green smallest custom-mr-2"></i></span><?php }?>
                                <span class="heading wide custom-m-0">Storefront</span>
                                <?php if ($_smarty_tpl->tpl_vars['has_design_access']->value){?><a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
?action=storefronts" title="Settings"><i class="fas fa-cog text-light-gray"></i></a><?php }?>
                            </div>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['frontend_url']->value;?>
" rel="noopener" target="_blank">
                                <div class="flexbox middle space-4">
                                    <div class="s-menu-link-storefront-status semibold text-ellipsis"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['frontend_url_label']->value, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <i class="s-icon fas fa-external-link-alt fa-xs s-menu-link-new-window"></i>
                                </div>
                            </a>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
<?php if (!$_smarty_tpl->tpl_vars['is_product_page']->value){?>
</div>
<script>
    var mainWaSidebar;
    ( function($) {
        const $sidebar = $('#js-app-sidebar');
        $sidebar.waShowSidebar();

        mainWaSidebar =  new initMainWaSidebar({
            $wrapper: $("#js-app-sidebar"),
            tooltips: <?php echo json_encode($_smarty_tpl->tpl_vars['_tooltips']->value);?>
,
            locales: <?php echo json_encode($_smarty_tpl->tpl_vars['_locales']->value);?>
,
            sidebar_menu_state: <?php if (!empty($_smarty_tpl->tpl_vars['sidebar_menu_state']->value)){?>true<?php }else{ ?>false<?php }?>,
            urls: {
                "sidebar_menu_state" : "<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
?module=backend&action=sidebarMenuSaveState"
            },
            app_url: "<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['wa_app_url']->value, ENT_QUOTES, 'UTF-8', true);?>
"
        });
    })(jQuery);
</script>
<?php }else{ ?>
    <script>
        ( function($) {

            $('#js-products-page-menu').waShowSidebar();

            var $products_page = $("#js-products-page"),
                $product_page = $("#js-product-page");

            if ($products_page.length) {
                var ready_promise = $products_page.data("ready");
                ready_promise.done( function(controller) {
                    controller.sidebar = init();
                });
            } else if ($product_page.length) {
                var ready_promise = $product_page.data("ready");
                ready_promise.done( function(controller) {
                    init();
                });
            }

            function init() {
                return $.wa_shop_products.init.initProductsSidebar({
                    $wrapper: $("#js-products-page-menu"),
                    tooltips: <?php echo json_encode($_smarty_tpl->tpl_vars['_tooltips']->value);?>
,
                    locales: <?php echo json_encode($_smarty_tpl->tpl_vars['_locales']->value);?>
,
                    sidebar_menu_state: <?php if (!empty($_smarty_tpl->tpl_vars['sidebar_menu_state']->value)){?>true<?php }else{ ?>false<?php }?>,
                    urls: {
                        "sidebar_menu_state" : "<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
?module=backend&action=sidebarMenuSaveState"
                    }
                });
            }
        })(jQuery);
    </script>
<?php }?>
<style>
    .overflowing {
        position: relative;
    }
    .overflowing::before {
        content: "";
        position: absolute;
        top: -1.25rem;
        height: 1.25rem;
        width: 100%;
        background: linear-gradient(180deg, var(--background-color-wa-header-transparent) 0%, var(--border-color-input-outlined) 100%);
        z-index: 100;
    }
</style>
<script>
    $(function () {
        const $overlappedEl = $('.js-overlapped-element');
        if (!$overlappedEl.length || $overlappedEl.is(':hidden')) {
            return;
        }

        const templateArrow = `
            <div class="align-center gray small js-overflowing-arrow" style="margin-top: -1rem">
                <i class="fas fa-angle-down"></i>
            </div>
        `;
        const intersectionObserver = new IntersectionObserver((entries) => {
            if (entries[0].intersectionRatio <= 0) {
                $('.js-overflowing-gradient')
                    .addClass('overflowing')
                    .prepend(templateArrow);
            } else {
                $('.js-overflowing-gradient').removeClass('overflowing');
                $('.js-overflowing-arrow').remove();
            }
        });
        intersectionObserver.observe($overlappedEl.get(0));
    })
</script>
<?php }} ?>