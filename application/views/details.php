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
                            <h1>Event Details</h1>
                            <nav class="breadcrumb">
                                <a class="breadcrumb-item" href="<?php echo base_url(); ?>">Home</a>
                                <span class="breadcrumb-item active">Event Detail</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- top area animated -->

    <?php echo  form_open('Subscription/details'); ?>
    <section>
        <div class="gap gray-bg">
            <div class="container">
                <div class="row" id="page-contents">
                    <div class="col-lg-6">
                        <div class="employer-info">
                            <h2><?=$name;?></h2>
                            <ul>
                                <li><span>Date:</span> <i style="font-size: 20px"><?=$date;?></i></li>
                                <li><span>Location:</span> <i style="font-size: 20px"><?=$location;?></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="salary-area">
                            <h4>&#x20A6;<?=$price;?></h4>
<!--                            <h4><span>--><?//=$status;?><!--</span></h4>-->
                            <ul class="sociaz-media">
                                <li>
                                    <a title="" href="#" class="facebook"><i class="fa fa-facebook-square"></i> facebook</a>
                                </li>
                                <li>
                                    <a title="" href="#" class="google"><i class="fa fa-google-plus-square"></i> Google+</a>
                                </li>
                                <li>
                                    <a title="" href="#" class="pinterest"><i class="fa fa-pinterest-square"></i> Pinterest</a>
                                </li>
                                <li>
                                    <a title="" href="#" class="twitter"><i class="fa fa-twitter-square"></i> Twitter</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="job-detail">
                            <h3>Description</h3>
                            <p><?=$caption;?></p>
                            <div class="apply-bttons">
<!--                                <script src="https://js.paystack.co/v1/inline.js"></script>-->
                                <button type="submit"> Subscribe </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </form>
    <!-- footer -->
    <footer>
        <?php $this->load->view('_footer'); ?>
    </footer>
    <!-- footer -->
    <div class="bottombar">
        <?php $this->load->view('_bottom'); ?>
    </div>
</div>

<script src="https://js.paystack.co/v1/inline.js"></script>

<script>
    function payWithPaystack(){
        var handler = PaystackPop.setup({
            key: 'pk_test_62aac6cd7d661e9820dcaad9a510ab80315b5b56',
            email: '<?= $this->session->email ?>',
            amount: <?=$price * 100;?>,
            currency: "NGN",
            ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
            metadata: {
                custom_fields: [
                    {
                        display_name: "<?= $this->session->firstname ?>",
                        variable_name: "<?= $this->session->firstname ?>",
                        value: "<?= $this->session->phone ?>"
                    }
                ]
            },
            callback: function(response){
                window.location.replace('<?php echo base_url() . 'Websubscriptions/payments'; ?>' + '?reference=' + response.reference + '&transaction_id=' + response.transaction);
                //window.location.replace("<?php ////echo base_url().'paystack/success/'; ?>////"+response.reference);
                 // alert('success. transaction ref is ' + response.reference);
            },
            onClose: function(){
                alert('window closed');
            }
        });
        handler.openIframe();
    }
</script>