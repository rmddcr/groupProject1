<?php
    include_once ('sidenav.php');

?>
	
<div class="container">
	<h3>Insert Data To Employee</h3>
	
		<?php
			if($this->uri->segment(2)=="inserted"){
				echo '<p class="text-success">Data Inserted</p>';
			}

		?>
		<?php
			if($this->uri->segment(3)=="updated"){
				echo '<p class="text-success">Data Updated</p>';
			}

		?>
		<!-- update start from here ##################################################-->

		<?php 
		if(isset($user_data)){
			foreach($user_data->result_array()as $row){
		?>
		<?php echo form_open_multipart('main/update_form_data_employee/employee/'.$row['id']);?>
			<div class="form-group">
				<label>First Name</label>
				<input type="text" name="firstname" class="form-control" value="<?php echo $row['firstname'] ?>">
				<!-- print error message -->
				<span class="text-danger"><?php echo form_error("firstname");?></span>
			</div>
			<div class="form-group">
				<label>Last Name</label>
				<input type="text" name="lastname" class="form-control" value="<?php echo $row['lastname'] ?>">
				<!-- print error message -->
				<span class="text-danger"><?php echo form_error("lastname");?></span>
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" class="form-control" value="<?php echo $row['email'] ?>">
				<!-- print error message -->
				<span class="text-danger"><?php echo form_error("email");?></span>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" value="<?php echo $row['password'] ?>">
				<!-- print error message -->
				<span class="text-danger"><?php echo form_error("password");?></span>
			</div>
			<div class="form-group">
				<label>position</label>
				<input type="position" name="position" class="form-control" value="<?php echo $row['position'] ?>">
				<!-- print error message -->
				<span class="text-danger"><?php echo form_error("position");?></span>
			</div>
			<div class="form-group">
				<label>Salary Per Hour</label>
				<input type="salary_per_hour" name="salary_per_hour" class="form-control" value="<?php echo $row['salary_per_hour'] ?>">
				<!-- print error message -->
				<span class="text-danger"><?php echo form_error("salary_per_hour");?></span>
			</div>
			<div class="form-group">
				<label>description</label>
				<input type="description" name="description" class="form-control" value="<?php echo $row['description'] ?>">
				<!-- print error message -->
				<span class="text-danger"><?php echo form_error("description");?></span>
			</div>
			<div class="form-group">
				<label>Image</label>
				<input type="file" name="file_name">
			</div> 
			<div class="form-group">
				<input type="submit" name="update" value="Update" class="btn-info btn-fill active">
			</div>
		<?php	
			}
		}else{

		?>
		<!-- end from here ####################################################-->

		<?php echo form_open_multipart('main/form_validation_employee/employee');?>
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
			<label>Position</label>
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
			<label>Image</label>
			<input type="file" name="file_name">
		</div>
		<div class="form-group">
			<input type="submit" name="insert" value="Insert" class="btn-info btn-fill active">
		</div>
	
		<?php
		}
		?> 
	
	<?php echo form_close();?>

 </div>

 <!-- table -->
 	<br><br>
	<h3>Employee Table</h3>

 	<div class="table-responsive">
 		<table class="table table-bordered">
 			<tr>
 				<th>ID</th>
 				<th>Image</th>
 				<th>First Name</th>
 				<th>Last Name</th>
 				<th>Email</th>
 				<th>Password</th>
 				<th>Position</th>
 				<th>SalaryPerHour(Rs)</th>
 				<th>Description</th>
 				<th>Delete</th>
 				<th>Update</th>
 			</tr>
 			<?php
 				if($fetch_data->num_rows()>0){
 					foreach($fetch_data->result() as $row){
 			?>
 				<tr>
 					<td><?php echo $row->id; ?></td>
 					<td><img src="<?php echo base_url().'uploads/'.$row->picture;?>" height="60" width="100"></td>
 					<td><?php echo $row->firstname; ?></td>
 					<td><?php echo $row->lastname; ?></td>
 					<td><?php echo $row->email; ?></td>
 					<td><?php echo $row->password; ?></td>
 					<td><?php echo $row->salary_per_hour; ?></td>
 					<td><?php echo $row->salary_per_hour; ?></td>
 					<td><?php echo $row->description; ?></td>
 					<!-- <td><a href="<?php echo base_url();?>main/delete_data" class="delete_data" id="<?php echo 
 					$row->id; ?>">Delete</a></td> -->
 					<td><a href="<?php echo base_url()."main/delete_data/employee/".$row->id ;?>">Delete</a></td>
 					<td><a href="<?php echo base_url()."main/update_data/employee/".$row->id ;?>">Update</a></td>
 				</tr>
 			<?php		
 					}
 				}else{
 				?>
 					<tr>
 						<td colspan="3">No Data Found</td>
 					</tr>
 				<?php
 				}
 			?>
 		</table>
  	</div>

  	
<?php
    include_once ('footer.php');
?>
      

