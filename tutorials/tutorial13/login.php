<?php

    session_start();

    
    if(isset($_COOKIE['username']))
    {
        $valusername = $_COOKIE['username'];
        $valpassword = $_COOKIE['password'];
        $checked = "checked";
    }else
    {
        $valusername = "";
        $valpassword = "";
        $checked = "";
    }

    if(isset($_POST['login']))   // it checks whether the user clicked login button or not 
    {
        $user = $_POST['username'];
        $pass = $_POST['password'];
        if(isset($_SESSION['username']))   // Checking whether the session is already there or not
        {
            $valuser=$_SESSION['username'];
            $valpass=$_SESSION['password'];
            
            
            if(($user == $valuser)  && ($pass == $valpass))
            {
                echo '<script type="text/javascript"> window.open("index.php","_blank");</script>';    //  On Successful Login redirects to index.php
                
                //Set Cookie Code
                if(isset($_POST['remember']))
                {
                    setcookie('username',$user,time()+3600824*7);
                    setcookie('password',$pass,time()+3600*24*7);
                }else
                {
                    setcookie('username',$user,time()-1);
                    setcookie('password',$pass,time()-1);
                }
            }
            else
            {
                echo '<script type="text/javascript"> alert("Invalid Username Or Password");</script>';        
            }
        }
        else
        {
            echo '<script type="text/javascript">
            alert("Please Registration First");
            window.open("registration.php","_blank");
            </script>';             
        }
    }
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <style>
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

    img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
display: none;}
    </style>
</head>
<body>
    <div class="container mx-auto">
        <div class="row justify-content-center">
            <div class="col-sm-6 p-5">
                <form action="login.php" method="post">
                <div class="card rounded-3 bg-dark text-light">
                        <h5 class="mt-3 text-center text-success"><b>LOGIN<b></h5>
                        <div class="card-body">
                            <div class="row p-2">
                                <div class="col-md-4">
                                    Username
                                </div>
                                <div class="col-md-8">
                                    <input type="email" name="username" value="<?=$valusername?>" class="form-control bg-dark text-light" placeholder="name@example.com">
                                </div>
                            </div>
                            
                            <div class="row p-2">
                                <div class="col-md-4">
                                    Password
                                </div>
                                <div class="col-md-8">
                                    <input type="password" name="password" 
									value="<?=$valpassword?>" class="form-control bg-dark text-light" placeholder="Password">
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-4">
                                </div>
                                <div class="col-md-8">
                                    <div class="form-check">
                                        <input class="form-check-input" value="1" <?=$checked?>  type="checkbox" name="remember" id="remember" >
                                        Remember Me        
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="d-grid gap-2 col-3 mx-auto mt-4">
                                    <button type="submit" name="login" class="btn btn-success"><b>LOGIN</b></button>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col text-center mt-2">
                                    <b>Don't Have an Account? </b><a href="registration.php" class="text-success">Register Here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
    </div>


    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>