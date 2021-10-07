<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Login Page - MyRec</title>
    <link rel="apple-touch-icon" href="<?php echo base_url(); ?>xyassets/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>xyassets/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>xyassets/app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>xyassets/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>xyassets/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>xyassets/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>xyassets/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>xyassets/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>xyassets/app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>xyassets/app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>xyassets/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>xyassets/app-assets/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>xyassets/app-assets/css/pages/page-auth.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>xyassets/assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-v2">
                    <div class="auth-inner row m-0">
                        <!-- Brand logo--><a class="brand-logo" href="javascript:void(0);">
                           
                            <h2 class="brand-text text-primary ml-1">MyRec App</h2>
                        </a>
                        <!-- /Brand logo-->
                        <!-- Left Text-->
                        <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                            <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img class="img-fluid" src="<?php echo base_url(); ?>xyassets/app-assets/images/banner/loginbanner1.PNG" alt="Login V2" /></div>
                        </div>
                        <!-- /Left Text-->
                        <!-- Login-->
                        <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                            <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                                <h2 class="card-title font-weight-bold mb-1">Welcome! </h2>
                               
                                <?php
                                    if(!$update){
                                        echo '<p class="card-text mb-2" style="color:red">Credential errors, please check!</p>';
                                    }else{
                                        echo '<p class="card-text mb-2">Please sign-in to your account!</p>';
                                    }
                                ?>
                                <form class="auth-login-form mt-2" action="<?php echo base_url(); ?>login_user" method="POST">
                                    <div class="form-group">
                                        <label class="form-label" for="login-email">Username</label>
                                        <input class="form-control" id="login-email" type="text" name="username" placeholder="" aria-describedby="login-email" autofocus="" tabindex="1" />
                                    </div>
                                    <div class="form-group">
                                        <div class="d-flex justify-content-between">
                                            <label for="login-password">Password</label><a href="page-auth-forgot-password-v2.html"><small>Forgot Password?</small></a>
                                        </div>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input class="form-control form-control-merge" id="login-password" type="password" name="pword" placeholder="············" aria-describedby="login-password" tabindex="2" />
                                            <div class="input-group-append"><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span></div>
                                        </div>
                                    </div>
                               
                                    <button type="submit" name="submitlogin" value="1" class="btn btn-primary btn-block" tabindex="4">Sign in</button>
                                </form>
                                <p class="text-center mt-2"><span>Don't have an account?</span><a href="<?php echo base_url(); ?>register"><span>&nbsp;Create an account</span></a></p>
                                
                            </div>
                        </div>
                        <!-- /Login-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="<?php echo base_url(); ?>xyassets/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?php echo base_url(); ?>xyassets/app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?php echo base_url(); ?>xyassets/app-assets/js/core/app-menu.js"></script>
    <script src="<?php echo base_url(); ?>xyassets/app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?php echo base_url(); ?>xyassets/app-assets/js/scripts/pages/page-auth-login.js"></script>
    <!-- END: Page JS-->


    
    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>
<!-- END: Body-->

</html>