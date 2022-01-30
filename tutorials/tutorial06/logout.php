<?php
 //   session_start();
   // if(session_destroy())
    //{
    //header("Location: login.php");
    //}
    session_start();
    unset($_SESSION["user"]);
    session_destroy();
    header("Location: login.php");
?>