<?php
/* Smarty version 3.1.32, created on 2018-07-11 09:03:07
  from '/var/www/vhosts/24609.hosts.ma-cloud.nl/httpdocs/bewijzenmap/periode1.4/bap/MVC/private/views/edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b45ababe8d676_11839732',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1902ddfc6d73df45f693bd5ccc1809653f6b5f5' => 
    array (
      0 => '/var/www/vhosts/24609.hosts.ma-cloud.nl/httpdocs/bewijzenmap/periode1.4/bap/MVC/private/views/edit.tpl',
      1 => 1531292581,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b45ababe8d676_11839732 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" action="index.php?page=verwerk_edit">
<input type="text" name="article_id" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value[0];?>
" readonly/>
<textarea rows="4" cols="50" name="title"><?php echo $_smarty_tpl->tpl_vars['edit']->value[1];?>
</textarea>
<textarea rows="4" cols="50" name="inleiding"><?php echo $_smarty_tpl->tpl_vars['edit']->value[2];?>
</textarea>
<textarea rows="4" cols="50" name="middenstuk"><?php echo $_smarty_tpl->tpl_vars['edit']->value[3];?>
</textarea>
<textarea rows="4" cols="50" name="slot"><?php echo $_smarty_tpl->tpl_vars['edit']->value[4];?>
</textarea>
<textarea rows="4" cols="50" name="auteur"><?php echo $_smarty_tpl->tpl_vars['edit']->value[5];?>
</textarea>
<input type="text" name="imagelink" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value[6];?>
"/>
<input type="submit" name="submit_edit"/>
</form><?php }
}
