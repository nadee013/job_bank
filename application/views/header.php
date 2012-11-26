<!DOCTYPE html>
<html>

<head>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/datepicker/css/datepicker.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/timepicker/compiled/timepicker.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/new_css.css">

	<script type="text/javascript" src = "<?php echo base_url(); ?>js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src = "<?php echo base_url(); ?>css/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src = "<?php echo base_url(); ?>vendor/datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src = "<?php echo base_url(); ?>vendor/timepicker/js/bootstrap-timepicker.js"></script>

</head>

<body>

	<div class = "container">

		<div class="navbar navbar-inverse">
		  <div class="navbar-inner">
		    <a class="brand" href="<?php echo  site_url(); ?>" >Jobs Planet</a>
		    <ul class="nav">
			    <li><a href= "#">Help</a></li>
				<li><a href= "#">Contact</a></li>
				<li><a href= "#">Forum</a></li>

				<?php

					$type = $this->session->userdata('type'); 
					$log_out_url = site_url() . "/common/logout";
					if($type == "candidate") {

						$profile_url = site_url() . "/candidateView/get_mainProfile";
						echo "<li><a href= '$profile_url'>Profile</a></li>";
						echo "<li><a href= $log_out_url>Log out</a></li>";
						
					}  else if($type == "employer") {

						$profile_url =  site_url() . "/company_vw_edt/view_company_profile";
						echo "<li><a href= '$profile_url'>Profile</a></li>";
						echo "<li><a href= '$log_out_url'>Log out</a></li>";

					} else { ?>

						<li><a href= "<?php echo site_url("common/view_login"); ?>">Login</a></li>
				<?php }

				?>
				
					
		    </ul>
		  </div>
		</div>
			
		

	



	