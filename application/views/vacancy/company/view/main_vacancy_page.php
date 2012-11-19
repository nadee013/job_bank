<div style='clear:both'></div>
	<div>
		<?php $vacancy_id = $this->uri->rsegment(3) ?>
			<?php 
				$post = $position;

				if($post == "") {
					$post = "(Position not defined)";
				} 
			?>
			<h3 style="padding-left:50px">Candidates for the Post of "<?php echo $post; ?>"</h3>
	</div>
<div id="content">
 
 <form name="vacancy_details" method="post"  action="<?php echo site_url(); ?>/vacancy/do_search_vacancy" class= "form-horizontal">
 	
 	<div style= "padding-bottom:50px" >
 		<a href="<?php echo site_url("vacancy/vacancy_data_load/$vacancy_id/accepted"); ?>"><div class = "filter">Accepted</div></a>
 		<a href="<?php echo site_url("vacancy/vacancy_data_load/$vacancy_id/rejected"); ?>"><div class = "filter">Rejected</div></a>
 		<a href="<?php echo site_url("vacancy/vacancy_data_load/$vacancy_id/pending"); ?>"><div  class = "filter">Pending</div></a>
 		<a href="<?php echo site_url("vacancy/vacancy_data_load/$vacancy_id"); ?>"><div id= "all" class = "filter">All</div></a>
 	</div>
	
	<?php  $action = $this->uri->rsegment(4);
 	
 		foreach ($candidates as $index => $candidate) { 
 			if($action == "accepted") { ?>
				<div class = "vacancy" style = "background-color: #002EB8" >

			<?php } else if($action == "rejected") { ?>
				<div class ="vacancy" style = "background-color: #B84A4A">

			<?php } else if($action == "pending") { ?>
				<div class ="vacancy" style = "background-color: #00A300">

			<?php } else { ?>
				<div class ="vacancy" style = "background-color: #006B00">

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
		<input type="button" id= "btn" style="float:left; width:120px; margin-left: 300px;" onclick= 'location.href="<?php echo site_url(); ?>/vacancy/download_cvs_for_vacancy/<?php echo $vacancy_id; ?>"' class="next" value="Download CVs'" />
		<input type="button" id= "btn" style="clear: both; width:200px;" class="remark" value="Add more Candidates" 
			onclick = 'location.href="<?php echo site_url(); ?>/vacancy/get_vacancy_search/<?php echo $vacancy_id; ?>"' />
	</div>

			
	
</form>