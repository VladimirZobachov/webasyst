<?php /* Smarty version Smarty-3.1.14, created on 2024-12-08 12:45:37
         compiled from "/var/www/html/wa-apps/shop/templates/layouts/Welcome.html" */ ?>
<?php /*%%SmartyHeaderCode:668483849675594f1ae4d64-24923615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfbc26c1fae4dae51b9cc4eb43aef75feb1c1b32' => 
    array (
      0 => '/var/www/html/wa-apps/shop/templates/layouts/Welcome.html',
      1 => 1730717946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '668483849675594f1ae4d64-24923615',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'title' => 0,
    'wa_url' => 0,
    'wa_app_static_url' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_675594f1b04fd9_71482272',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_675594f1b04fd9_71482272')) {function content_675594f1b04fd9_71482272($_smarty_tpl) {?><!DOCTYPE html><html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->title(), null, 0);?>
    <title><?php ob_start();?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['wa']->value->appName() : $tmp);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName(false);?>
<?php $_tmp2=ob_get_clean();?><?php echo htmlspecialchars((string)($_tmp1).(" — ").($_tmp2), ENT_QUOTES, 'UTF-8', true);?>
</title>

    <?php echo $_smarty_tpl->tpl_vars['wa']->value->css();?>


    <link href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/css/jquery-ui/base/jquery.ui.autocomplete.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/ibutton/jquery.ibutton.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
css/shop.css?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" rel="stylesheet" type="text/css" />
    <!-- link your CSS files here -->
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery/jquery-1.7.1.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
     

    <?php echo $_smarty_tpl->tpl_vars['wa']->value->js();?>

</head>
<body>
<div id="wa">

    <?php echo $_smarty_tpl->tpl_vars['wa']->value->header();?>


    <div id="wa-app" class="flexbox wrap-mobile">
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    </div><!-- #wa-app -->

</div><!-- #wa -->
</body>
</html>
<?php }} ?>