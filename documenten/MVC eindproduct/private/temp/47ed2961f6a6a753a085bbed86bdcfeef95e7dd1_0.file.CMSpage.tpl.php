<?php
/* Smarty version 3.1.32, created on 2018-07-11 09:34:24
  from '/var/www/vhosts/24609.hosts.ma-cloud.nl/httpdocs/bewijzenmap/periode1.4/bap/MVC/private/views/CMSpage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b45b300e11296_90503652',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47ed2961f6a6a753a085bbed86bdcfeef95e7dd1' => 
    array (
      0 => '/var/www/vhosts/24609.hosts.ma-cloud.nl/httpdocs/bewijzenmap/periode1.4/bap/MVC/private/views/CMSpage.tpl',
      1 => 1531294461,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b45b300e11296_90503652 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a class="logoutbtn" href="index.php?page=logout">LOGOUT</a>




   <table>

        <tr class="trhome">
            <th class="thhome">column_id</th>
            <th class="thhome">column titel</th>
            <th class="thhome">column paragraaf</th>
            <th class="thhome">imagelink</th>
            <th class="thhome">verwijder</th>
            <th class="thhome">wijzig</th>
            </tr>







    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['columns']->value, 'column');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['column']->value) {
?>
        <tr class="trhome">

        <td class="tdhome"><?php echo $_smarty_tpl->tpl_vars['column']->value[0];?>
</td><td class="tdhome"><?php echo $_smarty_tpl->tpl_vars['column']->value[1];?>
</td><td class="tdhome"><?php echo $_smarty_tpl->tpl_vars['column']->value[2];?>
</td><td class="tdhome"><?php echo $_smarty_tpl->tpl_vars['column']->value[3];?>
</td>
            <td class="tdhome">
            <a href="index.php?page=column_delete&column_id=<?php echo $_smarty_tpl->tpl_vars['column']->value[0];?>
">DELETE</a>
            </td>
            <td class="tdhome">
            <a  href="index.php?page=column_edit&column_id=<?php echo $_smarty_tpl->tpl_vars['column']->value[0];?>
">EDIT</a>

            </td>
       </tr>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
   </table>

<form method="post" action="index.php?page=voegtoe_column" enctype="multipart/form-data">
    <div class="row">
        <div class="column">
            <input  placeholder="titel..." type="text" name="column_title"/>
        </div>
        <div class="column">
            <textarea placeholder="type hier de inhoud..." name="column_p" rows="4" cols="50"></textarea>
        </div>
        <div class="column">
            <input class="styleinput" placeholder="type hier de imagelink..." type="text" name="image_link"/>
        </div>
    </div>



    <input type="submit"  name="submit_column" />


</form>

























<table>



    <tr class="trblog">
        <th>artikel ID</th>
        <th>titel</th>
        <th>inleiding</th>
        <th>middenstuk</th>
        <th>slot</th>
        <th>auteur</th>
        <th>afbeelding</th>
        <th>verwijderen</th>
        <th>veranderen</th>
    </tr>







    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
        <tr class="trblog">

            <td><?php echo $_smarty_tpl->tpl_vars['article']->value[0];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['article']->value[1];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['article']->value[2];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['article']->value[3];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['article']->value[4];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['article']->value[5];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['article']->value[6];?>
</td>
            <td>
                <a href="index.php?page=delete&article_id=<?php echo $_smarty_tpl->tpl_vars['article']->value[0];?>
">DELETE</a>
            </td>
            <td>
                <a  href="index.php?page=edit&article_id=<?php echo $_smarty_tpl->tpl_vars['article']->value[0];?>
">EDIT</a>

            </td>
        </tr>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>

<form method="post" action="index.php?page=voegtoe" enctype="multipart/form-data">
<div class="row">
    <div class="column">
    <textarea placeholder="type hier de inleiding..." name="inleiding" rows="4" cols="50"></textarea><br>
</div>
    <div class="column">
    <textarea placeholder="type hier het middenstuk..." name="middenstuk" rows="4" cols="50"></textarea><br>
    </div>
    <div class="column">
    <textarea placeholder="type hier het slot..." name="slot" rows="4" cols="50"></textarea><br>
    </div>
</div>
    <div class="secondrow">
    <input class="styleinput" placeholder="titel..." type="text" name="titel"/><br>
    <input class="styleinput" placeholder="auteur..." name="auteur" /><br>
    <input class="styleinput" placeholder="imagelink..." type="text" name="imagelink"/><br>
    </div>


    <input type="submit"  name="submit_add" />


</form><?php }
}
