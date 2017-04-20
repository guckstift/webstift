<?php
/* Smarty version 3.1.30, created on 2017-04-07 14:36:49
  from "/home/danny/Dropbox/Projekte/webstift/pages/admin/albums.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e787e1628966_35808461',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1fa99b29294460e8f8df7dfc0c1e24faf1f78dd' => 
    array (
      0 => '/home/danny/Dropbox/Projekte/webstift/pages/admin/albums.tpl',
      1 => 1491568608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/base.tpl' => 1,
  ),
),false)) {
function content_58e787e1628966_35808461 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_93833141758e787e15da916_16455040', "heading");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_112552791558e787e16246e8_21681269', "content");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:admin/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "heading"} */
class Block_93833141758e787e15da916_16455040 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Albenverwaltung<?php
}
}
/* {/block "heading"} */
/* {block "content"} */
class Block_112552791558e787e16246e8_21681269 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<!--
	<?php echo '<script'; ?>
>
		$(function () {
		});
	<?php echo '</script'; ?>
>
	<form enctype="multipart/form-data" action="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/admin/albums" method="post">
		<input type="hidden" name="MAX_FILE_SIZE" value="30000">
		<input type="file">
		<button type="submit">
			Upload
		</button>
	</form>
	-->
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['albums']->value, 'album');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['album']->value) {
?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/admin/album?id=<?php echo $_smarty_tpl->tpl_vars['album']->value->id;?>
" class="album"
			<?php if (count($_smarty_tpl->tpl_vars['album']->value->images) > 0) {?>
				style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['album']->value->images[0]->url;?>
')"
			<?php }?>
		>
			<?php if (count($_smarty_tpl->tpl_vars['album']->value->images) === 0) {?>
				<i class="fa fa-folder-o fa-5x albumicon"></i>
			<?php }?>
			<span class="albumlabel">
				<span class="albumlabeltext">
					<?php echo $_smarty_tpl->tpl_vars['album']->value->name;?>

				</span>
			</span>
		</a>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php
}
}
/* {/block "content"} */
}
