<!-- <?php //include('server.php') ?> -->
<?php
// include Function  file
include_once('connection.php');
// Object creation
$userdata=new connectionClass(); 
// $userdata= $this->con;
if(isset($_POST['submit']))
{
// Posted Values
$fname=$_POST['fullname'];
$uname=$_POST['username'];
$uemail=$_POST['email'];
$pasword=$_POST['password'];
//Function Calling
$sql=$userdata->registration($fname,$uname,$uemail,$pasword);
if($sql)
{
// Message for successfull insertion
echo "<script>alert('Registration successfull.');</script>";
echo "<script>window.location.href='login.php'</script>";
}
else
{
// Message for unsuccessfull insertion
echo "<script>alert('Something went wrong. Please try again');</script>";
//echo "<script>window.location.href='login.php'</script>";
}
}
?>
 
 

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Nextnow </title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
</script>
<script type="text/javascript">
      var onloadCallback = function() {
        grecaptcha.render('html_element', {
          'sitekey' : 'your_site_key'
        });
      };
</script>
<!-- ====================================================================================================== -->
<!-- ========================================================================================== -->
</head>
<body>
  
  <div class="limiter">
    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
      <div class="wrap-login100">
        <form class="form-horizontal login100-form validate-form" action='' method="POST">
          <span class="login100-form-logo">
            <img src="images/favicon.png" class="img-responsive">
          </span>
  <fieldset>
    <div id="legend" align="center">
      <legend class=""><img src="images/Logo.png" class="img-responsive"> </legend>
    </div>

<div class="control-group">
      <!-- Fullname -->
      <!-- <label class="control-label"  for="username">Fullname</label> -->
      <div class="controls wrap-input100">
        <input class="input100" type="text" id="username" name="fullname" placeholder="fullname" class="input-xlarge" required="true">
        <span class="focus-input100" data-placeholder="&#xf207;"></span>
      </div>
    </div>


    <div class="control-group">
      <!-- Username -->
      <!-- <label class="control-label"  for="username">Username</label> -->
      <div class="controls wrap-input100">
            <input class="input100" type="text" id="username" placeholder="Username" name="username" onblur="checkusername(this.value)" class="input-xlarge" required="true">
          <span id="usernameavailblty" class="focus-input100" data-placeholder="&#xf207;" ></span>
          
      </div>
    </div>
 
    <div class="control-group">
      <!-- E-mail -->
      <!-- <label class="control-label" for="email">E-mail</label> -->
      <div class="controls wrap-input100">
        <input class="input100" type="email" id="email" name="email" placeholder="email" class="input-xlarge" required="true">
        <span id="usernameavailblty" class="focus-input100" data-placeholder="&#xf207;" ></span>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password-->
      <!-- <label class="control-label" for="password">Password</label> -->
      <div class="controls wrap-input100">
        <input class="input100" type="password" id="password" name="password" placeholder="password" class="input-xlarge" required="true">
        <span id="usernameavailblty" class="focus-input100" data-placeholder="&#xf191;" ></span>
      </div>
    </div>
 

 
    <div class="control-group">
      <!-- Button -->
      <div class="controls container-login100-form-btn ">
        <button class="btn btn-success login100-form-btn" type="submit" id="submit" name="submit">Register</button>
      </div>
    </div>

      <div class="text-center p-t-90">
            <a class="txt1" href="login.php">
              Already register Signin
            </a>
      </div>

  </fieldset>
</form>
        <!-- <form class="login100-form validate-form" action="login.php" method="POST" >
          <?php //include('errors.php'); ?>
          <span class="login100-form-logo">
            <img src="images/favicon.png" class="img-responsive">
          </span>

          <span class="login100-form-title p-b-34 p-t-27">
            <img src="images/logo.png" class="img-responsive">
          </span>

          <div class="wrap-input100 validate-input" data-validate="Enter Username">
            <input class="input100" type="text" name="username" placeholder="Username">
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Enter password">
            <input class="input100" type="password" name="password" placeholder="Password">
            <span class="focus-input100" data-placeholder="&#xf191;"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Enter email">
            <input class="input100" type="text" name="email" placeholder="email">
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Enter Mobile">
            <input class="input100" type="text" name="mobile" placeholder="mobile">
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
          </div>

          <div>
            <div id="html_element"></div>
          </div>

          <div class="contact100-form-checkbox ">
            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
            <label class="label-checkbox100" for="ckb1">
              Remember me
            </label>
          </div>

          <div class="container-login100-form-btn">
            <button class="login100-form-btn" name="login_user" type="submit">
              Sign up
            </button>
          </div>

          <div class="text-center p-t-90">
            <a class="txt1" href="#">
              Forgot Password?
            </a>
          </div>
          <div class="text-center p-t-90">
            <a class="txt1" href="login.php">
              Already have an account Sign In
            </a>
          </div>
          
        </form> -->
      </div>
    </div>
  </div>
  

  <div id="dropDownSelect1"></div>
  
<!--===============================================================================================-->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>

</body>
</html>