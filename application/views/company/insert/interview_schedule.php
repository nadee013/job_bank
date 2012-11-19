<div id="content">
<div>

	<h3>Interview Schedule</h3>
</div>

	<div id="data_row">
		<label id= "data_label">Date</label>
		<div id = "data_input"><select name="dt">
				<?php for($dt = 1; $dt < 32; $dt++ ) { ?>
					<option><?php echo $dt; ?></option>
				<?php }?>
		</select>
		<select name="mnth">
			<?php for($mnth = 1; $mnth < 13; $mnth++ ) { ?>
				<option><?php echo $mnth; ?></option>
			<?php }?>

		</select>
		<select name="yr">
			<?php for($yr = 2012; $yr < 2050; $yr++ ) { ?>
				<option><?php echo $yr; ?></option>
			<?php }?>
		</select>
		</div>
	</div>
	<div id="data_row">
		<label id= "data_label">Starting Time</label>
		<div id="data_input">From<input type="text" name="s_time"/>
		Till<input type="text" name="e_time"/></div>
	</div>
	<br/>
	<br/>
	<div id="data_row">
		<label id= "data_label">Duration per Each</label>
		<input type="text" name="d_time" id="data_input"/>min
	</div>
	<div id="data_row">
		<label id = "data_label">Venue</label>
		<input type="text" name="venue" id="data_input"/>
	</div>
	<div id="data_row">
		<label id= "data_label">Contact Details</label>
		<div id="data_input"><input type="text" name="tp" value="phone number"/>
		<input type="text" name="name" value="name"/></div>
	</div>

	<button id="btn" class="save" style="float:left; margin-right:500px">Submit</button>
	<button type="reset" id="btn"  style="margin-top:-40px;" class="cancel">Cancel</button>