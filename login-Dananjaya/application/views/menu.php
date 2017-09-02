<?php include_once('includes/header1.php');?>
<header>
		<div class="container">
			
			<?php include_once('includes/navbar.php');?>
		</div>
	</header>
<table>
	<tr>
		<td width=40%>
<div id="form-group">
	<!--<h1>Create an Account</h1>-->
		<?php
		echo form_open('login/create_menu');
		echo form_input('menu_name', set_value('menu_name','Menu Name'));
		echo form_input('price', set_value('price','Price'));
		$options = array(
        '1'         => 'Breakfast',
        '2'         => 'Lunch',
        '3'         => 'Dinner',
  		);

		
		echo form_dropdown('type', $options,array(), 'style="width: 275px;  font-size: 14px; color: #39898D; border: 5px; margin: 0 0 1em 0; border-radius: 4px; padding: 1em"');
		?>
		<?php echo "<input type='file' name='userfile' size='20' />"; ?><br/><br/>
		<?php
		echo form_input('discount', set_value('discount','Discount'));
		
		$js = 'onClick="some_function()"';
		echo form_checkbox('newsletter', 'accept', TRUE, $js);
		?>
		<br/>
		<?php
		echo form_submit('submit','Update');
		?>
		
		<?php echo validation_errors('<p class="errors">'); ?>
</div>
</td>

</tr>
</table>

<?php include_once('includes/footer.php');?>
