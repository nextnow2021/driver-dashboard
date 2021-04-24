<?php
class connectionClass extends mysqli{
    
    private $host="localhost",$password="",$username="root",$dbName='nextnowa_nextnow';
    public $con;
    function __construct() {
       $this->con=  mysqli_connect($this->host, $this->username, $this->password, $this->dbName);   
       if (!$this->con) {
       	echo 'Database Connection Error ' . mysqli_connect_error($this->con);  

       }
    }
    
        // for username availblty
public function usernameavailblty($uname) {
$result =mysqli_query($this->con,"SELECT Username FROM login WHERE Username='$uname'");
return $result;

}

// Function for registration
	public function registration($fname,$uname,$uemail,$pasword)
	{
	$ret=mysqli_query($this->con,"insert into login(FullName,Username,UserEmail,Password) values('$fname','$uname','$uemail','$pasword')");
	return $ret;
	}

// Function for signin
public function signin($uname,$pasword)
	{
	$result=mysqli_query($this->con,"select login_id,FullName from login where Username='$uname' and Password='$pasword'");
	return $result;
	}

}

// ------------ // Already query------------------------------
  // $this->con=  $this->connect($this->host, $this->username, $this->password, $this->dbName);   