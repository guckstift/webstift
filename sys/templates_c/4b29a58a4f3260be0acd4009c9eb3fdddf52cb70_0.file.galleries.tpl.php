<?php
/* Smarty version 3.1.30, created on 2017-03-31 17:38:57
  from "/home/danny/Dropbox/Projekte/webstift/pages/admin/galleries.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58de7811b40964_60188549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b29a58a4f3260be0acd4009c9eb3fdddf52cb70' => 
    array (
      0 => '/home/danny/Dropbox/Projekte/webstift/pages/admin/galleries.tpl',
      1 => 1490974737,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminbase.tpl' => 1,
  ),
),false)) {
function content_58de7811b40964_60188549 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45728118558de7811b224a7_55006528', "heading");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_137861184958de7811b3a119_15171017', "content");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:adminbase.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "heading"} */
class Block_45728118558de7811b224a7_55006528 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Gallerienverwaltung<?php
}
}
/* {/block "heading"} */
/* {block "content"} */
class Block_137861184958de7811b3a119_15171017 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
>
		$(function () {
			myDropzone = new Dropzone(
				"#img-uploader",
				{
					url: "<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
",
					addRemoveLinks: true,
				}
			);
		});
	<?php echo '</script'; ?>
>
	<div id="img-uploader">
		Bemau
	</div>
<?php
}
}
/* {/block "content"} */
}
