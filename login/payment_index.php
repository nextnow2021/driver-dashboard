<?php 

session_start();
// include('session.php');
require_once ("../login/connection.php" );
if(isset($_POST["submit"]))
{
      include_once '.dashboard/action.php';
               $PaymentClass=new PaymentClass();
               // echo $getsubImage;
               $PaymentClass->paymentuploadfile($_SESSION['uid'],$_POST["bill_type"],$_POST["company_name"],
                $_POST["address"],$_POST["registration_code"],
                $_POST["vat_number"],$_POST["bank_account_name"],
                $_POST["bank_account"],$_POST["bank_name"]);
  // $getImage=  basename($_FILES["photo"]["name"]);
  //  // $getsubimg=  basename($_FILES["subimage_btn"]["name"]);
  //   if($getImage==""){
  //      echo "<script type='text/javascript'>alert('Please Choose Image!')</script>";
  //   }
  
  
  //     $target="photo_img/";
  //       //$ran=time();
  //       $target=$target.$getImage;
  //       $photo=$getImage;
// echo "$photo";
        
        // if($_FILES["photo"]["type"] =="image/jpg"||$_FILES["photo"]["type"]=="image/jpeg" || $_FILES["photo"]["type"]=="image/png")
        // {
            // $move = move_uploaded_file($_FILES["photo"]["tmp_name"], $target);
            // if($move){
               //  include_once 'action.php';
               // $DocumentClass=new DocumentClass();
               // // echo $getsubImage;
               // $DocumentClass->uploadfile($_SESSION['uid'],$photo,$_POST["name"],$_POST["contactno"],$_POST["email"],$_POST["address"],$_POST["state"]);
              
            // }
            // else
            // {
            //     echo "<script type='text/javascript'>alert('File Not Uploded.!')</script>";
            // }
        // }
        // else
        // {
        //    echo "<script type='text/javascript'>alert('Please Choose Image format in JPEG,Gif,PNG!')</script>";
        // }
  
  
}




 ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Driver Admin Panel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="css/dstyle.css">
     <link rel="stylesheet" href="css/documentstyle.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
    $(function () {
        $("#chkVehicle").click(function () {
            if ($(this).is(":checked")) {
                $("#dvVehicle").show();
            } else {
                $("#dvVehicle").hide();
            }
        });
    });
</script>
       <script type="text/javascript">
           $(document).ready(function() {
    $('#vehiclemanufacture').on('change', function() {
        var elements = $('div.container').children().hide(); // hide all the elements
        var value = $(this).val();

        if (value.length) { // if somethings' selected
            elements.filter('.' + value).show(); // show the ones we want
        }
    }).trigger('change');
});
       </script> 
       <script type="text/javascript">
        // Map your choices to your option value
// var lookup = {
//    'Option 1': ['Option 1 - Choice 1', 'Option 1 - Choice 2', 'Option 1 - Choice 3'],
//    'Option 2': ['Option 2 - Choice 1', 'Option 2 - Choice 2'],
//    'Option 3': ['Option 3 - Choice 1'],
// };

// // When an option is changed, search the above for matching choices
// $('#options').on('change', function() {
//    // Set selected option as variable
//    var selectValue = $(this).val();

//    // Empty the target field
//    $('#choices').empty();
   
//    // For each chocie in the selected option
//    for (i = 0; i < lookup[selectValue].length; i++) {
//       // Output choice in the target field
//       $('#choices').append("<option value='" + lookup[selectValue][i] + "'>" + lookup[selectValue][i] + "</option>");
//    }
// });
//         $(document).ready(function () {
        
//         var list1 = document.getElementById('firstList');
    
//         list1.options[0] = new Option('--Select--', '');
//         list1.options[1] = new Option('Snacks', 'Snacks');
//         list1.options[2] = new Option('Drinks', 'Drinks');
//         });

//          function getFoodItem(){
//             var list1 = document.getElementById('firstList');
//             var list2 = document.getElementById("secondList");
//             var list1SelectedValue = list1.options[list1.selectedIndex].value;
            
//             if (list1SelectedValue=='Snacks')
//             {
                
//                 list2.options.length=0;
//                 list2.options[0] = new Option('--Select--', '');
//                 list2.options[1] = new Option('Burger', 'Burger');
//                 list2.options[2] = new Option('Pizza', 'Pizza');
//                 list2.options[3] = new Option('Hotdog', 'Hotdog');
//                 list2.options[4] = new Option('Potato Chips', 'Potato Chips');
//                 list2.options[5] = new Option('French Fries', 'French Fries');
                
//             }
//             else if (list1SelectedValue=='Drinks')
//             {
                
//                 list2.options.length=0;
//                 list2.options[0] = new Option('--Select--', '');
//                 list2.options[1] = new Option('Coca Cola', 'Coca Cola');
//                 list2.options[2] = new Option('7up', '7up');
//                 list2.options[3] = new Option('Pepsi', 'Pepsi');
//                 list2.options[4] = new Option('Coffee', 'Coffee');
//                 list2.options[5] = new Option('Tea', 'Tea');
                
//             }
// }
       </script>
</head>
<body>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-11 col-sm-6 col-md-6 col-lg-10 col-xl-5 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3" style="border:none;">
                <h2 id="heading">Sign Up Your Payment Account</h2>
                <p>Fill all form field to go to next step</p>
                <form id="msform">
                    <!-- progressbar -->
                    <ul id="progressbar">
                            <!-- <li class="active" id="account"><strong>Account</strong></li>
                            <li id="personal"><strong>Personal & vehicle info</strong></li>
                            <li class="document_fees" href="#document_fees"><strong>Documents & fees</strong></li>
                            <li id="documents"><strong>Documents</strong></li> -->
                            <!-- <li id="payment"><strong>Payment details</strong></li> -->
                        </ul>
                   
                         <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Payment details</h2>
                                    </div>
                                    
                                </div> 
                                <label class="fieldlabels">Billing type *</label> 
                                  <select size="1" id="" title="" name="bill_type" class="form-control" required>
    <option value="" selected="">-Choose</option>
    <option value="">Company</option>
    <option value="">Person</option>
    <option value="">Other</option>
</select>

                                <label class="fieldlabels">Company name *</label> 
                                <input type="text" name="company_name" placeholder="ABC Taxis Ltd" required >
                                
                                <label class="fieldlabels">Address *</label> 
                                <input type="text" name="address" placeholder="Vana-Louna tn 39/1, Tallin, 10134" required >

                                <label class="fieldlabels">Registration code *</label> 
                                <input type="text" name="registration_code" placeholder="12345437"  required>

                                <label class="fieldlabels">VAT number *</label> 
                                <input type="text" name="vat_number" placeholder="67879" required>

                                <label class="fieldlabels">Bank account holder name *</label> 
                                <input type="text" name="bank_account_name" placeholder="ABC Taxis Ltd / John Doe" required>

                                <label class="fieldlabels">Bank account number *</label> 
                                <input type="text" name="bank_account" placeholder="3345667879" required >

                                <label class="fieldlabels">Bank Name or BIC/SWIFT *</label> 
                                <input type="text" name="bank_name" placeholder="HABALT44" required>
                            </div>
                            <button type="submit" name="submit" class=" btn btn-primary float-right">Submit</button>
                            <!-- <input type="button" name="sub" class=" action-button" value="Submit" /> --><!--  <button type="button" name="previous" class="previous action-button-previous" value="Previous" ></button> -->
                        </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Finish:</h2>
                                </div>
                                
                            </div> <br><br>
                            <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                            <div class="row justify-content-center">
                                <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                            </div> <br><br>
                            <div class="row justify-content-center">
                                <div class="col-7 text-center">
                                    <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>	
<script src="js/driverscript.js"> </script>
</body>
</html>