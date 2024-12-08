<?php /* Smarty version Smarty-3.1.14, created on 2024-12-08 12:45:11
         compiled from "/var/www/html/wa-system/login/templates/login/backend/remember_me.html" */ ?>
<?php /*%%SmartyHeaderCode:395281200675594d7ca4966-00554809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b81ea6095c1ded770d0618f89467082946b1b759' => 
    array (
      0 => '/var/www/html/wa-system/login/templates/login/backend/remember_me.html',
      1 => 1541778420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '395281200675594d7ca4966-00554809',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_api_oauth' => 0,
    'is_onetime_password_auth_type' => 0,
    'input_name' => 0,
    'checked' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_675594d7caec20_49736959',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_675594d7caec20_49736959')) {function content_675594d7caec20_49736959($_smarty_tpl) {?><?php if (empty($_smarty_tpl->tpl_vars['is_api_oauth']->value)){?>
<div class="field field-remember-me"<?php if ($_smarty_tpl->tpl_vars['is_onetime_password_auth_type']->value){?> style="display:none;"<?php }?>>
    <div class="value">
        <label>
            <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="0">
            <input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="1" <?php if ($_smarty_tpl->tpl_vars['checked']->value){?>checked="checked"<?php }?>> Remember me
        </label>
    </div>
</div>
<?php }?>
<?php }} ?>