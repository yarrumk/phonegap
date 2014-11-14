
<?php
	require_once 'db.php';
	require_once 'error.php';

	
	// Step 1
	if (!($conn = mysql_connect($config['server'], $config['user'], $config['password'])))
	{
		showError();
	}

// Step 2
	if (!(mysql_select_db($config['database'], $conn)))
	{
		showError();
	}

	$query = "select * from gifts";
	if ($_GET[name])
	{
		$query = $query . " where user like '%$_GET[name]%'";
	}

// Step 3
	if (!($result = mysql_query($query, $conn)))
	{
		showError();
	}
	
	$count = 0;
	echo "<table border=0 cellpadding=5>";
	echo "<tr>";
	echo "<td><b>Product ID </b></td><td><b> Product Description </td><td><b> Product Price </td><td><b> Quantity in stock </td><td><b>Size</td>";
	echo "</tr>";
// Step 4
	while ($row = mysql_fetch_array($result))
	{
// Step 5
	
		echo "<tr>";
		echo "<td> $row[itemid]</td><td>$row[descript]</td><td>$row[price]</td><td>$row[quantity]</td><td>$row[size]</td>";
		echo "</tr>";
		

		$count ++;
	}
	
	if ($count == 0)
	{
		echo "<blink><font color=\"red\">No Products matching this search!<br><br></font></blink>";
	}
// Step 6
	mysql_close($conn);
?>
</table>