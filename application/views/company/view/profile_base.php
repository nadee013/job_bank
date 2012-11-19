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
				<li>
					<div id= "all" class = "filter">
						<a href= "<?php echo site_url(); ?>">All</a>
					</div></li>
				<li>
					<div id= "accepted" class = "filter" style="border-left: 1px solid;">
						<a href= "<?php echo site_url(); ?>">Active</a>
	 				</div></li>
				<li>
					<div id= "rejected" class = "filter" style="border-left: 1px solid;">
						<a href= "<?php echo site_url(); ?>">Finished</a>
	 				</div></li>
			</ul>
		</div>
	</div>

<?php foreach ($vacancy_detail as $index => $vacancy) { ?>
	<div class="vacancy" style = "background-color: #002EB8">
		
		<a href= "<?php echo site_url();?>/vacancy/vacancy_data_load/<?php echo $vacancy["vacancy_id"]; ?>">
			<div class = "vacancy_data"><?php echo $index+1; ?></div>
			<div class = "vacancy_data"><?php echo $vacancy["position"]; ?></div>
			<div class ="vacancy_data" >Date</div>
		</a>
		
	</div>
<?php } ?>


