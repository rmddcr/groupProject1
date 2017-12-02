<html>
<head>
	<title>HRM</title>
	<!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url().'css/skins/_all-skins.min.css';?>">
  <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	
    <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url().'css/Ionicons/css/ionicons.min.css';?>">
  
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

        <link rel="stylesheet" tyspe="text/css" href="<?php echo base_url().'css/style1.css';?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/css/bootstrap.min.css';?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/css/bootstrap.css';?>">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--<script src="<?php echo base_url().'js/bootstrap.min.js';?>"></script>-->
    
</head>
<body>
<header>
	<div class="navbar navbar-inverse navbar-static-top nav-position">
		<div class="container">
			<a href="<?php echo base_url().'user'?>" class="navbar-brand">Dashboard</a>
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		<!------------------------Start Navbar------------------------------>
		<div class="collapse navbar-collapse navHeaderCollapse">
			<ul class="nav navbar-nav">
				<li><a href="<?php echo base_url().'user'?>">Home</a></li>
				<li><a href="<?php echo base_url().'staff/man'?>">Add System user</a></li>
				<li><a href="#menu">Menu</a></li>
				<li><a href="#Reservation">Reservations</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Inventory</a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo base_url().'Hotel'?>">Hotel</a></li>
						<li><a href="<?php echo base_url().'Kitchen'?>">Kitchen</a></li>
						<li><a href="#">Restaurant</a></li>
					</ul>
				</li>
				<li><a href="<?php echo base_url().'#'?>">Payroll Management</a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
      			<li><a href="<?php echo base_url().'main/logout'?>">Log out</a></li>
    	</ul>

		</div>
	</div>
	</div>
	<!------------------------End Navbar---------------------------------->
</header>
	<!--  Video is muted & autoplays, placed after major DOM elements for performance & has an image fallback  -->
	<video autoplay loop id="video-background" muted plays-inline>
	  <source src="<?php echo base_url().'css/images/backgorundVideo.mp4?s=8e8741dbee251d5c35a759718d4b0976fbf38b6f&profile_id=119&oauth2_token_id=57447761';?>" type="video/mp4">
	</video>




	<div class="container">
		<div class="transbox">
			<div class="panel">
			    <div class="box">
			<div class="panel-header">
			    <div class="box-header">
              <a href="<?php echo base_url().'staff/man';?>"><h3 class="box-title">Staff Members</h3></a>
            </div>
			</div>

	        
            
        <div class="panel-body">
			
            <!-- /.box-header -->
            <div class="box-body">
              <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         
         
            
            <!-- /.box-header -->
            <div class="box-body">
            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap AVAST_PAM_nonloginform">
            
             <div class="row">   
            <div class="col-md-4">
            <div class="dataTables_length" id="example1_length">
            	<a href="<?php echo base_url().'staff/reg';?>"><button type="button" class="btn btn-success">Add Staff Member</button></a>
            </div>    
            </div>
            
            <div class="col-md-4 col-md-offset-4">
            <div id="example1_filter" class="dataTables_filter">
            
            
			<!--<?php echo form_open("staff/search"); ?>	
            <input id="searchbar" type="search" name="ID" class="form-control input-sm" placeholder="Enter User ID" aria-controls="example1">
            <button id="searchbtn" type="submit" class="btn btn-primary" >Search</button>
            <?php echo form_close(); ?>-->
            <div class="form-group pull-right">
                <input type="text" class="search form-control" placeholder="What you looking for?">
            </div>
            </div>
            </div>
            </div>
            <div class="tb-responsive">
            <div class="row">
            <div class="col-sm-12">
              <table id="my_table" class="table table-bordered table-striped">
                <thead>
                <tr role="row">
                  <th>ID</th>
                  <th>Image</th>
                  <th>ID_Type</th>
                  <th>Destignation</th>
                  <th>Full Name</th>
                  <th>First Name</th>
                  <th>Contact Number</th>
                  <th>Email</th>
                  <th>DOB</th>
                  <th>ETF</th>
                  <th>EPF</th>
                  <th>Gender</th>
                  <th>Experience</th>
                  <th>Qualification</th>
                  <th>Insurance Number</th>
                  <th>Address</th>
                  <th>Status</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php 
					foreach ($staff_data as $row) {
						$id = $row->ID;
						$id_type = $row->ID_Type;
						$image = $row->profilepicture;
						$dest = $row->Designation;
						$fullname = $row->Full_Name;
						$fname = $row->fname;
						$cnumber = $row->Contact_number;
						$email = $row->Email;
						$dob = $row->DOB;
						$etf = $row->ETF_Number;
						$epf = $row->EPF_Number;
						$gender = $row->Gender;
						$exper = $row->Experience;
						$qual = $row->Qualification;
						$inumber = $row->In_Number;
						$refer = $row->Refer;
						$address = $row->Address;
						$status = $row->status;	
						echo "<tr>";
			            echo "<td id='id$id'>";
			            echo $id;
			            echo "</td>";
			            echo "<td>";
			            echo $image;
			            echo "</td>";
			            echo "<td id='id_type$id'>";
			            echo $id_type;
			            echo "</td>";
			            echo "<td id='dest$id'>";
			            echo $dest;
			            echo "</td>";
			            echo "<td id='fullname$id'>";
			            echo $fullname;
			            echo "</td>";
			            echo "<td id='fname$id'>";
			            echo $fname;
			            echo "</td>";
			            echo "<td id='cnumber$id'>";
			            echo $cnumber;
			            echo "</td>";
			            echo "</td>";
			            echo "<td id='email$id'>";
			            echo $email;
			            echo "</td>";
			            echo "</td>";
			            echo "<td id='dob$id'>";
			            echo $dob;
			            echo "</td>";
			            echo "</td>";
			            echo "<td id='etf$id'>";
			            echo $etf;
			            echo "</td>";
			            echo "</td>";
			            echo "<td id='epf$id'>";
			            echo $epf;
			            echo "</td>";
			            echo "</td>";
			            echo "<td id='gender$id'>";
			            echo $gender;
			            echo "</td>";
			            echo "</td>";
			            echo "<td id='exper$id'>";
			            echo $exper;
			            echo "</td>";
			            echo "</td>";
			            echo "<td id='qual$id'>";
			            echo $qual;
			            echo "</td>";
			            echo "</td>";
			            echo "<td id='inumber$id'>";
			            echo $inumber;
			            echo "</td>";
			            echo "</td>";
			            echo "<td id='refer$id'>";
			            echo $refer;
			            echo "</td>";
			            echo "</td>";
			            echo "<td id='address$id'>";
			            echo $address;
			            echo "</td>";
			            echo "<td>";
			            echo "<button onclick='editbtn($id)' >Edit</button>";
			            echo "</td>";
			            echo "<td>";
			            echo "<button onclick='deletebtn($id)'>Delete</button>";
			            echo "</td>";
			            echo "</tr>";
					}
				?>
                
                </tbody>
              </table>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 </div>
            </div>
		</div>
		
		</div>
            <!-- /.box-body -->
          </div>
         </div>

</div>
<div class="modal modal-danger fade" id="danger">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Danger Modal</h4>
              </div>
              <div class="modal-body">
				<p>Do you want to delete user?</p>
				<?php echo form_open("Staff/delete1"); ?>
				<div class="form-group">
				    
					<label for="exampleFormControlFile1">ID</label>
					
					<div class="col-sm-10">
					<input name='idnumber' class="form-control" type="text"  id="del_id" readonly>
		      	    </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-outline">Yes</button>
                <?php echo form_close(); ?>
                <button type="button" class="btn btn-outline" data-dismiss="modal">No</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        
        
        <div class="modal modal-danger fade" id="mymodel">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Modal</h4>
              </div>
              <div class="modal-body">
				<p>Do you want to edit user details?</p>
				<?php echo form_open("Staff/edituser"); ?>
				<div class="form-group">
				    
					<label for="exampleFormControlFile1">ID</label>
					
					<div class="col-sm-10">
					<input name='editnumber' class="form-control" type="text"  id="edit_id" readonly>
		      	    </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-outline">Yes</button>
                <?php echo form_close(); ?>
                <button type="button" class="btn btn-outline" data-dismiss="modal">No</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>


<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url().'css/js/bootstrap.min.js';?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url().'css/bower_components/datatables.net/js/jquery.dataTables.min.js';?>"></script>
<script src="<?php echo base_url().'css/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js';?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url().'css/bower_components/jquery-slimscroll/jquery.slimscroll.min.js';?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url().'css/bower_components/fastclick/lib/fastclick.js';?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'css/js/adminlte.min.js';?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url().'css/js/demo.js';?>"></script>
<!-- page script -->
<script>
function editbtn(id){
		console.log(id);
		var id = document.getElementById('id'+id).innerText;
		console.log(id);
		$("#mymodel").modal("show");
		document.getElementById('edit_id').value = id;			
	}

function deletebtn(id){
		console.log(id);
		var id = document.getElementById('id'+id).innerText;
		console.log(id);
		$("#danger").modal("show");
		document.getElementById('del_id').value = id;			
	}
</script>
<script>
$(document).ready(function(){
    $('.search').on('keyup',function(){
        var searchTerm = $(this).val().toLowerCase();
        $('#my_table tbody tr').each(function(){
            var lineStr = $(this).text().toLowerCase();
            if(lineStr.indexOf(searchTerm) === -1){
                $(this).hide();
            }else{
                $(this).show();
            }
        });
    });
});
</script>


</body>
</html>
