<?php /* Smarty version Smarty-3.1.14, created on 2024-12-07 20:09:56
         compiled from "/var/www/html/wa-system/webasyst/templates/actions/settings/sidebar/Sidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:21474015986754ab94d14064-25318756%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7960b1a28bea2a3d2cc49d94b1d116b22986a1c' => 
    array (
      0 => '/var/www/html/wa-system/webasyst/templates/actions/settings/sidebar/Sidebar.html',
      1 => 1677490457,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21474015986754ab94d14064-25318756',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    '_id' => 0,
    'item' => 0,
    'icons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6754ab94d240c6_38846702',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6754ab94d240c6_38846702')) {function content_6754ab94d240c6_38846702($_smarty_tpl) {?><div class="s-sidebar-wrapper sidebar-body" id="js-sidebar-wrapper">
  <div class="box">
    <ul class="menu large">
        <?php $_smarty_tpl->tpl_vars['icons'] = new Smarty_variable(array('general'=>'fa-sliders-h','field'=>'fa-layer-group','regions'=>'fa-globe','maps'=>'fa-map-marker-alt','captcha'=>'fa-unlock-alt','push'=>'fa-bell','email'=>'fa-envelope','email-template'=>'fa-file-alt','sms'=>'fa-sms','sms-template'=>'fa-file-alt','auth'=>'fa-key','waid'=>'/wa-content/img/wa-settings/ws-waid.svg','db'=>'fa-database'), null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['_id']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
            <li data-id="<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
" class="rounded">
                <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
">
                    <?php if ($_smarty_tpl->tpl_vars['_id']->value==='waid'){?>
                       <svg class="svg-inline--fa fa-w-16" aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 16">
                            <path fill="currentColor" d="M37.4727112,189.39618 C39.5543999,189.39618 41.241942,191.06765 41.241942,193.129513 L41.241942,194.729513 L42.318865,194.729513 C42.9136332,194.729513 43.3957881,195.207076 43.3957881,195.79618 L43.3957881,204.329513 C43.3957881,204.918617 42.9136332,205.39618 42.318865,205.39618 L30.4727112,205.39618 C29.877943,205.39618 29.3957881,204.918617 29.3957881,204.329513 L29.3957881,195.79618 C29.3957881,195.207076 29.877943,194.729513 30.4727112,194.729513 L31.5496343,194.729513 L31.5496343,193.129513 C31.5496343,191.06765 33.2371764,189.39618 35.318865,189.39618 L37.4727112,189.39618 Z M38.7404542,197.066386 L35.4801971,200.359621 L34.0647229,198.909331 C33.92162,198.760502 33.6883,198.760502 33.5420862,198.906165 L32.6679142,199.789638 C32.5217004,199.9353 32.5217004,200.172793 32.6648033,200.321622 L35.206435,202.927711 C35.3495379,203.07654 35.5828578,203.07654 35.7290717,202.930877 L40.1248191,198.491344 C40.2679219,198.342515 40.2710329,198.105022 40.12793,197.95936 L39.2630908,197.069553 C39.1199879,196.920724 38.886668,196.920724 38.7404542,197.066386 Z M37.4727112,191.529513 L35.318865,191.529513 C34.4267128,191.529513 33.7034804,192.245857 33.7034804,193.129513 L33.7034804,194.729513 L39.0880958,194.729513 L39.0880958,193.129513 C39.0880958,192.245857 38.3648635,191.529513 37.4727112,191.529513 Z" transform="translate(-29.396 -189.396)"/>
                        </svg>
                    <?php }else{ ?>
                        <i class="fas <?php echo $_smarty_tpl->tpl_vars['icons']->value[$_smarty_tpl->tpl_vars['_id']->value];?>
"></i>
                    <?php }?>
                    <span><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</span>
                </a>
            </li>
        <?php } ?>
    </ul>
  </div>
</div>
<?php }} ?>