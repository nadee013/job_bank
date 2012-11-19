<div id="content">
	<?php echo form_open("", array("class"=> "form-list")); ?>

	<div id= "data_row">
		<?php foreach($company_data as $company) {
			
			$logo = $company["logo"];
			if( $logo == "") {

				$logo = "logo/logo.jpg";
			}
		?>
		<img src="<?php echo base_url($logo); ?>" width="100px"/>
		<b><?php echo "{$company['cmpny_name']}"; ?></b>				
	</div>
	
	
	<div>
		<div id= "data_row">
			<label id="data_label">Industry</label>
			<label id="data_input"><?php echo "{$company['industry']}"; ?></label>
		</div>	
		<div id= "data_row">
			<label id="data_label">Address</label>
			<label id="data_input"><?php echo "{$company['address']}"; ?></label>
		</div>
		<div id= "data_row">
			<label id="data_label">Telephone</label>
			<label id="data_input"><?php echo "{$company['tp']}"; ?></label>
		</div>
		<div id= "data_row">
			<label id="data_label">Fax</label>
			<label id="data_input"><?php echo "{$company['fax']}"; ?></label>
		</div>
		<div id= "data_row">
			<label id="data_label">Web site</label>
			<label id="data_input"><a href="#"><?php echo "{$company['web_url']}"; ?></a></label>
		</div>
<?php  } ?>
				
		
	</div>
	


<?php echo form_close(); ?>


