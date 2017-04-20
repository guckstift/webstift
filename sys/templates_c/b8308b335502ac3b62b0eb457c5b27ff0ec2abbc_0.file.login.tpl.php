<?php
/* Smarty version 3.1.30, created on 2017-04-07 11:53:53
  from "/home/danny/Dropbox/Projekte/webstift/pages/admin/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e761b111e5e7_76921418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8308b335502ac3b62b0eb457c5b27ff0ec2abbc' => 
    array (
      0 => '/home/danny/Dropbox/Projekte/webstift/pages/admin/login.tpl',
      1 => 1491558829,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/base.tpl' => 1,
  ),
),false)) {
function content_58e761b111e5e7_76921418 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1518470158e761b1117a61_70011924', "content");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:admin/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "content"} */
class Block_1518470158e761b1117a61_70011924 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="login-panel">
		<form action="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/admin/login" method="post">
			<input type="text" placeholder="Benutzername" class="textbox" id="user" name="user">
			<input type="password" placeholder="Passwort" class="textbox" id="pass" name="pass">
			<button type="submit" class="btn">Anmelden</button>
		</form>
	</div>
<?php
}
}
/* {/block "content"} */
}
