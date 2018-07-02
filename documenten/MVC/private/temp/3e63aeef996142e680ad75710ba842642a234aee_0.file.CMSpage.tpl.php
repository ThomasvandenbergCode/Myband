<?php
/* Smarty version 3.1.32, created on 2018-06-29 11:05:23
  from 'C:\Users\Thomas\Documents\ma\bewijzenmap\periode1.4\bap\MVC\private\views\CMSpage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b35f653ae7082_15479552',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e63aeef996142e680ad75710ba842642a234aee' => 
    array (
      0 => 'C:\\Users\\Thomas\\Documents\\ma\\bewijzenmap\\periode1.4\\bap\\MVC\\private\\views\\CMSpage.tpl',
      1 => 1530263121,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b35f653ae7082_15479552 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a href="index.php?page=logout">LOGOUT</a>

<form method="post" action="index.php?page=voegtoe">


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
    <input class="styleinput" placeholder="afbeelding..." name="imagelink"/><br>
    </div>


    <input type="submit"  name="submit" />


</form><?php }
}
