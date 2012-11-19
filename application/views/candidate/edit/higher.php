<?php echo form_open("candidateEdit/edit_higher_edu", array("class" => "form-horizontal")); ?>
<div id="content">
	
<h4>Higher Education</h4>
	<?php foreach($high as $hi) { ?>
		<div class="control-group">
			<label class="control-label">University / Institute </label>
			<div class="controls">
				<input type="text" name="uni" value="<?php echo $hi["university"]; ?>"/>
			</div>
		</div>	
		<div class="control-group">
			<label class="control-label">Level</label>
			<div class="controls">
				<select name="level" >
					<option selected="selected"><?php echo "{$hi['level']}"; ?></option>
					<option>Degree</option>
					<option>Diploma</option>
				</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Description</label>
			<div class="controls">
				<textarea cols="20" rows="3" name="description"  ><?php echo "{$hi['description']}"; ?></textarea>
			</div>
		</div>
		<br>
		<br>
		<div class="control-group">
			<label class="control-label">Year</label>
			<div class="controls">
				<select name="yr" >
					<option selected="selected"><?php echo "{$hi['year']}"; ?></option>
					<?php for($i=1990; $i<2020; $i++) { ?>
						<option><?php echo $i; ?></option>
					<?php } ?>
				</select>	
			</div>
		</div>
		<div class="control-group">
			<input type="button" name="remarks" value="Remarks" id="" class="remark"/>
			<input type="button" name="add" value="+" style="width:30px"/>
			<input type="button" name="delete" value="-" style="width:30px"/>
		</div>
		<hr width="50%"/>

<?php  } ?>
			<button id="btn" class="save" style="float:left;">Save</button>
			<button id="btn" class="cancel" style="margin-top:-38px;" >Cancel</button>
<?php echo form_close(); ?>
