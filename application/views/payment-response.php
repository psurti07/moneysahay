<?php $this->load->view('includes/header-apply'); ?>

<main class="main">
    <section class="section section-theme-1 packages-block pt-100 cust-height d-flex align-items-center bg-light-sky">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12 col-12 m-auto">
                    <div class="landind-card-wrapper">
                        <div class="block-holder form-condidates payment-responsive shadow rounded-1 bg-white">
                            <div class="subhead text-center mb-0">
                                <?php if($responsedata == "true") { ?>
                                <div class="text-center mb-15">
                                    <i class="fa-regular fa-circle-check fs-1 text-success"></i>

                                </div>
                                <h4 class="text-blue">Congratulations! <span class="text-blue">kirtan!</span> </h4>
                                <p>Your payment was successful. Our loan expert will call you within <br> 24–48 hours to guide you through verification and documents.
                                </p>
                                

                           <div class="section-theme-6 pt-20 pb-0">
                                        <div class="counters-block pb-0">
                                            <div class="row justify-content-center justify-content-md-between gx-10">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                                    <div class="counter-box d-block text-center mb-0">

                                                        <div class="counter-stats">
                                                            <strong class="numbers h5 mb-5 text-blue">
                                                                <span data-purecounter-duration="1"
                                                                    data-purecounter-start="0"
                                                                    data-purecounter-end="5"
                                                                    data-purecounter-once="true"
                                                                    class="purecounter">5</span>L+
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
                                                                    data-purecounter-end="36"
                                                                    data-purecounter-once="true"
                                                                    class="purecounter">36</span>mo
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

                                <div class="mt-20">
                                    <a href="<?php echo site_url(); ?>" class="btn btn-orange btn-sm w-100">Goto Home
                                        Page</a>
                                    <a href="<?php echo site_url(); ?>customer"
                                        class="btn btn-outline border btn-lg w-100 mt-10">Customer
                                        Login</a>

                                </div>
                                <div class="mt-20">

                                    <a href="<?php echo site_url('support/request'); ?>" class="text-dark">Start a new
                                        application<i class="fa-solid fa-arrow-right ms-5"></i></a>
                                </div>
                                <?php } 
              else if($responsedata == "false") { ?>
                                <div class="text-center mb-15">
                                    <i class="fa-regular fa-circle-xmark text-danger fs-1"></i>

                                </div>
                                <h4 class="text-blue">Payment <span class="text-blue">Unsuccessful</span></h4>
                                <p>
                            Don't worry – if any amount was deducted, it will be refunded to your account within 5–7 working days.
                                </p>
                               
                            

                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                        <div
                                               class="card-blog-wrapper border p-10 mb-md-0 mb-10 bg-white card shadow-none">
                                            <p class="mb-0 fw-bold text-danger">Insufficient balance</p>
                                          
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                        <div
                                                 class="card-blog-wrapper border p-10 mb-md-0 mb-10 bg-white card shadow-none">

                                            <p class="mb-0 fw-bold text-danger">Network issue</p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                        <div
                                           class="card-blog-wrapper border p-10 mb-md-0 mb-10 bg-white card shadow-none">

                                            <p class="mb-0 fw-bold text-danger">Bank declined</p>
                            
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="mt-20">
                                    <a href="<?php echo site_url(); ?>customer"
                                        class="btn btn-outline border btn-lg mb-md-0 mb-5">having an issues ?</a>

                                    <a href="<?php echo site_url('cardpay'); ?>" class="btn btn-orange btn-sm">Try
                                        Another
                                        Payment Method</a>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php $this->load->view('includes/footer-apply');   ?>