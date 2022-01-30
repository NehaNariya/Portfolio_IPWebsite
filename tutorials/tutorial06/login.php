<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>

	 <!-- Required meta tags -->
	 <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	
	 <title>Login</title>
	
	 <!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	

<script>

    function validation(){
        var name = document.getElementById("user");
        var pass = document.getElementById("pass");



			if(name.value == ""){
				alert("** Please fill the form......");
				return false;
			}

			if(name.value == ""){
				alert("** Please fill the username......");
				return false;
			}

			if(pass.value == ""){
				alert("** Please fill the password......");
				return false;
			}
			if(name.value != "" && pass.value!= "")
			{
				alert("Login Successfully");
			}
	}
</script>
	
	</head>
	
	
	
	<body>

		<div class="container">
			<div class="row content">
				<div class="col-md-6 mb-3">
					<img src="img/login1.jpg" class="img-fluid" alt="image" height="300px" width="500px">
				</div>
				<div class="col-md-6">
					<h1 class="text-dark text-center">Sign In</h1><!--class="singin-text mb-3"--><br/>
					<form action="validateuser.php"  enctype="multipart/form-data" onsubmit="return validation()">
						<div class="form-group">
							<label for="username">Username</label>
							<input type="email" name="user" class="form-control" id="user" autocomplete="off" placeholder="Enter username"><br/>
                              <span id="username" class="text-danger font-weight-bold"></span>
						</div>
						
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" name="password" class="form-control"  id="pass" autocomplete="off" placeholder="Enter Password"><br/>
                             <span id="passwords" class="text-danger font-weight-bold"></span>
						</div>

						<div class="form-group form-check">
							<input type="checkbox" name="checkbox" class="form-check-input" id="checkbox">
							<label class="form-check-label" for="checkbox">Remember Me</label><br/><br/>
						</div>


                 <!--      <a href="forgetpassword.html">Forget Password</a><br/><br/>-->


                         <input type="submit" name="login" value="Login" class="btn btn-secondary"><br/><br/>

					<!--	<button class="btn btn-secondary">Login</button><br/><br/>-->

					<!--	<div class="row">
                         <div class="col p-2">-->
                             <!--    <a href="forgetpassword.html">Forget Password</a><br/><br/>-->
                      <!--        <p>Don't Have an Account? <a href="registration.php">Register</a></p>-->
                              
                                <!--<marquee> <a href="forgetpassword.html">forget password</a></marquee>-->
                        <!--    </div>-->
					</form>
				</div>
			</div>
		</div>


	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	
	</body>
	
</html>
