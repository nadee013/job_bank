<div id="content">
	<form name="vacancy_details" method="post"  action="<?php echo site_url("company/download_csv"); ?>">
	<div id="data_row">
		<div id="searched_candidate">
			<div id = "vacancy_data" style="width:50px;">1</div>
			<div id = "vacancy_data" style="width:400px;"><a href="#">Candidate</a></div>
		</div>
	</div>
	<div>
		<input type="button" id= "btn" style="float:left; margin-right:500px" class="next" value="Download CVs'" />
		<button id="btn"  style="margin-top:-40px;" class="back">Edit</button>
	</div>

	<div id="add_more">
		<input type="button" id= "btn" style="width:200px;" class="remark" value="Add more Candidates" 
		onclick = 'location.href="<?php echo site_url(); ?>/company_insert/get_vacancy_search"' />
	</div>
</form>