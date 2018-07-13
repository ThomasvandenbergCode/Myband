<?php
/* Smarty version 3.1.32, created on 2018-07-11 08:55:05
  from '/var/www/vhosts/24609.hosts.ma-cloud.nl/httpdocs/bewijzenmap/periode1.4/bap/MVC/private/views/column_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b45a9c9510424_12561363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7516d7643e31c27deeddd1bf9bc8dd3c8c6363a5' => 
    array (
      0 => '/var/www/vhosts/24609.hosts.ma-cloud.nl/httpdocs/bewijzenmap/periode1.4/bap/MVC/private/views/column_edit.tpl',
      1 => 1531292103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b45a9c9510424_12561363 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" action="index.php?page=verwerk_column_edit"><br>
<label>columnID<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['column_edit']->value[0];?>
" readonly/></label><br>
<label>titel<textarea rows="4" cols="50"><?php echo $_smarty_tpl->tpl_vars['column_edit']->value[1];?>
</textarea></label><br>
<label>paragraaf<textarea rows="4" cols="50"><?php echo $_smarty_tpl->tpl_vars['column_edit']->value[2];?>
</textarea></label><br>
<label>afbeeldinglink<input type="text" name="imagelink" value="<?php echo $_smarty_tpl->tpl_vars['column_edit']->value[3];?>
"/></label><br>
    <input type="submit" name="submit_column_edit"/>
</form>

<?php }
}
