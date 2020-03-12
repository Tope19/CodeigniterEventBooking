<header class="side-header opened-menu">
    <div class="admin-details"> <span><img src="<?php echo base_url(); ?>profileassets/images/resource/admin.jpg" alt="" /></span>
        <h3><?php echo $this->session->firstname; ?></h3>
        <i><?php echo $this->session->user_status; ?></i>
        <i>
            <form method="get" action="<?php echo base_url(); ?>user/logout"><button class="button">logout</button></form>
        </i>

    </div>
    <div class="menu-scroll">
        <div class="side-menus"> <span>MAIN LINKS</span>
            <nav>
                <ul>
                    <li><a href="<?php echo base_url(); ?>UserDashboard" title=""><i class="fa fa-dashboard"></i>My Dashboard</a></li>
                    <li><a href="<?php echo base_url(); ?>UserDashboard/viewSubscription" title=""><i class="fa fa-user"></i>View Subscriptions</a></li>
                    <li><a href="<?php echo base_url(); ?>UserDashboard/profile" title=""><i class="fa fa-user"></i> edit profile</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- Menu Scroll -->
</header>