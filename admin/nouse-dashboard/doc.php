<!-- 7350fc -->
<?php

session_start();
// include('session.php');
//require_once ("../login/connection.php" );
// if(isset($_POST["submit"]))
// {
//   $getImage=  basename($_FILES["photo"]["name"]);
//    // $getsubimg=  basename($_FILES["subimage_btn"]["name"]);
//     if($getImage==""){
//        echo "<script type='text/javascript'>alert('Please Choose Image!')</script>";
//     }
  // 
  
//       $target="photo_img/";
//         //$ran=time();
//         $target=$target.$getImage;
//         $photo=$getImage;
// // echo "$photo";
        
//         if($_FILES["photo"]["type"] =="image/jpg"||$_FILES["photo"]["type"]=="image/jpeg" || $_FILES["photo"]["type"]=="image/png")
//         {
//             $move = move_uploaded_file($_FILES["photo"]["tmp_name"], $target);
//             if($move){
//                 include_once 'action.php';
//               // $DocumentClass=new DocumentClass();
//                // echo $getsubImage;
//                //$DocumentClass->uploadfile($_SESSION['uid'],$photo,$_POST["name"],$_POST["contactno"],$_POST["email"],$_POST["address"],$_POST["state"]);
              
//             }
//             else
//             {
//                 echo "<script type='text/javascript'>alert('File Not Uploded.!')</script>";
//             }
//         }
//         else
//         {
//            echo "<script type='text/javascript'>alert('Please Choose Image format in JPEG,Gif,PNG!')</script>";
//         }
  
  
// }

// if (isset($_POST["submit"])) 
// {
//   include 'driver_license_action.php';
//   include 'driver_photo_action.php';
//   include 'vehicle_license_action.php';
//   include 'registration_certificate_action.php';
//   include 'vehicle_inspection_action.php';
//   include 'signed_eme_affidavit_action.php';
//   include 'operating_license_action.php';
  
//    $getDImage=  basename($_FILES["driver_id_document"]["name"]);
//   // $getLImage=  basename($_FILES["licencephoto"]["name"]);
//     if($getDImage ==""){
//        echo "<script type='text/javascript'>alert('Please Choose Image!')</script>";
//     }
  
  
//       $target="photo_img/";
        
//         $target=$target.$getDImage;
//         $DIphoto=$getDImage;
//       // echo "$Cphoto";

//        // $LImage = $getLImage;
//        // echo "$LImage";

//         if( $_FILES["driver_id_document"]["type"] =="image/jpg" || $_FILES["driver_id_document"]["type"]=="image/jpeg" || $_FILES["driver_id_document"]["type"]=="image/png")
//         {
            
//             $move = move_uploaded_file( $_FILES["driver_id_document"]["tmp_name"], $target);
//             if($move){
//                 include_once 'action.php';
                
//                $DocSummaryClass=new DocSummaryClass();
               
//                $DocSummaryClass->docuploadfile($_SESSION['uid'],$DIphoto,
//                 $DLImage,$DPImage,$VLImage,$RCImage,$VIImage,
//                 $SEAImage,$OLImage);
              
//             }
//             else
//             {
//                 echo "<script type='text/javascript'>alert('File Not Uploded.!')</script>";
//             }
//         }
//         else
//         {
//            echo "<script type='text/javascript'>alert('Please Choose Image format in JPEG,Gif,PNG!')</script>";
//         }
  
// }

?>
<?php
//session_start();

// if(strlen($_SESSION['uid'])=="")
// {
//   header('location:../login/login.php');
// } else {



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

.document-container{
  border: 1px dotted #d3d3d3;
    border-radius: 10px;
    padding: 15px 20px;
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
              <li class="sidebar-list-item"><a href="doc.php" class="sidebar-link text-muted">
                <img src="img/Png/Rand_Money.png" class="img-responsive mr-3"><span>doc</span></a></li>
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
                      <h6 class="mb-0">Document Dashboard</h6><!-- <span class="text-gray">145,14 GB</span> -->
                    </div>
                  </div>
                  <div class="icon text-white bg-violet"><i class="fas fa-server"></i></div>
                </div>
              </div>
              
            </div>
            <div class="float-right">
               <!--  <button type="button" class="btn btn-outline-primary btn-circle float-right " data-toggle="modal" data-target="#largeModal" aria-haspopup="true" aria-expanded="true">
                    Add Document
                </button> -->
          </div>
          </section>
          <section>
           
<!---->        <!--  <div class="dashhead">
                  <h3 class="dashhead-title">My Documents</h3>
                  <p>Here are documents associated with your driver profile.</p>
                </div>
      -->

            <?php
            require_once('../../login/connection.php');
                  // ../../dashboard/action.php
             // $file='admin/dashboard/doc.php';
             // print_r($file);
             include("../../dashboard/action.php");

                // include_once('../driver-dashboard/dashboard/action.php');
            // include("../action.php");
                //$sql=$fetchdata->fetchdata();
                $DocSummaryClass= new DocSummaryClass();
                $sql=$DocSummaryClass->listdocsummary();
                //$cnt=1;
                $row = mysqli_fetch_array($sql);

              ?>

                
            <div class="row mb-4">
              <div class="col-lg-7 mb-4 mb-lg-0">
                <div class="card">
                  <div class="card-header">
                    <h3 class="h6 text-uppercase mb-0">Driver ID document/Passport</h3>
                    <span class="text-danger float-right">Required *</span>
                  </div>
                  <div class="card-body">
                      <p class="text-black">Upload your South African ID card or book. If you don't have a South African ID, upload your Passport..</p>
                    <!-- <div class="chart-holder">
                      <canvas id="lineChart1" style="max-height: 14rem !important;" class="w-100"></canvas>
                    </div> -->
                          <div class="row">
                            <div class="col-xs-12">
                              <label>Verified document</label>
                            </div>
                          </div>

                          <div id="ember262" class="row ember-view">
                            <div class="col-xs-12">
                                    <p>
                                      <a href="img scr=photo_img/<?php echo $row
                                        ['driver_id_document']; ?> " target='_self' >
                                        <span class="icon icon-text-document"></span> 
                                       
                                        <img  class="img-trigger" src="photo_img/<?php echo $row['driver_id_document'];?>" width=100 height=100 data-zoom-image="photo_img/<?php echo $row['photo'];?>" id="zoom">  
                                      </a>
                                    </p>
                                <p>Uploaded: <?php echo $row['uploaded_date'];?></p>
                            </div>
                          </div>
                          <hr>

                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                  <form method="POST">
                                     <form-group>
                                            <div class="form-inline">
                                              </div>
                                                <!-- <label for="file-input-dd7b2" id="ember259" class="float-left file-upload ember-view">
                                                  <input id="file-input-dd7b2" hidden="" type="file">    
                                                  <span type="button" class="btn btn-primary btn-lg oi oi-plus">Upload file</span>
                                                </label>  -->  
                                                <div class="form-inline">
                                              </div>
                                                <!-- <label for="file-input-dd7b2" id="ember259" class="float-right  ember-view">
                                                <button type="submit" name="submit" class="btn btn-primary">Submit</button> 
                                                </label> -->       
                                      </form-group>
                                  </form>
                                </div>
                            </div>

                    </div>  <!--  //card-body -->
                  </div> <!--  //card -->
              </div>

              <div class="col-lg-5 mb-4 mb-lg-0">
                <div class="card">
                  <div class="card-header">
                    <h3 class="h6 text-uppercase mb-0">Driver's License (PrDP)</h3>
                    <!-- <span class="text-danger float-right">Required *</span> -->
                    <br>
                  </div>
                  <div class="card-body">
                      <p class="text-black">Should be Prof. driving permit that hasn't expired..</p>
                    <!-- <div class="chart-holder">
                      <canvas id="lineChart1" style="max-height: 14rem !important;" class="w-100"></canvas>
                    </div> --><br> 
                          <div class="row">
                            <div class="col-xs-12">
                              <label>Verified document</label>
                            </div>
                          </div>

                          <div id="ember262" class="row ember-view">
                            <div class="col-xs-12">
                                    <p>
                                      <a href="" role="button" data-ember-action="" data-ember-action-263="263">
                                        <span class="icon icon-text-document"></span>
                                         <?php echo $row
                                        ['driver_license']; ?>
                                      </a>
                                    </p>
                                <p>Uploaded: <?php echo $row
                                        ['uploaded_date']; ?></p>
                            </div>
                          </div>
                          <hr>

                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                  <form method="POST">
                                     <form-group>
                                            <div class="form-inline">
                                              </div>
                                                <!-- <label for="file-input-dd7b2" id="ember259" class="float-right file-upload ember-view">
                                                  <input id="file-input-dd7b2" hidden="" type="file">    
                                                  <span type="button" class="btn btn-primary btn-lg oi oi-plus">Upload file</span>
                                                </label>  -->        
                                      </form-group>
                                  </form>
                                </div>
                            </div>

                    </div>  <!--  //card-body -->
                  </div> <!--  //card -->
              </div>

            </div>
            
            <!-- panel-2 -->
            <div class="row mb-4">
              <div class="col-lg-7 mb-4 mb-lg-0">
                <div class="card">
                  <div class="card-header">
                    <h3 class="h6 text-uppercase mb-0">Driver Photo</h3>
                    <!-- <span class="text-danger float-right">Required *</span> --><br>
                  </div>
                  <div class="card-body">
                      <p class="text-black">Must be on a clear white background. If you don't provide, we can take it during training session..</p>
                    <!-- <div class="chart-holder">
                      <canvas id="lineChart1" style="max-height: 14rem !important;" class="w-100"></canvas>
                    </div> -->
                          <div class="row">
                            <div class="col-xs-12">
                              <label>Verified document</label>
                            </div>
                          </div>

                          <div id="ember262" class="row ember-view">
                            <div class="col-xs-12">
                                    <p>
                                      <a href="" role="button" data-ember-action="" data-ember-action-263="263">
                                        <span class="icon icon-text-document"></span> 
                                        <?php echo $row
                                        ['driver_photo']; ?>
                                      </a>
                                    </p>
                                <p>Uploaded: <?php echo $row
                                        ['uploaded_date']; ?></p>
                            </div>
                          </div><br>
                          <hr>

                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                  <form method="POST">
                                     <form-group>
                                            <div class="form-inline">
                                              </div>
                                               <!--  <label for="file-input-dd7b2" id="ember259" class="float-right file-upload ember-view">
                                                  <input id="file-input-dd7b2" hidden="" type="file">    
                                                  <span type="button" class="btn btn-primary btn-lg oi oi-plus">Upload file</span>
                                                </label>  -->        
                                      </form-group>
                                  </form>
                                </div>
                            </div>

                    </div>  <!--  //card-body -->
                  </div> <!--  //card -->
              </div>

              <div class="col-lg-5 mb-4 mb-lg-0">
                <div class="card">
                  <div class="card-header">
                    <h3 class="h6 text-uppercase mb-0">Motor Vehicle License Disc with Operator Card</h3>
                    <!-- <span class="text-danger float-right">Required *</span> -->
                  </div>
                  <div class="card-body">
                      <p class="text-black">Ensure that both discs are shown. One disc is "License Disc and Roadworthy Certificate" and another one "Operator Card"..</p>
                    <!-- <div class="chart-holder">
                      <canvas id="lineChart1" style="max-height: 14rem !important;" class="w-100"></canvas>
                    </div> -->
                          <div class="row">
                            <div class="col-xs-12">
                              <label>Verified document</label>
                            </div>
                          </div>

                          <div id="ember262" class="row ember-view">
                            <div class="col-xs-12">
                                    <p>
                                      <a href="" role="button" data-ember-action="" data-ember-action-263="263">
                                        <span class="icon icon-text-document"></span>
                                         <?php echo $row
                                        ['vehicle_license']; ?>
                                      </a>
                                    </p>
                                <p>Uploaded: <?php echo $row
                                        ['uploaded_date']; ?></p>
                            </div>
                          </div>
                          <hr>

                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                  <form method="POST">
                                     <form-group>
                                            <div class="form-inline">
                                              </div>
                                               <!--  <label for="file-input-dd7b2" id="ember259" class="float-right file-upload ember-view">
                                                  <input id="file-input-dd7b2" hidden="" type="file">    
                                                  <span type="button" class="btn btn-primary btn-lg oi oi-plus">Upload file</span>
                                                </label>  -->        
                                      </form-group>
                                  </form>
                                </div>
                            </div>

                    </div>  <!--  //card-body -->
                  </div> <!--  //card -->
              </div>
            </div>
            <!-- //panel-2 -->
            
            <!-- panel-3-->
             <div class="row mb-4">
              <div class="col-lg-7 mb-4 mb-lg-0">
                <div class="card">
                  <div class="card-header">
                    <h3 class="h6 text-uppercase mb-0">Certificate of Registration for your car</h3>
                    <span class="text-danger float-right">Required *</span>
                  </div>
                  <div class="card-body">
                      <p class="text-black">Vehicle certificate of registration indicating car model and year of first registration..</p>
                    <!-- <div class="chart-holder">
                      <canvas id="lineChart1" style="max-height: 14rem !important;" class="w-100"></canvas>
                    </div> -->
                          <div class="row">
                            <div class="col-xs-12">
                              <label>Verified document</label>
                            </div>
                          </div>

                          <div id="ember262" class="row ember-view">
                            <div class="col-xs-12">
                                    <p>
                                      <a href="" role="button" data-ember-action="" data-ember-action-263="263">
                                        <span class="icon icon-text-document"></span> 
                                        <?php echo $row
                                        ['registration_certificate']; ?>
                                      </a>
                                    </p>
                                <p>Uploaded: <?php echo $row
                                        ['uploaded_date']; ?></p>
                            </div>
                          </div>
                          <hr>

                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                  <form method="POST">
                                     <form-group>
                                            <div class="form-inline">
                                              </div>
                                               <!--  <label for="file-input-dd7b2" id="ember259" class="float-right file-upload ember-view">
                                                  <input id="file-input-dd7b2" hidden="" type="file">    
                                                  <span type="button" class="btn btn-primary btn-lg oi oi-plus">Upload file</span>
                                                </label>   -->       
                                      </form-group>
                                  </form>
                                </div>
                            </div>

                    </div>  <!--  //card-body -->
                  </div> <!--  //card -->
              </div>

              <div class="col-lg-5 mb-4 mb-lg-0">
                <div class="card">
                  <div class="card-header">
                    <h3 class="h6 text-uppercase mb-0">Vehicle Inspection Report</h3>
                    <!-- <span class="text-danger float-right">Required *</span> -->
                  </div>
                  <div class="card-body">
                      <p class="text-black">The inspection report has to be performed for all vehicle applications and must not be older than 3 months. <!-- <strong>Visit an approved partner near you</strong>:<a href="https://www.raspberryone.co.za/findPartner" target="_blank" rel="noreferrer noopener">Raspberryone Centers - click here</a><strong>Your inspection report will automatically be submitted to Bolt once complete</strong> --></p>
                    <!-- <div class="chart-holder">
                      <canvas id="lineChart1" style="max-height: 14rem !important;" class="w-100"></canvas>
                    </div> -->
                          <div class="row">
                            <div class="col-xs-12">
                              <label>Verified document</label>
                            </div>
                          </div>

                          <div id="ember262" class="row ember-view">
                            <div class="col-xs-12">
                                    <p>
                                      <a href="" role="button" data-ember-action="" data-ember-action-263="263">
                                        <span class="icon icon-text-document"></span> 
                                        <?php echo $row
                                        ['vehicle_inspection']; ?>
                                      </a>
                                    </p>
                                <p>Uploaded: <?php echo $row
                                        ['uploaded_date']; ?></p>
                            </div>
                          </div>
                          <hr>

                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                  <form method="POST">
                                     <form-group>
                                            <div class="form-inline">
                                              </div>
                                               <!--  <label for="file-input-dd7b2" id="ember259" class="float-right file-upload ember-view">
                                                  <input id="file-input-dd7b2" hidden="" type="file">    
                                                  <span type="button" class="btn btn-primary btn-lg oi oi-plus">Upload file</span>
                                                </label> -->         
                                      </form-group>
                                  </form>
                                </div>
                            </div>

                    </div>  <!--  //card-body -->
                  </div> <!--  //card -->
              </div>
            </div>

            <!-- //panel-3 -->
            <!-- panel-4 -->

            <div class="row mb-4">
              <div class="col-lg-7 mb-4 mb-lg-0">
                <div class="card">
                  <div class="card-header">
                    <h3 class="h6 text-uppercase mb-0">Signed EME Affidavit</h3>
                    <!-- <span class="text-danger float-right">Required *</span> -->
                  </div>
                  <div class="card-body">
                      <p class="text-black">By submitting an Exempt Micro Entity (EME) affidavit form, you automatically qualify for a Level-1 BEE rating. <br><br><a href="https://bit.ly/3k71JkM" target="_blank" rel="noreferrer noopener">Click here</a> to obtain the form <br><br>For instructions and how to complete the form and for more information regarding EME registration <a href="https://support.taxify.eu/hc/en-us/articles/360016340600-Exempt-Micro-Entity-Affidavit" target="_blank" rel="noreferrer noopener">click here</a>.</p>
                    <!-- <div class="chart-holder">
                      <canvas id="lineChart1" style="max-height: 14rem !important;" class="w-100"></canvas>
                    </div> -->
                          <div class="row">
                            <div class="col-xs-12">
                              <label>Verified document</label>
                            </div>
                          </div>

                          <div id="ember262" class="row ember-view">
                            <div class="col-xs-12">
                                    <p>
                                      <a href="" role="button" data-ember-action="" data-ember-action-263="263">
                                        <span class="icon icon-text-document"></span> 
                                        <?php echo $row
                                        ['signed_eme_affidavit']; ?>
                                      </a>
                                    </p>
                                <p>Uploaded:<?php echo $row
                                        ['uploaded_date']; ?></p>
                            </div>
                          </div>
                          <hr>

                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                  <form method="POST">
                                     <form-group>
                                            <div class="form-inline">
                                              </div>
                                                <!-- <label for="file-input-dd7b2" id="ember259" class="float-right file-upload ember-view">
                                                  <input id="file-input-dd7b2" hidden="" type="file">    
                                                  <span type="button" class="btn btn-primary btn-lg oi oi-plus">Upload file</span>
                                                </label>  -->        
                                      </form-group>
                                  </form>
                                </div>
                            </div>

                    </div>  <!--  //card-body -->
                  </div> <!--  //card -->
              </div>

              <div class="col-lg-5 mb-4 mb-lg-0">
                <div class="card">
                  <div class="card-header">
                    <h3 class="h6 text-uppercase mb-0">Operating License</h3>
                    <!-- <span class="text-danger float-right">Required *</span> -->
                  </div>
                  <div class="card-body">
                      <p class="text-black">Obtained from the Department of Transport in JHB or Pretoria.. <!-- <strong>Visit an approved partner near you</strong>:<a href="https://www.raspberryone.co.za/findPartner" target="_blank" rel="noreferrer noopener">Raspberryone Centers - click here</a><strong>Your inspection report will automatically be submitted to Bolt once complete</strong> --><br><br></p>
                    <!-- <div class="chart-holder">
                      <canvas id="lineChart1" style="max-height: 14rem !important;" class="w-100"></canvas>
                    </div> --><br>
                          <div class="row">
                            <div class="col-xs-12">
                              <label>Verified document</label>
                            </div>
                          </div>

                          <div id="ember262" class="row ember-view">
                            <div class="col-xs-12">
                                    <p>
                                      <a href="" role="button" data-ember-action="" data-ember-action-263="263">
                                        <span class="icon icon-text-document"></span> 
                                        <?php echo $row
                                        ['operating_license']; ?>
                                      </a>
                                    </p>
                                    <br>
                                <p>Uploaded: <?php echo $row
                                        ['uploaded_date']; ?></p>
                            </div>
                          </div><br><br><br>
                          <hr>

                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                  <form method="POST">
                                     <form-group>
                                            <div class="form-inline">
                                              </div>
                                               <!--  <label for="file-input-dd7b2" id="ember259" class="float-right file-upload ember-view">
                                                  <input id="file-input-dd7b2" hidden="" type="file">    
                                                  <span type="button" class="btn btn-primary btn-lg oi oi-plus">Upload file</span>
                                                </label>  -->        
                                      </form-group>
                                  </form>
                                </div>
                            </div>

                    </div>  <!--  //card-body -->
                  </div> <!--  //card -->
              </div>

            </div>
           


            <!-- //panel-4 -->
      

                    <!-- <div id="ember251" class="row col-md-9 ember-view">
                      <div class="document-container m-t">
                        <div class="row">
                          <div class="col-xs-12">
                            <h3 class="float-left">Driver ID document/Passport</h3>
                            <span class="text-danger pull-right">Required *</span>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-12 mb-4">
                            <p >Upload your South African ID card or book. If you don't have a South African ID, upload your Passport.</p>
                          </div>
                        </div>

                     
                        <div id="ember252" class="form-group-lg ember-view">  
                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                  <form method="POST">
                                     <form-group>
                                            <div class="form-inline">
                                              </div>
                                                <label for="file-input-dd7b2" id="ember259" class="float-right file-upload ember-view">
                                                  <input id="file-input-dd7b2" hidden="" type="file">    
                                                  <span type="button" class="btn btn-primary btn-lg oi oi-plus">Upload fiel</span>
                                                </label>         
                                      </form-group>
                                  </form>
                                </div>
                            </div>
                          </div>

                      </div>
                    </div><br> -->

                    <!-- <div id="ember251" class="row col-md-9 ember-view">
                      <div class="document-container m-t">
                        <div class="row">
                          <div class="col-xs-12">
                            <h3 class="float-left">Driver's License (PrDP)</h3>
                            
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-12  mb-4">
                            <p >Should be Prof. driving permit that hasn't expired.</p>
                          </div>
                        </div>

                     
                        <div id="ember252" class="form-group-lg ember-view">  
                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                  <form method="POST">
                                     <form-group>
                                            <div class="form-inline">
                                              </div>
                                                <label for="file-input-dd7b2" id="ember259" class="float-right file-upload ember-view">
                                                  <input id="file-input-dd7b2" hidden="" type="file">    
                                                  <span type="button" class="btn btn-primary btn-lg oi oi-plus">Upload fiel</span>
                                                </label>         
                                         </form-group>
                                  </form>
                                </div>
                            </div>
                          </div>

                      </div>
                    </div><br> -->

                    <!-- <div id="ember255" class="row col-md-9 ember-view">
                      <div class="document-container m-t">
                          <div class="row">
                            <div class="col-xs-12">
                                  <h3 class="pull-left">Driver's License (PrDP)</h3>
                                  
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-12">
                                <p>Should be Prof. driving permit that hasn't expired.</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-12">
                                <label>Verified document</label>
                            </div>
                          </div>

                          <div id="ember256" class="row ember-view">
                            <div class="col-xs-12">
                                <p>
                                    <a href="" role="button" data-ember-action="" data-ember-action-257="257">
                                        <span class="icon icon-text-document"></span> IMG_3730.JPG
                                    </a>
                                </p>
                                <p>Uploaded: 8/21/2019</p>
                            </div>
                          </div>
                                  <hr>

                            
                                <div id="ember258" class="form-group-lg ember-view">   
                                  <div class="row">
                                      <div class="col-xs-12 col-sm-12">
                                        <form method="POST">
                                           <form-group>
                                            <div class="form-inline">
                                                </div>
                                                <label for="file-input-dd7b2" id="ember259" class="float-right file-upload ember-view">
                                                  <input id="file-input-dd7b2" hidden="" type="file">    
                                                  <span type="button" class="btn btn-primary btn-lg oi oi-plus">Upload-1</span>
                                                </label>         
                                         </form-group>
                                        </form>
                                      </div>
                                  </div>
                                </div>

                      </div>
                    </div><br> -->

                    <!-- <div id="ember261" class="row col-md-9 ember-view"><div class="document-container m-t">
                      <div class="row">
                       <div class="col-xs-12">
                          <h3 class="pull-left">Driver Photo</h3>
                          
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12">
                          <p>Must be on a clear white background. If you don't provide, we can take it during training session.</p>
                        </div>
                      </div>

                      
                          <div class="row">
                            <div class="col-xs-12">
                              <label>Verified document</label>
                            </div>
                          </div>

                          <div id="ember262" class="row ember-view">
                            <div class="col-xs-12">
                                    <p>
                                      <a href="" role="button" data-ember-action="" data-ember-action-263="263">
                                        <span class="icon icon-text-document"></span> jDkUO2lvCsSTcC8liXOME4LF.jpg
                                      </a>
                                    </p>
                                <p>Uploaded: 10/16/2020</p>
                            </div>
                          </div>
                          <hr>

                
                        <div id="ember264" class="form-group-lg ember-view">  
                            <div class="row">
                              <div class="col-xs-12 col-sm-12">
                                <form method="POST">
                                     <form-group>
                                            <div class="form-inline">
                                              </div>
                                                <label for="file-input-dd7b2" id="ember259" class="float-right file-upload ember-view">
                                                  <input id="file-input-dd7b2" hidden="" type="file">    
                                                  <span type="button" class="btn btn-primary btn-lg oi oi-plus">Upload fiel</span>
                                                </label>         
                                      </form-group>
                                </form>
                              </div>
                            </div>
                        </div>

                    </div></div>
                    <br> -->
                    <!-- <div id="ember267" class="row col-md-9 ember-view"><div class="document-container m-t">
                      <div class="row">
                        <div class="col-xs-12">
                          <h3 class="pull-left">Motor Vehicle License Disc with Operator Card</h3>
                          
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12">
                          <p>Ensure that both discs are shown. One disc is "License Disc and Roadworthy Certificate" and another one "Operator Card".</p>
                        </div>
                      </div>

                      
                          <div class="row">
                            <div class="col-xs-12">
                              <label>Verified document</label>
                            </div>
                          </div>

                          <div id="ember268" class="row ember-view"><div class="col-xs-12">
                        <p>
                          <a href="" role="button" data-ember-action="" data-ember-action-269="269">
                            <span class="icon icon-text-document"></span> mLyK4BmqYOpSKoMkGcWOSOvz.jpg
                          </a>
                       </p>
                        <p>Uploaded: 10/18/2020</p>
                    </div></div>
                          <hr>

                    
                        <div id="ember270" class="form-group-lg ember-view">    
                          <div class="row">
                          <div class="col-xs-12 col-sm-12">
                            <form method="POST">
                               <form-group>
                                        <div class="form-inline">
                                        </div>
                                          <label for="file-input-dd7b2" id="ember259" class="float-right file-upload ember-view">
                                              <input id="file-input-dd7b2" hidden="" type="file">    
                                              <span type="button" class="btn btn-primary btn-lg oi oi-plus">Upload fiel</span>
                                          </label>         
                                      </form-group>
                            </form>
                          </div>
                        </div>
                    </div>

                    </div></div>
                    <br> -->
<!-- <div id="ember273" class="row col-md-9 ember-view"><div class="document-container m-t">
  <div class="row">
    <div class="col-xs-12">
      <h3 class="pull-left">Certificate of Registration for your car</h3>
      <span class="text-danger pull-right">Required *</span>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12">
      <p>Vehicle certificate of registration indicating car model and year of first registration.<br><br><a href="https://sites.google.com/bolt.eu/bolt-news/cor-signup-page" target="_blank" rel="noreferrer noopener">What is a certificate of registration? - Click here.</a></p>
    </div>
  </div>

  
  <br>

    <div id="ember274" class="form-group-lg ember-view">    <div class="row">
      <div class="col-xs-12 col-sm-12">
        <form method="POST">
     <form-group>
                <div class="form-inline">
                </div>
                    <label for="file-input-dd7b2" id="ember259" class="float-right file-upload ember-view">
                    <input id="file-input-dd7b2" hidden="" type="file">    
                    <span type="button" class="btn btn-primary btn-lg oi oi-plus">Upload fiel</span>
                    </label>         
            </form-group>
        </form>
      </div>
    </div>
</div>

</div></div>
<br> -->


<!-- <div id="ember277" class="row col-md-9 ember-view"><div class="document-container m-t">
  <div class="row">
  <div class="col-xs-12">
      <h3 class="pull-left">Vehicle Inspection Report</h3>
      
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12">
      <p>The inspection report has to be performed for all vehicle applications and must not be older than 3 months. <strong>Visit an approved partner near you</strong>: <br><br><a href="https://www.raspberryone.co.za/findPartner" target="_blank" rel="noreferrer noopener">Raspberryone Centers - click here</a><br><br><strong>Your inspection report will automatically be submitted to Bolt once complete</strong></p>
    </div>
  </div>

  
    <div id="ember278" class="form-group-lg ember-view">    <div class="row">
      <div class="col-xs-12 col-sm-12">
        <form method="POST">
      <form-group>
                  <div class="form-inline">
                    </div>
                      <label for="file-input-dd7b2" id="ember259" class="float-right file-upload ember-view">
                        <input id="file-input-dd7b2" hidden="" type="file">    
                        <span type="button" class="btn btn-primary btn-lg oi oi-plus">Upload fiel</span>
                      </label>         
              </form-group>
        </form>
      </div>
    </div>
</div>

</div></div>
<br> -->
<!-- <div id="ember281" class="row col-md-9 ember-view"><div class="document-container m-t">
  <div class="row">
   <div class="col-xs-12">
      <h3 class="pull-left">Operating License</h3>
      
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12">
      <p>Obtained from the Department of Transport in JHB or Pretoria.</p>
    </div>
  </div>

 
    <div id="ember282" class="form-group-lg ember-view">    <div class="row">
      <div class="col-xs-12 col-sm-12">
        <form method="POST">
     <form-group>
                <div class="form-inline">
                 </div>
                <label for="file-input-dd7b2" id="ember259" class="float-right file-upload ember-view">
                <input id="file-input-dd7b2" hidden="" type="file">    
                <span type="button" class="btn btn-primary btn-lg oi oi-plus">Upload fiel</span>
                </label>         
            </form-group>
        </form>
      </div>
    </div>
</div>

</div></div>
<br> -->

<!-- <div id="ember285" class="row col-md-9 ember-view">
  <div class="document-container m-t">
  <div class="row">
    <div class="col-xs-12">
      <h3 class="pull-left">Signed EME Affidavit</h3>
      
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12">
      <p>By submitting an Exempt Micro Entity (EME) affidavit form, you automatically qualify for a Level-1 BEE rating. <br><br><a href="https://bit.ly/3k71JkM" target="_blank" rel="noreferrer noopener">Click here</a> to obtain the form <br><br>For instructions and how to complete the form and for more information regarding EME registration <a href="https://support.taxify.eu/hc/en-us/articles/360016340600-Exempt-Micro-Entity-Affidavit" target="_blank" rel="noreferrer noopener">click here</a></p>
    </div>
  </div>

    <div id="ember286" class="form-group-lg ember-view">   
     <div class="row">
      <div class="col-xs-12 col-sm-12">
        <form method="POST">
     <form-group>
                <div class="form-inline">
                </div>
                <label for="file-input-dd7b2" id="ember259" class="float-right file-upload ember-view">
                  <input id="file-input-dd7b2" hidden="" type="file">    
                  <span type="button" class="btn btn-primary btn-lg oi oi-plus">Upload fiel</pan>
                </label>         
            </form-group>
        </form>
      </div>
    </div>
</div>

</div>
</div><br> -->
      
            
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
              <div class="col-lg-12 message card px-5 py-3 mb-4  no-anchor-style">
                  <div class="row">
                    
                    <div class="col-lg-9 d-flex align-items-center flex-column flex-lg-row text-center text-md-left">
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
                    <h4 class="modal-title" id="myModalLabel">Add Document</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <!-- content goes here -->
                        <form action="<?php echo($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data">
                          <div class="form-group">
                             <label for="name" class="h6 text-uppercase mb-0">DRIVER ID DOCUMENT/PASSPORT</label>
                            <input type="file" class="form-control" name="driver_id_document"  placeholder="Choose File" required >
                            
                          </div>
                          <div class="form-group">
                             <label for="name" class="h6 text-uppercase mb-0">DRIVER'S LICENSE (PRDP)</label>
                            <input type="file" class="form-control" name="driver_license"  placeholder="Choose File" required >
                            
                          </div>
                          <div class="form-group">
                             <label for="name" class="h6 text-uppercase mb-0">DRIVER PHOTO</label>
                            <input type="file" class="form-control" name="driver_photo"  placeholder="Choose File" required >
                            
                          </div>
                          <div class="form-group">
                             <label for="name" class="h6 text-uppercase mb-0">MOTOR VEHICLE LICENSE DISC WITH OPERATOR CARD</label>
                            <input type="file" class="form-control" name="vehicle_license"  placeholder="Choose File" required >
                            
                          </div>
                         <div class="form-group">
                             <label for="name" class="h6 text-uppercase mb-0">CERTIFICATE OF REGISTRATION FOR YOUR CAR</label>
                            <input type="file" class="form-control" name="registration_certificate"  placeholder="Choose File" required >
                            
                          </div>
                          <div class="form-group">
                             <label for="name" class="h6 text-uppercase mb-0">VEHICLE INSPECTION REPORT</label>
                            <input type="file" class="form-control" name="vehicle_inspection"  placeholder="Choose File" required >
                            
                          </div>
                          <div class="form-group">
                             <label for="name" class="h6 text-uppercase mb-0">SIGNED EME AFFIDAVIT</label>
                            <input type="file" class="form-control" name="signed_eme_affidavit"  placeholder="Choose File" required >
                            
                          </div>
                          <!-- <div class="form-group">
                            <label for="locality">Locality</label>
                            <input type="text" class="form-control" name="locality"  placeholder="Enter Locality">
                          </div>
                          <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" class="form-control" name="city" placeholder="Enter City">
                          </div>
                           <div class="form-group">
                            <label for="district">District</label>
                            <input type="text" class="form-control" name="district"  placeholder="Enter District">
                          </div> -->
                          <div class="form-group">
                             <label for="name " class="h6 text-uppercase mb-0">OPERATING LICENSE</label>
                            <input type="file" class="form-control" name="operating_license"  placeholder="Choose File" required >
                            
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

  </body>
</html>
<?php //} ?>