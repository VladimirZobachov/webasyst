<?php /* Smarty version Smarty-3.1.14, created on 2024-12-07 19:59:54
         compiled from "/var/www/html/wa-system/webasyst/templates/layouts/Backend.html" */ ?>
<?php /*%%SmartyHeaderCode:2635274786754a93ad94388-64400343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f76ebd80db8fc45a627ad79d60a979ee4afde1be' => 
    array (
      0 => '/var/www/html/wa-system/webasyst/templates/layouts/Backend.html',
      1 => 1725624279,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2635274786754a93ad94388-64400343',
  'function' => 
  array (
    'skeleton' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'wa' => 0,
    'wa_app' => 0,
    'wa_url' => 0,
    'is_fixed_header' => 0,
    'content' => 0,
    'dashboard_module_url' => 0,
    'wa_backend_url' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6754a93adcb1e6_81138116',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6754a93adcb1e6_81138116')) {function content_6754a93adcb1e6_81138116($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
</title>
    <?php echo $_smarty_tpl->tpl_vars['wa']->value->css();?>

    <?php if ($_smarty_tpl->tpl_vars['wa_app']->value=='webasyst'){?>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/css/dashboard/dashboard.css?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
">
    <?php }?>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery/jquery-3.6.0.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery/jquery-migrate-3.3.2.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>

</head>
<body<?php if ($_smarty_tpl->tpl_vars['wa_app']->value=='webasyst'&&$_smarty_tpl->tpl_vars['wa']->value->get('tv')===''){?> class="tv"<?php }?>>
    <div id="wa">
        <?php if ($_smarty_tpl->tpl_vars['wa_app']->value!='webasyst'){?>
            <?php echo $_smarty_tpl->tpl_vars['wa']->value->header();?>

        <?php }?>
        <div id="wa-app" class="flexbox">
            <?php $_smarty_tpl->tpl_vars['is_fixed_header'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->cookie('wa_header_fixed',0), null, 0);?>
            <div class="content blank box dashboard js-main-content<?php if ($_smarty_tpl->tpl_vars['is_fixed_header']->value){?> header-apps header-fixed<?php }?><?php if (strpos(waRequest::server('REQUEST_URI'),"/webasyst/dashboard/dashboard/")!==false){?> is-dashboard<?php }?>">
                <?php if ($_smarty_tpl->tpl_vars['wa_app']->value=='webasyst'){?>
                    <?php echo $_smarty_tpl->tpl_vars['wa']->value->header();?>

                <?php }?>
                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

                
                <div class="dialog" id="dashboard-editor-dialog">
                    <div class="dialog-background"></div>
                    <form action="?module=dashboard&action=dashboardSave" data-dashboard-url="<?php echo $_smarty_tpl->tpl_vars['wa']->value->domainUrl();?>
<?php echo $_smarty_tpl->tpl_vars['dashboard_module_url']->value;?>
dashboard/">
                        <div class="dialog-body">
                            <div class="dialog-content fields">
                                <div class="field">
                                    <div class="name for-input bold">New dashboard</div>
                                    <div class="value"><input type="text" name="dashboard[name]" value="" class="bold large"></div>
                                </div>
                                <p class="hint"><i class="fas fa-lock text-gray custom-mr-4"></i> The dashboard will be available only to admin users with full access rights.</p>
                                <p class="hint"><i class="fas fa-tv fa-xs text-gray custom-mr-4"></i> A private link will be generated for streaming this dashboard on 4K and Full HD TVs.</p>
                            </div>
                            <div class="dialog-footer">
                                <input type="submit" value="Save" class="button">
                                <a class="js-close-dialog button light-gray" href="#">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="dialog" id="dashboard-delete-dialog">
                    <div class="dialog-background"></div>
                    <div class="dialog-body">
                        <h1 class="dialog-header break-word">Delete dashboard</h1>
                        <div class="dialog-content">
                            <p>You are about to permanently delete this dashboard. Are you sure?</p>
                        </div>
                        <div class="dialog-footer">
                            <input type="submit" value="Delete" class="button red">
                            <a class="js-close-dialog button light-gray" href="#">Cancel</a>
                            <span class="js-loading hidden"><i class="fas fa-spinner fa-spin"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <a href="javascript:void(0)" class="widgets-list-wrapper-close js-dashboard-edit-close">
                    <i class="fas fa-times"></i>
                </a>
                <div class="widgets-list-wrapper" data-backend-url="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['wa_backend_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                <?php if (!function_exists('smarty_template_function_skeleton')) {
    function smarty_template_function_skeleton($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['skeleton']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
                    <div class="skeleton list-group-wrapper">
                        <div class="list-wrapper">
                            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 12+1 - (1) : 1-(12)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                                <div class="widget-item-wrapper">
                                    <span class="skeleton-custom-box image-wrapper"></span>
                                    <span class="skeleton-line custom-mt-16"></span>
                                </div>
                            <?php }} ?>
                        </div>
                    </div>
                <?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

                <?php smarty_template_function_skeleton($_smarty_tpl,array());?>

                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php }} ?>