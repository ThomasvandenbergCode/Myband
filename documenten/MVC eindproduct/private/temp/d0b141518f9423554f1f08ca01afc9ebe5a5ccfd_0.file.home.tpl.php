<?php
/* Smarty version 3.1.32, created on 2018-07-13 18:00:34
  from 'C:\Users\Thomas\Documents\ma\bewijzenmap\periode1.4\bap\MVC\private\views\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b48cca2ac0ed0_51933050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0b141518f9423554f1f08ca01afc9ebe5a5ccfd' => 
    array (
      0 => 'C:\\Users\\Thomas\\Documents\\ma\\bewijzenmap\\periode1.4\\bap\\MVC\\private\\views\\home.tpl',
      1 => 1531496780,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b48cca2ac0ed0_51933050 (Smarty_Internal_Template $_smarty_tpl) {
?><header>


    <div class="navbar">
        <a href="index.php?page=home"><i class="fas fa-home"></i>HOME</a>
        <a href="index.php?page=blog"><i class="fab fa-blogger"></i>BLOG</a>
        <a href="index.php?page=contact"><i class="fas fa-address-card"></i>CONTACT</a>
    </div>

    <div class="admin-login"><a href="index.php?page=login"><i class="fas fa-lock"></i>ADMIN CENTER</a></div>

</header>


<div id="bannerDiv">
    <img src="css/liquicitylogo.png" id="logo">
</div>

<?php echo '<script'; ?>
 src="js/script.js"> <?php echo '</script'; ?>
>





<main>




        <div>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['columns']->value, 'column');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['column']->value) {
?>
            <div class="column">
                <h1><?php echo $_smarty_tpl->tpl_vars['column']->value[1];?>
</h1>    <br>
                <p><?php echo $_smarty_tpl->tpl_vars['column']->value[2];?>
</p>
                <img class="columnimage" src="<?php echo $_smarty_tpl->tpl_vars['column']->value[3];?>
" alt="foobar" />
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </div>








</main>


<footer>

    <div class="smallfootbar"></div>
    <div class="footerbar"></div>

    <p class="copyright">© 2018 THOMAS VAN DEN BERG ALL RIGHTS RESERVED</p>
    <div class="row">

        <div class="iconcollumn"><a href="www.github.com"><img class="icons" src="css/github.png" alt="icon" target="_blank"/></a></div>
        <div class="iconcollumn"><a href="www.github.com"><img class="icons" src="css/facebook.png" alt="icon" target="_blank"/></a></div>
        <div class="iconcollumn"><a href="www.github.com"><img class="icons" src="css/youtube.png" alt="icon" target="_blank"/></a></div>
        <div class="iconcollumn"><a href="www.github.com"><img class="icons" src="css/googleplus.png" alt="icon" target="_blank"/></a></div>
        <div class="iconcollumn"><a href="linkedin.com"><img class="icons" src="css/linkedin.png" alt="icon" target="_blank"/></a></div>
    </div>

    <div class="underbar"></div>
    <div class="smallunderbar"></div>
</footer>

<?php }
}
