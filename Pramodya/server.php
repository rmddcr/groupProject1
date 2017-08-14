<?php
	session_start();
	//initialize variables
	$firstname="";
	$lastname="";
	$email="";
	$password="";
	$id=0;
	$edit_state =false;
	
	//connect to database
	$db=mysqli_connect('127.0.0.1','root','root','test_database');
	//if save button is clicked
	if (isset($_POST['save'])){
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$password=md5($password);

		$query ="INSERT INTO users (firstname,lastname,email,password) VALUES ('$firstname','$lastname','$email','$password')";
		mysqli_query($db,$query);
		$_SESSION['msg']="Customer saved";
		header('location:remove_users.php');
	}

	//update records
	if(isset($_POST['update'])){
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$password=md5($password);
		$id=$_POST['id'];

		mysqli_query($db,"UPDATE users SET firstname='$firstname', lastname='$lastname', email='$email', password='$password' WHERE id='$id'");
		$_SESSION['msg']="Customer Updated";
		header('location: remove_users.php');

		
	}

	//delete records
	if(isset($_GET['del'])){
		$id=$_GET['del'];
		mysqli_query($db,"DELETE FROM users WHERE  id='$id'");
		$_SESSION['msg']="Customer deleted";
		header('location:remove_users.php');
	}
	
	//retrieve records

	$results =mysqli_query($db,"select * from users");
 ?>