<?php include_once('includes/header1.php');?>
	<header>
		<div class="container">
			
			<?php include_once('includes/navbar.php');?>
		</div>
	</header>

	<?php if(isset($_SESSION['msg'])): ?>          
		<div class="msg">
			<?php  
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			?>
		</div>
	<?php endif ?>
	
	<table >
		<thread>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Description</th>
				<th>Price</th>
				<th>Discount</th>
				<th colspan="2">Update</th>
				<th colspan="2">Delete</th>
			</tr>
		</thread>
		<tbody>
			<?php
			if($fetch_dessert_data->num_rows()>0)
			{
				foreach($fetch_dessert_data->result() as $row)
				{
			?>
				<tr>
					<td><?php echo $row->id; ?></td>
					<td><?php echo $row->name; ?></td>
					<td><?php echo $row->description; ?></td>
					<td><?php echo $row->price; ?></td>
					<td><?php echo $row->discount; ?></td>
					<td><span class="align-middle"><button type="button" class="btn btn-warning">Edit</button></span></td>
					<td><span class="align-middle"><button type="button" class="btn btn-danger">Delete</button></span></td>
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

	<form method="post" action="desserts_server.php">
	<!--<input type="hidden" name="id" value="<?php echo $id; ?>">
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name"  value="<?php echo $name; ?>">
		</div>
		<div class="input-group">
			<label>Description</label>
			<input type="text" name="description" value="<?php echo $description; ?>">
		</div>
		<div class="input-group">
			<label>Price</label>
			<input type="text" name="price"  value="<?php echo $price; ?>">
		</div>
		<div class="input-group">
			<label>discount</label>
			<input type="text" name="discount"  value="<?php echo $discount; ?>">
		</div>
		
		<div class="input-group">
			<!--<?php if($edit_state ==false): ?>
				<button type="submit" name="save" class="btn">Save</button>
			<?php else: ?>
				<button type="submit" name="update" class="btn">Update</button>
			<?php endif ?>
				
		</div>

	</form>-->
	

</body>
</html>