<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>MasterMind</title>
    <link rel="icon" href="<?php echo base_url(); ?>webassets/images/fav.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="<?php echo base_url(); ?>webassets/css/main.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>webassets/css/strip.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>webassets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>webassets/css/color.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>webassets/css/responsive.css">

</head>
<body>
<!--<div class="se-pre-con"></div>-->
<div class="theme-layout">

    <div class="responsive-header">
        <div class="mh-head first Sticky">
		<span class="mh-btns-left">
			<a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
		</span>
            <span class="mh-text">
			<a href="<?php base_url(); ?>"><img src="<?php base_url(); ?>webassets/images/logo2.png" alt=""></a>
		</span>
        </div>

        <nav id="menu" class="res-menu">
            <ul>
                <!-- <li><a href="#"><?php echo "Welcome " . $this->session->userdata('name'); ?></a></li> -->
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li>
                    <a href="<?php echo base_url() . 'about'; ?>">About</a>
                </li>
                <li><a href="<?php echo base_url() . 'event'; ?>">Events</a></li>

                <li><a href="<?php echo base_url() . 'contact'; ?>">Contact Us</a></li>

                <?php if (!$this->session->userdata('logged_in')) : ?>
                    <li>
                        <a href="<?php echo base_url(); ?>user/login">Login</a>
                    </li>
                <?php endif; ?>

                <?php if ($this->session->userdata('logged_in')) : ?>
                    <li><a href="<?php echo base_url(); ?>dashboard">Dashboard</a></li>
                <?php endif; ?>

                <?php if ($this->session->userdata('logged_in')) : ?>
                    <li><a href="<?php echo base_url(); ?>user/logout">Logout</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div><!-- responsive header -->

    <div class="topbar stick">
        <div class="logo">
            <a title="" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>webassets/images/logo.png" alt=""></a>
        </div>

        <div class="top-area">

        </div>
    </div><!-- topbar with logout -->

    <section>
        <div class="feature-photo">
            <figure><img alt="" src="<?php echo base_url(); ?>webassets/images/thankyou.jpg"></figure>
            <div class="container-fluid">
                <div class="row merged">

                </div>
    </section>

    <section>
        <div class="gap100 gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="logout-meta">
                            <h2>You have Succesfully Subscribed</h2>
                            <span>Kindly Visit your Dashboard for more Details</span>
                            <p>
                            <b>Please click <a href="<?php echo base_url(); ?>" title="">Here</a> to go back to your HomePage</b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer>
        <?php $this->load->view('_footer'); ?>
    </footer>
    <!-- footer -->
    <div class="bottombar">
        <?php $this->load->view('_bottom'); ?>
    </div>
</div>

<?php $this->load->view('_footerscripts'); ?>

</body>
</html>