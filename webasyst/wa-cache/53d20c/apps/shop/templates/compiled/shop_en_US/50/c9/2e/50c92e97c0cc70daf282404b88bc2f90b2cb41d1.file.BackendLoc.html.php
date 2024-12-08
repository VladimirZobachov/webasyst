<?php /* Smarty version Smarty-3.1.14, created on 2024-12-08 12:45:42
         compiled from "/var/www/html/wa-apps/shop/templates/actions/backend/BackendLoc.html" */ ?>
<?php /*%%SmartyHeaderCode:1264613840675594f6dc8753-82614812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50c92e97c0cc70daf282404b88bc2f90b2cb41d1' => 
    array (
      0 => '/var/www/html/wa-apps/shop/templates/actions/backend/BackendLoc.html',
      1 => 1730717946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1264613840675594f6dc8753-82614812',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'strings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_675594f6ded2b4_83552774',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_675594f6ded2b4_83552774')) {function content_675594f6ded2b4_83552774($_smarty_tpl) {?>$.wa.locale = $.extend($.wa.locale, <?php ob_start();?><?php echo json_encode($_smarty_tpl->tpl_vars['strings']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
);<?php }} ?>