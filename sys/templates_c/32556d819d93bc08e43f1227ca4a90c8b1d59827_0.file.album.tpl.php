<?php
/* Smarty version 3.1.30, created on 2017-04-09 17:47:11
  from "/home/danny/Dropbox/Projekte/webstift/pages/admin/album.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ea577f529121_82893695',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32556d819d93bc08e43f1227ca4a90c8b1d59827' => 
    array (
      0 => '/home/danny/Dropbox/Projekte/webstift/pages/admin/album.tpl',
      1 => 1491752823,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/base.tpl' => 1,
  ),
),false)) {
function content_58ea577f529121_82893695 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128917314158ea577f5248c3_26610556', "heading");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_70431747358ea577f528bd3_43651166', "content");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:admin/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "heading"} */
class Block_128917314158ea577f5248c3_26610556 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Album: <?php echo $_smarty_tpl->tpl_vars['album']->value->name;
}
}
/* {/block "heading"} */
/* {block "content"} */
class Block_70431747358ea577f528bd3_43651166 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/sys/scripts/imgup.js"><?php echo '</script'; ?>
>
	<a class="album" href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/admin/albums">
		<i class="fa fa-arrow-left fa-5x albumicon"></i>
		<span class="albumlabel">
			<span class="albumlabeltext">
				Zurück
			</span>
		</span>
	</a>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
		<div class="album stiftbox-img" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['image']->value->url;?>
')"
		data-src="<?php echo $_smarty_tpl->tpl_vars['image']->value->url;?>
">
			<span class="albumlabel">
				<span class="albumlabeltext">
					<?php echo $_smarty_tpl->tpl_vars['image']->value->name;?>

				</span>
			</span>
		</div>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	<a class="album" href="#"
	onclick="imgup('<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/admin/album?id=<?php echo $_smarty_tpl->tpl_vars['album']->value->id;?>
&action=imgup')">
		<i class="fa fa-plus fa-5x albumicon"></i>
		<span class="albumlabel">
			<span class="albumlabeltext">
				Bild hochladen
			</span>
		</span>
	</a>
<?php
}
}
/* {/block "content"} */
}
