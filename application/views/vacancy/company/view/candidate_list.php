
<div id = "content">

<div>
	<?php $vacancy_id = $this->uri->rsegment(3); ?>
	<form name="can_list" method = "post" action= "<?php echo site_url();?>/vacancy/invite_or_download/<?php echo $vacancy_id;?>"> 
		<div>
			<?php 
				$post = $position;

				if($post == "") {
					$post = "(Position not defined)";
				} 
			?>
			<h2>Candidates for the Post of "<?php echo $post; ?>"</h2>
		</div>
<fieldset>

	<table border="0">
		<?php foreach ($users as $index => $user) { ?>
		<tr>
			<td><?php echo $index+1; ?></td>
			<td><a href = "<?php echo site_url();?>/candidateView/view_profile_to_company/<?php echo $user["user_id"];?>"><?php echo $user["f_name"] . " " . $user["l_name"]; ?></a></td><input type="hidden" name="candidate_id[]" value="<?php echo $user["user_id"];?>"/>
			<td><input type="checkbox" name="check[]" value="<?php echo $user["user_id"]; ?>"/></td>
		</tr>

		<?php } ?>
	</table>

	
</fieldset>

	<input type= "submit" name="invite" id="invite" class="" style="float:left; margin-right:500px" value="Invite" />
	<input type="submit" name= "download" id= "btn" style="float:left; margin-right:500px" class="next" value="Download CVs'" />
	<input id="btn" class="back" onclick = "history.back();" style="margin-top:-40px;" value="<< Back"/>
	
</form>	

<script type="text/javascript">
	$("#invite").click(function () {

		$(this).hide();
		console.log("nadee");
	});
</script>
</div>

