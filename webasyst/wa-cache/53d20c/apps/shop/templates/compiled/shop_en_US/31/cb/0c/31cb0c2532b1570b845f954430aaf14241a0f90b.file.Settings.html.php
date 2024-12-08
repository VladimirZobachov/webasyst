<?php /* Smarty version Smarty-3.1.14, created on 2024-12-08 12:46:00
         compiled from "/var/www/html/wa-apps/shop/plugins/brands/templates/actions/settings/Settings.html" */ ?>
<?php /*%%SmartyHeaderCode:83111350675595089826f6-86377532%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31cb0c2532b1570b845f954430aaf14241a0f90b' => 
    array (
      0 => '/var/www/html/wa-apps/shop/plugins/brands/templates/actions/settings/Settings.html',
      1 => 1730717946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83111350675595089826f6-86377532',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'features' => 0,
    'f' => 0,
    'feature_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_675595089da003_51319284',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_675595089da003_51319284')) {function content_675595089da003_51319284($_smarty_tpl) {?><style>
    #wa-plugins-container .content { background-color: var(--background-color); }
    #wa-plugins-container .fields-group { background-color: var(--background-color-blank); }
</style>

<h1>Brands</h1>
<div class="fields form">
    <form action="?module=plugins&id=brands&action=save" method="post" id="plugins-settings-form">
    <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>


    <div class="fields-group custom-mt-16">
        <div class="field">
            <div class="name">
                Brand feature
            </div>
            <div class="value">
                <select name="shop_brands[feature_id]">
                    <?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value){
$_smarty_tpl->tpl_vars['f']->_loop = true;
?>
                    <option <?php if ($_smarty_tpl->tpl_vars['f']->value['id']==$_smarty_tpl->tpl_vars['feature_id']->value){?>selected="true"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['f']->value['name'];?>
</option>
                    <?php } ?>
                </select>
                <p class="hint">Select the feature you want products to be filtered by</p>
            </div>
        </div>
    </div>
    <div class="field">
        <div class="value submit">
            <div class="custom-pl-16">
                <input type="submit" class="button green" value="Save">
                <span id="plugins-settings-form-status" style="display:none">Saved</span>
            </div>
        </div>
    </div>
    </form>
</div>

<script type="text/javascript">
    $("#plugins-settings-form").submit(function () {
        var f = $(this);
        $.post(f.attr('action'), f.serialize(), function (response) {
            $("#plugins-settings-form-status").fadeIn('slow', function () {
               $(this).fadeOut(1000);
            });
        }, "json")
        return false;
    });
</script>
<?php }} ?>