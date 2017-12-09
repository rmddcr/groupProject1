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
                            <!--<img src="<?php echo base_url().'./assets/images/users/1.jpg';?>" alt="homepage" width="148px" height="19px" class="light-logo " />-->
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
                       <li> <a class="waves-effect waves-dark" href="<?php echo base_url().'Main/add_category';?>" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Food Menu</span></a>
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
                <!-- item--><a href="<?php echo base_url().'maint/logout'?>" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a> </div>
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
                        <h3 class="text-themecolor">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url().'user';?>">Home</a></li>
                            <li class="breadcrumb-item active">System_user</li>
                        </ol>
                    </div>
                    <div class="col-md-7 col-4 align-self-center">
                        <button type="button" data-toggle="modal" data-target="#modal-default" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down"><i class="mdi mdi-account-plus" ></i> Add System User</button>
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
                <!-- column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-block">
                                <div class="form-group pull-right">
                                    <input type="text" class="search form-control" placeholder="What you looking for?">
                                </div>
                                <h4 class="card-title">System Users</h4>
                                <h6 class="card-subtitle">All staff members who have permission to access the system.</h6>
                                <div class="table-responsive">
                                    <table id="my_table" class="table table-hover table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Update</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                foreach ($fetch_data as $row) {
                                                    $id = $row->id;
                                                    $username = $row->username;
                                                    $password = $row->password;
                                                    echo "<tr>";
                                                    echo "<td id='id$id'>";
                                                    echo $id;
                                                    echo "</td>";
                                                    echo "<td id='username$id'>";
                                                    echo $username;
                                                    echo "</td>";
                                                    echo "<td id='password$id'>";
                                                    echo $password;
                                                    echo "</td>";
                                                    echo "<td>";
                                                    echo "<button onclick='passData($id)'>Edit</button>";
                                                    echo "</td>";
                                                    echo "<td>";
                                                    echo "<button onclick='deletebtn($id)'>Delete</button>";
                                                    echo "</td>";
                                                    echo "</tr>";
                                                }
                                            ?>
                
                                        </tbody>
                                    </table>
                                </div>
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
            <div class="modal fade" id="modal-default">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add System User</h4>
              </div>
               <div class="modal-body">
            <div class="box">
              
                <?php echo form_open("user/registration",'class="form-horizontal form-material"'); ?>
              <div class="form-group">
                <label for="exampleFormControlFile1">User ID</label>
                
                <select class="form-control" id="modal_type" name='userID' >
                    <?php foreach ($fetch_ID as $row){?>
                        <option ><?php  echo $row->ID;}?></option>
                    </select>
                    
              </div>
              <div class="form-group">
                <label for="exampleFormControlFile1">User name</label>
                <input class="form-control" name="username" type="text" placeholder="Enter Username">
                <span><?php echo form_error('username'); ?></span>
              </div>
              <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Enter Password">
                    <span><?php echo form_error('password'); ?></span>
              </div>
              <div class="form-group">
                    <label for="inputPassword">Confirm Password</label>
                    <input type="password" name="confirmpassword" class="form-control" id="inputPassword" placeholder="Confirm Password">
                    <span><?php echo form_error('confirmpassword'); ?></span>
              </div>
             
         </div>
             
                </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                <?php echo form_close(); ?>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- End the registering model -->
            <!-- ============================================================== -->
            <!----------------------Edit system user details-------------------------->
          <div class="modal fade" id="mymodal">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit admin Modal</h4>
              </div>
              <div class="modal-body">
            <div class="box">
                <?php echo form_open("user/update",'class="form-horizontal form-material"'); ?>
                <div class="form-group">
                <label for="exampleFormControlFile1">ID</label>
                <input name='idnumber' class="form-control" type="text"  id="modal_id" readonly>
                
              </div>
              <div class="form-group">
                <label for="exampleFormControlFile1">User name</label>
                <input name='username' class="form-control" id="modal_uname" type="text"  >
                
              </div>
              <div class="form-group">
                <label for="exampleFormControlFile1">Type</label>
                    <select class="form-control" id="modal_type" name='type' >
                    <option >Waiter</option>
                    <option >Manager</option>
                    <option >Receptonist</option>
                    </select>
                    
              </div>
              <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password" >
                    
              </div>
              <div class="form-group">
                    <label for="inputPassword">Confirm Password</label>
                    <input type="password" name="confirmpassword" class="form-control" id="password" placeholder="Confirm Password" >
                    
              </div>
             
         </div>
              
                </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                <?php echo form_close(); ?>
                
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- End the Editing model -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
             <div class="modal modal-danger fade" id="danger">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Delete Modal</h4>
              </div>
              <div class="modal-body">
                <p>Do you want to delete user?</p>
                <?php echo form_open("user/delete",'class="form-horizontal form-material"'); ?>
                <div class="form-group">
                    <label for="exampleFormControlFile1">ID</label>
                    <input name='idnumber' class="form-control" type="text"  id="del_id" readonly>
                </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-outline">Yes</button>
                <?php echo form_close(); ?>
                <button type="button" class="btn btn-outline" data-dismiss="modal">No</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
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
    <script>
    function passData(id){
        console.log(id);
        var id = document.getElementById('id'+id).innerText;
        var username = document.getElementById('username'+id).innerText;
        var password = document.getElementById('password'+id).innerText;
        console.log(id);
        console.log(username);
        console.log(password);
        $("#mymodal").modal("show");

        document.getElementById('modal_id').value = id;
        document.getElementById('modal_uname').value = username;
        document.getElementById('password').value = password;
    
    }
    function deletebtn(id){
        console.log(id);
        var id = document.getElementById('id'+id).innerText;
        console.log(id);
        $("#danger").modal("show");
        document.getElementById('del_id').value = id;           
    }
    
</script>
<script>
$(document).ready(function(){
    $('.search').on('keyup',function(){
        var searchTerm = $(this).val().toLowerCase();
        $('#my_table tbody tr').each(function(){
            var lineStr = $(this).text().toLowerCase();
            if(lineStr.indexOf(searchTerm) === -1){
                $(this).hide();
            }else{
                $(this).show();
            }
        });
    });
});
</script>
</body>

</html>
