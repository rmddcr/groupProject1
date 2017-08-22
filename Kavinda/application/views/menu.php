<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- including the CSS file -->
	<?php include('import/css.php'); ?>
    <style>
        .nav-tabs { border-bottom: 2px solid #DDD; }
        .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover { border-width: 0; }
        .nav-tabs > li > a { border: none; color: #ffffff;background: #d32f2f; }
        .nav-tabs > li.active > a, .nav-tabs > li > a:hover { border: none;  color: #5a4080 !important; background: #fff; }
        .nav-tabs > li > a::after { content: ""; background: #5a4080; height: 2px; position: absolute; width: 100%; left: 0px; bottom: -1px; transition: all 250ms ease 0s; transform: scale(0); }
        .nav-tabs > li.active > a::after, .nav-tabs > li:hover > a::after { transform: scale(1); }
        .tab-nav > li > a::after { background: #5a4080 none repeat scroll 0% 0%; color: #fff; }
        .tab-pane { padding: 15px 0; }
        .tab-content{padding:20px}
        .nav-tabs > li  {width:20%; text-align:center;}
        .card {background: #FFF none repeat scroll 0% 0%; box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3); margin-bottom: 30px; }
        body{ background: #EDECEC; padding:50px}

        @media all and (max-width:724px){
            .nav-tabs > li > a > span {display:none;}
            .nav-tabs > li > a {padding: 5px 5px;}
        }

    </style>
</head>
<body style="background-image: url('<?php echo base_url();?>Images/cover.jpg');
        background-attachment: fixed;">
<?php
//	var_dump($menu);
?>
	    <div class="container">
		<div class="row">
            <div class="col-md-12">
                <!-- Nav tabs -->
                <div class="card">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-home"></i>  <span>Starters</span></a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-user"></i>  <span>Main Courses</span></a></li>
                        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"><i class="fa fa-envelope-o"></i>  <span>Desserts</span></a></li>
                        <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab"><i class="fa fa-cog"></i>  <span>Beverages</span></a></li>
                        <li role="presentation"><a href="#extra" aria-controls="settings" role="tab" data-toggle="tab"><i class="fa fa-plus-square-o"></i>  <span>Take-Out Packs</span></a></li>
                    </ul>
                </div>
            </div>
			<div class="col-lg-4 col-sm-6">
				<div id="card" class="weater" style="border-top-right-radius: 25px !important;
				border-top-left-radius: 25px !important;border-bottom-right-radius: 25px !important; border-bottom-left-radius: 25px !important; margin-bottom: 30px;">
					<div class="city-selected">
							<div class="info">
								<img src="<?php echo base_url(); ?>images/food (1).jpg" width="100%" height="200px" style="border-top-right-radius: 25px; border-top-left-radius: 25px;">
							</div>
					</div>
					<div class="days">
						<div class="row row-no-gutter">
							<div class="col-md-12">
								<div class="day">
								<h3><i>Potato Chips with Butterd Chicken</h3>
								<h4>$200</h4>
								<a href=""><button class="btn btn-menu btn-success">View More</button></a>
								<a href=""><button class="btn btn-menu btn-success">Add to Cart</button></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div id="card" class="weater" style="border-top-right-radius: 25px !important;
				border-top-left-radius: 25px !important;border-bottom-right-radius: 25px !important; border-bottom-left-radius: 25px !important; margin-bottom: 30px;">
					<div class="city-selected">
							<div class="info">
								<img src="<?php echo base_url(); ?>images/food (6).jpg" width="100%" height="200px" style="border-top-right-radius: 25px; border-top-left-radius: 25px;">
							</div>
					</div>
					<div class="days">
						<div class="row row-no-gutter">
							<div class="col-md-12">
								<div class="day">
								<h3><i>BBQ Chicken with Steamed Vegetable</h3>
								<h4>$200</h4>
								<a href=""><button class="btn btn-menu btn-success">View More</button></a>
								<a href=""><button class="btn btn-menu btn-success">Add to Cart</button></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div id="card" class="weater" style="border-top-right-radius: 25px !important;
				border-top-left-radius: 25px !important;border-bottom-right-radius: 25px !important; border-bottom-left-radius: 25px !important; margin-bottom: 30px;">
					<div class="city-selected">
							<div class="info">
								<img src="<?php echo base_url(); ?>images/food (2).jpg" width="100%" height="200px" style="border-top-right-radius: 25px; border-top-left-radius: 25px;">
							</div>
					</div>
					<div class="days">
						<div class="row row-no-gutter">
							<div class="col-md-12">
								<div class="day">
								<h3><i>Chopped Vegetable Salad on Watermelon</h3>
								<h4>$200</h4>
								<a href=""><button class="btn btn-menu btn-success">View More</button></a>
								<a href=""><button class="btn btn-menu btn-success">Add to Cart</button></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            <div class="col-lg-4 col-sm-6">
                <div id="card" class="weater" style="border-top-right-radius: 25px !important;
				border-top-left-radius: 25px !important;border-bottom-right-radius: 25px !important; border-bottom-left-radius: 25px !important; margin-bottom: 30px;">
                    <div class="city-selected">
                        <div class="info">
                            <img src="<?php echo base_url(); ?>images/food (5).jpg" width="100%" height="200px" style="border-top-right-radius: 25px; border-top-left-radius: 25px;">
                        </div>
                    </div>
                    <div class="days">
                        <div class="row row-no-gutter">
                            <div class="col-md-12">
                                <div class="day">
                                    <h3><i>Italian Cheese Pizza with </br>Olive</i></h3>
                                    <h4>$200</h4>
                                    <a href=""><button class="btn btn-menu btn-success">View More</button></a>
                                    <a href=""><button class="btn btn-menu btn-success">Add to Cart</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div id="card" class="weater" style="border-top-right-radius: 25px !important;
				border-top-left-radius: 25px !important;border-bottom-right-radius: 25px !important; border-bottom-left-radius: 25px !important; margin-bottom: 30px;">
                    <div class="city-selected">
                        <div class="info">
                            <img src="<?php echo base_url(); ?>images/food (3).jpg" width="100%" height="200px" style="border-top-right-radius: 25px; border-top-left-radius: 25px;">
                        </div>
                    </div>
                    <div class="days">
                        <div class="row row-no-gutter">
                            <div class="col-md-12">
                                <div class="day">
                                    <h3><i>Baked SeaFood Rice with Appetizer Sticks</h3>
                                    <h4>$200</h4>
                                    <a href=""><button class="btn btn-menu btn-success">View More</button></a>
                                    <a href=""><button class="btn btn-menu btn-success">Add to Cart</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div id="card" class="weater" style="border-top-right-radius: 25px !important;
				border-top-left-radius: 25px !important;border-bottom-right-radius: 25px !important; border-bottom-left-radius: 25px !important; margin-bottom: 30px;">
                    <div class="city-selected">
                        <div class="info">
                            <img src="<?php echo base_url(); ?>images/food (4).jpg" width="100%" height="200px" style="border-top-right-radius: 25px; border-top-left-radius: 25px;">
                        </div>
                    </div>
                    <div class="days">
                        <div class="row row-no-gutter">
                            <div class="col-md-12">
                                <div class="day">
                                    <h3><i>Spicy Vegetable Pizza</h3>
                                    <h4>$200</h4>
                                    <a href=""><button class="btn btn-menu btn-success">View More</button></a>
                                    <a href=""><button class="btn btn-menu btn-success">Add to Cart</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div id="card" class="weater" style="border-top-right-radius: 25px !important;
				border-top-left-radius: 25px !important;border-bottom-right-radius: 25px !important; border-bottom-left-radius: 25px !important; margin-bottom: 30px;">
                    <div class="city-selected">
                        <div class="info">
                            <img src="<?php echo base_url(); ?>images/food (6).jpg" width="100%" height="200px" style="border-top-right-radius: 25px; border-top-left-radius: 25px;">
                        </div>
                    </div>
                    <div class="days">
                        <div class="row row-no-gutter">
                            <div class="col-md-12">
                                <div class="day">
                                    <h3><i>Potato Chips with Butterd Chicken</h3>
                                    <h4>$200</h4>
                                    <a href=""><button class="btn btn-menu btn-success">View More</button></a>
                                    <a href=""><button class="btn btn-menu btn-success">Add to Cart</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div id="card" class="weater" style="border-top-right-radius: 25px !important;
				border-top-left-radius: 25px !important;border-bottom-right-radius: 25px !important; border-bottom-left-radius: 25px !important; margin-bottom: 30px;">
                    <div class="city-selected">
                        <div class="info">
                            <img src="<?php echo base_url(); ?>images/food (1).jpg" width="100%" height="200px" style="border-top-right-radius: 25px; border-top-left-radius: 25px;">
                        </div>
                    </div>
                    <div class="days">
                        <div class="row row-no-gutter">
                            <div class="col-md-12">
                                <div class="day">
                                    <h3><i>Potato Chips with Butterd Chicken</h3>
                                    <h4>$200</h4>
                                    <a href=""><button class="btn btn-menu btn-success">View More</button></a>
                                    <a href=""><button class="btn btn-menu btn-success">Add to Cart</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div id="card" class="weater" style="border-top-right-radius: 25px !important;
				border-top-left-radius: 25px !important;border-bottom-right-radius: 25px !important; border-bottom-left-radius: 25px !important; margin-bottom: 30px;">
                    <div class="city-selected">
                        <div class="info">
                            <img src="<?php echo base_url(); ?>images/food (1).jpg" width="100%" height="200px" style="border-top-right-radius: 25px; border-top-left-radius: 25px;">
                        </div>
                    </div>
                    <div class="days">
                        <div class="row row-no-gutter">
                            <div class="col-md-12">
                                <div class="day">
                                    <h3><i>Potato Chips with Butterd Chicken</h3>
                                    <h4>$200</h4>
                                    <a href=""><button class="btn btn-menu btn-success">View More</button></a>
                                    <a href=""><button class="btn btn-menu btn-success">Add to Cart</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
</div>
<!-- JS includes-->
<?php include('import/js.php'); ?>
</body>
</html>