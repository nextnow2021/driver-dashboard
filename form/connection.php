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
    }
?>