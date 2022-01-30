<?php
    session_start();
    // echo print_r($_POST);

    $username = $_REQUEST["user"];
    $password = $_REQUEST["password"];

    if($username == "nn@gmail.com" && $password == "nn88"){
        $_SESSION["user"] = $username;
        header("Location: index.php");
    }
    else{
        header("Location: login.php");
    }
?>