<script type="text/javascript">

	$(function() {

		$("#add_ol_subject").click(function() {

			var row = $("#add_new_ol_row").html();
			//console.log(row);

			row = row.replace(/ntr/g, "tr").replace(/ntd/g, "td");

			$("#ol_table").append($(row));


		});

		$(".remove_subject_ol").live('click', function() {

			var con = confirm("Are you sure you want to delete this row?") 

			if(con) {
				var td = $(this).parent();
				var tr = $(td).parent();

				$(tr).remove();

			}
			

		});

		$("#add_ol_subject").click();

	});

	$(function() {

		$("#add_al_subject").click(function() {

			var row = $("#add_new_al_row").html();
			//console.log(row);

			row = row.replace(/ntr/g, "tr").replace(/ntd/g, "td");

			$("#al_table").append($(row));


		});

		$(".remove_subject_al").live('click', function() {

			var con = confirm("Are you sure you want to delete this row?") 

			if(con) {
				var td = $(this).parent();
				var tr = $(td).parent();

				$(tr).remove();

			}
			

		});

		$("#add_al_subject").click();

	});


</script>


<div id= "content">
<?php 
	echo form_open("vacancy/do_search_vacancy/$vacancy_id", array("class" => "form-horizontal")); ?>

<div>
	<h2>Qualifications</h2>
		<br/>
		<div class="control-group">
			<label class="control-label">Gender </label>
			<div class="controls">
				<input type="radio" name="gender" value="male" style="margin-right:20px; margin-left:20px"/>Male
				<input type="radio" name="gender" value="female"  style="margin-right:20px; margin-left:20px"/>Female
				<input type="radio" name="gender" value="both"  style="margin-right:20px; margin-left:20px"/>Both
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Age Group</label>
				<div class="controls"> 
					<label style="margin-right:10px">From</label>
						<select name="age1" class="controls">
							<option>Select Age</option>
							<?php for($i=18; $i<=85; $i++) { ?>
								<option><?php echo $i; ?></option>
							<?php } ?>
						</select>
					<label style="margin-right:10px">To</label> 
					<select name="age2" class="controls">
						<option>Select Age</option>
						<?php for($i=18; $i<=85; $i++) { ?>
							<option><?php echo $i; ?> </option> 
						<?php } ?>
					</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Preffered District</label>
			<div class="controls">
				<select name="location">
					<option>Any Location</option>
					<option>Colombo</option>
					<option>Gampaha</option>
					<option>Galle</option>
				</select>
			</div>
		</div>
	
		<br/>
	

	<fieldset style = "width:500px; ">
		<legend>Educational Qualifications</legend>
			<fieldset style="width:450px">
				<legend>Ordinary Level</legend>
					<table id="ol_table">
				
					</table>
					<button id="add_ol_subject" onclick = "return false;">+</button>
			</fieldset>

			<fieldset style="width:450px">
				<legend>Advanced Level</legend>

					<table id="al_table">
						<tr>
							<td>Stream</td>
							<td><select name = "stream">
									<option>Select Stream</option>
									<option>Science</option>
									<option>Commerce</option>
									<option>Art</option>
							</select></td>
						</tr>
				
					</table>
					<button id="add_al_subject" onclick = "return false;">+</button>
			</fieldset>
		
	</fieldset>

	<fieldset style = "width:500px">
		<legend>Extra Curricular Activities</legend>

		<table>
			<tr>
				<td>Activity</td>
				<td><select name="activity">
					<option>Sports</option>
					<option>Leadership</option>
					<option>Memebership</option>
				</select></td>
			</tr>
			<tr>
							<td>Other</td>
							<td><input type="text" name="other"/></td>
							<td><button>+</button></td>
							<td><button>-</button></td>
						</tr>
		</table>
	</fieldset>

	<button id="btn" class="save" style="float:left; margin-right:500px">Submit</button>
	<button type="reset" id="btn"  style="margin-top:-40px;" class="cancel">Cancel</button>
</div>

<?php echo form_close(); ?>

<div style="display:none" id="add_new_ol_row">

	<ntr>
		<ntd>Subject</ntd>
		<ntd><select name="ol_subject[]">
			<option>Select Subject</option>
			<option>Sinhala</option>
			<option>English</option>
			<option>Maths</option>
			<option>Science</option>
			<option>Religion</option>
			<option>Social Studies</option>
		</select></ntd>
		<ntd>Grade</ntd>	
		<ntd><select name="ol_grade[]">
			<option>A</option>
			<option>B</option>
			<option>C</option>
			<option>D</option>
			</select></ntd>

		<ntd><button class="remove_subject_ol" onclick = "return false">-</button></ntd>
	</ntr>
</div>

<div style="display:none" id="add_new_al_row">

	<ntr>
		<ntd>Subject</ntd>
		<ntd><select name="al_subject[]">
			<option>Select Subject</option>
			<option>Biology</option>
			<option>Physics</option>
			<option>Chemistry</option>
			<option>Economics</option>
			<option>Accounting</option>
			<option>Sinhala</option>
		</select></ntd>
		<ntd>Grade</ntd>	
		<ntd><select name="al_grade[]">
			<option>A</option>
			<option>B</option>
			<option>C</option>
			<option>D</option>
			</select></ntd>

		<ntd><button class="remove_subject_al" onclick = "return false">-</button></ntd>
	</ntr>
</div>