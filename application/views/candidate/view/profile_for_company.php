<div id="content">
	<?php echo form_open("", array("class"=> "form-list")); ?>

	<table border = "0">
		<?php foreach($basicinfo as $basic) {
			
			
			if($basic["pic"]) {

				$basic_pic = $basic["pic"];
			} else {

				$basic_pic = "uploads/427160_408192859238358_2032551678_n.jpg";
			}

		$dob = $basic["dob"];
		$today = time();
		$age = $today - $dob;
		$age = $age/(60*60*24*365);
		?>

		<tr>
			<td  align="left" style="position:relative; left:0px; top:0px"><img src="<?php echo base_url($basic_pic); ?>" width="100px"/></td>
			<td>
				<table border = "0" width="500px;">
					<tr><td><b><?php echo "{$basic['f_name']} {$basic['l_name']}"; ?></b></td></tr>
					<tr><td>Age : <?php echo round($age); ?></td></tr>
					<tr><td>Gender : <?php echo $basic["gender"];?></td></tr>
					<tr><td>Contact No. : <?php echo "{$basic['tp_mobile']} / {$basic['tp_hm']}";?></td></tr>
				</table></td>
			
		</tr>
	<?php } ?>
	</table>
	
		<div><h3>Educational Qualifications</h3>
			<h4 class= "profile_sub_heading">Ordinary Level</h4>
				<?php foreach ($ol_result as $ol) { ?>
					<div>
						School  :
						<?php echo "{$ol['school']}"; ?>
					</div>	
					<div>
						Index No  :
						<?php echo "{$ol['ol_index']}"; ?>
					</div>
					<div>
						Year  :
						<?php echo "{$ol['year']}"; ?>
					</div>
					<div>
						Medium  :
						<?php echo "{$ol['medium']}"; ?>
					</div>
			<?php break; } ?>
			<br>
					<fieldset style="width:75%">
						<legend>Results</legend>
							<div>
								<b>Subject - </b>
								<b>Grade</b>
							</div>
			<?php foreach($ol_result as $ol) { ?>
						
						<div>				
							<?php echo "{$ol['subject']}  -  "; ?>
							<?php echo "{$ol['grade']}"; ?>
						</div>
						
			<?php } ?>
					
					</fieldset>

			<h4 class= "profile_sub_heading">Advanced Level</h4>
			
				<?php foreach($al_result as $al) { ?>

				<div>
					<b>School  : </b>
					<?php echo "{$al['school']}"; ?> 
				</div>	
				<div>
					<b>Index No  : </b>
					<?php echo "{$al['al_index']}"; ?>
				</div>
				<div>
					<b>Year  : </b>
					<?php echo "{$al['year']}"; ?>
				</div>
				<div>
					<b>Medium  : </b>
					<?php echo "{$al['medium']}"; ?>
				</div>
				<div>
					<b>Stream  : </b>
 					<?php echo "{$al['stream']}"; ?>
				</div>
				<?php break; } ?>
			<br>
			<div>
				<fieldset style="width:75%">
				<legend>Results</legend>
					
						<div>
							<b>Subject - </b>
							<b>Grade</b>
						</div>
						<?php 
					foreach($al_result as $al) { ?>
						<div>	
							<?php echo "{$al['subject']}  -  "; ?>	
							<?php echo "{$al['grade']}"; ?>
						</div>
					
					<?php } ?>

				</fieldset>
	
			</div>	

		</div>
	
<input type = "button" name="back" value="Back" onclick= "history.back();"/>

<?php echo form_close(); ?>


