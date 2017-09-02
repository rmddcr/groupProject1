<?php include_once('includes/header1.php');?>
<header>
		<div class="container">
			
			<?php include_once('includes/navbar.php');?>
		</div>
	</header>

<div id="form-group">
	<!--<h1>Create an Account</h1>-->
		<?php
		echo form_open('login/create_member');
		echo form_input('first_name', set_value('first_name','First Name'));
		echo form_input('last_name', set_value('last_name','Last Name'));
		echo form_input('email', set_value('email','Email Address'));
		echo form_input('username', set_value('username','Username'));
		$options = array(
        '1'         => 'Waiter',
        '2'         => 'Receptionist',
      	'3'			=> 'Chef'
  		);

		$shirts_on_sale = array('small', 'large');
		echo form_dropdown('type', $options,array(), 'style="width: 275px;  font-size: 14px; color: #39898D; border: 5px; margin: 0 0 1em 0; border-radius: 4px; padding: 1em"');
		echo form_password('password','','placeholder="Password" class="password"');
		echo form_password('password_confirm','','placeholder="Confirm Password" class="password_confirm"');
		echo form_submit('submit','Update');
		?>
		<?php echo validation_errors('<p class="errors">'); ?>
</div>
<div >
		<table >
			<thead >
	 		<tr>
				<th>Id</th>
				<th>FirstName</th>
				<th>LastName</th>
				<th>Email</th>
				<th>userLevel</th>
				<th colspan="4">Action</th>
			</tr>
		</thead>
		<?php
			if($fetch_data->num_rows()>0)
			{
				foreach($fetch_data->result() as $row)
				{
			?>
				<tr>
					<td><?php echo $row->id; ?></td>
					<td><?php echo $row->first_name; ?></td>
					<td><?php echo $row->last_name; ?></td>
					<td><?php echo $row->email; ?></td>
					<td><?php echo $row->level; ?></td>
					<!--<td id="actBtn"><span class="align-middle"><button type="button" class="btn btn-warning" onclick="edit_member(<?php echo $id->id;?>)">Edit</button><button type="button" class="btn btn-danger" onclick="delete_member(<?php echo $id->id;?>)">Delete</button></span></td>-->
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
	
			
			
				
		</table>
	</div>
  <script src="<?php echo base_url();?>js/jquery-3.1.0.min.js"></script>
  <script src="<?php echo base_url()?>js/bootstrap.min.js"></script>
  <script src="<?php echo base_url()?>js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url()?>js/dataTables.bootstrap.js"></script>
	
  <script type="text/javascript">
	php $(document).ready( function () {
      $('#table_id').DataTable();
  } );
    var save_method; //for save method string
   	var table;

   	function edit_member(id){
   		save_method = 'update';
   		$('form')[0].reset();

   		$.ajax({
   			url: "<?php echo site_url('index.php/')?>"+ id,
   			type:"GET",
   			dataType: "JSON",
   			success: function(data)
   			{
   				$('[name="id"]').val(data.id);
   				$('[name="first_name"]').val(data.first_name);
   				$('[name="last_name"]').val(data.last_name);
   				$('[name="email"]').val(data.email);
   				$('[name="level"]').val(data.level);

   				$('#model_form').modal('show');
   				$('.modal-title').text('Edit member');

   			},
   			error: function(jqXHR, textStatus, errorThrown)
   			{
   				alert('Error get data from ajax');
   			}
   		});


   	}

   	function delete_member(id){
   		if(Confirm('Are you sure delete this data?')){
   			$.ajax({
   				url: "<?php echo site_url('index.php/login/member_delete')?>/"+id,
   				type: "POST",
   				dataType: "JSON",
   				success:function(data)
   				{
   					location.reload();
   				}
   				error: function(jqXHR, textStatus, errorThrown)
   				{
   					alert('Error deleting data');
   				}
   			});
   		}
   	}
   	
   	<?php include_once('includes/footer.php');?>
   	