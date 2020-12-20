<?php
/* Smarty version 3.1.30, created on 2020-12-20 19:19:46
  from "D:\PULPIT\STUDIA\V SEMESTR 2020-2021\(AS) APLIKACJE SIECIOWE\XAMP\htdocs\php_07a_07b\app\widok\templates\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5fdfa3d2d4e021_56397006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f05afe7b8c68a73b159f41c5c53449a45ef59533' => 
    array (
      0 => 'D:\\PULPIT\\STUDIA\\V SEMESTR 2020-2021\\(AS) APLIKACJE SIECIOWE\\XAMP\\htdocs\\php_07a_07b\\app\\widok\\templates\\main.tpl',
      1 => 1608491983,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdfa3d2d4e021_56397006 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
	<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "brak tytułu" : $tmp);?>
</title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css" />
</head>
<body>
	<div style="margin: 1em;">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5891283925fdfa3d2d4dc16_69588572', 'content');
?>

	</div>
</body>
</html><?php }
/* {block 'content'} */
class Block_5891283925fdfa3d2d4dc16_69588572 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
