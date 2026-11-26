<?php
$this->load->view('includes/header-apply');
?>

<div class="subvisual-block subvisual-theme-1 bg-light-sky d-flex pt-60 pt-md-90 pt-lg-150 pb-30 text-white">
  <div class="container position-relative text-center">
    <div class="row">
      <div class="col-12">
        <div class="subvisual-textbox">
          <h4 class="text-blue">Cancellation &amp; Refund Policy</h4>
        </div>
      </div>
    </div>
  </div>
</div>
 
 

<main class="main">
  <section
    class="section section-job-details add-styles section-theme-1 pt-60 pt-md-60 py-xl-80">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="text-holder">
            <?php echo $contentdetails->option_value; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php
$this->load->view('includes/footer');
?>