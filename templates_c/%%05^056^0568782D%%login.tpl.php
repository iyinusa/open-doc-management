<?php /* Smarty version 2.6.28, created on 2016-08-11 11:28:03
         compiled from /Applications/MAMP/htdocs/docmgt//templates/common/login.tpl */ ?>
        <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <title><?php echo $this->_tpl_vars['g_title']; ?>
</title>
        </head>

        <body bgcolor="White" style="margin-left:10px;">
        <table cellspacing="0" cellpadding="0">
        <tr>
        <td align="left"><img src="images/logo.gif" alt="Site Logo" border=0></td>
        </tr>
        </table>

        <table border="0" cellspacing="5" cellpadding="5">
        <tr>
        <td valign="top">
        <table border="0" cellspacing="5" cellpadding="5">
        <form action="index.php" method="post">
            <?php if ($this->_tpl_vars['redirection']): ?>
                <input type="hidden" name="redirection" value="<?php echo $this->_tpl_vars['redirection']; ?>
">
            <?php endif; ?>
            
         <tr>
        <td><?php echo $this->_tpl_vars['g_lang_username']; ?>
</td>
        <td><input type="Text" name="frmuser" size="15"></td>
        </tr>
        <tr>
        <td><?php echo $this->_tpl_vars['g_lang_password']; ?>
</td>
        <td><input type="password" name="frmpass" size="15">
            <?php if ($this->_tpl_vars['g_allow_password_reset'] == 'True'): ?>
                <a href="<?php echo $this->_tpl_vars['g_base_url']; ?>
/forgot_password.php"><?php echo $this->_tpl_vars['g_lang_forgotpassword']; ?>
</a>
             <?php endif; ?>
                     </td>
        </tr>
        <tr>
        <td colspan="2" align="center"><input type="submit" name="login" value="<?php echo $this->_tpl_vars['g_lang_enter']; ?>
"></td>
        </tr>
                </tr>
                <?php if ($this->_tpl_vars['g_demo'] == 'True'): ?>
        Regular User: <br />Username:demo Password:demo<br />
        Admin User: <br />Username:admin Password:admin<br />
        <?php endif; ?>
        <?php if ($this->_tpl_vars['g_allow_signup'] == 'True'): ?>
                <tr>
            <td colspan="2"><a href="<?php echo $this->_tpl_vars['g_base_url']; ?>
/signup.php"><?php echo $this->_tpl_vars['g_lang_signup']; ?>
</a>
        </tr>
        <?php endif; ?>
        
        </form>
        </table>
        </td>
        <td valign="top">
        <?php echo $this->_tpl_vars['g_lang_welcome']; ?>

        <p>
        <?php echo $this->_tpl_vars['g_lang_welcome2']; ?>

        </td>
        <td width="20%">
        &nbsp;
    </td>
        </tr>
        </table>