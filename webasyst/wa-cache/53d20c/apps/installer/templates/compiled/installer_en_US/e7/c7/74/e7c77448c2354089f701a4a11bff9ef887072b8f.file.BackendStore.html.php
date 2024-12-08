<?php /* Smarty version Smarty-3.1.14, created on 2024-12-08 12:48:41
         compiled from "/var/www/html/wa-apps/installer/templates/layouts/BackendStore.html" */ ?>
<?php /*%%SmartyHeaderCode:1869804873675595a9673be5-82970223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7c77448c2354089f701a4a11bff9ef887072b8f' => 
    array (
      0 => '/var/www/html/wa-apps/installer/templates/layouts/BackendStore.html',
      1 => 1651070886,
      2 => 'file',
    ),
    '5f279c6ca662f07c894b67d81860d91fdcc9ccb7' => 
    array (
      0 => '/var/www/html/wa-apps/installer/templates/layouts/BackendStoreSidebar.html',
      1 => 1666696862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1869804873675595a9673be5-82970223',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sidebar_only' => 0,
    'installer_sidebar' => 0,
    'title' => 0,
    'wa' => 0,
    'wa_app_static_url' => 0,
    'wa_url' => 0,
    'messages' => 0,
    'message' => 0,
    'content' => 0,
    'wa_backend_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_675595a977e129_17778216',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_675595a977e129_17778216')) {function content_675595a977e129_17778216($_smarty_tpl) {?><?php if (!is_callable('smarty_block_wa_js')) include '/var/www/html/wa-system/vendors/smarty-plugins/block.wa_js.php';
?><?php $_smarty_tpl->_capture_stack[0][] = array('default', 'installer_sidebar', null); ob_start(); ?><?php /*  Call merged included template "./BackendStoreSidebar.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./BackendStoreSidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1869804873675595a9673be5-82970223');
content_675595a9691fd1_70472137($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./BackendStoreSidebar.html" */?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['sidebar_only']->value){?>

    
    <?php echo $_smarty_tpl->tpl_vars['installer_sidebar']->value;?>


<?php }else{ ?>

<!DOCTYPE html>
<html>
<head>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['wa']->value->appName() : $tmp);?>
 — <?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
</title>

    
    <?php echo $_smarty_tpl->tpl_vars['wa']->value->css();?>

    <link href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
css/app.installer.css?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/css/jquery-ui/base/jquery.ui.autocomplete.css" rel="stylesheet" type="text/css" />

    
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery/jquery-3.6.0.min.js"></script>
    <script defer src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
fonts/fontawesome/fontawesome-all.min.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa.contentrouter.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('wa_js', array()); $_block_repeat=true; echo smarty_block_wa_js(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.core.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.widget.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.mouse.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.position.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.autocomplete.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.sortable.min.js
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_wa_js(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


</head>
<body>

<div id="wa">

    
    <?php echo $_smarty_tpl->tpl_vars['wa']->value->header();?>


    <div id="wa-app">

        <section class="flexbox wrap-mobile vertical-mobile">
            
            <div
                class="sidebar flexbox mobile-friendly width-19rem"
                id="js-app-sidebar"
            >
                <?php echo $_smarty_tpl->tpl_vars['installer_sidebar']->value;?>

            </div>

            
            <div class="content blank">

                <?php if (!empty($_smarty_tpl->tpl_vars['messages']->value)){?>
                    <?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value){
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
                        <div class="box">
                            <div class="alert <?php echo $_smarty_tpl->tpl_vars['message']->value['result'];?>
<?php if ($_smarty_tpl->tpl_vars['message']->value['result']=='fail'){?> danger<?php }?>">
                                <?php if ($_smarty_tpl->tpl_vars['message']->value['result']=='success'){?>
                                <i class="fas fa-check-circle"></i>
                                <?php }elseif($_smarty_tpl->tpl_vars['message']->value['result']=='fail'){?>
                                <i class="fas fa-times-circle"></i>
                                <?php }?>
                                <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['message']->value['text'], ENT_QUOTES, 'UTF-8', true);?>

                            </div>
                        </div>
                    <?php } ?>
                <?php }?>

                <div class="js-installer-content">
                    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

                </div>
            </div>

            <script>
              ( function($) {
                // $.wa.content = new ContentRouter({
                //   $content: $('.js-installer-content'),
                //   app_url: <?php echo json_encode(((string)$_smarty_tpl->tpl_vars['wa_backend_url']->value)."webasyst/installer/");?>

                // });
                // $('.js-router').on('click', function(e) {
                //   e.preventDefault();
                //
                //   const href = $(this)[0].href;
                //   const content = $.wa.content.load(href);
                //
                //   const waInstallerLoading = $.waLoading();
                //   $(document)
                //     .on("wa_before_load", function() {
                //       console.log('1')
                //       waInstallerLoading.show();
                //     })
                //     .on("wa_loading", function(event, xhr_event) {
                //       $('.js-installer-content').html(content.responseText)
                //       console.log('2')
                //       if (xhr_event.lengthComputable) {
                //         let percent = (xhr_event.loaded / xhr_event.total) * 100;
                //         waInstallerLoading.set(percent);
                //       }
                //     })
                //     .on("wa_abort", function() {
                //       console.log('3')
                //       waInstallerLoading.abort();
                //     })
                //     .on("wa_loaded", function() {
                //       console.log('4')
                //       waInstallerLoading.done();
                //     });
                //
                //   $('.js-router').removeClass('selected');
                //   $(this).addClass('selected');
                // })

                const $sidebar = $('#js-app-sidebar');
                $sidebar.waShowSidebar({
                  direction: "down"
                });
              })(jQuery);

            </script>

        </section>

    </div>

</div>

</body>
</html>

<?php }?>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2024-12-08 12:48:41
         compiled from "/var/www/html/wa-apps/installer/templates/layouts/BackendStoreSidebar.html" */ ?>
<?php if ($_valid && !is_callable('content_675595a9691fd1_70472137')) {function content_675595a9691fd1_70472137($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['store_sidebar_items']->value)){?><nav class="sidebar-mobile-toggle"><div class="box align-center"><a href="javascript:void(0);"><i class="fas fa-bars"></i> Show navigation</a></div></nav><div class="sidebar-header"><div class="box custom-pb-4"><div class="toggle js-installer-toggle"><?php  $_smarty_tpl->tpl_vars['_sidebar_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_sidebar_item']->_loop = false;
 $_smarty_tpl->tpl_vars['_type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['store_sidebar_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_sidebar_item']->key => $_smarty_tpl->tpl_vars['_sidebar_item']->value){
$_smarty_tpl->tpl_vars['_sidebar_item']->_loop = true;
 $_smarty_tpl->tpl_vars['_type']->value = $_smarty_tpl->tpl_vars['_sidebar_item']->key;
?><a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
store<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['_sidebar_item']->value['TOP']['base_url'], ENT_QUOTES, 'UTF-8', true);?>
" data-href="<?php echo substr(htmlspecialchars((string)$_smarty_tpl->tpl_vars['_sidebar_item']->value['TOP']['base_url'], ENT_QUOTES, 'UTF-8', true),1);?>
" data-type-link="<?php echo $_smarty_tpl->tpl_vars['_sidebar_item']->key;?>
" class="semibold js-installer-toggle-link<?php if ($_smarty_tpl->tpl_vars['store_sidebar_type']->value==$_smarty_tpl->tpl_vars['_type']->value){?> selected<?php }?>"><?php echo $_smarty_tpl->tpl_vars['_sidebar_item']->value['name'];?>
</a><?php } ?></div></div></div><div class="sidebar-body"><?php  $_smarty_tpl->tpl_vars['_sidebar_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_sidebar_item']->_loop = false;
 $_smarty_tpl->tpl_vars['_type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['store_sidebar_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_sidebar_item']->key => $_smarty_tpl->tpl_vars['_sidebar_item']->value){
$_smarty_tpl->tpl_vars['_sidebar_item']->_loop = true;
 $_smarty_tpl->tpl_vars['_type']->value = $_smarty_tpl->tpl_vars['_sidebar_item']->key;
?><ul class="menu js-installer-sidebar-menu js-installer-sidebar-nav custom-mb-24" data-type="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['_type']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['store_sidebar_type']->value!==$_smarty_tpl->tpl_vars['_type']->value){?> style="display: none;"<?php }?>><?php  $_smarty_tpl->tpl_vars['_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_sidebar_item']->value['TOP']['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['_item']->key => $_smarty_tpl->tpl_vars['_item']->value){
$_smarty_tpl->tpl_vars['_item']->_loop = true;
 $_smarty_tpl->tpl_vars['_item']->index++;
?><?php $_smarty_tpl->tpl_vars['_store_url'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['_sidebar_item']->value['TOP']['base_url']).((string)$_smarty_tpl->tpl_vars['_item']->value['url']), null, 0);?><?php $_smarty_tpl->tpl_vars['_link'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['wa_app_url']->value)."store".((string)$_smarty_tpl->tpl_vars['_store_url']->value), null, 0);?><li<?php if ($_smarty_tpl->tpl_vars['_store_url']->value=="/".((string)$_smarty_tpl->tpl_vars['store_path']->value)){?> class="selected"<?php }?>><a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['_link']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-href="<?php echo substr(htmlspecialchars((string)$_smarty_tpl->tpl_vars['_store_url']->value, ENT_QUOTES, 'UTF-8', true),1);?>
" class="flexbox middle js-installer-route<?php if ($_smarty_tpl->tpl_vars['_item']->index==0){?> js-selected<?php }?>"><span class="icon"><i class="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['_item']->value['icon'], ENT_QUOTES, 'UTF-8', true);?>
"></i></span><span class="semibold"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['_item']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span></a></li><?php } ?><?php  $_smarty_tpl->tpl_vars['_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_item']->_loop = false;
 $_from = ifset($_smarty_tpl->tpl_vars['_sidebar_item']->value,'TOP','extra',array()); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['_item']->key => $_smarty_tpl->tpl_vars['_item']->value){
$_smarty_tpl->tpl_vars['_item']->_loop = true;
 $_smarty_tpl->tpl_vars['_item']->index++;
?><li><a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['_item']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" class="flexbox middle"><span class="icon"><i class="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['_item']->value['icon'], ENT_QUOTES, 'UTF-8', true);?>
"></i></span><span class="semibold"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['_item']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php if (!empty($_smarty_tpl->tpl_vars['_item']->value['badge'])){?> <i class="badge small bold rounded red"><?php echo $_smarty_tpl->tpl_vars['_item']->value['badge'];?>
</i><?php }?></span></a></li><?php } ?></ul><?php } ?><?php if (!empty($_smarty_tpl->tpl_vars['store_sidebar_items']->value['FEATURED'])){?><ul class="menu js-installer-sidebar-menu js-installer-sidebar-nav" data-type="FEATURED"<?php if ($_smarty_tpl->tpl_vars['store_sidebar_type']->value!=='FEATURED'){?> style="display: none;"<?php }?>><?php  $_smarty_tpl->tpl_vars['_category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['store_sidebar_items']->value['FEATURED']['CATEGORIES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_category']->key => $_smarty_tpl->tpl_vars['_category']->value){
$_smarty_tpl->tpl_vars['_category']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['_store_url'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['store_sidebar_items']->value['FEATURED']['TOP']['base_url']).((string)$_smarty_tpl->tpl_vars['_category']->value['url']), null, 0);?><?php $_smarty_tpl->tpl_vars['_link'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['wa_app_url']->value)."store".((string)$_smarty_tpl->tpl_vars['_store_url']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['_is_active'] = new Smarty_variable(false, null, 0);?><?php if (strstr($_smarty_tpl->tpl_vars['wa']->value->currentUrl(true),$_smarty_tpl->tpl_vars['_link']->value)){?><?php $_smarty_tpl->tpl_vars['_is_active'] = new Smarty_variable(true, null, 0);?><?php }?><li<?php if ($_smarty_tpl->tpl_vars['_is_active']->value){?> class="selected"<?php }?>><a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['_link']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-href="<?php echo substr(htmlspecialchars((string)$_smarty_tpl->tpl_vars['_store_url']->value, ENT_QUOTES, 'UTF-8', true),1);?>
" class="flexbox middle js-installer-route"><?php if (!empty($_smarty_tpl->tpl_vars['_category']->value['icon'])){?><span class="icon"><i class="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['_category']->value['icon'], ENT_QUOTES, 'UTF-8', true);?>
"></i></span><?php }?><span><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['_category']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span></a></li><?php } ?></ul><?php }?><?php  $_smarty_tpl->tpl_vars['_sidebar_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_sidebar_item']->_loop = false;
 $_smarty_tpl->tpl_vars['_type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['store_sidebar_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_sidebar_item']->key => $_smarty_tpl->tpl_vars['_sidebar_item']->value){
$_smarty_tpl->tpl_vars['_sidebar_item']->_loop = true;
 $_smarty_tpl->tpl_vars['_type']->value = $_smarty_tpl->tpl_vars['_sidebar_item']->key;
?><div class="js-installer-sidebar-menu js-installer-sidebar-filters" data-type="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['_type']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['store_sidebar_type']->value!==$_smarty_tpl->tpl_vars['_type']->value){?> style="display: none;"<?php }?>><?php  $_smarty_tpl->tpl_vars['_filter_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_filter_data']->_loop = false;
 $_smarty_tpl->tpl_vars['_filter_id'] = new Smarty_Variable;
 $_from = ifset($_smarty_tpl->tpl_vars['_sidebar_item']->value['FILTERS'],array()); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_filter_data']->key => $_smarty_tpl->tpl_vars['_filter_data']->value){
$_smarty_tpl->tpl_vars['_filter_data']->_loop = true;
 $_smarty_tpl->tpl_vars['_filter_id']->value = $_smarty_tpl->tpl_vars['_filter_data']->key;
?><h5 class="heading"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['_filter_data']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h5><?php if ($_smarty_tpl->tpl_vars['_filter_id']->value=='color'){?><div class="box custom-pt-0 custom-pb-0"><ul class="menu flexbox wrap js-themes-color js-installer-sidebar-filter-section" id="i-themes-color"><?php  $_smarty_tpl->tpl_vars['_filter_row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_filter_row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_filter_data']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_filter_row']->key => $_smarty_tpl->tpl_vars['_filter_row']->value){
$_smarty_tpl->tpl_vars['_filter_row']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['_store_type_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['_sidebar_item']->value['TOP']['base_url'], null, 0);?><?php $_smarty_tpl->tpl_vars['_link'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['wa_app_url']->value)."store".((string)$_smarty_tpl->tpl_vars['_store_type_url']->value), null, 0);?><li class="custom-mr-4 custom-mb-4<?php if (isset($_smarty_tpl->tpl_vars['filters']->value['color'])&&$_smarty_tpl->tpl_vars['filters']->value['color']==$_smarty_tpl->tpl_vars['_filter_row']->value['filter_value']){?> selected<?php }?>"><a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['_link']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo $_smarty_tpl->tpl_vars['wa']->value->installer->getFilters($_smarty_tpl->tpl_vars['_filter_row']->value['filter_name'],$_smarty_tpl->tpl_vars['_filter_row']->value['filter_value']);?>
" data-href="<?php echo ltrim($_smarty_tpl->tpl_vars['_store_type_url']->value,'/');?>
?filters[<?php echo $_smarty_tpl->tpl_vars['_filter_row']->value['filter_name'];?>
]=<?php echo $_smarty_tpl->tpl_vars['_filter_row']->value['filter_value'];?>
" data-filter-name="<?php echo $_smarty_tpl->tpl_vars['_filter_row']->value['filter_name'];?>
" data-filter-value="<?php echo $_smarty_tpl->tpl_vars['_filter_row']->value['filter_value'];?>
" data-store="<?php echo ltrim($_smarty_tpl->tpl_vars['_store_type_url']->value,'/');?>
" class="custom-p-0 i-style-color js-installer-sidebar-filter<?php if ($_smarty_tpl->tpl_vars['_filter_row']->value['filter_value']!='@any'){?> i-style-color_<?php echo $_smarty_tpl->tpl_vars['_filter_row']->value['filter_value'];?>
<?php }else{ ?> i-style-color_any<?php }?>"><span class="i-style-color-icon js-style-color-icon"><i class="fas fa-check i-check-icon custom-m-0"></i><i class="fas fa-times i-close-icon custom-m-0"></i></span></a></li><?php } ?></ul></div><?php }?><?php if ($_smarty_tpl->tpl_vars['_filter_id']->value!='color'){?><ul class="menu js-installer-sidebar-filter-section"><?php  $_smarty_tpl->tpl_vars['_filter_row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_filter_row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_filter_data']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_filter_row']->key => $_smarty_tpl->tpl_vars['_filter_row']->value){
$_smarty_tpl->tpl_vars['_filter_row']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['_store_type_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['_sidebar_item']->value['TOP']['base_url'], null, 0);?><?php $_smarty_tpl->tpl_vars['_link'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['wa_app_url']->value)."store".((string)$_smarty_tpl->tpl_vars['_store_type_url']->value), null, 0);?><li<?php if (isset($_smarty_tpl->tpl_vars['filters']->value[$_smarty_tpl->tpl_vars['_filter_row']->value['filter_name']])&&$_smarty_tpl->tpl_vars['filters']->value[$_smarty_tpl->tpl_vars['_filter_row']->value['filter_name']]==$_smarty_tpl->tpl_vars['_filter_row']->value['filter_value']){?> class="selected"<?php }?>><a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['_link']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo $_smarty_tpl->tpl_vars['wa']->value->installer->getFilters($_smarty_tpl->tpl_vars['_filter_row']->value['filter_name'],$_smarty_tpl->tpl_vars['_filter_row']->value['filter_value']);?>
" data-href="<?php echo ltrim($_smarty_tpl->tpl_vars['_store_type_url']->value,'/');?>
?filters[<?php echo $_smarty_tpl->tpl_vars['_filter_row']->value['filter_name'];?>
]=<?php echo $_smarty_tpl->tpl_vars['_filter_row']->value['filter_value'];?>
" data-filter-name="<?php echo $_smarty_tpl->tpl_vars['_filter_row']->value['filter_name'];?>
" data-filter-value="<?php echo $_smarty_tpl->tpl_vars['_filter_row']->value['filter_value'];?>
" data-store="<?php echo ltrim($_smarty_tpl->tpl_vars['_store_type_url']->value,'/');?>
" class="flexbox middle js-installer-sidebar-filter"><?php if (array_key_exists('count',$_smarty_tpl->tpl_vars['_filter_row']->value)){?><span class="count"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['_filter_row']->value['count'], ENT_QUOTES, 'UTF-8', true);?>
</span><?php }?><span class="icon i-selected-icon"><i class="fas fa-check"></i></span><span><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['_filter_row']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span></a></li><?php } ?></ul><?php }?><?php } ?></div><?php } ?></div><?php }?><div class="sidebar-footer shadowed"><ul class="menu"><li<?php if ($_smarty_tpl->tpl_vars['module']->value=='assets'){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
assets/" class="flexbox middle js-router"><i class="fas fa-tasks"></i><span>Manage apps</span></a></li><li<?php if ($_smarty_tpl->tpl_vars['module']->value=='reviews'){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
reviews/" class="flexbox middle js-router"><i class="fas fa-star"></i><span>Reviews</span></a></li><li<?php if ($_smarty_tpl->tpl_vars['module']->value=='update'){?> class="selected"<?php }?> id="i-apply-updates-sidebar-item"><a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
updates/" class="flexbox middle js-router"><?php if ($_smarty_tpl->tpl_vars['update_counter']->value>0){?><span class="count i-count"><?php echo $_smarty_tpl->tpl_vars['update_counter']->value;?>
</span><?php }?><i class="fas fa-sync"></i><span>Updates</span></a></li><li<?php if ($_smarty_tpl->tpl_vars['module']->value=='settings'){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
settings/" class="flexbox middle js-router"><i class="fas fa-cog"></i><span>Settings</span></a></li></ul></div>
<?php }} ?>