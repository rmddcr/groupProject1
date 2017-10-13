<html>
<head>
	<title>Manager</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/css/bootstrap.min.css';?>">
	<link rel="stylesheet" tyspe="text/css" href="<?php echo base_url().'css/style.css';?>">
</head>
<body>
	<header>
	<div class="navbar navbar-inverse navbar-static-top nav-position">
		<div class="container">
			<a href="#top" class="navbar-brand">Dashboard</a>
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		<!------------------------Start Navbar------------------------------>
		<div class="collapse navbar-collapse navHeaderCollapse">
			<ul class="nav navbar-nav">
				<li><a href="#top">Home</a></li>
				<li><a href="#systemuser">Add System user</a></li>
				<li><a href="#menu">Menu</a></li>
				<li><a href="#Reservation">Reservations</a></li>
				<!--<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Social media</a>
					<ul class="dropdown-menu">
						<li><a href="#">facebook</a></li>
						<li><a href="#">twitter</a></li>
						<li><a href="#">linkedin</a></li>
					</ul>
				</li>-->
			</ul>

			<ul class="nav navbar-nav navbar-right">
      			<li><a href="<?php echo base_url().'main/logout'?>">Log out</a></li>
    	</ul>

		</div>
	</div>
	</div>
	<!------------------------End Navbar---------------------------------->
</header>
<br><br>
	<!------------------------Start Customer comments---------------------------------->
	<div class="container" id="top">
		<div class="transbox btn-top">
			<div class="panel panel-success">
				<div class="panel-heading"><h3>Customer Comments</h3></div>
				<div class="panel-body">
			<div class="panel panel-info">
				<div class="panel-heading"><h5>Mr. Chathu</h5></div>
				<div class="panel-body">
					Delicious foods. good job thank you
				</div>
				<div class="panel-footer">
					12th March 2017
				</div>
			</div>
		</div>
	</div>
		</div>
	</div>
	<!------------------------End Customer Comments---------------------------------->

	<!------------------------Start Add System User---------------------------------->

	<div class="container" id="systemuser">
		<div class="transbox div-over">
			<div class="panel panel-info">
			<div class="panel-heading">
				
				<div class="btn-right btn-top1">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Add system user</button>
			</div>
			<h3>System users</h3>
			</div>
			<div class="panel-body">
			<div class="tb-responsive"> 
			<table class="table">
				<thead>
					<th>ID</th>
					<th>First name</th>
					<th>Last name</th>
					<th>User name</th>
					<th>Position</th>
					<th>Email</th>
					<th>Update</th>
				</thead>
				<tbody>
					<tr>
				<?php
					if($fetch_data->num_rows()>0)
					{
						foreach($fetch_data->result() as $row)
					{
				?>

					<td><?php echo $row->id; ?></td>
					<td><?php echo $row->firstname; ?></td>
					<td><?php echo $row->lastname; ?></td>
					<td><?php echo $row->username; ?></td>
					<td><?php echo $row->type; ?></td>
					<td><?php echo $row->email; ?></td>
					<td>
						<button type="button" class="btn btn-block btn-primary btn-xs" data-toggle="modal" data-target="#modal-default">Edit</button>
                      	<button type="button" class="btn btn-block btn-danger btn-xs" data-toggle="modal" data-target="#modal-danger">Delete</button>
					</td>
				</tr>
					<?php
					}

				}
				else
				{
				?>
				<tr>
					<td colspan="3">No Data Found</td>
				</tr>
				<?php
				}	
				?>
				
				</tbody>
			</table>
		</div>
		</div>
	     </div>
		</div>

	</div>
	
	<!----------------------Edit system user details-registered system users-------------------------->
          <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Default Modal</h4>
              </div>
            <div class="box">
              
 				<?php echo form_open("user/registration"); ?>
			  <div class="form-group">
				<label for="exampleFormControlFile1">First name</label>
				<input class="form-control" type="text" placeholder="Enter Firstname" name="firstname">
				<span><?php echo form_error('firstname'); ?></span>
		      </div>
		      <div class="form-group">
				<label for="exampleFormControlFile1">Last name</label>
				<input class="form-control" type="text" placeholder="Enter Lastname" name="lastname">
				<span><?php echo form_error('lastname'); ?></span>
		      </div>
		      <div class="form-group">
			    <label for="exampleInputEmail1">Email address</label>
			    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
			    <span><?php echo form_error('email'); ?></span>				    
			  </div>
			  <div class="form-group">
				<label for="exampleFormControlFile1">User name</label>
				<input class="form-control" name="username" type="text" placeholder="Enter Username">
				<span><?php echo form_error('username'); ?></span>
		      </div>
		      <div class="form-group">
		      	<label for="exampleFormControlFile1">Type</label>
		      		<select class="form-control" name="type">
  					<option>Waiter</option>
  					<option>Manager</option>
  					<option>Receptonist</option>
					</select>
					<span><?php echo form_error('type'); ?></span>
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
              <div class="modal-body">
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

        <!--------------------Start the delete modal for system users---------------------------------->

        <div class="modal modal-danger fade" id="modal-danger">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Danger Modal</h4>
              </div>
              <div class="modal-body">
                <p>Do you want to delete the user?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline">Yes</button>
                <button type="button" class="btn btn-outline">No</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!------------------------End Deleting model---------------------------------->

        <!------------------------End System user model---------------------------------->


        <!----------------------------Start MENU------------------------------------------------------>

        <div class="container" id="menu">
		<div class="transbox div-over">
			<div class="panel panel-info">
				<div class="btn-right btn-top">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default2">Add Menu Item</button>
				</div>
				<div class="panel-heading"><h3>Menu</h3></div>

				<div class="panel-body">
					
					<div class="tb-responsive">
					<table class="table">
						<thead>
							<td>Food ID</td>
							<td>Food category</td>
							<td>Food name</td>
							<td>Regular Price</td>
							<td>Large Price</td>
							<td>Add or Remove</td>
						</thead>
						<tr>
					<?php
						if($fetch_menu_data->num_rows()>0)
						{
							foreach($fetch_menu_data->result() as $row)
						{
					?>

							<td><?php echo $row->itemid; ?></td>
							<td><p class="text-info"><?php echo $row->category; ?></p></td>
							<td><?php echo $row->itemname; ?></td>
							<td><?php echo $row->regularprice; ?></td>
							<td><?php echo $row->largeprice; ?></td>
							<td><input type="checkbox" value="">
							</td>
						</tr>
						<?php
							}

						}
						else
						{
						?>
						<tr>
							<td colspan="3">No Data Found</td>
						</tr>
						<?php
						}	
						?>
						
					</table>
			</div>
				
		</div>
		<div class="panel-footer">
			<button type="button" class="btn btn-primary">Save</button>
		</div>
	</div>
		</div>
	</div>
	<!--------------------------Start Menu Model-------------------------------->
	<!----------------------Edit system user details-registered system users-------------------------->
          <div class="modal fade" id="modal-default2">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Menu Item</h4>
              </div>
            <div class="box">
              <?php echo form_open("menu/menu_add"); ?>
			  <div class="form-group">
				<label for="exampleFormControlFile1">Menu Category</label>
				<input class="form-control" name="category" type="text" placeholder="Enter the Category">
				<?php echo form_error('category'); ?>
		      </div>
		      <div class="form-group">
				<label for="exampleFormControlFile1">Menu Item</label>
				<input class="form-control" name="itemname" type="text" placeholder="Enter Menu item name">
				<?php echo form_error('itemname'); ?>
		      </div>
		      <div class="form-group">
				<label for="exampleFormControlFile1">Regular Price</label>
				<input class="form-control" name="regularprice" type="text" placeholder="Enter Regular size Price">
				<?php echo form_error('regularprice'); ?>
		      </div>
		      <div class="form-group">
				<label for="exampleFormControlFile1">Large Price</label>
				<input class="form-control" name="largeprice" type="text" placeholder="Enter Large size Price">
				<?php echo form_error('largeprice'); ?>
		      </div>
		      
		     
		 </div>
              <div class="modal-body">
              	</div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
              <?php echo form_close(); ?>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- End Menu modal -->

    
<!--------------------End menu------------------------>

<!---------------------Start Reservation ---------------------------->

	<div class="container">
		<div class="transbox btn-top div-over" id="Reservation">
			<div class="panel panel-info">
				<div class="panel-heading">
					<button type="button" class="btn btn-primary pull-right">Generate Report</button>
					<h4>Reservations</h4>	
				</div>
				<div class="panel-body">
					<div class="tb-responsive">
						<table class="table">
							<thead>
								<th>OrderID</th>
								<th>CustomerID</th>
								<th>Ordered Date</th>
								<th>Reserved Date and Time</th>
								<th>Price</th>
								<th>Status</th>
							</thead>
							<tr>
								<td>#4123</td>
								<td><a href="">#AS121</a></td>
								<td>22nd March 2017 Tuesday</td>
								<td>24th March 2017 12:15pm</td>
								<td>4300.00</td>
								<td>Ready</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="panel-footer">
					<button type="button" class="btn btn-primary">Cancel Reservation</button>
				</div>
		</div>
	</div>
	</div>
	<!-------------------------End Reservation---------------------------------->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?php echo base_url().'css/js/bootstrap.js';?>"></script>
</body>
</html>