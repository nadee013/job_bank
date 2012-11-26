<div id="content">
<?php echo form_open("company_insert/do_insert_pdetails"); ?>


	<div id="data_row">
		<label id="data_label">Select a payment plan</label>
		<select id= "data_input"name="plan">
			<option>Monthly</option>
			<option>Yearly</option>
			</select>
	</div>
	<div id="data_row">
		<label id="data_label">Payment method</label>
		<div id="data_input"><input  type="radio" name="payment" value="cash"/>Cash
			<input type="radio" name="payment" value="paypal"/>Paypal
		</div>
	</div>
	<div  id="data_row">
		<button id="btn"  style="float:left; margin-right:500px" class="save">Submit</button>
		<button id="btn"  style="margin-top:-40px;" class="cancel">Cancel</button>
	</div>
