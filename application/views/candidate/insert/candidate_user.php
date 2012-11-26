
<?php echo form_open("candidate/do_insertCandidateUser", array("class"=> "wufoo")); ?>
<div class="div-format-left">
	<div>
		<h1>Register</h1>
	</div>

	<div class="div-list">	
		<label class="list-label">Email Address</label>
		<input name="email" type="text" class="input-list"/>
	</div>

	<div class="div-list">	
		<label class="list-label" >User Type</label>
		<select name="type" class="input-list" >
			<option>Candidate</option>
			<option>Employer</option>
		</select>
	</div>

	<div class="div-list">		
		<label class="list-label">Password</label>
		<input name="password" type="password" class="input-list"/>
	</div>

	<div class="div-list">	
		<button class= "btn btn-save">Register</button>
		<button class ="btn btn-cancel">Cancel</button>
		<!-- <button class = "btn btn-inverse">Next >></button> -->
	</div> 
	
</div>

<?php echo form_close(); ?>


