<hr>
	<h3>Educational Qualifications</h3>
	<h4>Ordinary Level</h4>

		<?php 
		foreach($row as $ol) { ?>
		<div>
			<b>School  :</b><?php echo "  {$ol['school']}"; ?>
		</div>	
		<div>
			<b>Index No  :</b><?php echo "  {$ol['ol_index']}"; ?>
		</div>
		<div>
			<b>Year  :</b><?php echo "  {$ol['year']}"; ?>
		</div>
		<div>
			<b>Medium  :</b><?php echo "  {$ol['medium']}"; ?>
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
				foreach($row as $ol) { ?>
					
					<div>				
						<?php echo "{$ol['subject']}  -  "; ?>
						<?php echo "{$ol['grade']}"; ?>
					</div>
						
					<?php } ?>
					
			</fieldset>
		</div>
				
		
		<input type= "button" onclick='location.href="<?php echo site_url("candidateEdit/view_eduquali_ol"); ?>"' value= "Edit"/>
	
	

