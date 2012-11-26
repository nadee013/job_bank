
<div id="content">
	<h4>Sports</h4>
<?php echo form_open("candidateEdit/edit_sports", array("class" => "form-horizontal")); ?>
<?php foreach ($sport as $sp ) { ?>

	<div class="control-group">
		<label  class="control-label"> Sport</label>
		<div class="controls">
			<select name="sport">
				<option  selected="selected"><?php echo $sp["sport"]; ?></option>
				<option>Rugger</option>
				<option>Cricket</option>
				<option>Carrom</option>
			</select>
		</div>
	</div>	
	<div class="control-group">
		<label class="control-label"> Description</label>
		<div class="controls">
			<textarea name="description" cols="20"rows="3" ><?php echo $sp["description"]; ?></textarea>
			
		</div>
	</div>
	<div class="control-group">
		<label class="control-label"> Achievment</label>
		<div class="controls">
			<textarea name="achivement" cols="20"rows="3" ><?php echo $sp["achivement"]; ?></textarea>
		</div>
	</div>
	
	<div class="control-group">
		<label class="control-label"> Year</label>
		<div class="controls">
			<select name="year" >
				<option selected="selected"><?php echo $sp["year"]; ?></option>
				<?php for($i=1990; $i<2020; $i++) { ?>
						<option><?php echo $i; ?></option>
					<?php } ?>
			</select>
		</div>
	</div>	
	<?php } ?>
	<div class="control-group">
		
		<input type="button" name="remark" value="Remarks"/>
		<input type="button" name="add" value="+" style="width:30px"/>
		<input type="button" name="delete" value="-" style="width:30px"/>
	</div>
<button id="btn" class="save" style="float:left;">Save</button>	<?php echo form_close(); ?>
<input type="button" name="cancel" value="Cancel"  style="margin-top:-38px;" id="btn" class="cancel" onclick = 'location.href="<?php echo site_url("candidateView/index"); ?>"'/>
<input type="button" name="back" value="Back" id="btn" />