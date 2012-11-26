<?php 
	function setVacancyActive($current_action, $action) {
	
		if($current_action == $action) {
			return "active";
		}
	}
?>


<div style='clear:both'></div>
	<div>
		<?php $vacancy_id = $this->uri->rsegment(3) ?>
			<?php 
				$post = $position[0]["position"];

				if($post == "") {
					$post = "(Position not defined)";
				} 
			?>
			<h3 style="padding-left:50px">Candidates for the Post of "<?php echo $post; ?>"</h3>
	</div>
<div id="content">
 
 <form name="vacancy_details" method="post"  action="<?php echo site_url(); ?>/vacancy/do_search_vacancy" class= "form-horizontal">
 	
	<div class="navbar">
		<div class="navbar-inner">
			<ul class="nav">
				<?php $action = $this->uri->rsegment(4); ?>
				<li class = "filter <?php echo setVacancyActive('accepted', $action);?>">
					<a href="<?php echo site_url("vacancy/vacancy_data_load/$vacancy_id/accepted"); ?>">Accepted</a>
				</li>
				<li class = "filter <?php echo setVacancyActive('pending', $action);?>">
					<a href="<?php echo site_url("vacancy/vacancy_data_load/$vacancy_id/pending"); ?>">Pending</a>
				</li>
				<li class = "filter <?php echo setVacancyActive('rejected', $action);?>">
					<a href="<?php echo site_url("vacancy/vacancy_data_load/$vacancy_id/rejected"); ?>">Rejected</a>
				</li>
				<li class = "filter <?php echo setVacancyActive(NULL, $action);?>">
					<a href="<?php echo site_url("vacancy/vacancy_data_load/$vacancy_id"); ?>">All</a>
				</li>
			</ul>
		</div>
	</div>


 	
	
<?php 		foreach ($candidates as $index => $candidate) { 
 			if($candidate['action'] == "accepted") { ?>
				<div class = "vacancy" style = "background-color: #5599ff" >

			<?php } else if($candidate['action'] == "rejected") { ?>
				<div class ="vacancy" style = "background-color: #ff7f2a">

			<?php } else if($candidate['action'] == "pending") { ?>
				<div class ="vacancy" style = "background-color: #00A300">

			<?php } else { ?>
				<div class ="vacancy" style = "background-color: #">

			<?php } ?>
		
					<a href="<?php echo site_url();?>/candidateView/view_profile_to_company/<?php echo $candidate["user_id"]?> ">
						<div class= "vacancy_data"><?php echo $index + 1; ?></div>
						<div class= "vacancy_data" style= "width:150px">
							<?php echo $candidate["f_name"] . " " . $candidate["l_name"]; ?>
						</div>
					</a>
				</div>
		

		<?php } ?>
	
	
	<div>
		<input type="button" class = "btn btn-primary"  onclick= 'location.href="<?php echo site_url(); ?>/vacancy/download_cvs_for_vacancy/<?php echo $vacancy_id; ?>"' class="next" value="Download CVs'" />
	<?php if($position[0]["action"] == "active") { ?>
		<input type="button" class = "btn btn-warning" value="Add more Candidates" 
			onclick = 'location.href="<?php echo site_url(); ?>/vacancy/get_vacancy_search/<?php echo $vacancy_id; ?>"' />
	<?php } else if ($position[0]["action"] == "de-active") { }?>
	</div>

			
	
</form>