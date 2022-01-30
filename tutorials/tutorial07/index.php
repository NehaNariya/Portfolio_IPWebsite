<?php
    session_start();
    if(isset($_SESSION["user"]) == 0){
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial07</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../css/style.css">

    

    <script>
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
    </script>



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
  <th colspan="12" style="margin-top:20px;" class="text-success text-center"><b><h3>Tutorial 07</h3></b> </th>
   <!-- <th style="margin-top:20px;" class="text-success text-center" colspan="2"><button type="submit" class="btn btn-dark"><a href="login.php">Add New Item</a></button><th>
    <th style="margin-top:20px;" class="text-success text-center" colspan="2"><button class="btn btn-dark"><a href="login.php">Logout</a></button></th>-->
  </tr>
  </thead>

  <p class="btn btn-success m-3">
        <?=$_SESSION["user"] ?>
    </p>
    <p class="btn btn-danger m-3">
        <a href="logout.php" class="text-white"> Logout </a>
    </p>

  <thead>
    <tr>
<!--    <th>No</th>-->
    <!--  <th style="text-align:center" height:"100px"><h3>No</h3></th>-->
      <th style="text-align:center" ><b>Name</b></th>
      <th style="text-align:center" ><b>Password</b></th>
      <th style="text-align:center" ><b>Re-password</b></th>
      <th style="text-align:center" ><b>Birthdate</b></th>
      <th style="text-align:center" ><b>Country</b></th>
      <th style="text-align:center" ><b>State</b></th>
      <th style="text-align:center" ><b>City</b></th>
      <th style="text-align:center" ><b>Action</b></th>
    </tr>
  </thead>





</head>
<body>
 <!--   <div class="container">
        <br>
        <table class="table" border="1">
            <thead style="background-color: black; color: white;">
                <tr>
                    <td><b>No</b></td>
                    <td><b>Name</b></td>
                    <td><b>Email</b></td>
                    <td><b>Age</b></td>
                    <td><b>State</b></td>
                    <td><b>City</b></td>
                    <td><b>Action</b></td>
                </tr>
            </thead>-->
            <tbody style="background-color: rgb(109, 109, 109); color: white;">
                <tr id="t1">
            <!--    <td>1</td>
                    <td>Neha</td>-->
                    <td>nnariya811@rku.ac.in</td>
                    <td>7800</td>
                    <td>7800</td>
                    <td>08/08/2000</td>
                    <td>India</td>
                    <td>Gujarat</td>
                    <td>Rajkot</td>
                    <td>
                        <a href="registration.php" ><button type="button" class="btn btn-success">Edit</button></a>&nbsp;
                        <button type="button" id="btn1" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr id="t2">
            <!--        <td>2</td>
                    <td>Priya</td>-->
                    <td>pghorecha578@rku.ac.in</td>
                    <td>2514</td>
                    <td>2514</td>
                    <td>21/02/2001</td>
                    <td>India</td>
                    <td>Gujarat</td>
                    <td>Rajkot</td>
                    <td>
                        <a href="registration.php" ><button type="button" class="btn btn-success">Edit</button></a>&nbsp;
                        <button type="button" id="btn2" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr id="t3">
              <!--      <td>3</td>
                    <td>Pooja</td>-->
                    <td>ppatel573@rku.ac.in</td>
                    <td>3250</td>
                    <td>3250</td>
                    <td>20/5/2001</td>
                    <td>India</td>
                    <td>Gujarat</td>
                    <td>Rajkot</td>
                    <td>
                        <a href="registration.php" ><button type="button" class="btn btn-success">Edit</button></a>&nbsp;
                        <button type="button" id="btn3" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr id="t4">
          <!--          <td>4</td>
                    <td>Dipa</td>-->
                    <td>ddabi826@rku.ac.in</td>
                    <td>3620</td>
                    <td>3620</td>
                    <td>23/3/2002</td>
                    <td>India</td>
                    <td>Gujarat</td>
                    <td>Jamnagar</td>
                    <td>
                        <a href="registration.php" ><button type="button" class="btn btn-success">Edit</button></a>&nbsp;
                        <button type="button" id="btn4" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr id="t5">
            <!--        <td>5</td>
                    <td>Mira</td>-->
                    <td>mdobariya725@rku.ac.in</td>
                    <td>6310</td>
                    <td>6310</td>
                    <td>25/11/2000</td>
                    <td>India</td>
                    <td>Gujarat</td>
                    <td>Jetpur</td>
                    <td>
                        <a href="registration.php" ><button type="button" class="btn btn-success">Edit</button></a>&nbsp;
                        <button type="button" id="btn5" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr id="t6">
            <!--        <td>6</td>
                    <td>Maya</td>-->
                    <td>mchovatiya@rku.ac.in</td>
                    <td>4560</td>
                    <td>4560</td>
                    <td>24/1/2000</td>
                    <td>India</td>
                    <td>Gujarat</td>
                    <td>Bhavnagar</td>
                    <td>
                        <a href="registration.php" ><button type="button" class="btn btn-success">Edit</button></a>&nbsp;
                        <button type="button" id="btn6" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr id="t7">
            <!--        <td>7</td>
                    <td>Jvasoya</td>-->
                    <td>jvasoya887@rku.ac.in</td>
                    <td>6520</td>
                    <td>6520</td>
                    <td>28/9/2001</td>
                    <td>India</td>
                    <td>Gujarat</td>
                    <td>Kagdari</td>
                    <td>
                        <a href="registration.php" ><button type="button" class="btn btn-success">Edit</button></a>&nbsp;
                        <button type="button" id="btn7" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr id="t8">
            <!--        <td>8</td>
                    <td>Jiya</td>-->
                    <td>jsanchala212@rku.ac.in</td>
                    <td>9510</td>
                    <td>9510</td>
                    <td>23/07/2000</td>
                    <td>India</td>
                    <td>Gujarat</td>
                    <td>Rajkot</td>
                    <td>
                        <a href="registration.php" ><button type="button" class="btn btn-success">Edit</button></a>&nbsp;
                        <button type="button" id="btn8" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr id="t9">
            <!--        <td>9</td>
                    <td>Prisha</td>-->
                    <td>prupapariya012@rku.ac.in</td>
                    <td>6320</td>
                    <td>6320</td>
                    <td>21/6/2000</td>
                    <td>India</td>
                    <td>Gujarat</td>
                    <td>Rajkot</td>
                    <td>
                        <a href="registration.php" ><button type="button" class="btn btn-success">Edit</button></a>&nbsp;
                        <button type="button" id="btn9" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr id="t10">
            <!--        <td>10</td>
                    <td>Rutvi</td>-->
                    <td>rbhalani182@rku.ac.in</td>
                    <td>3204</td>
                    <td>3204</td>
                    <td>21/7/2000</td>
                    <td>India</td>
                    <td>Gujarat</td>
                    <td>Aatkot</td>
                    <td>
                        <a href="registration.php" ><button type="button" class="btn btn-success">Edit</button></a>&nbsp;
                        <button type="button" id="btn10" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>    
</body>
</html>