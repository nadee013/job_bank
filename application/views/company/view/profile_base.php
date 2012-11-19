<?php 
	function setVacancyActive($current_action, $action) {
	
		if($current_action == $action) {
			return "active";
		}
	}
?>

<div id= "content">
<div>
		<?php echo form_open("", array("class"=> "form-list")); 

			if($profile[0]["logo"]) {

				$logo = $profile[0]["logo"];

			} else {

				$logo = "logo/logo.jpg";
		}
		?>

		<div style = "" class="control-group">
			<div class= "profile_heading"><img src="<?php echo base_url($logo);?> " width="100px" class="img-polaroid"/></div>
			<div class= "profile_heading"><b><?php echo "{$profile[0]['cmpny_name']}"; ?></b></div>
			<div class= "profile_heading" style="">
				<button onclick ="location.href='<?php echo site_url(); ?>/company_vw_edt/view_profile'; return false">View Profile</button>
				<button onclick="location.href='<?php echo site_url(); ?>/vacancy/get_schedule_data'; return false">New Vacancy</button>
			</div>
		</div>
</div>
<div style= "clear:both"></div>

<div class="navbar">
		<div class="navbar-inner">
			<ul class="nav">
				<li class = "filter <?php echo setVacancyActive(null, $action);?>">
						<a href= "<?php echo site_url("company_vw_edt/view_company_profile"); ?>">All</a>
					</li>
				<li class = "filter <?php echo setVacancyActive('active', $action);?>">
						<a href= "<?php echo site_url("company_vw_edt/view_company_profile/active"); ?>">Active</a>
	 				</li>
				<li class = "filter <?php echo setVacancyActive('de-active', $action);?>">
						<a href= "<?php echo site_url("company_vw_edt/view_company_profile/de-active"); ?>">Closed</a>
	 				</li>
			</ul>
		</div>
	</div>

	<?php foreach ($vacancy_detail as $index => $vacancy) { ?>
		<?php if($vacancy["action"] == "active") { ?>
			<div class="vacancy" style = "background-color: #5599ff">
		<?php } else if($vacancy["action"] == "de-active") { ?>
			<div class="vacancy" style = "background-color: #ff7f2a">
		<?php } else { ?> 
			<div class="vacancy" style = "background-color: #">
		<?php }

			$time_slots_converted = json_decode($vacancy["time_slots"], true);
			$st_date = $time_slots_converted[0]["st"]; ?>
			
				<a href= "<?php echo site_url();?>/vacancy/vacancy_data_load/<?php echo $vacancy["vacancy_id"]; ?>">
					<div class= "vacancy_data"><?php echo $index + 1; ?></div>
					<div class = "vacancy_data"><?php echo $vacancy["position"]; ?></div>
					<?php if($vacancy["action"] == "active") { ?>
						<div class ="vacancy_data" ><?php echo date("y-m-d", $st_date); ?></div>
					<?php } else if($vacancy["action"] == "de-active") {} ?>
				</a>
			
			</div>
	<?php } ?>
	


