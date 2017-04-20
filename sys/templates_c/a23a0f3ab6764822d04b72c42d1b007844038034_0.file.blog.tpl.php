<?php
/* Smarty version 3.1.30, created on 2017-04-05 18:02:53
  from "/home/danny/Dropbox/Projekte/webstift/pages/admin/blog.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e5152d2c80b0_94200151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a23a0f3ab6764822d04b72c42d1b007844038034' => 
    array (
      0 => '/home/danny/Dropbox/Projekte/webstift/pages/admin/blog.tpl',
      1 => 1491405660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/base.tpl' => 1,
  ),
),false)) {
function content_58e5152d2c80b0_94200151 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190584244458e5152d2c4b66_66502682', "heading");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_150178998158e5152d2c71d0_06255123', "content");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:admin/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "heading"} */
class Block_190584244458e5152d2c4b66_66502682 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
News-Blog<?php
}
}
/* {/block "heading"} */
/* {block "content"} */
class Block_150178998158e5152d2c71d0_06255123 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
>
		$(function () {
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "content"} */
}
