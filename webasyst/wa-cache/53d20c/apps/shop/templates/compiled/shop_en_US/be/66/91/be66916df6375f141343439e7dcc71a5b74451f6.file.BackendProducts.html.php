<?php /* Smarty version Smarty-3.1.14, created on 2024-12-08 12:45:42
         compiled from "/var/www/html/wa-apps/shop/templates/actions/backend/BackendProducts.html" */ ?>
<?php /*%%SmartyHeaderCode:1859653550675594f69a40c4-25226613%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be66916df6375f141343439e7dcc71a5b74451f6' => 
    array (
      0 => '/var/www/html/wa-apps/shop/templates/actions/backend/BackendProducts.html',
      1 => 1730717946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1859653550675594f69a40c4-25226613',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_url' => 0,
    'wa' => 0,
    'wa_app_static_url' => 0,
    'lang' => 0,
    'wa_app_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_675594f6a0b7f9_48179601',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_675594f6a0b7f9_48179601')) {function content_675594f6a0b7f9_48179601($_smarty_tpl) {?><?php if (!is_callable('smarty_block_wa_js')) include '/var/www/html/wa-system/vendors/smarty-plugins/block.wa_js.php';
?><link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery-tagsinput/jquery.tagsinput.css?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
">

<?php $_smarty_tpl->smarty->_tag_stack[] = array('wa_js', array('file'=>"js/product/product.min.js")); $_block_repeat=true; echo smarty_block_wa_js(array('file'=>"js/product/product.min.js"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/tmpl.min.js
    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/lazy.load.js
    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/live.dragndrop.js
    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/inline.editable.widget.js
    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/photo.stream.slider.js
    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/product/dragndrop.js
    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/backend/categories_tree.js
    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/product/sidebar.js
    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/products.js
    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/product/product.js
    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/rate.widget.js
    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/product/reviews.js
    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/product/images.js
    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/product/stocks.js
    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/product/stocks_log.js
    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/stocks_log.js
    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/product/orders.js
    <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery-tagsinput/jquery.tagsinput.min.js
    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/product/list.js

    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/set/products.set.js

    
    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/category/products.category.js
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_wa_js(array('file'=>"js/product/product.min.js"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/ace/ace.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>

<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/redactor/2/redactor.css?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
">
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/redactor/2/redactor.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
<?php if ($_smarty_tpl->tpl_vars['lang']->value!='en'){?><script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/redactor/2/<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script><?php }?>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/editor2.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>

<script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/shop/js/charts/d3.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/shop/js/charts/d3chart-sales.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/shop/js/charts/d3chart-pie.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>

<link href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
css/backend/products/reviews/reviews.css?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" rel="stylesheet">

<div class="content blank flexbox height-100" id="s-content">
    <div class="spinner custom-p-32" style="align-self:center;margin-inline:auto;"></div>
</div>

<script type="text/javascript">$(function() {
    $.products.init({
        view: 'presentation',
        shop_url: '<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
',
    });
});</script>
<?php }} ?>