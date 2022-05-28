<?php /* Smarty version 2.6.28, created on 2016-08-11 11:28:45
         compiled from /Applications/MAMP/htdocs/docmgt//templates/common/details.tpl */ ?>
<table border="0" width=100% cellspacing="4" cellpadding="1">
    <form name="data">
        <input type="hidden" name="to" value="<?php echo $this->_tpl_vars['file_detail']['to_value']; ?>
" />
        <input type="hidden" name="subject" value="<?php echo $this->_tpl_vars['file_detail']['subject_value']; ?>
" />
        <input type="hidden" name="comments" value="<?php echo $this->_tpl_vars['file_detail']['comments_value']; ?>
" />
    </FORM>
    <tr>
        <td align="right">
            <?php if ($this->_tpl_vars['file_detail']['file_unlocked']): ?>
                <img src="images/file_unlocked.png" alt="" border="0" align="absmiddle">
            <?php else: ?>
                <img src="images/file_locked.png" alt="" border="0" align="absmiddle">
            <?php endif; ?>
        </td>
        <td align="left">
            <font size="+1"><?php echo $this->_tpl_vars['file_detail']['realname']; ?>
</font>
        </td>
    </tr>
    <tr>
        <th valign=top align=right><?php echo $this->_tpl_vars['g_lang_category']; ?>
:</th><td><?php echo $this->_tpl_vars['file_detail']['category']; ?>
</td>
    </tr>

    <?php echo $this->_tpl_vars['file_detail']['udf_details_display']; ?>


    <tr>
        <th valign=top align=right><?php echo $this->_tpl_vars['g_lang_label_size']; ?>
:</th><td><?php echo $this->_tpl_vars['file_detail']['filesize']; ?>
</td>
    </tr>
    <tr>
        <th valign=top align=right><?php echo $this->_tpl_vars['g_lang_label_created_date']; ?>
:</th><td> <?php echo $this->_tpl_vars['file_detail']['created']; ?>
</td>
    </tr>
    <tr>
        <th valign=top align=right><?php echo $this->_tpl_vars['g_lang_owner']; ?>
:</th>
        <td>
            <a href="mailto:<?php echo $this->_tpl_vars['file_detail']['owner_email']; ?>
?Subject=Regarding%20your%20document:<?php echo $this->_tpl_vars['file_detail']['realname']; ?>
&Body=Hello%20<?php echo $this->_tpl_vars['file_detail']['owner_fullname']; ?>
"> <?php echo $this->_tpl_vars['file_detail']['owner']; ?>
</a>
        </td>
    </tr>
    <tr>
        <th valign=top align=right><?php echo $this->_tpl_vars['g_lang_label_description']; ?>
:</th><td> <?php echo $this->_tpl_vars['file_detail']['description']; ?>
</td>
    </tr>
    <tr>
	<th valign=top align=right><?php echo $this->_tpl_vars['g_lang_label_comment']; ?>
:</th><td> <?php echo $this->_tpl_vars['file_detail']['comment']; ?>
</td>
    </tr>
    <tr>
        <th valign=top align=right><?php echo $this->_tpl_vars['g_lang_revision']; ?>
:</th><td> <div id="details_revision"><?php echo $this->_tpl_vars['file_detail']['revision']; ?>
</div></td>
    </tr>
<?php if ($this->_tpl_vars['file_detail']['file_under_review']): ?>
    <tr>
        <th valign=top align=right><?php echo $this->_tpl_vars['g_lang_label_reviewer']; ?>
:</th>
        <td> <?php echo $this->_tpl_vars['file_detail']['reviewer']; ?>
 (<a href='javascript:showMessage()'><?php echo $this->_tpl_vars['g_lang_message_reviewers_comments_re_rejection']; ?>
</a>)</td>
    </tr>
<?php endif; ?>

<?php if ($this->_tpl_vars['file_detail']['status'] > 0): ?>
    <tr>
        <th valign=top align=right><?php echo $this->_tpl_vars['g_lang_detailspage_file_checked_out_to']; ?>
:</th><td><a href="mailto:<?php echo $this->_tpl_vars['checkout_person_email']; ?>
?Subject=Regarding%20your%20checked-out%20document:<?php echo $this->_tpl_vars['file_detail']['realname']; ?>
&Body=Hello%20<?php echo $this->_tpl_vars['checkout_person_full_name'][$this->_tpl_vars['fullname']][0]; ?>
"> <?php echo $this->_tpl_vars['checkout_person_full_name'][1]; ?>
, <?php echo $this->_tpl_vars['checkout_person_full_name'][0]; ?>
</a></td>
    </tr>
<?php endif; ?>

<!-- available actions -->
    <tr>
        <td colspan="2" align="center">
            <table border="0" cellspacing="5" cellpadding="5">
                <tr>
                <!-- inner table begins -->
                <!-- view option available at all time, place it outside the block -->
                <?php if ($this->_tpl_vars['view_link'] != ''): ?>
                    <td align="center">
                        <div class="buttons">
                            <a href="<?php echo $this->_tpl_vars['view_link']; ?>
" class="positive"><img src="images/view.png" alt="view"/><?php echo $this->_tpl_vars['g_lang_detailspage_view']; ?>
</a>
                        </div>
                    </td>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['check_out_link'] != ''): ?>
                    <td align="center">
                        <div class="buttons">
                            <a href="<?php echo $this->_tpl_vars['check_out_link']; ?>
" class="regular"><img src="images/check-out.png" alt="check out"/><?php echo $this->_tpl_vars['g_lang_detailspage_check_out']; ?>
</a>
                        </div>
                    </td>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['edit_link'] != ''): ?>
                    <td align="center">
                        <div class="buttons">
                            <a href="<?php echo $this->_tpl_vars['edit_link']; ?>
" class="regular"><img src="images/edit.png" alt="edit"/><?php echo $this->_tpl_vars['g_lang_detailspage_edit']; ?>
</a>
                        </div>
                    </td>
                    <td align="center">
                        <div class="buttons">
                            <a href="javascript:my_delete()" class="negative"><img src="images/delete.png" alt="delete"/><?php echo $this->_tpl_vars['g_lang_detailspage_delete']; ?>
</a>
                        </div>
                    </td>
                <?php endif; ?>
                    <td align="center">
                        <div class="buttons">
                            <a href="<?php echo $this->_tpl_vars['history_link']; ?>
" class="regular"><img src="images/history.png" alt="history"/><?php echo $this->_tpl_vars['g_lang_detailspage_history']; ?>
</a>
                        </div>
                    </td>

                </tr>
                <!-- inner table ends -->
            </table>
        </td>
    </tr>
</table>
<?php echo '
<script type="text/javascript">
	var message_window;
	var mesg_window_frm;
	function my_delete()
	{
		if(window.confirm("'; ?>
<?php echo $this->_tpl_vars['g_lang_detailspage_are_sure']; ?>
<?php echo '")) {	
		window.location = "'; ?>
<?php echo $this->_tpl_vars['my_delete_link']; ?>
<?php echo '";	
		}
	}
	function sendFields()
	{
		mesg_window_frm = message_window.document.author_note_form;
		if(mesg_window_frm) {
                    mesg_window_frm.to.value = document.data.to.value;
                    mesg_window_frm.subject.value = document.data.subject.value;
                    mesg_window_frm.comments.value = document.data.comments.value;
                }
	}
	function showMessage()
	{
		message_window = window.open(\''; ?>
<?php echo $this->_tpl_vars['comments_link']; ?>
<?php echo '\' , \'comment_wins\', \'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=no,width=450,height=200\');
		message_window.focus();
		setTimeout("sendFields();", 500);
	}
</script>
'; ?>
