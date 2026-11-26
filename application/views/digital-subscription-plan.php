<?php
$this->load->view('includes/header-offer.php');
//$today = date("Y-m-d", strtotime($userdetails['rec_date']));
//$last30 = date('Y-m-d', strtotime('-30 days'));
//if ($today <= $last30) {
//$eligibilityamt = calEligiblity($userdetails['income'], $userdetails['currentemi'], $userdetails['apr'], $userdetails['loanamount']) + 100000;
//} else {
$eligibilityamt = calEligiblity($userdetails['income'], $userdetails['currentemi'], $userdetails['apr'], $userdetails['loanamount']);
//}
$eligibilityamtindia = formatePriceIndia($eligibilityamt);
?>

<main class="main">
    <section class="section section-theme-1 packages-block pt-40 bg-light-sky section-theme-12">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 mb-15 mb-md-30">
                    <div class="landind-card-wrapper p-0 m-0">
                        <div class=" how-we-help-block loan-offer-card position-relative mb-25">
                            <div class="row mb-0 align-items-center p-20">
                                <div class="col-12 col-md-8 col-lg-8 card-left p-0">

                                    <div class="subhead mb-0 p-md-20 p-10 position-relative loan-offer-blog">
                                        <span
                                            class="text-white limited-offer py-15 px-15 rounded-pill mb-15 d-inline-block fa-xs bo">🏦
                                            PRE-APPROVED LOAN</span>
                                        <h4 class="mb-10 text-white"><?php echo $userdetails['loanname']; ?> XYZ! 🎉
                                        </h4>
                                        <p class="text-white">Your <strong class="text-orange">Rs.
                                                <?php echo $eligibilityamtindia; ?> </strong> pre-approved loan is
                                            waiting.
                                            Unlock your offer to proceed.</p>

                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-lg-4">
                                    <div class="right-img">

                                        <img src="<?php echo base_url('assets/images/loan-right-img.png'); ?>" alt="icon" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row g-20">
                            <div class="col-12 col-md-4 col-lg-4">
                                <div class="subscription-card bg-white h-100 shadow">
                                    <?php echo form_open('onlineprocess/checkoutDigital', array('id' => 'submitForm3', 'class' => '', 'novalidate' => 'novalidate')); ?>
                                    <input type="hidden" name="loantype" id="loantype"
                                        value="<?php echo $userdetails['loantype']; ?>" class="form-control" required>
                                    <input type="hidden" name="applyid" value="<?php echo $userdetails['applyid']; ?>"
                                        class="form-control" required>
                                    <input type="hidden" name="userid" value="<?php echo $userdetails['userid']; ?>"
                                        class="form-control" required>
                                    <input type="hidden" name="fullname" id="fullname"
                                        value="<?php echo $userdetails['fullname']; ?>" class="form-control" required>
                                    <input type="hidden" name="mobile" id="mobile"
                                        value="<?php echo $userdetails['mobile']; ?>" class="form-control" required>
                                    <input type="hidden" name="email" id="email"
                                        value="<?php echo $userdetails['email']; ?>" class="form-control" required>
                                    <input type="hidden" name="cardtype" value="<?php echo $userdetails['cardtype']; ?>"
                                        class="form-control" required>


                                    <div class="box-inner p-30">
                                        <div class="d-flex align-items-start justify-content-between mb-20 flex-column">
                                            <div class="plan-details border-0 p-0">
                                                <span class="fw-bold text-uppercase mb-0 text-orange">Premium
                                                    Subscription</span>

                                            </div>
                                            <div>

                                                <?php if ($productdata['inOffer'] == 1) { ?>
                                                    <!-- <p class="mb-0 bg-success text-white px-10 py-5 h6 rounded-pill pb-0">
                                                    <?php echo calPercentage($productdata['amount'], $productdata['offeramount']); ?>
                                                    OFF</p>
                                                <?php } ?> -->

                                            </div>
                                        </div>

                                        <?php
                                        if ($productdata['inOffer'] == 1) {
                                            echo '<div class="d-flex align-items-end justify-content-start mb-10"><h5 class="mb-0"><del class="text-dark pe-10 fa-sm">&#8377; ' . formatePrice($productdata['amount']) . '</del></h5>';
                                            echo '<h3><span class="text-orange"><strong> &#8377; ' . formatePrice($productdata['offeramount']) . '/-</strong> </span></h3> </div>';
                                            $subtotal = $productdata['offeramount'];
                                        } else {
                                            echo '<h5 class="text-orange">&#8377; ' . formatePrice($productdata['amount']) . '</h5>';
                                            $subtotal = $productdata['amount'];
                                        }
                                        ?>
                                        <p class="text-start mb-10"><span class="fa-xs">One-time fee, GST extra</span>
                                        </p>
                                        <ul class="list-unstyled features-list pt-5 border-top">

                                            <li class="d-flex justify-content-between mb-10 border-bottom pb-5">
                                                <span>Amount
                                                </span><span
                                                    class="fw-bold"><?php echo formatePriceIndia($subtotal); ?></span>
                                            </li>
                                            <li class="d-flex justify-content-between mb-10 border-bottom pb-5">
                                                <span>GST (18%) :</span> <span class="fw-bold"><?php $gst = $subtotal * 0.18;
                                                                                                echo formatePriceIndia($gst); ?></span>
                                            </li>
                                            <li class="d-flex justify-content-between mb-10"><span>Grand
                                                    Total : </span><span class="fw-bold"><?php $grandtotal = $subtotal + $gst;
                                                                                            echo formatePriceIndia($grandtotal); ?></span></li>
                                        </ul>
                                        <button type="submit" class="btn btn-orange btn-sm w-100" id="formsubmit3"><span
                                                class="btn-text">Buy Now <i
                                                    class="fa-solid fa-arrow-right"></i></span></button>

                                    </div>

                                    <?php echo form_close(); ?>
                                </div>

                            </div>
                            <div class="col-12 col-md-4 col-lg-4">
                                <div class="subscription-card bg-white p-lg-30 p-25 h-100 shadow">
                                    <h6 class="fs-6 mb-20 text-orange text-uppercase"> Subscription Benefits</h6>
                                    <ul class="list-unstyled features-list mb-15 border-bottom pb-15">
                                        <li class="ps-0 d-flex mb-10">
                                            <div class="feature-img"> <i class="fa-solid fa-check text-orange"></i>
                                            </div><span class="ms-15 text-blue">Loan Process in Multiple NBFCs</span>

                                        </li>
                                        <li class="ps-0 d-flex mb-10">
                                            <div class="feature-img"> <i class="fa-solid fa-check text-orange"></i>
                                            </div><span class="ms-15 text-blue">100% Online Financial
                                                Consultation</span>
                                        </li>
                                        <li class="ps-0 d-flex mb-10">
                                            <div class="feature-img"> <i class="fa-solid fa-check text-orange"></i>
                                            </div><span class="ms-15 text-blue">Access Personalized
                                                Tracking Portal</span>
                                        </li>
                                        <li class="ps-0 d-flex mb-10">
                                            <div class="feature-img"> <i class="fa-solid fa-check text-orange"></i>
                                            </div><span class="ms-15 text-blue">Dedicated Loan Expert
                                                Assigned</span>
                                        </li>
                                        <li class="ps-0 d-flex mb-10">
                                            <div class="feature-img"> <i class="fa-solid fa-check text-orange"></i>
                                            </div><span class="ms-15 text-blue">Subscription Validity: 9
                                                Months</span>
                                        </li>
                                        <li class="ps-0 d-flex mb-10">
                                            <div class="feature-img"> <i class="fa-solid fa-check text-orange"></i>
                                            </div><span class="ms-15 text-blue">Loan Processing Time: 48
                                                Hours</span>
                                        </li>
                                    </ul>
                                    <div class="section-theme-6 pt-20 pb-0">
                                        <div class="counters-block pb-0">
                                            <div class="row justify-content-center justify-content-md-between gx-10">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                                    <div class="counter-box d-block text-center mb-0">

                                                        <div class="counter-stats">
                                                            <strong class="numbers h5 mb-5 text-blue">
                                                                <span data-purecounter-duration="1"
                                                                    data-purecounter-start="0"
                                                                    data-purecounter-end="2.25"
                                                                    data-purecounter-once="true"
                                                                    class="purecounter">2.25</span>L+
                                                            </strong>
                                                            <span class="subtext">Satisfied
                                                                Customers</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                                    <div class="counter-box d-block text-center mb-0">


                                                        <div class="counter-stats">
                                                            <strong class="numbers h5 mb-5 text-blue">
                                                                <span data-purecounter-duration="1"
                                                                    data-purecounter-start="0"
                                                                    data-purecounter-end="200"
                                                                    data-purecounter-once="true"
                                                                    class="purecounter">₹200</span>M+
                                                            </strong>
                                                            <span class="subtext">Loan Disbursed</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                                    <div class="counter-box d-block text-center mb-0">


                                                        <div class="counter-stats">
                                                            <strong class="numbers h5 mb-5 text-blue">
                                                                <span data-purecounter-duration="1"
                                                                    data-purecounter-start="0" data-purecounter-end="48"
                                                                    data-purecounter-once="true"
                                                                    class="purecounter">48</span>hrs
                                                            </strong>
                                                            <span class="subtext">Processing time</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="col-12 col-md-4 col-lg-4">
                                <div class="subscription-card bg-white p-lg-30 p-25 h-100 shadow">


                                    <span class="text-uppercase sub-title mb-25 d-block fa-sm text-orange fw-bold">Desired Loan Amount</span>

                                    <h4 class=" mb-10 font-weight-bold text-blue">₹
                                        <?php echo formatePriceIndia($userdetails['loanamount']); ?> </h4>

                                    <p class="fs-12 lh-normal mb-3">Tenure: up to 60 months · ROI from 11%*</p>

                                    <span class="text-uppercase sub-title mb-20 d-block fa-sm text-orange fw-bold">Customer details</span>


                                    <div class="table-block mb-3">
                                        <div>
                                            <div class="d-flex align-items-center justify-content-between border-bottom pb-5 mb-5">


                                                <small class="text-uppercase d-block">Name</small>
                                                <strong><?php echo $userdetails['fullname']; ?></strong>

                                            </div>
                                            <div class="d-flex align-items-center justify-content-between border-bottom pb-5 mb-5">


                                                <small class="text-uppercase d-block">Mobile</small>
                                                <strong><?php echo $userdetails['mobile']; ?></strong>

                                            </div>
                                            <div class="d-flex align-items-center justify-content-between border-bottom pb-5 mb-5">

                                                <small class="text-uppercase d-block">Email</small>
                                                <strong><?php echo $userdetails['email']; ?></strong>

                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">

                                                <small class="text-uppercase d-block">Loan Type</small>
                                                <strong><?php echo $userdetails['loanname']; ?></strong>

                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>


                        </div>
                    </div>


                </div>

    </section>
    <!-- <section class="pt-40 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 offset-lg-4 d-block d-sm-none d-md-none d-lg-none">
                    <?php $testimoniallists = array('offer1.png', 'offer2.png', 'offer5.png', 'offer6.png', 'offer7.png', 'offer9.png') ?>
                    <div class="companies-slider" data-slick='{"dots": false}'>
                        <?php foreach ($testimoniallists as $row) { ?>
                        <div class="slick-slide">
                            <article>
                                <div class="wrap">
                                    <div class="">
                                        <img src="<?php echo base_url() ?>assets/images/lending_img/<?php echo $row ?>"
                                            alt="">
                                    </div>
                                </div>
                            </article>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--<section class="section section-theme-10 latest-candidates-block bg-light-sky pt-30 pt-md-40 pt-lg-50 pt-xxl-50 pb-30 pb-md-50 pb-lg-60 pb-xxl-60">
    <div class="container">
      <div class="row mb-30 mb-md-40">
        <div class="col-12">
          <h4 class="text-center">Our Customers Testimonials</h4>
          <p class="text-center">Here Is What Our Clients Have To Say About Us</p>
        </div>
      </div>

      <div class="top_companies_holder">
        <?php $testimoniallist = array('1.png', '2.png', '3.png', '4.png', '5.png', '6.png') ?>
        <div class="companies-slider">
          <?php foreach ($testimoniallist as $row) { ?>
            <div class="slick-slide">
              <article>
                <div class="wrap">
                  <div class="">
                    <img src="<?php echo base_url() ?>assets/images/testimonial/<?php echo $row ?>" alt="customer img">
                  </div>
                </div>
              </article>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>-->
</main>

<script type="text/javascript">
    $(document).ready(function() {
        var windowWidth = $(window).width();
        if (windowWidth <= 1024) { //for iPad & smaller devices
            $('#userCollapse').removeClass('show');
        }
    });

    $(function() {
        $('#submitForm3').on('submit', function(e) {
            $('#form-submit3').html(
                'Processing... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>'
            );
        });
    });
</script>

<?php
$this->load->view('includes/footer-apply');
?>