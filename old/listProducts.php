<html>
<head>
<title>
Keith OMuiri- Product Management System Menu
</title>
</head>

<link rel="stylesheet" href="stylesheet.css" type="text/css" media="screen">

<body>
<div id="content"><h1>All Products</h1><img src="images\shop.jpg" ALIGN ="right">
	<p>listing</p>
<!--***************************************************************************-->

	<?php
		require_once 'db.php';
		require_once 'error.php';

	
			// Step 1
			if (!($conn = mysql_connect($config['server'], $config['user'], $config['password'])))
			{
				showError();
			}

f
			// Step 2
			if (!(mysql_select_db($config['database'], $conn)))
			{
				showError();
			}

			$query = "select * from gifts";
			if ($_GET[name])
			{
				$query = $query . " where name like '%$_GET[name]%'";
			}

			// Step 3
			if (!($result = mysql_query($query, $conn)))
			{
				showError();
			}
	
			$count = 0;
			echo "<table border=0 cellpadding=5>";
			echo "<tr>";
			echo "<td><b>Name</b></td><td><b>Suggestion 1</td><td><b>Suggestion 2</td><td><b>Suggestion 3 </td><td><b>Suggestion 4 </td><td><b>Suggestion 5</td>";
			echo "</tr>";
			// Step 4
			while ($row = mysql_fetch_array($result))
			{
				// Step 5
	
				echo "<tr>";
				echo "<td> $row[name]</td><td>$row[gift1]</td><td>$row[gift2]</td><td>$row[gift3]</td><td>$row[gift4]</td><td>$row[gift5]</td>";
				echo "</tr>";
				echo "</table>";
		

				$count ++;
			}
	
			if ($count == 0)
			{
				echo "<blink><font color=\"red\">No Person matching this search!<br><br></font></blink>";
			}
				// Step 6
			mysql_close($conn);
			?>
	</div>

</body>
</html>
