<!doctype html>
<html lang="en">
<!--<![endif]-->

<head>
    <?php $this->load->view('/admin/_profile_htmlhead'); ?>
</head>

<body class="menu-active">
<div class="panel-layout">
    <div class="top-bar">
        <div class="logo"> <a href="<?php echo base_url(); ?>" title=""><img src="<?php echo base_url(); ?>profileassets/images/logo.png" alt=""></a> </div>
        <div class="menu-options"><span class="menu-action"><i></i></span></div>


    </div>
    <!-- Top Bar -->
    <?php $this->load->view('/admin/_profile_sidebar'); ?>
    <!-- side header -->

    <div class="panel-content">
        <div class="row">
            <div class="col-md-12">
                <div class="profile-sec">
                        <img height="500px" width="1600px" src="<?php echo base_url(); ?>profileassets/images/resource/ban1.jpg" alt="" />

                  <div class="usr-pnl">
                        <?php echo validation_errors(); ?>
                        <?php if ($this->session->flashdata(SUCCESS_MESSAGE)) : ?>
                            <?php echo  '<p class="alert alert-success">' . $this->session->flashdata(SUCCESS_MESSAGE) . '</p>' ?>
                        <?php endif; ?>
                        <div class="pnl-tl">
                            <h4>Add Event</h4>
                        </div>
                        <!-- Panel Title -->
                        <div class="pnl-bdy billing-sec">
                            <div class="row">
                                <form method="post" action="<?php echo base_url() . 'event/create'; ?>">
                                <div class="col-md-6 field">
                                    <label>Event Name <span>*</span> </label>
                                    <input type="text" name="name"  />
                                </div>
                                <div class="col-md-6 field ">
                                    <label>Event Caption <span>*</span> </label>
                                    <textarea id="editor" name="caption"></textarea>
                                </div>
                                <div class="col-md-6 field">
                                    <label>Event Date <span>*</span> </label>
                                    <input type="datetime-local" name="date" placeholder="Enter Event Date"  />
                                </div>
                                <div class="col-md-6 field">
                                    <label>Event Status <span>*</span> </label>
                                    <select  name="status" required>
                                        <option value="">Select Event Status</option>
                                        <option class="no-show" name="free" value="Free">Free</option>
                                        <option name="paid" value="Paid">Paid</option>
                                    </select>
                                </div>
                                <div class="col-md-6 field">
                                    <label>Event Price <span>*</span> </label>
                                    <input type="text" name="price" placeholder="" />
                                </div>
                                <div class="col-md-6 field">
                                    <label>Event Location <span>*</span> </label>
                                    <input type="text" name="location" placeholder="" />
                                </div>
                                <div class="col-md-12">
                                    <button type="submit">Save</button>
                                </div>
                                </form>
                            </div>
                        </div>
                        <!-- Panel Body -->
                      <div class="pnl-bdy billing-sec">
                    <div class="row">
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
                                        <th class="th-sm" scope="col">Location</th>
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
                                            <td><?=$event->location?></td>
                                            <td><?=$event->status?></td>
                                            <td><?=$event->date; ?></td>
                                            <td><?=$event->price; ?></td>
                                        </tr>
                                        </tbody>
                                    <?php }?>

                                 </table>
                                </div>
                            </div>
                         </div>
                      </div>
                    </div>
                    <!-- User panel -->
                </div>
                <!-- Profile Sec -->

            </div>
        </div>
    </div>
<!-- Panel Layout -->

<!-- Vendor: Javascripts -->
<script src="<?php echo base_url(); ?>profileassets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>profileassets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>profileassets/js/popperjs-bootstrap.js">
<script src="<?php echo base_url(); ?>webassets/js/test.js"></script>

<!-- Our Website Javascripts -->
<script src="<?php echo base_url(); ?>profileassets/js/apps.js"></script>
<script src="<?php echo base_url(); ?>profileassets/js/isotope-int.js"></script>
<script src="<?php echo base_url(); ?>profileassets/js/main.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
</body>

</html>