<?php /* Smarty version Smarty-3.1.14, created on 2024-12-08 12:46:40
         compiled from "/var/www/html/wa-system/page/templates/PageEdit.html" */ ?>
<?php /*%%SmartyHeaderCode:21846758967559530e08ae5-52321692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51b186521b787c89bb07a7d7e4311770f7fc64b0' => 
    array (
      0 => '/var/www/html/wa-system/page/templates/PageEdit.html',
      1 => 1713865968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21846758967559530e08ae5-52321692',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'options' => 0,
    'k' => 0,
    'v' => 0,
    'url' => 0,
    'preview_hash' => 0,
    'url_decoded' => 0,
    'page_route' => 0,
    'backend_page_edit' => 0,
    '_' => 0,
    'warnings' => 0,
    'params' => 0,
    'n' => 0,
    'vars' => 0,
    'p' => 0,
    'og_params' => 0,
    'page_edit' => 0,
    'other_params' => 0,
    'wa' => 0,
    'wa_url' => 0,
    'lang' => 0,
    'page_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_675595312c9969_93465432',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_675595312c9969_93465432')) {function content_675595312c9969_93465432($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_datetime')) include '/var/www/html/wa-system/vendors/smarty-plugins/modifier.wa_datetime.php';
?><div class="wa-page-editor">
<form id="wa-page-form" method="post" action="?module=pages&action=save<?php if ($_smarty_tpl->tpl_vars['page']->value){?>&id=<?php echo $_smarty_tpl->tpl_vars['page']->value['id'];?>
<?php }?>">
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['options']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
    <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8', true);?>
">
    <?php } ?>
    <div class="box contentbox wa-page-gray-toolbar flexbox">
        <div class="wide">
            <h2 class="wa-page-name"><?php if ($_smarty_tpl->tpl_vars['page']->value){?><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['page']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php if (!$_smarty_tpl->tpl_vars['page']->value['status']){?> <span class="wa-page-draft badge light-gray squared smaller">draft</span><?php }?><?php }else{ ?>New page<?php }?></h2>
            <div class="wa-page-urls small">
                <?php if ($_smarty_tpl->tpl_vars['page']->value){?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['url']->value)){?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['page']->value['url'];?>
<?php if (!$_smarty_tpl->tpl_vars['page']->value['status']){?>?preview=<?php echo $_smarty_tpl->tpl_vars['preview_hash']->value;?>
<?php }?>" title="Preview" rel="noopener" target="_blank"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['url_decoded']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo $_smarty_tpl->tpl_vars['page']->value['url'];?>
</a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['page']->value['url'];?>
<?php if (!$_smarty_tpl->tpl_vars['page']->value['status']){?>?preview=<?php echo $_smarty_tpl->tpl_vars['preview_hash']->value;?>
<?php }?>" target="_blank"><i class="fas fa-external-link-alt fa-sm"></i></a>
                    <?php }elseif($_smarty_tpl->tpl_vars['page']->value['domain']&&$_smarty_tpl->tpl_vars['page']->value['route']!==null){?>
                        <?php $_smarty_tpl->tpl_vars['page_route'] = new Smarty_variable(waRouting::clearUrl($_smarty_tpl->tpl_vars['page']->value['route']), null, 0);?>
                        <a style="text-decoration: line-through;" href="http://<?php echo $_smarty_tpl->tpl_vars['page']->value['domain'];?>
/<?php echo $_smarty_tpl->tpl_vars['page_route']->value;?>
<?php echo $_smarty_tpl->tpl_vars['page']->value['full_url'];?>
<?php if (!$_smarty_tpl->tpl_vars['page']->value['status']){?>?preview=<?php echo $_smarty_tpl->tpl_vars['preview_hash']->value;?>
<?php }?>" title="Preview" rel="noopener" target="_blank">http://<?php echo $_smarty_tpl->tpl_vars['page']->value['domain'];?>
<?php echo $_smarty_tpl->tpl_vars['page_route']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value['full_url'];?>
</a>
                        <a href="http://<?php echo $_smarty_tpl->tpl_vars['page']->value['domain'];?>
/<?php echo $_smarty_tpl->tpl_vars['page_route']->value;?>
<?php echo $_smarty_tpl->tpl_vars['page']->value['full_url'];?>
<?php if (!$_smarty_tpl->tpl_vars['page']->value['status']){?>?preview=<?php echo $_smarty_tpl->tpl_vars['preview_hash']->value;?>
<?php }?>"><i class="fas fa-external-link-alt fa-sm"></i></a>
                    <?php }?>
                    <br />
                <?php }?>
            </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['page']->value){?>
            <ul class="unstyled flexbox space-32 custom-pt-4 custom-mr-16">

                <!-- plugin hook: 'backend_page_edit.action_button_li' -->
                
                <?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_page_edit']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['action_button_li']);?>
<?php } ?>

                <?php if (!empty($_smarty_tpl->tpl_vars['page']->value['update_datetime'])){?>
                    <li>
                        <span class="hint bold"><?php echo smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['page']->value['update_datetime'],"humandatetime");?>
</span>
                    </li>
                <?php }?>
                <li>
                    <a href="javascript:void(0);" class="small js-page-settings-toggle" id="wa-page-settings-toggle">
                        <i class="fas fa-edit"></i> Page settings
                    </a>
                </li>
                <li>
                    <a class="small wa-page-delete js-page-delete" href="?module=pages&action=delete">
                        <i class="fas fa-trash-alt text-red"></i> Delete
                    </a>
                </li>
            </ul>
        <?php }?>
        <div id="wa-page-settings" class="fields" style="<?php if ($_smarty_tpl->tpl_vars['page']->value){?>display: none;<?php }?>">
            <div>
                <div class="field">
                    <div class="name for-input">Page name</div>
                    <div class="value">
                        <input type="text" class="bold long large" name="info[name]" value="<?php if ($_smarty_tpl->tpl_vars['page']->value){?><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['page']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
                    </div>
                </div>
                <div class="field">
                    <div class="value submit">
                        <span class="switch smaller" id="draft-switch">
                            <input type="checkbox" id="wa-page-v" name="info[status]" <?php if (!$_smarty_tpl->tpl_vars['page']->value||$_smarty_tpl->tpl_vars['page']->value['status']){?>checked="checked"<?php }?> />
                        </span>
                        <label for="wa-page-v" class="small" data-text-draft="Draft" data-text-published="Published">
                            Published
                        </label>
                    </div>
                </div>
                <?php if (!empty($_smarty_tpl->tpl_vars['page']->value['id'])){?>
                    <div class="field">
                        <div class="value submit gray">
                            id: <strong><?php echo $_smarty_tpl->tpl_vars['page']->value['id'];?>
</strong>
                        </div>
                    </div>
                <?php }?>

                <div class="field wa-page-url">
                    <div class="name">Page URL</div>
                    <div class="value wa-page-app-url small">
                        <?php if (!empty($_smarty_tpl->tpl_vars['url']->value)){?><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['url_decoded']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?><input type="text" class="short" name="info[url]" value="<?php if ($_smarty_tpl->tpl_vars['page']->value){?><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['page']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />

                        <?php if (!empty($_smarty_tpl->tpl_vars['warnings']->value)){?>
                            <p class="state-caution-hint">
                                <?php if (isset($_smarty_tpl->tpl_vars['warnings']->value['no_site_storefront'])){?>
                                    This page will not be published because there is no settlement, or routing rule, for this app in the site structure settings. Set up a settlement in Site app’s “Structure” section to publish this page.
                                <?php }elseif(isset($_smarty_tpl->tpl_vars['warnings']->value['deleted_site_storefront'])){?>
                                    This page is unsettled (unpublished), i.e. not connected to any of your site’s routing rules. Set up a settlement in Site app’s “Structure” section to publish this page.
                                <?php }elseif(isset($_smarty_tpl->tpl_vars['warnings']->value['several_site_storefront'])){?>
                                    This page is not settled (not published), i.e. not connected to any of your site’s routing rules. Drag this page from the Unpublished section in the left sidebar to connect it to any of your existing site’s routes.
                                <?php }?>
                            </p>
                        <?php }?>
                    </div>
                </div>
                <?php if (empty($_smarty_tpl->tpl_vars['url']->value)&&empty($_smarty_tpl->tpl_vars['warnings']->value)){?>
                <div class="field">
                    <div class="value submit">
                        <p class="state-caution-hint">
                            This page is not settled (not published), i.e. not connected to any of your site’s routing rules. Drag this page from the Unpublished section in the left sidebar to connect it to any of your existing site’s routes.
                        </p>
                    </div>
                </div>
                <?php }?>
            </div>



            <?php if (!$_smarty_tpl->tpl_vars['page']->value||!$_smarty_tpl->tpl_vars['page']->value['id']){?>
                <a id="wa-page-advanced-params-link" href="javascript:void(0);" class="small gray">
                    more
                    <i class="fas fa-caret-down"></i>
                </a>
            <?php }?>
            <div id="wa-page-advanced-params" <?php if (!$_smarty_tpl->tpl_vars['page']->value||!$_smarty_tpl->tpl_vars['page']->value['id']){?> style="display:none"<?php }?>>
                <div class="">
                    <div class="field">
                        <div class="name for-input"><strong class="title">Title</strong> <span class="hint">&lt;title&gt;</span></div>
                        <div class="value"><input type="text" name="info[title]" value="<?php if ($_smarty_tpl->tpl_vars['page']->value){?><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['page']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" class="bold long" /></div>
                    </div>
                    <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['params']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
 $_smarty_tpl->tpl_vars['n']->value = $_smarty_tpl->tpl_vars['p']->key;
?>
                    <div class="field">
                        <div class="name for-input"><?php echo $_smarty_tpl->tpl_vars['vars']->value[$_smarty_tpl->tpl_vars['n']->value];?>
</div>
                        <?php if ($_smarty_tpl->tpl_vars['n']->value=='description'){?>
                        <div class="value"><textarea name="params[<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
]"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['p']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea></div>
                        <?php }else{ ?>
                        <div class="value"><input type="text" name="params[<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
]" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['p']->value, ENT_QUOTES, 'UTF-8', true);?>
" /></div>
                        <?php }?>
                    </div>
                    <?php } ?>
                    <div class="field">
                        <div class="name">Social sharing</div>
                        <div class="value">
                            <label>
                                <span class="wa-checkbox">
                                    <input class="og-checkbox" type="checkbox"<?php if (empty($_smarty_tpl->tpl_vars['og_params']->value)){?> checked<?php }?>>
                                    <span>
                                        <span class="icon">
                                            <i class="fas fa-check"></i>
                                        </span>
                                    </span>
                                </span>
                                Use these meta tags for social sharing too
                            </label>
                        </div>
                    </div>
                </div>
                <div class="custom-mt-24 og-group" <?php if (empty($_smarty_tpl->tpl_vars['og_params']->value)){?>style="display: none;"<?php }?>>
                    <div class="field">
                        <div class="name for-input">Social sharing title <span class="hint">og:title</span></div>
                        <div class="value">
                            <input type="text" name="og[title]" class="long bold" value="<?php echo htmlspecialchars((string)ifset($_smarty_tpl->tpl_vars['og_params']->value['title'],''), ENT_QUOTES, 'UTF-8', true);?>
" <?php if (empty($_smarty_tpl->tpl_vars['og_params']->value)){?>disabled<?php }?>>
                        </div>
                    </div>
                    <div class="field">
                        <div class="name for-input">Social sharing image URL <span class="hint">og:image</span></div>
                        <div class="value">
                            <input type="text" name="og[image]" class="long" value="<?php echo htmlspecialchars((string)ifset($_smarty_tpl->tpl_vars['og_params']->value['image'],''), ENT_QUOTES, 'UTF-8', true);?>
" <?php if (empty($_smarty_tpl->tpl_vars['og_params']->value)){?>disabled<?php }?>>
                            <p class="hint">If not set, a social network will attempt to determine preview image on it’s own.</p>
                        </div>
                    </div>
                    <div class="field">
                        <div class="name for-input">Social sharing video URL <span class="hint">og:video</span></div>
                        <div class="value">
                            <input type="text" name="og[video]" class="long" value="<?php echo htmlspecialchars((string)ifset($_smarty_tpl->tpl_vars['og_params']->value['video'],''), ENT_QUOTES, 'UTF-8', true);?>
" <?php if (empty($_smarty_tpl->tpl_vars['og_params']->value)){?>disabled<?php }?>>
                        </div>
                    </div>
                    <div class="field">
                        <div class="name for-input">Social sharing description <span class="hint">og:description</span></div>
                        <div class="value">
                            <textarea name="og[description]"<?php if (empty($_smarty_tpl->tpl_vars['og_params']->value)){?> disabled<?php }?>><?php echo htmlspecialchars((string)ifset($_smarty_tpl->tpl_vars['og_params']->value['description'],''), ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                        </div>
                    </div>
                    <div class="field">
                        <div class="name">Social sharing type <span class="hint">og:type</span></div>
                        <div class="value">
                            <input type="text" name="og[type]" placeholder="" value="<?php echo ifset($_smarty_tpl->tpl_vars['og_params']->value['type'],'');?>
" <?php if (empty($_smarty_tpl->tpl_vars['og_params']->value)){?>disabled<?php }?>>
                            <p class="hint">Please refer to <a href="http://ogp.me" rel="noopener" target="_blank">Open Graph</a> protocol site for more information on social sharing meta tags and available values.</p>
                        </div>
                    </div>
                </div>

                <?php if (!empty($_smarty_tpl->tpl_vars['page_edit']->value)){?>
                    <div class="custom-mt-24">
                        <?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page_edit']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?>
                    </div>
                <?php }?>

                <div class="custom-mt-24">
                    <div class="field">
                        <div class="name for-input">Custom page parameters</div>
                        <div class="value">
                            <textarea name="other_params" class="small"><?php if ($_smarty_tpl->tpl_vars['page']->value){?><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['other_params']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8', true);?>

<?php } ?><?php }?></textarea>
                            <p class="hint">Optional set of custom <em>key=value</em> parameters, which can be used in page.html template or in this page content as <em>&#123;$page.key&#125;</em>. Each key=value pair must be on a separate line. <a href="https://developers.webasyst.com/templates/pages/" rel="noopener" target="_blank">Help</a> <i class="fas fa-external-link-alt"></i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wa-editor-core-wrapper">
        <ul class="tabs overflow-dropdown wa-editor-wysiwyg-html-toggle custom-mx-16 custom-pl-16 small">
            <li class="selected">
                <a class="wysiwyg js-is-wa2" href="javascript:void(0);">WYSIWYG</a>
            </li>
            <li><a class="html" href="javascript:void(0);">HTML</a></li>
        </ul>
        <div style="clear:both">
            <div class="wa-editor-upload-img hidden" title="Upload image">
                <i class="fas fa-image"></i>
            </div>
            <textarea style="display:none" id="wa-page-content" name="info[content]"><?php if ($_smarty_tpl->tpl_vars['page']->value){?><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['page']->value['content'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></textarea>
            <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

        </div>
    </div>
    <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

</form>
</div>

<?php if ($_smarty_tpl->tpl_vars['options']->value['save_panel']){?>
    <div class="bottombar sticky bordered-top flexbox middle space-16 box">
        <input id="wa-page-button" type="submit" class="button green js-page-submit-button" value="Save" />
        <span class="hint italic">Ctrl + S</span>
        <span id="wa-editor-status" class="custom-ml-24" style="display: none"></span>
        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['wa']->value->app();?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['wa']->value->getCheatSheetButton(array("app"=>$_tmp1,'page_id'=>$_tmp2));?>

    </div>
<?php }?>

<div class="dialog" id="s-upload-dialog">
    <div class="dialog-background"></div>
    <form id="s-upload-form" class="dialog-body" method="post" action="?module=pages&action=uploadimage&r=2" enctype="multipart/form-data">
        <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

        <h3 class="dialog-header">Upload image</h3>
        <div class="dialog-content">
            <div id="redactor-droparea" style="text-align: center;">
                <p class="hint">
                    Only image files can be uploaded
                </p>
                <input id="s-input-file" type="file" name="file" multiple>
                <input type="hidden" name="path" id="s-upload-path" value="" />
                <div class="loading" style="display:none; margin-top: 10px">
                    <i class="fas fa-spinner fa-spin"></i> Uploading...
                </div>
            </div>
        </div>
        <div class="dialog-footer">
            <input type="submit" class="button" value="Upload">
            <a href="javascript:void(0);" class="js-close-dialog button light-gray">Cancel</a>
        </div>
    </form>
</div>

<div class="dialog" id="s-switch-editor">
    <div class="dialog-background"></div>
    <form class="dialog-body">
        <div class="dialog-content">
            <b>WYSIWYG editor may change your HTML code.</b><br><br>It is necessary for correct text formatting. Smarty code may be broken and outdated HTML tags may be replaced with modern ones.<br><br>Are you sure to switch to WYSIWYG editor?
        </div>
        <div class="dialog-footer">
            <input type="submit" class="button orange" value="Switch" />
            <a href="javascript:void(0);" class="js-close-dialog button light-gray">Cancel</a>
        </div>
    </form>
</div>

<script type="text/javascript">
    $(function () {
        "use strict";

        let wa_url = window.wa_url = <?php echo json_encode($_smarty_tpl->tpl_vars['wa_url']->value);?>
;
        let wa_app = window.wa_app = <?php echo json_encode($_smarty_tpl->tpl_vars['wa']->value->app());?>
;
        let page_delete_confirm_msg = "This will delete the entire page. Are you sure?";

        let $page_form = $('#wa-page-form');

        initSubmitChanged($page_form);

        <?php if ($_smarty_tpl->tpl_vars['options']->value['is_ajax']){?>
            <?php if ($_smarty_tpl->tpl_vars['page']->value){?>
                document.title = <?php echo json_encode($_smarty_tpl->tpl_vars['page']->value['name']);?>
 + " — " + <?php echo json_encode($_smarty_tpl->tpl_vars['wa']->value->appName(false));?>
;
            <?php }else{ ?>
                document.title = "New page — " + <?php echo json_encode($_smarty_tpl->tpl_vars['wa']->value->appName(false));?>
;
            <?php }?>
        <?php }?>

        <?php if (!empty($_smarty_tpl->tpl_vars['page']->value['id'])){?>
            // Link to delete the page
            $(".wa-page-delete").on('click', function(e) {
                e.preventDefault();
                var url = $(this).attr('href');

                $.waDialog.confirm({
                    title: page_delete_confirm_msg,
                    success_button_title: $_('Delete'),
                    success_button_class: 'danger',
                    cancel_button_title: $_('Cancel'),
                    cancel_button_class: 'light-gray',
                    onSuccess: function ($dialog, dialog_instance) {
                        $.post(url, { id:<?php echo $_smarty_tpl->tpl_vars['page']->value['id'];?>
}, function () {
                            var li = $("#page-<?php echo $_smarty_tpl->tpl_vars['page']->value['id'];?>
");
                            var prev = li.prevAll('.dr:first');
                            if (prev.length > 0) {
                                location.href = prev.addClass('selected').find('a').attr('href');
                                li.remove();
                            } else {
                                var next = li.nextAll('.dr:first');
                                if (next.length > 0) {
                                    location.href = next.addClass('selected').find('a').attr('href');
                                    li.remove();
                                } else {
                                    location.reload(true);
                                }
                            }
                        }, "json");
                    }
                });
                return false;
            });
        <?php }?>

        // Show/hide block of OG fields when user clicks the checkbox
        $('.og-checkbox').change(function () {
            if ($(this).is(':checked')) {
                $('.og-group').hide().find('input,textarea').attr('disabled', 'disabled');
            } else {
                $('.og-group').show().find('input,textarea').removeAttr('disabled');
            }
        });

    // Initialize editor when JS is loaded
    $.wa_editor_ready.then(function(method) {
        $('#wa-page-content')[method]({
            lang: $.Redactor.opts.langs["<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
"] ? "<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" : 'en',
            smarty_wysiwyg_msg: <?php echo json_encode(_ws('WYSIWYG editor is disabled because page source contains Smarty code tags.'));?>
,
            modification_wysiwyg_msg: $('#s-switch-editor'),
            saveButton: '#wa-page-button',
            upload_img_dialog: '#s-upload-dialog',
            uploadFields: {
                '_csrf': "<?php echo waRequest::cookie('_csrf','');?>
"
            },
            locales: {
                'close': "Close"
            }
        });
    });

    // switch between draft and published state

    const $draft_switch = $("#draft-switch"),
        $label = $draft_switch.next('label'),
        active_text = $label.attr('data-text-published'),
        no_active_text = $label.attr('data-text-draft');

   $draft_switch.waSwitch({
       ready(wa_switch){
           if (wa_switch.is_active) {
               $label.toggleClass('gray', false).text(active_text)
           }else{
               $label.toggleClass('gray', true).text(no_active_text)
           }
       },
       change(active) {
           if (active) {
               $label.toggleClass('gray', false).text(active_text)
           }else{
               $label.toggleClass('gray', true).text(no_active_text)
           }
       }
   });

    // Show/hide page settings when user clicks on the link
    $('#wa-page-settings-toggle').on('click', function(){
        $('#wa-page-settings').toggle();
        return false;
    });

    // Show advanced params when user clicks on the link
    $("#wa-page-advanced-params-link").on('click', function(e) {
        e.preventDefault();
        $("#wa-page-advanced-params").show();
        $(this).remove();
    });

    <?php if ((!$_smarty_tpl->tpl_vars['page']->value||!$_smarty_tpl->tpl_vars['page']->value['id'])&&empty($_smarty_tpl->tpl_vars['options']->value['disable_auto_url'])){?>
        // Transliterate page title into URL while user types
        (function() {
            $.fn.onKeyFinish = function (defer, callback) {
                return this.each(function () {
                    var that = $(this);
                    that.currentValue = that.val();
                    that.interval = null;
                    $(this).off('keyup.wapages');
                    $(this).on('keyup.wapages', function (e) {
                        clearInterval(that.interval);
                        if (that.currentValue != that.val()) {
                            that.interval = setInterval(function () {
                                clearInterval(that.interval);
                                callback.call(that);
                                that.currentValue = that.val();
                            }, defer);
                        }
                    });
                });
            };
            $("#wa-page-settings input:first").focus();
            $('#wa-page-settings input[name="info[name]"]').onKeyFinish(300, function () {
                if (!$("#wa-page-form-translit").length) {
                    $page_form.append('<input id="wa-page-form-translit" type="hidden" name="translit" value="1">');
                }
                var url = $('#wa-page-settings input[name="info[url]"]');
                if ($(this).val() && (!url.val() || !url.data('changed'))) {
                    $.post("?module=pages&action=translit", { str: $(this).val()}, function (response) {
                        $("#wa-page-form-translit").remove();
                        if (response.status == 'ok') {
                            if (!url.val() || !url.data('changed')) {
                                url.val(response.data.str);
                            }
                        }
                    }, "json");
                }
            });
            $('#wa-page-settings input[name="info[url]"]').on('keyup', function () {
               $(this).data('changed', 1);
            });
        }());
    <?php }?>

    // Save the page via XHR when the form is submitted
    const $page_button_submit = $('.js-page-submit-button');
    $page_button_submit.on('click', function (e) {
        e.preventDefault();
        $page_form.submit();
    })
    $page_form.submit(function (e) {
        e.preventDefault();
        const $form = $(this),
            $page_settings = $('#wa-page-settings'),
            $page_content = $('#wa-page-content'),
            $editor_status = $('#wa-editor-status'),
            $page_button = $('#wa-page-button'),
            $page_urls_link = $(".wa-page-urls a"),
            $li = $(".block-pages ul li.selected");

        let page_url, page_attr_url, error;

        $.wa_editor_ready.then(function(method) {
            if ($('#wa-page-settings input[name="info[name]"]').is(":focus") && !$("#wa-page-form-translit").length) {
                $form.append('<input id="wa-page-form-translit" type="hidden" name="translit" value="1">');
            }

            $page_content[method]('sync');

            $editor_status.html("<i class='fas fa-spin fa-spinner'></i> Saving...").fadeIn("slow");

            $.post($form.attr('action'), $form.serialize(), function (response) {
                if (response.status === 'ok') {
                    $(".state-error").removeClass('state-error');

                    $editor_status.html('<i class="fas fa-check-circle"></i> Saved').fadeOut('slow');

                    const p = response.data;

                    let html = $(`<li class="dr rounded selected" id="page-${ p.id }" data-page-id="${ p.id }">
                                    <a class="wa-page-link ui-droppable" href="<?php echo $_smarty_tpl->tpl_vars['page_url']->value;?>
${ p.id }">
                                        <i class="fas fa-${ p.status == 0 ? 'pencil' : 'file' }-alt"></i>
                                        <span>${ p.name } <span class="hint">/${ p.full_url }</span></span>
                                        <span class="count action small wa-page-add">
                                            <i class="fas fa-plus-circle text-green"></i>
                                        </span>
                                    </a>
                                </li>
                                <li class="drag-newposition ui-droppable"></li>`);

                    if (p.add) {
                        $li.replaceWith(html);
                    } else {
                        $("#page-" + p.id).children('a.wa-page-link').replaceWith($(html).find('a.wa-page-link'));

                        $("#page-" + p.id + ' > ul li span.hint').each(function () {
                            $(this).text('/' + p.full_url + (p.full_url.length > 0 && p.full_url.substr(-1) != '/' ? '/' : '') + $(this).text().substr(p.old_full_url.length + 1));
                        });
                    }

                    if (response.data.add) {
                        waLoadPage(p.id);
                    } else {
                        $(".wa-page-editor .wa-page-name").html(p.name);
                    }

                    <?php if (!empty($_smarty_tpl->tpl_vars['url']->value)){?>
                        page_url = <?php echo json_encode(waIdna::dec($_smarty_tpl->tpl_vars['url']->value));?>
 + p.url;
                    <?php }elseif(isset($_smarty_tpl->tpl_vars['page_route']->value)){?>
                        page_url = 'http://<?php echo waIdna::dec($_smarty_tpl->tpl_vars['page']->value['domain']);?>
/<?php echo $_smarty_tpl->tpl_vars['page_route']->value;?>
' + p.full_url;
                    <?php }?>

                    if ($('#wa-page-v').is(':checked')) {
                        page_attr_url = page_url;
                    } else {
                        page_attr_url = page_url + '?preview=<?php echo $_smarty_tpl->tpl_vars['preview_hash']->value;?>
';
                    }

                    if ($page_urls_link.length) {
                        $page_urls_link.attr('href', page_attr_url);
                        $page_urls_link.first().html(page_url);
                    }

                    $.initPagesDraggable();
                } else if (response.status === 'fail') {
                    if ($.isArray(response.errors)) {
                        error = response.errors[0];
                        $(response.errors[1]).addClass('state-error');
                    } else {
                        error = response.errors;
                    }

                    $editor_status.html('<b style="color:red">' + (error ? error : $_('An error occurred while saving')) + '</b>');
                    $page_button.removeClass('yellow').removeClass('green').addClass('red');
                }
            }, "json");
        });
    });

    function initSubmitChanged($form) {
        const $submit = $('#wa-page-button');
        let is_changed = false;

        const submitChanged = () => {
            if (is_changed) return true;

            $submit.removeClass('green').addClass('yellow');
            is_changed = true;
        };

        $form.on('change', submitChanged);
        $(':input:not(:submit)', $form).on('input', submitChanged);

        $submit.on('click', function() {
            $submit.removeClass('yellow').removeClass('red').addClass('green');
            is_changed = false;
        });
    }
});</script>
<?php }} ?>