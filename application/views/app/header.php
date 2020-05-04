
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Procurement system</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
        <meta content="guardianchief" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        
        <!-- App favicon 
        <link rel="shortcut icon" href="assets/images/favicon.ico">-->

        <!-- plugins -->
        <link href="<?php echo base_url(); ?>app/assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="<?php echo base_url(); ?>app/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>app/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>app/assets/css/app.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url(); ?>app/assets/libs/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>app/assets/libs/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>app/assets/libs/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>app/assets/libs/datatables/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />


    </head>

    <body>
        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <div class="navbar navbar-expand flex-column flex-md-row navbar-custom">
                <div class="container-fluid">
                    <!-- LOGO -->
                    <a href="index.html" class="navbar-brand mr-0 mr-md-2 logo">
                        <span class="logo-lg">
                            <img src="<?php echo base_url(); ?>app/assets/images/logo.png" alt="" height="24" />
                            <span class="d-inline h5 ml-1 text-logo">Procurement system</span>
                        </span>
                        <span class="logo-sm">
                            <img src="<?php echo base_url(); ?>app/assets/images/logo.png" alt="" height="24">
                        </span>
                    </a>

                    <ul class="navbar-nav bd-navbar-nav flex-row list-unstyled menu-left mb-0">
                        <li class="">
                            <button class="button-menu-mobile open-left disable-btn">
                                <i data-feather="menu" class="menu-icon"></i>
                                <i data-feather="x" class="close-icon"></i>
                            </button>
                        </li>
                    </ul>

                    <ul class="navbar-nav flex-row ml-auto d-flex list-unstyled topnav-menu float-right mb-0">
                        

                        <li class="" data-toggle="tooltip" data-placement="left" title="Profile">
                            <a href="#" class="nav-link">
                                <i data-feather="user" class="icon-dual icon-xs mr-2"></i>
                            </a>
                        </li>
                      


                        <li class="" data-toggle="tooltip" data-placement="left" title="Logout">
                            <a href="<?=base_url().'app/login/logout';?>" class="nav-link">
                                <i data-feather="log-out" class="icon-dual icon-xs mr-2"></i>
                            </a>
                        </li>

                      
                    </ul>
                </div>

            </div>
            <!-- end Topbar -->

               <div class="left-side-menu">
                <div class="media user-profile mt-2 mb-2">
                    <img src="<?php echo base_url(); ?>app/assets/images/users/avatar-7.jpg" class="avatar-sm rounded-circle mr-2" alt="Shreyu" />
                    <img src="<?php echo base_url(); ?>app/assets/images/users/avatar-7.jpg" class="avatar-xs rounded-circle mr-2" alt="Shreyu" />

                    <div class="media-body">
                        <h6 class="pro-user-name mt-0 mb-0" style="text-transform: capitalize;">
                          
                        	<?php 

 
                            $user = $this->session->userdata('logged_in');
echo $user['name'];
 // echo $user['email'];
// $user = $this->session->userdata('logged_in'); 
// echo $this->session->userdata('name');
                        		?>

           
         
                        	</h6>
                        <span class="pro-user-desc">Administrator</span>
                    </div>
                   
                </div>
                <div class="sidebar-content">
                    <!--- Sidemenu -->
                    <div id="sidebar-menu" class="slimscroll-menu">
                        <ul class="metismenu" id="menu-bar">
                            <li class="menu-title">Navigation</li>

                            <li>
                                <a href="<?=base_url().'app/dashboard';?>">
                                    <i data-feather="home"></i>
                                 
                                    <span> Dashboard </span>
                                </a>
                            </li>
                         
                            <li>
                                <a href="<?=base_url().'app/purchaserequest';?>">
                                    <i data-feather="book-open"></i>
                                    <span> Purchase request </span>
                                </a>
                            </li>

                              <li>
                                <a href="apps-calendar.html">
                                    <i data-feather="file-text"></i>
                                    <span> Purchase order </span>
                                </a>
                            </li>
                            <li>
                                <a href="apps-calendar.html">
                                    <i data-feather="plus-circle"></i>
                                    <span> Request for proposal</span>
                                </a>
                            </li>

                               <li>
                                <a href="apps-calendar.html">
                                    <i data-feather="book"></i>
                                    <span> Receipt</span>
                                </a>
                            </li>
                                <li>
                                <a href="apps-calendar.html">
                                    <i data-feather="columns"></i>
                                    <span> Invoice</span>
                                </a>
                            </li>
                                 <li>
                                <a href="apps-calendar.html">
                                    <i data-feather="pie-chart"></i>
                                    <span> Reports</span>
                                </a>
                            </li>

 <li>
                                <a href="<?=base_url().'app/managesupplier';?>">
                                    <i data-feather="truck"></i>
                                    <span> Suppliers</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="settings"></i>
                                    <span> Settings </span>
                                    <span class="menu-arrow"></span>
                                </a>
    
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="#">Company</a>
                                    </li>
                                    <li>
                                        <a href="#">User Management</a>
                                    </li>
                                </ul>
                            </li>
                         
                 
                        </ul>
                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>
                </div>
                <!-- Sidebar -left -->

            </div>