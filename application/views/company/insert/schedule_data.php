<script type="text/javascript">

	$(function() {

		$("#add").click(function() {

			//alert("hi");
			var div_time_slot = $("#time_slot").html();

			//div_time_slot = div_time_slot.replace(/divx/g, "div").replace(/labelx/g, "label");
			console.log(div_time_slot);
			//alert(div_jquery);


			$("#time").append($(div_time_slot));
		});

	});


</script>

<div id="content">

<form name="schedule_data" method="post" action="<?php echo site_url();?>/company_insert/get_vacancy_details">
	<div id="data_row">
		<label id="data_label">Position</label>
		<input name= "position" id="data_input"/>
	</div>
	<div id="data_row">
		<label id="data_label">Job Description</label>
		<textarea id="data_input" name= "job_desc" cols="10" rows="3"></textarea> 
	</div>
	<br/>
	<br/>
	<div id="data_row">
		<label id="data_label">Interview Duration</label>
		<input name= "due" id="data_input"/>
	</div>
	<div id="data_row">
		<label id="data_label">Message Body</label>
		<textarea id="data_input" name= "msg" cols="10" rows="5"></textarea> 
	</div>
	<br/>
	<br/><br/>
	<br/>

	<div>
		<fieldset>
			<legend >Time Slots</legend>
			<div id="time">
				<div>
					<div ><label style="width:200px; margin-right:100px; margin-left:10px;">Start</label>
							<input name="s_date" value="date" style="width:200px; margin-right:20px; margin-left:10px;"/>
							<input name="s_time" value="time" style="width:200px; margin-right:20px; margin-left:10px;"/>
					</div>
					<div ><label style="width:200px; margin-right:107px; margin-left:10px;">End</label>
							<input name="e_date" value="date" style="width:200px; margin-right:20px; margin-left:10px;"/>
							<input name="e_time" value="time" style="width:200px; margin-right:20px; margin-left:10px;"/>
					</div>
				</div>
				<hr/>
			</div>
			
			
			<input type="button" id="add" name="add" value="Add new Time Slot" style="float:right"/>
		</fieldset>
	</div>

	<input type="button" id= "btn" style="float:left; margin-right:500px" class= "back" value="<< Back" onclick = "history.back();" />
	<button id="btn"  style="margin-top:-40px;" class="next">Submit</button>
</form>


	<div id="time_slot" style="display:none">
		<div><label style="width:200px; margin-right:100px; margin-left:10px;">Start</label>
				<input name="s_date" value="date" style="width:200px; margin-right:20px; margin-left:10px;"/>
				<input name="s_time" value="time" style="width:200px; margin-right:20px; margin-left:10px;"/>
		</div>
		<div><label style="width:200px; margin-right:107px; margin-left:10px;">End</label>
				<input name="e_date" value="date" style="width:200px; margin-right:20px; margin-left:10px;"/>
				<input name="e_time" value="time" style="width:200px; margin-right:20px; margin-left:10px;"/>
		</div>
		<hr/>
	</div>
