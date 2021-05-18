<?php
require_once ("connection.php");

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