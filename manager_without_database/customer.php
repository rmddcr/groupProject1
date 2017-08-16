<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
<body>
	<header>
		<div class="container">
			
			<nav>
				<ul>
					<li ><a href="manager_home.php">Home</a></li>
					<li class="current" ><a href="customer.php">Customers</a></li>
					<li ><a href="employee.php">Employee</a></li>
					<li ><a href="logout.php">Logout</a></li>
			</nav>
		</div>
	</header>

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
			
				<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td>
					<a class="edit_btn" >Edit</a>
				</td>
				<td>
					<a class="del_btn" >Delete</a>
				</td>
			</tr>
			
					
		</tbody>
	</table>

	<!-- form -->
	<form method="post" action="">
	<input type="hidden" name="id" >
		<div class="input-group">
			<label>FirstName</label>
			<input type="text" name="firstname"  >
		</div>
		<div class="input-group">
			<label>LansName</label>
			<input type="text" name="lastname">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email">
		</di
		<div class="input-group">
			<label>Password</label>
			<input type="text" name="password" >
		</div>
		<div class="input-group">
			
				<button type="submit" name="save" class="btn">Save</button>
		<!--else button
				<button type="submit" name="update" class="btn">Update</button>
		-->
				
		</div>

	</form>


	<footer>
		<p>Team Halcyon web design, copyright &copy; 2017</p>
	</footer>
</body>
</html>
