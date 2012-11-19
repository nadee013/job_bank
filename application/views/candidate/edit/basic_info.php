<div class= "validation_errors">
	<?php echo validation_errors(); ?>
</div>

<div id="content">

<?php echo form_open("candidateEdit/edit_basicinfo", array("class"=> "form-horizontal", "enctype" => "multipart/form-data")); ?>

	<h3>Basic Information</h3>
		<?php foreach($basicinfo as $basic) { ?>
		<div style = "float:right; margin-top:-50px;" >
			<img src="<?php echo base_url("{$basic['pic']}");?>" width="100px" height="100px"  >
			<input type = "file" name="pic" id="data_input"/>
		</div> 
		<div style= "clear:both"></div>
		<br>
	
		<div class="control-group">
			<label class="control-label">Title</label>
			<div class="controls">
				<select name="title">
					<option selected="selected"><?php echo "{$basic['title']}"; ?></option>
					<option>Mr.</option>
					<option>Mrs.</option>
					<option>Miss</option>
				</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">First Name</label>
			<div class="controls">
				<input type="text" name="f_name" value= "<?php echo "{$basic['f_name']}" ?>" />
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Last Name</label>
			<div class="controls">
				<input type="text" name="l_name" value= "<?php echo "{$basic['l_name']}" ?>" />
			</div>
		</div>
		<div class="control-group">
		    <label class="control-label" >Date of Birth</label>
		    <div class="controls">
				<select name="yr">
					<option selected="selected"><?php echo date("Y", $basic['dob']); ?></option>
					<?php for($yr =1920;$yr < 2012; $yr++) { ?>
					<option><?php echo $yr; ?></option>
					<?php } ?>
				</select>
				<select name="mnth">
					<option selected="selected"><?php echo date("m", $basic['dob']); ?></option>
					<?php for($mnth = 1;$mnth < 32; $mnth++) { ?>
					<option><?php echo $mnth; ?></option>
					<?php } ?>
				</select>
				<select name="dt" >
					<option selected="selected"><?php echo date("d", $basic['dob']); ?></option>
					<?php for($dt = 1;$dt < 32; $dt++) { ?>
					<option><?php echo $dt; ?></option>
					<?php } ?>
				</select>
		    </div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Gender</label>
			
			<?php 
				if($basic['gender'] == "male") { ?>
					<div class="controls">
						<input type="radio" name="gender" value="male" checked="checked" style="margin-right:10px; margin-left:10px; margin-top:0px; margin-bottom:0px"/>Male
						<input type="radio" name="gender" value="female" style="margin-right:10px; margin-left:10px; margin-top:0px; margin-bottom:0px"/>Female
					</div>

			<?php	
				} else if($basic['gender'] == "female") { ?>
					<div class="controls">
						<input type="radio" name="gender" value="male" style="margin-right:10px; margin-left:10px; margin-top:0px; margin-bottom:0px" />Male
						<input type="radio" name="gender" value="female" checked="checked" style="margin-right:10px; margin-left:10px; margin-top:0px; margin-bottom:0px"/>Female
					</div>
			
			<?php } ?>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Civil Status</label>
			<?php 
				if($basic['civil_status'] == "single") { ?>
					<div class="controls">
						<input type="radio" name="status" checked="checked" value="single" style="margin-right:10px; margin-left:10px; margin-top:0px; margin-bottom:0px"/>Single
						<input type="radio" name="status" value="married" style="margin-right:10px; margin-left:10px; margin-top:0px; margin-bottom:0px"/>Married
					</div>
			
			<?php	} else if($basic['civil_status'] == "married") { ?>
					<div class="controls">
						<input type="radio" name="status" value="single" style="margin-right:10px; margin-left:10px; margin-top:0px; margin-bottom:0px"/>Single
						<input type="radio" name="status" checked="checked" value="married" style="margin-right:10px; margin-left:10px; margin-top:0px; margin-bottom:0px"/>Married
					</div>
			<?php } ?>
				
		</div>
		<div class="control-group">
			<label class="control-label">Address</label>
			<?php 
					$address = explode(",", $basic['address']);

			?>
			<div class="controls">
				<input type="text"  name="add1"  style= "width: 200px;" value="<?php echo $address[0]; ?>" /><br>
				<input type="text" name="add2"   style= "width: 200px;" value="<?php echo $address[1]; ?>" /><br>
				<input type="text" name="add3"  style= "width: 200px;" value="<?php echo $address[2]; ?>" />
			</div>
		</div>	
		<div class="control-group">
		    <label class="control-label" for="inputEmail">District</label>
		    <div class="controls">
		    	<select name="district" >
					<option selected="selected"><?php echo "{$basic['district']}" ?> </option>
					<option>Colombo</option>
					<option>Gampaha</option>
					<option>Negombo</option>
					<option>Galle</option>
					<option>Hambanthota</option>
					<option>Matara</option>
					<option>Kaluthara</option>
					<option>Monaragala</option>
				</select>
		    </div>
		</div>
		<div class="control-group">
		    <label class="control-label" for="inputEmail">Country</label>
		    <div class="controls">
		    	<select name="country" >
		    		<option selected="selected"><?php echo "{$basic['country']}" ?> </option>
					<option>Sri Lanka</option>
					<option>India</option>
					<option>New Zealand</option>
					<option>Australia</option>
				</select>
		    </div>
		</div>	
		<div class="control-group">
		    <label class="control-label">Nationality</label>
		    <div class="controls">
		    	<select name="nationality" id="data_input">
		    		<option selected="selected"><?php echo "{$basic['nationality']}" ?> </option>
					<option>Sri Lankan</option>
				</select>
		    </div>
		</div>
		<div class="control-group">
			<label class="control-label">NIC No</label>
			<div class="controls">
			  <input type="text" name="nic"  value=<?php echo "{$basic['nic_no']}"; ?>/>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Telephone Number</label>
			<div class="controls">
				Mobile <input type="text"  style= "width: 200px;" name="mobile" value=<?php echo "{$basic['tp_mobile']}"; ?> />
				Home <input type="text"  style= "width: 200px;" name="home" value=<?php echo "{$basic['tp_hm']}"; ?> />
			</div>
		</div>
		<div id="data_row">
			<button  class="btn btn-primary">Save</button>	<?php echo form_close(); ?>
			<input type="button" name="cancel" value="Cancel" class="btn btn-danger" onclick = 'location.href="<?php echo site_url("candidateView/index"); ?>"'/>
		</div>
	
		
<?php } ?>
</div>
