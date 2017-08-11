<?php include('server.php');
		//fetch the record to be updated
	if(isset($_GET['edit'])){
		$id= $_GET['edit'];
		$edit_state =true;
		$rec=mysqli_query($db,"SELECT * FROM users WHERE id='$id'");
		$record=mysqli_fetch_array($rec);
		$firstname=$record['firstname'];
		$lastname=$record['lastname'];
		$email=$record['email'];
		$password=$record['password'];
		$id=$record['id'];
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Customer</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<header>
		<div class="container">
			
			<nav>
				<ul>
					<li ><a href="admin.php">Home</a></li>
					<li class="current"><a href="remove_users.php">Customers</a></li>
					<li><a href="addmealsandoffers.php">Meals</a></li>
					<li ><a href="desserts.php">Desserts</a></li>
					<li ><a href="beverages.php">Beverages</a></li>
					<li ><a href="login.php">Logout</a></li>
			</nav>
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
				<td>
					<a class="edit_btn" href="remove_users.php?edit=<?php echo $row['id']; ?>">Edit</a>
				</td>
				<td>
					<a class="del_btn" href="server.php?del=<?php echo $row['id']; ?>">Delete</a>
				</td>
			</tr>
			<?php } ?>
			
			
		</tbody>
	</table>

	<form method="post" action="server.php">
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
		</di
		<div class="input-group">
			<label>Password</label>
			<input type="text" name="password" value="<?php echo $password; ?>">
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