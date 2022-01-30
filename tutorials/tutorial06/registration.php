<!DOCTYPE html>
<html lang="en">
  <head>
      
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Registration</title>

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="../css/style.css">

      <script src="jquery-3.6.0.min.js"></script>

<script>

  function validation(){
      var name = document.getElementById("user");
      var pass = document.getElementById("pass");
      var repassword = document.getElementById("repass");
      var age = document.getElementById("age");
      var dob = document.getElementById("dob");
      var country = document.getElementById("country");
      var state = document.getElementById("state");
      var city = document.getElementById("city");
      var profile = document.getElementById("profile");
      var note = document.getElementById("note");


            if(name.value == "")
            {
              alert("** Please fill the form......");
              return false;
            }


            if(name.value == ""){
              alert("** Please fill the username......");
              return false;
            }

            if(pass.value == ""){
              alert("** Please fill the Password......");
              return false;
            }

            if(repassword.value == ""){
              alert("** Please fill the Re-Password......");
              return false;
            }

            if(age.value == ""){
              alert("** Please fill the Age......");
              return false;
            }

            if(dob.value == ""){
              alert("** Please fill the DOB......");
              return false;
            }

            if(country.value == ""){
              alert("** Please fill the Country......");
              return false;
            }

            if(state.value == ""){
              alert("** Please fill the State......");
              return false;
            }

            if(city.value == ""){
              alert("** Please fill the City......");
              return false;
            }

            if(profile.value == ""){
              alert("** Please fill the Profile......");
              return false;
            }

            if(note.value == ""){
              alert("** Please fill the Note......");
              return false;
            }
            if(name.value != "" && pass.value!= "" && repassword.value!= "" && age.value!= "" && dob.value!= "" && country.value!= "" && state.value!= "" && city.value!= "" && profile.value!= "" && note.value!= "")
                      {
                        alert("Register Successfully");
                      }

            }

</script>

</head>

<body>
      <div class="container">
        <div class="row content">
          <div class="col-md-6 mb-6">
            <img src="img/register2.jpg" class="img-fluid" alt="image" height="1000px" width="800px">
          </div>

            <div class="col-md-6">
              <h1 class="text-dark text-center">Registration</h1><br/>

                <form action="#" onsubmit="return validation()" >
                      
                  <div class="form-group">
                    <label for="username">Name</label>
                    <input type="email" name="username" class="form-control" id="user" autocomplete="off" placeholder="username@gmail.com">
                    <span id="username" class="text-danger font-weight-bold"></span><br/>
                  </div>
                      
            <!--          <div class="row">
                        <div class="col-md-4 p-2">
                          Username
                        </div>
                        <div class="col-md-8 p-2">
                          <input type="email" class="form-control" placeholder="username@gmail.com"><br/>
                        </div>
                      </div>-->        
 
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" name="password" class="form-control" id="pass" autocomplete="off" placeholder="Plase Enter Password">
                      <span id="passwords" class="text-danger font-weight-bold"></span><br/>
                    </div>

                    <!--  <div class="row">
                          <div class="col-md-4 p-2">
                            Password
                          </div>
                          <div class="col-md-8 p-2">
                            <input type="password" class="form-control" placeholder="Password"><br/>
                          </div>
                        </div>-->

                    <div class="form-group">
                      <label for="re-password">Re-Password</label>
                      <input type="password" name="re-password" class="form-control" id="repass" autocomplete="off" placeholder="Please Enter Re-Password">
                      <span id="re-password" class="text-danger font-weight-bold"></span><br/>
                    </div>

                    <!--    <div class="row">
                          <div class="col-md-4 p-2">
                            Re-Password
                          </div>
                          <div class="col-md-8 p-2">
                            <input type="password" class="form-control" placeholder="Re-Password"><br/>
                          </div>
                        </div>-->
          
                    <div class="form-group">
                      <label for="age">Age</label>
                      <input type="text" name="age" class="form-control" id="age" autocomplete="off" placeholder="Please Enter Age">
                      <span id="ages" class="text-danger font-weight-bold"></span><br/>
                    </div>

                 <!--       <div class="row">
                          <div class="col-md-4 p-2">
                            Age
                          </div>
                          <div class="col-md-8 p-2">
                            <input type="text" class="form-control" placeholder="Age"><br/>
                          </div>
                        </div>-->
          
                    <div class="form-group">
                      <label for="birthdate">Birth Date</label>
                      <input type="date" name="Birth Date" class="form-control" id="dob" autocomplete="off" placeholder="Please Enter DOB">
                      <span id="Birth" class="text-danger font-weight-bold"></span><br/>
                    </div>

                    <!--    <div class="row">
                          <div class="col-md-4 p-2">
                            Birth Date
                          </div>
                          <div class="col-md-8 p-2">
                            <input type="date" class="form-control" placeholder="DOB"><br/>
                          </div>
                        </div>-->

                    <div class="form-group">
                      <label for="country">Country</label>
                      <input type="text" name="Country" class="form-control" id="country" autocomplete="off" placeholder="Enter Country">
                      <span id="countrys" class="text-danger font-weight-bold"></span><br/>
                    </div>

                <!--        <div class="row">
                          <div class="col-md-4 p-2">
                            Country
                          </div>
                          <div class="col-md-8 p-2">
                            <input type="text" class="form-control" placeholder="Country"><br/>
                          </div>
                        </div>-->
          
                      <div class="form-group">
                        <label for="state">State</label>
                        <input type="text" name="state" class="form-control" id="state" autocomplete="off" placeholder="Enter State">
                        <span id="states" class="text-danger font-weight-bold"></span><br/>
                      </div>

                  <!--      <div class="row">
                          <div class="col-md-4 p-2">
                            State
                          </div>
                          <div class="col-md-8 p-2">
                            <input type="text" class="form-control" placeholder="State"><br/>
                          </div>
                        </div>-->

                      <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" name="city" class="form-control" id="city" autocomplete="off" placeholder="Enter City">
                        <span id="citys" class="text-danger font-weight-bold"></span><br/>
                      </div>
                    
                  <!--      <div class="row">
                          <div class="col-md-4 p-2">
                            City
                          </div>
                          <div class="col-md-8 p-2">
                            <input type="text" class="form-control" placeholder="City"><br/>
                          </div>
                        </div>-->
          
                      <div class="form-group">
                        <label for="profile">Profile</label>
                        <input type="file" name="profile" class="form-control" id="profile" autocomplete="off" placeholder="Please Profile" >
                        <span id="profiles" class="text-danger font-weight-bold"></span><br/>
                      </div>

              <!--     <div class="row">
                          <div class="col-md-4 p-2">
                            Profile 
                          </div>
                          <div class="col-md-8 p-2">
                            <input type="file" class="form-control" placeholder=""><br/>
                          </div>
                        </div>-->
          
                      <div class="form-group">
                        <label for="note">Note</label>
                        <textarea class="form-control" id="note" autocomplete="off" placeholder="Enter Note"></textarea>
                        <span id="notes" class="text-danger font-weight-bold"></span><br/><br/>
                      </div>

                  <!--      <div class="row">
                          <div class="col-md-4 p-2">
                            Note
                          </div>
                          <div class="col-md-8 p-2">
                            <textarea class="form-control" placeholder="Note"></textarea><br/>
                          </div>
                        </div>-->
          
                      <input type="submit" name="submit" value="Submit" class="btn btn-secondary"><br/><br/>
          
                 <!--     <div class="row">
                          <div class="col p-2">
                              <button type="button" class="btn btn-secondary">Register</button><br/><br/>
                          </div>
                      </div>-->

                      <div class="row">
                        <div class="col p-2">
                          <p>Have an Account? <a href="login.php">Login</a></p>
                        </div>
                      </div>
                    
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
<html>
