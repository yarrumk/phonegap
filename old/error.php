<html><head><title>Database Error</title></head>
<body><center>
<?php
	function showError()
	{
		die("Sorry computer, he say no, he say a problem occurred: ". mysql_errno(). ":". mysql_error());
	}
	
?>
<img src="dberror.png">
</body></html>