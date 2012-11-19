<hr>	
	<h3>Sports</h3>
	<?php foreach($sport as $sp) { ?>
		<div>
			<b>Sport  : </b><?php echo $sp["sport"]; ?>
		</div>	
		<div>
			<b>Description  : </b><?php echo $sp["description"]; ?>
		</div>
		<div>
			<b>Achievment  : </b><?php echo $sp["achivement"]; ?></textarea>
			
		</div>
		<div>
			<b>Year  : </b><?php echo $sp["year"]; ?>
		</div>	
	
		<input type="button" class= "btn btn-info" onclick='location.href="<?php echo site_url("candidateEdit/view_sports"); ?>"' value= "Edit"/>
	<?php } ?>
