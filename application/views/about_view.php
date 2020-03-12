<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('_htmlhead'); ?>
</head>
<body>
<!-- Theme Layout -->
<div class="theme-layout">
    <!-- Header -->
    <?php $this->load->view('_header'); ?>

    <section>
		<div class="ext-gap bluesh high-opacity">
			<div class="content-bg-wrap" style="background: url(<?php echo base_url(); ?>webassets/images/resources/animated-bg.jpg)"></div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="top-banner">
							<h1>About Our Company</h1>
							<nav class="breadcrumb">
							  <a class="breadcrumb-item" href="index.html">Home</a>
							  <span class="breadcrumb-item active">About us</span>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section><!-- top area animated -->
    
    <section>
		<div class="gap100 no-bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="about-winku">
							<h4>Welcome to Master-Mind Community</h4>
							<span><b>To live to love to learn and to leave a legacy.... Stephen R Covey</b></span>
							<p>The mastermind radio show was born out of the desire to help people generally and youths specifically 
							to build a reading culture which which we are fast loosing as a society. The whole idea started in February 2018
							 when I was tinkering with the ideas of having a radio show that reviews life transforming books on a weekly basis.
							  I am avid book reader so I felt like sharing this passion with a lot more people. I invited three friends to discuss 
							  the idea but it Ebuka Michael and Muyiwa Adelaja that saw the vision. We had series of meetings and the program officially
							   when on air on the first Saturday in October 2018 on Jordan FM. Around April 2019, Yinka Adedokun joined the team.</p>
							<p>We've have grown into a book club with over seven hundred members on whatsapp and over three hundred on telegram.
							 Where we encourage members to read a minimum of ten pages of a good book daily.</p>
						</div>
					</div>
					<div class="col-lg-6">
						<figure class="about-picture">
							<img src="<?php echo base_url(); ?>webassets/images/resources/about-comapny.jpg" alt="">
						</figure>
					</div>
				</div>
			</div>
		</div>
    </section>
	
	<section>
		<div class="gap100 pattern">
			<div class="bg-image" style="background-image:url(<?php echo base_url(); ?>webassets/images/resources/newsletter.jpg); background-repeat: no-repeat;"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="news-letter">
							<h2>Newsletter <span>Signup</span></h2>
							<span>Shortest Way To Explore What Will Happen On Enternity</span>
							<form method="post">
								<input type="text" placeholder="Please Type Email Id" class="emails">
								<button>Subscribe Now</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- news letter -->
	
	<section>
		<div class="gap100">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-heading">
							<h2>Our Team</h2>
						</div>
					</div>	
					<div class="col-lg-3 col-sm-6">
						<div class="our-teambox">
							<figure><img src="<?php echo base_url(); ?>webassets/images/resources/avatar.png" alt=""></figure>
							<div class="team-info">
								<h4>Sara Grey</h4>
								<span>Designer</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="our-teambox">
							<figure><img src="<?php echo base_url(); ?>webassets/images/resources/avatar.png" alt=""></figure>
							<div class="team-info">
								<h4>Peeter Paker</h4>
								<span>Developer</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="our-teambox">
							<figure><img src="<?php echo base_url(); ?>webassets/images/resources/avatar.png" alt=""></figure>
							<div class="team-info">
								<h4>Amy watson</h4>
								<span>Support</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="our-teambox">
							<figure><img src="<?php echo base_url(); ?>webassets/images/resources/avatar.png" alt=""></figure>
							<div class="team-info">
								<h4>Emma Watson</h4>
								<span>Operations</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- our team -->
	
	<section>
		<div class="gap100 no-top">
			<!-- <div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							<div class="section-heading">
								<h2>Sponsors</h2>
							</div>
							<ul class="sponsor-logo">
								<li><img alt="" src="<?php echo base_url(); ?>webassets/images/resources/sponsor-gray1.png"></li>
								<li><img alt="" src="<?php echo base_url(); ?>webassets/images/resources/sponsor-gray2.png"></li>
								<li><img alt="" src="<?php echo base_url(); ?>webassets/images/resources/sponsor-gray3.png"></li>
								<li><img alt="" src="<?php echo base_url(); ?>webassets/images/resources/sponsor-gray4.png"></li>
								<li><img alt="" src="<?php echo base_url(); ?>webassets/images/resources/sponsor-gray5.png"></li>
								<li><img alt="" src="<?php echo base_url(); ?>webassets/images/resources/sponsor-gray6.png"></li>
							</ul>
						</div>
					</div>
				</div>
			</div> -->
		</div>
	</section>
	
    <footer>
        <?php $this->load->view('_footer'); ?>
    </footer>
    <!-- footer -->
	<div class="bottombar">
		<?php $this->load->view('_bottom'); ?>
    </div>
</div>

    <?php $this->load->view('_footerscripts.php'); ?>

</body>
</html>    