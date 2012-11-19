<div class= "validation_errors">
	<?php echo validation_errors(); ?>
</div>

<div id="content">

	<h1>Log In</h1>

<?php echo form_open("common/get_logged_user",  array("class"=> "form-horizontal")); ?>

	<div class="control-group">
		<label class="control-label" for="inputEmail">Email Address</label>
		<div class="controls">
			<input type="text" id="inputEmail" placeholder="Email" name="email" value= "<?php echo set_value('email'); ?>">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="inputPassword">User Type</label>
		<div class="controls">
			<select name="type" >
				<option value = "candidate">Candidate</option>
				<option value = "employer">Employer</option>
			</select>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="inputPassword">Password</label>
		<div class="controls">
			<input type="password" id="inputPassword" placeholder="Password" name="password">
		</div>
	</div>
	

	
		<button >Log in</button>
		<input type = "reset"  value = "Cancel" id="btn" />
	

<?php echo form_close(); ?>

