<!doctype html>
<html lang="en">
<!--<![endif]-->

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
                            <img height="500px" width="1600px" src="<?php echo base_url(); ?>profileassets/images/resource/admin-bg.jpeg" alt="" />

                        <div class="panel-layout">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="widget">
                                        <div class="add-content-form">
                                            <textarea placeholder="What Is In Your Mind"></textarea>
                                            <div class="add-content">

                                                <button type="submit" class="purple-skin">POST</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget no-color">
                                        <div class="activity-feed">

                                            <div class="widget-title">
                                                <h3>All Activity Feeds</h3>
                                                <span>Your last activity is posted 4 hours ago</span>
                                            </div>
                                            <ul class="activity-timeline masonry">

                                                <li class="tw-pst flt-itm"> <span class="user-device"><i class="fa fa-facebook"></i></span>
                                                    <div class="user-activity">
                                                        <div class="who-post-this"> <span><img src="images/resource/user.jpg" alt="" /></span>
                                                            <div class="who-post-detail">
                                                                <div class="pst-shr-inf"> <i>2 minutes ago</i>
                                                                    <div class="slct-whr-pst"> <span><i class="fa fa-lock"></i> Only Me</span>
                                                                        <ul>
                                                                            <li><i class="fa fa-lock"></i> Only Me</li>
                                                                            <li><i class="fa fa-globe"></i> Public</li>
                                                                            <li><i class="fa fa-users"></i> Friends</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <h3><a href="#" title="">Diana Dare<i class="poster-status online"></i></a></h3>
                                                                <span>Posted in <a href="#" title="">Beauty album</a></span>
                                                                <p>Exhibiting a cool and <a href="#" title="">Engaging</a> layout, Electric Admin is an extraordinarily complete Angular JS template for an easier and more <a href="#" title="">Comprehensive</a> backend & frontend management of a single or multiple projects. Its all-purpose framework is replete with active and <a href="#" title="">Energetic</a> features, including 4+ dashboard styles...</p>
                                                                <a href="#" title="" class="lnk">Read More</a>
                                                                <ul class="hsh-tgs">
                                                                    <li><a href="#" title=""># Facebook</a>,</li>
                                                                    <li><a href="#" title=""># Health</a>,</li>
                                                                    <li><a href="#" title=""># Beauty</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Activity Feed -->
                                    </div>
                                    <div data-sidebar-bottom="sidebar2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Profile Sec -->
                </div>
            </div>
        </div>
        <!-- Panel Content -->

    </div>
    <!-- Panel Layout -->

    <div class="popup-wrp2 img-pst-pnl"> <span class="pp-cls"></span>
        <div class="popup-innr">
            <div class="scrl">
                <div class="user-activity ad-pst ">
                    <div class="who-post-this"> <span><img src="images/resource/user.jpg" alt="" /></span>
                        <div class="who-post-detail">
                            <p>Freebie this time is another PSD file. I was <a href="#" title="">inspired</a> by the metro concept adapted by the microsoft . It was elegant, clean, minimal ,intuitive and free from clutter. I happen to notice many designs based on this concept and wanted to do something for <a href="#" title="">WordPress</a> similarly. So there it is , a twitter widget PSD. It very simple design and I hope I did justice to the metro ui <a href="#" title="">concept</a> on this design. One can use this design while <a href="#" title="">developing</a> a custom twitter widget for wordpress.</p>
                            <ul class="hsh-tgs tgs-edt">
                                <li><a href="#" title="">#beauty</a></li>
                                <li><a href="#" title="">#fashion</a></li>
                                <li><a href="#" title="">#reality</a></li>
                            </ul>
                            <div class="ad-lnk">
                                <form>
                                    <input type="text" placeholder="Enter another Link" />
                                    <button type="submit" class="purple-skin">Add Another Link</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="add-img mrg10">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="pst-img"> <a href="#" title=""><img src="images/resource/ad-sml-img1.jpg" alt="" /></a> </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="pst-img"> <a href="#" title=""><img src="images/resource/ad-sml-img2.jpg" alt="" /></a> </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="pst-img ad-img-lnk">
                                    <label class="fileContainer"> Click here to trigger the file uploader!
                                        <input type="file" />
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="add-img mrg10"> <strong>Suggested Photos</strong>
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="pst-img"> <a href="#" title=""><img src="images/resource/sg-sml-img1.jpg" alt="" /></a> </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="pst-img"> <a href="#" title=""><img src="images/resource/sg-sml-img2.jpg" alt="" /></a> </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="pst-img"> <a href="#" title=""><img src="images/resource/sg-sml-img3.jpg" alt="" /></a> </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="pst-img"> <a href="#" title=""><img src="images/resource/sg-sml-img4.jpg" alt="" /></a> </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="pst-img"> <a href="#" title=""><img src="images/resource/sg-sml-img5.jpg" alt="" /></a> </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="pst-img"> <a href="#" title=""><img src="images/resource/sg-sml-img6.jpg" alt="" /></a> </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="pst-img"> <a href="#" title=""><img src="images/resource/sg-sml-img7.jpg" alt="" /></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="add-content">
                    <ul>
                        <li><a href="#" title=""><i class="fa fa-location-arrow"></i></a></li>
                        <li><a href="#" title=""><i class="fa fa-microphone"></i></a></li>
                        <li><a href="#" title=""><i class="fa fa-picture-o"></i></a></li>
                        <li><a href="#" title=""><i class="fa fa-cloud-upload"></i></a></li>
                    </ul>
                    <a href="post-preview-page.html" title="" class="purple-skin">Preview</a>
                </div>
            </div>
        </div>
    </div>
    <div class="popup-wrap nti-rdrt-pst"> <span class="pp-cls"></span>
        <div class="poup-innr">
            <div class="scrl">
                <div class="user-activity">
                    <div class="who-post-this"> <span><img src="images/resource/user.jpg" alt="" /></span>
                        <div class="who-post-detail">
                            <h3><a href="#" title="">Diana Dare<i class="poster-status online"></i></a></h3>
                            <span><a href="#" title="">Diana Dare</a> Posted in <a href="#" title="">Beauty album</a></span> <a href="#" title="" class="lnk">https://themeforest.net/item/electric-admin-panel-dashboard-angular-js-template/14879635</a>
                            <div class="pst-shr-inf"> <i>2 minutes ago</i>
                                <div class="slct-whr-pst"> <span><i class="fa fa-lock"></i> Only Me</span>
                                    <ul>
                                        <li><i class="fa fa-lock"></i> Only Me</li>
                                        <li><i class="fa fa-globe"></i> Public</li>
                                        <li><i class="fa fa-users"></i> Friends</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


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
</body>

</html>