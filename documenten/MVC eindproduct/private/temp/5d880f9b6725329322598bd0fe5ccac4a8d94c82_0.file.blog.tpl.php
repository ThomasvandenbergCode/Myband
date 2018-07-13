<?php
/* Smarty version 3.1.32, created on 2018-07-12 17:38:17
  from '/var/www/vhosts/24609.hosts.ma-cloud.nl/httpdocs/bewijzenmap/periode1.4/bap/MVC/private/views/blog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b4775e949f1f2_23991093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d880f9b6725329322598bd0fe5ccac4a8d94c82' => 
    array (
      0 => '/var/www/vhosts/24609.hosts.ma-cloud.nl/httpdocs/bewijzenmap/periode1.4/bap/MVC/private/views/blog.tpl',
      1 => 1531409856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b4775e949f1f2_23991093 (Smarty_Internal_Template $_smarty_tpl) {
?><header>
    <div class="navbar">
        <a href="index.php?page=home"><i class="fas fa-home"></i>HOME</a>
        <a href="index.php?page=blog"><i class="fab fa-blogger"></i>BLOG</a>
        <a href="index.php?page=contact"><i class="fas fa-address-card"></i>CONTACT</a>
    </div>

    <div class="admin-login"><a href="index.php?page=login"><i class="fas fa-lock"></i>ADMIN CENTER</a></div>


</header>



<div class="info">
<h3 class="numberofpages">Number of pages : <?php echo $_smarty_tpl->tpl_vars['number_of_pages']->value;?>
</h3>
<h3 class="currentpage">Current page: <?php echo $_smarty_tpl->tpl_vars['current_page']->value;?>
</span></h3>
</div>

<form method="get" action="index.php">
    <input type="hidden" name="page" value="blog">
    <input class="zoekveld" name="searchterm">
    <button class="zoeken" type="submit" name="submit" value="zoek"><i class="fas fa-search"></i></button>
</form>
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


<div>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
    <div class="omhulsel">
        <img class="artikelafbeelding"   src="<?php echo $_smarty_tpl->tpl_vars['article']->value[6];?>
" alt="foobar" />
        <h1 class="titelartikel"><?php echo $_smarty_tpl->tpl_vars['article']->value[1];?>
</h1><br>
         <p class="tekst"><?php echo $_smarty_tpl->tpl_vars['article']->value[2];?>

            <?php echo $_smarty_tpl->tpl_vars['article']->value[3];?>

            <?php echo $_smarty_tpl->tpl_vars['article']->value[4];?>

            <?php echo $_smarty_tpl->tpl_vars['article']->value[4];?>
 </p>
            

</div>
    <div class="line"></div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</div>

<?php }
}
