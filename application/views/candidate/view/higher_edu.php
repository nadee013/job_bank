<hr>
	<h4>Higher Education</h4>

		<?php foreach($high as $high) { ?>
		<div>
			<b>University / Institute   : </b><?php echo "{$high['university']}"; ?>
		</div>	
		<div>
			<b>Level  :  </b><?php echo "{$high['level']}"; ?>
		</div>
		<div>
			<b>Description  :  </b><?php echo "{$high['description']}"; ?>
		</div>
		<div>
			<b>Year  :  </b><?php echo "{$high['year']}"; ?>
		</div>
		<br/>
		<br/>
		<?php } ?>
	<input type= "button" value= "Edit" onclick='location.href="<?php echo site_url("candidateEdit/view_higher_edu"); ?>"'/>
</div>