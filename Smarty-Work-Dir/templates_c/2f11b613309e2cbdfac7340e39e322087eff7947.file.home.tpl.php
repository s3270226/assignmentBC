<?php /* Smarty version Smarty-3.1.11, created on 2012-08-27 19:03:50
         compiled from "Smarty-Work-Dir/templates/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2091380784503b1f951725a6-83554964%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f11b613309e2cbdfac7340e39e322087eff7947' => 
    array (
      0 => 'Smarty-Work-Dir/templates/home.tpl',
      1 => 1346058163,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2091380784503b1f951725a6-83554964',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_503b1f9548fc81_64234118',
  'variables' => 
  array (
    'regions' => 0,
    'grapeVarieties' => 0,
    'yearsLowerBound' => 0,
    'yearsUpperBound' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503b1f9548fc81_64234118')) {function content_503b1f9548fc81_64234118($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include './Smarty-3.1.11/libs/plugins/function.html_options.php';
?><!DOCTYPE HTML PUBLIC
"-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html401/loose.dtd">
<html>
<head>
  <title>Explore Wines</title>
</head>
<body bgcolor="white">
<h1>Winestore</h1>
<form action="resultView.php" method="GET">
	<br>Wine Name:
	<input type="text" name="wineName">
	<br>Winery Name:
	<input type="text" name="wineryName">
	<br>Region:
	<?php echo smarty_function_html_options(array('name'=>'region','options'=>$_smarty_tpl->tpl_vars['regions']->value),$_smarty_tpl);?>

	
	<br>Grape Variety:
	<?php echo smarty_function_html_options(array('name'=>'grapeVariety','options'=>$_smarty_tpl->tpl_vars['grapeVarieties']->value),$_smarty_tpl);?>

	
	<br>Year:
	<br>Lower bound:
	<?php echo smarty_function_html_options(array('name'=>'yearLowerBound','options'=>$_smarty_tpl->tpl_vars['yearsLowerBound']->value),$_smarty_tpl);?>

	<br>Upper bound:
	<?php echo smarty_function_html_options(array('name'=>'yearUpperBound','options'=>$_smarty_tpl->tpl_vars['yearsUpperBound']->value),$_smarty_tpl);?>

	
	<br>Minimum number of wine in stock:
	<input type="text" name="minimumNumberOfWineInStock">
	<br>Minimum number of wine ordered:
	<input type="text" name="minimumNumberOfWineOrdered">
	<br>Minimum cost:
	<input type="text" name="minimumCost">
	<br>Maximum cost:
	<input type="text" name="maximumCost">
	<br><input type="submit" value="Search ^^">
</form>
</body>
</html><?php }} ?>