<div id= "content">

<?php echo form_open("candidateInsert/do_insertHigherEdu", array("class"=> "form-horizontal")); ?>
		
	<div class="control-group">
		<label class="control-label" for="inputEmail">University / Institute </label>
		<div class="controls">
			<input type="text" name="uni" value= "<?php echo set_value('uni'); ?>">
		</div>
	</div>
	<div class="control-group">
	    <label class="control-label" for="inputPassword">Level</label>
	    <div class="controls">
			<select name="level" id= "data_input">
				<option>Select Level</option>
				<option>Degree</option>
				<option>Diploma</option>
				<option>Certificate</option>
			</select>
	    </div>
	</div>
	<div class="control-group">
		<label class="control-label" for="inputEmail">Description</label>
		<div class="controls">
			<textarea type="text" name="description" value= "<?php echo set_value('description'); ?>"></textarea>
		</div>
	</div>
	<div class="control-group">
	    <label class="control-label">Year</label>
	    <div class="controls">
			<select name="yr" id= "data_input">
				<option>Select year</option>
				<?php for($i=1980;$i<=2020;$i++) { ?>
				<option><?php echo $i; ?></option>
				<?php  } ?>
			</select>
	    </div>
	</div>
	<div>

		<input type="button" id= "btn" class= "remark" name="remarks" value="Remarks"/>
		<input type="button" name="add" value="+" />
		<input type="button" name="delete" value="-" />
	</div>
	<div>
		<input type="button" id= "btn" class= "back" value="<< Back"  onclick = "history.back();"/>
		<button class="next" id= "btn">Next >></button>
	</div>


	<?php echo form_close(); ?>
