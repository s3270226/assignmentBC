<br>
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

{foreach from=$mylist key=k item=i}

<tr style="background-color: {cycle values="#eeeeee,#d0d0d0"}"> 
	<td>{$k}</td>
	<td>{$i.wine_name}</td>
	<td>{$i.variety}</td>
	<td>{$i.year}</td>
	<td>{$i.winery_name}</td>
	<td>{$i.region_name}</td>
	<td>{$i.cost}</td>
	<td>{$i.on_hand}</td>
	<td>{$i.amount_sold}</td>
	<td>{$i.revenue}</td>
</tr>

{foreachelse}

<tr><td colspan="3">No items to list</td></tr>

{/foreach}

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

{foreach from=$mylist2 key=k item=i}

<tr style="background-color: {cycle values="#eeeeee,#d0d0d0"}"> 
	<td>{$k}</td>
	<td>{$i.wine_name}</td>
	<td>{$i.variety}</td>
	<td>{$i.year}</td>
	<td>{$i.winery_name}</td>
	<td>{$i.region_name}</td>
	<td>{$i.cost}</td>
	<td>{$i.on_hand}</td>
</tr>

{foreachelse}

<tr><td colspan="3">No items to list</td></tr>
{/foreach}

</table>