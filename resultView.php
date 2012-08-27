<?php 
require_once("connect.php");
define("USER_HOME_DIR", "Smarty-3.1.11"); // CHANGE HERE
require(USER_HOME_DIR . "/libs/Smarty.class.php");

$smarty = new Smarty();
$smarty->template_dir = "Smarty-Work-Dir/templates";
$smarty->compile_dir = "Smarty-Work-Dir/templates_c";
$smarty->cache_dir = "Smarty-Work-Dir/cache";
$smarty->config_dir = "Smarty-Work-Dir/configs";


	//function declaration
		function IsNullOrEmptyString($question){
			return (!isset($question) || trim($question)==='');
		}
	//end of function declaration	
	
	//variable assign
		$wineName=$_GET["wineName"];
		$grapeVariety=$_GET["grapeVariety"];
		$yearLowerBound=$_GET["yearLowerBound"];
		$yearUpperBound=$_GET["yearUpperBound"];
		$wineryName=$_GET["wineryName"];
		$region=$_GET["region"];
		$minimumCost=$_GET["minimumCost"];
		$maximumCost=$_GET["maximumCost"];
		$minimumNumberOfWineInStock=$_GET["minimumNumberOfWineInStock"];
		$minimumNumberOfWineOrdered=$_GET["minimumNumberOfWineOrdered"];
		
		$validInput=true;
		$inputError;
	//end of variable assign
		
	//input validation
		if($yearLowerBound>$yearUpperBound){
			$inputError= 'Year lower bound should be less than or equal to year upper bound <br>';
			$validInput=false;
		}
		if($minimumCost>$maximumCost){
			$inputError.='Minimum cost should be less than or equal to maximum cost<br>';
			$validInput=false;
		}
	//end of input validation
		
	if($validInput==true)
	{
	//query preparation
		if(IsNullOrEmptyString($wineName)){
			$wineName="";
		}
		if($grapeVariety=="All"){
			$grapeVariety="";
		}
		if($region=="All"){
			$region="";
		}
		if(IsNullOrEmptyString($wineryName)){
			$wineryName="";
		}
		if(IsNullOrEmptyString($minimumCost)){
			$minimumCostCondition="";
		}else{
			$minimumCostCondition=" and cost >= {$minimumCost}";
		}

		if(IsNullOrEmptyString($maximumCost)){
			$maximumCostCondition="";
		}else{
			$maximumCostCondition=" and cost <= {$maximumCost}";
		}

		if(IsNullOrEmptyString($minimumNumberOfWineInStock)){
			$minimumNumberOfWineInstockCondition="";
		}else{
			$minimumNumberOfWineInstockCondition=" and on_hand >= {$minimumNumberOfWineInStock}";
		}
		if(IsNullOrEmptyString($minimumNumberOfWineOrdered)){
			$minimumNumberOfWineOrderedCondition="";
		}else{
			$minimumNumberOfWineOrderedCondition=" and amount_sold >= {$minimumNumberOfWineOrdered}";
		}
	}else{
		echo "BIG ERROR!! PLEASE GO BACK AND FIX YOUR INPUT!!<br>";
		echo $inputError;
	}
	//end of query preparation
	
	if($validInput==true)
	{
		//querry with wines that have order recorded
		$query = "select * from final_print_with_order_view 
		where wine_name like '%{$wineName}%' 
		and variety like '%{$grapeVariety}%'
		and year >= {$yearLowerBound} and year <= {$yearUpperBound}
		and winery_name like '%{$wineryName}%'
		and region_name like '%{$region}%'
		{$minimumCostCondition} {$maximumCostCondition}
		{$minimumNumberOfWineInstockCondition}
		{$minimumNumberOfWineOrderedCondition}
		";
		
		
		$result = mysql_query($query, $dbconn);
		
		while($row=mysql_fetch_array($result))
		{
			$mylist[$row['wine_id']]['wine_id']=$row['wine_id'];
			$mylist[$row['wine_id']]['wine_name']=$row['wine_name'];
			$mylist[$row['wine_id']]['variety']=$row['variety'];
			$mylist[$row['wine_id']]['year']=$row['year'];
			$mylist[$row['wine_id']]['winery_name']=$row['winery_name'];
			$mylist[$row['wine_id']]['region_name']=$row['region_name'];
			$mylist[$row['wine_id']]['cost']=$row['cost'];
			$mylist[$row['wine_id']]['on_hand']=$row['on_hand'];
			$mylist[$row['wine_id']]['amount_sold']=$row['amount_sold'];
			$mylist[$row['wine_id']]['revenue']=$row['revenue'];
		}
		
		$smarty->assign("mylist",$mylist);

		
	//querry to get wines with no order yet
		$query = "select * from final_print_no_order_view 
		where wine_name like '%{$wineName}%' 
		and variety like '%{$grapeVariety}%'
		and year >= {$yearLowerBound} and year <= {$yearUpperBound}
		and winery_name like '%{$wineryName}%'
		and region_name like '%{$region}%'
		{$minimumCostCondition} {$maximumCostCondition}
		{$minimumNumberOfWineInstockCondition}
		";
		
		
		$result = mysql_query($query, $dbconn);
		
		while($row=mysql_fetch_array($result))
		{
			$mylist2[$row['wine_id']]['wine_id']=$row['wine_id'];
			$mylist2[$row['wine_id']]['wine_name']=$row['wine_name'];
			$mylist2[$row['wine_id']]['variety']=$row['variety'];
			$mylist2[$row['wine_id']]['year']=$row['year'];
			$mylist2[$row['wine_id']]['winery_name']=$row['winery_name'];
			$mylist2[$row['wine_id']]['region_name']=$row['region_name'];
			$mylist2[$row['wine_id']]['cost']=$row['cost'];
			$mylist2[$row['wine_id']]['on_hand']=$row['on_hand'];
		}
		
		$smarty->assign("mylist2",$mylist2);
		$smarty->display('resultView.tpl');
	}


//chu y cai valley bi sai roi, region do
//thu chon region goulburn valley
//nen dung cai sql cua phan E luon cho chac
?>



