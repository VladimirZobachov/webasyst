<?php /* Smarty version Smarty-3.1.14, created on 2024-12-07 20:11:54
         compiled from "/var/www/html/wa-system/webasyst/templates/actions/settings/SettingsField.html" */ ?>
<?php /*%%SmartyHeaderCode:19254114856754ac0abd6d15-56164920%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '656d2cba03cdfc707d26f00b9521b6a831d4ef83' => 
    array (
      0 => '/var/www/html/wa-system/webasyst/templates/actions/settings/SettingsField.html',
      1 => 1677490457,
      2 => 'file',
    ),
    '814b224e4497e609569a776f883c952f14ee9c17' => 
    array (
      0 => '/var/www/html/wa-system/webasyst/templates/actions/settings/SettingsFieldRow.inc.html',
      1 => 1617787741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19254114856754ac0abd6d15-56164920',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'wa_url' => 0,
    'fields' => 0,
    'field' => 0,
    '_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6754ac0ac20961_42587925',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6754ac0ac20961_42587925')) {function content_6754ac0ac20961_42587925($_smarty_tpl) {?><?php if (!is_callable('smarty_block_wa_js')) include '/var/www/html/wa-system/vendors/smarty-plugins/block.wa_js.php';
?><?php $_smarty_tpl->tpl_vars['_title'] = new Smarty_variable("Contact fields — ".((string)$_smarty_tpl->tpl_vars['wa']->value->accountName(false)), null, 0);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('wa_js', array()); $_block_repeat=true; echo smarty_block_wa_js(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.core.min.js
    <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.widget.min.js
    <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.mouse.min.js
    <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.sortable.min.js
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_wa_js(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<div class="article s-field-settings-page" id="s-field-settings-page">
  <div class="article-body">
    <h1 class="s-page-header">Contact fields</h1>
    <div class="s-field-settings-fields-block">
        <div class="s-field-constructor">
            <div class="fieldset wa-main-fields fields">
                
                <div class="fields-group blank">
                    <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields']->value['main']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>

                        <div class="field">
                            <div class="name"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="value">
                                <span class="<?php if ($_smarty_tpl->tpl_vars['field']->value['pStatus']==='disabled'){?>hint<?php }else{ ?>small bold<?php }?>">person</span>
                                <span class="<?php if ($_smarty_tpl->tpl_vars['field']->value['cStatus']==='disabled'){?>hint<?php }else{ ?>small bold<?php }?>">company</span>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <div class="s-main-fields-label gray fields-group blank">
                    <p>Main contact fields cannot be modified or disabled.</p>
                </div>
            </div>

            <div class="fieldset wa-other-fields fields">
                
                <div class="s-new-field">
                    <a href="javascript:void(0);" class="js-edit-field-link bold no-underline inline-link">
                        <i class="fas fa-plus-circle"></i> New field
                    </a>
                </div>

                
                <div class="js-other-fields fields-group blank">
                    <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields']->value['other']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
                        <?php /*  Call merged included template "./SettingsFieldRow.inc.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./SettingsFieldRow.inc.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('field'=>$_smarty_tpl->tpl_vars['field']->value), 0, '19254114856754ac0abd6d15-56164920');
content_6754ac0ac09c10_10381890($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./SettingsFieldRow.inc.html" */?>
                    <?php } ?>
                </div>
            </div>
            <div class="clear-left"></div>
        </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    (function($) {
        new WASettingsField({
            '$wrapper': $('#s-field-settings-page')
        });
        $.wa.title.set(<?php echo json_encode($_smarty_tpl->tpl_vars['_title']->value);?>
);
    })(jQuery);
</script>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2024-12-07 20:11:54
         compiled from "/var/www/html/wa-system/webasyst/templates/actions/settings/SettingsFieldRow.inc.html" */ ?>
<?php if ($_valid && !is_callable('content_6754ac0ac09c10_10381890')) {function content_6754ac0ac09c10_10381890($_smarty_tpl) {?><div data-id="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
" class="field">
    <div class="name">
        <i class="fas fa-bars sort"></i>
        <a href="javascript:void(0);" class="wa-edit-field-link js-edit-field-link" data-id="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
 <i class="fas fa-pen edit"></i></a>
    </div>
    <div class="value">
        <?php if ($_smarty_tpl->tpl_vars['field']->value['disabled']){?>
            <span class="red small">disabled</span>
        <?php }else{ ?>
            <span class="<?php if ($_smarty_tpl->tpl_vars['field']->value['pStatus']==='disabled'){?>hint<?php }else{ ?>small bold<?php }?>">person</span>
            <span class="<?php if ($_smarty_tpl->tpl_vars['field']->value['cStatus']==='disabled'){?>hint<?php }else{ ?>small bold<?php }?>">company</span>
        <?php }?>
    </div>
</div><?php }} ?>