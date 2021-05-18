<?php


session_start();
// include('session.php');
//require_once ("../login/connection.php" );
if(isset($_POST["submit"]))
{
      include_once 'action.php';
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
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <div class="signup_heading">
                    <h2 id="heading">Sign Up Your Payment Account</h2>
                    <p>Fill all form field to go to next step</p>
                    </div>
                    <form id="msform">
                        <!-- progressbar -->
                                            

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
<br> <br>

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

    <script type="text/javascript">
        $(document).ready(function(){

    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    var current = 1;
    var steps = $("fieldset").length;
    
    setProgressBar(current);
    
    $(".next").click(function(){
    
    current_fs = $(this).parent();
    next_fs = $(this).parent().next();
    
    //Add Class Active
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
    
    //show the next fieldset
    next_fs.show();
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
    step: function(now) {
    // for making fielset appear animation
    opacity = 1 - now;
    
    current_fs.css({
    'display': 'none',
    'position': 'relative'
    });
    next_fs.css({'opacity': opacity});
    },
    duration: 500
    });
    setProgressBar(++current);
    });
    
    $(".previous").click(function(){
    
    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();
    
    //Remove class active
    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
    
    //show the previous fieldset
    previous_fs.show();
    
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
    step: function(now) {
    // for making fielset appear animation
    opacity = 1 - now;
    
    current_fs.css({
    'display': 'none',
    'position': 'relative'
    });
    previous_fs.css({'opacity': opacity});
    },
    duration: 500
    });
    setProgressBar(--current);
    });
    
    function setProgressBar(curStep){
    var percent = parseFloat(100 / steps) * curStep;
    percent = percent.toFixed();
    $(".progress-bar")
    .css("width",percent+"%")
    }
    
    $(".submit").click(function(){
    return false;
    })
    
    });


(function () {
    var language_select = document.getElementById("languages");
    var result = document.getElementById("selected-language");

    language_select.addEventListener('change', function (event) {
        var selected_value = this.value;
        var selected_text = this.options[this.selectedIndex].text;
        result.innerText = selected_value + '\n' + selected_text;
    });
})();


function myFunction() {
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
    </script>
</body>
</html>