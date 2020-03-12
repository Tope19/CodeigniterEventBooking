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

<div class="topbar transparent">
    <div class="logo">
        <a href="<?php base_url(); ?>"><img src="<?php base_url(); ?>webassets/images/logo2.png" alt=""></a>
    </div>
    <div class="menu-container" id="toggle">
        <a href="#" class="canvas-menu">
            <i class="fa fa-times fa-bars" aria-hidden="true"></i></a>
    </div>
    <div class="overlay" id="overlay">
        <nav class="overlay-menu">
            <ul class="offcanvas-menu">
                <li class="menu-item-has-children">
                    <!-- <a href="#"><?php echo "Welcome " . $this->session->userdata('name'); ?></a> -->
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>">Home</a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>about">About</a>
                </li>

                </li>
                <li><a href="<?php echo base_url(); ?>event/page">Events</a></li>

                <li>
                    <a href="<?php echo base_url(); ?>contact">Contact Us</a>
                </li>
                <?php if (!$this->session->userdata('logged_in')) : ?>
                    <li>
                        <a href="<?php echo base_url(); ?>user/login">Login</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>user/register">Register</a>
                    </li>
                <?php endif; ?>
                <?php if ($this->session->userdata('logged_in','userstatus'== 'ADMIN')) : ?>
                    <li><a href="<?php echo base_url(); ?>Dashboard">Dashboard</a></li>
                <?php else: ?>
                    <li><a href="<?php echo base_url(); ?>UserDashboard">Dashboard</a></li>
                <?php endif; ?>
                <?php if ($this->session->userdata('logged_in')) : ?>
                    <li>
                        <a href="<?php echo base_url(); ?>user/logout">Logout</a>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</div><!-- topbar transparent header -->