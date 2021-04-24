<!-- <?php //include('server.php') ?> -->
 <?php
session_start();
// include Function  file
include_once('connection.php');
// Object creation
$usercredentials=new connectionClass();
if(isset($_POST['signin']))
{
// Posted Values
$uname=$_POST['username'];
$pasword=$_POST['password']; //password disable SHA format 
//Function Calling
$ret=$usercredentials->signin($uname,$pasword);
$num=mysqli_fetch_array($ret);
if($num>0)
{
  $_SESSION['uid']=$num['login_id'];
  $_SESSION['fname']=$num['FullName'];
// For success
echo "<script>window.location.href='../dashboard/index.php'</script>";
}
else
{
// Message for unsuccessfull login
echo "<script>alert('Invalid details. Please try again');</script>";
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
				<form class="login100-form validate-form" action="" method="POST" >
					<!-- <?php //include('errors.php'); ?> -->
					<span class="login100-form-logo">
						<img src="images/favicon.png" class="img-responsive">
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						<img src="images/Logo.png" class="img-responsive">
					</span>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<!-- <div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="text" name="mobile" placeholder="mobile">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div> -->

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
						<button class="login100-form-btn" name="signin" type="submit">
							Login
						</button>
					</div>

					<!-- <div class="text-center p-t-90">
						<a class="txt1" href="#">
							Forgot Password?
						</a>
					</div> -->
					<div class="text-center p-t-90">
						<a class="txt1" href="register.php">
							Create a Account SignUp
						</a>
					</div>
					
				</form>
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

 <!-- ===================================== -->
    <script src= "https://chat.fuguchat.com/js/widget.js"></script> 
        <script> 
            window.fuguInit({ 
            appSecretKey: "8b32cbc19add92c57a18bd917f771b4e"
            }); 
        </script>
</body>
</html>