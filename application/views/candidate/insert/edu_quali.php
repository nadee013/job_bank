

<script type="text/javascript">

	$(function() {
		$("#add_o").click(function() {

			//row eka ganna oona
			var row = $("#row_ol").html();
			//replace
			row = row.replace(/ntr/g, "tr").replace(/ntd/g, "td");
			var row_jquery = $(row);
			// $("button", row_jquery).click(function() {
			// 	row_jquery.remove();
			// });
			//append
			$("#ol_results").append(row_jquery);
		});

		//class eka select karanna oona
		$(".ol_remove").live('click', function() {

			var con = confirm("remove?");
			
			if(con) {
				var td = $(this).parent();
				var tr = $(td).parent();
				$(tr).remove();
			}
			
		});
		//eyage parent 
		//eyaget parent
		//eyawa remove karannna oona
		$('#add_o').click();

	});

	$(function() {
		//get button id and get its click func
		$("#add_al").click(function() {

			var row_al = $("#row_al").html();
			//replace
			row_al = row_al.replace(/ntr/g, "tr").replace(/ntd/g, "td");
			//append rows
			$("#al_results").append($(row_al));

		});
		
		$(".al_remove").live('click', function() {

			con = confirm("Do u wnt to remove it?");

			if(con) {

				var td_al = $(this).parent();
				var tr_al = td_al.parent();
				$(tr_al).remove();

			}
			
		});

		$("#add_al").click();
	});

</script>


<div id= "content">
<?php echo form_open("candidateInsert/do_inserteduQuali_ol", array("class"=> "form-horizontal")); ?>
	<div id ="ol">
		<h3>Ordinary Level</h3>
		<div class="control-group">
			<label class="control-label" >School</label>
			<div class="controls">
				<input type="text" placeholder="School" name="o_school" value= "<?php echo set_value('o_school'); ?>">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" >Index No</label>
			<div class="controls">
				<input type="text" placeholder="Index no" name="o_index" value= "<?php echo set_value('o_index'); ?>">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Year</label>
			<div class="controls">
				<select name="o_yr" id="data_input">
					<option>Select year</option>
					<?php for($i=1980;$i<=2020;$i++) { ?>
					<option><?php echo $i; ?></option>
					<?php  } ?>
				</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Medium</label>
			<div class="controls">
				<select name="o_medium" id="data_input">
					<option>Select Medium</option>
					<option>Sinhala</option>
					<option>English</option>
					<option>Tamil</option>
				</select>
			</div>
		</div>

		<input type="button" id= "btn" class= "remark" name="remarks" value="Remarks"/>
		<div id= "data_row">
			<fieldset style="width:75%">
				<legend>Results</legend>
				<table id = "ol_results" class="table table-hover">
					<tr>
						<td><b>Subject</b></td>	
						<td><b>Grade</b></td>
					</tr>
				</table>

				<input type="button" name="add" value="+" style="width:30px" onclick="" id = "add_o"/>
			
			</fieldset>
		</div>
	</div>


<hr/>
	<div id ="al">
		<h3>Advanced Level</h3>
		<div class="control-group">
			<label class="control-label" >School</label>
			<div class="controls">
				<input type="text" placeholder="School" name="a_school" value= "<?php echo set_value('a_school'); ?>">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" >Index No</label>
			<div class="controls">
				<input type="text" placeholder="Index no" name="a_index" value= "<?php echo set_value('a_index'); ?>">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Year</label>
			<div class="controls">
				<select name="a_year" id="data_input">
					<option>Select year</option>
					<?php for($i=1980;$i<=2020;$i++) { ?>
					<option><?php echo $i; ?></option>
					<?php  } ?>
				</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Medium</label>
			<div class="controls">
				<select name="a_medium" id="data_input">
					<option>Select Medium</option>
					<option>Sinhala</option>
					<option>English</option>
					<option>Tamil</option>
				</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Stream</label>
			<div class="controls">
				<select name="a_stream" id="data_input">
					<option>Select Stream</option>
					<option>Science</option>
					<option>Commerce</option>
					<option>Art</option>
				</select>
				
			</div>
		</div>

		<input type="button" id= "btn" class= "remark" name="remarks" value="Remarks"/>
		<div id= "data_row">
			<fieldset style="width:75%">
				<legend>Results</legend>
				<table id = "al_results" class="table table-striped">
					<tr>
						<td><b>Subject</b></td>	
						<td><b>Grade</b></td>
					</tr>
				</table>

				<input type="button" name="add" value="+" style="width:30px" onclick="" id = "add_al"/>
			
			</fieldset>
		</div>
	</div>

	
	<input type="button" id= "btn" style="float:left; margin-right:500px" class= "back" value="<< Back" onclick = "history.back();" />
	<button id="btn"  style="margin-top:-40px;" class="next">Next >></button>

	



<?php echo form_close(); ?>

<div id = "row_ol" style = "display : none">
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
				<option> A </option>
				<option> B </option>
				<option> C </option>
				<option> D </option>
		 	</select></ntd>
		<ntd><button class='ol_remove' onclick='return false;'>-</button></ntd>
	</ntr>
</div>

<div id = "row_al" style = "display : none">
	<ntr>
		<ntd><select name= "al_subject[]">
				<option>Select Subject</option>
				<option>Biology</option>
				<option>Physics</option>
				<option>Chemistry</option>
				<option>Economics</option>
				<option>Accounting</option>
				<option>Sinhala</option>
			</select></ntd>
		
		<ntd><select name="a_grade[]">
				<option>A</option>
				<option>B</option>
				<option>C</option>
				<option>D</option>
		 	</select></ntd>
		 <ntd><button class = "al_remove" onclick = "return false;">-</button></ntd>
	</ntr>
</div>
