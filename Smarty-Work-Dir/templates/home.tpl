<!DOCTYPE HTML PUBLIC
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
	{html_options name=region options=$regions}
	
	<br>Grape Variety:
	{html_options name=grapeVariety options=$grapeVarieties}
	
	<br>Year:
	<br>Lower bound:
	{html_options name=yearLowerBound options=$yearsLowerBound}
	<br>Upper bound:
	{html_options name=yearUpperBound options=$yearsUpperBound}
	
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
</html>