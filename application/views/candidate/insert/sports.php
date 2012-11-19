<div id= "content">

<?php echo form_open("candidateInsert/do_insertSports", array("class"=> "form-horizontal")); ?>
	<div class="control-group">
		<label class="control-label" for="inputPassword">Sport</label>
		<div class="controls">
			<select name="sport" id= "data_input">
				<option>Select Sport</option>
				<option>Rugger</option>
				<option>Cricket</option>
				<option>Carrom</option>
			</select>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label">Description</label>
		<div class="controls">
			<input type="text" name="description">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label">Achievment</label>
		<div class="controls">
			<input type="text" name="achivement">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label">Year</label>
		<div class="controls">
			<select name="year" id= "data_input">
				<option>Select Year</option>
				<?php for($i=1980;$i<=2020;$i++) { ?>
				<option><?php echo $i; ?></option>
				<?php  } ?>
			</select>
		</div>
	</div>
				
	<input type="button" id= "btn" class= "remark" name="remark" value="Remarks"/>
	<input type="button" class= "" name="add" value="+"/>
	<input type="button" name="delete" value="-"/>

	<input id= "btn"  style="float:left; margin-right:500px"  class="back" type="button" value="<< Back" onclick = 'location.href="<?php echo site_url("candidateInsert/get_insertHigherEdu"); ?>"'/>
	<button id= "btn" style="margin-top:-40px;"class= "next" >Submit</button>

<?php echo form_close(); ?>


