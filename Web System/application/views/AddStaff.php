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
    <title>Restaurant Management System - Manager</title>
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
<script type="text/javascript">
      function check()
      {

        var pass1 = document.getElementById('mobile');
        var goodColor = "#ffffff";
        var badColor = "#FF9B37";

        if(mobile.value.length!=10){
        mobile.style.backgroundColor = badColor;
        }
        else{
          mobile.style.backgroundColor = goodColor;
        }
     }
     function checkID()
      {

        var pass1 = document.getElementById('num');
        var goodColor = "#ffffff";
        var badColor = "#FF9B37";

        if(num.value.length!=9){
        num.style.backgroundColor = badColor;
        }
        else{
          num.style.backgroundColor = goodColor;
        }
     }
     function validateDate(){
      var date=document.getElementById('dob').value;
      var Cnow=new Date();//current Date
      var goodColor = "#ffffff";
      var badColor = "#FF9B37";
      //console.log(date);
      var parts =date.split('-');
     
      var mydate = new Date(parts[0],parts[1]-1,parts[2]);
      console.log(mydate);

      if(Cnow.getFullYear()- mydate.getFullYear()<18){
        dob.style.backgroundColor = badColor;
        
     }
      else if(Cnow.getFullYear()- mydate.getFullYear()>150){
        dob.style.backgroundColor = badColor;
     
    }
      else if(Cnow.getFullYear()- mydate.getFullYear()==150){
        dob.style.backgroundColor = badColor;
      }
      else{
       dob.style.backgroundColor = goodColor;
    }


     }
    </script>
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
                        <h3 class="text-themecolor">Staff</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url().'user';?>">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url().'staff/man';?>">staff</a></li>
                            <li class="breadcrumb-item active">Add Staff</li>
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
                                <?php echo form_open("staff/registration",'class="form-horizontal form-material"'); ?>
                                    <div class="form-group">
                                        <label class="col-md-6">ID Number</label>
                                        <div class="col-md-6">
                                            <input type="number" placeholder="Enter the ID number" class="form-control" name="idnumber" id="num" required onkeyup="checkID(); return false;">
                                            <span class="help-block text-muted"><small>Enter the nine digit nic number without the last character V</small></span>
                                            <span><?php echo form_error('ID_Number'); ?></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-6">Image</label>
                                        <div class="col-md-6 ">
                                            <input type="file" name="file_name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-6">Designation</label>
                                        <div class="col-md-6">
                                            <select class="form-control form-control-line" name="designation">
                                                <option>Waiter</option>
                                                <option>Manager</option>
                                                <option>Receptonist</option>
                                                <option>Admin</option>
                                                <option>Chef</option>
                                            </select>
                                            <span><?php echo form_error('Designation'); ?></span>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Full Name</label>
                                        <div class="col-md-12">
                                            <input type="text" name="fullname" required placeholder="Enter the Full Name" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Gender</label>
                                        <div class="col-md-6">
                                            <select class="form-control form-control-line" name="gender">
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Date of Birth</label>
                                        <div class="col-md-6">
                                            <input type="date" name="dob" onfocusout="validateDate();" required id="dob" placeholder="Enter the Full Name" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" required name="email" required placeholder="Enter the Email" class="form-control form-control-line" name="example-email" id="example-email">
                                            <span><?php echo form_error('Email'); ?></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Phone No</label>
                                        <div class="col-md-6">
                                            <input type="number" required name="pnumber" id="mobile" onkeyup="check(); return false;" placeholder="Enter the phone number" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Permenant Address</label>
                                        <div class="col-md-12">
                                            <textarea rows="3" name="address" class="form-control form-control-line"></textarea>
                                            <span class="help-block text-muted"><small>Enter the staff member permenant address</small></span>
                                            <span><?php echo form_error('address'); ?></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Qualification</label>
                                        <div class="col-md-12">
                                            <textarea rows="3" name="quality" class="form-control form-control-line"></textarea>
                                            <span class="help-block text-muted"><small>Enter the qualifications</small></span>
                                            <span><?php echo form_error('quality');?></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Experience</label>
                                        <div class="col-md-12">
                                            <textarea rows="3" name="exper" class="form-control form-control-line"></textarea>
                                            <span class="help-block text-muted"><small>Enter the work expereince</small></span>
                                            <span><?php echo form_error('Exper');?></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Refferences</label>
                                        <div class="col-md-12">
                                            <textarea rows="3" name="refer" class="form-control form-control-line"></textarea>
                                            <span class="help-block text-muted"><small>Enter the non related referees</small></span>
                                            <span><?php echo form_error('Refer');?></span>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">Update Profile</button>
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
