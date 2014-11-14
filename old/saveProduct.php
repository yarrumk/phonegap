

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

	
	
		$query = "insert into gifts (name, gift1, gift2, gift3, gift4, gift5) values('$_POST[name]','$_POST[gift1]','$_POST[gift2]','$_POST[gift3]','$_POST[gift4]','$_POST[gift5]')"; 
			
		
	if (!($result = mysql_query($query, $conn)))
	{
		showError();
	}
		
	mysql_close($conn);
	include 'listProducts.php';
?>