<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
		
	<title>Light Bootstrap Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url().'css/bootstrap.min.css'?>" rel="stylesheet" />

    
    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo base_url().'css/light-bootstrap-dashboard.css'?>" rel="stylesheet"/>


    <!-- table -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/dataTable.bootstrap.min.css'?>">

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url().'css/pe-icon-7-stroke.css'?>" rel="stylesheet" />
    <script type="text/javascript" src="<?php echo base_url().'js/jquery.min.js'?>"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/mystyle.css'?>">
   
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="<?php echo base_url();?>/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <img src="<?php echo base_url().'/img/logo.png'?>" width="200px" height="200px">
                    
               
            </div>

            <ul class="nav">
                <li>
                    <a href="<?php echo base_url().'Main/dashboard'?>">
                        <i class="pe-7s-airplay"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url().'Main/userprofile'?>">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url().'Main/customer'?>">
                        <i class="pe-7s-users"></i>
                        <p>Customer</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url().'Main/employee'?>">
                        <i class="pe-7s-id"></i>
                        <p>Employee</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url().'Main/meals'?>">
                        <i class="pe-7s-note2"></i>
                        <p>Meals</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url().'Main/beverages'?>">
                        <i class="pe-7s-coffee"></i>
                        <p>Beverages</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url().'Main/desserts'?>">
                        <i class="pe-7s-cup"></i>
                        <p>Desserts</p>
                    </a>
                </li>
				
            </ul>
    	</div>
    </div>
  <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-right">
                        <li>
                            <a href="#">
                                <p>Log out</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

