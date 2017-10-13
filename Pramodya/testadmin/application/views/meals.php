<?php
    include_once ('sidenav.php');

?>
	
<div class="container">
	<h3>Insert Data To Meals</h3>
		<?php
			if($this->uri->segment(3)=="updated"){
				echo '<p class="text-success">Data Updated</p>';
			}

		?>
		<?php
			if($this->uri->segment(3)=="inserted"){
				echo '<p class="text-success">Data Inserted</p>';
			}

		?>
		
		<!-- update start from here ##################################################-->
		<?php 
		if(isset($user_data)){
			foreach($user_data->result_array()as $row){
		?>

		<?php echo form_open_multipart('main/form_Update_common/meals/'.$row['id']);?>
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control" value="<?php echo $row['name'] ?>">
			<!-- print error message -->
			<span class="text-danger"><?php echo form_error("name");?></span>
		</div>
		<div class="form-group">
			<label>Description</label>
			<input type="text" name="description" class="form-control" value="<?php echo $row['description'] ?>">
			<!-- print error message -->
			<span class="text-danger"><?php echo form_error("description");?></span>
		</div>
		<div class="form-group">
			<label>Price</label>
			<input type="text" name="price" class="form-control" value="<?php echo $row['price'] ?>">
			<!-- print error message -->
			<span class="text-danger"><?php echo form_error("price");?></span>
		</div>
		<div class="form-group">
			<label>Discount</label>
			<input type="text" name="discount" class="form-control" value="<?php echo $row['discount'] ?>">
			<!-- print error message -->
			<span class="text-danger"><?php echo form_error("discount");?></span>
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


	<?php echo form_open_multipart('main/form_validation_food/meals');?>
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control">
			<!-- print error message -->
			<span class="text-danger"><?php echo form_error("name");?></span>
		</div>
		<div class="form-group">
			<label>Description</label>
			<input type="text" name="description" class="form-control">
			<!-- print error message -->
			<span class="text-danger"><?php echo form_error("description");?></span>
		</div>
		<div class="form-group">
			<label>Price</label>
			<input type="text" name="price" class="form-control">
			<!-- print error message -->
			<span class="text-danger"><?php echo form_error("price");?></span>
		</div>
		<div class="form-group">
			<label>Discount</label>
			<input type="text" name="discount" class="form-control">
			<!-- print error message -->
			<span class="text-danger"><?php echo form_error("discount");?></span>
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
	<h3>Meals Table</h3>

 	<div class="table-responsive">
 		<table class="table table-bordered">
 			<tr>
 				<th>ID</th>
 				<th>Image</th>
 				<th>Name</th>
 				<th>Description</th>
 				<th>Price(Rs)</th>
 				<th>Discount(Rs)</th>
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
 					<td><?php echo $row->name; ?></td>
 					<td><?php echo $row->description; ?></td>
 					<td><?php echo $row->price; ?></td>
 					<td><?php echo $row->discount; ?></td>
 					<!-- <td><a href="<?php echo base_url();?>main/delete_data" class="delete_data" id="<?php echo 
 					$row->id; ?>">Delete</a></td> -->
 					<td><a href="<?php echo base_url()."main/delete_data/meals/".$row->id ;?>">Delete</a></td>
 					<td><a href="<?php echo base_url()."main/update_data/meals/".$row->id ;?>">Update</a></td>
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
      

