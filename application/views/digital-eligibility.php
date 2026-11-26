<?php
$this->load->view('includes/header-offer.php');
?>

<main class="main">
    <section class="section section-theme-1 packages-block pt-40 pb-40 bg-light-sky">
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
                    <div class="block-holder form-condidates form-right-wrap bg-white rounded-1 h-100 border-top">
                        <div class="text-start">
                            <h5 class="mb-10 text-start fw-bold text-blue">Financial details</h5>
                            <p>A few numbers to find offers that fit you.</p>
                        </div>
                        <?php echo form_open('onlineprocess/userApply', array('id' => 'submitForm1', 'class' => '', 'novalidate' => 'novalidate')); ?>
                        <div class="row">
                            <input type="hidden" name="applyid" value="<?php echo $userdetails['applyid']; ?>"
                                class="form-control" required>
                            <input type="hidden" name="userid" value="<?php echo $userdetails['userid']; ?>"
                                class="form-control" required>
                            <input type="hidden" name="cardtype" value="<?php echo $userdetails['cardtype']; ?>"
                                class="form-control" required>

                            <div class="form-group col-12 col-lg-4 mb-15">
                                <label class="h6 mb-10 text-blue">CIBIL Score</label>
                                <select class="form-select bg-light-sky" id="cibilscore" name="cibilscore" required>
                                    <option value="">CIBIL Score *</option>
                                    <option value="Below 650">Below 650</option>
                                    <option value="650 - 700">650 - 700</option>
                                    <option value="700 - 750">700 - 750</option>
                                    <option value="750 - 800">750 - 800</option>
                                    <option value="800 - 850">800 - 850</option>
                                    <option value="850 - 900">850 - 900</option>
                                </select>
                                <div class="help-block font-small-3"></div>
                            </div>

                            <div class="form-group col-12 col-lg-4 mb-15">
                                <label class="h6 mb-10 text-blue">Monthly Income (₹)</label>
                                <input class="form-control bg-light-sky" type="text" id="monincome" name="monincome"
                                    placeholder="Monthly Income *" required inputmode="numeric">
                                <div class="help-block font-small-3"></div>
                            </div>

                            <div class="form-group col-12 col-lg-4 mb-15">
                                <label class="h6 mb-10 text-blue">Current Monthly EMI (₹)</label>
                                <input class="form-control bg-light-sky" type="text" id="monemi" name="monemi"
                                    placeholder="Current Monthly EMI *" required inputmode="numeric">
                                <div class="help-block font-small-3"></div>
                            </div>

                            <div class="form-group col-12 col-lg-4 mb-15">
                                <label class="h6 mb-10 text-blue">Loan Purpose</label>
                                <select class="form-select bg-light-sky" id="loanpurpose" name="loanpurpose" required>
                                    <option value="">Select Loan Purpose *</option>
                                    <?php if ($userdetails['loantype'] == 12) { ?>
                                        <option value="Business Expansion">Business Expansion</option>
                                        <option value="Maintain Cash Flow">Maintain Cash Flow</option>
                                        <option value="Supplier Payments">Supplier Payments</option>
                                        <option value="Setup Manufacturing Unit">Setup Manufacturing Unit</option>
                                        <option value="Hiring Budget">Hiring Budget</option>
                                        <option value="Other">Other</option>
                                    <?php } else { ?>
                                        <option value="Personal Use">Personal Use</option>
                                        <option value="Property Renovation">Property Renovation</option>
                                        <option value="Marriage Purpose">Marriage Purpose</option>
                                        <option value="Education Purpose">Education Purpose</option>
                                        <option value="Medical Emergency">Medical Emergency</option>
                                        <option value="Other">Other</option>
                                    <?php } ?>
                                </select>
                                <div class="help-block font-small-3"></div>
                            </div>

                            <div class="form-group col-12 col-lg-4 mb-15">
                                <label class="h6 mb-10 text-blue">Pincode</label>
                                <input type="text" name="pincode" id="pincode" maxlength="6" minlength="6"
                                    inputmode="numeric" class="form-control mb-2 bg-light-sky" placeholder="Pincode*" required>
                                <div class="help-block font-small-3"></div>
                                <span class="pincode error text-danger text-start"></span>
                            </div>

                            <div class="form-group col-12 col-lg-4 mb-15">
                                <label class="h6 mb-10 text-blue">City</label>
                                <input type="text" name="city" id="city" class="form-control mb-2 bg-light-sky" placeholder="City*"
                                    required>
                                <div class="help-block font-small-3"></div>
                            </div>

                            <div class="form-group col-12 col-lg-12 mb-15">
                                <label class="h6 mb-10 text-blue">State</label>
                                <input type="text" name="state" id="state" class="form-control mb-2 bg-light-sky"
                                    placeholder="State*" required>
                                <div class="help-block font-small-3"></div>
                            </div>
                            <div class="col-lg-12 mb-15">
                                <div class="otp-velidation-text border px-25 py-15 bg-light-sky">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="d-flex align-items-center mb-lg-0 mb-5">
                                                    <i class="fa-solid fa-shield text-orange"></i>
                                                    <div>
                                                        <p class="mb-0 fw-light ms-10 h6">Soft check only – won't impact your credit score. </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-orange btn-sm w-100"
                                    id="formsubmit1"><span class="btn-text">Check Your Eligibility <i
                                            class="fa-solid fa-arrow-right"></i></span></button>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</main>

<script type="text/javascript">
    $(document).ready(function() {
        var windowWidth = $(window).width();
        if (windowWidth <= 1024) { //for iPad & smaller devices
            $('#userCollapse').removeClass('show');
        }
    });

    $(function() {
        $('#submitForm1').on('submit', function(e) {
            $('#formsubmit1').attr('disabled', true);
            $('#formsubmit1').html(
                'Processing... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>'
            );
        });
    });
</script>

<script>
    /*$('#pincode').on('input', function() {

        var pincode = $(this).val();

        if (pincode.length === 6) {

            $.ajax({
                url: "<?= base_url('onlineprocess/geoLocation') ?>",
                type: "POST",
                data: {
                    pincode: pincode
                },
                dataType: "json",

                success: function(response) {

                    if (response.status === 'success') {
                        $('#city').val(response.city);
                        $('#state').val(response.state);
                        $('.pincode').text('');
                    } else {
                        $('#city').val('');
                        $('#state').val('');
                        $('.pincode').text('Enter valid pincode.');
                    }
                },

                error: function() {
                    $('.pincode').text('Enter valid pincode.');
                }
            });

        } else {
            $('#city').val('');
            $('#state').val('');
        }
    });*/
</script>

<?php
$this->load->view('includes/footer-apply');
?>