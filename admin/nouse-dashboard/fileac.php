<!-- hex = 7350fc -->
<?php
// class connectionClass extends mysqli{
    
//     private $host="localhost",$password="",$username="root",$dbName='nextnowa_nextnow';
//     public $con;
//     function __construct() {
//        $this->con=  mysqli_connect($this->host, $this->username, $this->password, $this->dbName);   
//        if (!$this->con) {
//        	echo 'Database Connection Error ' . mysqli_connect_error($this->con);  

//        }
//     }

// }
// class DocSummaryClass extends connectionClass{

//     public function docuploadfile($login_id,$driver_id_document,
//         $driver_license,$driver_photo,$vehicle_license,
//         $registration_certificate,$vehicle_inspection,
//         $signed_eme_affidavit,$operating_license){
//         $sql = mysqli_query($this->con,"INSERT INTO doc_summary(login_id,driver_id_document,driver_license,driver_photo,vehicle_license,
//             registration_certificate,vehicle_inspection,
//             signed_eme_affidavit,operating_license) 
//         VALUES ('$login_id','$driver_id_document','$driver_license',
//         '$driver_photo','$vehicle_license','$registration_certificate',
//         '$vehicle_inspection','$signed_eme_affidavit',
//         '$operating_license')") ;
           

//            //print_r($sql);

//         // $sql = "INSERT INTO vehicle_document('carphoto', 'vname', 'vcontactno', 'vemail', 'licencephoto', 'vaddress', 'vstate') 
//         // VALUES ('$carphoto','$vname','$vcontactno','$vemail','$licencephoto','$vaddress','$vstate')";



//     // $insert="Insert into driver_document (subject_id,slidername,video_btn,subimage_btn) values ('$subject_id','$slidername','$video_btn','$subimage_btn')";

//         //$vresult = mysqli_query($this->con,$sql);
//         if ($sql) {
//             echo "<script type='text/javascript'>alert('Document  Data  is uploaded')</script>";
//              echo("<meta http-equiv='refresh' content='0'>"); //Refresh by HTTP 'meta'
//         }
//         else {
//             echo "<script type='text/javascript'>alert('Document Data  is not been uploaded')</script>"; 
//         }
//     }

//      public function listdocsummary()
//     {

//         $login_id = $_SESSION["uid"];
//          $sql = "SELECT *  FROM `doc_summary` where login_id=$login_id";
//         echo "$sql";
//         $res = mysqli_query($this->con,$sql);
//         return $res;

//     //    $result=mysqli_query($this->con,'SELECT carphoto,vname,vcontactno,vemail,licencephoto,vaddress,vstate FROM `vehicle_document`JOIN login WHERE vehicle_document.login_id = login.login_id');
//     // return $result;
//     }


// }




?>
