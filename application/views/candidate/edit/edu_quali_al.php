
<script type="text/javascript">

	$(function() {

		$("#add_row").click(function() {

			var row = $("#marks").html();

			row = row.replace(/ntr/g, "tr").replace(/ntd/g, "td");
			$("#al_marks").append(row);
		
		});

		$(".delete").live('click', function() {

			var con = confirm("do you want to delete row?");

			if(con) {
				var td = $(this).parent();
				var tr = $(td).parent();
				$(tr).remove();

			}
		
		});


	});

</script>
<div id="content">
<?php echo form_open("candidateEdit/edit_eduquali_al", array("class" => "form-horizontal")); ?>

		<h4>Advanced Level</h4>
			
	<?php foreach($al_results as $al) { ?>
	
	<div class="control-group">
		<label class="control-label">School</label>
		<div class="controls">
			<input  type="text" name="a_school" value="<?php echo "{$al['school']}"; ?>" /></td>
		</div>
	</div>	
	<div class="control-group">
		<label class="control-label">Index No</label>
		<div class="controls">
			<input  type="text" name="a_index" value="<?php echo "{$al['al_index']}"; ?>" /></td>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label">Year</label>
		<div class="controls">
			<select name="a_year">
				<option selected="selected"><?php echo "{$al['year']}"; ?></option>
				<?php for($i = 1990; $i< 2020; $i++) { ?>
				<option><?php $i; ?></option>
				<?php } ?>
			</select>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label">Medium</label>
		<div class="controls">
			<select name="a_medium">
				<option selected="selected"><?php echo "{$al['medium']}"; ?></option>
				<option>Select Subject</option>
				<option>Biology</option>
				<option>Physics</option>
				<option>Chemistry</option>
				<option>Economics</option>
				<option>Accounting</option>
				<option>Sinhala</option>
			</select>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label">Stream</label>
		<div class="controls">
			<select name="a_stream">
				<option selected="selected"><?php echo "{$al['stream']}"; ?></option>
				<option>Science</option>
				<option>Commerce</option>
				<option>Art</option>
			</select>
		</div>>
	</div>
	<?php break; } ?>

			<div>
				<fieldset>
				<legend>Results</legend>
					<table id = "al_marks">
						<tr>
							<td><b>Subject</b></td>
							<td><b>Grade</b></td>	
						</tr>
						<?php foreach($al_results as $al) { ?>
						<tr>

							<td><select name= "a_subject[]">
									<option><?php echo "{$al['subject']}"; ?></option>
									<option>Sinhala</option>
									<option>English</option>
									<option>Maths</option>
									<option>Science</option>
								</select></td>
							
							<td><select name="a_grade[]">
									<option><?php echo "{$al['grade']}"; ?></option>
									<option>A</option>
									<option>B</option>
									<option>C</option>
									<option>D</option>
							 	</select></td>

							<td><input type="button" name="delete" value="-" style="width:30px" class = "delete"/></td>
						</tr>
						<?php } ?>					

					</table>

					<input type="button" name="add" value="+" style="width:30px" id = "add_row"/>

				</fieldset>

		<button id="btn" class="save" style="float:left;">Save</button>	<?php echo form_close(); ?>
				<input type="button" name="cancel" value="Cancel"  style="margin-top:-38px;" id="btn" class="cancel" onclick = 'location.href="<?php echo site_url("candidateView/index"); ?>"'/>

	</fieldset>

</div>


<div id = "marks" style = "display : none">
	<ntr>
		<ntd><select name= "a_subject[]">
				<option>Select Subject</option>
				<option>Sinhala</option>
				<option>English</option>
				<option>Maths</option>
				<option>Science</option>
			</select></ntd>
		<ntd><select name="a_grade[]">
				<option>A</option>
				<option>B</option>
				<option>C</option>
				<option>D</option>
		 	</select></ntd>
		<ntd><input type="button" name="delete" value="-" style="width:30px" class = "delete"/></ntd>
	</ntr>
</div>