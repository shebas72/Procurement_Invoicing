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
        <link href="assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

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
                            <img src="assets/images/logo.png" alt="" height="24" />
                            <span class="d-inline h5 ml-1 text-logo">Pocurement system</span>
                        </span>
                        <span class="logo-sm">
                            <img src="assets/images/logo.png" alt="" height="24">
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
                    <img src="assets/images/users/avatar-7.jpg" class="avatar-sm rounded-circle mr-2" alt="Shreyu" />
                    <img src="assets/images/users/avatar-7.jpg" class="avatar-xs rounded-circle mr-2" alt="Shreyu" />

                    <div class="media-body">
                        <h6 class="pro-user-name mt-0 mb-0"><?php echo $this->session->userdata('name');?></h6>
                        <span class="pro-user-desc">Administrator</span>
                    </div>
                   
                </div>
                <div class="sidebar-content">
                    <!--- Sidemenu -->
                    <div id="sidebar-menu" class="slimscroll-menu">
                        <ul class="metismenu" id="menu-bar">
                            <li class="menu-title">Navigation</li>

                            <li>
                                <a href="index.html">
                                    <i data-feather="home"></i>
                                    <span class="badge badge-success float-right">1</span>
                                    <span> Dashboard </span>
                                </a>
                            </li>
                            <li class="menu-title">Apps</li>
                            <li>
                                <a href="apps-calendar.html">
                                    <i data-feather="calendar"></i>
                                    <span> Calendar </span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="inbox"></i>
                                    <span> Email </span>
                                    <span class="menu-arrow"></span>
                                </a>

                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="email-inbox.html">Inbox</a>
                                    </li>
                                    <li>
                                        <a href="email-read.html">Read</a>
                                    </li>
                                    <li>
                                        <a href="email-compose.html">Compose</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="briefcase"></i>
                                    <span> Projects </span>
                                    <span class="menu-arrow"></span>
                                </a>
    
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="project-list.html">List</a>
                                    </li>
                                    <li>
                                        <a href="project-detail.html">Detail</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="bookmark"></i>
                                    <span> Tasks </span>
                                    <span class="menu-arrow"></span>
                                </a>
    
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="task-list.html">List</a>
                                    </li>
                                    <li>
                                        <a href="task-board.html">Kanban Board</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-title">Custom</li>
                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="file-text"></i>
                                    <span> Pages </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="pages-starter.html">Starter</a>
                                    </li>
                                    <li>
                                        <a href="pages-profile.html">Profile</a>
                                    </li>
                                    <li>
                                        <a href="pages-activity.html">Activity</a>
                                    </li>
                                    <li>
                                        <a href="pages-invoice.html">Invoice</a>
                                    </li>
                                    <li>
                                        <a href="pages-pricing.html">Pricing</a>
                                    </li>
                                    <li>
                                        <a href="pages-maintenance.html">Maintenance</a>
                                    </li>
                                    <li>
                                        <a href="pages-login.html">Login</a>
                                    </li>
                                    <li>
                                        <a href="pages-register.html">Register</a>
                                    </li>
                                    <li>
                                        <a href="pages-recoverpw.html">Recover Password</a>
                                    </li>
                                    <li>
                                        <a href="pages-confirm-mail.html">Confirm</a>
                                    </li>
                                    <li>
                                        <a href="pages-404.html">Error 404</a>
                                    </li>
                                    <li>
                                        <a href="pages-500.html">Error 500</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="layout"></i>
                                    <span> Layouts </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="layouts-horizontal.html">Horizontal Nav</a>
                                    </li>
                                    <li>
                                        <a href="layouts-rtl.html">RTL</a>
                                    </li>
                                    <li>
                                        <a href="layouts-dark.html">Dark</a>
                                    </li>
                                    <li>
                                        <a href="layouts-scrollable.html">Scrollable</a>
                                    </li>
                                    <li>
                                        <a href="layouts-boxed.html">Boxed</a>
                                    </li>
                                    <li>
                                        <a href="layouts-preloader.html">With Pre-loader</a>
                                    </li>
                                    <li>
                                        <a href="layouts-dark-sidebar.html">Dark Side Nav</a>
                                    </li>
                                    <li>
                                        <a href="layouts-condensed.html">Condensed Nav</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="menu-title">Components</li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="package"></i>
                                    <span> UI Elements </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="components-bootstrap.html">Bootstrap UI</a>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);" aria-expanded="false">Icons
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul class="nav-third-level" aria-expanded="false">
                                            <li>
                                                <a href="icons-feather.html">Feather Icons</a>
                                            </li>
                                            <li>
                                                <a href="icons-unicons.html">Unicons Icons</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="widgets.html">Widgets</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" aria-expanded="false">
                                    <i data-feather="file-text"></i>
                                    <span> Forms </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="forms-basic.html">Basic Elements</a>
                                    </li>
                                    <li>
                                        <a href="forms-advanced.html">Advanced</a>
                                    </li>
                                    <li>
                                        <a href="forms-validation.html">Validation</a>
                                    </li>
                                    <li>
                                        <a href="forms-wizard.html">Wizard</a>
                                    </li>
                                    <li>
                                        <a href="forms-editor.html">Editor</a>
                                    </li>
                                    <li>
                                        <a href="forms-file-uploads.html">File Uploads</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="charts-apex.html" aria-expanded="false">
                                    <i data-feather="pie-chart"></i>
                                    <span> Charts </span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" aria-expanded="false">
                                    <i data-feather="grid"></i>
                                    <span> Tables </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="tables-basic.html">Basic</a>
                                    </li>
                                    <li>
                                        <a href="tables-datatables.html">Advanced</a>
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