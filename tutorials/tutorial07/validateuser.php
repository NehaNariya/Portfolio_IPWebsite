<?php
    session_start();
    // echo print_r($_POST);

    $user = $_REQUEST["username"];
    $pass = $_REQUEST["password"];

    if($user == "nn@gmail.com" && $pass == "nn88"){
        $_SESSION["user"] = $user;
        header("Location: index.php");

        if(isset($_POST["rememberme"])) {
            setcookie ("username", $_POST["username"], time()+ (10 * 365 * 24 * 60 * 60));
            setcookie ("password", $_POST["password"], time()+ (10 * 365 * 24 * 60 * 60));
            echo "Cookies Set Successfully";
        } else {
            setcookie("username","");
            setcookie("password","");
            echo "Cookies Not Set";
        }
    }
    else{
        header("Location: login.php");
    }

?>