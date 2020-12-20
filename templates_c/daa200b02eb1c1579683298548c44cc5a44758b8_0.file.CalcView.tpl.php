<?php
/* Smarty version 3.1.30, created on 2020-12-20 21:09:41
  from "D:\PULPIT\STUDIA\V SEMESTR 2020-2021\(AS) APLIKACJE SIECIOWE\XAMP\htdocs\php_07a_07b\app\widok\CalcView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5fdfbd95095272_33944805',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'daa200b02eb1c1579683298548c44cc5a44758b8' => 
    array (
      0 => 'D:\\PULPIT\\STUDIA\\V SEMESTR 2020-2021\\(AS) APLIKACJE SIECIOWE\\XAMP\\htdocs\\php_07a_07b\\app\\widok\\CalcView.tpl',
      1 => 1608498418,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_5fdfbd95095272_33944805 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14798153195fdfbd95094e58_03350105', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_14798153195fdfbd95094e58_03350105 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
	<span style="float:right;">użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</span>
</div>

<h2 class="content-head is-center">Kalkulator kredytowy</h2>

<div class="pure-g">
<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
	<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcCompute" method="post">
		<fieldset>

			<label for="kwota">Kwota kredytu [PLN]</label>
			<input id="kwota" type="number" placeholder="Kwota kredytu [PLN]" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kwota;?>
">
					
			<label for="lat">Kredyt na [lat]</label>
			<input id="lat" type="number" placeholder="Kredyt na [lat]" name="lat" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->lat;?>
">

            <label for="oprocentowanie">Oprocentowanie [%]</label>
			<input id="op" type="number" placeholder="Oprocentowanie [%]" name="op" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->op;?>
">
                        
			<button type="submit" class="pure-button">Wylicz</button>
		</fieldset>
	</form>
</div>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
<div class="l-box-lrg pure-u-1 pure-u-med-3-5">
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

        zł miesięcznie
	</p>
</div>

<?php }?>

<?php
}
}
/* {/block 'content'} */
}
