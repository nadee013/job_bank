<div id="content">
	<form name="vacancy_details" method="post"  action="<?php echo site_url(); ?>/vacancy/do_search_vacancy">
	<div id="data_row">
		<div id="searched_candidate">
			<div id = "vacancy_data" style="width:50px;">1</div>
			<div id = "vacancy_data" style="width:400px;"><a href="#">Candidate</a></div>
		</div>
	</div>
	<div>
		<input type="button" id= "btn" style="float:left; margin-right:500px" onclick= 'location.href="<?php echo site_url(); ?>/vacancy/download_csv"' class="next" value="Download CVs'" />
		<button id="btn"  style="margin-top:-40px;" class="back">Edit</button>
	</div>

	<div id="add_more">
		<input type="button" id= "btn" style="width:200px;" class="remark" value="Add more Candidates" 
		onclick = 'location.href="<?php echo site_url(); ?>/vacancy/get_vacancy_search"' />
	</div>
</form>