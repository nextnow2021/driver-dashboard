
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
//                $DocumentClass=new DocumentClass();
//                // echo $getsubImage;
//                $DocumentClass->uploadfile($_SESSION['uid'],$photo,$_POST["name"],$_POST["contactno"],$_POST["email"],$_POST["address"],$_POST["state"]);
              
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


// if (isset($_POST["vsubmit"])) 
// {
//   include 'vlicence_action.php';
//    $getCImage=  basename($_FILES["carphoto"]["name"]);
//   // $getLImage=  basename($_FILES["licencephoto"]["name"]);
//     if($getCImage ==""){
//        echo "<script type='text/javascript'>alert('Please Choose Image!')</script>";
//     }
  
  
//       $target="photo_img/";
        
//         $target=$target.$getCImage;
//         $Cphoto=$getCImage;
//       // echo "$Cphoto";

//        // $LImage = $getLImage;
//        // echo "$LImage";

//         if( $_FILES["carphoto"]["type"] =="image/jpg" || $_FILES["carphoto"]["type"]=="image/jpeg" || $_FILES["carphoto"]["type"]=="image/png")
//         {
            
//             $move = move_uploaded_file( $_FILES["carphoto"]["tmp_name"], $target);
//             if($move){
//                 include_once 'action.php';
                
//                $VehicleClass=new VehicleClass();
               
//                $VehicleClass->vuploadfile($_SESSION['uid'],$Cphoto,$_POST["vname"],$_POST["vcontactno"],$_POST["vemail"],$LImage,$_POST["vaddress"],
//                 $_POST["vstate"]);
              
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
    <!-- Datatables core Css -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.bootstrap4.min.css">
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

/*.geeks {
            width: 300px;
            height: 300px;
            overflow: hidden;
            margin: 0 auto;
        }
      
        .geeks img {
            width: 100%;
            transition: 0.5s all ease-in-out;
        }
      
        .geeks:hover img {
            transform: scale(1.5);
        }*/
     
        </style>
        <!-- <script src="js/jquery-1.8.3.min.js"></script> -->
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
              <div class="dropdown-divider"></div><a href="../login/logout.php" class="dropdown-item">Logout</a>
            </div>
          </li>
        </ul>
      </nav>
    </header>
    <div class="d-flex align-items-stretch">
      <div id="sidebar" class="sidebar py-3">
        <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family">MAIN</div>
        <ul class="sidebar-menu list-unstyled">
              <li class="sidebar-list-item"><a href="index.php" class="sidebar-link text-muted">
                <img src="img/Png/Home.png" class="img-responsive mr-3"><span>Home</span></a></li>
              <li class="sidebar-list-item"><a href="myvehicle.php" class="sidebar-link text-muted ">
                <img src="img/Png/Vehicle.png" class="img-responsive mr-3"><span>My Vehicle</span></a></li>
              <li class="sidebar-list-item"><a href="myrides.php" class="sidebar-link text-muted">
                <img src="img/Png/ride.png" class="img-responsive mr-3"><span>My Rides</span></a></li>
              <!-- <li class="sidebar-list-item"><a href="forms.html" class="sidebar-link text-muted"><i class="o-survey-1 mr-3 text-gray"></i><span>Forms</span></a></li> -->
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
              <li class="sidebar-list-item"><a href="mydocument.php" class="sidebar-link text-muted active">
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
              <nav>
                    <div class="nav nav-fill" id="nav-tab" role="tablist">
                      <a class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between tabs-title nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"  >
                       <div class="flex-grow-1 d-flex align-items-center">
                              <div class="dot mr-3 bg-violet"></div>
                                <div class="text ">
                                  <h6 class="mb-0">Driver Document</h6>
                              </div>
                        </div>
                      </a>
                     <!--  <a >Veg</a> -->

                      <a class=" bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between tabs-title nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">

                        <div class="flex-grow-1 d-flex align-items-center">
                              <div class="dot mr-3 bg-violet"></div>
                                <div class="text ">
                                  <h6 class="mb-0">Vehicle Document</h6><!-- <span class="text-gray">145,14 GB</span> -->
                              </div>
                        </div>                  
                      </a>
                    </div>
                  </nav>
              <!-- <div class="col-xl-3 col-lg-3 mb-4 mb-xl-0">
                <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between tabs-title">
                  <div class="flex-grow-1 d-flex align-items-center">
                    <div class="dot mr-3 bg-violet"></div>
                    <div class="text ">
                      <h6 class="mb-0">Driver Document</h6>
                    </div>
                  </div>
                  <div class="icon text-white bg-violet"><i class="fas fa-server"></i></div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-3 mb-4 mb-xl-0">
                <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                  <div class="flex-grow-1 d-flex align-items-center">
                    <div class="dot mr-3 bg-green"></div>
                    <div class="text">
                      <h6 class="mb-0"><a href="">Vehicle Document</a></h6>
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
          </section>
          <section>
            <div class="row mb-4">
              <div class="col-lg-12 mb-4 mb-lg-0">
                <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="card">
                            <div class="card-header">
                              <h2 class="h6 text-uppercase mb-0">Driver Document</h2>
                              <div>
                                      <button type="button" class="btn btn-outline-primary btn-circle float-right " data-toggle="modal" data-target="#largeModal" aria-haspopup="true" aria-expanded="true">
                                         Add Document
                                       </button>
                              </div>
                            </div>
                            <div class="card-body">
                              <!-- fetching driver Document -->
                             
                              <div class="table-responsive">
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                     <thead>
                                        <tr>
                                          <th>Driver_ID</th>
                                         
                                          <th class="col-xs-2">Photo</th>
                                          <th class="col-xs-2">Name</th>
                                          <th class="col-xs-2">ContactNo</th>
                                          <th class="col-xs-2">Email</th>
                                          <th class="col-xs-2">Address</th>
                                          <th class="col-xs-2">State</th>
                                         
                                        </tr> 
                                      </thead>
                                      
                                    <tbody>

                                       <?php
                                      include_once('fileac.php');
  //$sql=$fetchdata->fetchdata();
                                       $AdminDocumentClass= new AdminDocumentClass();
                                      $sql=$AdminDocumentClass->Adminlistdocument();
                                       $cnt=1;
                                      while($row=mysqli_fetch_array($sql))
                                      {
                                      ?>
                                      <tr>
                                           <td height="29"><?php echo $cnt;?></td> 
                                        <!--<td><?php //echo $row['driver_id'];?></td>-->
                                        
                                          <td><img  class="img-trigger" src="photo_img/<?php echo $row['photo'];?>" width=100 height=100 data-zoom-image="photo_img/<?php echo $row['photo'];?>" id="zoom"></td>
                                        
                                        
                                        <td><?php echo $row['name'];?></td>
                                        <td><?php echo $row['contactno'];?></td>
                                        <td><?php echo $row['email'];?></td>
                                        <td><?php echo $row['address'];?></td>
                                        <td><?php echo $row['state'];?></td>
                                      </tr>
                                       <?php $cnt=$cnt+1;} ?> 
            
                                    </tbody>
                                </table>
                                
                              </div> <!-- //table-responsive -->
                              <!-- ######## Image Zoom Effect ####### -->
                              <script src="js/jquery.elevateZoom-3.0.8.min.js"></script>

                              <script>
                                $("#zoom").elevateZoom();
                              </script><script src="js/jquery.elevateZoom-3.0.8.min.js"></script>

                              <script>
                                $("#zoom").elevateZoom();
                              </script>

                              <!-- ############ //Image Zoom Effect####### -->
                              <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
                              <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
                              <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js">
                              </script>
                              <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js">
                              </script>   
                              <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
                              <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js">
                              </script>
                              <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js">
                              </script>
                              <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js">
                              </script>
                              <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js">
                              </script>

                                 <script type="text/javascript">
                                    $(document).ready(function() {
                                    $('#example').DataTable({
                                       dom: 'Bfrtip',
                                        buttons: [
                                            'copy', 'csv', 'excel', 
                                        ]

                                        });
                                      });
                                  </script>
                         
                            </div> <!-- //card-body -->
                        </div>
                        
                      </div>

                          <!-- Vehicle Tab Panel -->
                
                      <div class="tab-pane fade show" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="card">
                          <div class="card-header">
                            <h2 class="h6 text-uppercase mb-0">Vehicle Document</h2>
                            <div>
                                   <!--  <button type="button" class="btn btn-outline-primary btn-circle float-right " data-toggle="modal" data-target="#vehiclelargeModal" aria-haspopup="true" aria-expanded="true">
                                       Add Document
                                     </button> -->
                            </div>
                          </div>
                          <div class="card-body">
                             <!-- fetching driver Document -->
                             
                              <div class="table-responsive">
                                <table id="example1" class="table table-striped table-bordered" style="width:100%">
                                     <thead>
                                        <tr>
                                          <th>Vehicle_ID</th>
                                         
                                          <th class="col-xs-2">Photo</th>
                                           <th class="col-xs-2">Name</th>
                                          
                                          <th class="col-xs-2">ContactNo</th>
                                          <th class="col-xs-2">Email</th>
                                          <th class="col-xs-2">Licence Copy</th>
                                          <th class="col-xs-2">Address</th>
                                          <th class="col-xs-2">State</th>
                                         
                                        </tr> 
                                      </thead>
                                      
                                      <tbody>

                                       <?php
                                      include_once('fileac.php');
  //$sql=$fetchdata->fetchdata();
                                       $AdminVehicleClass= new AdminVehicleClass();
                                      $sql=$AdminVehicleClass->Adminlistvehicle();
                                       $cnt=1;
                                      while($row=mysqli_fetch_array($sql))
                                      {
                                      ?>
                                      <tr>
                                           <td height="29"><?php echo $cnt;?></td> 
                                        <!--<td><?php// echo $row['vehicle_id'];?></td>-->
                                        <td><img  class="img-trigger" src="photo_img/<?php echo $row['carphoto'];?>"  width=100 height=100></td>
                                        <td><?php echo $row['vname'];?></td>
                                        <td><?php echo $row['vcontactno'];?></td>
                                        <td><?php echo $row['vemail'];?></td>
                                        <td><img  class="img-trigger" src="photo_img/<?php echo $row['licencephoto'];?>"  width=100 height=100></td>
                                        <td><?php echo $row['vaddress'];?></td>
                                        <td><?php echo $row['vstate'];?></td>
                                      </tr>
                                       <?php $cnt=$cnt+1;} ?> 
            
                                      </tbody>
                                </table>
                                
                              </div> <!-- //table-responsive -->
                              <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
                    <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
                    <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
                    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>   
                    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
                    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
                    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
                    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
                    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>

                             <script type="text/javascript">
                                $(document).ready(function() {
                                $('#example1').DataTable({
                                   dom: 'Bfrtip',
                                    buttons: [
                                        'copy', 'csv', 'excel', 
                                    ]

                                    });
                                  });
                              </script>
                            
                          </div> <!-- //card-body -->
                        </div> <!-- //card -->
                        
                      </div>
                
                <!-- //Vehicle Tab Panel -->
                </div>
            
              </div>
              <!-- <div class="col-lg-5 mb-4 mb-lg-0 pl-lg-0">
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
              </div> -->
            </div>
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
    <!-- JavaScript files-->
    <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script src="js/charts-home.js"></script>
    <script src="js/front.js"></script>
    
    <script src= "https://chat.fuguchat.com/js/widget.js"></script> 
                    <script> 
                    window.fuguInit({ 
                    appSecretKey: "8b32cbc19add92c57a18bd917f771b4e"
                    }); 
    </script>

 <!-- Modals -->

    <!-- Add Page -->
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
                 <label for="name ">Choose File</label>
                <input type="file" class="form-control" name="photo"  placeholder="Choose File" required >
                
              </div>
              <div class="form-group">
                <label for="name ">Name</label>
                <input type="text" class="form-control" name="name"  placeholder="Enter  Name" required >
              </div>
              <div class="form-group">
                <label for="phone">Contact No.</label>
                <input type="text" class="form-control "  name="contactno"  placeholder="Enter Contact No." required >
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email id</label>
                <input type="email" class="form-control" name="email"  placeholder="Enter email" required>
              </div>
              <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" name="address"  placeholder="Enter Address" required=>
              </div>
              <!-- <div class="form-group">
                <label for="pincode">Pincode</label>
                <input type="tel" class="form-control" name="pincode"  placeholder="Enter Pincode">
              </div> -->
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
                <label for="state">State</label>
                <input type="text" class="form-control" name="state" placeholder="Enter State" required>
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


    <!-- Vehicle Document Add Page -->
  <div class="modal fade" id="vehiclelargeModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Vehicle Document</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- content goes here -->
            <form action="<?php echo($_SERVER['PHP_SELF'])?>" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label for="name ">Choose File</label>
                <input type="file" class="form-control" name="carphoto"  placeholder="Choose File" required >
                
              </div>
              <div class="form-group">
                <label for="name ">Vehicle Name</label>
                <input type="text" class="form-control" name="vname"  placeholder="Enter  Name">
              </div>
              <div class="form-group">
                <label for="phone">Mobile No.</label>
                <input type="text" class="form-control "  name="vcontactno"  placeholder="Enter Contact No.">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email id</label>
                <input type="email" class="form-control" name="vemail"  placeholder="Enter email">
              </div>
              
              <div class="form-group">
               <label for="name ">Choose Licence Photo</label>
                <input type="file" class="form-control" name="licencephoto"  placeholder="Choose File" required >
              </div>
              <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" name="vaddress"  placeholder="Enter Address">
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
                <label for="state">State</label>
                <input type="text" class="form-control" name="vstate" placeholder="Enter State">
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
              
              <!-- <button type="submit" name="submit" class="btn btn-primary">Submit</button> -->
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="vsubmit" class="btn btn-primary">Submit</button>
              </div>
            </form>
      </div>
      
    </div>
  </div>
</div>

<!-- ########### // Vehicle  Add Modal POP UP ############### -->
  </body>
</html>
<?php //} ?>