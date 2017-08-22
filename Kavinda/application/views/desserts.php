<?php include('desserts_server.php');
		//fetch the record to be updated
	if(isset($_GET['edit'])){
		$id= $_GET['edit'];
		$edit_state =true;
		$rec=mysqli_query($db,"SELECT * FROM desserts WHERE id='$id'");
		$record=mysqli_fetch_array($rec);
		$name=$record['name'];
		$description=$record['description'];
		$price=$record['price'];
		$discount=$record['discount'];
		$id=$record['id'];
	}

?>
<!DOCTYPE html>
<html>
<head>
	<?php include('import/admin-css.php'); ?>
</head>
<body>
    <header>
        <div class="container">
            <?php include('import/admin-nav.php'); ?>
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
	
	<table>
		<thread>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Description</th>
				<th>Price(Rs)</th>
				<th>Discount(Rs)</th>
				 <th colspan="2">Action</th>
			</tr>
		</thread>
		<tbody>
			<?php while ($row = mysqli_fetch_array($results)){?>
				<tr>
				<td><?php echo $row["id"]; ?></td>
				<td><?php echo $row["name"]; ?></td>
				<td><?php echo $row["description"]; ?></td>
				<td><?php echo $row["price"]; ?></td>
				<td><?php echo $row["discount"]; ?></td>
				<td>
					<a class="edit_btn" href="desserts.php?edit=<?php echo $row['id']; ?>">Edit</a>
				</td>
				<td>
					<a class="del_btn" href="desserts_server.php?del=<?php echo $row['id']; ?>">Delete</a>
				</td>
			</tr>
			<?php } ?>
			
			
		</tbody>
	</table>

	<form method="post" action="desserts_server.php">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
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
			<?php if($edit_state ==false): ?>
				<button type="submit" name="save" class="btn">Save</button>
			<?php else: ?>
				<button type="submit" name="update" class="btn">Update</button>
			<?php endif ?>
				
		</div>

	</form>
	<footer>
		<p>Team Halcyon web design, copyright &copy; 2017</p>
	</footer>

</body>
</html>