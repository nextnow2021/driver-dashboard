<?php
session_start();

if(isset($_POST["submit"]))
{
  $getProfileImage=  basename($_FILES["profile_image"]["name"]);
   // $getsubimg=  basename($_FILES["subimage_btn"]["name"]);
    if($getProfileImage==""){
       echo "<script type='text/javascript'>alert('Please Choose Image!')</script>";
    }
  
  
      $target="photo_img/";
        //$ran=time();
        $target=$target.$getProfileImage;
        $profile_image=$getProfileImage;
// echo "$photo";
        
        if($_FILES["profile_image"]["type"] =="image/jpg"||$_FILES["profile_image"]["type"]=="image/jpeg" || $_FILES["profile_image"]["type"]=="image/png")
        {
            $move = move_uploaded_file($_FILES["profile_image"]["tmp_name"], $target);
            if($move){
                include_once 'action.php';
               $ProfileSummary=new ProfileSummary();
               // echo $getsubImage;
               $ProfileSummary->profileuploadfile($_SESSION['uid'],
                $profile_image,
                $_POST["email"],
                $_POST["contactno"],
                $_POST["driving_licence_number"],
                $_POST["driver_licence_expiry_date"],
                $_POST["driver_vehicle_model"],
                $_POST["driver_year"],
                $_POST["driver_vehicle_numberplate"],
                $_POST["driver_seats"],
              $_POST["vehicle_brand"],
              $_POST["vehicle_disc_licence"],
              $_POST["vehicle_licence_expire_date"],
              $_POST["vehicle_year"],
              $_POST["vehicle_registration_numberplate"],
              $_POST["vehicle_seats"],
               $_POST["vehicle_model"],
               $_POST["vehicle_color"]);
              
            }
            else
            {
                echo "<script type='text/javascript'>alert('File Not Uploded.!')</script>";
            }
        }
        else
        {
           echo "<script type='text/javascript'>alert('Please Choose Image format in JPEG,Gif,PNG!')</script>";
        }
  
  
}
?>

<?php
if(isset($_POST["bsubmit"]))
{
  // $getProfileImage=  basename($_FILES["profile_image"]["name"]);
  //  // $getsubimg=  basename($_FILES["subimage_btn"]["name"]);
  //   if($getProfileImage==""){
  //      echo "<script type='text/javascript'>alert('Please Choose Image!')</script>";
  //   }
  
  
      // $target="photo_img/";
      //   //$ran=time();
      //   $target=$target.$getProfileImage;
      //   $profile_image=$getProfileImage;
// echo "$photo";
        
        // if($_FILES["profile_image"]["type"] =="image/jpg"||$_FILES["profile_image"]["type"]=="image/jpeg" || $_FILES["profile_image"]["type"]=="image/png")
        // {
        //     $move = move_uploaded_file($_FILES["profile_image"]["tmp_name"], $target);
        //     if($move){
                include_once 'action.php';
               $BillingClass=new BillingClass();
               // echo $getsubImage;
               $BillingClass->billuploadfile($_SESSION['uid'],$_POST["company_name"],$_POST["company_email"],$_POST["address"],$_POST["business_registration_code"],$_POST["vat_no"]);
              
            // }
            // else
            // {
            //     echo "<script type='text/javascript'>alert('File Not Uploded.!')</script>";
            // }
        // }
       
  
  
}
 


?>


<?php

if(strlen($_SESSION['uid'])=="")
{
  header('location:../login/login.php');
} else {


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Driver Admin Panel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Google fonts - Popppins for copy-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,800">
    <!-- orion icons-->
    <link rel="stylesheet" href="css/orionicons.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="shortcut icon" href="img/favicon.png?3">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
        <style type="text/css">
          /* your styles go here */
          .float{
  position:fixed;
  width:60px;
  height:60px;
  bottom:40px;
  right:40px;
  background-color:#25d366;
  color:#FFF;
  border-radius:50px;
  text-align:center;
  font-size:30px;
  box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
  margin-top:16px;
}
     
        </style>
  </head>
  <body>
    <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg px-4 py-2  shadow" style="background-color: black;"><a href="#" class="sidebar-toggler text-gray-500 mr-4  mr-lg-5 lead"><i class="fas fa-align-left"></i></a><a href="index.php" class="navbar-brand font-weight-bold text-uppercase text-base"><img src="img/Logo-01 (1).png" class="img-responsive"></a>
        <ul class="ml-auto d-flex align-items-center list-unstyled mb-0">
          <!-- <li class="nav-item">
            <form id="searchForm" class="ml-auto d-none d-lg-block">
              <div class="form-group position-relative mb-0">
                <button type="submit" style="top: -3px; left: 0;" class="position-absolute bg-white border-0 p-0"><i class="o-search-magnify-1 text-gray text-lg"></i></button>
                <input type="search" placeholder="Search ..." class="form-control form-control-sm border-0 no-shadow pl-4">
              </div>
            </form>
          </li> -->
         <!--  <li class="nav-item dropdown mr-3"><a id="notifications" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle text-gray-400 px-1"><i class="fa fa-bell"></i><span class="notification-icon"></span></a>
            <div aria-labelledby="notifications" class="dropdown-menu"><a href="#" class="dropdown-item">
                <div class="d-flex align-items-center">
                  <div class="icon icon-sm bg-violet text-white"><i class="fab fa-twitter"></i></div>
                  <div class="text ml-2">
                    <p class="mb-0">You have 2 followers</p>
                  </div>
                </div></a><a href="#" class="dropdown-item"> 
                <div class="d-flex align-items-center">
                  <div class="icon icon-sm bg-green text-white"><i class="fas fa-envelope"></i></div>
                  <div class="text ml-2">
                    <p class="mb-0">You have 6 new messages</p>
                  </div>
                </div></a><a href="#" class="dropdown-item">
                <div class="d-flex align-items-center">
                  <div class="icon icon-sm bg-blue text-white"><i class="fas fa-upload"></i></div>
                  <div class="text ml-2">
                    <p class="mb-0">Server rebooted</p>
                  </div>
                </div></a><a href="#" class="dropdown-item">
                <div class="d-flex align-items-center">
                  <div class="icon icon-sm bg-violet text-white"><i class="fab fa-twitter"></i></div>
                  <div class="text ml-2">
                    <p class="mb-0">You have 2 followers</p>
                  </div>
                </div></a>
              <div class="dropdown-divider"></div><a href="#" class="dropdown-item text-center"><small class="font-weight-bold headings-font-family text-uppercase">View all notifications</small></a>
            </div>
          </li> -->
          <li class="nav-item dropdown ml-auto"><a id="userInfo" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><img src="img/favicon1.png" alt="Moin Shaikh" style="max-width: 2.5rem;" class="img-fluid rounded-circle bg-white shadow"></a>
            <div aria-labelledby="userInfo" class="dropdown-menu"><a href="" class="dropdown-item"><strong class="d-block text-uppercase headings-font-family"></strong><?php  echo  $_SESSION['fname'];?></a>
              <div class="dropdown-divider"></div><a href="#" class="dropdown-item">Settings</a><a href="#" class="dropdown-item">Activity log       </a>
              <div class="dropdown-divider"></div><a href="../login/logout.php" name="login" class="dropdown-item">Logout</a>
            </div>
          </li>
        </ul>
      </nav>
    </header>
    <div class="d-flex align-items-stretch">
      <div id="sidebar" class="sidebar py-3">
        <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family">MAIN</div>
        <ul class="sidebar-menu list-unstyled">
              <li class="sidebar-list-item"><a href="index.php" class="sidebar-link text-muted active">
                <img src="img/Png/Home.png" class="img-responsive mr-3"><span>Home</span></a></li>
              <li class="sidebar-list-item"><a href="myvehicle.php" class="sidebar-link text-muted">
                <img src="img/Png/Vehicle.png" class="img-responsive mr-3"><span>My Vehicle</span></a></li>
              <li class="sidebar-list-item"><a href="myrides.php" class="sidebar-link text-muted">
                <img src="img/Png/ride.png" class="img-responsive mr-3"><span>My Rides</span></a></li>
              <li class="sidebar-list-item"><a href="profile.php" class="sidebar-link text-muted"><i class="o-survey-1 mr-3 text-gray"></i><span>Profile</span></a></li>
              <li class="sidebar-list-item"><a href="mywallet.php" class="sidebar-link text-muted">
                <img src="img/Png/report.png" class="img-responsive mr-3"><span>My Reports</span></a></li>
              <li class="sidebar-list-item"><a href="earning.php" class="sidebar-link text-muted">
                <img src="img/Png/Rand_Money.png" class="img-responsive mr-3"><span>Earning</span></a></li>
              <!-- <li class="sidebar-list-item"><a href="myexperience.html" class="sidebar-link text-muted"><i class="o-survey-1 mr-3 text-gray"></i><span>My Experience</span></a></li> -->
              <li class="sidebar-list-item"><a href="support.php" class="sidebar-link text-muted">
                <img src="img/Png/support.png" class="img-responsive mr-3"><span>Support</span></a></li>
          <!-- <li class="sidebar-list-item"><a href="#" data-toggle="collapse" data-target="#pages" aria-expanded="false" aria-controls="pages" class="sidebar-link text-muted"><i class="o-wireframe-1 mr-3 text-gray"></i><span>Pages</span></a>
            <div id="pages" class="collapse">
              <ul class="sidebar-menu list-unstyled border-left border-primary border-thick">
                <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted pl-lg-5">Page one</a></li>
                <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted pl-lg-5">Page two</a></li>
                <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted pl-lg-5">Page three</a></li>
                <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted pl-lg-5">Page four</a></li>
              </ul>
            </div>
          </li> -->
              <li class="sidebar-list-item"><a href="mydocument.php" class="sidebar-link text-muted">
                <img src="img/Png/document.png" class="img-responsive mr-3"><span>My Document</span></a></li>
        </ul>
        <!-- <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family">EXTRAS</div>
        <ul class="sidebar-menu list-unstyled">
              <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted"><i class="o-database-1 mr-3 text-gray"></i><span>Demo</span></a></li>
              <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted"><i class="o-imac-screen-1 mr-3 text-gray"></i><span>Demo</span></a></li>
              <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted"><i class="o-paperwork-1 mr-3 text-gray"></i><span>Demo</span></a></li>
              <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted"><i class="o-wireframe-1 mr-3 text-gray"></i><span>Demo</span></a></li>
        </ul> -->
      </div>
      <div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">
          <section class="py-5">
            <div class="row">
              <div class="col-xl-3 col-lg-3 mb-4 mb-xl-0">
                <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between tabs-title">
                  <div class="flex-grow-1 d-flex align-items-center">
                    <div class="dot mr-3 bg-violet"></div>
                    <div class="text ">
                      <h6 class="mb-0">Profile Summary</h6><!-- <span class="text-gray">145,14 GB</span> -->
                    </div>
                  </div>
                  <div class="icon text-white bg-violet"><i class="fas fa-server"></i></div>

                </div>
              </div>
              <!-- <div class="col-xl-3 col-lg-3 mb-4 mb-xl-0">
                <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                  <div class="flex-grow-1 d-flex align-items-center">
                    <div class="dot mr-3 bg-green"></div>
                    <div class="text">
                      <h6 class="mb-0"><a href="foodorder.html">Food Order</a></h6>
                    </div>
                  </div>
                  <div class="icon text-white bg-green"><i class="far fa-clipboard"></i></div>
                </div>
              </div> -->
              <!-- <div class="col-xl-3 col-lg-3 mb-4 mb-xl-0">
                <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                  <div class="flex-grow-1 d-flex align-items-center">
                    <div class="dot mr-3 bg-blue"></div>
                    <div class="text">
                      <h6 class="mb-0"><a href="">Room Service</a></h6>
                    </div>
                  </div>
                  <div class="icon text-white bg-blue"><i class="fa fa-dolly-flatbed"></i></div>
                </div>
              </div> -->
              <!-- <div class="col-xl-3 col-lg-3 mb-4 mb-xl-0">
                <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                  <div class="flex-grow-1 d-flex align-items-center">
                    <div class="dot mr-3 bg-red"></div>
                    <div class="text">
                      <h6 class="mb-0"><a href="">Support</a></h6>
                    </div>
                  </div>
                  <div class="icon text-white bg-red"><i class="fas fa-receipt"></i></div>
                </div>
              </div> -->
            </div>
            <div class="float-right">
                <button type="button" class="btn btn-outline-primary btn-circle float-right " data-toggle="modal" data-target="#largeModal" aria-haspopup="true" aria-expanded="true">
                    Add Profile
                </button>
          </div>

           <div class="float-right">
                <button type="button" class="btn btn-outline-primary btn-circle float-right " data-toggle="modal" data-target="#BillingModal" aria-haspopup="true" aria-expanded="true">
                    Add Billing Information
                </button>
          </div>


          </section>
          <section>
            <div class="col-md-12 col-sm-8 content">
<!---->       <div class="dashhead">
                  <h3 class="dashhead-title">Profile</h3>
                  <p>Here you can check your driver profile details and modify any of them if they are outdated.</p>
                </div>
                <div class="row m-b-lg">
                  <div class="col-sm-9 profile-edit-form">
                    <div class="row">
                        <div class="col-sm-6">
                          <div id="" class="ember-view"> 
                           <div class="form-group">
                           
                                <label for="first_name" class="control-label">
                                  First name
                                </label>
                                
                              <input placeholder="" disabled="" id="" class="form-control ember-text-field ember-view" type="text" >
                              <div id="ember184" class="ember-view"><!----></div>
                                <small class="help-block">
                                  To update, please contact customer support support@nextnow.africa
                                </small>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div id="ember185" class="ember-view"> 
                            <div class="form-group">
                              <label for="last_name" class="control-label">
                                Last name
                              </label>
                              <input placeholder="" disabled="" id="ember186" class="form-control ember-text-field ember-view" type="text">
                              <div id="ember187" class="ember-view"><!----></div>
                                <small class="help-block">
                                  To update, please contact customer support support@nextnow.africa
                                </small>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div id="ember188" class="ember-view">  
                          <div class="form-group">
                            <label for="email"  class="control-label">
                              Email Address
                            </label>
                            <input placeholder="" id="ember189" disabled="" class="form-control ember-text-field ember-view" type="text">
                             <div id="ember190" class="ember-view"><!----></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div id="ember191" class="ember-view"> 
                          <div class="form-group">
                              <label for="phone" class="control-label">
                                Phone Number
                              </label>
                            <input placeholder="" id="ember192" disabled="" class="form-control ember-text-field ember-view" type="text">
                            <div id="ember193" class="ember-view"><!----></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                            <div id="ember194" class="ember-view"> 
                              <div class="form-group">
                                    <label for="display_name" class="control-label">
                                      In-App Display Name
                                    </label>
                                  <input placeholder="" disabled="" id="ember195" class="form-control ember-text-field ember-view" type="text">
                                  <div id="ember196" class="ember-view"><!----></div>
                                    <small class="help-block">
                                      To update, please contact customer support support@nextnow.africa
                                    </small>
                              </div>
                            </div>
                      </div>
                    </div>
      <!---->    <h4 class="m-t-md">
            <strong>Driver documents</strong>
          </h4>
          <p>Driver and taxi license details. Keep an eye on expiration dates.</p>
              <div class="row">
                  <div class="col-sm-6">
                      <div id="ember197" class="ember-view"> 
                        <div class="form-group">
                            <label for="driver_licence_number" class="control-label">
                               Driving Licence Number
                            </label>
                          <input placeholder="" disabled="" id="ember198" class="form-control ember-text-field ember-view" type="text">
                          <div id="ember199" class="ember-view"><!----></div>
                            <small class="help-block">
                              To update, please contact customer support support@nextnow.africa
                            </small>
                        </div>
                      </div>
                  </div>
                  <div class="col-sm-6">
                      <div id="ember200" class="ember-view"> 
                        <div class="form-group">
                            <label for="driver_licence_expires" class="control-label">
                               Driver Licence Expiry Date
                            </label>
                            <input placeholder="" disabled="" id="ember201" class="form-control ember-text-field ember-view" type="text">
                            <div id="ember202" class="ember-view"><!----></div>
                            <small class="help-block">
                              To update, please contact customer support support@nextnow.africa
                            </small>
                        </div>
                      </div>
                  </div>
              </div>
<!---->      <h4 class="m-t-md">
        <strong>Driver vehicle</strong>
      </h4>
      <p>Driver can currently select this car in the app.</p>
              <div class="row">
                <div class="col-sm-6">
                  <div id="ember203" class="ember-view"> 
                    <div class="form-group">
                        <label for="driver_vehicle_model" class="control-label">
                          Model
                        </label>
                      <input placeholder="" disabled="" id="ember204" class="form-control ember-text-field ember-view" type="text">
                      <div id="ember205" class="ember-view"><!----></div>
                        <small class="help-block">
                          To update, please contact customer support support@nextnow.africa
                        </small>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div id="ember206" class="ember-view">  
                    <div class="form-group">
                        <label for="driver_vehicle_year" class="control-label">
                          Year
                        </label>
                      <input placeholder="" disabled="" id="ember207" class="form-control ember-text-field ember-view" type="text">
                      <div id="ember208" class="ember-view"><!----></div>
                        <small class="help-block">
                          To update, please contact customer support support@nextnow.africa
                        </small>
                    </div>
                   </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div id="ember209" class="ember-view">
                    <div class="form-group">
                        <label for="driver_vehicle_reg_number" class="control-label">
                          Number plate
                        </label>
                      <input placeholder="" disabled="" id="ember210" class="form-control ember-text-field ember-view" type="text">
                      <div id="ember211" class="ember-view"><!----></div>
                        <small class="help-block">
                          To update, please contact customer support support@nextnow.africa
                        </small>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                    <div id="ember212" class="ember-view">  
                      <div class="form-group">
                          <label for="driver_vehicle_seats" class="control-label">
                            Seats
                          </label>
                          <input placeholder="" disabled="" id="ember213" class="form-control ember-text-field ember-view" type="text">
                          <div id="ember214" class="ember-view"><!----></div>
                          <small class="help-block">
                            To update, please contact customer support support@nextnow.africa
                          </small>
                      </div>
                    </div>
                </div>
              </div>

               <h4 class="m-t-md">
        <strong>Vehicle Information</strong>
      </h4>
      <p>Vehicle can currently select this car in the app.</p>
              <div class="row">
                <div class="col-sm-6">
                  <div id="ember203" class="ember-view"> 
                    <div class="form-group">
                        <label for="driver_vehicle_model" class="control-label">
                         Brand
                        </label>
                      <input placeholder="" disabled="" id="ember204" class="form-control ember-text-field ember-view" type="text">
                      <div id="ember205" class="ember-view"><!----></div>
                        <small class="help-block">
                          To update, please contact customer support support@nextnow.africa
                        </small>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div id="ember206" class="ember-view">  
                    <div class="form-group">
                        <label for="driver_vehicle_year" class="control-label">
                          Vehicle disc control number Licence
                        </label>
                      <input placeholder="" disabled="" id="ember207" class="form-control ember-text-field ember-view" type="text">
                      <div id="ember208" class="ember-view"><!----></div>
                        <small class="help-block">
                          To update, please contact customer support support@nextnow.africa
                        </small>
                    </div>
                   </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div id="ember209" class="ember-view">
                    <div class="form-group">
                        <label for="driver_vehicle_reg_number" class="control-label">
                          Registration Number plate
                        </label>
                      <input placeholder="" disabled="" id="ember210" class="form-control ember-text-field ember-view" type="text">
                      <div id="ember211" class="ember-view"><!----></div>
                        <small class="help-block">
                          To update, please contact customer support support@nextnow.africa
                        </small>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                    <div id="ember212" class="ember-view">  
                      <div class="form-group">
                          <label for="driver_vehicle_seats" class="control-label">
                            Vehicle licence Expire date
                          </label>
                          <input placeholder="" disabled="" id="ember213" class="form-control ember-text-field ember-view" type="text">
                          <div id="ember214" class="ember-view"><!----></div>
                          <small class="help-block">
                            To update, please contact customer support support@nextnow.africa
                          </small>
                      </div>
                    </div>
                </div>
              </div>

               <div class="row">
                <div class="col-sm-6">
                  <div id="ember209" class="ember-view">
                    <div class="form-group">
                        <label for="driver_vehicle_reg_number" class="control-label">
                         Vehicle Model
                        </label>
                      <input placeholder="" disabled="" id="ember210" class="form-control ember-text-field ember-view" type="text">
                      <div id="ember211" class="ember-view"><!----></div>
                        <small class="help-block">
                          To update, please contact customer support support@nextnow.africa
                        </small>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                    <div id="ember212" class="ember-view">  
                      <div class="form-group">
                          <label for="driver_vehicle_seats" class="control-label">
                           Vehicle Seats
                          </label>
                          <input placeholder="" disabled="" id="ember213" class="form-control ember-text-field ember-view" type="text">
                          <div id="ember214" class="ember-view"><!----></div>
                          <small class="help-block">
                            To update, please contact customer support support@nextnow.africa
                          </small>
                      </div>
                    </div>
                </div>
              </div>

               <div class="row">
                <div class="col-sm-6">
                  <div id="ember209" class="ember-view">
                    <div class="form-group">
                        <label for="driver_vehicle_reg_number" class="control-label">
                         Vehicle Year
                        </label>
                      <input placeholder="" disabled="" id="ember210" class="form-control ember-text-field ember-view" type="text">
                      <div id="ember211" class="ember-view"><!----></div>
                        <small class="help-block">
                          To update, please contact customer support support@nextnow.africa
                        </small>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                    <div id="ember212" class="ember-view">  
                      <div class="form-group">
                          <label for="driver_vehicle_seats" class="control-label">
                            Vehicle Color
                          </label>
                          <input placeholder="" disabled="" id="ember213" class="form-control ember-text-field ember-view" type="text">
                          <div id="ember214" class="ember-view"><!----></div>
                          <small class="help-block">
                            To update, please contact customer support support@nextnow.africa
                          </small>
                      </div>
                    </div>
                </div>
              </div>


    <h4 class="m-t-md">
      <strong>Billing Information</strong>
    </h4>
    <p>This information appears on invoices sent to you.</p>
          <?php
                  
                include_once('action.php');
                //$sql=$fetchdata->fetchdata();
                $BillingClass= new BillingClass();
                $sql=$BillingClass->listbillsummary();
                //$cnt=1;
                $row = mysqli_fetch_array($sql);

              ?>
                <div class="row">
                    <div class="col-sm-6">
                      <div> 
                        <div class="form-group">
                            <label for="company_name" class="control-label">
                              Company Name
                            </label>
                          <input placeholder="" disabled="" class="form-control" type="text" value="<?php echo $row['company_name'];?>">
                          
                            <small class="help-block">
                              To update, please contact customer support support@nextnow.africa
                            </small>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                        <div > 
                            <div class="form-group">
                                <label for="company_email" class="control-label">
                                  Company email
                                </label>
                              <input placeholder="" disabled=""  class="form-control" type="text" value="<?php echo $row['company_email'];?>">
                              
                                <small class="help-block">
                                  To update, please contact customer support support@nextnow.africa
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div > 
                      <div class="form-group">
                          <label for="address" class="control-label">
                            Address
                          </label>
                        <input placeholder="" disabled=""  class="form-control" type="text" value="<?php echo $row['address'];?>">
                        
                          <small class="help-block">
                            To update, please contact customer support support@nextnow.africa
                          </small>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div >  
                      <div class="form-group">
                            <label for="reg_code" class="control-label">
                              Business Registration Code
                            </label>
                          <input placeholder="" disabled=""  class="form-control" type="text" value="<?php echo $row['business_registration_code'];?>">
                          
                            <small class="help-block">
                              To update, please contact customer support support@nextnow.africa
                            </small>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div> 
                      <div class="form-group">
                          <label for="vat_code" class="control-label">
                            VAT no.
                          </label>
                        <input placeholder="" disabled=""  class="form-control" type="text" value="<?php echo $row['vat_no'];?>">
                        
                          <small class="help-block">
                            To update, please contact customer support support@nextnow.africa
                          </small>
                      </div>
                    </div>
                  </div>
                </div>
    <h4 class="m-t-md">
      <strong>Invoice issuer information</strong>
    </h4>
    <p> </p>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                      <label for="legal_type" class="control-label">Type</label>
                        <p class="form-control-static">Private</p>
                        <small class="help-block">To update, please contact customer support support@nextnow.africa</small>
                    </div>
                </div>
                <div class="col-sm-6">
                  <div id="ember230" class="ember-view">  
                    <div class="form-group">
                        <label for="invoice_issuer_name" class="control-label">
                          Name
                        </label>
                      <input placeholder="" disabled="" id="ember231" class="form-control ember-text-field ember-view" type="text">
                      <div id="ember232" class="ember-view"><!----></div>
                        <small class="help-block">
                          To update, please contact customer support support@nextnow.africa
                        </small>
                    </div>
                  </div>
                </div>
            </div>
              <div class="row">
                  <div class="col-sm-6">
                    <div id="ember233" class="ember-view"> 
                      <div class="form-group">
                          <label for="invoice_issuer_address" class="control-label">
                            Address
                          </label>
                        <input placeholder="" disabled="" id="ember234" class="form-control ember-text-field ember-view" type="text">
                        <div id="ember235" class="ember-view"><!----></div>
                          <small class="help-block">
                            To update, please contact customer support support@nextnow.africa
                          </small>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div id="ember236" class="ember-view">  
                      <div class="form-group">
                          <label for="invoice_issuer_reg_code" class="control-label">
                            Business Registration Code
                          </label>
                        <input placeholder="" disabled="" id="ember237" class="form-control ember-text-field ember-view" type="text">
                        <div id="ember238" class="ember-view"><!----></div>
                          <small class="help-block">
                            To update, please contact customer support support@nextnow.africa
                          </small>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div id="ember239" class="ember-view">  
                    <div class="form-group">
                        <label for="invoice_issuer_vat_code" class="control-label">
                          VAT no.
                        </label>
                      <input placeholder="" disabled="" id="ember240" class="form-control ember-text-field ember-view" type="text">
                      <div id="ember241" class="ember-view"><!----></div>
                        <small class="help-block">
                          To update, please contact customer support support@nextnow.africa
                        </small>
                    </div>
                  </div>
                </div>
              </div>
    <h4 class="m-t-md">
      <strong>Payout account information</strong>
    </h4>
            <div class="row">
              <div class="col-sm-6">
                <div id="ember242" class="ember-view"> 
                 <div class="form-group">
                      <label for="account_recipient" class="control-label">
                        Recipient name
                      </label>
                    <input placeholder="" disabled="" id="ember243" class="form-control ember-text-field ember-view" type="text">
                    <div id="ember244" class="ember-view"><!----></div>
                      <small class="help-block">
                        To update, please contact customer support support@nextnow.africa
                      </small>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                  <div id="ember245" class="ember-view">  
                    <div class="form-group">
                        <label for="account_iban" class="control-label">
                          Bank Account Number
                        </label>
                      <input placeholder="" disabled="" id="ember246" class="form-control ember-text-field ember-view" type="text">
                      <div id="ember247" class="ember-view"><!----></div>
                        <small class="help-block">
                          To update, please contact customer support support@nextnow.africa
                        </small>
                    </div>
                  </div>
                </div>
              </div>
                <div class="row">
                      <div class="col-sm-6">
                          <div id="ember248" class="ember-view"> 
                              <div class="form-group">
                                  <label for="account_swift" class="control-label">
                                    Sort Code

                                  </label>
                                <input placeholder="" disabled="" id="ember249" class="form-control ember-text-field ember-view" type="text">
                                <div id="ember250" class="ember-view"><!----></div>
                                  <small class="help-block">
                                    To update, please contact customer support support@nextnow.africa
                                  </small>
                              </div>
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <div id="ember251" class="ember-view">  
                            <div class="form-group">
                                  <label for="account_branch_code" class="control-label">
                                    Transit number
                                  </label>
                                <input placeholder="" disabled="" id="ember252" class="form-control ember-text-field ember-view" type="text">
                                <div id="ember253" class="ember-view"><!----></div>
                                  <small class="help-block">
                                    To update, please contact customer support support@nextnow.africa
                                  </small>
                            </div>
                          </div>
                      </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group">
                        <label for="account_type" class="control-label">Type</label>
                          <p class="form-control-static">Savings</p>
                          <small class="help-block">To update, please contact customer support support@nextnow.africa</small>
                      </div>
                  </div>
                </div>
          </div> <!-- //profile-edit-form -->
            <div class="col-sm-3 col-xs-6">
                  <h4>
                    <strong>Display image</strong>
                  </h4>
                  <p>
                      <!-- <img src="" class="img-responsive img-rounded"> -->
          

                            <img  class="img-trigger" src="photo_img/<?php echo $row['photo'];?>"  width=100 height=100>
                              
                  </p>
                  <p class="text-center">
                    <small>This picture is visible to passengers.</small>
                  </p>
            </div>
        </div>
      </div>
            <!-- <div class="row mb-4">
              <div class="col-lg-7 mb-4 mb-lg-0">
                <div class="card">
                  <div class="card-header">
                    <h2 class="h6 text-uppercase mb-0">Deals & Offer</h2>
                  </div>
                  <div class="card-body">
                    <p class="text-gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    
                  </div>
                </div>
              </div>
              <div class="col-lg-5 mb-4 mb-lg-0 pl-lg-0">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="row align-items-center flex-row">
                      <div class="col-lg-5">
                        <h2 class="mb-0 d-flex align-items-center"><span>Details</span><span class="dot bg-green d-inline-block ml-3"></span></h2><span class="text-muted text-uppercase small">Work hours</span>
                        <hr><small class="text-muted">Lorem ipsum dolor sit</small>
                      </div>
                      <div class="col-lg-7">
                        <canvas id="pieChartHome1"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <div class="row align-items-center flex-row">
                      <div class="col-lg-5">
                        <h2 class="mb-0 d-flex align-items-center"><span>Details</span><span class="dot bg-violet d-inline-block ml-3"></span></h2><span class="text-muted text-uppercase small">Server time</span>
                        <hr><small class="text-muted">Lorem ipsum dolor sit</small>
                      </div>
                      <div class="col-lg-7">
                        <canvas id="pieChartHome2"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
          
            <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">-->
            <!--<a href="https://api.whatsapp.com/send/?phone=27736374790&text&app_absent=0" class="float" target="_blank">-->
            <!--      <i class="fa fa-whatsapp my-float"></i>-->
            <!--</a>-->
            <!-- <div class="row">
              <div class="col-lg-5 mb-4 mb-lg-0">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="row align-items-center mb-3 flex-row">
                      <div class="col-lg-5">
                        <h2 class="mb-0 d-flex align-items-center"><span>86%</span><span class="dot bg-violet d-inline-block ml-3"></span></h2><span class="text-muted text-uppercase small">Monthly Usage</span>
                        <hr><small class="text-muted">Lorem ipsum dolor sit</small>
                      </div>
                      <div class="col-lg-7">
                        <canvas id="pieChartHome3"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <div class="row align-items-center flex-row">
                      <div class="col-lg-5">
                        <h2 class="mb-0 d-flex align-items-center"><span>$126,41</span><span class="dot bg-green d-inline-block ml-3"></span></h2><span class="text-muted text-uppercase small">All Income</span>
                        <hr><small class="text-muted">Lorem ipsum dolor sit</small>
                      </div>
                      <div class="col-lg-7">
                        <canvas id="pieChartHome4"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-7">
                <div class="card">
                  <div class="card-header">
                    <h2 class="h6 text-uppercase mb-0">Total Overdue</h2>
                  </div>
                  <div class="card-body">
                    <p class="text-gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <div class="chart-holder">
                      <canvas id="lineChart2" style="max-height: 14rem !important;" class="w-100"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
          </section>
          <!-- <section class="py-5">
            <div class="row text-dark">
              <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="card rounded credit-card bg-hover-gradient-violet">
                  <div class="content d-flex flex-column justify-content-between p-4">
                    <h1 class="mb-5"><i class="fab fa-cc-visa"></i></h1>
                    <div class="d-flex justify-content-between align-items-end pt-3">
                      <div class="text-uppercase">
                        <div class="font-weight-bold d-block">Card Number</div><small class="text-gray">1245 1478 1362 6985</small>
                      </div>
                      <h4 class="mb-0">$417.78</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="card rounded credit-card bg-hover-gradient-blue">
                  <div class="content d-flex flex-column justify-content-between p-4">
                    <h1 class="mb-5"><i class="fab fa-cc-mastercard"></i></h1>
                    <div class="d-flex justify-content-between align-items-end pt-3">
                      <div class="text-uppercase">
                        <div class="font-weight-bold d-block">Card Number</div><small class="text-gray">1245 1478 1362 6985</small>
                      </div>
                      <h4 class="mb-0">$124.17</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="card rounded credit-card bg-hover-gradient-green">
                  <div class="content d-flex flex-column justify-content-between p-4">
                    <h1 class="mb-5"><i class="fab fa-cc-discover"></i></h1>
                    <div class="d-flex justify-content-between align-items-end pt-3">
                      <div class="text-uppercase">
                        <div class="font-weight-bold d-block">Card Number</div><small class="text-gray">1245 1478 1362 6985</small>
                      </div>
                      <h4 class="mb-0">$568.00</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section> -->
         <!--  <section>
            <div class="row">
              <div class="col-lg-8">
                <div class="card mb-5 mb-lg-0">         
                  <div class="card-header">
                    <h2 class="h6 mb-0 text-uppercase">Transaction history</h2>
                  </div>
                  <div class="card-body">
                    <p class="text-gray mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row">
                      <div class="left d-flex align-items-center">
                        <div class="icon icon-lg shadow mr-3 text-gray"><i class="fab fa-dropbox"></i></div>
                        <div class="text">
                          <h6 class="mb-0 d-flex align-items-center"> <span>Dropbox Inc.</span><span class="dot dot-sm ml-2 bg-violet"></span></h6><small class="text-gray">Account renewal</small>
                        </div>
                      </div>
                      <div class="right ml-5 ml-sm-0 pl-3 pl-sm-0 text-violet">
                        <h5>-$20</h5>
                      </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row">
                      <div class="left d-flex align-items-center">
                        <div class="icon icon-lg shadow mr-3 text-gray"><i class="fab fa-apple"></i></div>
                        <div class="text">
                          <h6 class="mb-0 d-flex align-items-center"> <span>App Store.</span><span class="dot dot-sm ml-2 bg-green"></span></h6><small class="text-gray">Software cost</small>
                        </div>
                      </div>
                      <div class="right ml-5 ml-sm-0 pl-3 pl-sm-0 text-green">
                        <h5>-$20</h5>
                      </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row">
                      <div class="left d-flex align-items-center">
                        <div class="icon icon-lg shadow mr-3 text-gray"><i class="fas fa-shopping-basket"></i></div>
                        <div class="text">
                          <h6 class="mb-0 d-flex align-items-center"> <span>Supermarket.</span><span class="dot dot-sm ml-2 bg-blue"></span></h6><small class="text-gray">Shopping</small>
                        </div>
                      </div>
                      <div class="right ml-5 ml-sm-0 pl-3 pl-sm-0 text-blue">
                        <h5>-$20</h5>
                      </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row">
                      <div class="left d-flex align-items-center">
                        <div class="icon icon-lg shadow mr-3 text-gray"><i class="fab fa-android"></i></div>
                        <div class="text">
                          <h6 class="mb-0 d-flex align-items-center"> <span>Play Store.</span><span class="dot dot-sm ml-2 bg-red"></span></h6><small class="text-gray">Software cost</small>
                        </div>
                      </div>
                      <div class="right ml-5 ml-sm-0 pl-3 pl-sm-0 text-red">
                        <h5>-$20</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="bg-white shadow roundy px-4 py-3 d-flex align-items-center justify-content-between mb-4">
                  <div class="flex-grow-1 d-flex align-items-center">
                    <div class="dot mr-3 bg-violet"></div>
                    <div class="text">
                      <h6 class="mb-0">Completed cases</h6><span class="text-gray">127 new cases</span>
                    </div>
                  </div>
                  <div class="icon bg-violet text-white"><i class="fas fa-clipboard-check"></i></div>
                </div>
                <div class="bg-white shadow roundy px-4 py-3 d-flex align-items-center justify-content-between mb-4">
                  <div class="flex-grow-1 d-flex align-items-center">
                    <div class="dot mr-3 bg-green"></div>
                    <div class="text">
                      <h6 class="mb-0">New Quotes</h6><span class="text-gray">214 new quotes</span>
                    </div>
                  </div>
                  <div class="icon bg-green text-white"><i class="fas fa-dollar-sign"></i></div>
                </div>
                <div class="bg-white shadow roundy px-4 py-3 d-flex align-items-center justify-content-between mb-4">
                  <div class="flex-grow-1 d-flex align-items-center">
                    <div class="dot mr-3 bg-blue"></div>
                    <div class="text">
                      <h6 class="mb-0">New clients</h6><span class="text-gray">25 new clients</span>
                    </div>
                  </div>
                  <div class="icon bg-blue text-white"><i class="fas fa-user-friends"></i></div>
                </div>
                <div class="card px-5 py-4">
                  <h2 class="mb-0 d-flex align-items-center"><span>86.4</span><span class="dot bg-red d-inline-block ml-3"></span></h2><span class="text-muted">Server time</span>
                  <div class="chart-holder">
                    <canvas id="lineChart3" style="max-height: 7rem !important;" class="w-100">      </canvas>
                  </div>
                </div>
              </div>
            </div>
          </section> -->
          <section class="py-5">
             <div class="row">
              <div class="col-lg-12 message card px-5 py-3 mb-4   no-anchor-style">
                  <div class="row">
                    
                    <div class="col-lg-9 d-flex  align-items-center flex-column flex-lg-row text-center text-md-left">
                      <a href="errorpage.php" class=" col-md-2 bg-gray-100 roundy px-4 py-1 mr-0 mr-lg-3 mt-2 mt-lg-0 text-dark exclode">About Us
                    </a>
                    <a href="" class=" col-md-2 bg-gray-100 roundy px-4 py-1 mr-0 mr-lg-3 mt-2 mt-lg-0 text-dark exclode">Guest Policy
                    </a>
                    <a href="" class=" col-md-3 bg-gray-100 roundy px-4 py-1 mr-0 mr-lg-3 mt-2 mt-lg-0 text-dark exclode">Terms & Conditions
                    </a>
                    <a href="" class="col-md-2 bg-gray-100 roundy px-4 py-1 mr-0 mr-lg-3 mt-2 mt-lg-0 text-dark exclode">Privacy Policy
                    </a>
                    <a href="" class="col-md-2 bg-gray-100 roundy px-4 py-1 mr-0 mr-lg-3 mt-2 mt-lg-0 text-dark exclode">Careers With Us
                    </a>
                    <a href="" class="bg-gray-100 roundy px-4 py-1 mr-0 mr-lg-3 mt-2 mt-lg-0 text-dark exclode">Contact Us
                    </a>
                    <a href="" class="bg-gray-100 roundy px-4 py-1 mr-0 mr-lg-3 mt-2 mt-lg-0 text-dark exclode">Feedback
                    </a>
                      
                    </div>
                  </div>
                </div>
             
            </div>
          </section>
        </div>
        <footer class="footer bg-white shadow align-self-end py-3 px-xl-5 w-100">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 text-center text-md-left text-primary">
                <p class="mb-2 mb-md-0">Nextnow &copy; 2020</p>
              </div>
              <div class="col-md-6 text-center text-md-right text-gray-400">
                <p class="mb-0">Design by <a href="" class="external text-gray-400">nextnow Website.</a></p>
                <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- ######### Modal Form ############ -->
            <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Add Profile</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
        <!-- content goes here -->
            <form action="<?php echo($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                 <h5>Display Image</h5>
                 <label for="name ">Choose Profile Image</label>
                <input type="file" class="form-control" name="profile_image"  placeholder="Choose File" required >
                
              </div>

              <hr>
              <h5>Profile</h5>
              <div class="form-group">
                <label for="name ">Email Address</label>
                <input type="text" class="form-control" name="email"  placeholder="Enter Email Address" required >
              </div>
              <div class="form-group">
                <label for="phone">Phone No.</label>
                <input type="text" class="form-control "  name="contactno"  placeholder="Enter Contact No." required >
              </div>
             <!--  <div class="form-group">
                <label for="exampleInputEmail1">Email id</label>
                <input type="email" class="form-control" name="email"  placeholder="Enter email" required>
              </div> -->
              <hr>
              <h5>Driver Document</h5>
              <div class="form-group">
                <label for="address">Driving Licence Number</label>
                <input type="text" class="form-control" name="driving_licence_number"  placeholder="Enter Driving Licence Number" required=>
              </div>
              <div class="form-group">
                <label for="pincode">Driver Licence Expiry Date</label>
                <input type="tel" class="form-control" name="driver_licence_expiry_date"  placeholder="Enter Driver Licence Expiry Date" id="datepicker2" value="mm/dd/yyyy">
              </div>
              <hr>
              <h5>Driver vehicle</h5>
               <div class="form-group">
                <label for="locality">Model</label>
                <select  class="form-control" name="driver_vehicle_model" placeholder="Enter Year">
                  <option selected> Choose </option>
                    <?php 
                       for($i = 1950 ; $i < date('Y'); $i++){
                          echo "<option>$i</option>";
                       }
                    ?>
                    </select>
               <!--  <input type="text" class="form-control" name="driver_vehicle_model"  placeholder="Enter Model"> -->
              </div>
              <div class="form-group">
                 <label for="city">Year</label>
                <select  class="form-control" name="driver_year" placeholder="Enter Year">
                  <option selected> Choose </option>
                    <?php 
                       for($i = 1950 ; $i < date('Y'); $i++){
                          echo "<option>$i</option>";
                       }
                    ?>
                    </select>
               
               <!--  <input type="text" class="form-control" name="driver_vehicle_year" placeholder="Enter Year"> -->
              </div>
               <div class="form-group">
                <label for="district">Number plate</label>
                <input type="text" class="form-control" name="driver_vehicle_numberplate"  placeholder="Enter number plate">
              </div> 
              <div class="form-group">
                <label for="state">Seats</label>
                <select class="form-control"  name="driver_seats">
                              <option selected> Choose </option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                            </select>
                <!-- <input type="text" class="form-control" name="driver_vehicle_seats" placeholder="Enter seats" required> -->
              </div>

              <hr>
              <h5> vehicle Information</h5>
               <div class="form-group">
                <label for="locality"> Vehicle Brand</label>
                <input type="text" class="form-control" name="vehicle_brand"  placeholder="Enter Brand">
              </div>
              <div class="form-group">
                <label for="locality"> 
Vehicle disc control number Licence</label>
                <input type="text" class="form-control" name="
vehicle_disc_licence"  placeholder="Enter
vehicle disc control number Licence">
              </div>
               <div class="form-group">
                <label for="locality"> Vehicle licence Expire date</label>
                <input type="text" class="form-control" name="
vehicle_licence_expire_date"  placeholder="Enter
Vehicle licence Expire date" id="datepicker" value="mm/dd/yyyy">
              </div>
              <div class="form-group">
                 <label for="city">Vehicle Year</label>
                <select  class="form-control" name="vehicle_year" placeholder="Enter Year">
                  <option selected> Choose </option>
                    <?php 
                       for($i = 1950 ; $i < date('Y'); $i++){
                          echo "<option>$i</option>";
                       }
                    ?>
                    </select>
               
               <!--  <input type="text" class="form-control" name="driver_vehicle_year" placeholder="Enter Year"> -->
              </div>
               <div class="form-group">
                <label for="district">Registration Number plate</label>
                <input type="text" class="form-control" name="vehicle_registration_numberplate"  placeholder="Enter number plate">
              </div> 
              <div class="form-group">
                <label for="state">Vehicle Seats</label>
                    <select class="form-control"  name="vehicle_seats">
                        <option selected> Choose </option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                    </select>
                <!-- <input type="text" class="form-control" name="driver_vehicle_seats" placeholder="Enter seats" required> -->
              </div>

              <div class="form-group">
                <label for="locality">Vehicle Model</label>
                <select  class="form-control" name="vehicle_model" placeholder="Enter Year">
                  <option selected> Choose </option>
                    <?php 
                       for($i = 1950 ; $i < date('Y'); $i++){
                          echo "<option>$i</option>";
                       }
                    ?>
                    </select>
               <!--  <input type="text" class="form-control" name="driver_vehicle_model"  placeholder="Enter Model"> -->
              </div>
              <div class="form-group">
                <label for="locality">Vehicle Color</label>
              
                <input type="text" class="form-control" name="vehicle_color"  placeholder="Enter Vehicle Color">
              </div>


             
              <!-- <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="jccpassword" id="exampleInputPassword1"  placeholder="Password">
              </div> -->
             
              <!-- <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" id="exampleInputFile">
                <p class="help-block">Example block-level help text here.</p>
              </div> -->
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              </div>
              
            </form>
      </div>
                  
                </div>
              </div>
            </div>


    <!-- ######### //Modal Form ########## -->


    <!-- ######### Modal Form ############ -->
            <div class="modal fade" id="BillingModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Add Billing Information</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
        <!-- content goes here -->
            <form action="<?php echo($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                 <!-- <h5>Billing Profile</h5> -->
                 <!-- <label for="name ">Choose Profile Image</label>
                <input type="file" class="form-control" name="profile_image"  placeholder="Choose File" required >
                 -->
              </div>

              <!-- <hr>
              <h5>Profile</h5> -->

              <div class="form-group">
                <label for="name ">Company Name</label>
                <input type="text" class="form-control" name="company_name"  placeholder="Enter Comapny Name" required >
              </div>
              <div class="form-group">
                <label for="phone">Company email</label>
                <input type="text" class="form-control "  name="company_email"  placeholder="Enter Company Email." required >
              </div>
             <!--  <div class="form-group">
                <label for="exampleInputEmail1">Email id</label>
                <input type="email" class="form-control" name="email"  placeholder="Enter email" required>
              </div> -->
              <!-- <hr>
              <h5>Driver Document</h5> -->
              <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" name="address"  placeholder="Enter Address" required=>
              </div>
              <div class="form-group">
                <label for="pincode">Business Registration Code</label>
                <input type="tel" class="form-control" name="business_registration_code"  placeholder="Enter Business Registration Code">
              </div>
              <!-- <hr>
              <h5>VAT no.</h5> -->
               <div class="form-group">
                <label for="locality">VAT no.</label>
                <input type="text" class="form-control" name="vat_no"  placeholder="Enter Vat NO">
              </div>
              <!-- <div class="form-group">
                <label for="city">Year</label>
                <input type="text" class="form-control" name="driver_vehicle_year" placeholder="Enter Year">
              </div>
               <div class="form-group">
                <label for="district">Number plate</label>
                <input type="text" class="form-control" name="driver_vehicle_numberplate"  placeholder="Enter number plate">
              </div> 
              <div class="form-group">
                <label for="state">Seats</label>
                <input type="text" class="form-control" name="driver_vehicle_seats" placeholder="Enter seats" required>
              </div> -->
             
              <!-- <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="jccpassword" id="exampleInputPassword1"  placeholder="Password">
              </div> -->
             
              <!-- <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" id="exampleInputFile">
                <p class="help-block">Example block-level help text here.</p>
              </div> -->
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="bsubmit" class="btn btn-primary">Submit</button>
              </div>
              
            </form>
      </div>
                  
                </div>
              </div>
            </div>


    <!-- ######### //Modal Form ########## -->



    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script> -->
    <script src="js/charts-home.js"></script>
    <script src="js/front.js"></script>

      <!-- ===================================== -->
    <script src= "https://chat.fuguchat.com/js/widget.js"></script> 
        <script> 
            window.fuguInit({ 
            appSecretKey: "8b32cbc19add92c57a18bd917f771b4e"
            }); 
        </script>

        <!--  ################ Calender ###############-->
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
        $( function() {
          $( "#datepicker,#datepicker2" ).datepicker();
        } );
        </script>

       </script>
        
<!-- ############ //Calender ############################-->
  </body>
</html>
<?php } ?>