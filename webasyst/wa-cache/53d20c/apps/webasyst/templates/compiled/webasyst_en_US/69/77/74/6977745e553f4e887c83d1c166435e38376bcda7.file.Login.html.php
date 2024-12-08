<?php /* Smarty version Smarty-3.1.14, created on 2024-12-08 12:45:11
         compiled from "/var/www/html/wa-system/webasyst/templates/actions/login/Login.html" */ ?>
<?php /*%%SmartyHeaderCode:254327565675594d7b21603-61384232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6977745e553f4e887c83d1c166435e38376bcda7' => 
    array (
      0 => '/var/www/html/wa-system/webasyst/templates/actions/login/Login.html',
      1 => 1541667600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '254327565675594d7b21603-61384232',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'class_id' => 0,
    'wrapper_id' => 0,
    'title' => 0,
    'renderer' => 0,
    'data' => 0,
    'errors' => 0,
    'messages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_675594d7b52568_86151317',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_675594d7b52568_86151317')) {function content_675594d7b52568_86151317($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['class_id'] = new Smarty_variable('wa-backend-login-form', null, 0);?>
<?php $_smarty_tpl->tpl_vars['wrapper_id'] = new Smarty_variable(uniqid($_smarty_tpl->tpl_vars['class_id']->value), null, 0);?>
<div class="<?php echo $_smarty_tpl->tpl_vars['class_id']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['wrapper_id']->value;?>
">
    <?php echo $_smarty_tpl->tpl_vars['renderer']->value->setTitle($_smarty_tpl->tpl_vars['title']->value);?>

    <?php echo $_smarty_tpl->tpl_vars['renderer']->value->render($_smarty_tpl->tpl_vars['data']->value,$_smarty_tpl->tpl_vars['errors']->value,$_smarty_tpl->tpl_vars['messages']->value);?>

</div>
<?php }} ?>