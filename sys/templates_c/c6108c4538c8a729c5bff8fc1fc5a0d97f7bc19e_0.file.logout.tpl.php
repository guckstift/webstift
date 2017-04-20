<?php
/* Smarty version 3.1.30, created on 2017-04-07 11:40:36
  from "/home/danny/Dropbox/Projekte/webstift/pages/admin/logout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e75e94329476_75187175',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6108c4538c8a729c5bff8fc1fc5a0d97f7bc19e' => 
    array (
      0 => '/home/danny/Dropbox/Projekte/webstift/pages/admin/logout.tpl',
      1 => 1491556137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/base.tpl' => 1,
  ),
),false)) {
function content_58e75e94329476_75187175 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134801784558e75e94314a87_89902377', "heading");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164568895858e75e943277f5_88059816', "content");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:admin/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "heading"} */
class Block_134801784558e75e94314a87_89902377 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Sie werden nun ausgeloggt...<?php
}
}
/* {/block "heading"} */
/* {block "content"} */
class Block_164568895858e75e943277f5_88059816 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
>
		$(function () {
			setTimeout(function () {
				window.location.href = "<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/admin/login";
			}, 1000);
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "content"} */
}
