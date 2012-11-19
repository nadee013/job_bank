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

<form name="schedule_data" method="post" action="<?php echo site_url();?>/vacancy/insert_schedule_data" class= "form-horizontal">
	<div class="control-group">
	    <label class="control-label" for="inputPassword">Position</label>
	    <div class="controls">
	    	<input type= "text" name= "position"/>
	    </div>
	</div>
	<div class= "control-group">
		<label class="control-label" >Job Description</label>
		<div class="controls">
			<textarea  name= "job_desc" cols="10" rows="3"></textarea> 
		</div>
	</div>
	<div class= "control-group">
		<label class="control-label" >Interview Duration</label>
		<div class="controls">
			<input name= "due" type="text" />
		</div>
	</div>
	<div class= "control-group">
		<label class="control-label" >Message Body</label>
		<div class="controls">
			<textarea  name= "msg" cols="10" rows="5"></textarea> 
		</div>
	</div>
	<br/>
	

	<div>
		<fieldset>
			<legend >Time Slots</legend>
			<div id="time">
				<div>
					<div  class="control-group"><label  class= "control-label">Start</label>
							<input type= "text" name="s_date[]" value="date" style="width:200px; margin-right:20px; margin-left:10px;"/>
							<input type= "text" name="s_time[]" value="time" style="width:200px; margin-right:20px; margin-left:10px;"/>
					</div>
					<div  class="control-group"><label class= "control-label">End</label>
							<input type= "text" name="e_date[]" value="date" style="width:200px; margin-right:20px; margin-left:10px;"/>
							<input type= "text" name="e_time[]" value="time" style="width:200px; margin-right:20px; margin-left:10px;"/>
					</div>
				</div>
			</div>
			
			
			<input type="button" id="add" name="add" value="Add new Time Slot" style="float:right"/>
		</fieldset>
	</div>

	<input type="button" id= "btn" style="float:left; margin-right:500px" class= "back" value="<< Back" onclick = "history.back();" />
	<button id="btn"  style="margin-top:-40px;" class="next">Submit</button>
</form>


	<div id="time_slot" style="display:none">
		<hr/>
		<div  class="control-group"><label class= "control-label">Start</label>
				<input type= "text" name="s_date" value="date" style="width:200px; margin-right:20px; margin-left:10px;"/>
				<input type= "text" name="s_time" value="time" style="width:200px; margin-right:20px; margin-left:10px;"/>
		</div>
		<div  class="control-group"><label class= "control-label">End</label>
				<input type= "text" name="e_date" value="date" style="width:200px; margin-right:20px; margin-left:10px;"/>
				<input type= "text" name="e_time" value="time" style="width:200px; margin-right:20px; margin-left:10px;"/>
		</div>
	</div>
