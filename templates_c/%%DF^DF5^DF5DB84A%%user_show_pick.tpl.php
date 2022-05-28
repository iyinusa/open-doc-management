<?php /* Smarty version 2.6.28, created on 2016-08-11 11:27:39
         compiled from /Applications/MAMP/htdocs/docmgt//templates/common/user_show_pick.tpl */ ?>
<table border="0" cellspacing="5" cellpadding="5">
    <form action="user.php" method="POST" enctype="multipart/form-data">
        <INPUT type="hidden" name="state" value="<?php echo $this->_tpl_vars['state']; ?>
" />
        <tr>
            <td><b><?php echo $this->_tpl_vars['g_lang_userpage_user']; ?>
</b></td>
            <td colspan=3>
                <select name="item">
                    <?php $_from = $this->_tpl_vars['user_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['user_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['user_list']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['user_list']['iteration']++;
?>
                        <option value="<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['item']['last_name']; ?>
, <?php echo $this->_tpl_vars['item']['first_name']; ?>
 - <?php echo $this->_tpl_vars['item']['username']; ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>
            </td>
            <td  align="center">
                <div class="buttons">
                    <button class="positive" type="Submit" name="submit" value="Show User"><?php echo $this->_tpl_vars['g_lang_userpage_button_show']; ?>
</button>
                </div>
            </td>
            <td>
                <div class="buttons">
                    <button class="negative" type="Submit" name="cancel" value="Cancel"><?php echo $this->_tpl_vars['g_lang_userpage_button_cancel']; ?>
</button>
                </div>
            </td>
        </tr>
    </form>
</table>