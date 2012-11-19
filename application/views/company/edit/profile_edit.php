<div id = "content">
<?php echo form_open("company_vw_edt/edit_company",  array("class"=> "form-horizontal", "enctype" => "multipart/form-data")); ?>


	<?php foreach($profile as $company) { ?>
	<div style = "float:right; margin-top:10px;" >
		<img src="<?php echo base_url("{$company['logo']}");?>" width="100px" height="100px" class = "img-polaroid"  >
		<input type = "file" name="logo" id="data_input"/>
	</div> 
	<div style= "clear:both"></div>
	
	<div class="control-group">
		<label class="control-label" for="inputEmail">Industry </label>
		<div class="controls">
			<select name="industry">
				<option selected="selected"><?php echo "{$company['industry']}";  ?></option>
				<option>Apparel</option>
				<option>Software</option>
				<option>Leather</option>
			</select>
		</div>
	</div>
	<div class="control-group">
	    <label class="control-label">Company Name </label>
	    <div class="controls">
	      <input name="company_name" type="text" value="<?php echo "{$company['cmpny_name']}";  ?>"/>
	    </div>
	</div>	
	<div class="control-group">
	    <label class="control-label" >Address</label>
	    <div class="controls">
	      <?php $address = explode(",", $company['address']); ?>
			<input type="text"  name="add1"  style= "width: 200px;" value=<?php echo $address[0]; ?> /><br>
			<input type="text" name="add2"   style= "width: 200px;" value=<?php echo $address[1]; ?> /><br>
			<input type="text" name="add3"  style= "width: 200px;" value=<?php echo $address[2]; ?> />
	    </div>
	</div>
	<div class="control-group">
	    <label class="control-label" >District</label>
	    <div class="controls">
	      	<select name="district">
				<option selected="selected"><?php echo "{$company['district']}";  ?></option>
				<option>Colombo</option>
				<option>Gampaha</option>
				<option>Negambo</option>
			</select>
	    </div>
	</div>
	
	
	<div class="control-group">
		<label class = "control-label">Country </label>
		<div class = "controls">
			<select name="country">
				<option selected="selected"><?php echo "{$company['country']}";  ?></option>
				<option>Sri Lanka</option>
			</select>
		</div>
	</div>
	<div class="control-group">
		<label class = "control-label">Telephone No.</label>
		<div class = "controls">
			<input name="tp" type="text" value="<?php echo "{$company['tp']}";  ?>"/>
		</div>
	</div>
	<div class="control-group">
		<label class = "control-label">Fax No.</label>
		<div class = "controls">
			<input name="fax" type="text" value="<?php echo "{$company['fax']}";  ?>"/>
		</div>
	</div>
	<div class="control-group">
		<label class = "control-label">Website</label>
		<div class = "controls">
			<input name="web" type="text" value="<?php echo "{$company['web_url']}";  ?>"/>
		</div>
	</div>
	<div class="control-group">
			<button class="btn" class="save" style="float:left;">Save</button>	<?php echo form_close(); ?>
			<input type="button" name="cancel" value="Cancel"  style="margin-top:-38px;" id="btn"  onclick = 'location.href="<?php echo site_url("company_vw_edt/view_company_profile"); ?>"'/>
	</div>
	<?php } ?>


	