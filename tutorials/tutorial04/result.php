<?php
  //echo "<pre>";
 // print_r ($_REQUEST);
  //echo "</pre>";

 // $Prinicipal=isset($_REQUEST['Prinicipal'])?$_REQUEST['Prinicipal']:0;
  //$Rate=isset($_REQUEST['Rate'])?$_REQUEST['Rate']:0;
  //$Years=isset($_REQUEST['Years'])?$_REQUEST['Years']:0;
 // $SI=($Prinicipal*$Rate*$Years)/100;
 // echo "Simple Intrest is:".$SI;

 $Prinicipal=$_GET['Prinicipal'];
 $Rate=$_GET['Rate'];
 $Years=$_GET['Years'];
 $SI=($Prinicipal*$Rate*$Years)/100;
 echo "Simple Intrest is:".$SI;
?>
