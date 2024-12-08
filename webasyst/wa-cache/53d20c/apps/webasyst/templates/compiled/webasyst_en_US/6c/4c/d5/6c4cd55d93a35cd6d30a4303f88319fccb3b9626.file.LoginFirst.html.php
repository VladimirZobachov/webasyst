<?php /* Smarty version Smarty-3.1.14, created on 2024-12-07 19:59:31
         compiled from "/var/www/html/wa-system/webasyst/templates/actions/login/LoginFirst.html" */ ?>
<?php /*%%SmartyHeaderCode:5622078016754a923bae630-59141718%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c4cd55d93a35cd6d30a4303f88319fccb3b9626' => 
    array (
      0 => '/var/www/html/wa-system/webasyst/templates/actions/login/LoginFirst.html',
      1 => 1671193508,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5622078016754a923bae630-59141718',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'wa_url' => 0,
    'errors' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6754a923d69944_33395299',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6754a923d69944_33395299')) {function content_6754a923d69944_33395299($_smarty_tpl) {?><!DOCTYPE html><html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
</title>

    
    <?php echo $_smarty_tpl->tpl_vars['wa']->value->legacyCss();?>


    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery/jquery-1.8.2.min.js" type="text/javascript"></script>
</head>

<body>

    <div id="wa-installer">

        <div class="dialog height450px ignore-esc" id="wa-install-dialog">
            <div class="dialog-background"></div>
            <div class="dialog-window">
                <form method="post" action="">

                <?php $_smarty_tpl->tpl_vars['errors'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['errors']->value)===null||$tmp==='' ? array() : $tmp), null, 0);?>

                <div class="dialog-content">
                    <div class="dialog-content-indent">

                        <h1>Log in to Webasyst <i class="icon16 lock"></i></h1>
                        <p>
                            Create the first user in your Webasyst installation.
                            <span class="gray">The information provided in this form will be stored in your local Webasyst installation only and will not be sent anywhere outside your server.</span>
                        </p>
                        <?php if (!empty($_smarty_tpl->tpl_vars['errors']->value['all'])){?>
                        <p class="i-error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['all'];?>
</p>
                        <?php }?>
                        <div class="fields form">
                          <div class="field-group">
                            <div class="field">
                                <div class="name">
                                    <strong>Login name *</strong>
                                </div>
                                <div class="value">
                                    <input type="text" class="large<?php if (!empty($_smarty_tpl->tpl_vars['errors']->value['login'])){?> error<?php }?>" name="login" value="<?php echo $_smarty_tpl->tpl_vars['wa']->value->request('login');?>
" autocomplete="off" />
                                    <em class="errormsg"><?php if (!empty($_smarty_tpl->tpl_vars['errors']->value['login'])){?><?php echo $_smarty_tpl->tpl_vars['errors']->value['login'];?>
<?php }?></em>
                                </div>
                            </div>
                            <div class="field">
                                <div class="name">
                                    <strong>Password *</strong>
                                </div>
                                <div class="value">
                                    <input type="password" name="password" class="large<?php if (!empty($_smarty_tpl->tpl_vars['errors']->value['password'])){?> error<?php }?>" />
                                    <em class="errormsg"></em>
                                </div>
                            </div>
                            <div class="field">
                                <div class="name">
                                    <strong>Confirm password *</strong>
                                </div>
                                <div class="value">
                                    <input type="password" name="password_confirm" class="large<?php if (!empty($_smarty_tpl->tpl_vars['errors']->value['password'])){?> error<?php }?>" />
                                    <em class="errormsg"><?php if (!empty($_smarty_tpl->tpl_vars['errors']->value['password'])){?><?php echo $_smarty_tpl->tpl_vars['errors']->value['password'];?>
<?php }?></em>
                                </div>
                            </div>
                          </div>
                          <div class="field-group">
                            <div class="field">
                                  <div class="name">
                                      First name
                                  </div>
                                  <div class="value">
                                      <input type="text" name="firstname" value="<?php echo $_smarty_tpl->tpl_vars['wa']->value->request('firstname');?>
" />
                                  </div>
                            </div>
                            <div class="field">
                                  <div class="name">
                                      Last name
                                  </div>
                                  <div class="value">
                                      <input type="text" name="lastname" value="<?php echo $_smarty_tpl->tpl_vars['wa']->value->request('lastname');?>
" />
                                  </div>
                            </div>
                            <div class="field">
                                <div class="name">
                                    Email *
                                </div>
                                <div class="value">
                                    <input type="text" <?php if (!empty($_smarty_tpl->tpl_vars['errors']->value['email'])){?>class="error"<?php }?> name="email" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['wa']->value->request('email',''), ENT_QUOTES, 'UTF-8', true);?>
" />
                                    <em class="errormsg"><?php if (!empty($_smarty_tpl->tpl_vars['errors']->value['email'])){?><?php echo $_smarty_tpl->tpl_vars['errors']->value['email'];?>
<?php }?></em>
                                </div>
                            </div>
                            <div class="field">
                                <div class="name">
                                    Company name
                                </div>
                                <div class="value">
                                    <input type="text" name="account_name" value="<?php echo $_smarty_tpl->tpl_vars['wa']->value->request('account_name',_ws('My company'));?>
" />
                                </div>
                            </div>
                          </div>

                        </div>

                    </div>
                </div>

                <div class="dialog-buttons">
                    <div class="dialog-buttons-gradient">
                        <input type="submit" value="Enter" class="button" />

                    </div>
                </div>
                </form>
            </div>


        </div> <!-- .dialog -->

    </div> <!-- #wa-login -->

</body>

</html>
<?php }} ?>