<?php
define('DB_SERVER','localhost');
define('DB_USERNAME','nextnowa');
define('DB_PASSWORD' ,'Moin@2003a');
define('DB_NAME', 'nextnowa_nextnow');
//include("connection.php");
class DB_con
{
  public function construct()
 {
 	$con =  mysqli_connect("localhost", "nextnowa", "Moin@2003a", "nextnowa_nextnow");
$this->dbh=$con;
// Check connection
if (mysqli_connect_errno())
 {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
 }
  
// for username availblty
public function usernameavailblty($uname) {
$result =mysqli_query($this->dbh,"SELECT Username FROM login WHERE Username='$uname'");
return $result;

}

// Function for registration
	public function registration($fname,$uname,$uemail,$pasword)
	{
	$ret=mysqli_query($this->dbh,"insert into login(FullName,Username,UserEmail,Password) values('$fname','$uname','$uemail','$pasword')");
	return $ret;
	}

// Function for signin
public function signin($uname,$pasword)
	{
	$result="select id,FullName from login where Username='$uname' and Password='$pasword'";
	$query = mysqli_query($this->dbh,$result);
	//return $result;
	}


}


