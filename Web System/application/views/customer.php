<?php
    include_once ('sidenav.php');
?>
	

<div class="container">
	<h3>Insert Data TO Customer</h3>
		<?php
			if($this->uri->segment(3)=="updated"){
				echo '<p class="text-success">Data Updated</p>';
			}else if($this->uri->segment(3)=="deleted"){
				echo '<p class="text-success">Deleted</p>';
			}


		?>
		<?php
			if($this->uri->segment(2)=="inserted"){
				echo '<p class="text-success">Data Inserted</p>';
			}

		?>

		
		<!-- update start from here ##################################################-->

		<?php 
		if(isset($user_data)){
			foreach($user_data->result_array()as $row){
		?>
			<?php echo form_open_multipart('main/update_form_data_customer/customer/'.$row['cust_id']);?>
				<div class="form-group">
				<label>First Name</label>
			    <input type="text" name="firstname" class="form-control" value="<?php echo $row['cust_first_name'] ?>">
				<!-- print error message -->
				<span class="text-danger"><?php echo form_error("firstname");?></span>
			</div>
			<div class="form-group">
				<label>Last Name</label>
				<input type="text" name="lastname"  class="form-control" value="<?php echo $row['cust_last_name'] ?>">
				<!-- print error message -->
				<span class="text-danger"><?php echo form_error("lastname");?></span>
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" class="form-control" value="<?php echo $row['cust_email'] ?>">
				<!-- print error message -->
				<span class="text-danger"><?php echo form_error("email");?></span>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password"  class="form-control" value="<?php echo $row['cust_password']; ?>">
				<!-- print error message -->
				<span class="text-danger"><?php echo form_error("password");?></span>
			</div>
			<div class="form-group">
				<label>Image</label>
				<input type="file" name="file_name">
			</div> 
			<div class="form-group">
				<input type="submit" name="update" value="update" class="btn-info btn-fill active">
			</div>
		<?php	
			}
		}else{

		?>

		<!-- end from here ####################################################-->

		<!-- insert start from here -->
		<?php echo form_open_multipart('main/form_validation/customer');?>
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
	<h3>Customer Table</h3>

 	<div class="table-responsive">
 		<table class="table table-bordered">
 			<tr>
 				<th>ID</th>
 				<th>Image</th>
 				<th>First Name</th>
 				<th>Last Name</th>
 				<th>Email</th>
 				<th>Password</th>
 				<th>Delete</th>
 				<th>Update</th>
 			</tr>
 			<!-- get the table data form the controller as a array and view it here -->
 			<?php
 				if($fetch_data->num_rows()>0){
 					foreach($fetch_data->result() as $row){
 			?>
 				<tr>
 					<td><?php echo $row->cust_id; ?></td>
 					<td><img src="<?php echo base_url().'uploads/'.$row->cust_picture;?>" height="100" width="70"></td>
 					<td><?php echo $row->cust_first_name; ?></td>
 					<td><?php echo $row->cust_last_name; ?></td>
 					<td><?php echo $row->cust_email; ?></td>
 					<td><?php echo $row->cust_password; ?></td>
 				
 				<!-- delete and update buttons -->
 					<td><a href="<?php echo base_url()."main/delete_data/customer/".$row->cust_id ;?>">Delete</a></td>
 					<td><a href="<?php echo base_url()."main/update_data/customer/".$row->cust_id ;?>">Update</a></td>
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
      

