<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title><?php echo $title; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="shebas" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="<?php echo base_url(); ?>/app/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/app/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/app/assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="authentication-bg">
        
        <div class="account-pages my-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="row">
                                    <div class="col-lg-6 p-5">
                                      

                                        <h6 class="h5 mb-0 mt-4">Welcome back!</h6><br>
                                        <p class="text-muted mt-0 mb-4">Enter your email address and password to access control panel.</p>
    <?php if ($this->session->flashdata()) { ?>
        <div class="alert alert-warning">
            <?= $this->session->flashdata('msg'); ?>
        </div>
    <?php } ?>
                                        <form action="<?= base_url(); ?>app/login/doLogin" class="authentication-form" method="post">
                                          
 
                                            <div class="form-group">
                                               
                                                <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="icon-dual" data-feather="mail"></i>
                                                        </span>
                                                    </div>
                                                    <input type="email" name="email" class="form-control" id="email" placeholder="hello@guardian.com">
                                                </div>
                                            </div>
<br>
                                            <div class="form-group ">
                                            
                                                <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="icon-dual" data-feather="lock"></i>
                                                        </span>
                                                    </div>
                                                    <input type="password" name="password" class="form-control" id="password"
                                                        placeholder="Enter your password">
                                                </div>
                                            </div>
<br>
                                         <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-muted">Don't have an account? <a href="<?= base_url() . 'app/registration'; ?>" class="text-primary font-weight-bold ml-1">Sign up</a></p>
                            </div> <!-- end col -->
                        </div>
<br>
                                            <div class="form-group mb-0 text-center">
                                                <button class="btn btn-primary btn-block" type="submit">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                    
                                    <div class="col-lg-6 d-none d-md-inline-block">
                                        <div class="auth-page-sidebar">
                                            <div class="overlay"></div>
                                            <div class="auth-user-testimonial">
                                                <p class="font-size-24 font-weight-bold text-white mb-1">I simply love it!</p>
                                                <p class="lead">"It's a elegent solution for my organization."
                                                </p>
                                                <p>- CEO, CEOdeck</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                     
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <!-- Vendor js -->
        <script src="<?php echo base_url(); ?>/app/assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url(); ?>/app/assets/js/app.min.js"></script>
        
    </body>
</html>
