<?php
	session_start();
	//initialize variables
	$name="";
	$description="";
	$price=0;
	$discount=0;
	$id=0;
	$edit_state =false;
	
	//connect to database
	$db=mysqli_connect('127.0.0.1','root','root','test_database');
	//if save button is clicked
	if (isset($_POST['save'])){
		$name=$_POST['name'];
		$description=$_POST['description'];
		$price=$_POST['price'];
		$discount=$_POST['discount'];
		
		$query ="INSERT INTO meals (name,description,price,discount) VALUES ('$name','$description','$price','$discount')";
		mysqli_query($db,$query);
		$_SESSION['msg']="Meal saved";
		header('location:addmealsandoffers.php');
	}

	//update records
	if(isset($_POST['update'])){
		$name=$_POST['name'];
		$description=$_POST['description'];
		$price=$_POST['price'];
		$discount=$_POST['discount'];
		$id=$_POST['id'];

		mysqli_query($db,"UPDATE meals SET name='$name', description='$description', price='$price', discount='$discount' WHERE id='$id'");
		$_SESSION['msg']="Meal Updated";
		header('location: addmealsandoffers.php');

		
	}

	//delete records
	if(isset($_GET['del'])){
		$id=$_GET['del'];
		mysqli_query($db,"DELETE FROM meals WHERE  id='$id'");
		$_SESSION['msg']="Meal deleted";
		header('location:addmealsandoffers.php');
	}
	
	//retrieve records

	$results =mysqli_query($db,"select * from meals");
 ?>