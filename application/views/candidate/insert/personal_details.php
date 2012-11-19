
<div class= "validation_errors">
	<?php echo validation_errors(); ?>
</div>

<?php echo form_open("candidateInsert/do_insertBasic", array("class"=> "form-horizontal", "enctype" => "multipart/form-data")); ?>
	<div id = "title"> Personal Details</div>
	<div id = "note">
			Do you have a CV? Then upload it here...<input type="file" name="upload_cv" value="Upload CV"/></br>CV should be in pdf format. (If you don't have the facility, <a href="#">Click here.</a>)
	</div>

<div id="content">
	<div class="control-group">
		<label class="control-label" for="inputEmail">Photo</label>
		<div class="controls">
		  <input type = "file" name="pic" id="data_input"/>
		</div>
	</div>
	<div class="control-group">
	    <label class="control-label" for="inputPassword">Title</label>
	    <div class="controls">
	      <select name="title" id="data_input">
				<option>Mr.</option>
				<option>Mrs.</option>
				<option>Miss</option>
		</select>
	    </div>
	</div>
	<div class="control-group">
	    <label class="control-label" for="inputEmail">First Name</label>
	    <div class="controls">
	    	<input type="text" id="inputEmail" placeholder="First Name" name="f_name" value= "<?php echo set_value('f_name'); ?>" />
	    </div>
	</div>
	<div class="control-group">
	    <label class="control-label" for="inputEmail">Last Name</label>
	    <div class="controls">
	    	<input type="text" id="inputEmail" placeholder="Last Name" name="l_name" value= "<?php echo set_value('l_name'); ?>" />
	    </div>
	</div>
	<div class="control-group">
	    <label class="control-label" for="inputPassword">Date of Birth</label>
	    <div class="controls">
			<select name="dt"  id="">
				<option selected="selected" >Date</option>
				<?php for($i=1;$i<=31;$i++) { ?>
				<option><?php echo $i; ?></option>
				<?php } ?>
			</select>
			<select name="mnth" id="">
				<option selected="selected" >Month</option>
				<?php for($i=1;$i<=12;$i++) { ?>
				<option><?php echo $i; ?></option>
				<?php  } ?>
			</select>
			<select name="yr"  id="">
				<option selected="selected">Year</option>
				<?php for($i=1980;$i<=2020;$i++) { ?>
				<option><?php echo $i; ?></option>
				<?php } ?>
			</select>
	    </div>
	</div>
	<div class="control-group">
	    <label class="control-label" for="inputPassword">Gender</label>
	    <div class="controls">
			<input type="radio" name="gender" checked="checked" value="male" style="margin-right:10px; margin-left:10px; margin-top:0px; margin-bottom:0px"/>Male
			<input type="radio" name="gender" value="female" style="margin-right:10px; margin-left:10px; margin-top:0px; margin-bottom:0px" />Female
	    </div>
	</div>
	<div class="control-group">
	    <label class="control-label" for="inputPassword">Civil Status</label>
	    <div class="controls">
			<input type="radio" name="status" checked="checked" value="single" style="margin-right:10px; margin-left:10px; margin-top:0px; margin-bottom:0px"/>Single
			<input type="radio" name="status" value="married" style="margin-right:10px; margin-left:10px; margin-top:0px; margin-bottom:0px"/>Married
	    </div>
	</div>
	<div class="control-group">
		<label class="control-label" for="inputEmail">Address</label>
		<div class="controls">
		<input type="text"  name="add1" value= "<?php echo set_value('add1'); ?>" />
		<input type="text" name="add2"  value= "<?php echo set_value('add2'); ?>"/>
		<input type="text" name="add3"  value= "<?php echo set_value('add3'); ?>"/>
		</div>
	</div>
	<div class="control-group">
	    <label class="control-label" for="inputEmail">District</label>
	    <div class="controls">
	    	<select name="district" >
				<option>Select District</option>
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
				<option>Sri Lankan</option>
			</select>
	    </div>
	</div>
	<div class="control-group">
		<label class="control-label">NIC No</label>
		<div class="controls">
		  <input type="text" name="nic"  value= "<?php echo set_value('nic'); ?>"/>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label">Telephone Number</label>
		<div class="controls">
			<input type="text" name="mobile" value="mobile"  value= "<?php echo set_value('mobile'); ?>" />
			<input type="text" name="home" value="home"  value= "<?php echo set_value('home'); ?>" />
		</div>
	</div>

	<div>
		<button id="btn" class="next" onclick="history.back();">Next >></button>
	</div> 
	<?php echo $this->session->userdata('user_id'); ?>
	<?php echo form_close(); ?>




