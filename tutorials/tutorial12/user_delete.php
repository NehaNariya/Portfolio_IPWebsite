<?php 
	session_start();
	require "connect.php";

	$id = (isset($_GET['id']))?$_GET['id']:0;

	if($id!=0)
	{
		$str = "delete from userdatadetail where id=$id";
		$db->query($str);
	}


	 $sql = "delete from userdatadetail where id=".$id;
	 $db->query($sql);
	 $_SESSION['message']="	<br/>Record has been deleted Successfully..";

	header("location:index.php");
?>

