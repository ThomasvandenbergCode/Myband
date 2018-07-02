<?php
/* Smarty version 3.1.32, created on 2018-06-29 12:14:16
  from 'C:\Users\Thomas\Documents\ma\bewijzenmap\periode1.4\bap\MVC\private\views\blog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b3606784a1266_30502236',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '828f547ae3f081cc51de19f9c3c2f543d0647a87' => 
    array (
      0 => 'C:\\Users\\Thomas\\Documents\\ma\\bewijzenmap\\periode1.4\\bap\\MVC\\private\\views\\blog.tpl',
      1 => 1530267255,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b3606784a1266_30502236 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>
    <h1 class="title">News page</h1>
</header>

<h3 class="numberofpages">Number of pages : <?php echo $_smarty_tpl->tpl_vars['number_of_pages']->value;?>
</h3>
<h4 class="currentpage">Current page: <span id="pot" style="color:green"><?php echo $_smarty_tpl->tpl_vars['current_page']->value;?>
</span></h4>

<br><br><br><br><br><br><br>
<div class="main">
<tr>
    <td>
<?php if ($_smarty_tpl->tpl_vars['current_page']->value > 1) {?>
    <a class="left" href="index.php?page=blog&pageno=<?php echo $_smarty_tpl->tpl_vars['current_page']->value-1;?>
">&laquo;vorige</a>
<?php }?>
    </td>
    <td>
        <?php if ($_smarty_tpl->tpl_vars['current_page']->value < $_smarty_tpl->tpl_vars['number_of_pages']->value) {?>
            <a class="right" href="index.php?page=blog&pageno=<?php echo $_smarty_tpl->tpl_vars['current_page']->value+1;?>
">volgende&raquo;</a>
        <?php }?>

    </td>
    <a class="home" href="index.php?page=home">Home</a>




    <td>
        <?php if ($_smarty_tpl->tpl_vars['current_page']->value == $_smarty_tpl->tpl_vars['number_of_pages']->value) {?>
            <a href="index.php?page=blog&pageno=1"> naar de eerste pagina</a>
        <?php }?>

    </td>
    <td>
        <?php $_prefixVariable1 = 1;
$_smarty_tpl->_assignInScope('current_page', $_prefixVariable1);
if ($_prefixVariable1) {?>
            <a href="index.php?page=blog&pageno=<?php echo $_smarty_tpl->tpl_vars['number_of_pages']->value;?>
">naar de laatste pagina</a>
        <?php }?>

    </td>
</tr>


<p>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
    <div class="content">
        <h3> <?php echo $_smarty_tpl->tpl_vars['article']->value[0];?>
</h3>
    <p> <?php echo $_smarty_tpl->tpl_vars['article']->value[1];?>
</p>
    <p><?php echo $_smarty_tpl->tpl_vars['article']->value[2];?>
</p>
    <p><b>slot:</b> <br><?php echo $_smarty_tpl->tpl_vars['article']->value[3];?>
</p>
    <p><b>auteur:</b> <?php echo $_smarty_tpl->tpl_vars['article']->value[4];?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['article']->value[5];?>
</p>  <img  src="<?php echo $_smarty_tpl->tpl_vars['article']->value[6];?>
" alt="foobar" />
</div>
    <div class="line"></div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</p>

<?php }
}
