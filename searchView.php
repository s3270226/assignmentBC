<?php 
require_once("connect.php");
define("USER_HOME_DIR", "Smarty-3.1.11"); // CHANGE HERE
require(USER_HOME_DIR . "/libs/Smarty.class.php");

$smarty = new Smarty();
$smarty->template_dir = "Smarty-Work-Dir/templates";
$smarty->compile_dir = "Smarty-Work-Dir/templates_c";
$smarty->cache_dir = "Smarty-Work-Dir/cache";
$smarty->config_dir = "Smarty-Work-Dir/configs";

//region
$query = "SELECT * FROM region";
$result = mysql_query($query, $dbconn);
$cart = array();
while($row=mysql_fetch_array($result))
{
	$cart[$row['region_name']] = $row['region_name'];
}
$smarty->assign('regions', $cart);


//grape variety
$query = "SELECT * FROM grape_variety";
$result = mysql_query($query, $dbconn);
$grapeVarieties=array();
$grapeVarieties['All']='All';
while($row=mysql_fetch_array($result))
{
	$grapeVarieties[$row['variety']]=$row['variety'];
}
$smarty->assign('grapeVarieties', $grapeVarieties);
			


//year
//year select
$query = "SELECT year FROM wine group by year order by year";
$result = mysql_query($query, $dbconn);
$yearsLowerBound=array();
while($row=mysql_fetch_array($result))
{
	$yearsLowerBound[$row['year']]=$row['year'];
}
$smarty->assign('yearsLowerBound', $yearsLowerBound);		


$query = "SELECT year FROM wine group by year order by year desc";
$result = mysql_query($query, $dbconn);
$yearsUpperBound=array();
while($row=mysql_fetch_array($result))
{
	$yearsUpperBound[$row['year']]=$row['year'];
}
$smarty->assign('yearsUpperBound', $yearsUpperBound);	

$smarty->display('home.tpl');
?>



