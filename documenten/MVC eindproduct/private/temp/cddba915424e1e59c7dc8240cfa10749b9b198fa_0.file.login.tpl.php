<?php
/* Smarty version 3.1.32, created on 2018-06-28 11:21:31
  from 'C:\Users\Thomas\Documents\ma\bewijzenmap\periode1.4\bap\MVC\private\views\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b34a89bd290b3_08454003',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cddba915424e1e59c7dc8240cfa10749b9b198fa' => 
    array (
      0 => 'C:\\Users\\Thomas\\Documents\\ma\\bewijzenmap\\periode1.4\\bap\\MVC\\private\\views\\login.tpl',
      1 => 1530175577,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b34a89bd290b3_08454003 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form">

<h2 class="welcome"> Admin login page.</h2>
<form action="index.php" method="post">
    <div>
        <input type="text" name="username" placeholder="username" required/>
        <input type="password" name="password" placeholder="password" required/>
    </div>
    <div>
        <input type="submit" name="submit_login" value="login" />

    </div>
</form>
</div>

<?php }
}
