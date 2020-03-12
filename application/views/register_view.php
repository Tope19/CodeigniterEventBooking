<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_htmlhead'); ?>
</head>

<body>
	<!-- Theme Layout -->
	<div class="theme-layout">
		<div class="container-fluid pdng0">
			<div class="row merged">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="land-featurearea">
						<div class="land-meta">
							<h1>MasterMind</h1>
							<p>
								MasterMind is free to use for as long as you want.
							</p>
							<div class="friend-logo">
								<span><img src="<?php echo base_url(); ?>webassets/images/wink.png" alt=""></span>
							</div>
							<a href="#" title="" class="folow-me">Follow Us on</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="login-reg-bg">
						<div class="log-reg-area sign">
							<?php echo validation_errors(); ?>
							<?php if ($this->session->flashdata(SUCCESS_MESSAGE)) : ?>
								<?php echo  '<p class="alert alert-success">' . $this->session->flashdata(SUCCESS_MESSAGE) . '</p>' ?>
							<?php endif; ?>
							<h2 class="log-title">Register</h2>

							<form method="post" action="<?php echo base_url() . 'user/register'; ?>">
								<div class="form-group">
									<input type="text" name="firstname" required="required" />
									<label class="control-label" for="input">First Name</label><i class="mtrl-select"></i>
								</div>
								<div class="form-group">
									<input type="text" name="lastname" required="required" />
									<label class="control-label" for="input"> Last Name</label><i class="mtrl-select"></i>
								</div>
								<div class="form-group">
									<input type="email" name="email" required="required" />
									<label class="control-label" for="input">Email@</label><i class="mtrl-select"></i>
								</div>
								<div class="form-group">
									<input type="password" name="password" required="required" />
									<label class="control-label" for="input">Password</label><i class="mtrl-select"></i>
								</div>
								<div class="form-group">
									<input type="password" name="confirm_pass" required="required" />
									<label class="control-label" for="input">Confirm Password</label><i class="mtrl-select"></i>
								</div>
								<div class="form-group">
									<select class="custom-select" name="gender" required>
										<option value="">Select your Gender</option>
										<option name="male" value="Male">Male</option>
										<option name="female" value="Female">Female</option>
									</select>
								</div>
								<div class="form-group">
									<input type="phone" name="phone" required="required" />
									<label class="control-label" for="input">Phone Number</label><i class="mtrl-select"></i>
								</div>
								<a class="forgot-pwd" style="color:#1fb6ff; text-decoration:none;" href="<?php echo base_url(); ?>user/login" title=""><b>Already have an account</b></a>
								<div class="submit-btns">
									<button class="mtr-btn" type="submit"><span>Register</span></button>
								</div>
							</form>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>


</body>

</html>