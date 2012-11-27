<script type="text/javascript">

	$(function() {
		$("#accept").click(function() {
			
			alert("You have accepted the interview request.");


		});
	
	});
</script>

<div id = "content">

	<?php echo form_open("", array("class"=> "form-horizontal")); ?>

	<?php foreach ($vacancy_data as $vacancy) { ?>
			
	<h3>Vacancy For the Post of <?php echo $vacancy["position"]; ?></h3>


	<div >
		<b>Company Name  : </b>
		<?php echo $vacancy["cmpny_name"]; ?>
	</div>
	<div >
		<b>Address  : </b>
		<?php echo $vacancy["address"]; ?>
	</div>
	<?php if($vacancy["c_action"] == "accepted") { ?>
	<div >
		<b>Date/ Time  : </b>
		<?php echo date("F j, Y, g:i a", $vacancy["interview_time"]); ?>
	</div>

	<?php } else { ?>
	<div >
		<b>Scheduled Dates  : </b>
		<?php echo date("Y-M-d", $s_date); ?>
	</div>


		<?php } ?>

		<div >
			<b>Job Porfile  : </b>
			<?php $vacancy["job_desc"]; ?>
		</div>

		<?php 
		$logo = $vacancy["logo"]; 
			if($vacancy["logo"] == ""){

				$logo = "logo/logo.jpg";
			}
		?>
		<div style="float:right; margin-top:-100px">
			<a href= "<?php echo site_url(); ?>/company_vw_edt/view_profile_for_company/<?php echo $vacancy["cmpny_id"]; ?>"><img src="<?php echo base_url(); ?>/<?php echo $logo; ?>" style="height:100px; width: 100px"></a>
		</div>

		<div>
		<?php if($vacancy["c_action"] == "accepted") { ?>
			<input type="button" id = "reject" onclick = "location.href='<?php echo site_url(); ?>/candidateEdit/update_interview_rejection/<?php echo $vacancy["vacancy_id"]; ?>'" value = "Reject"/>
		<?php } else if($vacancy["c_action"] == "rejected") {?>
			<!-- <input type="button" id = "accept" onclick = "location.href='<?php echo site_url(); ?>/candidateEdit/update_interview_confirmation/<?php echo $vacancy["vacancy_id"]; ?>'" value = "Accept"/> -->
			<!-- <div id = "notification">Your Interview Time will be notified after accepting....</div> -->

		<?php } else { ?>
			<input type="button" id = "accept" onclick = "location.href='<?php echo site_url(); ?>/candidateEdit/update_interview_confirmation/<?php echo $vacancy["vacancy_id"]; ?>'" value = "Accept"/>
			<input type="button" id = "reject" onclick = "location.href='<?php echo site_url(); ?>/candidateEdit/update_interview_rejection/<?php echo $vacancy["vacancy_id"]; ?>'" value = "Reject"/>
			<div id = "notification">Your Interview Time will be notified after accepting....</div>

		<?php } ?>

	
		
		
	<?php } ?>
</div>
<?php echo form_close(); ?>