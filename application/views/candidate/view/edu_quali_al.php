<hr>
<h4>Advanced Level</h4>
	
		<?php foreach($row as $al) { ?>

		<div>
			<b>School  :</b><?php echo "  {$al['school']}"; ?> 
		</div>	
		<div>
			<b>Index No  :</b><?php echo "  {$al['al_index']}"; ?>
		</div>
		<div>
			<b>Year  :</b><?php echo "  {$al['year']}"; ?>
		</div>
		<div>
			<b>Medium  :</b><?php echo "  {$al['medium']}"; ?>
		</div>
		<div>
			<b>Stream  :</b><?php echo "  {$al['stream']}"; ?>
		</div>
		<?php break; } ?>
	<br>
	<div>
		<fieldset style="width:75%">
		<legend>Results</legend>
			
				<div>
					<b>Subject  -  </b>
					<b>Grade</b>
				</div>
				<?php 
			foreach($row as $al) { ?>
				<div>	
					<?php echo "{$al['subject']}  -  "; ?>	
					<?php echo " {$al['grade']}"; ?>
				</div>
			
			<?php } ?>

		</fieldset>
		<input type="button" value="Edit" onclick='location.href="<?php echo site_url("candidateEdit/view_eduquali_al"); ?>"' class= "btn btn-info"/>