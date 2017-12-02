<?php
    include_once ('sidenav.php');

?>
	
<div class="container">
	<h3>Insert Data To Rice</h3>
	
		<?php
			if($this->uri->segment(3)=="updated"){
				echo '<p class="text-success">Data Updated</p>';
			}else if($this->uri->segment(3)=="deleted"){
				echo '<p class="text-success">Deleted</p>';
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

		<?php echo form_open_multipart('main/form_Update_common/rice/'.$row['meal_item_id']);?>
		<div class="form-group">
			<label>Item_code</label>
			<input type="text" name="item_code" class="form-control" value="<?php echo $row['meal_item_code'] ?>">
			<!-- print error message -->
			<span class="text-danger"><?php echo form_error("meal_item_code");?></span>
		</div>
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control" value="<?php echo $row['meal_item_name'] ?>">
			<!-- print error message -->
			<span class="text-danger"><?php echo form_error("name");?></span>
		</div>
		<div class="form-group">
			<label>Item_Category</label>
			<input type="text" name="item_category" class="form-control" value="<?php echo $row['meal_item_cat'] ?>">
			<!-- print error message -->
			<span class="text-danger"><?php echo form_error("item_category");?></span>
		</div>
		<div class="form-group">
			<label>Description</label>
			<input type="text" name="description" class="form-control" value="<?php echo $row['meal_item_desc'] ?>">
			<!-- print error message -->
			<span class="text-danger"><?php echo form_error("description");?></span>
		</div>
		<div class="form-group">
			<label>Price</label>
			<input type="text" name="price" class="form-control" value="<?php echo $row['meal_item_price'] ?>">
			<!-- print error message -->
			<span class="text-danger"><?php echo form_error("price");?></span>
		</div>
		
		<div class="form-group">
			<label>Item_rating</label>
			<input type="text" name="item_rating" class="form-control" value="<?php echo $row['meal_item_rating'] ?>">
			<!-- print error message -->
			<span class="text-danger"><?php echo form_error("item_rating");?></span>
		</div>
		<div class="form-group">
			<label>Image</label>
			<input type="file" name="file_name" value"<?php echo $row['meal_item_picture']?>">
		</div> 
		
		<div class="form-group">
			<input type="submit" name="update" value="Update" class="btn-info btn-fill active">
		</div>
		<?php	
			}
		}else{

		?>
	
		<!-- end from here ####################################################-->

		<!-- insert start from here -->
		<?php echo form_open_multipart('main/form_validation_food/rice');?>
		<div class="form-group">
			<label>Item_Code</label>
			<input type="text" name="item_code" class="form-control">
			<!-- print error message -->
			<span class="text-danger"><?php echo form_error("item_code");?></span>
		</div>
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control">
			<!-- print error message -->
			<span class="text-danger"><?php echo form_error("name");?></span>
		</div>
		<div class="form-group">
			<label>Item_Category</label>
			<input type="text" name="item_category" class="form-control" value="4">
			<!-- print error message -->
			<span class="text-danger"><?php echo form_error("item_category");?></span>
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
			<label>Item_rating</label>
			<input type="text" name="item_rating" class="form-control">
			<!-- print error message -->
			<span class="text-danger"><?php echo form_error("item_rating");?></span>
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
	<h3>Rice Table</h3>

 	<div class="table-responsive">
 		<table class="table table-bordered">
 			<tr>
 				<th>ID</th>
 				<th>Item_Code</th>
 				<th>Image</th>
 				<th>Name</th>
 				<th>Item Category</th>
 				<th>Description</th>
 				<th>Price(Rs)</th>
 				
 				<th>Item_Rating</th>
 				<th>Delete</th>
 				<th>Update</th>
 			</tr>

 			<!-- get the table data form the controller as a array and view it here -->
 			<?php
 				if($fetch_data->num_rows()>0){
 					foreach($fetch_data->result() as $row){
 			?>
 				<tr>
 					<td><?php echo $row->meal_item_id; ?></td>
 					<td><?php echo $row->meal_item_code; ?></td>
 					<td><img src="<?php echo base_url().'uploads/'.$row->meal_item_picture;?>" height="60" width="100"></td>
 					<td><?php echo $row->meal_item_name; ?></td>
 					<td><?php echo $row->meal_item_cat; ?></td>
 					<td><?php echo $row->meal_item_desc; ?></td>
 					<td><?php echo $row->meal_item_price; ?></td>
 					<td><?php echo $row->meal_item_rating; ?></td>
 					
 					<!-- delete and update buttons -->
 					<td><a href="<?php echo base_url()."main/delete_data/rice/".$row->meal_item_id ;?>">Delete</a></td>
 					<td><a href="<?php echo base_url()."main/update_data/rice/".$row->meal_item_id ;?>">Update</a></td>
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
      

