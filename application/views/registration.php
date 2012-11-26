
<div class= "validation_errors">
	<?php echo validation_errors(); ?>
</div>

<h1>Register</h1>
<div id="content">
	<?php echo form_open("common/do_insertUser", array("class"=> "form-horizontal"));?>
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
	  <div class="control-group">
	    <label class="control-label" for="inputPassword">Confirm Password</label>
	    <div class="controls">
	      <input type="password" id="inputPassword" placeholder="Password" name="c_password">
	    </div>
	  </div>
	  <div>
	  	<button class= "btn btn-primary" type="submit">Register</button>
	  	<button class= "btn btn-danger" type= "reset">Cancel</button>
	  </div>

	
<?php echo form_close(); ?>


