<?php /* Smarty version 2.6.28, created on 2016-08-11 11:27:44
         compiled from /Applications/MAMP/htdocs/docmgt//templates/common/user_show.tpl */ ?>
<table border=0>
    <th><?php echo $this->_tpl_vars['g_lang_userpage_user_info']; ?>
</th>
        <tr><td><?php echo $this->_tpl_vars['g_lang_userpage_id']; ?>
</td><td><?php echo $this->_tpl_vars['user']->id; ?>
</td></tr>
        <tr><td><?php echo $this->_tpl_vars['g_lang_userpage_last_name']; ?>
</td><td><?php echo $this->_tpl_vars['last_name']; ?>
</td></tr>
        <tr><td><?php echo $this->_tpl_vars['g_lang_userpage_first_name']; ?>
</td><td><?php echo $this->_tpl_vars['first_name']; ?>
</td></tr>
        <tr><td><?php echo $this->_tpl_vars['g_lang_userpage_username']; ?>
</td><td><?php echo $this->_tpl_vars['user']->username; ?>
</td></tr>
        <tr><td><?php echo $this->_tpl_vars['g_lang_userpage_department']; ?>
</td><td><?php echo $this->_tpl_vars['user']->department; ?>
</td></tr>
        <tr><td><?php echo $this->_tpl_vars['g_lang_userpage_email']; ?>
</td><td><?php echo $this->_tpl_vars['user']->email; ?>
</td></tr>
        <tr><td><?php echo $this->_tpl_vars['g_lang_userpage_phone_number']; ?>
</td><td><?php echo $this->_tpl_vars['user']->phone; ?>
</td></tr>
        <tr>
            <td><?php echo $this->_tpl_vars['g_lang_userpage_admin']; ?>
</td>
            <td>
                <?php if ($this->_tpl_vars['isAdmin']): ?>
                    <?php echo $this->_tpl_vars['g_lang_userpage_yes']; ?>

                <?php else: ?>
                    <?php echo $this->_tpl_vars['g_lang_userpage_no']; ?>

                <?php endif; ?>
            </td>
        </tr>
        <tr>
            <td><?php echo $this->_tpl_vars['g_lang_userpage_reviewer']; ?>
</td>
            <td>
                <?php if ($this->_tpl_vars['isReviewer']): ?>
                    <?php echo $this->_tpl_vars['g_lang_userpage_yes']; ?>

                <?php else: ?>
                    <?php echo $this->_tpl_vars['g_lang_userpage_no']; ?>

                <?php endif; ?>
            </td>
        </tr>
    <form action="admin.php" method="POST" enctype="multipart/form-data">
        <tr>
            <td colspan="4" align="center">
                <div class="buttons">
                    <button class="regular" type="Submit" name=""
                            value="Back"><?php echo $this->_tpl_vars['g_lang_userpage_back']; ?>
</button>
                </div>
            </td>
        </tr>
    </form>
</table>