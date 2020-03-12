<!doctype html>
<html lang="en">
<!--<![endif]-->
<?php //print_r($data['EVENTS']); die(); ?>

<head>
    <?php $this->load->view('profile/_htmlhead'); ?>
</head>
<body class="menu-active">
<div class="panel-layout">
    <div class="top-bar">
        <div class="logo"> <a href="<?php echo base_url(); ?>" title=""><img src="<?php echo base_url(); ?>profileassets/images/logo.png" alt=""></a> </div>
        <div class="menu-options"><span class="menu-action"><i></i></span></div>
    </div>
    <!-- Top Bar -->
    <?php $this->load->view('_profile_sidebar'); ?>
    <!-- side header -->
    <div class="panel-content">
        <div class="pnl-tl">
            <h4>EVENTS</h4>
        </div><!-- Panel Title -->
        <div class="table-responsive">
        <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th class="th-sm" scope="col">#Id</th>
                <th class="th-sm" scope="col">Event Name</th>
                <th class="th-sm" scope="col">Caption</th>
<!--                <th class="th-sm" scope="col">Location</th>-->
                <th class="th-sm" scope="col">Status</th>
                <th class="th-sm" scope="col">Date</th>
                <th class="th-sm" scope="col">Price</th>
            </tr>
            </thead>
            <?php foreach ($results as $event){?>
            <tbody>
            <tr>
                    <td><?=$event->id;?></td>
                    <td><?=$event->name; ?></td>
                    <td><?php echo character_limiter($event->caption, 5); ?></td>
<!--                    <td>--><?//=$event->location?><!--</td>-->
                    <td><?=$event->status?></td>
                    <td><?=$event->date; ?></td>
                    <td><?=$event->price; ?></td>
            </tr>
            </tbody>
            <?php }?>

        </table>
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