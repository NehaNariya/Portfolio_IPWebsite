<?php 
	session_start();
	require "connect.php";

	$id = isset($_GET['id'])?$_GET['id']:"";

	if($id=="")
	{
		header("location:index.php");
	}


	$sql = "delete from userdatadetail where id=".$id;
	$db->query($sql);
	$_SESSION['message']="<br/>Record has been deleted Successfully..";

	header("location:index.php");
?>