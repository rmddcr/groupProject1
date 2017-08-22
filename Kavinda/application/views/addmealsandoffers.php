<?php
    $edit_state = false;
//    var_dump($meals);
		//fetch the record to be updated
//	if(isset($_GET['edit'])){
//		$id= $_GET['edit'];
//		$edit_state =true;
//		$rec=mysqli_query($db,"SELECT * FROM meals WHERE id='$id'");
//		$record=mysqli_fetch_array($rec);
//		$name=$record['name'];
//		$description=$record['description'];
//		$price=$record['price'];
//		$discount=$record['discount'];
//		$id=$record['id'];
//	}

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
				<th>Meal Code</th>
				<th>Meal Name</th>
				<th>Meal Description</th>
				<th>Meal Price(Rs)</th>
				<th>Meal Category</th>
<!--                <th>Meal Picture</th>-->
                <th colspan="2">Action</th>
			</tr>
		</thread>
		<tbody>
			<?php foreach ($meals as $meal){?>
				<tr>
				<td><?php echo $meal->meal_code; ?></td>
				<td><?php echo $meal->meal_name; ?></td>
				<td><?php echo $meal->meal_desc; ?></td>
				<td><?php echo $meal->meal_price; ?></td>
				<td><?php echo $meal->meal_cat; ?></td>
<!--                <td>--><?php //echo $meal->meal_picture; ?><!--</td>-->
				<td>
					<a class="edit_btn" href="addmealsandoffers.php?edit=">Edit</a>
				</td>
				<td>
					<a class="del_btn" href="meals_server.php?del=s">Delete</a>
				</td>
			</tr>
			<?php } ?>
			
			
		</tbody>
	</table>
    </br>
    <center><h1>Add Meal</h1></center>
	<form method="post" action="<?php echo base_url();?>index.php/add_meal">
        <div class="input-group">
            <label>Meal Code</label>
            <input type="text" name="code" value="">
        </div>
		<div class="input-group">
			<label>Meal Name</label>
			<input type="text" name="name"  value="">
		</div>
		<div class="input-group">
			<label>Meal Description</label>
			<input type="text" name="desc" value="">
		</div>
		<div class="input-group">
			<label>Meal Price</label>
			<input type="number" name="price"  value="">
		</div>
		<div class="input-group">
			<label>Meal Category</label>
			<input type="text" name="cat"  value="">
		</div>
        <div class="">
            <label>Meal Image</label>
            <input type="file" name="meal_image">
        </div>
        </br>
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