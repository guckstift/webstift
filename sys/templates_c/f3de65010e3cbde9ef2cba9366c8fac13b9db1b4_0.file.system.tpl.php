<?php
/* Smarty version 3.1.30, created on 2017-04-06 15:46:24
  from "/home/danny/Dropbox/Projekte/webstift/pages/admin/system.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e646b048be40_66217066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3de65010e3cbde9ef2cba9366c8fac13b9db1b4' => 
    array (
      0 => '/home/danny/Dropbox/Projekte/webstift/pages/admin/system.tpl',
      1 => 1491486176,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/base.tpl' => 1,
  ),
),false)) {
function content_58e646b048be40_66217066 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_87595769458e646b0473ad0_86067959', "heading");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3333411158e646b04884c6_16461885', "content");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:admin/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "heading"} */
class Block_87595769458e646b0473ad0_86067959 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Systemeinstellungen<?php
}
}
/* {/block "heading"} */
/* {block "content"} */
class Block_3333411158e646b04884c6_16461885 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/admin/system?action=installdb">Installiere Datenbank</a>
<?php
}
}
/* {/block "content"} */
}
