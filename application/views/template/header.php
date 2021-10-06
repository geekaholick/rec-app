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
    <title><?php echo $title; ?></title>
    <link rel="apple-touch-icon" href="<?php echo base_url(); ?>xyassets/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>xyassets/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>xyassets/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>xyassets/app-assets/vendors/css/charts/apexcharts.css">
    <!--<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>xyassets/app-assets/vendors/css/extensions/toastr.min.css">-->
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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>xyassets/app-assets/css/pages/dashboard-ecommerce.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>xyassets/app-assets/css/plugins/charts/chart-apex.css">
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>xyassets/app-assets/css/plugins/extensions/ext-component-toastr.css"> -->
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>xyassets/assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon" data-feather="menu"></i></a></li>
                </ul>
                <ul class="nav navbar-nav bookmark-icons">
                   
                </ul>
                <ul class="nav navbar-nav">
       
                </ul>
            </div>
            <ul class="nav navbar-nav align-items-center ml-auto">

                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none">
                        Hi, <?php  echo $_SESSION['name'];?>! &nbsp; <a class="btn btn-danger btn-block" href="<?php echo base_url(); ?>logout"> <i class="mr-50" data-feather="power" ></i> Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
 
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="<?php echo base_url(); ?>">
                       
                        <h2 class="brand-text">MyRec</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
               
                <li class=" nav-item"><a class="d-flex align-items-center" href="<?php echo base_url(); ?>"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Home"> Dashboard</span></a>
                </li>

                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages"> Menu </span><i data-feather="more-horizontal"></i>
                </li>
                <?php if($_SESSION['level']>1){
                ?>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="menu"></i><span class="menu-title text-truncate" data-i18n="Menu Levels">Review Items</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Second Level">All</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Second Level">Pending</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Second Level">Completed</span></a>
                        </li>
                       
                    </ul>
                </li>
                <?php
                }
                ?>
                <li class=" nav-item"><a class="d-flex align-items-center" href="<?php echo base_url();?>profile"><i data-feather='check-square'></i><span class="menu-title text-truncate" data-i18n="Profile">Profile</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="grid"></i><span class="menu-title text-truncate" data-i18n="submissions">My Submissions</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="mail"></i><span class="menu-title text-truncate" data-i18n="Email">Notifications</span></a>
                </li>

                <?php if($_SESSION['level']==4){
                ?>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="menu"></i><span class="menu-title text-truncate" data-i18n="Menu Levels">Managment Tools</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="<?php echo base_url();?>users"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Second Level">User Management</span></a>
                        </li>
                       
                    </ul>
                </li> 
                <?php
                }
                ?>
                
             
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Ecommerce Starts -->
                <section id="dashboard-ecommerce">

<!-- end of header content here -->