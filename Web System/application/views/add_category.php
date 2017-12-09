<!DOCTYPE html>
<html>
<head>
	<title>Add category</title>
</head>
<body>
	<?php echo form_open_multipart('main/add_cat_to_model');?>
		
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="cat_name" class="form-control">
		</div>

		<div class="form-group">
			<label>Image</label>
			<input type="file" name="file_name">
		</div> 
		
		<div class="form-group">
			<input type="submit" name="insert" value="Insert" class="btn-info btn-fill active">
		</div>
		
	<?php echo form_close();?>

	<br>
	<h3>Item Table</h3>

 	<div class="table-responsive">
 		<table class="table table-bordered">
 			<tr>
 				<th>ID</th>
 				<th>Item Name</th>
 				<th>Image</th>
  				<th>Delete</th>
 				
 			</tr>

 			<!-- get the table data form the controller as a array and view it here -->
 			<?php
 				if($fetch_data->num_rows()>0){
 					foreach($fetch_data->result() as $row){
 			?>
 				<tr>
 					<td><?php echo $row->meal_cat_id; ?></td>
 					<td><?php echo $row->meal_cat_name; ?></td>
 					<td><img src="<?php echo base_url().'uploads/'.$row->meal_cat_image;?>" height="60" width="100"></td>
 					
 					
 					<!-- delete and update buttons -->
 					<td><a href="<?php echo base_url()."main/delete_data/"."meal_cat/".$row->meal_cat_id ;?>">Delete</a></td>
 					
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
		

	
	
</body>
</html>