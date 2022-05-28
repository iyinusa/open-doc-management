<?php /* Smarty version 2.6.28, created on 2016-08-11 11:27:03
         compiled from /Applications/MAMP/htdocs/docmgt//templates/common/user/edit.tpl */ ?>
<form name="update" id="modifyUserForm" action="user.php" method="POST" enctype="multipart/form-data">
    <table border="0" cellspacing="5" cellpadding="5">
        <tr>
            <td><b><?php echo $this->_tpl_vars['g_lang_userpage_id']; ?>
</b></td><td colspan=4><?php echo $this->_tpl_vars['user']->id; ?>
</td>
            <input type=hidden name=id value="<?php echo $this->_tpl_vars['user']->id; ?>
">
            </tr>
        <tr>
            <td><b><?php echo $this->_tpl_vars['g_lang_userpage_last_name']; ?>
</b></td>
            <td colspan=4><input name="last_name" type="text" value="<?php echo $this->_tpl_vars['user']->last_name; ?>
" class="required" minlength="2" maxlength="255"></td>
        </tr>
        <tr>
            <td><b><?php echo $this->_tpl_vars['g_lang_userpage_first_name']; ?>
</b></td>
            <td colspan=4><input name="first_name" type="text" value="<?php echo $this->_tpl_vars['user']->first_name; ?>
" class="required" minlength="2" maxlength="255"></td>
        </tr>
        <tr>
            <td><b><?php echo $this->_tpl_vars['g_lang_userpage_username']; ?>
</b></td>
            <td colspan=4><input name="username" type="text" value="<?php echo $this->_tpl_vars['user']->username; ?>
" class="required" minlength="2" maxlength="25"></td>
        </tr>
        <tr>
            <td><b><?php echo $this->_tpl_vars['g_lang_userpage_phone_number']; ?>
</b></td>
            <td colspan=4><input name="phonenumber" type="text" value="<?php echo $this->_tpl_vars['user']->phone; ?>
" maxlegnth="20"></td>
        </tr>
        <?php if ($this->_tpl_vars['mysql_auth']): ?>
            <tr>
                <td><b><?php echo $this->_tpl_vars['g_lang_userpage_password']; ?>
</b></td>
                <td>
                    <input name="password" type="password" maxlength="32">
                    <?php echo $this->_tpl_vars['g_lang_userpage_leave_empty']; ?>

                </td>
            </tr>
        <?php endif; ?>
        <tr>
            <td><b><?php echo $this->_tpl_vars['g_lang_userpage_email']; ?>
</td>
            <td colspan=4>
                <input name="Email" type="text" value="<?php echo $this->_tpl_vars['user']->email; ?>
" class="email required" maxlength="50"></td>
        </tr>
        <tr>
            <td><b><?php echo $this->_tpl_vars['g_lang_userpage_department']; ?>
</b></td>
            <td colspan=3>

                <select name="department" <?php echo $this->_tpl_vars['mode']; ?>
>
                    <?php $_from = $this->_tpl_vars['department_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['department_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['department_list']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['department_list']['iteration']++;
?>
                        <?php if ($this->_tpl_vars['item']['id'] == $this->_tpl_vars['user_department']): ?>
                            <option selected value="<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['item']['name']; ?>
</option>
                        <?php else: ?>
                            <option value="<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['item']['name']; ?>
</option>
                        <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                </select>
            </td>
        </tr>
        <tr>
            <td><b><?php echo $this->_tpl_vars['g_lang_userpage_admin']; ?>
</b></td>
            <td colspan=1>
                <input name="admin" type="checkbox" value="1" <?php if ($this->_tpl_vars['is_admin']): ?>checked<?php endif; ?> <?php echo $this->_tpl_vars['mode']; ?>
 id="cb_admin" />
            </td>
        </tr>
        <tr id="userReviewDepartmentRow" <?php if ($this->_tpl_vars['display_reviewer_row']): ?>style="display: none;"<?php endif; ?> >
            <td id="userReviewDepartmentLabelTd"><?php echo $this->_tpl_vars['g_lang_userpage_reviewer_for']; ?>
</td>
            <td id="userReviewDepartmentListTd">
                <select class="multiView" id="userReviewDepartmentsList" name="department_review[]" multiple="multiple" <?php echo $this->_tpl_vars['mode']; ?>
 >
                    <?php $_from = $this->_tpl_vars['department_select_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['department_select_options'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['department_select_options']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['department_select_options']['iteration']++;
?>
                        <?php echo $this->_tpl_vars['item']; ?>

                    <?php endforeach; endif; unset($_from); ?>
                </select>
            </td>
        </tr>
        <tr>
            <td><?php echo $this->_tpl_vars['g_lang_userpage_can_add']; ?>
?</td>
            <td>
                <input name="can_add" type="checkbox" value="1" <?php echo $this->_tpl_vars['can_add']; ?>
 <?php echo $this->_tpl_vars['mode']; ?>
 id="cb_can_add" />
            </td>
        </tr>
        <tr>
            <td><?php echo $this->_tpl_vars['g_lang_userpage_can_checkin']; ?>
?</td>
            <td>
                <input name="can_checkin" type="checkbox" value="1" <?php echo $this->_tpl_vars['can_checkin']; ?>
 <?php echo $this->_tpl_vars['mode']; ?>
 id="cb_can_checkin" />
            </td>
        </tr>
        <tr>
            <td align="center">
                <input type="hidden" name="set_password" value="0">

                <div class="buttons">
                    <button class="positive" type="Submit" name="submit" value="Update User"><?php echo $this->_tpl_vars['g_lang_userpage_button_update']; ?>
</button>
                </div>
            </td>
            <td>
                <div class="buttons">
                    <button class="negative cancel" type="Submit" name="cancel" value="Cancel"><?php echo $this->_tpl_vars['g_lang_userpage_button_cancel']; ?>
</button>
                </div>
            </td>
        </tr>
    </table>
</form>
<script>
    <?php echo '
        $(document).ready(function () {
            $(\'#modifyUserForm\').validate();
        });
    '; ?>

</script>