
<div id = "content">

<?php echo validation_errors();  ?>

<?php echo form_open_multipart("company_insert/do_insert_profile"); ?>
	
		<div id="data_row">
			<label id="data_label">Industry </label>
			<select id="data_input"  name="industry">
					<option>Select industry</option>
					<option>Apparel</option>
					<option>Software</option>
					<option>Leather</option>
				</select>
		</div>
		<div id="data_row">
			<label id="data_label">Company Name </label>
			<input  id="data_input" name="company_name" type="text"/>
		</div>
		<div id="data_row">
			<label id="data_label">Address </label>
			<div id="data_input"><input name="add1" type="text"  style= "width: 200px;"/>
								 <input style= "width: 200px;" name="add2" type="text"/>
								 <input style= "width: 200px;" name="add3" type="text"/></div>
		</div>
		<br/>
		<br/>
		<br/>
		<div id="data_row">
			<label id="data_label">District </label>
			<select id="data_input"  name="district">
					<option>Select District</option>
					<option>Colombo</option>
					<option>Gampaha</option>
					<option>Negambo</option>
				</select>
		</div>
		<div id="data_row">
			<label id="data_label">Country </label>
			<select id="data_input"  name="country">
					<option>Select Country</option>
					<option>Sri Lanka</option>
				</select>
		</div>
		<div id="data_row">
			<label id="data_label">Telephone No.</label>
			<input  id="data_input" name="tp" type="text"/>
		</div>
		<div id="data_row">
			<label id="data_label">Fax No.</label>
			<input  id="data_input" name="fax" type="text"/>
		</div>
		<div id="data_row">
			<label id="data_label">Company Logo</label>
			<input  id="data_input" name="logo" type="file"/>
		</div>
		<div id="data_row">
			<label id="data_label">Website</label>
			http:// <input name="web" type="text" id="data_input"/>
		</div>
		<div id="data_row"><button id="btn" class="next">Next</button></div>
	</table>

	<?php echo form_close(); ?>
