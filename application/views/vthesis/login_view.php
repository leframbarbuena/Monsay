<form method="post" action="<?php echo base_url(); ?>login_controller/login_validation">
	<div class = "form-group" style="width: 200px; margin-top: 50px; margin-left: 575px;"><i class="fa fa-user"></i>
		<label>Enter Username</label>
		<input type="text" name="username" class="form-control" required="">
		<span class="text-danger"><?php echo form_error('username'); ?></span>

	</div>
	<div class = "form-group" style="width: 200px; margin: 0 auto;"><i class="fa fa-lock"></i>
		<label>Enter Password</label>
		<input type="password" name="password" class="form-control" required="">
		<span class="text-danger"><?php echo form_error('password'); ?></span>
	</div>
	
	<div class="form-group" style="width: 200px; margin-left: 580px; padding: 20px;">
		<input type="submit" name="submit" value="Login" class="login1">
		<?php echo  '<label class="text-danger">' .$this->session->flashdata("error");?>
	</div>
</form>




























</form>