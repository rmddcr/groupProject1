<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url().'./assets/images/favicon.png';?>">
    <title>Restaurant Management System - Food</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url().'./assets/plugins/bootstrap/css/bootstrap.min.css';?>" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="<?php echo base_url().'./assets/plugins/chartist-js/dist/chartist.min.css';?>" rel="stylesheet">
    <link href="<?php echo base_url().'./assets/plugins/chartist-js/dist/chartist-init.css';?>" rel="stylesheet">
    <link href="<?php echo base_url().'./assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css';?>" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="<?php echo base_url().'./assets/plugins/c3-master/c3.min.css';?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url().'./css/css/style.css';?>" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo base_url().'./css/css/colors/blue.css';?>" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            
                            <!-- Light Logo icon -->
                            <!--<img src="<?php echo base_url().'./assets/images/users/1.jpg';?>" alt="homepage" width="148px" height="19px" class="light-logo" />-->
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Markarn Doe</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="<?php echo base_url().'user';?>" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="<?php echo base_url().'staff/man';?>" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">Staff Members</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="<?php echo base_url().'user/dash';?>" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">System User</span></a>
                        </li>
                       <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Food Menu</span></a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
                <!-- item--><a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
                <!-- item--><a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
                <!-- item--><a href="<?php echo base_url().'main/logout'?>" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a> </div>
            <!-- End Bottom points-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Food</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url().'user';?>">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url().'Main/add_category';?>">Food</a></li>
                            <li class="breadcrumb-item active">Add Food item</li>
                        </ol>
                    </div>
                    
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                  <div class="col-lg-11 col-xlg-11 col-md-12">
                        <div class="card">
                            <div class="card-block">
                                <?php echo form_open_multipart('main/form_validation_food/'.$item_category, 'class="form-horizontal form-material"');?>
                                    <div class="form-group">
                                        <label class="col-md-12">Item Code</label>
                                        <div class="col-md-12">
                                            <input type="text" name="item_code" placeholder="Enter the item code" class="form-control form-control-line">
                                            <span class="text-danger"><?php echo form_error("item_code");?></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Name</label>
                                        <div class="col-md-12">
                                            <input type="text" name="name" placeholder="Enter the Food Name" class="form-control form-control-line">
                                            <span class="text-danger"><?php echo form_error("name");?></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Description</label>
                                        <div class="col-md-12">
                                            <input type="text" name="description" placeholder="Enter the Description" class="form-control form-control-line">
                                            <span class="text-danger"><?php echo form_error("description");?></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Price</label>
                                        <div class="col-md-12">
                                            <input type="text" name="price" placeholder="Enter the Price" class="form-control form-control-line">
                                            <span class="text-danger"><?php echo form_error("price");?></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Item Rating</label>
                                        <div class="col-md-12">
                                            <input type="text" name="item_rating" placeholder="Enter the ratings" class="form-control form-control-line">
                                            <span class="text-danger"><?php echo form_error("item_rating");?></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-6">Image</label>
                                        <div class="col-md-6 ">
                                            <input type="file" name="file_name" class="form-control">
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input type="submit" name="insert" value="Insert" class="btn-info btn-fill active">>
                                        </div>
                                    </div>
                                <?php echo form_close();?> 
                            </div>
                        </div>  
                </div>
            </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2017 CRM by Team Halcyons</footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url().'./assets/plugins/jquery/jquery.min.js';?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url().'./assets/plugins/bootstrap/js/tether.min.js';?>"></script>
    <script src="<?php echo base_url().'./assets/plugins/bootstrap/js/bootstrap.min.js';?>"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url().'./js/js/jquery.slimscroll.js';?>"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url().'./js/js/waves.js';?>"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url().'./js/js/sidebarmenu.js';?>"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url().'./assets/plugins/sticky-kit-master/dist/sticky-kit.min.js';?>"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url().'./js/js/custom.min.js';?>"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="<?php echo base_url().'./assets/plugins/chartist-js/dist/chartist.min.js';?>"></script>
    <script src="<?php echo base_url().'./assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js';?>"></script>
    <!--c3 JavaScript -->
    <script src="<?php echo base_url().'./assets/plugins/d3/d3.min.js';?>"></script>
    <script src="<?php echo base_url().'./assets/plugins/c3-master/c3.min.js';?>"></script>
    <!-- Chart JS -->
    <script src="<?php echo base_url().'./js/js/dashboard1.js';?>"></script>
</body>

</html>
