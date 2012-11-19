
<div id = "content">
<div>
	<h2>Candidates for the Post of .....</h2>
</div>
<div>
	<form name="can_list" method = "post" action= "<?php echo site_url();?>/company_insert/get_vacancy_details"> 
<fieldset>

	<table border="0">
		<?php foreach ($users as $index => $user) { ?>
		<tr>
			<td><?php echo $index+1; ?></td>
			<td><?php echo $user["f_name"] . " " . $user["l_name"]; ?></td>
			<td><input type="checkbox" name="check[]" value="<?php echo $user["user_id"]; ?>"/></td>
			<td><input type="button" name="profile" value="View profile" onclick='location.href="<?php echo site_url();?>/candidateView/view_profile_to_company/<?php echo $user["user_id"];?>"'/></td>
		</tr>
		<?php } ?>
	</table>

	
</fieldset>

	<button id="btn" class="next" style="float:left; margin-right:500px">Invite</button>
	<input id="btn" class="back" onclick = "history.back();" style="margin-top:-40px;" value="<< Back"/>
	
</form>	
	<!-- <button onclick = 'location.href= "<?php echo site_url("company_insert/view_interview_schedule");?>"'>Schedule Interviews</button><br>
	<button>Cancel</button> -->

</div>

