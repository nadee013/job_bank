<div id= "content">

	<h3>Basic Information</h3>
<?php echo form_open("", array("class"=> "form-horizontal"));?>
	
<?php foreach($basic as $basic) { ?>
	<div>
		<b>Name :</b><?php echo "  {$basic['title']} {$basic['f_name']} {$basic['l_name']}"; ?>
	</div>
	<div >
		<b>Date of Birth :</b> <?php echo date("Y-M-d", $basic["dob"]); ?>
	</div>
	<div >
		<b>Gender :</b> <?php echo "  {$basic['gender']}"; ?>
	</div>
	<div >
		<b>Civil Status :</b> <?php echo "  {$basic['civil_status']}"; ?>
	</div>
	<div >
		<b>Address :</b> <?php echo "  {$basic['address']}"; ?>
	</div>
	<div >
		<b>District :</b> <?php echo "  {$basic['district']}"; ?>
	</div>
	<div >
		<b>Country :</b> <?php echo "  {$basic['country']}"; ?>
	</div>
	<div >
		<b>Nationality :</b> <?php echo "  {$basic['nationality']}"; ?>
	</div>
	<div >
		<b>NIC No :</b> <?php echo "  {$basic['nic_no']}"; ?>
	</div>
	<div>
		<b>Telephone Number :</b> Mobile<?php echo " - {$basic['tp_mobile']} | "; ?> Home <?php echo " - {$basic['tp_hm']}"; ?></label>
	</div>
	</br></br>
	<?php } ?>
	<input type= "button" onclick='location.href="<?php echo site_url(); ?>/candidateEdit/view_basicinfo"' value= "Edit"/>
