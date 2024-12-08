<?php /* Smarty version Smarty-3.1.14, created on 2024-12-08 12:45:42
         compiled from "/var/www/html/wa-apps/shop/templates/layouts/Backend.html" */ ?>
<?php /*%%SmartyHeaderCode:2017969104675594f6a5e066-68803197%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b105fe5551457913962c35d5f04515d846f7e43' => 
    array (
      0 => '/var/www/html/wa-apps/shop/templates/layouts/Backend.html',
      1 => 1730717946,
      2 => 'file',
    ),
    'cab7fc37d7925226b022e7b243880e0957409961' => 
    array (
      0 => '/var/www/html/wa-apps/shop/templates/layouts/BackendSidebar.html',
      1 => 1730717946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2017969104675594f6a5e066-68803197',
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
    'wa' => 0,
    'title' => 0,
    'wa_url' => 0,
    'wa_app_static_url' => 0,
    'wa_app_url' => 0,
    'page' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_675594f6b74f68_75271614',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_675594f6b74f68_75271614')) {function content_675594f6b74f68_75271614($_smarty_tpl) {?><?php if (!is_callable('smarty_block_wa_js')) include '/var/www/html/wa-system/vendors/smarty-plugins/block.wa_js.php';
?><!DOCTYPE html><html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->title(), null, 0);?>
    <title><?php ob_start();?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['wa']->value->appName() : $tmp);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName(false);?>
<?php $_tmp2=ob_get_clean();?><?php echo htmlspecialchars((string)($_tmp1).(" — ").($_tmp2), ENT_QUOTES, 'UTF-8', true);?>
</title>

    <?php echo $_smarty_tpl->tpl_vars['wa']->value->css();?>


    <link href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/css/jquery-ui/base/jquery.ui.autocomplete.css" rel="stylesheet" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery-plot/jquery.jqplot.min.css" rel="stylesheet" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/css/jquery-ui/base/jquery.ui.datepicker.css" rel="stylesheet" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
css/backend/sidebar_menu.css?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" rel="stylesheet" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
css/shop.css?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" rel="stylesheet" />

    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery/jquery-3.6.0.min.js" type="text/javascript"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery/jquery-migrate-3.3.2.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery-plot/jquery.jqplot.min.js"></script>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('wa_js', array('file'=>"js/shop-jquery.min.js")); $_block_repeat=true; echo smarty_block_wa_js(array('file'=>"js/shop-jquery.min.js"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery.history.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery.store.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
/js/jquery-ui/js/jquery-ui-1.9.2.custom.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/sortable/sortable.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/sortable/jquery-sortable.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery.tmpl.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery.retina.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery.swap.js

        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery-plot/plugins/jqplot.highlighter.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery-plot/plugins/jqplot.cursor.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery-plot/plugins/jqplot.dateAxisRenderer.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery-plot/plugins/jqplot.pieRenderer.min.js
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_wa_js(array('file'=>"js/shop-jquery.min.js"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php if (is_readable("wa-content/js/jquery-ui/i18n/jquery.ui.datepicker-".((string)$_smarty_tpl->tpl_vars['wa']->value->locale()).".js")){?>
        <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/i18n/jquery.ui.datepicker-<?php echo $_smarty_tpl->tpl_vars['wa']->value->locale();?>
.js"></script>
    <?php }?>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/shop.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
?action=loc&amp;v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
    <?php if ($_smarty_tpl->tpl_vars['page']->value!='storefronts'){?>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/fileupload/jquery.fileupload.js"></script>
    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['wa']->value->js();?>

     

    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/backend/products/main/sidebar.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/backend/skeleton-loader.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
    <!-- link your JS files here -->
    <script>
        $(function() {
            $.shop.init({
                jquery_url: "<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery/jquery-3.6.0.min.js",
                debug: <?php echo var_export(waSystemConfig::isDebug(),true);?>
,
                page: '<?php if ($_smarty_tpl->tpl_vars['page']->value){?><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php }else{ ?>orders<?php }?>',
                app_url: '<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
'
            });
        });
    </script>

</head>
<body>
<div id="wa">

    <?php echo $_smarty_tpl->tpl_vars['wa']->value->header();?>


    <div id="wa-app" class="flexbox wrap-mobile" <?php if ($_smarty_tpl->tpl_vars['page']->value=="products"){?>style="visibility: hidden;"<?php }?>>

        <?php if ($_smarty_tpl->tpl_vars['wa']->value->get('module')!='tutorial'){?>
            <?php /*  Call merged included template "./BackendSidebar.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./BackendSidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('parent'=>"scope"), 0, '2017969104675594f6a5e066-68803197');
content_675594f6ac2075_93309149($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./BackendSidebar.html" */?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['wa']->value->get('module')!='tutorial'){?>
        <main class="content s-hide-scrollbar <?php if ($_smarty_tpl->tpl_vars['wa']->value->get('action')=='customers'){?>not-<?php }?>blank s-shadowed-content js-main-content">
        <?php }?>
        
            <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

        
        <?php if ($_smarty_tpl->tpl_vars['wa']->value->get('module')!='tutorial'){?>
        </main>
        <?php }?>
    </div><!-- #wa-app -->
</div><!-- #wa -->

<script>
    const $sidebar = $('.js-app-sidebar:first');
    $sidebar.waShowSidebar();

    const $expandSidebarButton = $('.js-expand-sidebar');
    if ($expandSidebarButton.length) {
      $expandSidebarButton.on('click', function(event) {
        event.preventDefault();

        $('.shop-second-sidebar').toggleClass('-sidebar-opened');
        $(this).find('.fa-arrow-right').toggleClass('fa-rotate-180');
      });
    }
</script>
</body>
</html>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2024-12-08 12:45:42
         compiled from "/var/www/html/wa-apps/shop/templates/layouts/BackendSidebar.html" */ ?>
<?php if ($_valid && !is_callable('content_675594f6ac2075_93309149')) {function content_675594f6ac2075_93309149($_smarty_tpl) {?><?php if (empty($_smarty_tpl->tpl_vars['is_product_page']->value)){?><?php $_smarty_tpl->tpl_vars['is_product_page'] = new Smarty_variable(false, null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['_sprite_url'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['wa_url']->value)."wa-apps/shop/img/backend/products/product/icons.svg?v=".((string)$_smarty_tpl->tpl_vars['wa']->value->version()), null, 0);?><?php $_smarty_tpl->tpl_vars['_tooltips'] = new Smarty_variable(array(), null, 0);?><?php $_smarty_tpl->tpl_vars['_locales'] = new Smarty_variable(array("pin_menu"=>htmlspecialchars((string)_w("Pin menu"), ENT_QUOTES, 'UTF-8', true),"unpin_menu"=>htmlspecialchars((string)_w("Unpin menu"), ENT_QUOTES, 'UTF-8', true)), null, 0);?><?php $_smarty_tpl->tpl_vars['_menu'] = new Smarty_variable(shopMainMenu::get(), null, 0);?><?php if (!function_exists('smarty_template_function__sidebar_menu')) {
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