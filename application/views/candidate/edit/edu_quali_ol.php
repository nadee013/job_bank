
<script type="text/javascript">

	$(function() {

		$("#add_row").click(function() {

			var row = $("#marks").html();
			row = row.replace(/ntr/g, "tr").replace(/ntd/g, "td");
			$("#ol_results").append($(row));
		
		});

		$(".delete").live('click', function() {

			var con = confirm("Do u want to delete?");

			if(con) {

				var td = $(this).parent();
				var tr = $(td).parent();
				$(tr).remove();
			}
		});
	});
	
</script>


<?php echo form_open("candidateEdit/edit_eduquali_ol", array("class" => "form-horizontal")); ?>
<div id="content">
	
		<h3>Educational Qualifications</h3>
		<h4>Ordinary Level</h4>

			<?php foreach($ol_results as $ol) { ?>
			<div class="control-group">
				<label class="control-label" >School</label>
				<div class="controls">
					<input type="text" name="o_school" value="<?php echo "{$ol['school']}"; ?>" />
				</div>
			</div>
			
			<div class = "control=group">
				<label class="control-label">Index No</label>
				<div class="controls">
					<input type="text" name="o_index" value="<?php echo "{$ol['ol_index']}"; ?>" />
				</div>
			</div>
			<div class = "control=group">
				<label class="control-label">Year</label>
				<div class="controls">
					<select name="o_yr" >
						<option selected="selected"><?php echo "{$ol['year']}"; ?></option>
						<?php for($i = 1990; $i< 2020; $i++) { ?>
						<option><?php $i; ?></option>
						<?php } ?>
					</select>
				</div>
			</div>
			<div class = "control=group">
				<label class="control-label">Medium</label>
				<div class="controls">
					<select name="o_medium" >
						<option selected="selected"><?php echo "{$ol['medium']}"; ?></option>
						<option>Sinhala</option>
						<option>English</option>
						<option>Tamil</option>
					</select>
				</div>
			</div>
					<input type="button" name="remarks" value="Remarks"/>
		
		<?php break; } ?>
	
	<div>
		<fieldset>
			<legend>Results</legend>
				<table id = "ol_results">

					<tr>
						<td><b>Subject</b></td>
						<td><b>Grade</b></td>	
					</tr>
					<?php  foreach($ol_results as $ol) { ?>	
					<tr>
						<td><select name="o_subject[]">
								<option selected="selected"><?php echo "{$ol['subject']}"; ?></option>
								<option>Sinhala</option>
								<option>English</option>
								<option>Maths</option>
								<option>Science</option>
								<option>Religion</option>
								<option>Social Studies</option>
							</select></td>
						
						<td><select name="o_grade[]">
								<option selected="selected"><?php echo "{$ol['grade']}"; ?></option>
								<option>A</option>
								<option>B</option>
								<option>C</option>
								<option>D</option>
						 	</select></td>
						<td><input type="button" name="delete" value="-" style="width:30px" class = "delete"/></td>
					</tr><?php } ?>

				</table>
				<input type="button" name="add" value="+" style="width:30px" id="add_row"/>
		</fieldset>
			
		
			<button class="btn btn-primary" style="float:left;">Save</button>	<?php echo form_close(); ?>
			<input type="button" name="cancel" value="Cancel" class="btn btn-danger" onclick = 'location.href="<?php echo site_url("candidateView/index"); ?>"'/>
			
	</div>




<div style = "display : none" id = "marks">

	<ntr>
		<ntd><select name="o_subject[]">
				<option>--Select Subject--</option>
				<option>Sinhala</option>
				<option>English</option>
				<option>Maths</option>
				<option>Science</option>
				<option>Religion</option>
				<option>Social Studies</option>
			</select></ntd>
		
		<ntd><select name="o_grade[]">
				<option>--Select Grade--</option>
				<option>A</option>
				<option>B</option>
				<option>C</option>
				<option>D</option>
		 	</select></ntd>
		 <ntd><input type="button" name="delete" value="-" style="width:30px" class = "delete"/></ntd>
	</ntr>

</div>