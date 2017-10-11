<?php
    include_once ('sidenav.php');
?>

<div class="container">
	<h3>Update Your Data</h3>
	<form method="post" action="<?php echo base_url().'main/form_validation_employee/userprofile';?>">
		<?php
			if($this->uri->segment(2)=="inserted"){
				echo '<p class="text-success">Data Inserted</p>';
			}

		?>
		<!-- update start from here ##################################################-->



		<!-- end from here ####################################################-->



		<div class="form-group">
			<label>First Name</label>
			<input type="text" name="firstname" class="form-control">
			<!-- print error message -->
			<span class="text-danger"><?php echo form_error("firstname");?></span>
		</div>
		<div class="form-group">
			<label>Last Name</label>
			<input type="text" name="lastname" class="form-control">
			<!-- print error message -->
			<span class="text-danger"><?php echo form_error("lastname");?></span>
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="text" name="email" class="form-control">
			<!-- print error message -->
			<span class="text-danger"><?php echo form_error("email");?></span>
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="password" name="password" class="form-control">
			<!-- print error message -->
			<span class="text-danger"><?php echo form_error("password");?></span>
		</div>
		<div class="form-group">
			<label>position</label>
			<input type="position" name="position" class="form-control">
			<!-- print error message -->
			<span class="text-danger"><?php echo form_error("position");?></span>
		</div>
		<div class="form-group">
			<label>Salary Per Hour</label>
			<input type="salary_per_hour" name="salary_per_hour" class="form-control">
			<!-- print error message -->
			<span class="text-danger"><?php echo form_error("salary_per_hour");?></span>
		</div>
		<div class="form-group">
			<label>description</label>
			<input type="description" name="description" class="form-control">
			<!-- print error message -->
			<span class="text-danger"><?php echo form_error("description");?></span>
		</div>
		<div class="form-group">
			<input type="submit" name="insert" value="Insert" class="btn-info btn-fill active">
		</div>
	
	
	</form>
   



<?php
    include_once ('footer.php');
?>
      

