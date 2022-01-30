<?php

$db=new mysqli('localhost','root','','tutorial13');

	if($db -> connect_errno)
	{
		echo $db ->connect_error;
		exit;
	}
	else
	{
		echo "Database Connected Successfully..";
		//echo "<script>alert('Database Connected');</script>";
	}
?>