<?php
    require('connect.php');

session_start();

//echo "<pre>";
//print_r($_POST);
//echo "</pre>";


     $basepath="pic/";  
     $topath=$basepath.$_FILES['profile']['name'];
     $frompath=$_FILES['profile']['tmp_name'];

     move_uploaded_file($frompath, $topath);



$id= isset($_POST['id']) ? $_POST['id']:"";
$username= isset($_POST['username']) ? $_POST['username']:"";
$password= isset($_POST['password']) ? $_POST['password']:"";
$age= isset($_POST['age']) ? $_POST['age']:"";
$birthdate= isset($_POST['birthdate']) ? $_POST['birthdate']:"";
$country= isset($_POST['country']) ? $_POST['country']:"";
$state= isset($_POST['state']) ? $_POST['state']:"";
$city= isset($_POST['city']) ? $_POST['city']:"";
$profile= isset($_FILES['profile']) ? $_FILES['profile']['name']:"";
$note= isset($_POST['note']) ? $_POST['note']:"";


$sql="insert into userdatadetail (username,password,age,birthdate,country,state,city,profile,note) values('$username','$password','$age','$birthdate','$country','$state','$city','$profile','$note')";

if($db->query($sql))
{
    $_SESSION['message']="<br/>Record has been Inserted Successfully...";
}
else
{
    $_SESSION['message']="Insertion Failed";
}


header("location:index.php");

?>