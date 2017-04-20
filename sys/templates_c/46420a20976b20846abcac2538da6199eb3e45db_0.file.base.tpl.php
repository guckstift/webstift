<?php
/* Smarty version 3.1.30, created on 2017-04-07 14:58:30
  from "/home/danny/Dropbox/Projekte/webstift/templates/admin/base.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e78cf68c3ae8_72476651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46420a20976b20846abcac2538da6199eb3e45db' => 
    array (
      0 => '/home/danny/Dropbox/Projekte/webstift/templates/admin/base.tpl',
      1 => 1491569908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e78cf68c3ae8_72476651 (Smarty_Internal_Template $_smarty_tpl) {
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
/sys/libs/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/styles/adminbase.css">
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
					<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
						<li>
							<a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/admin/system">System</a>
						</li>
						<li>
							<a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/admin/blog">News-Blog</a>
						</li>
						<li>
							<a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/admin/albums">Alben</a>
						</li>
					<?php }?>
					<li>
						<a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/" class="fa fa-home icon" target="_blank"></a>
					</li>
					<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
						<li>
							<a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/admin/logout" class="fa fa-sign-out icon"></a>
						</li>
					<?php }?>
				</ul>
			</div>
		</div>
	</div>
	<div class="column">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209602603658e78cf68bd971_60228920', "inner");
?>

	</div>
</body>
</html>
<?php }
/* {block "heading"} */
class Block_139504729758e78cf68b6d18_42241393 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
This is the Heading Panel<?php
}
}
/* {/block "heading"} */
/* {block "content"} */
class Block_154611878058e78cf68b9775_81627757 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div class="panel">
					<h1>
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139504729758e78cf68b6d18_42241393', "heading", $this->tplIndex);
?>

					</h1>
				</div>
			<?php
}
}
/* {/block "content"} */
/* {block "inner"} */
class Block_209602603658e78cf68bd971_60228920 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<div class="main">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154611878058e78cf68b9775_81627757', "content", $this->tplIndex);
?>

		</div>
		<?php
}
}
/* {/block "inner"} */
}
