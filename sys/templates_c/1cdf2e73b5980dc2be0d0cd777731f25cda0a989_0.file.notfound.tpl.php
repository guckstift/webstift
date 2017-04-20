<?php
/* Smarty version 3.1.30, created on 2017-03-21 18:31:44
  from "/home/danny/Dropbox/Projekte/webstift/pages/notfound.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d163801383c2_98489103',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cdf2e73b5980dc2be0d0cd777731f25cda0a989' => 
    array (
      0 => '/home/danny/Dropbox/Projekte/webstift/pages/notfound.tpl',
      1 => 1490117503,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base.tpl' => 1,
  ),
),false)) {
function content_58d163801383c2_98489103 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36794074358d16380122125_03758344', "heading");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86528142258d16380133ef1_16744442', "content");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "heading"} */
class Block_36794074358d16380122125_03758344 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	Not found!
<?php
}
}
/* {/block "heading"} */
/* {block "content"} */
class Block_86528142258d16380133ef1_16744442 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<p>Sorry, this page is not available. Please go back!</p>
<?php
}
}
/* {/block "content"} */
}
