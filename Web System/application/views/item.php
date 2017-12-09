<?php
    include_once ('sidenav.php');

?>

	<!-- insert button -->
  		<a href="<?php echo base_url()."main/insert_item_form/".$item_category;?>">Insert</a>
  	

 <!-- table -->
 	<br><br>
	<h3>Item Table</h3>

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
 					<td><a href="<?php echo base_url()."main/delete_data/".$row->meal_item_cat."/".$row->meal_item_id ;?>">Delete</a></td>
 					<td><a href="<?php echo base_url()."main/update_data/". $row->meal_item_cat."/".$row->meal_item_id ;?>">Update</a></td>
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
      

