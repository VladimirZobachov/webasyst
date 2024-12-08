<?php /* Smarty version Smarty-3.1.14, created on 2024-12-08 12:45:37
         compiled from "/var/www/html/wa-apps/shop/templates/actions/backend/BackendOrders.html" */ ?>
<?php /*%%SmartyHeaderCode:567229801675594f168cb89-08337722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b72417f654e59652cd2962eabcc7cf70461409d2' => 
    array (
      0 => '/var/www/html/wa-apps/shop/templates/actions/backend/BackendOrders.html',
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
    '66dc3b709a584523bb9e5e30739007c546a75d35' => 
    array (
      0 => '/var/www/html/wa-apps/shop/templates/actions/orders/skeleton/split.html',
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
  'variables' => 
  array (
    'wa_url' => 0,
    'wa_app_static_url' => 0,
    'wa' => 0,
    'backend_orders' => 0,
    '_' => 0,
    'is_courier' => 0,
    'pending_count' => 0,
    '_pending_count' => 0,
    'state_counters' => 0,
    'all_count' => 0,
    'couriers' => 0,
    'contacts_as_courier' => 0,
    'courier' => 0,
    'shipping' => 0,
    's' => 0,
    'payments' => 0,
    'payment' => 0,
    'states' => 0,
    'id' => 0,
    'state' => 0,
    'sales_channels' => 0,
    'channel_id' => 0,
    'channel_id_escaped' => 0,
    'channel' => 0,
    'param_channel' => 0,
    'has_storefront' => 0,
    'template_content' => 0,
    'template' => 0,
    'default_view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_675594f17fbae1_02457739',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_675594f17fbae1_02457739')) {function content_675594f17fbae1_02457739($_smarty_tpl) {?><?php if (!is_callable('smarty_block_wa_js')) include '/var/www/html/wa-system/vendors/smarty-plugins/block.wa_js.php';
if (!is_callable('smarty_modifier_replace')) include '/var/www/html/wa-system/vendors/smarty3/plugins/modifier.replace.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('wa_js', array('file'=>"js/order/order.min.js")); $_block_repeat=true; echo smarty_block_wa_js(array('file'=>"js/order/order.min.js"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery-tooltip/jquery.tooltip.patched.min.js
<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/order/timepicker/jquery.timepicker.min.js
<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/tmpl.min.js
<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/lazy.load.js
<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/orders.js
<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/order/list.js
<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/order/edit.js
<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/form/customer/backend.js
<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/order/form/customer.js
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_wa_js(array('file'=>"js/order/order.min.js"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<link href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
css/backend/orders/orders.css?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" rel="stylesheet" />
<link href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/order/timepicker/jquery.timepicker.css?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" rel="stylesheet" type="text/css" />

<?php $_smarty_tpl->tpl_vars['is_courier'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->user()->getRights('shop','orders')==shopRightConfig::RIGHT_ORDERS_COURIER, null, 0);?>
<div id="s-order-nav" class="flexbox wrap-mobile s-order-nav" style="display:none;">

    <div class="s-order-nav-block js-order-nav-view flexbox space-8 wide-mobile">

        <!-- VIEW -->
        <div class="s-order-nav-view s-order-view-toggle js-order-view wide">
            <ul class="chips custom-my-0" id="s-orders-views">
                <li data-view="split" class="rounded transparent custom-mx-0">
                    <a href="#" title="List"><i class="fas fa-user-circle"></i></a>
                </li>

                <li data-view="table" class="rounded transparent custom-mx-0">
                    <a href="#" title="Table"><i class="fas fa-list"></i></a>
                </li>

                <li data-view="split" class="rounded transparent custom-mx-0 js-view-pos">
                    <a class="s-position-relative" href="#" title="Point of sale">
                        <i class="fas fa-cash-register"></i>
                    </a>
                </li>

                <li data-view="kanban" class="rounded transparent custom-mx-0">
                    <a class="s-position-relative" href="#" title="Kanban">
                        <i class="fas fa-table"></i>
                        <?php if (!shopLicensing::isPremium()){?><i class="fas fa-star s-premium-status"></i><?php }?>
                    </a>
                </li>

                <!-- plugin hook: 'backend_orders.viewmode_li' -->
                
                <?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['viewmode_li']);?>
<?php } ?>
            </ul>
        </div>

        <div class="s-order-nav-view flexbox space-8">
            <!-- SORT -->
            <div class="s-order-nav-sort js-orders-sort">
                <div class="flexbox space-8">
                    <div class="dropdown s-orders-sort-dropdown js-sort-dropdown">
                        <button type="button" class="dropdown-toggle without-arrow button nobutton circle nowrap text-gray light-gray" title="Sort order" data-sort="" data-order="">
                            <i class="fas fa-sort-amount-up count hidden asc"></i>
                            <i class="fas fa-sort-amount-down count hidden desc"></i>
                        </button>

                        <div class="dropdown-body right">
                            <ul class="menu">
                                <li class="s-sort" data-sort="create_datetime">
                                    <a href="#" data-sort="create_datetime">
                                        <span>Time created</span>
                                        <i class="fas fa-sort-amount-up count hidden asc"></i>
                                        <i class="fas fa-sort-amount-down count hidden desc"></i>
                                    </a>
                                </li>

                                <li class="s-sort" data-sort="updated">
                                    <a href="#" data-sort="updated">
                                        <span>Time updated</span>
                                        <i class="fas fa-sort-amount-up count hidden asc"></i>
                                        <i class="fas fa-sort-amount-down count hidden desc"></i>
                                    </a>
                                </li>

                                <li class="s-sort" data-sort="paid_datetime">
                                    <a href="#" data-sort="paid_datetime">
                                        <span>Time paid</span>
                                        <i class="fas fa-sort-amount-up count hidden asc"></i>
                                        <i class="fas fa-sort-amount-down count hidden desc"></i>
                                    </a>
                                </li>

                                <li class="s-sort" data-sort="shipping_datetime">
                                    <a href="#" data-sort="shipping_datetime">
                                        <span>Shipping time</span>
                                        <i class="fas fa-sort-amount-up count hidden asc"></i>
                                        <i class="fas fa-sort-amount-down count hidden desc"></i>
                                    </a>
                                </li>

                                <li class="s-sort" data-sort="state_id">
                                    <a href="#" data-sort="state_id">
                                        <span>Order status</span>
                                        <i class="fas fa-sort-amount-up count hidden asc"></i>
                                        <i class="fas fa-sort-amount-down count hidden desc"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SEARCH -->
            <div class="s-order-nav-search">
                <button type="button" class="button nobutton light-gray circle js-orders-search-show">
                    <span class="icon text-gray"><i class="fas fa-search"></i></span>
                </button>
                <!-- teleport for view=split or mobile after parent block -->
                <div class="s-order-search hidden js-orders-search">
                    <div class="search-wrapper">
                        <input type="search" id="s-orders-search" class="search-input small" placeholder="Search orders">
                        <button type="button" class="button light-gray circle custom-pr-4 js-orders-search-hide">
                            <span class="icon"><i class="fas fa-times"></i></span>
                        </button>
                    </div>
                </div>
            </div>
            <?php if (!$_smarty_tpl->tpl_vars['is_courier']->value){?>
                <!-- NEW ORDER -->
                <a class="rounded button small nowrap s-order-nav-plus-button" href="#/orders/new/" title="New order">
                    <span class="icon"><i class="fas fa-plus"></i></span>
                    <span class="s-order-nav-plus-button-label"><span class="desktop-and-tablet-only">New order</span></span>
                </a>
            <?php }?>
        </div>

    </div>

    <div class="s-order-nav-block hide-when-not-view-pos" id="js-orders-stats"></div>

    <?php if (!$_smarty_tpl->tpl_vars['is_courier']->value){?>
    <!-- PRIMARY FILTERS -->
    <div class="s-order-nav-block s-order-nav-block-split-filters hide-when-view-pos">

        <!-- plugin hook: 'backend_orders.sidebar_section' -->
        
        <?php if (!empty($_smarty_tpl->tpl_vars['backend_orders']->value)){?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['sidebar_section']);?>
<?php } ?><?php }?>

        <div class="bricks s-order-nav-bricks custom-m-0 custom-mb-4">
            <a href="#/orders/state_id=new|processing|auth|paid" class="brick shadowed js-orders-link js-orders-hide-filters js-order-nav-brick" id="s-pending-orders">
                <?php $_smarty_tpl->tpl_vars['_pending_count'] = new Smarty_variable(empty($_smarty_tpl->tpl_vars['pending_count']->value) ? 0 : $_smarty_tpl->tpl_vars['pending_count']->value, null, 0);?>
                <span class="custom-pr-4 icon js-pending-counter js-pending_counters-counter bold"><?php echo $_smarty_tpl->tpl_vars['_pending_count']->value;?>
</span>
                <?php if ($_smarty_tpl->tpl_vars['wa']->value->user()->getRights('shop','orders')>1){?><span class="count js-total_processing-counter"></span><?php }?>
                <span class="label nowrap semibold">Processing<?php if ($_smarty_tpl->tpl_vars['state_counters']->value['new']){?> <span class="small highlighted custom-px-4 js-new-order-counter">+<?php echo $_smarty_tpl->tpl_vars['state_counters']->value['new'];?>
</span><?php }?></span>
            </a>
            <a href="#/orders/all/" class="brick shadowed js-orders-link js-orders-show-filters js-order-nav-brick" id="s-all-orders">
                <span class="icon"><i class="fas fa-shopping-cart"></i></span>
                <span class="count js-all-counter"><?php echo $_smarty_tpl->tpl_vars['all_count']->value;?>
</span>
                <span class="label semibold">All orders</span>
            </a>
        </div>
    </div>

    <!-- SECONDAY FILTERS -->
    <div class="s-order-nav-block s-order-nav-block-chips js-order-nav-block-secondary s-order-nav-block-filters hide-when-view-pos" style="display: none;">
    <ul class="sidebar-dropdown-container chips small custom-m-0">
        <li class="s-order-nav-button-wrapper s-order-nav-only-table-kanban">
            <a href="#/orders/state_id=new|processing|auth|paid" class="button light-gray js-orders-link js-orders-hide-filters js-order-nav-brick s-order-nav-button js-pending-orders">
                <span class="label">Processing</span>
                <span class="small highlighted custom-px-4 js-new-order-counter">+<?php echo $_smarty_tpl->tpl_vars['state_counters']->value['new'];?>
</span>
                <span class="hint">
                    <span class="js-pending-counter js-pending_counters-counter"><?php echo $_smarty_tpl->tpl_vars['_pending_count']->value;?>
</span>,
                    <span class="js-total_processing-counter"></span>
                </span>
            </a>
        </li>
        <?php if (!empty($_smarty_tpl->tpl_vars['couriers']->value)||!empty($_smarty_tpl->tpl_vars['contacts_as_courier']->value)){?>
            <li class="dropdown js-orders-dropdown">
                <button class="dropdown-toggle light-gray full-width align-left nowrap" data-text="Couriers">Couriers</button>
                <div class="dropdown-body">
                    <ul class="menu">
                        <li>
                            <a href="javascript:void(0)" class="custom-pl-16" data-param="all=params.courier_id|courier_contact_id">
                                <span>All couriers</span>
                            </a>
                        </li>
                        <?php if (!empty($_smarty_tpl->tpl_vars['couriers']->value)){?>
                            <?php  $_smarty_tpl->tpl_vars['courier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['courier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['couriers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['courier']->key => $_smarty_tpl->tpl_vars['courier']->value){
$_smarty_tpl->tpl_vars['courier']->_loop = true;
?>
                                <li>
                                    <a href="javascript:void(0)" data-param="params.courier_id=<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['courier']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" class="js-orders-link">
                                        <span class="icon">
                                            <?php if ($_smarty_tpl->tpl_vars['courier']->value['contact_id']){?>
                                                <i style="background-image: url(<?php echo waContact::getPhotoUrl($_smarty_tpl->tpl_vars['courier']->value['contact_id'],$_smarty_tpl->tpl_vars['courier']->value['photo'],40);?>
);vertical-align: middle;"></i>
                                            <?php }else{ ?>
                                                <i class="fas fa-walking"></i>
                                            <?php }?>
                                        </span>
                                        <span><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['courier']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                                        <span class="count"><?php echo $_smarty_tpl->tpl_vars['courier']->value['count'];?>
</span>
                                    </a>
                                </li>
                            <?php } ?>
                        <?php }?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['contacts_as_courier']->value)){?>
                            <?php  $_smarty_tpl->tpl_vars['courier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['courier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contacts_as_courier']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['courier']->key => $_smarty_tpl->tpl_vars['courier']->value){
$_smarty_tpl->tpl_vars['courier']->_loop = true;
?>
                                <li>
                                    <a href="javascript:void(0)" data-param="courier_contact_id=<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['courier']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" class="js-orders-link">
                                        <span class="icon">
                                            <i class="userpic" style="background-image: url(<?php echo waContact::getPhotoUrl($_smarty_tpl->tpl_vars['courier']->value['id'],$_smarty_tpl->tpl_vars['courier']->value['photo'],20);?>
);"></i>
                                        </span>
                                        <span><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['courier']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                                        <span class="count"><?php echo $_smarty_tpl->tpl_vars['courier']->value['count'];?>
</span>
                                    </a>
                                </li>
                            <?php } ?>
                        <?php }?>
                    </ul>
                </div>
            </li>
        <?php }?>

        <?php if (!empty($_smarty_tpl->tpl_vars['shipping']->value)){?>
            <li class="dropdown js-orders-dropdown more-indent-icon">
                <button class="dropdown-toggle light-gray full-width align-left nowrap" data-text="Shipping">Shipping</button>
                <div class="dropdown-body">
                    <ul class="menu">
                        <li>
                            <a href="javascript:void(0)" class="custom-pl-12" data-param="all=params.shipping_id">
                                <span>All shipping methods</span>
                            </a>
                        </li>
                        <?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shipping']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value){
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
                            <li>
                                <a href="javascript:void(0)" data-param="params.shipping_id=<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['s']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" class="js-orders-link">
                                    <span class="icon">
                                        <?php if ($_smarty_tpl->tpl_vars['s']->value['logo']){?>
                                            <i style="background-image: url(<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['s']->value['logo'], ENT_QUOTES, 'UTF-8', true);?>
);background-repeat:no-repeat;background-size:cover;"></i>
                                        <?php }elseif(!empty($_smarty_tpl->tpl_vars['s']->value['info']['img'])){?>
                                            <i style="background-image: url(<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['s']->value['info']['img'], ENT_QUOTES, 'UTF-8', true);?>
);background-repeat:no-repeat;background-size:cover;"></i>
                                        <?php }else{ ?>
                                            <i class="fas fa-truck"></i>
                                        <?php }?>
                                    </span>
                                    <span><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['s']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </li>
        <?php }?>

        <?php if (!empty($_smarty_tpl->tpl_vars['payments']->value)){?>
            <li class="dropdown js-orders-dropdown more-indent-icon">
                <button class="dropdown-toggle light-gray full-width align-left nowrap" data-text="Payment">Payment</button>
                <div class="dropdown-body">
                    <ul class="menu">
                        <li>
                            <a href="javascript:void(0)" class="custom-pl-16" data-param="all=params.payment_id">
                                <span>All payment methods</span>
                            </a>
                        </li>
                        <?php  $_smarty_tpl->tpl_vars['payment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['payment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['payment']->key => $_smarty_tpl->tpl_vars['payment']->value){
$_smarty_tpl->tpl_vars['payment']->_loop = true;
?>
                            <li>
                                <a href="javascript:void(0)" data-param="params.payment_id=<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['payment']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" class="js-orders-link">
                                    <span class="icon">
                                        <?php if ($_smarty_tpl->tpl_vars['payment']->value['logo']){?>
                                            <i style="background-image: url(<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['payment']->value['logo'], ENT_QUOTES, 'UTF-8', true);?>
);background-repeat:no-repeat;background-size:cover;"></i>
                                        <?php }elseif(!empty($_smarty_tpl->tpl_vars['payment']->value['info']['img'])){?>
                                            <i style="background-image: url(<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['payment']->value['info']['img'], ENT_QUOTES, 'UTF-8', true);?>
);background-repeat:no-repeat;background-size:cover;"></i>
                                        <?php }else{ ?>
                                            <i class="fas fa-credit-card"></i>
                                        <?php }?>
                                    </span>
                                    <span><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['payment']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </li>
        <?php }?>

        <li class="dropdown js-orders-dropdown s-orders-dropdown-status">
            <button class="dropdown-toggle light-gray nowrap" data-text="Status">
                Status
            </button>

            <div class="dropdown-body">
                <ul class="menu">
                    <li>
                        <a href="javascript:void(0)" class="custom-pl-12" data-param="all=state_id">
                            <span>All statuses</span>
                        </a>
                    </li>

                    <!-- plugin hook: 'backend_orders.sidebar_top_li' -->
                    
                    <?php if (!empty($_smarty_tpl->tpl_vars['backend_orders']->value)){?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['sidebar_top_li']);?>
<?php } ?><?php }?>

                    <?php  $_smarty_tpl->tpl_vars['state'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['state']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['states']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['state']->key => $_smarty_tpl->tpl_vars['state']->value){
$_smarty_tpl->tpl_vars['state']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['state']->key;
?>
                        <li data-state-id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                            <a href="#/orders/state_id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/" data-param="state_id=<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="js-orders-link" style="<?php echo $_smarty_tpl->tpl_vars['state']->value->getStyle();?>
">
                                <span class="icon"><i class="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->convertIcon($_smarty_tpl->tpl_vars['state']->value->getOption('icon'));?>
" style="<?php echo $_smarty_tpl->tpl_vars['state']->value->getStyle();?>
"></i></span>
                                <span class="label"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['state']->value->getName(), ENT_QUOTES, 'UTF-8', true);?>
</span>
                                <span class="count"><?php if (isset($_smarty_tpl->tpl_vars['state_counters']->value[$_smarty_tpl->tpl_vars['id']->value])){?><?php echo $_smarty_tpl->tpl_vars['state_counters']->value[$_smarty_tpl->tpl_vars['id']->value];?>
<?php }else{ ?>0<?php }?></span>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </li>

        <li class="dropdown js-orders-dropdown s-orders-dropdown-sales_channels">
            <button class="dropdown-toggle light-gray nowrap" data-text="Sales channels">
                Sales channels
            </button>

            <div class="dropdown-body">
                <ul class="menu menus-storefronts-filter">
                    <li>
                        <a href="javascript:void(0)" class="custom-pl-16" data-param="all=params.storefront|params.sales_channel">
                            <span>All channels</span>
                        </a>
                    </li>

                    <?php  $_smarty_tpl->tpl_vars['channel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['channel']->_loop = false;
 $_smarty_tpl->tpl_vars['channel_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sales_channels']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['channel']->key => $_smarty_tpl->tpl_vars['channel']->value){
$_smarty_tpl->tpl_vars['channel']->_loop = true;
 $_smarty_tpl->tpl_vars['channel_id']->value = $_smarty_tpl->tpl_vars['channel']->key;
?>
                        <?php ob_start();?><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['channel_id']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['channel_id_escaped'] = new Smarty_variable($_tmp1, null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['has_storefront'] = new Smarty_variable(strpos($_smarty_tpl->tpl_vars['channel_id_escaped']->value,'storefront:')!==false&&strpos($_smarty_tpl->tpl_vars['channel_id_escaped']->value,'/')!==false, null, 0);?>

                        <?php ob_start();?><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['channel']->value['storefront'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp2=ob_get_clean();?><?php if (empty($_tmp2)){?>
                            <?php $_smarty_tpl->tpl_vars['param_channel'] = new Smarty_variable(('sales_channel=').($_smarty_tpl->tpl_vars['channel_id_escaped']->value), null, 0);?>
                        <?php }else{ ?>
                            <?php $_smarty_tpl->tpl_vars['param_channel'] = new Smarty_variable(str_replace('storefront:','',$_smarty_tpl->tpl_vars['channel_id_escaped']->value), null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['param_channel'] = new Smarty_variable(('storefront=').($_smarty_tpl->tpl_vars['param_channel']->value), null, 0);?>
                        <?php }?>

                        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['has_storefront']->value ? '/' : '';?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['param_channel'] = new Smarty_variable((('params.').($_smarty_tpl->tpl_vars['param_channel']->value)).($_tmp3), null, 0);?>
                        <li data-storefront="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['channel']->value['storefront'], ENT_QUOTES, 'UTF-8', true);?>
" data-sales-channel="<?php echo $_smarty_tpl->tpl_vars['channel_id_escaped']->value;?>
" class="list">
                            <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['channel']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" class="js-orders-link" data-param="<?php echo $_smarty_tpl->tpl_vars['param_channel']->value;?>
">
                                <span class="icon"><i class="fas fa-shopping-cart"></i></span>
                                <span class="label"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['channel']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                                <span class="count"><?php echo $_smarty_tpl->tpl_vars['channel']->value['count'];?>
</span>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </li>

        <!-- plugin hook: 'backend_orders.sidebar_bottom_li' -->
        
        <?php if (!empty($_smarty_tpl->tpl_vars['backend_orders']->value)){?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['sidebar_bottom_li']);?>
<?php } ?><?php }?>

        <li class="transparent js-remove-filters-link hidden">
            <a href="#/orders/all/" class="s-remove-filters-link gray">
                <i class="fas fa-times-circle" title="Clear filters"></i>
            </a>
        </li>
    </ul>
    </div>
    <?php }?>

</div>
<div class="flexbox" id="s-content">
    
    <div id="skeleton_orders" class="width-100"></div>
</div>


<?php $_smarty_tpl->_capture_stack[0][] = array("template-order-product-img", null, null); ob_start(); ?>

    {% if(o.url){ %}<img src="{%#o.url%}" class="s-ordered-product-image not-found" />{% } else { %}<img src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
img/image-dummy.svg" class="s-ordered-product-image not-found" />{% } %}

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("template-order", null, null); ob_start(); ?>

    {% var options = o.options || {}; %}
    {% var product = o.data.product; %}
    {% var sku_ids = o.data.sku_ids; %}
    {% var index = options.index || '0'; %}
    {% var sku_count = $.shop.helper.size(product.skus); %}
    {% var chosen_sku_id = product.sku_id; %}
    {% var currency = options.currency; %}
    {% var stocks = o.options.stocks || {}; %}
    {% var stock_unit = o.data.stock_unit; %}
    {% var active_sku = product.skus[product.sku_id]; %}
    <tr data-product-id="{%#product.id%}" data-index={%#index%} class="s-order-item">
        <td class="min-width valign-top">{% include('template-order-product-img', { url: product.url_crop_small }); %}</td>
        <td>
            <strong>{%=product.name%}</strong>
            <span class="s-order-product-sku-info">
            <span class="gray custom-mx-4">{%#product.price_html%}</span>

            {% if (sku_count == 1) { %}
                {% if (product.compare_price && product.compare_price > 0) { %}
                        <span class="hint compare-price">(<span style="text-decoration: line-through">{%=Number(Math.round((product.compare_price)*100)/100) %}</span> {%#currency%})</span>
                {% } %}
            {% } %}

            {% if (sku_count == 1) { %}
            <span class="s-orders-stock-icon-aggregate small nowrap">
                    {%#product.icon%}
                </span>
            <span class="s-orders-stock-icon"></span>
            {% } else { %}
                {%#product.icon%}
            {% } %}
            </span>
            <p>
                {% if (sku_count > 1) { %}
                    <ul class="unstyled separated small s-orders-skus">
                        {% var sku_id, sku_id_iterator = $.shop.iterator(sku_ids); %}
                        {% while (sku_id = sku_id_iterator.next()) { %}
                            {% var sku = product.skus[sku_id]; %}
                            {% var checked = sku.checked; %}
                            {% if (checked) { %}
                                {% chosen_sku_id = sku_id; %}
                            {% } %}
                            <li>
                                <label class="flexbox middle space-4 wrap">

                                    <input type="radio"
                                           name="sku[add][{%#index%}]"
                                           value="{%#sku_id%}"
                                           {% if (checked) { %} checked="checked" {% } %}>

                                    <span class="semibold">{%=sku.name%}</span>

                                    {% if (sku.sku) { %}
                                        <span class="gray">{%=sku.sku%}</span>
                                    {% } %}

                                    <strong class="nowrap">{%#sku.price_html%}</strong>

                                    {% if (sku.compare_price && sku.compare_price > 0) { %}
                                        <span class="hint compare-price">(<span style="text-decoration: line-through">{%=Number(Math.round((sku.compare_price)*100)/100)%}</span> {%#currency%})</span>
                                    {% } %}

                                    <span class="s-orders-stock-icon-aggregate small nowap">
                                        {%#sku.icon%}
                                    </span>
                                    <span class="s-orders-stock-icon" style="display:none;"></span>
                                    <div class="s-orders-sku-stock-place custom-ml-8">
                                        {% if (checked) { %}
                                            {% include('template-order-stocks-add', { sku: sku, stocks: stocks, index: index }); %}
                                        {% } %}
                                    </div>
                                </label>
                            </li>
                        {% } %}
                    </ul>
                {% } else { %}

                    {% var sku = product.skus[product.sku_id]; %}
                    {% if ( sku && !sku.fake && (typeof sku.sku === 'string' && sku.sku.length > 0) ) { %}
                        <span class="hint">{%=sku.sku%}</span>
                    {% } %}

                    <div class="s-orders-sku-stock-place custom-ml-8">
                        {% include('template-order-stocks-add', { sku: product.skus[product.sku_id], stocks: stocks, index: index }); %}
                    </div>
                    <input type="hidden" name="sku[add][{%#index%}]" value="{%#product.sku_id%}">
                {% } %}
            </p>

            {% if (!$.isEmptyObject(product.services)) { %}
            <p>{% include('template-order-services-add', {
                services: product.services,
                service_ids: o.data.service_ids,
                options: options
                }); %}</p>
            {% } %}
        </td>
        <input type="hidden" name="product[add][{%#index%}]" value="{%#product.id%}">
        <td class="valign-top nowrap{% if (options.price_edit) { %} align-right{% } %}">

            <div class="s-quantity-section" id="js-quantity-section">
                <div class="s-section-body">
                    <div class="s-field-wrapper">
                        <span class="gray">&times;</span>
                        <input type="text"
                               name="quantity[add][{%#index%}][product]"
                               class="s-orders-quantity shortest smaller bold js-quantity-field"
                               value="">

                        {% if (stock_unit) { %}
                            <span class="s-unit">{%#stock_unit["name_short"]%}</span>
                        {% } %}
                    </div>
                </div>
                {% if (product["show_order_counts"]) { %}
                    <div class="s-section-footer small" style="margin-top: 4px;">
                        <div class="s-step">
                            <span class="s-label">Step=</span>
                            <span class="s-value">{%#parseFloat(product["order_multiplicity_factor"])%}</span>
                            {% if (stock_unit) { %}
                                <span class="s-unit">{%#stock_unit["name_short"]%}</span>
                            {% } %}
                        </div>
                        <div class="s-min js-order_count_min">
                            <span class="s-label">Min.=</span>
                            <span class="s-value js-value">
                                {% if (active_sku["order_count_min"]) { %}
                                    {%#parseFloat(active_sku["order_count_min"])%}
                                {% } else { %}
                                    {%#parseFloat(product["order_count_min"])%}
                                {% } %}
                            </span>
                            {% if (stock_unit) { %}
                                <span class="s-unit">{%#stock_unit["name_short"]%}</span>
                            {% } %}
                        </div>
                    </div>
                {% } %}
            </div>

        </td>

        <td class="valign-top align-right s-orders-product-price">
            {% if (!options.price_edit) { %}
            <span>{%#product.skus[chosen_sku_id].price_html%}</span>
            <input type="hidden" name="price[add][{%#index%}][product]" value="{%#''+product.skus[chosen_sku_id].price%}" class="short">
            {% } else { %}
            <input type="text" name="price[add][{%#index%}][product]" value="{%#''+product.skus[chosen_sku_id].price%}" class="shorter smaller number semibold js-order-edit-item-price">
            <span class="small semibold">{%#currency%}</span>
            {% } %}
            <br/><span class="hint js-item-total-discount" data-discount-id="{%#index%}"></span>
        </td>
        <td class="valign-top"><a href="#" class="s-order-item-delete"><i class="fas fa-trash-alt text-red"></i></a></td>
    </tr>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array("template-order-stocks-edit", null, null); ob_start(); ?>

    {% var sku = o.sku; %}
    {% var stocks = o.stocks; %}
    {% var item_id = o.item_id; %}
    {% if (sku && !$.isEmptyObject(sku.stock)) { %}
    <div class="wa-select small">
        <select name="stock[edit][{%#item_id%}]" class="s-orders-sku-stock-select">
            {% for (var i = 0; i < stocks.length; i += 1) { %}
            {% var stock_id = stocks[i].id; %}
            <option value="{%#stock_id%}" data-icon="{%#''+sku.icons[stock_id]%}">
                @{%=stocks[i].name%} ({%#sku.count_htmls[stock_id]%})
            </option>
            {% } %}
        </select>
    </div>
    <em class="errormsg state-error-hint s-error-item-stock_id"></em>
    {% } else { %}
    <input type="hidden" name="stock[edit][{%#item_id%}]" value="0">
    {% } %}

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array("template-order-stocks-add", null, null); ob_start(); ?>

    {% var sku = o.sku; %}
    {% var stocks = o.stocks; %}
    {% var index = o.index; %}

    {% if (sku && !$.isEmptyObject(sku.stock)) { %}
    <div class="wa-select small">
        <select name="stock[add][{%#index%}][product]" class="s-orders-sku-stock-select">
            {% for (var i = 0; i < stocks.length; i += 1) { %}
            {% var stock_id = stocks[i].id; %}
            <option value="{%#stocks[i].id%}" data-icon="{%#''+sku.icons[stock_id]%}">
                @{%= stocks[i].name%} ({%#sku.count_htmls[stock_id]%})
            </option>
            {% } %}
        </select>
    </div>
    <em class="errormsg state-error-hint s-error-item-stock_id"></em>
    {% } else { %}
    <input type="hidden" name="stock[add][{%#index%}][product]" value="0">
    {% } %}


<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array("template-order-services-add", null, null); ob_start(); ?>

    <ul class="unstyled separated small s-orders-services">
    {% var options = o.options || {}; %}
    {% var index = options.index || '0'; %}
    {% var currency = options.currency; %}
    {% var services = o.services; %}
    {% var service_ids = o.service_ids; %}
    {% for (var i = 0, n = service_ids.length; i < n; i += 1) { %}
    {% var service_id = service_ids[i]; %}
    {% var service = services[service_id]; %}
    {% var multi_variants = $.shop.helper.size(service.variants) > 1; %}
    <li>
    <label>
        <input type="checkbox" name="service[add][{%#index%}][]" value="{%#service_id%}"
               {% if (service.checked) { %}checked="checked"{% } %}>
        {%=service.name%}
        {% if (!multi_variants) { %}
        <strong>{%#service.variants[service.variant_id].price_html%}</strong>
        {% } %}
    </label>
    {% if (multi_variants) { %}
    <div class="wa-select smaller custom-mb-4">
        <select name="variant[add][{%#index%}][{%#service_id%}]" class="s-orders-service-variant">
        {% for (var variant_id in service.variants) { %}
        {% var variant = service.variants[variant_id]; %}
        <option value="{%#variant.id%}" data-price="{%#''+variant.price%}"
        data-currency="{%#variant.currency%}"
        data-price="{%#variant.price%}"
        {% if (service.currency === $.order_edit.getPercentSymbol()) { %}data-percent-price="{%#variant.percent_price%}"{% } %}
        {% if (variant.status == <?php echo shopProductServicesModel::STATUS_DEFAULT;?>
) { %}selected="selected"{% } %}>
        {%=variant.name%} ({%#variant.price_str%})
        </option>
        {% } %}
        </select>
    </div>
    {% } else { %}
    <input type="hidden" name="variant[add][{%#index%}][{%#service_id%}]" value="{%#service.variant_id%}">
    {% } %}
    <span class="nowrap">
        <input type="text" name="price[add][{%#index%}][service][{%#service_id%}]" value="{%#''+service.price%}"
            data-currency="{%#service.currency%}"
            data-price="{%#service.price%}"
            {% if (service.currency === $.order_edit.getPercentSymbol()) { %}data-percent-price="{%#service.percent_price%}"{% } %}
            class="shorter smaller s-orders-service-price">{%#currency%}
    </span>
    <br/><span class="hint js-item-total-discount" data-discount-id="{%#index%}_{%#service_id%}"></span>
    </li>
    {% } %}
    </ul>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("template-order-services-edit", null, null); ob_start(); ?>

    <ul class="unstyled separated small s-orders-services">
    {% var options = o.options || {}; %}
    {% var index = options.index || '0'; %}
    {% var currency = options.currency; %}
    {% var services = o.services; %}
    {% var service_ids = o.service_ids; %}
    {% for (var i = 0, n = service_ids.length; i < n; i += 1) { %}
    {% var service_id = service_ids[i]; %}
    {% var service = services[service_id]; %}
    {% var multi_variants = $.shop.helper.size(service.variants) > 1; %}
    <li>
    <label>
        <input type="checkbox" name="service[edit][{%#index%}][new][{%#service_id%}]" value="{%#service_id%}"
               {% if (service.checked) { %}checked="checked"{% } %}>
        {%=service.name%}
        {% if (!multi_variants) { %}
        <strong>{%#service.variants[service.variant_id].price_html%}</strong>
        {% } %}
    </label>
    {% if (multi_variants) { %}
    <div class="wa-select smallest custom-mb-4">
        <select name="variant[edit][{%#index%}][{%#service_id%}]" class="s-orders-service-variant">
        {% for (var variant_id in service.variants) { %}
        {% var variant = service.variants[variant_id]; %}
        <option value="{%#variant.id%}" data-price="{%#''+variant.price%}"
        data-currency="{%#variant.currency%}"
        data-price="{%#variant.price%}"
        {% if (service.currency === $.order_edit.getPercentSymbol()) { %}data-percent-price="{%#variant.percent_price%}"{% } %}
        {% if (variant.status == <?php echo shopProductServicesModel::STATUS_DEFAULT;?>
) { %}selected="selected"{% } %}>
        {%=variant.name%} ({%#variant.price_str%})
        </option>
        {% } %}
        </select>
    </div>
    {% } else { %}
    <input type="hidden" name="variant[edit][{%#index%}][{%#service_id%}]" value="{%#service.variant_id%}">
    {% } %}
    <span class="nowrap">
        <input type="text" name="price[edit][new][{%#index%}][{%#service_id%}]" value="{%#''+service.price%}"
            data-currency="{%#service.currency%}"
            data-price="{%#service.price%}"
            {% if (service.currency === $.order_edit.getPercentSymbol()) { %}data-percent-price="{%#service.percent_price%}"{% } %}
            class="shorter s-orders-service-price smaller">{%#currency%}
    </span>
    <br/><span class="hint js-item-total-discount" data-discount-id="{%#index%}_{%#service_id%}"></span>
    </li>
    {% } %}
    </ul>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>


<?php  $_smarty_tpl->tpl_vars['template_content'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['template_content']->_loop = false;
 $_smarty_tpl->tpl_vars['template'] = new Smarty_Variable;
 $_from = Smarty::$_smarty_vars['capture']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['template_content']->key => $_smarty_tpl->tpl_vars['template_content']->value){
$_smarty_tpl->tpl_vars['template_content']->_loop = true;
 $_smarty_tpl->tpl_vars['template']->value = $_smarty_tpl->tpl_vars['template_content']->key;
?>
    <?php if ($_smarty_tpl->tpl_vars['template_content']->value&&(strpos($_smarty_tpl->tpl_vars['template']->value,'template-')===0)){?>
        <script id="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
" type="text/html">
            <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['template_content']->value,'</','<\/');?>

        </script>
        <?php $_smarty_tpl->_capture_stack[0][] = array($_smarty_tpl->tpl_vars['template']->value, null, null); ob_start(); ?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php }?>
<?php } ?>


<div id="js-media-mobile" class="mobile-only"></div>

<script>
    (function() {
        function getNeedView(prop) {
            var hashParams = { };
            var e,
                a = /\+/g,
                r = /([^&;=]+)=?([^&;]*)/g,
                d = function (s) { return decodeURIComponent(s.replace(a, " ")); },
                q = window.location.hash.substring(1 + 0);

            while (e = r.exec(q)) {
                var prop = d(e[1]);
                var val = d(e[2]);
                if (val) {
                    var regex = new RegExp('\\w+', 'g');
                    var m = regex.exec(val);
                    if (m.length) {
                        val = m[0];
                    }
                }

                if(['/orders/view', 'view'].includes(prop)) {
                    return val;
                }

                var regOrder= new RegExp('order/\\d+', 'g');
                if (regOrder.test(prop)) {
                    return 'order';
                }
            }

            return null;
        }

        var view = getNeedView() || $.storage.get('shop/orders/view');

        // :TODO fix if/else for type orders on the backend
        var skeleton_template;
        switch (view) {
            case 'table':
                skeleton_template = '<?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ('../orders/skeleton/table.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php $_tmp4=ob_get_clean();?><?php echo preg_replace('!\s+!u', ' ',$_tmp4);?>
';
                break;
            case 'kanban':
                skeleton_template = '<?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ('../orders/skeleton/kanban.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('select'=>'kanban'), 0);?>
<?php $_tmp5=ob_get_clean();?><?php echo preg_replace('!\s+!u', ' ',$_tmp5);?>
';
                break;
            case 'order':
                skeleton_template = '<?php ob_start();?><?php /*  Call merged included template "../orders/skeleton/split.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('../orders/skeleton/split.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('no_sidebar'=>true), 0, '567229801675594f168cb89-08337722');
content_675594f17c34c4_79113510($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "../orders/skeleton/split.html" */?><?php $_tmp6=ob_get_clean();?><?php echo preg_replace('!\s+!u', ' ',$_tmp6);?>
';
                break;
            default:
                skeleton_template = '<?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ('../orders/skeleton/split.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php $_tmp7=ob_get_clean();?><?php echo preg_replace('!\s+!u', ' ',$_tmp7);?>
';
                break;
        }

        $('#skeleton_orders').html(skeleton_template);

        const class_hide_mobile = 'desktop-and-tablet-only';
        if (new RegExp('id=\\d+').test(window.location.hash)) {
            $('#js-split-order-sidebar').addClass(class_hide_mobile);
        } else {
            $('#js-split-order-content').addClass(class_hide_mobile);
        }
    })();

    $(function() {
        if ($.wa_push) {
            $.wa_push.init();
        }

        $.orders.init({
            view: '<?php echo $_smarty_tpl->tpl_vars['default_view']->value;?>
',
            wa_app_static_url: '<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
'
        });
    });
</script>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2024-12-08 12:45:37
         compiled from "/var/www/html/wa-apps/shop/templates/actions/orders/skeleton/split.html" */ ?>
<?php if ($_valid && !is_callable('content_675594f17c34c4_79113510')) {function content_675594f17c34c4_79113510($_smarty_tpl) {?><?php /*  Call merged included template "./orders_list.inc.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('./orders_list.inc.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '567229801675594f168cb89-08337722');
content_675594f17c5663_53035966($_smarty_tpl);
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
content_675594f17db821_42682290($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./split_body.html" */?>
    </div>
</div>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2024-12-08 12:45:37
         compiled from "/var/www/html/wa-apps/shop/templates/actions/orders/skeleton/orders_list.inc.html" */ ?>
<?php if ($_valid && !is_callable('content_675594f17c5663_53035966')) {function content_675594f17c5663_53035966($_smarty_tpl) {?><?php if (!function_exists('smarty_template_function_split_orders')) {
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
<?php if ($_valid && !is_callable('content_675594f17db821_42682290')) {function content_675594f17db821_42682290($_smarty_tpl) {?><?php if (!function_exists('smarty_template_function_split_orders')) {
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