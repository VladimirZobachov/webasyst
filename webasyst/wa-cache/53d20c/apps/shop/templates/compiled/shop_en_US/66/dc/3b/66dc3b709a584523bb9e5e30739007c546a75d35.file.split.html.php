<?php /* Smarty version Smarty-3.1.14, created on 2024-12-08 12:45:37
         compiled from "/var/www/html/wa-apps/shop/templates/actions/orders/skeleton/split.html" */ ?>
<?php /*%%SmartyHeaderCode:567229801675594f168cb89-08337722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66dc3b709a584523bb9e5e30739007c546a75d35' => 
    array (
      0 => '/var/www/html/wa-apps/shop/templates/actions/orders/skeleton/split.html',
      1 => 1730717946,
      2 => 'file',
    ),
    'bdbfcaf401482122939af2491395ad31feb6bb0b' => 
    array (
      0 => '/var/www/html/wa-apps/shop/templates/actions/orders/skeleton/orders_list.inc.html',
      1 => 1730717946,
      2 => 'file',
    ),
    '07a02f1d8ce8c13d6afbb6c4bde9224ef6771fc8' => 
    array (
      0 => '/var/www/html/wa-apps/shop/templates/actions/orders/skeleton/split_body.html',
      1 => 1730717946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '567229801675594f168cb89-08337722',
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
    'split_orders_actions' => 
    array (
      'parameter' => 
      array (
        'count' => 2,
      ),
      'compiled' => '',
    ),
  ),
  'unifunc' => 'content_675594f17c34c4_79113510',
  'variables' => 
  array (
    'no_sidebar' => 0,
    'only_orders' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_675594f17c34c4_79113510')) {function content_675594f17c34c4_79113510($_smarty_tpl) {?><?php /*  Call merged included template "./orders_list.inc.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('./orders_list.inc.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '567229801675594f168cb89-08337722');
content_675594f1858e21_89975299($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./orders_list.inc.html" */?>

<div class="skeleton">
    <div class="flexbox not-blank">
        <?php if (empty($_smarty_tpl->tpl_vars['no_sidebar']->value)){?>
        <div class="sidebar width-adaptive-widest height-auto custom-mr-0 box wide-mobile blank" id="js-split-order-sidebar">

            <?php if (empty($_smarty_tpl->tpl_vars['only_orders']->value)){?>
            <div class="flexbox middle custom-mb-16 custom-pt-4">
                <span class="button light-gray rounded custom-mr-16" style="width: 38px;height: 30px;"></span>
                <span class="skeleton-custom-circle custom-m-0 custom-mr-16" style="width: 16px;height: 16px;"></span>
                <span class="skeleton-line custom-m-0 custom-ml-8 custom-mr-16" style="width: 15px;height: 15px;"></span>
                <span class="skeleton-custom-circle custom-ml-auto custom-mb-0 custom-mr-16" style="width: 16px;height: 16px;"></span>
                <span class="skeleton-custom-circle custom-mb-0 custom-mr-16" style="width: 16px;height: 16px;"></span>
                <span class="skeleton-custom-circle custom-mb-0" style="width: 30px;height: 30px;"></span>
            </div>

            <div class="flexbox full-width">
                <span class="skeleton-custom-box" style="width: 49%; height: 69px;"></span>
                <span class="skeleton-custom-box" style="width: 49%; height: 69px;"></span>
            </div>
            <?php }?>

            <?php smarty_template_function_split_orders($_smarty_tpl,array('count'=>5));?>

            <div class="flexbox custom-mt-32">
                <span class="custom-m-auto custom-mb-32 skeleton-line" style="width: 30%; height: 7px"></span>
            </div>
        </div>
        <?php }?>
        <?php /*  Call merged included template "./split_body.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('./split_body.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '567229801675594f168cb89-08337722');
content_675594f186a255_74971099($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./split_body.html" */?>
    </div>
</div>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2024-12-08 12:45:37
         compiled from "/var/www/html/wa-apps/shop/templates/actions/orders/skeleton/orders_list.inc.html" */ ?>
<?php if ($_valid && !is_callable('content_675594f1858e21_89975299')) {function content_675594f1858e21_89975299($_smarty_tpl) {?><?php if (!function_exists('smarty_template_function_split_orders')) {
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
         compiled from "/var/www/html/wa-apps/shop/templates/actions/orders/skeleton/split_body.html" */ ?>
<?php if ($_valid && !is_callable('content_675594f186a255_74971099')) {function content_675594f186a255_74971099($_smarty_tpl) {?><?php if (!function_exists('smarty_template_function_split_orders')) {
    function smarty_template_function_split_orders($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['split_orders']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['count']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['count']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
    <span class="skeleton-line" style="width: 99%;height: 67px;padding: 11px;margin: <?php echo $_smarty_tpl->tpl_vars['margin_height']->value;?>
 -10px;">
        <span class="skeleton-custom-circle" style="width: 65px;height: 65px;"></span>
    </span>
    <?php }} ?>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

<?php if (!function_exists('smarty_template_function_split_orders_actions')) {
    function smarty_template_function_split_orders_actions($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['split_orders_actions']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['count']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['count']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
    <span class="button custom-mr-16 custom-mt-8 rounded light-gray" style="width: 140px;height: 40px;"></span>
    <?php }} ?>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<div class="article wider" id="js-split-order-content">
<style type="text/css">
@media screen and (max-width: 1200px) {
    .s-order-aux { display: none; }
}
</style>
<div class="article-body custom-py-20">
    <div class="content flexbox">
        <div class="width-100">
            <div class="flexbox middle">
                <span class="skeleton-header custom-mb-8" style="width: 14%;"></span>
                <span class="skeleton-line custom-ml-8 custom-mb-8" style="width: 14%;height: 30px;"></span>
                <span class="skeleton-line custom-ml-8 custom-mb-8" style="width: 15%;height: 17px;"></span>
            </div>
            <div class="flexbox wrap">
                <?php smarty_template_function_split_orders_actions($_smarty_tpl,array('count'=>5));?>

            </div>
            <span class="skeleton-custom-box custom-mt-32 custom-mb-12" style="height: 112px;margin-bottom: 1rem;"></span>

            <div class="flexbox custom-mb-24 space-16">
                <span class="skeleton-custom-box custom-mt-0" style="height: 160px;"></span>
                <span class="skeleton-custom-box custom-mt-0" style="height: 160px;"></span>
            </div>

            <span class="skeleton-custom-box custom-mt-32" style="height: 250px; margin-bottom: 2rem;"></span>

            <div class="flexbox">
                <span class="custom-ml-auto custom-mr-32 skeleton-line" style="height: 15px; width: 80px; margin-bottom: 2rem;"></span>
                <span class="skeleton-line custom-ml-32" style="height: 15px; width: 80px; margin-bottom: 2rem;"></span>
            </div>
            <div class="flexbox">
                <span class="custom-ml-auto custom-mr-32 skeleton-line" style="height: 21px; width: 80px; margin-bottom: 2rem;"></span>
                <span class="skeleton-line custom-ml-32" style="height: 21px; width: 80px; margin-bottom: 2rem;"></span>
            </div>
            <span class="skeleton-line" style="width: 40%;height: 15px;"></span>
            <span class="skeleton-line" style="width: 25%;height: 10px;"></span>
        </div>
        <div class="sidebar s-order-aux right width-adaptive mobile-friendly">
            <div class="box contentbox">
                <span class="skeleton-line" style="height: 10px; width: 90%;"></span>
                <div class="custom-mt-40" style="display: flex;flex-direction: column;justify-content: center;align-items: center;">
                    <span class="skeleton-line" style="height: 5px;"></span>
                    <span class="skeleton-line" style="height: 5px;"></span>
                    <span class="skeleton-line" style="height: 5px;"></span>
                    <span class="skeleton-line" style="height: 5px;"></span>
                    <span class="skeleton-line" style="height: 5px;"></span>

                    <span class="skeleton-line" style="height: 5px;"></span>
                    <span class="skeleton-line" style="height: 5px;"></span>
                    <span class="skeleton-line" style="height: 5px;"></span>

                    <span class="skeleton-line custom-mt-32 custom-mb-32" style="height: 2px;"></span>

                    <span class="skeleton-list custom-m-0 custom-ml-40 custom-mt-16" style="height: 14px; width: 85%;"></span>
                    <span class="skeleton-list custom-m-0 custom-ml-40 custom-mt-16" style="height: 14px; width: 85%;"></span>
                    <span class="skeleton-list custom-m-0 custom-ml-40 custom-mt-16" style="height: 14px; width: 85%;"></span>

                    <span class="button custom-mr-16 rounded light-gray custom-ml-0 custom-mt-16" style="width: 60px;height: 20px; align-self: flex-start;"></span>

                    <span class="skeleton-line custom-mt-32 custom-mb-32" style="height: 2px;"></span>
                    <span class="skeleton-line" style="height: 15px;"></span>
                </div>
                <span class="skeleton-line" style="height: 5px; width: 50%"></span>
                <span class="skeleton-line" style="height: 5px; width: 50%"></span>
            </div>
        </div>
    </div>
</div>
</div>
<?php }} ?>