
<script type="text/javascript">

	$(function() {
		$("#accept").click(function() {
			

		});
	
	});
</script>

<?php 
	function setVacancyActive($current_action, $action) {
	
		if($current_action == $action) {
			return "active";
		}
	}
?>
<div id= "content">
		<?php  foreach($profile as $pro) {?>
		<?php echo form_open("", array("class"=> "form-horizontal"));  

		if($pro["pic"]) {

			$profile_pic = $pro["pic"];
		} else {

			$profile_pic = "uploads/profile_pic.jpg";
		}
			

		?>
		<div style = "" class="control-group">
			<div class= "profile_heading"><img src="<?php echo base_url($profile_pic); ?>" width="100px" class="img-polaroid"/></div>
			<div class= "profile_heading"><b><?php echo "{$pro['f_name']} {$pro['l_name']}"; ?></b></div>
			<div class= "profile_heading" style="">
				<button onclick ="location.href='<?php echo site_url(); ?>/candidateView/index'; return false">View Profile</button>
				<button>CV Status</button>
			</div>
		</div>

	<div style= "clear:both"></div>
	
	<div class="navbar">
		<div class="navbar-inner">
			<ul class="nav">
				<li class= "filter <?php echo setVacancyActive(null, $action);?>">
					<a href= "<?php echo site_url("/candidateView/get_mainProfile"); ?>">All</a>
				</li>
				<li class= "filter  <?php echo setVacancyActive('accepted', $action);?>">
					<a href= "<?php echo site_url("/candidateView/get_mainProfile/accepted"); ?>">Confirmed</a>
	 			</li>
				<li class= "filter  <?php echo setVacancyActive('pending', $action);?>">
					<a href= "<?php echo site_url("/candidateView/get_mainProfile/pending"); ?>">Pending</a>
	 			</li>
				<li class= "filter  <?php echo setVacancyActive('rejected', $action);?>">
					<a href= "<?php echo site_url("/candidateView/get_mainProfile/rejected"); ?>">Rejected</a>
	 			</li>
			</ul>
		</div>
	</div>
	
	
	<ol>
		<?php foreach ($vacancies as $index => $vacancy) { ?>
		<li>
			<?php if($vacancy["action"] == "accepted") { ?>
				<div class ="vacancy" style = "background-color: #5599ff">

			<?php } else if($vacancy["action"] == "rejected") { ?>
				<div class ="vacancy" style = "background-color: #ff7f2a">

			<?php } else if($vacancy["action"] == "pending") { ?>
				<div class ="vacancy" style = "background-color: #b78096">

			<?php } else { ?>
				<div class ="vacancy" style = "background-color: #">

			<?php } ?>
				
					<a href= "<?php echo site_url();?>/candidateView/view_vacancy_details/<?php echo $vacancy["vacancy_id"]; ?>">
						<div class= "vacancy_data"><?php echo $vacancy["position"]; ?></div>
						<?php if($vacancy["action"] == "accepted") { ?>
						
						<div class= "vacancy_data"><?php echo date("y-m-d", $vacancy["interview_time"]); ?></div>

						<?php } else if($vacancy["action"] == "rejected") { ?>
						<div class= "vacancy_data"></div>
						
						<?php } else if($vacancy["action"] == "pending") { ?>
							<div class= "vacancy_data"><?php echo $vacancy["position"]; ?></div>
						<?php } ?>
						<div class= "vacancy_data"><button class= "btn btn-mini" id = "accept" onclick= "return false">Confirm</button></div>
						<div class= "vacancy_data"><button class= "btn btn-mini">Reject</button></div>
						<div class= "vacancy_data"><button class= "btn btn-mini">Done</button></div>
					</a>
					</br>
					</br>
				</div>
		</li>
		<?php } ?>
	 </ol>
<?php }?>
<?php echo form_close(); ?>