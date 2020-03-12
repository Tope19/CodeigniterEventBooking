<!doctype html>
<html lang="en">
<!--<![endif]-->
<?php //print_r($data['EVENTS']); die(); ?>

<head>
    <?php $this->load->view('user/_profile_htmlhead'); ?>
</head>
<body class="menu-active">
<div class="panel-layout">
    <div class="top-bar">
        <div class="logo"> <a href="<?php echo base_url(); ?>" title=""><img src="<?php echo base_url(); ?>profileassets/images/logo.png" alt=""></a> </div>
        <div class="menu-options"><span class="menu-action"><i></i></span></div>
    </div>
    <!-- Top Bar -->
    <?php $this->load->view('user/_profile_sidebar'); ?>
    <!-- side header -->
    <div class="panel-content">
        <div class="row">
            <div class="col-md-12">
            <div class="profile-sec">
                    <img height="500px" width="1600px" src="<?php echo base_url(); ?>profileassets/images/resource/subscription.jpg" alt="" />
            </div>

                    <div class="pnl-tl">
                        <h4>View Subscriptions</h4>
                    </div><!-- Panel Title -->

                    <div class="table-responsive">
                        <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th class="th-sm" scope="col">#Id</th>
                                <th class="th-sm" scope="col">Event Name</th>
                                <th class="th-sm" scope="col">Time Subscribed</th>
                            </tr>
                            </thead>
                            <tbody><?php foreach ($list as $row) { ?>
                                    <td><?php echo $row->id; ?></td>
                                    <td><?php echo $row->event_name; ?></td>
                                    <td><?php echo $row->created; ?></td>
                            </tr>
                            <?php }; ?>
                            </tbody>

                        </table>
                    </div>
            </div>
        </div>
    </div>
    <!-- Vendor: Javascripts -->
    <script src="<?php echo base_url(); ?>profileassets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>profileassets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>profileassets/js/popperjs-bootstrap.js"></script>

    <!-- Our Website Javascripts -->
    <script src="<?php echo base_url(); ?>profileassets/js/apps.js"></script>
    <script src="<?php echo base_url(); ?>profileassets/js/isotope-int.js"></script>
    <script src="<?php echo base_url(); ?>profileassets/js/main.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/17.0.0/classic/ckeditor.js"></script>
</body>

</html>