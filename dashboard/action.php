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

class ProfileSummary extends connectionClass
{
    
    public function profileuploadfile($login_id,$profile_image,$email,$contactno,$driving_licence_number,$driver_licence_expiry_date,$driver_vehicle_model,$driver_year,$driver_vehicle_numberplate,$driver_vehicle_seats,$vehicle_brand,$vehicle_disc_licence,
        $vehicle_licence_expire_date,$vehicle_year,$vehicle_registration_numberplate,$vehicle_model,$vehicle_color){
        $sql = mysqli_query($this->con,"INSERT INTO profile_summary(login_id,profile_image, email, contactno, driving_licence_number, driver_licence_expiry_date, driver_vehicle_model, driver_year, driver_vehicle_numberplate, driver_seats, vehicle_brand, vehicle_disc_licence, vehicle_licence_expire_date, vehicle_year, vehicle_registration_numberplate, vehicle_model, vehicle_color) 
        VALUES ('$login_id',
        '$profile_image',
        '$email',
        '$contactno',
        '$driving_licence_number',
        '$driver_licence_expiry_date',
        '$driver_vehicle_model',
        '$driver_year',
        '$driver_vehicle_numberplate',
        '$driver_vehicle_seats',
        '$vehicle_brand',
        '$vehicle_disc_licence',
        '$vehicle_licence_expire_date',
        '$vehicle_year',
        '$vehicle_registration_numberplate',
        '$vehicle_model',
        '$vehicle_color')") ;
           

           //print_r($sql);

        // $sql = "INSERT INTO vehicle_document('carphoto', 'vname', 'vcontactno', 'vemail', 'licencephoto', 'vaddress', 'vstate') 
        // VALUES ('$carphoto','$vname','$vcontactno','$vemail','$licencephoto','$vaddress','$vstate')";



    // $insert="Insert into driver_document (subject_id,slidername,video_btn,subimage_btn) values ('$subject_id','$slidername','$video_btn','$subimage_btn')";

        //$vresult = mysqli_query($this->con,$sql);
        if ($sql) {
            echo "<script type='text/javascript'>alert('Profile Summary Data  is uploaded')</script>";
            // echo("<meta http-equiv='refresh' content='0'>"); //Refresh by HTTP 'meta'
        }
        else {
            echo "<script type='text/javascript'>alert('Data  is not been uploaded')</script>"; 
        }
    }


    public function listprofilesummary()
    {

        $login_id = $_SESSION["uid"];
         $sql = "SELECT profile_summary.profile_id,profile_summary.uploaded_date, profile_summary.email, profile_summary.contactno, profile_summary.driving_licence_number,profile_summary.driver_licence_expiry_date,profile_summary.driver_vehicle_model,profile_summary.driver_vehicle_year,profile_summary.driver_vehicle_numberplate,profile_summary.driver_vehicle_seats,login.FullName FROM profile_summary,login WHERE login.login_id=$login_id";
        echo "$sql";
        $res = mysqli_query($this->con,$sql);
        return $res;

    //    $result=mysqli_query($this->con,'SELECT carphoto,vname,vcontactno,vemail,licencephoto,vaddress,vstate FROM `vehicle_document`JOIN login WHERE vehicle_document.login_id = login.login_id');
    // return $result;
    }


}

class BillingClass extends connectionClass
{
    
    public function billuploadfile($login_id,$company_name,$company_email,$address,$business_registration_code,$vat_no){
        $sql = mysqli_query($this->con,"INSERT INTO bill_summary(login_id,company_name, company_email,address, business_registration_code,vat_no) 
        VALUES ('$login_id','$company_name','$company_email','$address','$business_registration_code','$vat_no')") ;
           

         // print_r($sql);

        // $sql = "INSERT INTO vehicle_document('carphoto', 'vname', 'vcontactno', 'vemail', 'licencephoto', 'vaddress', 'vstate') 
        // VALUES ('$carphoto','$vname','$vcontactno','$vemail','$licencephoto','$vaddress','$vstate')";



    // $insert="Insert into driver_document (subject_id,slidername,video_btn,subimage_btn) values ('$subject_id','$slidername','$video_btn','$subimage_btn')";

        //$vresult = mysqli_query($this->con,$sql);
        if ($sql) {
            echo "<script type='text/javascript'>alert('Billing Information  is uploaded')</script>";
             echo("<meta http-equiv='refresh' content='0'>"); //Refresh by HTTP 'meta'
        }
        else {
            echo "<script type='text/javascript'>alert('Billing Data  is not been uploaded')</script>"; 
        }
    }


    public function listbillsummary()
    {

        $login_id = $_SESSION["uid"];
         $sql = "SELECT *  FROM `bill_summary` where login_id=$login_id";
        echo "$sql";
        $res = mysqli_query($this->con,$sql);
        return $res;

    //    $result=mysqli_query($this->con,'SELECT carphoto,vname,vcontactno,vemail,licencephoto,vaddress,vstate FROM `vehicle_document`JOIN login WHERE vehicle_document.login_id = login.login_id');
    // return $result;
    }


}

class PaymentClass extends connectionClass
{
    
    public function paymentuploadfile($login_id,$bill_type,$company_name,$address,$registration_code,$vat_number,
        $bank_account_name, $bank_account,$bank_name){
        $sql = mysqli_query($this->con,"INSERT INTO payment_details(login_id,bill_type, company_name, address, registration_code,vat_number ,bank_account_name, bank_account,bank_name) 
        VALUES ('$login_id','$bill_type','$company_name','$address',
        '$registration_code','$vat_number','$bank_account_name',
        '$bank_account','$bank_name')") ;
           

           //print_r($sql);

        // $sql = "INSERT INTO vehicle_document('carphoto', 'vname', 'vcontactno', 'vemail', 'licencephoto', 'vaddress', 'vstate') 
        // VALUES ('$carphoto','$vname','$vcontactno','$vemail','$licencephoto','$vaddress','$vstate')";



    // $insert="Insert into driver_document (subject_id,slidername,video_btn,subimage_btn) values ('$subject_id','$slidername','$video_btn','$subimage_btn')";

        //$vresult = mysqli_query($this->con,$sql);
        if ($sql) {
            echo "<script type='text/javascript'>alert('Payment Data  is uploaded')</script>";
             // echo("<meta http-equiv='refresh' content='0'>"); //Refresh by HTTP 'meta'
        }
        else {
            echo "<script type='text/javascript'>alert('PAyment Data  is not been uploaded')</script>"; 
        }
    }


    public function listpayment()
    {

        $login_id = $_SESSION["uid"];
         $sql = "SELECT *  FROM `payment_details` where login_id=$login_id";
        echo "$sql";
        $res = mysqli_query($this->con,$sql);
        return $res;

    //    $result=mysqli_query($this->con,'SELECT carphoto,vname,vcontactno,vemail,licencephoto,vaddress,vstate FROM `vehicle_document`JOIN login WHERE vehicle_document.login_id = login.login_id');
    // return $result;
    }


}


?>
