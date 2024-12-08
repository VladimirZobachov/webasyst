<?php /* Smarty version Smarty-3.1.14, created on 2024-12-08 12:45:37
         compiled from "/var/www/html/wa-apps/shop/templates/actions/backend/BackendWelcome.html" */ ?>
<?php /*%%SmartyHeaderCode:843538780675594f1a3a941-96937425%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd32c6cb4ed56e4f97da1eb22aaa7668ddebe6182' => 
    array (
      0 => '/var/www/html/wa-apps/shop/templates/actions/backend/BackendWelcome.html',
      1 => 1730717946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '843538780675594f1a3a941-96937425',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'wa_url' => 0,
    'wa' => 0,
    'wa_app_static_url' => 0,
    'currencies' => 0,
    'currency' => 0,
    'locale_currency' => 0,
    'countries' => 0,
    'country' => 0,
    'country_iso' => 0,
    'backend_welcome_event_result' => 0,
    'p' => 0,
    'shop_demo_importer_can_work' => 0,
    '_can_work' => 0,
    '_reason' => 0,
    'shop_demo_data_source_list' => 0,
    '_source_id' => 0,
    '_source' => 0,
    '_is_complete' => 0,
    '_loading_html' => 0,
    'wa_app_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_675594f1adc138_32124080',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_675594f1adc138_32124080')) {function content_675594f1adc138_32124080($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_is_complete'] = new Smarty_variable(false, null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['actions']->value['welcome']['complete']==1){?><?php $_smarty_tpl->tpl_vars['_is_complete'] = new Smarty_variable(true, null, 0);?><?php }?>

<script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa.core.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/backend/welcome.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/tutorial/tutorial.js"></script>

<div class="content hide-scrollbar welcome box contentbox">
    <div class="article">
        <div class="article-body">
            <form method="post" action="?action=welcome" id="js-welcome-form">

                <div class="s-premium-block custom-pb-20">
                    <div class="stars-animation-container">
                        <div class="s-premium-shop"></div>
                        <div class="stars-animation">
                            <div class="stars-animation--left">
                                <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 25+1 - (0) : 0-(25)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                                    <span style="--star-i:<?php echo rand(10,30);?>
;top:<?php echo rand(10,50);?>
px;left:<?php echo rand(10,50);?>
px;"></span>
                                <?php }} ?>
                            </div>
                            <div class="stars-animation--right">
                                <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 25+1 - (0) : 0-(25)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                                    <span style="--star-i:<?php echo rand(10,30);?>
;top:<?php echo rand(10,50);?>
px;left:<?php echo rand(10,50);?>
px;"></span>
                                <?php }} ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="_s-welcome-page">

                    <h2 class="align-center">Welcome to Shop-Script!</h2>
                    <p class="align-center gray">Few quick questions to get your storefront up and running.</p>

                    <div class="fields">

                        
                        <div class="fields-group">

                            <h5 class="heading">
                                <span>
                                    <span class="badge large light-gray custom-mr-4">1</span>
                                    Region
                                </span>
                            </h5>

                            <div class="field">
                                <div class="name for-input">
                                    Primary currency
                                </div>
                                <div class="value">
                                    <div class="wa-select">
                                        <select name="currency" id="" <?php if ($_smarty_tpl->tpl_vars['actions']->value['welcome']['complete']!=1){?>required<?php }?> class="width-100 text-ellipsis">
                                            <option value="" disabled selected>Select currency</option>
                                            <?php  $_smarty_tpl->tpl_vars['currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['currency']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->key => $_smarty_tpl->tpl_vars['currency']->value){
$_smarty_tpl->tpl_vars['currency']->_loop = true;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['currency']->value['code'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['currency']->value['code'];?>
" <?php if ($_smarty_tpl->tpl_vars['locale_currency']->value&&$_smarty_tpl->tpl_vars['locale_currency']->value===$_smarty_tpl->tpl_vars['currency']->value['code']){?>selected<?php }?> <?php if ($_smarty_tpl->tpl_vars['currency']->value['code']===null){?>disabled<?php }?>><?php echo $_smarty_tpl->tpl_vars['currency']->value['code'];?>
 — <?php echo _w($_smarty_tpl->tpl_vars['currency']->value['title']);?>
</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="field">
                                <div class="name for-input">
                                    Country
                                </div>
                                <div class="value">
                                    <div class="wa-select">
                                        <select name="country" class="width-100 text-ellipsis">
                                            <?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value){
$_smarty_tpl->tpl_vars['country']->_loop = true;
?>
                                                <option value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['country']->value['iso3letter'], ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['country']->value['iso3letter']==$_smarty_tpl->tpl_vars['country_iso']->value){?> selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['country']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                                            <?php } ?>
                                            <option value="">Other (No default regional data will be added)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php if ($_smarty_tpl->tpl_vars['backend_welcome_event_result']->value){?>
                            
                            <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_welcome_event_result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
                                <?php echo ifset($_smarty_tpl->tpl_vars['p']->value,'form_top','');?>

                            <?php } ?>
                        <?php }?>

                        
                        <div class="fields-group">

                            <h5 class="heading">
                                <span>
                                    <span class="badge large light-gray custom-mr-4">2</span>
                                    Demo products
                                </span>
                            </h5>
                            <p class="small gray">Can be easily removed later on altogether.</p>

                            <div class="field">
                                <div class="value">

                                    <?php $_smarty_tpl->tpl_vars['_sources_html'] = new Smarty_variable(array(), null, 0);?>

                                    <?php $_smarty_tpl->tpl_vars['_can_work'] = new Smarty_variable($_smarty_tpl->tpl_vars['shop_demo_importer_can_work']->value['status'], null, 0);?>
                                    <?php $_smarty_tpl->tpl_vars['_reason'] = new Smarty_variable($_smarty_tpl->tpl_vars['shop_demo_importer_can_work']->value['reason'], null, 0);?>

                                    <?php if (!$_smarty_tpl->tpl_vars['_can_work']->value){?>
                                        <p class="state-error-hint"><i class="fas fa-exclamation-triangle"></i> <?php echo $_smarty_tpl->tpl_vars['_reason']->value;?>
</p>
                                    <?php }?>

                                    <?php  $_smarty_tpl->tpl_vars['_source'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_source']->_loop = false;
 $_smarty_tpl->tpl_vars['_source_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['shop_demo_data_source_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_source']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['_source']->key => $_smarty_tpl->tpl_vars['_source']->value){
$_smarty_tpl->tpl_vars['_source']->_loop = true;
 $_smarty_tpl->tpl_vars['_source_id']->value = $_smarty_tpl->tpl_vars['_source']->key;
 $_smarty_tpl->tpl_vars['_source']->index++;
 $_smarty_tpl->tpl_vars['_source']->first = $_smarty_tpl->tpl_vars['_source']->index === 0;
?>
                                        <div class="custom-mb-8">
                                            <label class="flexbox space-8 middle">
                                                <span class="wa-radio">
                                                    <input type="radio" name="demo_db" value="<?php echo $_smarty_tpl->tpl_vars['_source_id']->value;?>
" <?php if (!$_smarty_tpl->tpl_vars['_can_work']->value){?>disabled="disabled"<?php }?> <?php if ($_smarty_tpl->tpl_vars['_source']->first){?>checked="checked"<?php }?>>
                                                    <span></span>
                                                </span>
                                                <div style="width: 1.75rem; text-align: center;">
                                                    <i class="<?php echo $_smarty_tpl->tpl_vars['_source']->value['icon'];?>
 custom-ml-4"></i>
                                                </div>
                                                <div>
                                                    <?php echo htmlspecialchars((string)(($tmp = @$_smarty_tpl->tpl_vars['_source']->value['name'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>

                                                </div>
                                            </label>
                                        </div>
                                    <?php } ?>

                                    <div class="custom-mb-8">
                                        <label class="flexbox space-8 middle">
                                            <span class="wa-radio">
                                                <input type="radio" name="demo_db" value="">
                                                <span></span>
                                            </span>
                                            <span class="gray custom-pl-4">
                                                Don’t add demo products
                                            </span>
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <?php if ($_smarty_tpl->tpl_vars['backend_welcome_event_result']->value){?>
                            
                            <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_welcome_event_result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
                                <?php echo ifset($_smarty_tpl->tpl_vars['p']->value,'form_bottom','');?>

                            <?php } ?>
                        <?php }?>

                    </div>

                </div>
                <?php if (empty($_smarty_tpl->tpl_vars['_is_complete']->value)){?>
                    <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

                <?php }?>
            </form>

            <?php $_smarty_tpl->_capture_stack[0][] = array('default', "_loading_html", null); ob_start(); ?>
                <div style="display:grid;place-items:center;position:fixed;inset:0;background-color:var(--dialog-background-color);backdrop-filter:blur(0.5rem);">
                    <div class="align-center custom-px-16-mobile">
                        <div class="flexbox gray italic">
                            <span>Finalizing setup won’t take more than a minute...</span>
                        </div>

                        <div class="progressbar custom-mb-8 js-progressbar custom-mt-32">
                            <div class="progressbar-line-wrapper text-outside">
                                <div class="progressbar-outer">
                                    <div class="progressbar-inner" style="width: 10%;"></div>
                                </div>
                            </div>
                        </div>
                        <script>
                            const $progress = document.querySelector(".js-progressbar .progressbar-inner");
                            let startPos = 10;
                            const endPos = 90;
                            /*за сколько секунд должен пройти прогресс от startPos до endPos*/
                            const duration = 60;
                            const timeRatio = 10;
                            const stepRatio = (endPos - startPos) / duration / timeRatio;

                            const timer = setInterval(() => {
                                if (startPos >= endPos) {
                                    clearInterval(timer);
                                }
                                startPos += stepRatio;
                                $progress.style.width = startPos + "%";
                            }, 1000 / timeRatio);
                        </script>
                    </div>
                </div>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

            <script>
                ( function($) {

                    var $form = $("#js-welcome-form"),
                        html = <?php echo json_encode(trim($_smarty_tpl->tpl_vars['_loading_html']->value));?>
,
                        is_loading = false;
                    $form.on("submit", function() {
                        if (!is_loading) {
                            $('body').css('overflow-y', 'hidden');
                            is_loading = true;
                            var $field = $("input[name=\"demo_db\"]:checked");
                            if ($field.length) {
                                var value = $field.val();
                                if (value) {
                                    $("body").append(html);
                                }
                            }
                        }
                    });

                })(jQuery);

                jQuery.getJSON(
                "https://restcountries.eu/rest/v1/alpha/in",
                function (data) {
                    console.log(data.currencies)
                    }
                );
            </script>

            <?php if (empty($_smarty_tpl->tpl_vars['_is_complete']->value)){?>
                <div class="custom-mt-24 align-center">
                    <button type="submit" form="js-welcome-form" class="button green rounded gradient" style="font-size: 2rem;">Launch my store!</button>
                    <br><br>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
?skipwelcome=1" class="gray rounded js-finish-tutorial">Skip quick setup</a>
                </div>
            <?php }else{ ?>
                <p class="large italic align-center">
                    <span class="gray">Your store is up and running already. No need to repeat the setup.</span>
                    <br>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
">Get back to orders &rarr;</a>
                </p>
            <?php }?>

        </div>
    </div>
</div>
<?php }} ?>