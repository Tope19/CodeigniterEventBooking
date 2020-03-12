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
							<h1><a href="<?php echo base_url(); ?>">MasterMind</a></h1>
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
							<?php if ($this->session->flashdata(SUCCESS_MESSAGE)) : ?>
								<?php echo  '<p class="alert alert-success">' . $this->session->flashdata(SUCCESS_MESSAGE) . '</p>' ?>
							<?php endif; ?>

							<?php if ($this->session->flashdata(ERROR_MESSAGE)) : ?>
								<?php echo  '<p class="alert alert-danger">' . $this->session->flashdata(ERROR_MESSAGE) . '</p>' ?>
							<?php endif; ?>


							<h2 class="log-title">Login</h2>
							<p>
								Don’t use MasterMind Yet? <a href="<?php echo base_url(); ?>" title="">Take the tour</a> or <a href="#" title="">Join now</a>
							</p>

							<?php echo  form_open('User/login'); ?>

							<div class="form-group">
								<input type="text" id="input" name="email" required />
								<label class="control-label">Email</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">
								<input type="password" name="password" required />
								<label class="control-label">Password</label><i class="mtrl-select"></i>
							</div>
							<a href="#" title="" class="forgot-pwd">Forgot Password?</a>
							<a style="color:#1fb6ff;" href="<?php echo base_url(); ?>user/register" title="">Don't have an account?</a>
							<div class="submit-btns">
								<button class="mtr-btn" type="submit"><span>Login</span></button>
							</div>
							<?php echo form_close(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php $this->load->view('_footerscripts.php'); ?>

</body>

</html>