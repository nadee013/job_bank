<div class= "validation_errors">
	<?php echo validation_errors(); ?>
</div>

<script type="text/javascript">

	$(function() {

		$("#add").click(function() {

			//alert("hi");
			var div_time_slot = $($("#time_slot").html());

			applyDateTimePicker(div_time_slot);

			$("#time").append($(div_time_slot));
		});

	});


	//set date picker
	$(function() {
		applyDateTimePicker($('body'));
	})


	function applyDateTimePicker(el) {
		$('.my-date', el).datepicker({format: "yyyy-mm-dd"});
		$('.timepicker-default', el).timepicker();
	}


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
			<input name= "due" type="text" />min
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
							<input id='start-date' class='my-date' type= "text" name="s_date[]" value="<?php echo date('Y-m-d') ?>" style="width:200px; margin-right:20px; margin-left:10px;"/>
							<div class="input-append bootstrap-timepicker-component">
							    <input name="s_time[]" plaveholder="time" name="s_time" type="text" class="timepicker-default input-small">
							    <span class="add-on">
							        <i class="icon-time"></i>
							    </span>
							</div>
					</div>
					<div  class="control-group"><label class= "control-label">End</label>
							<input id='end-date' class='my-date' type= "text" name="e_date[]" plaveholder="date" style="width:200px; margin-right:20px; margin-left:10px;"/>
							<div class="input-append bootstrap-timepicker-component">
							    <input name="e_time[]" plaveholder="time" name="s_time" type="text" class="timepicker-default input-small">
							    <span class="add-on">
							        <i class="icon-time"></i>
							    </span>
							</div>
					</div>
				</div>
			</div>
			
			
			<input type="button" class= "btn" id="add" name="add" value="Add new Time Slot" style="float:right"/>
		</fieldset>
	</div>

	<input type="button" class= "btn btn-inverse" value="<< Back" onclick = "history.back();" />
	<button class="btn btn-primary">Submit</button>
</form>


	<div id="time_slot" class='hide'>
		<div>
			<div  class="control-group"><label  class= "control-label">Start</label>
					<input class='my-date' type= "text" name="s_date[]" value="<?php echo date('Y-m-d') ?>" style="width:200px; margin-right:20px; margin-left:10px;"/>
					<div class="input-append bootstrap-timepicker-component">
					    <input name="s_time[]" plaveholder="time" name="s_time" type="text" class="timepicker-default input-small">
					    <span class="add-on">
					        <i class="icon-time"></i>
					    </span>
					</div>
			</div>
			<div  class="control-group"><label class= "control-label">End</label>
					<input class='my-date' type= "text" name="e_date[]" plaveholder="date" style="width:200px; margin-right:20px; margin-left:10px;"/>
					<div class="input-append bootstrap-timepicker-component">
					    <input name="e_time[]" plaveholder="time" name="s_time" type="text" class="timepicker-default input-small">
					    <span class="add-on">
					        <i class="icon-time"></i>
					    </span>
					</div>
			</div>
		</div>
	</div>
