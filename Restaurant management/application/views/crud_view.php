<html>
<head>
	<title><?php echo $title; ?></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap4.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>js/bootstrap.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css" type="text/css">
</head>
<body>
	<div class="container box">
		<h3 align="center"> <?php echo $title; ?></h3><br/>
		<div class="table-responsive">
			<br/>
			<table id="user_data" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th width="10%">id</th>
						<th width="20%">picture</th>
						<th width="10%">name</th>
						<th width="20%">description</th>
						<th width="10%">price</th>
						<th width="10%">discount</th>
						<th width="10%">Edit</th>
						<th width="10%">Delete</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>

</body>
</html>
<script type="text/javascript" language="javascript">
$(document).ready(function(){
	var dataTable = $('#user_data').DataTable({
		"processing":true,
		"serverSide":true,
		"order":[],
		"ajax":{
			url:"<?php echo base_url().'crud/fetch_user'; ?>",
			type:"POST"
		},
		"columnDefs":[
			"targets":[1,3,4,5,6,7],
			"orderable":false,
		]
	});
});

</script>