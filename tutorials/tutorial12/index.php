<?php
require 'connect.php';

session_start();
if(isset($_SESSION['message']))
{
    echo $_SESSION['message'];
    unset($_SESSION['message']);    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial12</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../css/style.css">

    

    <!-- <script>
        $(document).ready(function()
        {
            $("#btn1").click(function()
            {
                $("#t1").hide();
            });
            $("#btn2").click(function()
            {
                $("#t2").hide();
            });
            $("#btn3").click(function()
            {
                $("#t3").hide();
            });
            $("#btn4").click(function()
            {
                $("#t4").hide();
            });
            $("#btn5").click(function()
            {
                $("#t5").hide();
            });
            $("#btn6").click(function()
            {
                $("#t6").hide();
            });
            $("#btn7").click(function()
            {
                $("#t7").hide();
            });
            $("#btn8").click(function()
            {
                $("#t8").hide();
            });
            $("#btn9").click(function()
            {
                $("#t9").hide();
            });
            $("#btn10").click(function()
            {
                $("#t10").hide();
            });
        });
    </script> -->



<style>
    table{
              color:white;
              max-width:100%;
              text-align:left;
              border-radius:20px;
              border:10px double  #4caf50;
              margin-top:50px;
              margin-bottom:50px;
              box-shadow:0 0 50px white,0 0 10px black,0 0 10px black;
              border-spacing:0;
                            
          }

</style>

</head>

<body bgcolor="black">

<div class="container">

 <table  class="table table-hover table-dark text-white" border="5" align="center" style="width:100%;" "height:100%;">
     <!--<table class="table text-white">table table-hover table-dark text-white-->
         
  
  <thead>
  <tr align="center" >
    <th colspan="12" style="margin-top:20px;" class="text-success text-center"><b><h3>Tutorial 12</h3></b> </th>
 <!--  <th style="margin-top:20px;" class="text-success text-center" colspan="2"><button type="submit" class="btn btn-dark"><a href="">Add New Item</a></button><th>
    <th style="margin-top:20px;" class="text-success text-center" colspan="2"><button class="btn btn-dark"><a href="">Logout</a></button></th>-->
    
  </tr>
  </thead>

  <thead >
  <h2 class="text-success" align="center">Student's Details</h2>

 <a href="registration.php" class="link-primary"><button type="button" class="btn btn-success">Insert Data</button></a> 
 
    <tr>     
<!--    <th>No</th>-->
    <!--  <th style="text-align:center" height:"100px"><h3>No</h3></th>-->
      <th style="text-align:center" ><b>Id</b></th>
      <th style="text-align:center" ><b>Name</b></th>
      <th style="text-align:center" ><b>Password</b></th>
      <th style="text-align:center" ><b>Age</b></th> 
      <th style="text-align:center" ><b>Birthdate</b></th>
      <th style="text-align:center" ><b>Country</b></th>
      <th style="text-align:center" ><b>State</b></th>
      <th style="text-align:center" ><b>City</b></th>
      <th style="text-align:center" ><b>Profile</b></th> 
      <th style="text-align:center" ><b>Note</b></th> 
      <th style="text-align:center" ><b>Action</b></th>
    </tr>
  </thead>

  <?php
            $sql = "select id,username,password,age,birthdate,country,state,city,profile,note from userdatadetail";
    		$result = $db->query($sql);
            
            while ($row = $result->fetch_assoc()) 
            {
                //print_r($row);
            ?>
            
        <tbody class="table table-dark text-dark">
      
            <tr>
                    <td><?=$row['id']?></td>
                    <td><?=$row['username']?></td>
                    <td><?=$row['password']?></td>
                    <td><?=$row['age']?></td>
                    <td><?=$row['birthdate']?></td>
                    <td><?=$row['country']?></td>
                    <td><?=$row['state']?></td>
                    <td><?=$row['city']?></td>
                    <td><img src="pic/<?= $row['profile'];?>" width="50" height="40"></td>
                    <td><?=$row['note']?></td>
                    <td>
                        <a href="registration.php?id=<?=$row['id'];?>" ><button type="button" class="btn btn-success">Edit</button></a>&nbsp;
                        <a href="user_delete.php?id=<?=$row['id'];?>"><button type="button" id="btn8" onclick="return confirm ('Do You Want to Delete ???')" class="btn btn-danger">Delete</button>
                    </td> 
            </tr>
        </tbody>
            <?php
            	}
            ?>
      
      
    	</table>
    </div>    
</body>
</html>