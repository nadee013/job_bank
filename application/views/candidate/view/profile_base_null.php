<?php foreach($profile as $profile) {?>
<div>
	<?php echo form_open("", array("class"=> "form-list")); ?>

	<table border = "0">
		<tr>
			<td  align="left" style="position:relative; left:0px; top:0px"><img src="#" width="100px"/></td>
			<td><table border = "0"><tr>
			<td><b><?php echo "{$profile['f_name']} {$profile['l_name']}"; ?></b></td></tr>
				
					<tr>
						<td>Objective</td></tr>
				</table></td>
			
		</tr>
	</table>

</div>
<div >
	<fieldset style="width:25%" class="div-element3">
		<legend><b>Notifications</b></legend>

		<table>
			<tr>
				<td><p>Interviews</p>
					<p>(To Confirm)</p></td>
				<td><input type="text" name="interviews"/></td>
				<td><button>More</button></td>
			</tr>
			<tr>
				<td><p>Interviews</p>
					<p>(Confirmed)</p></td>
				<td><input type="text" name="c_interviews"/></td>
				<td><button>More</button></td>
			</tr>
			<tr>
				<td><p>Profile Views</p></td>
				<td><input type="text" name="p_views"/></td>
			</tr>
		</table>
	</fieldset>
</div>

<div>
	<fieldset style="width:25%" class="settings-div">
		<legend><b>Settings</b></legend>

		<table>
			<tr>
				<td><a href="<?php echo site_url("candidateView/index"); ?>">View Profile</a></td>
			</tr>
			<tr>
				<td>CV Status</td>
				<td><select>
						<option>Active</option>
						<option>De-active</option>
					</select></td>
			</tr>
			<tr>
				<td>De-activate account</td>
			</tr>
		</table>
	</fieldset>
</div>

<div>
	<fieldset style="width:25%" class="upper-div">
		<legend><b>Next Interview</b></legend>

		<table>
			<tr>
				<td>Company</td>
			</tr>
			<tr>
				<td>CV Status</td>
				<td></td>
			</tr>
				<td>Position</td>
				<td></td>
			<tr>
				<td>Date</td>
				<td></td>
			</tr>
			<tr>
				<td>Time</td>
				<td></td>
			</tr>
			<tr>
				<td>Venue</td>
				<td></td>
			</tr>
		</table>
		<?php echo form_close(); ?>
	</fieldset>
</div>
<?php } ?>
