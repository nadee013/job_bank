<DIV style='clear:both'></DIV>
<div id="content">
 
	<?php $vacancy_id = $this->uri->rsegment(3) ?>
		<input type="button" id= "btn" style="width:200px;" class="remark" value="Add more Candidates" 
		onclick = 'location.href="<?php echo site_url(); ?>/vacancy/get_vacancy_search/<?php echo $vacancy_id; ?>"' />
	
	<form name="vacancy_details" method="post"  action="<?php echo site_url(); ?>/vacancy/do_search_vacancy">

	<div>
		<input type="button" id= "btn" style="float:left; margin-right:500px" onclick= 'location.href="<?php echo site_url(); ?>/vacancy/download_csv"' class="next" value="Download CVs'" />
		<button id="btn"  style="margin-top:-40px;" class="back">Edit</button>
	</div>

	
</form>