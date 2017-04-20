<?php
/* Smarty version 3.1.30, created on 2017-04-05 16:13:43
  from "/home/danny/Dropbox/Projekte/webstift/templates/admin/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e4fb978b0275_87411917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21bcfd58ebfcdc5db746bcefc4bc2a9272bc25cf' => 
    array (
      0 => '/home/danny/Dropbox/Projekte/webstift/templates/admin/login.tpl',
      1 => 1491379914,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e4fb978b0275_87411917 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="login-panel">
	<form action="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/admin" method="post">
		<input type="text" placeholder="Benutzername" class="textbox" id="user" name="user">
		<input type="password" placeholder="Passwort" class="textbox" id="pass" name="pass">
		<button type="submit" class="btn">Anmelden</button>
	</form>
</div>
<?php }
}
