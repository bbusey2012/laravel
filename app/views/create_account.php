<!DOCTYPE html>
<html>
<head>
	<link class="cssdeck" rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/css/bootstrap-responsive.min.css" class="cssdeck">
</head>
<body>
<div class="" id="loginModal">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<!--<h3>Have an Account?</h3>-->
	</div>
	<div class="modal-body">
		<div class="well">
			<div id="myTabContent" class="tab-content">
				<div class="tab-pane active in" id="login">
					<form method="POST" action='/registration' class="form-horizontal">
						<fieldset>
							<div id="legend">
								<legend class="">Create Your Account</legend>
							</div>
							<div class="control-group">
								<label class="control-label"  for="firstname">First Name</label>
								<div class="controls">
									<input type="text" id="first_name" name="firstname" placeholder="" class="input-xlarge">
									<br>
									<?php echo $errors->first('firstname'); ?> 
								</div>
							</div>

							<div class="control-group">
								<label class="control-label"  for="lastname">Last Name</label>
								<div class="controls">
									<input type="text" id="last_name" name="lastname" placeholder="" class="input-xlarge">
									<br>
									<?php echo $errors->first('lastname'); ?> 
								</div>
							</div>

							<div class="control-group">
								<label class="control-label" for="email">E-mail</label>
								<div class="controls">
									<input type="text" id="e_mail" name="e-mail" placeholder="" class="input-xlarge">
									<br>
									<?php echo $errors->first('e-mail'); ?> 
								</div>
							</div>

							<div class="control-group">
								<label class="control-label" for="username">Username</label>
								<div class="controls">
									<input type="text" id="username" name="username" placeholder="" class="input-xlarge">
									<br>
									<?php echo $errors->first('username'); ?> 
								</div>
							</div>

							
							<div class="control-group">
								<label class="control-label" for="password">Password</label>
								<div class="controls">
									<input type="password" id="password" name="password" placeholder="" class="input-xlarge">
									<br>
									<?php echo $errors->first('password'); ?> 
								</div>
							</div>
							
							
							<div class="control-group">
								<!-- Button -->
								<div class="controls">
									<button class="btn btn-primary">Submit</button>
								</div>
							</div>
						</fieldset>
					</form>                
				</div>
			</div>
		</div>
	</div>

<script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
</body>
<html>