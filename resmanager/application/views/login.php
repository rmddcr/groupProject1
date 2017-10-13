
<html>
<head>
	<title>Login form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/css/bootstrap.min.css';?>">
	<link rel="stylesheet" tyspe="text/css" href="<?php echo base_url().'css/style.css';?>">
</head>
<body>
	<div class="container">
		<div class="transbox">
			
		<form method="post" action="<?php base_url();?>validate">
			<div class="form-group">
				<label>Enter Username</label>
				<input type="text" name="username"/>
				<span><?php echo form_error('username'); ?></span>
			</div>
			<div class="form-group">
				<label>Enter Password</label>
				<input type="password" name="password" />
				<span><?php echo form_error('password'); ?></span>  
			</div>
			<div class="form-group">
				<input type="submit" name="insert" value="Login" class="btn btn-info" />
				<?php echo $this->session->flashdata("error");?>
			</div>
		</form>
	
	</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?php echo base_url().'css/js/bootstrap.js';?>"></script>

</body>
</html>