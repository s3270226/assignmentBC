<?php /* Smarty version Smarty-3.1.11, created on 2012-08-27 19:02:12
         compiled from "Smarty-Work-Dir/templates/resultView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2070453870503b1f9ac4ca82-56403728%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a0e8e7016ab091239b390029d65648f06c4aaa8' => 
    array (
      0 => 'Smarty-Work-Dir/templates/resultView.tpl',
      1 => 1346058096,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2070453870503b1f9ac4ca82-56403728',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_503b1f9b5451f2_23346342',
  'variables' => 
  array (
    'mylist' => 0,
    'k' => 0,
    'i' => 0,
    'mylist2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503b1f9b5451f2_23346342')) {function content_503b1f9b5451f2_23346342($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/home/stud/s3270226/.HTMLinfo/wda/projects/connect/partC/Smarty-3.1.11/libs/plugins/function.cycle.php';
?><br>
<h3>Listing of wine with ordered recorded</h3>

<table border="1">
<tr>
	<td>wine id</td>
	<td>wine name</td>
	<td>grape variety</td>
	<td>year</td>
	<td>winery name</td>
	<td>region name</td>
	<td>cost</td>
	<td>on hand</td>
	<td>amount sold</td>
	<td>revenue</td>
</tr>

<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['mylist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>

<tr style="background-color: <?php echo smarty_function_cycle(array('values'=>"#eeeeee,#d0d0d0"),$_smarty_tpl);?>
"> 
	<td><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['wine_name'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['variety'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['year'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['winery_name'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['region_name'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['cost'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['on_hand'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['amount_sold'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['revenue'];?>
</td>
</tr>

<?php }
if (!$_smarty_tpl->tpl_vars['i']->_loop) {
?>

<tr><td colspan="3">No items to list</td></tr>

<?php } ?>

</table>

<h3>Listing of wine with no ordered recorded</h3>
<table border="1">
<tr>
	<td>wine id</td>
	<td>wine name</td>
	<td>grape variety</td>
	<td>year</td>
	<td>winery name</td>
	<td>region name</td>
	<td>cost</td>
	<td>on hand</td>
</tr>

<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['mylist2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>

<tr style="background-color: <?php echo smarty_function_cycle(array('values'=>"#eeeeee,#d0d0d0"),$_smarty_tpl);?>
"> 
	<td><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['wine_name'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['variety'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['year'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['winery_name'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['region_name'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['cost'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['on_hand'];?>
</td>
</tr>

<?php }
if (!$_smarty_tpl->tpl_vars['i']->_loop) {
?>

<tr><td colspan="3">No items to list</td></tr>
<?php } ?>

</table><?php }} ?>