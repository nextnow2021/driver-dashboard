<?php
session_start();
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
    <title> Dashboard</title>
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
              <li class="sidebar-list-item"><a href="mywallet.php" class="sidebar-link text-muted active">
                <img src="img/Png/report.png" class="img-responsive mr-3"><span>My Reports</span></a></li>
              <li class="sidebar-list-item"><a href="earning.php" class="sidebar-link text-muted">
                <img src="img/Png/Rand_Money.png" class="img-responsive mr-3" ><span>Earning</span></a></li>
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
                      <h6 class="mb-0">Wallet Summary</h6><!-- <span class="text-gray">145,14 GB</span> -->
                    </div>
                  </div>
                  <div class="icon text-white bg-violet"><i class="fas fa-server"></i></div>
                </div>
              </div>
             
            </div>
          </section>
          <section>
            <div class="row mb-4">
              <div class="col-lg-12 mb-4 mb-lg-0">
                <div class="card">
                    <div class="bg-white shadow  p-4 h-100 d-flex align-items-center justify-content-between tabs-title nav-item" >
                      
                       <div class="flex-grow-1 d-flex align-items-center">
                              <div class="dot mr-3 bg-violet"></div>
                                <div class="text ">
                                  <h6 class="mb-0"> Your Current Wallet Balance is Rs</h6><!-- <span class="text-gray">145,14 GB</span> -->
                              </div>
                        </div>
                       

                        <div class="flex-grow-1 d-flex align-items-center">
                              <div class="dot mr-3 bg-violet"></div>
                                <div class="text ">
                                  <h6 class="mb-0">250</h6><span class="text-gray">Balance</span>
                              </div>
                        </div>                  
                      
                      
                     <!--  <a >Veg</a> -->

                      <a class=" bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between tabs-title"  href="#" >

                        <div class="flex-grow-1 d-flex align-items-center">
                              <div class="dot mr-3 bg-violet"></div>
                                <div class="text ">
                                  <h6 class="mb-0">Recharge Now</h6><!-- <span class="text-gray">145,14 GB</span> -->
                              </div>
                        </div>                  
                      </a>
                    </div>
                  

                    
                  
                  <br/>
                  <div >
                    <div class="table-responsive">
                      <table id="example" class="table table-striped table-bordered" style="width:100%">
                              <thead>
                                  <tr>
                                      <th>Name</th>
                                      <th>Position</th>
                                      <th>Office</th>
                                      <th>Age</th>
                                      <th>Start date</th>
                                      <th>Salary</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>Tiger Nixon</td>
                                      <td>System Architect</td>
                                      <td>Edinburgh</td>
                                      <td>61</td>
                                      <td>2011/04/25</td>
                                      <td>$320,800</td>
                                  </tr>
                                  <tr>
                                      <td>Garrett Winters</td>
                                      <td>Accountant</td>
                                      <td>Tokyo</td>
                                      <td>63</td>
                                      <td>2011/07/25</td>
                                      <td>$170,750</td>
                                  </tr>
                                  <tr>
                                      <td>Ashton Cox</td>
                                      <td>Junior Technical Author</td>
                                      <td>San Francisco</td>
                                      <td>66</td>
                                      <td>2009/01/12</td>
                                      <td>$86,000</td>
                                  </tr>
                                  <tr>
                                      <td>Cedric Kelly</td>
                                      <td>Senior Javascript Developer</td>
                                      <td>Edinburgh</td>
                                      <td>22</td>
                                      <td>2012/03/29</td>
                                      <td>$433,060</td>
                                  </tr>
                                  <tr>
                                      <td>Airi Satou</td>
                                      <td>Accountant</td>
                                      <td>Tokyo</td>
                                      <td>33</td>
                                      <td>2008/11/28</td>
                                      <td>$162,700</td>
                                  </tr>
                                  <tr>
                                      <td>Brielle Williamson</td>
                                      <td>Integration Specialist</td>
                                      <td>New York</td>
                                      <td>61</td>
                                      <td>2012/12/02</td>
                                      <td>$372,000</td>
                                  </tr>
                                  <tr>
                                      <td>Herrod Chandler</td>
                                      <td>Sales Assistant</td>
                                      <td>San Francisco</td>
                                      <td>59</td>
                                      <td>2012/08/06</td>
                                      <td>$137,500</td>
                                  </tr>
                                  <tr>
                                      <td>Rhona Davidson</td>
                                      <td>Integration Specialist</td>
                                      <td>Tokyo</td>
                                      <td>55</td>
                                      <td>2010/10/14</td>
                                      <td>$327,900</td>
                                  </tr>
                                  <tr>
                                      <td>Colleen Hurst</td>
                                      <td>Javascript Developer</td>
                                      <td>San Francisco</td>
                                      <td>39</td>
                                      <td>2009/09/15</td>
                                      <td>$205,500</td>
                                  </tr>
                                  <tr>
                                      <td>Sonya Frost</td>
                                      <td>Software Engineer</td>
                                      <td>Edinburgh</td>
                                      <td>23</td>
                                      <td>2008/12/13</td>
                                      <td>$103,600</td>
                                  </tr>
                                  <tr>
                                      <td>Jena Gaines</td>
                                      <td>Office Manager</td>
                                      <td>London</td>
                                      <td>30</td>
                                      <td>2008/12/19</td>
                                      <td>$90,560</td>
                                  </tr>
                                  
                                  <tr>
                                      <td>Paul Byrd</td>
                                      <td>Chief Financial Officer (CFO)</td>
                                      <td>New York</td>
                                      <td>64</td>
                                      <td>2010/06/09</td>
                                      <td>$725,000</td>
                                  </tr>
                                 
                                  <tr>
                                      <td>Yuri Berry</td>
                                      <td>Chief Marketing Officer (CMO)</td>
                                      <td>New York</td>
                                      <td>40</td>
                                      <td>2009/06/25</td>
                                      <td>$675,000</td>
                                  </tr>
                                  <tr>
                                      <td>Caesar Vance</td>
                                      <td>Pre-Sales Support</td>
                                      <td>New York</td>
                                      <td>21</td>
                                      <td>2011/12/12</td>
                                      <td>$106,450</td>
                                  </tr>
                                  <tr>
                                      <td>Doris Wilder</td>
                                      <td>Sales Assistant</td>
                                      <td>Sydney</td>
                                      <td>23</td>
                                      <td>2010/09/20</td>
                                      <td>$85,600</td>
                                  </tr>
                                  <tr>
                                      <td>Angelica Ramos</td>
                                      <td>Chief Executive Officer (CEO)</td>
                                      <td>London</td>
                                      <td>47</td>
                                      <td>2009/10/09</td>
                                      <td>$1,200,000</td>
                                  </tr>
                                  <tr>
                                      <td>Gavin Joyce</td>
                                      <td>Developer</td>
                                      <td>Edinburgh</td>
                                      <td>42</td>
                                      <td>2010/12/22</td>
                                      <td>$92,575</td>
                                  </tr>
                                  <tr>
                                      <td>Jennifer Chang</td>
                                      <td>Regional Director</td>
                                      <td>Singapore</td>
                                      <td>28</td>
                                      <td>2010/11/14</td>
                                      <td>$357,650</td>
                                  </tr>
                                  <tr>
                                      <td>Brenden Wagner</td>
                                      <td>Software Engineer</td>
                                      <td>San Francisco</td>
                                      <td>28</td>
                                      <td>2011/06/07</td>
                                      <td>$206,850</td>
                                  </tr>
                                  <tr>
                                      <td>Fiona Green</td>
                                      <td>Chief Operating Officer (COO)</td>
                                      <td>San Francisco</td>
                                      <td>48</td>
                                      <td>2010/03/11</td>
                                      <td>$850,000</td>
                                  </tr>
                                  
                                  <tr>
                                      <td>Gavin Cortez</td>
                                      <td>Team Leader</td>
                                      <td>San Francisco</td>
                                      <td>22</td>
                                      <td>2008/10/26</td>
                                      <td>$235,500</td>
                                  </tr>
                                  <tr>
                                      <td>Martena Mccray</td>
                                      <td>Post-Sales support</td>
                                      <td>Edinburgh</td>
                                      <td>46</td>
                                      <td>2011/03/09</td>
                                      <td>$324,050</td>
                                  </tr>
                                  <tr>
                                      <td>Unity Butler</td>
                                      <td>Marketing Designer</td>
                                      <td>San Francisco</td>
                                      <td>47</td>
                                      <td>2009/12/09</td>
                                      <td>$85,675</td>
                                  </tr>
                                  <tr>
                                      <td>Howard Hatfield</td>
                                      <td>Office Manager</td>
                                      <td>San Francisco</td>
                                      <td>51</td>
                                      <td>2008/12/16</td>
                                      <td>$164,500</td>
                                  </tr>
                                  <tr>
                                      <td>Hope Fuentes</td>
                                      <td>Secretary</td>
                                      <td>San Francisco</td>
                                      <td>41</td>
                                      <td>2010/02/12</td>
                                      <td>$109,850</td>
                                  </tr>
                                  <tr>
                                      <td>Vivian Harrell</td>
                                      <td>Financial Controller</td>
                                      <td>San Francisco</td>
                                      <td>62</td>
                                      <td>2009/02/14</td>
                                      <td>$452,500</td>
                                  </tr>
                                  <tr>
                                      <td>Timothy Mooney</td>
                                      <td>Office Manager</td>
                                      <td>London</td>
                                      <td>37</td>
                                      <td>2008/12/11</td>
                                      <td>$136,200</td>
                                  </tr>
                                 
                                  
                                  <tr>
                                      <td>Michael Bruce</td>
                                      <td>Javascript Developer</td>
                                      <td>Singapore</td>
                                      <td>29</td>
                                      <td>2011/06/27</td>
                                      <td>$183,000</td>
                                  </tr>
                                  <tr>
                                      <td>Donna Snider</td>
                                      <td>Customer Support</td>
                                      <td>New York</td>
                                      <td>27</td>
                                      <td>2011/01/25</td>
                                      <td>$112,000</td>
                                  </tr>
                              </tbody>
                              <tfoot>
                                  <tr>
                                      <th>Name</th>
                                      <th>Position</th>
                                      <th>Office</th>
                                      <th>Age</th>
                                      <th>Start date</th>
                                      <th>Salary</th>
                                  </tr>
                              </tfoot>
                          </table>
                    </div>
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
                $('#example').DataTable({
                   dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 
                    ]

                    });
                  });
              </script>

                  </div> <!-- //Card-body -->
                  
                    <!-- <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                     
                      <section class="py-5">
                          <div class="row">
                            <div class="col-xl-3 col-lg-3 mb-4 mb-xl-0">
                              <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between tabs-title">

                                <div class="flex-grow-1 d-flex align-items-center">
                                  <div class="dot mr-3 bg-violet"></div>
                                  <div class="text ">
                                    <h6 class="mb-0">Mumbai-Bandra</h6><span class="text-gray">Source</span>
                                  </div>
                                </div>
                                
                              </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 mb-4 mb-xl-0">
                              <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                                <div class="flex-grow-1 d-flex align-items-center">
                                  <div class="dot mr-3 bg-green"></div>
                                  <div class="text">
                                    <h6 class="mb-0"> 10:00</h6><span class="text-gray">CheckIn</span>
                                  </div>
                                </div>
                                <div class="icon text-white bg-green"><i class="far fa-clipboard"></i></div>
                              </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 mb-4 mb-xl-0">
                              <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                                <div class="flex-grow-1 d-flex align-items-center">
                                  <div class="dot mr-3 bg-blue"></div>
                                  <div class="text">
                                    <h6 class="mb-0">14:00</h6><span class="text-gray">CheckOut</span>
                                  </div>
                                </div>
                                <div class="icon text-white bg-blue"><i class="fa fa-dolly-flatbed"></i></div>
                              </div>
                            </div>
                            <div class="col-xl-3 col-lg-2 mb-4 mb-xl-0">
                              <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                                <div class="flex-grow-1 d-flex align-items-center">
                                  <div class="dot mr-3 bg-red"></div>
                                  <div class="text">
                                    <h6 class="mb-0">Rs750</h6><span class="text-gray">Rate</span>
                                  </div>
                                </div>
                                <div class="icon text-white bg-red"><i class="fas fa-receipt"></i></div>
                              </div>
                            </div>
                          </div>

                          
                           <div class="row">
                            <div class="col-xl-3 col-lg-3 mb-4 mb-xl-0">
                              <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between tabs-title">

                                <div class="flex-grow-1 d-flex align-items-center">
                                  <div class="dot mr-3 bg-violet"></div>
                                  <div class="text ">
                                    <h6 class="mb-0">Mumbai-Kolkata</h6><span class="text-gray">Source</span>
                                  </div>
                                </div>
                                
                              </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 mb-4 mb-xl-0">
                              <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                                <div class="flex-grow-1 d-flex align-items-center">
                                  <div class="dot mr-3 bg-green"></div>
                                  <div class="text">
                                    <h6 class="mb-0"> 12:00</h6><span class="text-gray">CheckIn</span>
                                  </div>
                                </div>
                                <div class="icon text-white bg-green"><i class="far fa-clipboard"></i></div>
                              </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 mb-4 mb-xl-0">
                              <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                                <div class="flex-grow-1 d-flex align-items-center">
                                  <div class="dot mr-3 bg-blue"></div>
                                  <div class="text">
                                    <h6 class="mb-0"> 5:00</h6><span class="text-gray">CheckOut</span>
                                  </div>
                                </div>
                                <div class="icon text-white bg-blue"><i class="fa fa-dolly-flatbed"></i></div>
                              </div>
                            </div>
                            <div class="col-xl-3 col-lg-2 mb-4 mb-xl-0">
                              <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                                <div class="flex-grow-1 d-flex align-items-center">
                                  
                                  <div class="text">
                                    <h6 class="mb-0">Rs750</h6><span class="text-gray">Rate</span>
                                  </div>
                                </div>
                                <div class="icon text-white bg-red"><i class="fas fa-receipt"></i></div>
                              </div>
                            </div>
                          </div>
                          
                          <div class="row">
                            <div class="col-xl-3 col-lg-3 mb-4 mb-xl-0">
                              <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between tabs-title">

                                <div class="flex-grow-1 d-flex align-items-center">
                                  <div class="dot mr-3 bg-violet"></div>
                                  <div class="text ">
                                    <h6 class="mb-0">Banglore-Mumbai</h6><span class="text-gray">Source</span>
                                  </div>
                                </div>
                                
                              </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 mb-4 mb-xl-0">
                              <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                                <div class="flex-grow-1 d-flex align-items-center">
                                  <div class="dot mr-3 bg-green"></div>
                                  <div class="text">
                                    <h6 class="mb-0"> 12:00</h6><span class="text-gray">CheckIn</span>
                                  </div>
                                </div>
                                <div class="icon text-white bg-green"><i class="far fa-clipboard"></i></div>
                              </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 mb-4 mb-xl-0">
                              <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                                <div class="flex-grow-1 d-flex align-items-center">
                                  <div class="dot mr-3 bg-blue"></div>
                                  <div class="text">
                                    <h6 class="mb-0"> 5:00</h6><span class="text-gray">CheckOut</span>
                                  </div>
                                </div>
                                <div class="icon text-white bg-blue"><i class="fa fa-dolly-flatbed"></i></div>
                              </div>
                            </div>
                            <div class="col-xl-3 col-lg-2 mb-4 mb-xl-0">
                              <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                                <div class="flex-grow-1 d-flex align-items-center">
                                  <div class="dot mr-3 bg-red"></div>
                                  <div class="text">
                                    <h6 class="mb-0">Rs750</h6><span class="text-gray">Rate</span>
                                  </div>
                                </div>
                                <div class="icon text-white bg-red"><i class="fas fa-receipt"></i></div>
                              </div>
                            </div>
                          </div>
                          
                          <div class="row">
                            <div class="col-xl-3 col-lg-3 mb-4 mb-xl-0">
                              <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between tabs-title">

                                <div class="flex-grow-1 d-flex align-items-center">
                                  <div class="dot mr-3 bg-violet"></div>
                                  <div class="text ">
                                    <h6 class="mb-0">Banglore-Mumbai</h6><span class="text-gray">Source</span>
                                  </div>
                                </div>
                                
                              </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 mb-4 mb-xl-0">
                              <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                                <div class="flex-grow-1 d-flex align-items-center">
                                  <div class="dot mr-3 bg-green"></div>
                                  <div class="text">
                                    <h6 class="mb-0"> 12:00</h6><span class="text-gray">CheckIn</span>
                                  </div>
                                </div>
                                <div class="icon text-white bg-green"><i class="far fa-clipboard"></i></div>
                              </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 mb-4 mb-xl-0">
                              <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                                <div class="flex-grow-1 d-flex align-items-center">
                                  <div class="dot mr-3 bg-blue"></div>
                                  <div class="text">
                                    <h6 class="mb-0"> 5:00</h6><span class="text-gray">CheckOut</span>
                                  </div>
                                </div>
                                <div class="icon text-white bg-blue"><i class="fa fa-dolly-flatbed"></i></div>
                              </div>
                            </div>
                            <div class="col-xl-3 col-lg-2 mb-4 mb-xl-0">
                              <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                                <div class="flex-grow-1 d-flex align-items-center">
                                  
                                  <div class="text">
                                    <h6 class="mb-0">Rs750</h6><span class="text-gray">Rate</span>
                                  </div>
                                </div>
                                <div class="icon text-white bg-red"><i class="fas fa-receipt"></i></div>
                              </div>
                            </div>
                          </div>
                          
                       </section>

                    
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                      
                      <section class="py-5">
                          <div class="row">
                            <div class="col-xl-3 col-lg-3 mb-4 mb-xl-0">
                              <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between tabs-title">

                                <div class="flex-grow-1 d-flex align-items-center">
                                     <div class="text ">
                                    <h6 class="mb-0">Chennai-Banglore</h6><span class="text-gray">Source</span>
                                  </div>
                                </div>
                                
                              </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 mb-4 mb-xl-0">
                              <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                                <div class="flex-grow-1 d-flex align-items-center">

                                  <div class="text">
                                    <h6 class="mb-0"> 12:00</h6><span class="text-gray">CheckIn</span>
                                  </div>
                                </div>
                                
                              </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 mb-4 mb-xl-0">
                              <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                                <div class="flex-grow-1 d-flex align-items-center">
                                  
                                  <div class="text">
                                    <h6 class="mb-0"> 5:00</h6><span class="text-gray">CheckOut</span>
                                  </div>
                                </div>
                               
                              </div>
                            </div>
                            <div class="col-xl-3 col-lg-2 mb-4 mb-xl-0">
                              <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                                <div class="flex-grow-1 d-flex align-items-center">
                                  
                                  <div class="text">
                                    <h6 class="mb-0">Rs750</h6><span class="text-gray">Rate</span>
                                  </div>
                                </div>
                                
                              </div>
                            </div>
                          </div>
                          
                          <div class="row">
                            <div class="col-xl-3 col-lg-3 mb-4 mb-xl-0">
                              <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between tabs-title">

                                <div class="flex-grow-1 d-flex align-items-center">
                                     <div class="text ">
                                    <h6 class="mb-0">Banglore-Mumbai</h6><span class="text-gray">Source</span>
                                  </div>
                                </div>
                                
                              </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 mb-4 mb-xl-0">
                              <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                                <div class="flex-grow-1 d-flex align-items-center">
                                  
                                  <div class="text">
                                    <h6 class="mb-0"> 12:00</h6><span class="text-gray">CheckIn</span>
                                  </div>
                                </div>
                                
                              </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 mb-4 mb-xl-0">
                              <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                                <div class="flex-grow-1 d-flex align-items-center">
                                  
                                  <div class="text">
                                    <h6 class="mb-0"> 5:00</h6><span class="text-gray">CheckOut</span>
                                  </div>
                                </div>
                               
                              </div>
                            </div>
                            <div class="col-xl-3 col-lg-2 mb-4 mb-xl-0">
                              <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                                <div class="flex-grow-1 d-flex align-items-center">
                                  
                                  <div class="text">
                                    <h6 class="mb-0">Rs750</h6><span class="text-gray">Rate</span>
                                  </div>
                                </div>
                                
                              </div>
                            </div>
                          </div>
                          
                       </section>
                      
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                      
                      <section class="py-5">
                          <div class="row">
                            <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
                              <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between tabs-title">

                                <div class="flex-grow-1 d-flex align-items-center">
                                      <div class="text ">
                                    <h6 class="mb-0">Veg & Nonveg Soup</h6>
                                  </div>
                                </div>
                                
                              </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 mb-4 mb-xl-0">
                              <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                                <div class="flex-grow-1 d-flex align-items-center">
                                  
                                  <div class="text">
                                    <h6 class="mb-0">1</h6>
                                  </div>
                                </div>
                                
                              </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 mb-4 mb-xl-0">
                              <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                                <div class="flex-grow-1 d-flex align-items-center">
                                  
                                  <div class="text">
                                    <h6 class="mb-0">200</h6>
                                  </div>
                                </div>
                               
                              </div>
                            </div>
                            
                          </div>
                       </section>
                     
                    </div>
                    
                     </div> -->

                  
                </div>
              </div>
             <!--  <div class="col-lg-5 mb-4 mb-lg-0 pl-lg-0">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="row align-items-center flex-row">
                      <div class="col-lg-5">
                        <h2 class="mb-0 d-flex align-items-center"><span>86.4</span><span class="dot bg-green d-inline-block ml-3"></span></h2><span class="text-muted text-uppercase small">Work hours</span>
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
                        <h2 class="mb-0 d-flex align-items-center"><span>1.724</span><span class="dot bg-violet d-inline-block ml-3"></span></h2><span class="text-muted text-uppercase small">Server time</span>
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
                      <a href="#" class=" col-md-2 bg-gray-100 roundy px-4 py-1 mr-0 mr-lg-3 mt-2 mt-lg-0 text-dark exclode">About Us
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
                <p class="mb-2 mb-md-0">nextnow &copy;2021</p>
              </div>
              <div class="col-md-6 text-center text-md-right text-gray-400">
                <p class="mb-0">Design by <a href="">nextnow</a></p>
                <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- JavaScript files-->
    <!-- <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script> -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script src="js/charts-home.js"></script> -->
    <script src="js/front.js"></script>
    <script src= "https://chat.fuguchat.com/js/widget.js"></script> 
                    <script> 
                    window.fuguInit({ 
                    appSecretKey: "8b32cbc19add92c57a18bd917f771b4e"
                    }); 
    </script>
  </body>
</html>
<?php } ?>