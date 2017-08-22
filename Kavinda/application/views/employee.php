<?php include('employee_server.php');
		//fetch the record to be updated
	if(isset($_GET['edit'])){
		$id= $_GET['edit'];
		$edit_state =true;
		$rec=mysqli_query($db,"SELECT * FROM employee WHERE id='$id' AND valid_bit='0'");
		$record=mysqli_fetch_array($rec);
		$firstname=$record['firstname'];
		$lastname=$record['lastname'];
		$email=$record['email'];
		$password=$record['password'];
		$id=$record['id'];
		$position=$record['position'];
		$salary_per_hour=$record['salary_per_hour'];
		$description=$record['description'];
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
				<th>FirstName</th>
				<th>LastName</th>
				<th>Email</th>
				<th>Password</th>
				<th>Position</th>
				<th>Salary_per_hour(Rs)</th>
				<th>Description</th>

				<th colspan="2">Action</th>
			</tr>
		</thread>
		<tbody>
			<?php while ($row = mysqli_fetch_array($results)){?>
				<tr>
				<td><?php echo $row["id"]; ?></td>
				<td><?php echo $row["firstname"]; ?></td>
				<td><?php echo $row["lastname"]; ?></td>
				<td><?php echo $row["email"] ?></td>
				<td><?php echo $row["password"]; ?></td>
				<td><?php echo $row["position"]; ?></td>
				<td><?php echo $row["salary_per_hour"]; ?></td>
				<td><?php echo $row["description"]; ?></td>
				<td>
					<a class="edit_btn" href="employee.php?edit=<?php echo $row['id']; ?>">Edit</a>
				</td>
				<td>
					<a class="del_btn" href="employee_server.php?del=<?php echo $row['id']; ?>">Delete</a>
				</td>
			</tr>
			<?php } ?>
			
			
		</tbody>
	</table>

	<form method="post" action="employee_server.php">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
		<div class="input-group">
			<label>FirstName</label>
			<input type="text" name="firstname"  value="<?php echo $firstname; ?>">
		</div>
		<div class="input-group">
			<label>LansName</label>
			<input type="text" name="lastname" value="<?php echo $lastname; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="text" name="password" value="<?php echo $password; ?>">
		</div>
		<div class="input-group">
			<label>Position</label>
			<input type="text" name="position" value="<?php echo $position; ?>">
		</div>
		<div class="input-group">
			<label>Salary per hour</label>
			<input type="text" name="salary_per_hour" value="<?php echo $salary_per_hour; ?>">
		</div>
		<div class="input-group">
			<label>Description</label>
			<input type="text" name="description" value="<?php echo $description; ?>">
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