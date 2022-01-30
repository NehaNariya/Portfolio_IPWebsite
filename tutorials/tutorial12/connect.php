<?php
  $db = new mysqli('localhost','root','','rkuniversity');
  if($db->connect_errno)
  {
      echo $db->connect_error;   
      exit;
  }
  else
  {
    // echo "<script>alert('DatatBase Connected...')</script>";
    echo "Connection Successfully Done";
  }
?>