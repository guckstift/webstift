<?php
/* Smarty version 3.1.30, created on 2017-04-04 21:54:52
  from "/home/danny/Dropbox/Projekte/webstift/pages/admin/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e3fa0cf100f0_09285667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c104b3d1ae39883ff9a3216f9e4141b2f86bb32e' => 
    array (
      0 => '/home/danny/Dropbox/Projekte/webstift/pages/admin/index.tpl',
      1 => 1491335691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/base.tpl' => 1,
  ),
),false)) {
function content_58e3fa0cf100f0_09285667 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132015603358e3fa0cf0b410_77087978', "heading");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8625058158e3fa0cf0ec27_82175864', "content");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:admin/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "heading"} */
class Block_132015603358e3fa0cf0b410_77087978 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Admininstrationsbereich<?php
}
}
/* {/block "heading"} */
/* {block "content"} */
class Block_8625058158e3fa0cf0ec27_82175864 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<p>Willkommen im Admininstrationsbereich. Hier verwalten Sie Ihre Webseite.</p>
<?php
}
}
/* {/block "content"} */
}
