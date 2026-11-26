<?php
$this->load->view('includes/header-apply.php');
?>

<section class="visual-block visual-theme-5 hero-section  bg-light-sky text-black pt-40 pb-40 pt-md-60 pt-xl-50">
    <div class="container">
        <div class="row justify-content-between align-items-start">
            <div class="col-12 col-md-6 col-lg-7 col-xl-7 order-2">

                <div class="visual-textbox pt-0">
                    <div class="text-hold">
                        <div class="tag-list mb-20">
                            <span class="tag-wrap"> <i class="fas fa-circle text-orange fa-xs me-10"></i>India's trusted loan partner</span>
                        </div>
                    </div>
                    <h1 class="text-blue  display-1">Get Instant <br> Loans up to <br> <span class="text-orange">
                            ₹10 Lakhs
                        </span>
                    </h1>
                    <p class="text-grey">Pick your amount, add your mobile number and see your pre-approved offers in minutes. No paperwork, no branch visits.</p>
                    <ul class="list-unstyled help-list mb-0">

                        <li class="ps-0 d-flex mb-10 text-blue">
                            <div class="features-image me-10">
                                <i class="fas fa-check text-white fa-xs"></i>
                            </div>
                            100% online, paperless process
                        </li>
                        <li class="ps-0 d-flex mb-10 text-blue">
                            <div class="features-image me-10"> <i class="fas fa-check text-white fa-xs"></i>
                            </div>Offers from multiple NBFC partners
                        </li>
                        <li class="ps-0 d-flex mb-0 text-blue">
                            <div class="features-image me-10"><i class="fas fa-check text-white fa-xs"></i>
                            </div>
                            Free to check, no impact on your score
                        </li>

                    </ul>
                </div>

            </div>
            <div class="col-12 col-md-6 col-lg-5 col-xl-5 order-md-2 order-1">
                <div class="account-box mb-40">
                    <?php if ($processstep == 'step1') { ?>
                        <div class="account-box-frame text-dark bg-white shadow">
                            <div class="section-header text-start mb-0">

                                <h5 class="text-blue mb-5">Get your loan offer

                                </h5>
                                <p class="text-start"><small>
                                        Takes about 2 minutes. No impact on your credit score.</small>
                                </p>

                            </div>
                            <?php echo form_open('onlineprocess/sendotpCode', array('id' => 'submitForm1', 'class' => 'contac-form mb-0', 'novalidate' => 'novalidate')); ?>
                            <div class="row">
                                <div class="col-12 mb-15">
                                    <div class="form-group">
                                        <div class="range">
                                            <div class="range__value text-start pt-0 mt-10">
                                                <h6 class="mb-0 text-uppercase text-blue">Required loan amount</h6>
                                                <span class="fs-3 text-orange"></span>
                                            </div>
                                            <div class="d-flex justify-content-between required-amount mt-10">
                                                <h6 class="mb-0">Enter Required Amount</h6>
                                                <h6 class="mb-0">₹10k – ₹10L</h6>
                                            </div>
                                            <div class="range__slider">
                                                <input type="range" name="loanamount" step="10000">
                                            </div>
                                            <div class="d-flex justify-content-between required-price mb-10">
                                                <h6 class="mb-0">₹10,000</h6>
                                                <h6 class="mb-0">₹10,00,000</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group error">
                                        <label class="h6 mb-10 text-blue">Mobile number</label>
                                        <div class="input-group mb-15">
                                            <span class="input-group-text text-dark fw-bold rounded-0 py-0 px-15 me-5"
                                                id="basic-addon1">+91</span>
                                            <input class="form-control" type="text" placeholder="Bank-registered number"
                                                id="mobile" name="mobile" required minlength="10" maxlength="10"
                                                inputmode="numeric" data-validation-regex-regex="^[6789]\d{9}$"
                                                data-validation-regex-message="Enter valid mobile number">
                                        </div>
                                        <div class="help-block"></div>

                                    </div>
                                </div>

                                <div class="text-danger mt-3 mb-3" id="mobilenoError1"></div>
                                <div class="col-12 mb-15">
                                    <button type="submit" id="formsubmit1" class="btn btn-orange btn-sm"><span
                                            class="btn-text">Start
                                            Process <i class="fa-solid fa-arrow-right"></i></span></button>
                                </div>

                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group mb-10 ps-0">
                                    <div class="d-flex align-items-start "> <input type="checkbox" name="tandc" id="tandc"
                                            class="custom-control-input mb-0 mt-5" value="1" checked required>
                                        <label class="custom-control-label" for="tandc"><small
                                                class="ms-10 d-block h6 fw-normal">I agree to the <a
                                                    href="<?= base_url('terms-conditions') ?>" target="_blank"
                                                    style="text-decoration: none;" class="text-dark">Terms of
                                                    Use</a>
                                                and <a href="<?= base_url('privacy-policy') ?>" target="_blank"
                                                    style="text-decoration: none;" class="text-dark">Privacy
                                                    Policy</a></small></label>

                                    </div>
                                    <div class="help-block ms-0 ps-0 mb-2"></div>
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group mb-0 ps-0">
                                    <div class="d-flex align-items-start ">
                                        <input type="checkbox" name="promotion" id="promotion"
                                            class="custom-control-input mb-0 mt-5" value="1" checked required>
                                        <label class="custom-control-label" for="promotion"><small
                                                class="ms-10 d-block h6 fw-normal">
                                                I authorise Growquick Finance and partner NBFCs to contact me.
                                            </small></label>
                                    </div>
                                    <div class="help-block ms-0 ps-0 mb-2"></div>
                                </div>
                            </div>
                            <hr class="my-20">
                            <ul class="ps-0 d-flex justify-content-start list-unstyled mb-0 flex-md-nowrap flex-wrap gap-15">
                                <li>
                                    <h6 class="text-black d-flex align-items-center fa-sm lh-lg mb-0"> <i class="fas fa-lock me-5 text-warning"></i>100% secure
                                    </h6>
                                </li>
                                <li>
                                    <h6 class="text-black d-flex align-items-center fa-sm lh-lg mb-0"> <i class="fas fa-bolt text-warning me-5"></i>
                                        48 hr approval</h6>
                                </li>
                                <li>
                                    <h6 class="text-black d-flex align-items-center fa-sm lh-lg mb-0"> <i class="fas fa-star me-5 text-warning"></i>
                                        4.8 rating</h6>
                                </li>
                            </ul>
                        </div>
                        <?php echo form_close(); ?>

                </div>
            <?php } else if ($processstep == 'step2') { ?>
                <div class="account-box mb-40 landind-card-wrapper">
                    <div class="account-box-frame text-dark bg-light card shadow-sm border">
                        <div class="text-start">
                            <h5 class="mb-10 text-start fw-bold text-blue">Verify your mobile</h5>
                            <h6 class="fw-normal">We've sent a 4-digit OTP to
                                <strong><?php echo $userdetails['mobile']; ?></strong>
                            </h6>
                        </div>
                        <?php echo form_open('onlineprocess/checkotpCode', array('id' => 'submitForm2', 'class' => 'contac-form', 'novalidate' => 'novalidate')); ?>
                        <div class="row">
                            <input type="hidden" name="otpmobile" id="otpmobile"
                                value="<?php echo $userdetails['mobile']; ?>">
                            <input type="hidden" name="loanamount" id="loanamount"
                                value="<?php echo $userdetails['loanamount']; ?>">
                            <div class="col-12 mb-15 mb-md-20">
                                <div class="form-group error">
                                    <label class="h6 mb-10 text-blue">Enter OTP</label>
                                    <!-- <div class="wpcf7-form-control-wrap" data-name="tel-922">
                                <input type="text" name="otpcode" id="otpcode"
                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required optnumber w-100"
                                    required inputmode="numeric" placeholder="Enter OTP Code" maxlength="4"
                                    data-validation-regex-regex="[0-9]+"
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                            </div> -->
                                    <div class="input-field text-center">
                                        <input type="number" maxlength="1" inputmode="numeric" pattern="[0-9]*" id="otpcode"
                                            name="otpcode[]" class="me-md-0 me-2 otp-input">
                                        <input type="number" maxlength="1" inputmode="numeric" pattern="[0-9]*" id="otpcode"
                                            name="otpcode[]" class="me-md-0 me-2 otp-input">
                                        <input type="number" maxlength="1" inputmode="numeric" pattern="[0-9]*" id="otpcode"
                                            name="otpcode[]" class="me-md-0 me-2 otp-input">
                                        <input type="number" maxlength="1" inputmode="numeric" pattern="[0-9]*" id="otpcode"
                                            name="otpcode[]" class="me-md-0 me-2 otp-input">
                                    </div>
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="row justify-content-between align-items-center mb-20">
                                <div class="col-lg-8 col-md-6 col-12">
                                    <div class="form-group">
                                        <div class="p-countdown" data-delay="30">
                                            <div class="p-countdown-count" id="counttime">
                                                <code>New OTP in <span id="timer">30</span> Sec</code>
                                            </div>
                                            <div id="resendBtn" class="d-none">
                                                <code>Didn’t receive OTP? <a href="javascript:resendotp()">Resend OTP</a></code>
                                            </div>
                                            <code id="resend-message"></code>
                                            <div class="custom-error" id="otpcodeError"></div>
                                        </div>
                                        <div class="custom-error" id="otpcodeError"></div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="title-text d-flex justify-content-md-end justify-content-start">

                                        <h6 class="fw-light mb-0 ms-5"><i
                                                class="fa-solid fa-lock me-10 text-orange"></i>Encrypted</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" id="formsubmit2" class="btn btn-orange btn-sm"><span
                                        class="btn-text">Verify
                                        OTP <i class="fa-solid fa-arrow-right"></i></span></button>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            <?php } else if ($processstep == 'step3') { ?>

                <div class="account-box mb-40 landind-card-wrapper">
                    <div class="account-box-frame text-dark bg-light-sky card shadow-sm border">


                        <div class="text-start section-header mb-20">

                            <div class="text-start">
                                <h5 class="mb-10 text-start fw-bold text-blue">Personal details</h5>
                                <p>Select your profile and enter your details.</p>
                            </div>
                            <!-- <p class="mb-0" style="font-size:14px"> <strong>Loan Amount. :
                                        <?php echo formatePriceIndia($userdetails['loanamount']); ?></strong></p>
                                <p style="font-size:14px"> <strong> Mobile No. :
                                        <?php echo $userdetails['mobile']; ?></strong></p> -->
                        </div>
                        <?php echo form_open('onlineprocess/registeredUser', array('id' => 'submitForm3', 'class' => 'contac-form', 'novalidate' => 'novalidate')); ?>
                        <div class="row gx-10 mb-15 justify-content-center">
                            <input type="hidden" id="loanamount" name="loanamount"
                                value="<?php echo $userdetails['loanamount']; ?>">
                            <input type="hidden" id="referralcode" name="referralcode"
                                value="<?php echo $userdetails['referralcode']; ?>">
                            <input type="hidden" id="usermobile" name="usermobile"
                                value="<?php echo $userdetails['mobile']; ?>">

                            <!-- <div class="size-details">
                                    <ul class="nav form-tabs mb-15 mb-md-20" id="mylist">
                                        <li data-value="1">
                                            <button class="nav-link active-size active" data-bs-toggle="tab"
                                                data-bs-target="#nav-tab01" type="button">Salaried</button>
                                        </li>
                                        <li data-value="2">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-tab02"
                                                type="button">Self-Employed</button>
                                        </li>
                                    </ul>
                                    <input type="hidden" id="usertype" name="usertype" value="1">
                                </div>   -->

                            <div class="row g-15 mt-0 p-0">
                                <label class="h6 mb-0 text-blue">Employment type</label>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-12">
                            <fieldset class="picker1">
                                <label for="personalloan" class="w-100">
                                    <input type="radio" name="usertype" id="personalloan" value="1" class="radio" checked>
                                    <span class="plan-details p-15 h-100">
                                        <div class="d-flex mb-0 align-items-center flex-column">
                                          
                                            <div class="ms-0 employment-content">
                                                <h6 class="employment-title mb-0 text-black"><i class="fas fa-briefcase me-5"></i>Salaried</h6>
                                                <P class="mb-0">Monthly salary from an employer</P>

                                            </div>
                                        </div>
                                    </span>
                                </label>
                            </fieldset>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-12">
                            <fieldset class="picker1">
                                <label for="businessloan" class="w-100">
                                    <input type="radio" name="usertype" id="businessloan" value="2" class="radio">
                                    <span class="plan-details p-15 h-100">
                                        <div class="d-flex mb-0 align-items-center flex-column">
                                         
                                            <div class="ms-0 employment-content">
                                                <h6 class="employment-title mb-0 text-black"><i class="far fa-flag me-5"></i>Self-Employed
                                                </h6>
                                                <P class="mb-0">Own business or profession</P>

                                            </div>
                                        </div>
                                    </span>
                                </label>
                            </fieldset>
                        </div>
                                <div class="col-12 mb-15 mb-md-20 mt-20">
                                    <div class="form-group">
                                        <label class="h6 mb-10 text-blue">Full name</label>
                                        <div class="input-group mb-3">

                                            <input class="form-control" type="text" id="username" name="username"
                                                placeholder="Bank Registered Name" required
                                                data-validation-regex-regex="^[a-zA-Z ]*$">
                                        </div>
                                        <div class="help-block"></div>
                                    </div>
                                </div>
                                <div class="col-12 mb-15 mb-0 mt-0">
                                    <div class="form-group">
                                        <label class="h6 mb-10 text-blue">Email address</label>
                                        <div class="input-group mb-3">

                                            <input class="form-control" type="email" id="useremail" name="useremail"
                                                placeholder="Email Id" required>
                                        </div>
                                        <div class="help-block"></div>
                                    </div>
                                </div>
                                <div class="col-12 mt-0">
                                    <button type="submit" id="formsubmit3" class="btn btn-orange btn-sm"><span
                                            class="btn-text">Process <i class="fa-solid fa-arrow-right"></i></span></button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            <?php } ?>
            </div>
        </div>

</section>


<section class="section section-theme-5 pt-20 pb-20 border-bottom">
    <div class="container">
        <header class="section-header text-center text-lg-center mb-0">
            <p>Trusted by India's leading NBFC lenders</p>
        </header>
        <div class="trending-categories-slider">
            <?php foreach ($banklist as $row) { ?>
                <div class="wrap text-center">
                    <div class="justify-content-center categories-image">
                        <img src="<?php echo base_url('assets/images/bank/' . $row->bank_image); ?>"
                            alt="<?= $row->bank_name ?>" class="m-auto img-fluid">
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<section class="section section-theme-2 how-we-help-block pt-60 pt-md-60 py-xl-80 pb-60 pb-md-60 counter-section position-relative">
    <div class="container">

        <div class="row mb-20 g-20">
            <div class="col-lg-6">
                <div class="card-left-main p-25 h-100">
                    <header class="section-header text-start ms-0">
                        <span class="text-orange text-uppercase text-outlined text-top mb-15 d-inline-block section-title position-relative">Why Choose Us</span>
                        <h3 class="text-light">The moneysahay difference</h3>

                    </header>
                    <div class="row g-20">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="align-items-center process-box h-100">

                                <div class="text-start">
                                    <h3 class="text-light">₹5 Cr+</h3>
                                    <p class="mt-0 mb-0">Loans facilitated</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="align-items-center process-box h-100">

                                <div class="text-start">
                                    <h3 class="text-light">12,000+</h3>
                                    <p class="mt-0 mb-0">Businesses funded</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="align-items-center process-box h-100">

                                <div class="text-start">
                                    <h3 class="text-light">10+</h3>
                                    <p class="mt-0 mb-0">Average approval</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="align-items-center process-box h-100">

                                <div class="text-start">
                                    <h3 class="text-light">4.8/5</h3>
                                    <p class="mt-0 mb-0">Client rating</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-lg-6">
                <div class="row g-15">
                    <div class="col-md-6 col-12">
                        <div class="align-items-center text-light process-box h-100">
                            <div class="text-start mb-60">
                                <div
                                    class="icon d-flex align-items-center justify-content-center categories-image-wrap bg-blue">
                                    <i class="fas fa-home fs-6 text-white"></i>
                                </div>
                            </div>
                            <div class="text-start">
                                <h6 class="text-blue">100% online</h6>
                                <p class="mt-10 text-black">Apply from anywhere. No branch visits or paperwork queues.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="align-items-center text-light process-box h-100 bg-orange">
                            <div class="text-start mb-60">
                                <div
                                    class="icon d-flex align-items-center justify-content-center categories-image-wrap bg-white">
                                    <i class="fas fa-forward fs-6 text-blue"></i>
                                </div>
                            </div>
                            <div class="text-start">
                                <h6 class="text-white">Fast approval</h6>
                                <p class="mt-10 text-white">Most applications are approved within 48 hours of verification.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="align-items-center text-light process-box process-wrap-main h-100">
                            <div class="text-start mb-60">
                                <div
                                    class="icon d-flex align-items-center justify-content-center categories-image-wrap bg-blue">
                                    <i class="fas fa-th-large fs-6 text-white"></i>
                                </div>
                            </div>
                            <div class="text-start">
                                <h6 class="text-blue">Many lenders, one form</h6>
                                <p class="mt-10 text-black">One application reaches multiple NBFCs so you can compare real offers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="align-items-center text-light process-box h-100">
                            <div class="text-start mb-60">
                                <div
                                    class="icon d-flex align-items-center justify-content-center categories-image-wrap bg-blue">
                                    <i class="fas fa-headset fs-6 text-white"></i>
                                </div>
                            </div>
                            <div class="text-start">
                                <h6 class="text-blue">Expert support</h6>
                                <p class="mt-10 text-black">A certified loan expert guides you from first query to disbursal.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>

<section class="section section-theme-2 featured_Jobs_Block pt-60 pt-md-60 py-xl-80 pb-60 pb-md-60 bg-light-sky"
    id="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-12 m-auto">
                <header class="section-header text-center text-lg-center">
                    <span class="text-orange text-uppercase text-outlined text-top mb-15 d-inline-block section-title position-relative">Testimonials</span>
                    <h3>What our <span class="text-orange"> clients say </span></h3>
                    <p class="text-center">Hear what our clients have to say about us.</p>
                </header>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-12 m-auto">
                <div class="client_testimonials">
                    <?php $testimoniallist = array('testimonials-1.png', 'testimonials-2.png', 'testimonials-3.png', 'testimonials-1.png', 'testimonials-2.png', 'testimonials-3.png') ?>
                    <div class="client_testimonials_slider">
                        <div>
                            <div class="bg-white p-15 border testimonials-card-content">

                                <div class="rates-review">
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                </div>
                                <div class="card-comment">
                                    <p class="lh-normal">moneysahay explained the application steps clearly and helped me understand the documents required</p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <img src="<?php echo base_url('assets/images/user-1.png'); ?>" alt="image"
                                            class="img-fluid process-border-img m-auto">
                                    </div>
                                    <p class="card-position mb-0 ms-15">Hiral Vyas</p>
                                </div>

                            </div>
                        </div>
                        <div>
                            <div class="bg-white p-15 border testimonials-card-content">

                                <div class="rates-review">
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                </div>
                                <div class="card-comment">
                                    <p>The team answered my questions and guided me through the personal loan application process.</p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <img src="<?php echo base_url('assets/images/user-2.png'); ?>" alt="image"
                                            class="img-fluid process-border-img m-auto">
                                    </div>
                                    <p class="card-position mb-0 ms-15">Darshan Trivedi</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="bg-white p-15 border testimonials-card-content">

                                <div class="rates-review">
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                </div>
                                <div class="card-comment">
                                    <p>The information was easy to understand, and the support was helpful throughout</p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <img src="<?php echo base_url('assets/images/user-3.png'); ?>" alt="image"
                                            class="img-fluid process-border-img m-auto">
                                    </div>
                                    <p class="card-position mb-0 ms-15">Kinjal Bhatt</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="bg-white p-15 border testimonials-card-content">

                                <div class="rates-review">
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                </div>
                                <div class="card-comment">
                                    <p>I appreciated the guidance on the documents and the next steps in my application.</p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <img src="<?php echo base_url('assets/images/user-4.png'); ?>" alt="image"
                                            class="img-fluid process-border-img m-auto">
                                    </div>
                                    <p class="card-position mb-0 ms-15">Mihir Thakkar</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="bg-white p-15 border testimonials-card-content">

                                <div class="rates-review">
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                </div>
                                <div class="card-comment">
                                    <p>moneysahaymade it easier for me to understand the available loan options.</p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <img src="<?php echo base_url('assets/images/user-1.png'); ?>" alt="image"
                                            class="img-fluid process-border-img m-auto">
                                    </div>
                                    <p class="card-position mb-0 ms-15">Hetal Dave</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="bg-white p-15 border testimonials-card-content">

                                <div class="rates-review">
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                </div>
                                <div class="card-comment">
                                    <p>The team was supportive and explained the process in a simple way.
                                    </p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <img src="<?php echo base_url('assets/images/user-2.png'); ?>" alt="image"
                                            class="img-fluid process-border-img m-auto">
                                    </div>
                                    <p class="card-position mb-0 ms-15">Parth Soni</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="bg-white p-15 border testimonials-card-content">

                                <div class="rates-review">
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                </div>
                                <div class="card-comment">
                                    <p>I found the application guidance clear and useful.</p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <img src="<?php echo base_url('assets/images/user-3.png'); ?>" alt="image"
                                            class="img-fluid process-border-img m-auto">
                                    </div>
                                    <p class="card-position mb-0 ms-15">Niyati Acharya</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="bg-white p-15 border testimonials-card-content">

                                <div class="rates-review">
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                </div>
                                <div class="card-comment">
                                    <p>The team helped me understand what information was needed for my application.
                                    </p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <img src="<?php echo base_url('assets/images/user-4.png'); ?>" alt="image"
                                            class="img-fluid process-border-img m-auto">
                                    </div>
                                    <p class="card-position mb-0 ms-15">Jignesh Barot</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="bg-white p-15 border testimonials-card-content">

                                <div class="rates-review">
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                </div>
                                <div class="card-comment">
                                    <p>My questions were addressed, and I received guidance at each step.</p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <img src="<?php echo base_url('assets/images/user-1.png'); ?>" alt="image"
                                            class="img-fluid process-border-img m-auto">
                                    </div>
                                    <p class="card-position mb-0 ms-15">Dhara Pandya</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="bg-white p-15 border testimonials-card-content">

                                <div class="rates-review">
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                </div>
                                <div class="card-comment">
                                    <p>moneysahayprovided helpful support while I explored personal loan options.</p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <img src="<?php echo base_url('assets/images/user-2.png'); ?>" alt="image"
                                            class="img-fluid process-border-img m-auto">
                                    </div>
                                    <p class="card-position mb-0 ms-15">Bhavin Raval</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section
    class="section section-theme-2 section-faqs pt-35 pt-md-50 pt-lg-75 py-xl-80 py-xxl-80 pb-35 pb-md-50 pb-lg-75">
    <div class="container">
        <div class="row">
            <div class="col-md-4 section-header">
                <span class="text-orange text-uppercase text-outlined text-top mb-15 d-inline-block section-title position-relative">FAQ</span>
                <h3 class="mb-15">Questions <span class="text-orange"> answered</span></h3>
                <p>Can't find what you need? Send us a message and we'll reply quickly.</p>

            </div>
            <div class="col-md-8">
                <div class="accordion" id="faq-accordion-2">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed bg-transparent justify-content-between"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                aria-expanded="false" aria-controls="collapseOne">

                                <span class="title d-flex text-blue"><span class="me-20 text-orange">01</span>How much loan can I get?</span>
                                <span class="bullet me-0"></span>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#faq-accordion-1">
                            <div class="accordion-body">
                                <p>You can apply for up to ₹10 lakhs. Your eligible amount depends on your income, obligations and tenure.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed bg-transparent justify-content-between"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">

                                <span class="title d-flex text-blue"><span class="me-20 text-orange">02</span>How long does approval take?</span>
                                <span class="bullet me-0"></span>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#faq-accordion-1">
                            <div class="accordion-body">
                                <p>Many personal loans are unsecured and may not require collateral. However,
                                    requirements are decided by the NBFC based on its policies and the applicant’s
                                    profile.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed bg-transparent justify-content-between"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">

                                <span class="title d-flex text-blue"><span class="me-20 text-orange">03</span>Will checking eligibility affect my credit score?</span>
                                <span class="bullet me-0"></span>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#faq-accordion-1">
                            <div class="accordion-body">
                                <p>
                                    NBFCs may assess income, credit history, existing financial obligations,
                                    documents and other internal criteria. FlexiCred can guide you on the
                                    application process, but the final decision is made by the NBFC.

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed bg-transparent justify-content-between"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                aria-expanded="false" aria-controls="collapseFour">

                                <span class="title d-flex text-blue"><span class="me-20 text-orange">04</span>Which documents do I need?</span>
                                <span class="bullet me-0"></span>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#faq-accordion-1">
                            <div class="accordion-body">
                                <p>
                                    Requirements may vary by NBFC, but commonly include identity proof, address
                                    proof, income-related documents and bank statements. A complete checklist is
                                    shared based on the application requirements.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed bg-transparent justify-content-between"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                aria-expanded="false" aria-controls="collapseFive">

                                <span class="title d-flex text-blue"><span class="me-20 text-orange">05</span>Are there any hidden charges?</span>
                                <span class="bullet me-0"></span>
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#faq-accordion-1">
                            <div class="accordion-body">
                                <p>Tax treatment depends on how the loan amount is used and applicable tax laws.
                                    Please consult a qualified tax professional for advice specific to your
                                    situation.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-contact section-theme-1 bg-dark-blue">
    <div class="container">
        <p class="mb-0 text-white"><small><strong>Disclaimer: </strong><?php echo COMPANY_NAME ?> is not a lender or financial institution. We do not provide loans or make credit decisions. All loan approvals, interest rates, fees, and disbursal are handled by third-party lenders/NBFCs. We do not guarantee loan approval, disbursal, or specific loan terms. The amount paid is only for the service charge. We are not lenders and do not guarantee any loan approval. Loan approval, disbursement/sanction is entirely dependent on NBFC criteria.</small>
        </p>

        <p class="mb-0 text-white"><small><strong>Important Note: </strong>We ask our customers to make payments ONLY on
                our website <a class="text-dark" href="<?php echo COMPANY_SITE; ?>">moneysahayn</a> and NOT through
                any other
                source, directly or indirectly.</small></p>

        <p class="mb-0 text-white"><small><strong>Pre-application NOTE: </strong>Users are advised to read our terms and
                conditions and
                policies before proceeding/applying/registration.</small>
        </p>
        <p class="mb-0 text-white"><small><strong>Disclosure:</strong> Loan tenure minimum 6 months & maximum 60 months;
                Maximum APR: 34%
                p.a.; processing fee: up to 2%. Representative example: ₹1,00,000 at 11.5% for 60 months with ₹2,000
                processing fee — EMI ₹2,301, total interest ₹38,059, total repayment ₹1,38,059, indicative APR
                14.41%.</small></p>

        <p class="mb-0 text-white"><small><strong>Registered Office Address :
                </strong><?php echo COMPANY_ADDRESS; ?></small></p>

        <p class="mb-0 text-white"><small><strong>Mobile : </strong><?php echo COMPANY_MOBILE; ?> | <strong>Email :
                </strong><?php echo COMPANY_EMAIL; ?></small></p>

    </div>
</section>

<?php $this->load->view('includes/footer-apply'); ?>

<script src="<?php echo base_url('assets/js/loanscript.js'); ?>" type="text/javascript"></script>

<script type="text/javascript">
    $('#mylist li').click(function() {
        $('#usertype').val($(this).data('value'));
    });

    function resendotp() {
        loanamount = document.getElementById('loanamount').value;
        mobile = document.getElementById('otpmobile').value;

        $.ajax({
            url: '<?php echo base_url("onlineprocess/resendotpCode"); ?>',
            type: "POST",
            data: 'mobile=' + mobile + '&loanamount=' + loanamount,
            dataType: "JSON",
            cache: false,
            processData: false,
            success: function(response) {
                if (response['success'] == true) {
                    $('#resend-message2').html(response['message']);
                    toastr.success(response['message']);
                } else {
                    toastr.error(response['message']);
                }
            },
            error: function(jXHR, textStatus, errorThrown) {
                toastr.error(errorThrown, 'ERROR');
            }
        });
    }

    $(function() {
        $('#submitForm1').on('submit', function(e) {
            e.preventDefault();

            $.ajax({
                url: $(this).attr('action') || window.location.pathname,
                type: "POST",
                data: $(this).serialize(),
                dataType: "JSON",
                cache: false,
                processData: false,
                beforeSend: function() {
                    $('#formsubmit1').html(
                        'Applying... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>'
                    );
                    $('#formsubmit1').attr('disabled', true);
                },
                success: function(response) {
                    if (response['success'] == true) {
                        if (response['redirect_url'] != "") {
                            window.location.href = response['redirect_url'];
                        } else {
                            window.location = "./applynow/s2/" + response['mobile'];
                        }
                    } else {
                        $('#mobilenoError1').html(response['message']);
                        toastr.error(response['message']);
                    }

                    $('#formsubmit1').html('Apply Now');
                    $('#formsubmit1').attr('disabled', false);
                },
                error: function(jXHR, textStatus, errorThrown) {
                    toastr.error(errorThrown, 'ERROR');
                    $('#formsubmit1').html('Apply Now');
                    $('#formsubmit1').attr('disabled', false);
                }
            });
        });

        $('#submitForm2').on('submit', function(e) {
            e.preventDefault();
            $('#resend-message2').html('');
            $('#otpcodeError').html('');

            $.ajax({
                url: $(this).attr('action') || window.location.pathname,
                type: "POST",
                data: $(this).serialize(),
                dataType: "JSON",
                cache: false,
                processData: false,
                beforeSend: function() {
                    $('#formsubmit2').html(
                        'Verifying... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>'
                    );
                    $('#formsubmit2').attr('disabled', true);
                },
                success: function(response) {
                    if (response['success'] == true) {
                        window.location = "../../applynow/s3/" + response['mobile'];
                    } else {
                        $('#otpcodeError').html(response['message']);
                        toastr.error(response['message']);
                    }

                    $('#formsubmit2').html('Verify OTP');
                    $('#formsubmit2').attr('disabled', false);
                },
                error: function(jXHR, textStatus, errorThrown) {
                    toastr.error(errorThrown, 'ERROR');
                    $('#formsubmit2').html('Verify OTP');
                    $('#formsubmit2').attr('disabled', false);
                }
            });
        });


        $('#submitForm3').on('submit', function(e) {
            e.preventDefault();
            $('#resend-message2').html('');
            $('#otpcodeError').html('');

            $.ajax({
                url: $(this).attr('action') || window.location.pathname,
                type: "POST",
                data: $(this).serialize(),
                dataType: "JSON",
                cache: false,
                processData: false,
                beforeSend: function() {
                    $('#formsubmit3').html(
                        'Processing... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>'
                    );
                    $('#formsubmit3').attr('disabled', true);
                },
                success: function(response) {
                    if (response['success'] == true) {
                        window.location.href = response['redirect_url'];
                    } else {
                        $('#otpcodeError').html(response['message']);
                        toastr.error(response['message']);
                    }

                    $('#formsubmit3').html('Process');
                    $('#formsubmit3').attr('disabled', false);
                },
                error: function(jXHR, textStatus, errorThrown) {
                    toastr.error(errorThrown, 'ERROR');
                    $('#formsubmit3').html('Process');
                    $('#formsubmit3').attr('disabled', false);
                }
            });
        });
    });
    const color = $(".size-details li");

    color.on("click", function() {
        $(".size-details ul li").removeClass("active-size");
        $(this).addClass("active-size");
    });
</script>



<script>
    document.addEventListener("DOMContentLoaded", function() {

        let resendBtn = document.getElementById('resendBtn');
        let counttime = document.getElementById('counttime');
        let timerDisplay = document.getElementById('timer');
        let countdown = 30;

        let interval = setInterval(() => {
            countdown--;
            timerDisplay.textContent = countdown;

            if (countdown <= 0) {
                clearInterval(interval);
                resendBtn.classList.remove('d-none');
                counttime.classList.add('d-none');
                timerDisplay.textContent = '';
            }
        }, 1000);

        resendBtn.addEventListener('click', function() {
            resendBtn.classList.add('d-none');
            counttime.classList.remove('d-none');
            countdown = 30;
            timerDisplay.textContent = countdown;

            interval = setInterval(() => {
                countdown--;
                timerDisplay.textContent = countdown;

                if (countdown <= 0) {
                    clearInterval(interval);
                    resendBtn.classList.remove('d-none');
                    counttime.classList.add('d-none');
                    timerDisplay.textContent = '';
                }
            }, 1000);
        });
    });

    $('.otp-input').on('input', function() {
        this.value = this.value.replace(/[^0-9]/g, '');
        if (this.value.length === 1) {
            $(this).next('.otp-input').focus();
        }
    });
    $('.otp-input').on('keydown', function(e) {
        if (e.key === "Backspace" && this.value === '') {
            $(this).prev('.otp-input').focus();
        }
    });
</script>