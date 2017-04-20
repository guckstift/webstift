<?php
/* Smarty version 3.1.30, created on 2017-04-07 14:53:35
  from "/home/danny/Dropbox/Projekte/webstift/templates/base.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e78bcfab8950_46694139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cda9c2eb58b5b739ef769189a96addebdd135c8b' => 
    array (
      0 => '/home/danny/Dropbox/Projekte/webstift/templates/base.tpl',
      1 => 1491569612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e78bcfab8950_46694139 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_192329097558e78bcfa80db3_67099694', "title");
?>
</title>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/sys/libs/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/styles/base.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/styles/stiftbox.css">
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/sys/libs/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/sys/scripts/stiftbox.js"><?php echo '</script'; ?>
>
</head>
<body>
	<div class="navbar">
		<div class="column">
			<div class="nav">
				<div class="left">
					<a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
">
						<img src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/media/be-a-mau-2.png" alt="Mau Logo" class="navlogo">
					</a>
				</div>
				<a href="#" onclick="$('.mainmenu').toggleClass('hover');return false;">
					<i class="hamburger fa fa-bars fa-4x"></i>
				</a>
				<div class="right">
					<ul class="mainmenu">
						<li>
							<a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
">Webstift</a>
						</li>
						<li>
							<a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/projects">Projekte</a>
						</li>
						<li>
							<a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/contact">Kontakt</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86111800758e78bcfab3747_22961522', "outer");
?>

	<div class="footer">
		<div class="column">
			<div class="foot">
				<ul class="footmenu">
					<li>
						<a href="https://github.com/guckstift/" target="_blank">
							<i class="fa fa-github fa-4x"></i>
						</a>
					</li>
					<li>
						<a href="https://www.youtube.com/channel/UCPR_i8SZp1thKgj2FKLABLA"
							target="_blank">
							<i class="fa fa-youtube fa-4x"></i>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>
<?php }
/* {block "title"} */
class Block_192329097558e78bcfa80db3_67099694 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
guckstift<?php
}
}
/* {/block "title"} */
/* {block "heading"} */
class Block_133027861058e78bcfaa8c77_08874445 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
This is the Heading Panel<?php
}
}
/* {/block "heading"} */
/* {block "content"} */
class Block_175954078158e78bcfaaced2_90452128 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div class="panel">
					<h1>
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133027861058e78bcfaa8c77_08874445', "heading", $this->tplIndex);
?>

					</h1>
				</div>
			<?php
}
}
/* {/block "content"} */
/* {block "inner"} */
class Block_56959152658e78bcfab0444_86885598 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<div class="main">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175954078158e78bcfaaced2_90452128', "content", $this->tplIndex);
?>

		</div>
		<?php
}
}
/* {/block "inner"} */
/* {block "outer"} */
class Block_86111800758e78bcfab3747_22961522 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="column">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_56959152658e78bcfab0444_86885598', "inner", $this->tplIndex);
?>

	</div>
	<?php
}
}
/* {/block "outer"} */
}
