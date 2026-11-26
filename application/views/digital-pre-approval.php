<?php
$this->load->view('includes/header-offer.php');
$today = date('Y-m-d', strtotime($userdetails['rec_date']));
$last30 = date('Y-m-d', strtotime('-30 days'));
if ($today <= $last30) {
    $eligibilityamt = calEligiblity($userdetails['income'], $userdetails['currentemi'], $userdetails['apr'], $userdetails['loanamount']) + 100000;
} else {
    $eligibilityamt = calEligiblity($userdetails['income'], $userdetails['currentemi'], $userdetails['apr'], $userdetails['loanamount']);
}
$eligibilityamtindia = formatePriceIndia($eligibilityamt);
?>

<main class="main d-flex flex-column">
    <section class="section section-theme-1 packages-block pt-40 bg-light-sky offer-section">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-12 p-0">
                    <div class="loan-stepper-wrapper">
                        <div class="loan-stepper">


                            <div class="loan-step completed">
                                <div class="step-circle">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span class="step-title">Loan Amount</span>
                            </div>


                            <div class="loan-step completed">
                                <div class="step-circle">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span class="step-title">Verify Mobile</span>
                            </div>


                            <div class="loan-step completed">
                                <div class="step-circle">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span class="step-title">Personal Details</span>
                            </div>


                            <div class="loan-step active">
                                <div class="step-circle">
                                    <span>4</span>
                                </div>
                                <span class="step-title">Financial Details</span>
                            </div>


                            <div class="loan-step">
                                <div class="step-circle">
                                    <span>5</span>
                                </div>
                                <span class="step-title">EMI Options</span>
                            </div>


                            <div class="loan-step">
                                <div class="step-circle">
                                    <span>6</span>
                                </div>
                                <span class="step-title">Your Offer</span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 p-0 order-lg-1 order-2">
                    <div class="process-box subscription-left h-100">
                        <div class="d-block pb-15 details-content">
                            <div class="text-start mb-20">
                                <div
                                    class="icon d-flex align-items-center justify-content-center categories-image-wrap">
                                    <i class="fas fa-home fs-6 text-white"></i>
                                </div>
                            </div>
                            <div class=" text-start text-light">
                                <h5 class="mb-10 text-start fw-bold text-white">Your financial details</h5>
                                <p>We use these to estimate your eligibility. A soft check never affects your score.</p>
                            </div>
                        </div>
                        <div class="user-details-table mb-0 process-boxes">
                            <div class="align-items-center process-box h-100 mb-10">

                                <div class="ms-0 d-flex justify-content-between w-100">
                                    <small class="d-block s-12 text-white">Name</small>
                                    <h6 class="text-white fw-bold"><?php echo $userdetails['fullname']; ?></h6>
                                </div>
                            </div>
                            <div class="align-items-center process-box h-100 mb-10">

                                <div class="ms-0 d-flex justify-content-between w-100">
                                    <small class="d-block s-12 text-white">Mobile :</small>
                                    <h6 class="text-white fw-bold"><?php echo $userdetails['mobile']; ?></h6>
                                </div>
                            </div>
                            <div class="align-items-center process-box h-100 mb-10">

                                <div class="ms-0 d-flex justify-content-between w-100">
                                    <small class="d-block s-12 text-white">Loan Amount :</small>
                                    <h6 class="text-white fw-bold"><?php echo formatePriceIndia($userdetails['loanamount']); ?></h6>
                                </div>
                            </div>
                            <div class="align-items-center process-box h-100 mb-10">

                                <div class="ms-0 d-flex justify-content-between w-100">
                                    <small class="d-block s-12 text-white">Email</small>
                                    <h6 class="text-white fw-bold"><?php echo $userdetails['email']; ?></h6>
                                </div>
                            </div>
                            <div class="align-items-center process-box h-100">

                                <div class="ms-0 d-flex justify-content-between w-100">
                                    <small class="d-block s-12 text-white">Loan Type</small>
                                    <h6 class="text-white fw-bold">Personal Loan</h6>
                                </div>
                            </div>

                        </div>
                        <div class="otp-velidation-text-wrap py-10 px-0 mt-10">

                            <div class="d-flex align-items-start">

                                <div>
                                    <i class="fa-solid fa-shield text-orange"></i>
                                </div>
                                <p class="mb-0 ms-10 mt-0 h6 fw-normal text-white text-start">256-bit encrypted. Your data is never shared without your consent.</p>

                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-8 mb-0 order-lg-2 order-1 p-0">
                

                    <div class="landind-card-wrapper p-0 m-0 h-100">
                        <div class="block-holder form-condidates rounded-1 bg-white h-100 border-top">
                            <div>
                                <div class="subhead text-start">
                                    <h5 class="mb-5 text-blue">Choose your EMI plan</h5>
                                    <!-- <p class="mb-0">Pre-Approved Offer : Congratulations! You're Eligible For <strong
                                    class="text-success">Rs. <?php echo $eligibilityamtindia; ?></strong> Pre-Approval
                                Offered By Our Partnered NBFCs.</p> -->
                                    <p class="mb-0">Pick the tenure that suits your monthly budget.</p>
                                </div>

                            </div>

                            <?php echo form_open('onlineprocess/getpreApproval', array('id' => 'submitForm2', 'class' => '', 'novalidate' => 'novalidate')); ?>


                            <div class="row gx-10">

                                <input type="hidden" name="applyid" value="<?php echo $userdetails['applyid']; ?>"
                                    class="form-control" required>
                                <input type="hidden" name="userid" value="<?php echo $userdetails['userid']; ?>"
                                    class="form-control" required>
                                <input type="hidden" name="mobile" value="<?php echo $userdetails['mobile']; ?>"
                                    class="form-control" required>
                                <input type="hidden" name="cardtype" value="<?php echo $userdetails['cardtype']; ?>"
                                    class="form-control" required>
                                <input type="hidden" name="tenure" id="tenure" value="36" class="form-control" required>
                                <input type="hidden" name="eligibilityamt" value="<?php echo $eligibilityamt; ?>"
                                    class="form-control" required>
                                <div class="col-6 col-md-6 col-lg-4 mb-15">
                                    <fieldset class="picker1">
                                        <label class="card shadow-sm" for="plan-1">
                                            <input type="radio" name="tenure" id="plan-1" value="12" class="radio"
                                                checked="">
                                            <span class="plan-details justify-content-center align-items-start">
                                                <span class="plan-type h6 text-uppercase text-dark">12 months</span>
                                                <h5 class="mb-0 fs-16 text-dark text-center">Rs.
                                                    <?php echo calPMT($userdetails['apr'], 1, $eligibilityamt); ?><br>

                                                </h5>
                                                <div class="d-flex justify-content-between mt-5">

                                                    <p class="mb-0">Per Month </p>

                                                </div>
                                            </span></label>
                                    </fieldset>
                                </div>
                                <div class="col-6 col-md-6 col-lg-4 mb-15">
                                    <fieldset class="picker1">
                                        <label class="card shadow-sm" for="plan-2">
                                            <input type="radio" name="tenure" id="plan-2" value="24" class="radio">
                                            <span class="plan-details justify-content-center align-items-start">
                                                <span class="plan-type h6 text-uppercase text-dark">24 months</span>
                                                <h5 class="mb-0 fs-16 text-dark">Rs.
                                                    <?php echo calPMT($userdetails['apr'], 2, $eligibilityamt); ?>
                                                </h5>
                                                <div class="d-flex justify-content-between mt-5">

                                                    <p class="mb-0">Per Month</p>

                                                </div>
                                            </span></label>
                                    </fieldset>
                                </div>
                                <div class="col-6 col-md-6 col-lg-4 mb-15">
                                    <fieldset class="picker1">
                                        <label class="card shadow-sm" for="plan-3">
                                            <input type="radio" name="tenure" id="plan-3" value="36" class="radio">
                                            <span class="plan-details justify-content-center align-items-start">
                                                <span class="plan-type h6 text-uppercase text-dark">36 months</span>
                                                <h5 class="mb-0 fs-16 text-dark">Rs.
                                                    <?php echo calPMT($userdetails['apr'], 3, $eligibilityamt); ?>
                                                </h5>
                                                <div class="d-flex justify-content-between mt-5">

                                                    <p class="mb-0">Per Month</p>

                                                </div>
                                            </span></label>
                                    </fieldset>
                                </div>
                                <div class="col-6 col-md-6 col-lg-4 mb-15">
                                    <fieldset class="picker1">
                                        <label class="card shadow-sm" for="plan-4">
                                            <input type="radio" name="tenure" id="plan-4" value="48" class="radio">
                                            <span class="plan-details justify-content-center align-items-start">
                                                <span class="plan-type h6 text-uppercase text-dark">48 months</span>
                                                <h5 class="mb-0 fs-16 text-dark">Rs.
                                                    <?php echo calPMT($userdetails['apr'], 4, $eligibilityamt); ?>
                                                </h5>
                                                <div class="d-flex justify-content-between mt-5">

                                                    <p class="mb-0">Per Month</p>

                                                </div>
                                            </span></label>
                                    </fieldset>
                                </div>
                                <div class="col-6 col-md-6 col-lg-4 mb-15">
                                    <fieldset class="picker1">
                                        <label class="card shadow-sm" for="plan-5">
                                            <input type="radio" name="tenure" id="plan-5" value="60" class="radio">
                                            <span class="plan-details justify-content-center align-items-start">
                                                <span class="plan-type h6 text-uppercase text-dark">60 months</span>
                                                <h5 class="mb-0 fs-16 text-dark">Rs.
                                                    <?php echo calPMT($userdetails['apr'], 5, $eligibilityamt); ?>
                                                </h5>
                                                <div class="d-flex justify-content-between mt-5">

                                                    <p class="mb-0">Per Month</p>

                                                </div>
                                            </span></label>
                                    </fieldset>
                                </div>
                                <div class="col-6 col-md-6 col-lg-4 mb-15">
                                    <fieldset class="picker1">
                                        <label class="card shadow-sm" for="plan-6">
                                            <input type="radio" name="tenure" id="plan-6" value="72" class="radio">
                                            <span class="plan-details justify-content-center align-items-center">
                                                <span class="plan-type h6 text-uppercase text-dark">72 months</span>
                                                <h5 class="mb-0 fs-16 text-dark">Rs.
                                                    <?php echo calPMT($userdetails['apr'], 6, $eligibilityamt); ?>
                                                </h5>
                                                <div class="d-flex justify-content-between">

                                                    <p class="mb-0">Per Month</p>

                                                </div>
                                            </span>
                                        </label>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 mb-15">
                                    <div class="otp-velidation-text border px-15 py-15 bg-light-sky">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="d-flex align-items-center mb-lg-0 mb-5">
                                                        <div>
                                                            <p class="mb-0 fw-light ms-10 h6">🎉 Congratulations! Your ₹5,00,000 pre-approved loan is ready. </p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-12">
                                    <button type="submit" class="btn btn-orange btn-sm js-confetti w-100"
                                        id="formsubmit2"><span class="btn-text">
                                            Choose offer <i class="fa-solid fa-arrow-right"></i></span></button>


                                </div>
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>


            </div>
    </section>
    <!-- 
    <section
        class="section section-theme-10 latest-candidates-block pt-30 pt-md-40 pt-lg-50 pt-xxl-50 pb-30 pb-md-50 pb-lg-60 pb-xxl-60">
        <div class="container">
            <div class="mb-30 mb-md-40">
                <div class="col-12">
                    <h4 class="text-center">Loan facility is provided by Our NBFC Partners.</h4>
                    <p class="text-center">Your Pre-Approved Loan Offers From</p>
                </div>
            </div>
            <div class="latest-candidates-holder">
                <?php
                $cnt = 1;
                foreach ($roipackages as $row) {
                ?>
                <div class="candidate-frame bg-white">
                    <div class="border-bottom text-center pb-20"><img
                            src="<?php echo base_url('assets/images/bank/' . $row->bank_image); ?>" alt="nbfcs offer">
                    </div>
                    <div>
                        <h6 class="mt-20"><?php echo $row->bank_name; ?></h6>
                        <hr>
                        <p class="" style="margin-bottom: 0.2rem;">Rs. <?php echo formatePriceIndia($eligibilityamt); ?>
                        </p>
                        <p class="" style="margin-bottom: 0.2rem;">EMI : Rs.
                            <?php echo calPMT($row->roi, $row->termsyears, $eligibilityamt); ?></p>
                        <p class="" style="margin-bottom: 0.2rem;">ROI : <?php echo $row->roi . '%'; ?></p>
                        <p class="" style="margin-bottom: 0.2rem;">Terms : <?php echo $row->termsmonths . ' months'; ?>
                        </p>
                    </div>
                </div>
                <?php
                    $cnt++;
                }
                ?>
            </div>
            <div class="text-left mt-5">
                <p class="pt-5"><small>Disclaimer - The above data is tentative and purely on the information provided
                        by
                        you. Final EMI, loan sanction, loan approval, and loan amount depend on customer profile and
                        NBFCs
                        criteria and rules & regulations.</small></p>
            </div>
        </div>

    </section> -->
    <div class="modal fade auto-off" id="modal" role="modal" aria-labelledby="modal-label" aria-hidden="true"
        style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-label">How is pre-approved loan offer calculated?</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 text-justify p-4">
                            <p>The Pre-Approved Loan Offer and the amount mentioned in it are solely shown based on the
                                software calculation done on Monthly Income and Current Monthly EMI entered by you. This
                                'Pre-Approved Loan Offer' is tentative and not the final loan approval – as the final
                                loan
                                approval is given by the bank only, based on the bank's rules and regulations and the
                                customer profile.</p>

                            <p><strong>Reference Calculation:</strong>
                                <br />Consider a person who has entered the following details –
                                <br />Monthly Income: Rs.1,00,000
                                <br />Current Monthly EMI: Rs.30,000
                            </p>

                            <p>Based on these details, the person is left with Rs.70,000 in hand (deducting current EMI)
                                every month. So, according to the general rules of the banks, the EMI of 50% of the
                                in-hand
                                amount can be approved - in this example, it's 35,000. And based on the EMI and rate of
                                interest (12.5% tentatively), the eligible amount is shown in the Pre-Approved Loan
                                Offer -
                                considering the mentioned calculation.</p>

                            <p>Note: Pre-approved loan offer is tentative. It should not be considered as the final loan
                                approval. The final loan approval is given by the bank only, according to their rules
                                and
                                criteria and the customer profile.</p>

                            <p class="m-b-0">Note: As per the details/information entered by the user, even if the
                                actual
                                pre-approved amount is lesser than 2 Lakhs, the pre-approved amount shown on the website
                                will be Rs.2 Lakhs (minimum). And, even if the actual pre-approved amount is more than
                                8.5
                                Lakhs, the pre-approved amount shown on the website will be Rs.8.5 Lakhs (maximum). The
                                pre-approved amount/pre-approved loan offers are tentative – the final loan approval,
                                loan
                                sanction, and disbursement depend on the customer profile and the NBFCs’ rules and
                                regulations.</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-green btn-sm mt-10" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</main>

<script type="text/javascript">
    $(document).ready(function() {
        var windowWidth = $(window).width();
        if (windowWidth <= 1024) { //for iPad & smaller devices
            $('#userCollapse').removeClass('show');
        }
    });

    $(function() {
        $('#submitForm2').on('submit', function(e) {
            $('#formsubmit2').attr('disabled', true);
            $('#formsubmit2').html(
                'Processing... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>'
            );
        });
    });
</script>
<script src="<?php echo base_url('assets/celebration/confetti-script.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/celebration/confetti.browser.min.js'); ?>" type="text/javascript"></script>
<?php
$this->load->view('includes/footer-apply');
?>