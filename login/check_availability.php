<?php
// include Function  file
include_once('connection.php');
// Object creation
$uusername=new connectionClass();
// Getting Post value
$uname= $_POST["username"];	
// Calling function
$sql=$uusername->usernameavailblty($uname);
$num=mysqli_num_rows($sql);
if($num > 0)
{
echo "<span style='color:red'> Username already associated with another account .</span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
} else{
	
	echo "<span style='color:green'> Unsername available for Registration .</span>";
 echo "<script>$('#submit').prop('disabled',false);</script>";
}