<!-- hex = 7350fc -->
<?php
require_once ("../login/connection.php");
//require_once("../login/login.php");
class DocumentClass extends connectionClass
{
	public function uploadfile($login_id,$photo,$name,$contactno,$email,$address,$state){
		$insert = mysqli_query($this->con,"INSERT INTO driver_document(login_id,photo, name, contactno, email, address, state) 
        VALUES ('$login_id','$photo','$name','$contactno','$email','$address','$state')") ;
    //print_r($insert);
	// $insert="Insert into driver_document (subject_id,slidername,video_btn,subimage_btn) values ('$subject_id','$slidername','$video_btn','$subimage_btn')";

	//$result = $this->query($insert);
	if ($insert) {
		echo "<script type='text/javascript'>alert('Data  is uploaded')</script>";
        echo("<meta http-equiv='refresh' content='0'>"); //Refresh by HTTP 'meta'
	}
	else {
		echo "<script type='text/javascript'>alert('Data  is not been uploaded')</script>";	
	}

	}

	public function listdocument(){
        $login_id = $_SESSION["uid"];
        //print_r($login_id);
    // $result=mysqli_query($this->con,'SELECT photo,name,contactno,email,address,state FROM driver_document
    //  WHERE login_id = $login_id');

        $sql = "SELECT *  FROM `driver_document` where login_id={$login_id}";
        echo "$sql";
        $res = mysqli_query($this->con,$sql);
        return $res;
        //echo "$res";
        //return $sql;
         // $result = mysqli_query($this->con,'SELECT photo,name,contactno,email,address,state FROM `driver_document`JOIN login WHERE driver_document.login_id = login.login_id');
        // //print_r($result);
         //return $result;


//$result = mysqli_query($this->con,"select * from driver_document where login_id='".$_SESSION['uid']."'");

//echo $result;




    // select photo, name, contactno, email, address, state from driver_document login
    //     where login_id ="+ $login_id +"

    // SELECT photo,name,contactno,email,address,state FROM `driver_document`JOIN login WHERE driver_document.login_id = login.login_id
    }

}

/**
 * 
 */
class VehicleClass extends connectionClass
{
    
    public function vuploadfile($login_id,$carphoto,$vname,$vcontactno,$vemail,$licencephoto,$vaddress,$vstate){
        $sql = mysqli_query($this->con,"INSERT INTO vehicle_document(login_id,carphoto, vname, vcontactno, vemail,licencephoto ,vaddress, vstate) 
        VALUES ('$login_id','$carphoto','$vname','$vcontactno','$vemail','$licencephoto','$vaddress','$vstate')") ;
           

           //print_r($sql);

        // $sql = "INSERT INTO vehicle_document('carphoto', 'vname', 'vcontactno', 'vemail', 'licencephoto', 'vaddress', 'vstate') 
        // VALUES ('$carphoto','$vname','$vcontactno','$vemail','$licencephoto','$vaddress','$vstate')";



    // $insert="Insert into driver_document (subject_id,slidername,video_btn,subimage_btn) values ('$subject_id','$slidername','$video_btn','$subimage_btn')";

        //$vresult = mysqli_query($this->con,$sql);
        if ($sql) {
            echo "<script type='text/javascript'>alert('Vehicle Data  is uploaded')</script>";
             echo("<meta http-equiv='refresh' content='0'>"); //Refresh by HTTP 'meta'
        }
        else {
            echo "<script type='text/javascript'>alert('Data  is not been uploaded')</script>"; 
        }
    }


    public function listvehicle()
    {

        $login_id = $_SESSION["uid"];
         $sql = "SELECT *  FROM `vehicle_document` where login_id=$login_id";
        echo "$sql";
        $res = mysqli_query($this->con,$sql);
        return $res;

    //    $result=mysqli_query($this->con,'SELECT carphoto,vname,vcontactno,vemail,licencephoto,vaddress,vstate FROM `vehicle_document`JOIN login WHERE vehicle_document.login_id = login.login_id');
    // return $result;
    }


}

class DocSummaryClass extends connectionClass{

    public function docuploadfile($login_id,$driver_id_document,
        $driver_license,$driver_photo,$vehicle_license,
        $registration_certificate,$vehicle_inspection,
        $signed_eme_affidavit,$operating_license){
        $sql = mysqli_query($this->con,"INSERT INTO doc_summary(login_id,driver_id_document,driver_license,driver_photo,vehicle_license,
            registration_certificate,vehicle_inspection,
            signed_eme_affidavit,operating_license) 
        VALUES ('$login_id','$driver_id_document','$driver_license',
        '$driver_photo','$vehicle_license','$registration_certificate',
        '$vehicle_inspection','$signed_eme_affidavit',
        '$operating_license')") ;
           

           //print_r($sql);

        // $sql = "INSERT INTO vehicle_document('carphoto', 'vname', 'vcontactno', 'vemail', 'licencephoto', 'vaddress', 'vstate') 
        // VALUES ('$carphoto','$vname','$vcontactno','$vemail','$licencephoto','$vaddress','$vstate')";



    // $insert="Insert into driver_document (subject_id,slidername,video_btn,subimage_btn) values ('$subject_id','$slidername','$video_btn','$subimage_btn')";

        //$vresult = mysqli_query($this->con,$sql);
        if ($sql) {
            echo "<script type='text/javascript'>alert('Document  Data  is uploaded')</script>";
             echo("<meta http-equiv='refresh' content='0'>"); //Refresh by HTTP 'meta'
        }
        else {
            echo "<script type='text/javascript'>alert('Document Data  is not been uploaded')</script>"; 
        }
    }

     public function listdocsummary()
    {

        $login_id = $_SESSION["uid"];
         $sql = "SELECT *  FROM `doc_summary` where login_id=$login_id";
        echo "$sql";
        $res = mysqli_query($this->con,$sql);
        return $res;

    //    $result=mysqli_query($this->con,'SELECT carphoto,vname,vcontactno,vemail,licencephoto,vaddress,vstate FROM `vehicle_document`JOIN login WHERE vehicle_document.login_id = login.login_id');
    // return $result;
    }


}

?>
