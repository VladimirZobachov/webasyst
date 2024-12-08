<?php /* Smarty version Smarty-3.1.14, created on 2024-12-08 12:46:39
         compiled from "/var/www/html/wa-apps/shop/templates/actions/backend/BackendStorefronts.html" */ ?>
<?php /*%%SmartyHeaderCode:16871199226755952fab0001-64807373%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69b9d0d29c73af8ba966658931c73b8dd6e91477' => 
    array (
      0 => '/var/www/html/wa-apps/shop/templates/actions/backend/BackendStorefronts.html',
      1 => 1730717946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16871199226755952fab0001-64807373',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'wa_app_static_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6755952fadc816_83675972',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6755952fadc816_83675972')) {function content_6755952fadc816_83675972($_smarty_tpl) {?><div class="flexbox" id="s-storefronts-content" <?php if ($_smarty_tpl->tpl_vars['wa']->value->userRights('design')){?>data-design="1"<?php }?> <?php if ($_smarty_tpl->tpl_vars['wa']->value->userRights('pages')){?>data-pages="1"<?php }?>>
    <div class="box s-settings-form">
        Loading...
        <i class="fas fa-spinner fa-spin"></i>
    </div>
    <!-- settings placeholder -->
</div>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/storefronts.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<script type="text/javascript">
    $.storefronts.init();
</script>
<?php }} ?>