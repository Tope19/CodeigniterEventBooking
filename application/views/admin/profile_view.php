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
                    <!--                    <div class="profile-banner-sec">-->
                    <!---->
                    <!--                        <img src="--><?php //echo base_url(); ?><!--profileassets/images/resource/banner.jpg" alt="" />-->
                    <!--                    </div>-->
                    <!--                    <div class="usr-pnl">-->
                    <?php echo validation_errors(); ?>
                    <?php if ($this->session->flashdata(SUCCESS_MESSAGE)) : ?>
                        <?php echo  '<p class="alert alert-success">' . $this->session->flashdata(SUCCESS_MESSAGE) . '</p>' ?>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata(ERROR_MESSAGE)) : ?>
                        <?php echo  '<p class="alert alert-warning">' . $this->session->flashdata(ERROR_MESSAGE) . '</p>' ?>
                    <?php endif; ?>
                    <div class="pnl-tl">
                        <h4>Update Profile</h4>
                    </div>
                    <!-- Panel Title -->
                    <div class="pnl-bdy billing-sec">
                        <div class="row">
                            <form method="post" action="<?php echo base_url() . 'profile/update'; ?>">
                                <div class="col-md-6 field">
                                    <label>First Name <span>*</span> </label>
                                    <input type="text" name="firstname" value="<?php echo $firstname; ?>"   />
                                </div>
                                <div class="col-md-6 field ">
                                    <label>Last Name <span>*</span> </label>
                                    <input type="text" name="lastname" value="<?php echo $lastname; ?>"   />
                                </div>
                                <div class="col-md-6 field">
                                    <label>Email <span>*</span> </label>
                                    <input title="You can't edit this Field" type="email" value="<?php echo $email; ?>" name="email" readonly   />
                                </div>
                                <div class="col-md-6 field">
                                    <label>Gender <span>*</span> </label>
                                    <input title="You can't edit this Field" type="text" readonly name="gender" value="<?php echo $gender; ?>"  />
                                </div>
                                <div class="col-md-6 field">
                                    <label>Phone Number <span>*</span> </label>
                                    <input type="text" name="phone" value="<?php echo $phone; ?>" placeholder="" />
                                </div>
                                <div class="col-md-6">
                                    <button type="submit">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Panel Body -->
                </div>
                <!-- User panel -->
            </div>
            <!-- Profile Sec -->
        </div>
    </div>
</div>
<!-- Panel Content -->

</div>
<!-- Panel Layout -->

<div class="chat-system-wrp">
    <div class="chat-system-innr">
        <div class="chat-hdr">
            <div class="cht-tl">
                <h3 class="user-status away">Komail set</h3>
                <span>Creative Designer</span>
            </div>
            <ul class="cht-optns">
                <li><a href="#" title=""><i class="fa fa-user"></i></a></li>
                <li><a href="#" title=""><i class="fa fa-video-camera"></i></a></li>
                <li><a href="#" title=""><i class="fa fa-cog"></i></a></li>
            </ul>
            <ul class="cht-wnd-opt">
                <li><a href="#" title=""><i class="fa fa-minus"></i></a></li>
                <li><a href="#" title=""><i class="fa fa-times"></i></a></li>
            </ul>
        </div>
        <div class="cht-bdy">
            <ul>
                <li class="chat-message frnd"> <span class="sndr-nm"><img src="images/resource/frnd-1.jpg" alt=""></span>
                    <div class="msg-bx">Hello</div>
                </li>
                <li class="chat-message me"> <span class="sndr-nm"><img src="images/resource/frnd-2.jpg" alt=""></span>
                    <div class="msg-bx">Hello</div>
                </li>
                <li class="chat-message me"> <span class="sndr-nm"><img src="images/resource/frnd-2.jpg" alt=""></span>
                    <div class="msg-bx">How are you?</div>
                </li>
                <li class="chat-message frnd"> <span class="sndr-nm"><img src="images/resource/frnd-1.jpg" alt=""></span>
                    <div class="msg-bx">Please type something on the field below I am fine. Please something on the field.</div>
                </li>
            </ul>
            <div class="cht-inpt-br">
                <form>
                    <input type="text" placeholder="Write Something...." />
                    <button type="submit"><i class="fa fa-paper-plane"></i></button>
                </form>
                <ul class="cht-opt">
                    <li><a href="#" title=""><i class="fa fa-camera"></i></a></li>
                    <li><a href="#" title=""><i class="flaticon-smile"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Chat System -->

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