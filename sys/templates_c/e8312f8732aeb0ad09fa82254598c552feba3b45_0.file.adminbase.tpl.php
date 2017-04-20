<?php
/* Smarty version 3.1.30, created on 2017-04-03 18:08:59
  from "/home/danny/Dropbox/Projekte/webstift/templates/adminbase.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e2739b65e858_86399639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8312f8732aeb0ad09fa82254598c552feba3b45' => 
    array (
      0 => '/home/danny/Dropbox/Projekte/webstift/templates/adminbase.tpl',
      1 => 1491235733,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e2739b65e858_86399639 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>guckstift</title>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/libs/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/styles/adminbase.css">
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/libs/jquery.js"><?php echo '</script'; ?>
>
</head>
<body>
	<div class="navbar">
		<div class="nav">
			<div class="left">
				<a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/admin">
					<img src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/media/gear.png" alt="Mau Logo" class="navlogo">
				</a>
			</div>
			<a href="#" onclick="$('.mainmenu').toggleClass('hover');return false;">
				<i class="hamburger fa fa-bars fa-2x"></i>
			</a>
			<div class="right">
				<ul class="mainmenu">
					<li>
						<a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/admin/news">News-Blog</a>
					</li>
					<li>
						<a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/admin/albums">Alben</a>
					</li>
					<li>
						<a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/" class="fa fa-home fa-2x" target="_blank"></a>
					</li>
					<li>
						<a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/" class="fa fa-sign-out fa-2x"></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="column">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79294582958e2739b65e3c9_74687411', "inner");
?>

	</div>
</body>
</html>
<?php }
/* {block "heading"} */
class Block_95602910758e2739b65daf0_37502375 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
This is the Heading Panel<?php
}
}
/* {/block "heading"} */
/* {block "content"} */
class Block_178462636458e2739b65df84_96433511 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div class="panel">
					<h1>
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_95602910758e2739b65daf0_37502375', "heading", $this->tplIndex);
?>

					</h1>
				</div>
			<?php
}
}
/* {/block "content"} */
/* {block "inner"} */
class Block_79294582958e2739b65e3c9_74687411 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<div class="main">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178462636458e2739b65df84_96433511', "content", $this->tplIndex);
?>

		</div>
		<?php
}
}
/* {/block "inner"} */
}
