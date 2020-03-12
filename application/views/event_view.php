<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_htmlhead'); ?>
</head>

<body>
<!--<div class="se-pre-con"></div>-->
<div class="theme-layout">
    <!-- responsive header -->
    <!-- Header -->
    <?php $this->load->view('_header'); ?>
    <!-- end: Header -->

    <section>
        <div class="ext-gap bluesh high-opacity">
            <div class="content-bg-wrap" style="background: url(images/resources/animated-bg2.png)"></div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="top-banner">
                            <h1>EVENTS</h1>
                            <nav class="breadcrumb">
                                <a class="breadcrumb-item" href="<?php echo base_url(); ?>">Home</a>
                                <span class="breadcrumb-item active">events</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- top area animated -->


    <section>
        <div class="gap gray-bg">
            <div class="container-fluid">
                <div class="row" id="page-contents">

                    <div class="offset-lg-1 col-lg-10">
                        <div class="career-page">
                            <div class="carrer-title">
                                <h2>Open Position in <span>all locations</span></h2>
                                <p>Don’t see a position that fits you? No problem! we wanna hear from you, send us an </p>
                                <span>email to: <a href="#" title=""> careers@gcarerrs.com</a></span>
                            </div>
                            <div class="post-filter-sec">
                                <form method="post" class="filter-form">
                                    <input type="post" placeholder="Search post">
                                    <button><i class="ti-search"></i></button>
                                </form>
                                <div class="purify">
                                    <span>filter by Location</span>
                                    <select>
                                        <option>Country</option>
                                        <option>United States</option>
                                        <option>United kingdom</option>
                                        <option>Spain</option>
                                        <option>Turky</option>
                                    </select>
                                    <select>
                                        <option>City</option>
                                        <option>New York</option>
                                        <option>Boston</option>
                                        <option>Mexico</option>
                                    </select>
                                    <a href="#" title="">Filter</a>
                                </div>
                            </div>

                            <div class="row">
                                <?php foreach ($EVENTS as $event){?>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="open-position">
                                        <h4><a href="<?php echo base_url() . 'event/details/' . $event->id  ?>" title=""><?=$event->name;?></a></h4>
                                        <h4><a  title=""><?=$event->status;?></a></h4>
                                        <a title=""><i class="fa fa-map-marker"></i><?=$event->location;?></a>
                                    </div>
                                </div>
                                <?php }?>
                                <div class="col-lg-12">
                                    <button class="btn-view btn-load-more">Load More</button>
                                </div>

                            </div>
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