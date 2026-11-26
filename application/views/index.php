<?php
$this->load->view('includes/header');
?>

<div class="visual-block visual-theme-5 bg-dark hero-section text-black pb-40 pb-xl-100 pb-md-40 pt-130">
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 col-xl-6 position-relative mb-lg-0 mb-15">
                <div>
                    <div class="visual-textbox pt-0">
                        <div class="text-hold">
                            <div class="tag-list mb-20">
                                <span class="tag-wrap"> <i class="fas fa-circle text-orange fa-xs me-10"></i>India's trusted loan partner</span>
                            </div>
                        </div>
                        <h1 class="text-blue">Your Buddy for
                            <br> <span class="text-orange"><strong>Smarter Loans </strong><br>
                        </h1>
                        <p class="">Compare pre-approved business and personal loan offers from trusted NBFC partners in one place. 100% online, transparent and fast.</p>

                        <div class="right_align">
                            <a href="<?php echo site_url('onlineprocess/applynow'); ?>"
                                class="btn btn-orange btn-sm me-md-10 mb-lg-0 mb-10"><span class="btn-text">Check eligibility <i
                                        class="fas fa-arrow-right"></i></span></a>
                            <a href="#" class="btn btn-white btn-sm">See how it works</a>
                        </div>

                        <div class="section-theme-6 pt-20 pb-0">
                            <div class="counters-block pb-0">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                                            <div class="box-agent mb-md-0 mb-10">
                                                <ul class="agent-img-list d-flex ps-0 list-unstyled mb-0">
                                                    <li class="agent-img-item">
                                                        <img src="<?php echo base_url('assets/images/Client-1.png'); ?>"
                                                            alt="image" class="me-md-10 me-0">
                                                    </li>
                                                    <li class="agent-img-item">
                                                        <img src="<?php echo base_url('assets/images/Client-2.png'); ?>"
                                                            alt="image" class="me-md-10 me-0">
                                                    </li>
                                                    <li class="agent-img-item">
                                                        <img src="<?php echo base_url('assets/images/client-3.png'); ?>"
                                                            alt="image" class="me-md-10 me-0">
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-12">
                                            <div class="row">
                                                <div class="col-lg-12 col-12">
                                                    <p class="text-black mb-0"><strong class="text-blue"> 5,000+ </strong> borrowers funded · rated <strong class="text-blue"> 4.8/5</strong></p>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-6">
                <img src="<?php echo base_url('assets/images/home-img.png'); ?>" alt="icon" class="img-fluid">
            </div>

        </div>
    </div>
</div>

<main class="main">

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
    <section class="section section-theme-2 how-we-help-block py-60 py-md-60 py-xl-60 about-section" id="aboutus">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 mb-lg-0 mb-15">
                    <header class="section-header mb-0">

                        <span class="text-orange text-uppercase text-outlined text-top mb-15 d-block section-title position-relative">About us</span>
                        <h3 class="mb-10 text-blue">Funding that moves as <br> <span class="text-orange">fast as you do</span></h3>
                        <p class="">moneysahay connects borrowers with trusted NBFC partners across India. We compare offers, simplify paperwork and stay with you until the money reaches your account.</p>
                        <hr class="my-30">
                        <div class="section-theme-6 pt-0 pb-0">
                            <div class="counters-block pb-0">
                                <div class="container">
                                    <div class="row justify-content-center justify-content-md-between">
                                        <div class="col-lg-4 col-4">
                                            <div class="counter-box">
                                                <div class="counter-stats">
                                                    <strong class="numbers h3 mb-0 text-blue">
                                                        <span data-purecounter-duration="1" data-purecounter-start="0"
                                                            data-purecounter-end="500" data-purecounter-once="true"
                                                            class="purecounter">500</span>Cr+
                                                    </strong>
                                                    <span class="subtext">Happy Clients</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-4">

                                            <div class="counter-box">
                                                <div class="counter-stats">
                                                    <strong class="numbers h3 mb-0 text-blue">
                                                        <span data-purecounter-duration="1" data-purecounter-start="0"
                                                            data-purecounter-end="5000" data-purecounter-once="true"
                                                            class="purecounter">5000</span>+
                                                    </strong>
                                                    <span class="subtext">Loans Disbursed</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-4">
                                            <div class="counter-box">
                                                <div class="counter-stats">
                                                    <strong class="numbers h3 mb-0 text-blue">
                                                        <span data-purecounter-duration="1" data-purecounter-start="0"
                                                            data-purecounter-end="20" data-purecounter-once="true"
                                                            class="purecounter">20</span>+
                                                    </strong>
                                                    <span class="subtext">NBFC Partners</span>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-20">
                            <a href="<?php echo site_url('onlineprocess/applynow'); ?>"
                                class="btn btn-orange btn-sm"><span class="btn-text">Apply Now </span></a>
                        </div>
                    </header>
                </div>
                <div class="col-12 col-lg-6 aboutus-cnt">
                    <img src="<?php echo base_url('assets/images/about.png'); ?>" alt="icon" class="img-fluid">
                </div>

            </div>
        </div>
    </section>

    <section class="section section-theme-2 how-work-block pt-60 pt-md-60 py-xl-80 pb-60 pb-md-60 bg-light-sky">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-12 m-auto">
                    <header class="section-header text-center text-lg-center">
                        <span class="text-orange text-uppercase text-outlined text-top mb-15 d-inline-block section-title position-relative">How it works</span>

                        <h3 class="mb-10 text-blue">Get your loan in <span class="text-orange">6 simple steps</span></h3>
                        <p class="text-center">A digital-first process with no branch visits and no paperwork queues.
                        </p>
                    </header>
                </div>
            </div>
            <div class="row process-boxes justify-content-center g-25">
                <div class="col-md-4 col-sm-6">
                    <div class="how-box h-100 border-blue">
                        <div class="text-start mb-10">
                            <div class="d-flex justify-content-between align-items-center mb-40">
                                <span class="title-number"> <img src="<?php echo base_url('assets/images/number-01.png'); ?>"
                                        alt="icon"></span>
                                <div
                                    class="icon d-flex align-items-center justify-content-center categories-image-wrap bg-gredient">
                                    <i class="fas fa-file-signature fs-6 text-blue"></i>
                                </div>

                            </div>
                        </div>
                        <h6 class="text-blue">Enter amount & mobile</h6>
                        <p class="text-dark mb-0">Choose how much you need and add your mobile number.</p>

                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="how-box h-100 border-orange">
                        <div class="text-start mb-10">
                            <div class="d-flex justify-content-between align-items-center mb-40">
                                <span class="title-number"> <img src="<?php echo base_url('assets/images/number-02.png'); ?>"
                                        alt="icon"></span>
                                <div
                                    class="icon d-flex align-items-center justify-content-center categories-image-wrap bg-gredient">
                                    <i class="fas fa-hand-holding-usd fs-6 text-blue"></i>
                                </div>

                            </div>
                        </div>
                        <h6 class="text-blue">Verify with OTP</h6>
                        <p class="text-dark mb-0">Confirm your number with a secure 4-digit code.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="how-box h-100 border-blue">
                        <div class="text-start mb-10">
                            <div class="d-flex justify-content-between align-items-center mb-40">
                                <span class="title-number"> <img src="<?php echo base_url('assets/images/number-03.png'); ?>"
                                        alt="icon"></span>
                                <div
                                    class="icon d-flex align-items-center justify-content-center categories-image-wrap bg-gredient">
                                    <i class="fas fa-cloud-upload-alt fs-6 text-blue"></i>
                                </div>

                            </div>
                        </div>
                        <h6 class="text-blue">Share your profile</h6>
                        <p class="text-dark mb-0">Tell us about your work, income and credit score.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="how-box h-100 border-blue">
                        <div class="text-start mb-10">
                            <div class="d-flex justify-content-between align-items-center mb-40">
                                <span class="title-number"> <img src="<?php echo base_url('assets/images/number-04.png'); ?>"
                                        alt="icon"></span>
                                <div
                                    class="icon d-flex align-items-center justify-content-center categories-image-wrap bg-gredient">
                                    <i class="fas fa-file-invoice-dollar fs-6 text-blue"></i>
                                </div>

                            </div>
                        </div>
                        <h6 class="text-blue">Choose your EMI</h6>
                        <p class="text-dark mb-0">Pick a tenure from 12 to 72 months that fits you.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="how-box h-100 border-orange">
                        <div class="text-start mb-10">
                            <div class="d-flex justify-content-between align-items-center mb-40">
                                <span class="title-number"> <img src="<?php echo base_url('assets/images/number-05.png'); ?>"
                                        alt="icon"></span>
                                <div
                                    class="icon d-flex align-items-center justify-content-center categories-image-wrap bg-gredient">
                                    <i class="fas fa-award fs-6 text-blue"></i>
                                </div>

                            </div>
                        </div>
                        <h6 class="text-blue">Unlock your offer</h6>
                        <p class="text-dark mb-0">See pre-approved offers from our NBFC partners.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="how-box h-100 border-blue">
                        <div class="text-start mb-10">
                            <div class="d-flex justify-content-between align-items-center mb-40">
                                <span class="title-number"> <img src="<?php echo base_url('assets/images/number-06.png'); ?>"
                                        alt="icon"></span>
                                <div
                                    class="icon d-flex align-items-center justify-content-center categories-image-wrap bg-gredient">
                                    <i class="fas fa-rupee fs-6 text-blue"></i>
                                </div>

                            </div>
                        </div>
                        <h6 class="text-blue">Get funded</h6>
                        <p class="text-dark mb-0">The NBFC verifies and disburses to your account.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-theme-2 how-we-help-block pt-60 pt-md-60 py-xl-80 pb-60 pb-md-60 counter-section position-relative" id="howitworks">
        <div class="container">

            <div class="row mb-0 g-20">
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

    <section class="section section-theme-2 how-work-block pt-60 pt-md-60 py-xl-80 pb-60 pb-md-60 bg-light-sky" id="emicalculator">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-12 m-auto">
                    <header class="section-header text-center text-lg-center">

                        <span class="text-orange text-uppercase text-outlined text-top mb-15 d-inline-block section-title position-relative">EMI Calculator</span>
                        <h3>Know Your EMI in Seconds</h3>
                        <p class="text-center ">Move the slider and pick a tenure to see what you can borrow.</p>
                    </header>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-12 col-12">
                    <div class="row">

                        <script src="https://emicalculator.net/widget/2.0/js/emicalc-loader.min.js"
                            type="text/javascript">
                        </script>
                        <div id="ecww-widgetwrapper" style="min-width:250px;width:100%;">
                            <div id="ecww-widget"
                                style="position:relative;padding-top:0;padding-bottom:280px;height:0;overflow:hidden;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-theme-2 featured_Jobs_Block pt-60 pt-md-60 py-xl-80 pb-60 pb-md-60"
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
                                        <p>moneysahay provided helpful support while I explored personal loan options.</p>
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
        class="section section-theme-2 section-faqs pt-60 pt-md-0 pt-lg-0 pb-xl-80 pb-xxl-80 pb-60 pb-md-80 pb-lg-80">
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
   


    <section
        class="section section-contact section-theme-1 pt-60 pt-md-60 py-xl-80 py-xxl-80 pb-60 pb-md-60 contact-section bg-light-sky"
        id="contactus">
        <div class="container">

            <div class="contact-form">
                <div class="row justify-content-between">
                    <div class="col-12 col-md-6 col-xl-5 form-right-main order-lg-1 order-2">
                        <ul class="contact-support  text-light h-100">
                            <div class="mb-20">
                                <h4 class="text-white mb-0">Drop us a <span class="highlight-text">message</span></h4>
                                <p class="text-light">Our team responds within 24 hours.</p>
                            </div>

                            <li class="border mb-20">
                                <div class="contact-box ps-0 mb-0">
                                    <div class="text-start mb-10">
                                        <div class="icon bg-white">
                                            <i class="fas fa-phone text-blue"></i>
                                        </div>
                                    </div>
                                    <div class="textbox ms-20">
                                        <h3 class="h4 text-light">Customer Support</h3>
                                        <p class="text-light">
                                            <a href="tel:<?php echo COMPANY_MOBILE; ?>" class="text-light"><?php echo COMPANY_MOBILE; ?></a>
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li class="mb-20 border">
                                <div class="contact-box ps-0 mb-0">
                                    <div class="text-start mb-10">
                                        <div class="icon bg-white">
                                            <i class="fas fa-envelope text-blue"></i>
                                        </div>
                                    </div>
                                    <div class="textbox ms-20">
                                        <h3 class="h4 text-light">Email</h3>
                                        <p>
                                            <a href="mailto:<?php echo COMPANY_EMAIL; ?>" class="text-light"><?php echo COMPANY_EMAIL; ?></a>
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li class="mb-20 border">
                                <div class="contact-box ps-0 mb-0">
                                    <div class="text-start mb-10">
                                        <div class="icon bg-white">
                                            <i class="fas fa-map-marker-alt text-blue"></i>
                                        </div>
                                    </div>
                                    <div class="textbox ms-20">
                                        <h3 class="h4 text-light">Location</h3>
                                        <address class="text-light"><?php echo COMPANY_ADDRESS; ?></address>
                                        </address>
                                    </div>
                                </div>
                            </li>

                            <li class="mb-20 border">
                                <div class="contact-box ps-0 mb-0">
                                    <div class="text-start mb-10">
                                        <div class="icon bg-white">
                                            <i class="far fa-clock text-blue"></i>
                                        </div>
                                    </div>
                                    <div class="textbox ms-20">
                                        <h3 class="h4 text-light">Working Hours</h3>
                                        <p class="text-light">
                                            Monday to Saturday: 10:00 AM - 5:00 PM
                                            Sunday: Closed
                                        </p>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-xl-7 m-auto form-right-main order-lg-2 order-1">
                        <div class="bg-white shadow  p-md-40 p-20 contact-form-right form-right">
                            <?php echo form_open('infopage/contactsubmission', array('id' => 'contactForm', 'class' => 'contac-form', 'novalidate' => 'novalidate')); ?>
                            <h4 class="text-blue">Request a consultation</h4>
                            <div class="row">
                                <div class="form-group col-md-6 col-12 mb-15 mb-md-20 mb-lg-20">
                                    <label class="text-blue fa-sm" for="fullname">Full Name *</label>
                                    <input class="form-control" type="text" name="fullname" placeholder="Your Name"
                                        required data-validation-regex-regex="^[a-zA-Z ]*$">
                                    <div class="help-block font-small-3"></div>
                                </div>
                                <div class="form-group col-md-6 col-12 mb-15 mb-md-20 mb-lg-20">
                                    <label class="text-blue fa-sm" for="email">Mobile no *</label>
                                    <input class="form-control" type="text" name="mobile" placeholder="Your Mobile"
                                        required minlength="10" maxlength="10" inputmode="numeric"
                                        data-validation-regex-regex="^[6789]\d{9}$"
                                        data-validation-regex-message="Enter valid mobile number">
                                    <div class="help-block font-small-3"></div>
                                </div>
                                <div class="form-group col-md-6 col-12 mb-15 mb-md-20 mb-lg-20">
                                    <label class="text-blue fa-sm" for="email">Email id *</label>
                                    <input class="form-control" type="email" name="email" placeholder="Your Email Id"
                                        required>
                                    <div class="help-block font-small-3"></div>
                                </div>
                                <div class="form-group col-md-6 col-12 mb-15 mb-md-20 mb-lg-20">
                                    <label class="text-blue fa-sm" for="subject">Subject</label>
                                    <input class="form-control" type="text" name="subject" placeholder="Your Subject"
                                        required>
                                    <div class="help-block font-small-3"></div>
                                </div>
                                <div class="form-group col-md-12 col-12 mb-15 mb-md-20 mb-lg-20">
                                    <label class="text-blue fa-sm" for="message">Message *</label>
                                    <textarea class="form-control" name="message" cols="30" rows="10"
                                        placeholder="Your Message" required></textarea>
                                    <div class="help-block font-small-3"></div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-orange btn-sm w-100"><span
                                            class="btn-text">Submit</span></button>
                                </div>
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php if ($msg[0]->option_value == 1 && $msg[1]->option_value != '') { ?>
        <div class="modal fade" id="welcomemsg" tabindex="-1" aria-labelledby="loginmodal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
                <div class="modal-content" id="loginmodal">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?php echo $msg[1]->option_value; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</main>

<?php
$this->load->view('includes/footer');
?>

<script type="text/javascript">
    $(function() {
        $('#submitForm3').on('submit', function(e) {
            e.preventDefault();
            var pageid = $('#getapage').find(":selected").val();

            if (pageid == 1 || pageid == 2) {
                window.location = "onlineprocess/applynow";
            }
        });
    });
</script>

<script type="text/javascript">
    $(window).on('load', function() {
        $('#welcomemsg').modal('show');
    });
</script>