<?php /* Smarty version Smarty-3.1.14, created on 2024-12-08 12:45:37
         compiled from "/var/www/html/wa-apps/shop/templates/actions/orders/skeleton/kanban.html" */ ?>
<?php /*%%SmartyHeaderCode:1581239108675594f1831182-35129040%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b3f9badb2e53255652d541fdae41509c9ce38b4' => 
    array (
      0 => '/var/www/html/wa-apps/shop/templates/actions/orders/skeleton/kanban.html',
      1 => 1730717946,
      2 => 'file',
    ),
    'bdbfcaf401482122939af2491395ad31feb6bb0b' => 
    array (
      0 => '/var/www/html/wa-apps/shop/templates/actions/orders/skeleton/orders_list.inc.html',
      1 => 1730717946,
      2 => 'file',
    ),
    'fe1742490c4ba71646650088619ab3d06c96a21b' => 
    array (
      0 => '/var/www/html/wa-apps/shop/templates/actions/orders/skeleton/table_sidebar.html',
      1 => 1730717946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1581239108675594f1831182-35129040',
  'function' => 
  array (
    'split_orders' => 
    array (
      'parameter' => 
      array (
        'count' => 2,
        'margin_height' => '1px',
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'no_sidebar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_675594f1852e99_80740035',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_675594f1852e99_80740035')) {function content_675594f1852e99_80740035($_smarty_tpl) {?><?php /*  Call merged included template "./orders_list.inc.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('./orders_list.inc.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1581239108675594f1831182-35129040');
content_675594f1833b16_68452169($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./orders_list.inc.html" */?>

<div class="skeleton" style="width: 100%; max-width: 100vw; overflow: hidden;">
    <?php if (empty($_smarty_tpl->tpl_vars['no_sidebar']->value)){?>
    <?php /*  Call merged included template "./table_sidebar.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('./table_sidebar.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1581239108675594f1831182-35129040');
content_675594f183fa14_47488141($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./table_sidebar.html" */?>
    <?php }?>

    <div class="flexbox full-width box">
        <span class="skeleton-line custom-m-0 custom-mr-16" style="min-width: 320px;width: 24%;height: 75vh;">
            <span class="skeleton-line custom-ml-8 custom-mt-8" style="width: 60%;height: 17px;"></span>
            <div style="padding: 0 20px;">
                <?php smarty_template_function_split_orders($_smarty_tpl,array('count'=>1,'margin_height'=>'8px'));?>

            </div>
        </span>
        <span class="skeleton-line custom-m-0 custom-mr-16" style="min-width: 320px;width: 24%;height: 75vh;">
            <span class="skeleton-line custom-ml-8 custom-mt-8" style="width: 50%;height: 17px;"></span>
            <div style="padding: 0 20px;">
                <?php smarty_template_function_split_orders($_smarty_tpl,array('count'=>3,'margin_height'=>'8px'));?>

            </div>
        </span>
        <span class="skeleton-line custom-m-0 custom-mr-16" style="min-width: 320px;width: 24%;height: 75vh;">
            <span class="skeleton-line custom-ml-8 custom-mt-8" style="width: 70%;height: 17px;"></span>
            <div style="padding: 0 20px;">
                <?php smarty_template_function_split_orders($_smarty_tpl,array('count'=>2,'margin_height'=>'8px'));?>

            </div>
        </span>
        <span class="skeleton-line custom-m-0 custom-mr-16" style="min-width: 320px;width: 24%;height: 75vh;">
            <span class="skeleton-line custom-ml-8 custom-mt-8" style="width: 55%;height: 17px;"></span>
            <div style="padding: 0 20px;">
                <?php smarty_template_function_split_orders($_smarty_tpl,array('count'=>4,'margin_height'=>'8px'));?>

            </div>
        </span>
    </div>
</div>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2024-12-08 12:45:37
         compiled from "/var/www/html/wa-apps/shop/templates/actions/orders/skeleton/orders_list.inc.html" */ ?>
<?php if ($_valid && !is_callable('content_675594f1833b16_68452169')) {function content_675594f1833b16_68452169($_smarty_tpl) {?><?php if (!function_exists('smarty_template_function_split_orders')) {
    function smarty_template_function_split_orders($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['split_orders']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['count']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['count']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
    <span class="skeleton-line" style="width: 99%;height: 64px;padding: 11px;margin: <?php echo $_smarty_tpl->tpl_vars['margin_height']->value;?>
 -10px;background: var(--background-color-blank);">
        <div class="flexbox width-100">
            <span class="skeleton-custom-circle custom-pr-8" style="width: 65px;height: 65px;"></span>
            <div class="flexbox width-100">
                <div>
                    <span class="skeleton-line" style="width: 85px;height: 16px;"></span>
                    <span class="skeleton-line custom-ml-8" style="width: 55px;height: 10px;"></span>
                    <span class="skeleton-line custom-ml-8" style="width: 80%;height: 5px;"></span>
                </div>
                <span class="skeleton-line" style="opacity: 0;"></span>
                <span class="skeleton-line" style="width: 75px;height: 16px;"></span>
            </div>
        </div>
    </span>
    <?php }} ?>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2024-12-08 12:45:37
         compiled from "/var/www/html/wa-apps/shop/templates/actions/orders/skeleton/table_sidebar.html" */ ?>
<?php if ($_valid && !is_callable('content_675594f183fa14_47488141')) {function content_675594f183fa14_47488141($_smarty_tpl) {?><div class="flexbox full-width custom-pl-12">
    <div class="flexbox box middle custom-pt-16">
        <span class="skeleton-custom-circle custom-m-0 custom-mr-16" style="width: 16px;height: 16px;"></span>

        <?php if (!empty($_smarty_tpl->tpl_vars['select']->value)&&$_smarty_tpl->tpl_vars['select']->value=='kanban'){?>
        <span class="skeleton-line custom-m-0 custom-ml-8 custom-mr-16" style="width: 15px;height: 15px;"></span>
        <span class="button light-gray rounded" style="width: 38px;height: 30px;"></span>
        <?php }else{ ?>
        <span class="button light-gray rounded" style="width: 38px;height: 30px;"></span>
        <span class="skeleton-line custom-m-0 custom-ml-8 custom-mr-16" style="width: 15px;height: 15px;"></span>
        <?php }?>

        <div class="custom-ml-32 flexbox space-8">
            <?php $_smarty_tpl->tpl_vars['_i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['_i']->step = 1;$_smarty_tpl->tpl_vars['_i']->total = (int)ceil(($_smarty_tpl->tpl_vars['_i']->step > 0 ? 3+1 - (0) : 0-(3)+1)/abs($_smarty_tpl->tpl_vars['_i']->step));
if ($_smarty_tpl->tpl_vars['_i']->total > 0){
for ($_smarty_tpl->tpl_vars['_i']->value = 0, $_smarty_tpl->tpl_vars['_i']->iteration = 1;$_smarty_tpl->tpl_vars['_i']->iteration <= $_smarty_tpl->tpl_vars['_i']->total;$_smarty_tpl->tpl_vars['_i']->value += $_smarty_tpl->tpl_vars['_i']->step, $_smarty_tpl->tpl_vars['_i']->iteration++){
$_smarty_tpl->tpl_vars['_i']->first = $_smarty_tpl->tpl_vars['_i']->iteration == 1;$_smarty_tpl->tpl_vars['_i']->last = $_smarty_tpl->tpl_vars['_i']->iteration == $_smarty_tpl->tpl_vars['_i']->total;?>
            <span class="skeleton-line custom-m-0" style="width: 100px;height: 30px;"></span>
            <?php }} ?>
        </div>
        <span class="skeleton-line custom-m-0 custom-mr-16 custom-ml-16" style="width: 130px;height: 30px;"></span>
        <span class="skeleton-line custom-m-0 custom-mr-32" style="width: 140px;height: 30px;"></span>
        <span class="skeleton-line custom-m-0 custom-ml-8" style="width: 100px;height: 30px;"></span>
        <span class="skeleton-line custom-ml-8 custom-mr-16 custom-mb-0" style="width: 110px;height: 30px;"></span>
    </div>
    <div class="flexbox box middle custom-pt-16 space-12">
        <span class="skeleton-line custom-m-0" style="width: 150px;height: 30px;"></span>
        <span class="button light-gray rounded" style="width: 25px;height: 25px;"></span>
        <span class="button light-gray rounded custom-mr-8" style="width: 110px;height: 30px;"></span>
    </div>
</div>
<?php }} ?>