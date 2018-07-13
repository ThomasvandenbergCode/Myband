<?php
/* Smarty version 3.1.32, created on 2018-07-04 09:01:30
  from '/var/www/vhosts/24609.hosts.ma-cloud.nl/httpdocs/bewijzenmap/periode1.4/bap/MVC/private/views/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b3c70ca893e44_33541668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc2c11184b676825fe625036588f8c3ae0ecd81f' => 
    array (
      0 => '/var/www/vhosts/24609.hosts.ma-cloud.nl/httpdocs/bewijzenmap/periode1.4/bap/MVC/private/views/login.tpl',
      1 => 1530687448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b3c70ca893e44_33541668 (Smarty_Internal_Template $_smarty_tpl) {
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
