<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>innov8agent</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>front-panel/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>front-panel/css/custom.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>front-panel/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>front-panel/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>front-panel/assets/css/responsive.css">

</head>
<body>
    <section class="splash-section">
        <div class="container">
            <div class="row" style="flex-direction: column;">
                <div class="navbar-brand-logol">
                    <img src="<?php echo base_url(); ?>front-panel/assets/images/logo.png" class="img-fluid" alt="">
                    <h3>CREATING LEGENDS IN REAL ESTATE</h3>
                </div>
                    <div class="box-sms">
                        <p>
                            “The platform was so easy to use! I just set it up and it started writing my social media posts! Now I can focus on my clients!”
                        </p>
                        <p>- David Z. <br>
                        Professional Real Estate Agent</p>
                    </div>
                    <h2>Beta 2 Release Coming in January 2024</h2>
                
            </div>
        </div>
    </section>

  
  <!-- Modal -->
  <div class="modal-splas modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xxl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">SECURE YOU PLACE NOW <span>100% FREE!</span> </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="post" name="emailFrm" id="emailFrm" action="<?php echo base_url(); ?>" >
                <div class="row">
                                           
                <div class="form-group col-lg-6">
                    <label for="">First Name <em class="icon-info"></em></label>
                    <div class="inputBox leftIcon">    
                        <em class="icon-user emLeft"></em>                   
                        <input type="text" class="form-control" name="member_first" id="member_first" required="required" value="" placeholder="Enter your First Name">
                    </div>
                    <div id="fname-error" class="error-msg"></div>
                </div>
             
                <div class="form-group col-lg-6">
                    <label for="">Last Name <em class="icon-info"></em></label>
                    <div class="inputBox leftIcon">
                        <em class="icon-user emLeft"></em>
                        <input type="text" class="form-control" name="member_last" id="member_last" required="required" value="" placeholder="Enter your Last Name">
                    </div>
                    <div id="lname-error" class="error-msg"></div>
                </div>
            
            </div> 
              
            <div class="form-group">
                <label for="">Email Address <em class="icon-info"></em></label>
                <div class="inputBox leftIcon">
                    <em class="icon-email emLeft"></em>
                    <input type="email" class="form-control" name="member_email" id="member_email" required="required" value="" placeholder="Enter your Email Address">
                </div>
                <div id="email-error" class="error-msg"></div>
            </div>
            
                <div class="form-group">
                    <label for="">Phone Number <em class="icon-info"></em></label>
                    <div class="inputBox leftIcon">
                        <em class="icon-call emLeft"></em>
                        <input type="tel" class="form-control" name="member_contact" id="member_contact" required="required" value="" placeholder="Enter your mobile no.">
                    </div>
                    <div id="contact-error" class="error-msg"></div>
                </div>
                
                
                
                <div class="d-flex align-items-center justify-content-between flex-wrap-reverse">
                    <button type="submit" class="btn btnPrimary" id="SignBtn" name="SignBtn">Secure You Place in Beta 2 Now <em class="icon-arrowRight"></em></button>
                    
                    <img src="<?php echo base_url(); ?>front-panel/assets/images/short-logo.png" class="img-fluid" style="max-width: 100px;" alt="">
                </div>
            </form>
        </div>
       
      </div>
    </div>
  </div>
    <script src="<?php echo base_url(); ?>front-panel/assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>front-panel/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>front-panel/assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>front-panel/assets/js/script.js"></script>
	<script>
    $(window).on('load', function() {
    $('#staticBackdrop').modal('show');
    });
    </script>
    
    <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- jQuery Validation Plugin -->
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

    
    <script>
  $(document).ready(function() {
    $("#emailFrm").validate({
      rules: {
        member_first: {
          required: true,
          minlength: 2 // Minimum length of 2 characters for the first name
        },
        member_last: {
          required: true,
          minlength: 2 // Minimum length of 2 characters for the last name
        },
        member_email: {
          required: true,
          email: true // Validates email format
        },
        member_contact: {
          required: true,
          number: true // Validates that the phone number contains only numbers
        }
      },
      messages: {
        member_first: {
          required: "Please enter your First Name",
          minlength: "First Name should be at least 2 characters long"
        },
        member_last: {
          required: "Please enter your Last Name",
          minlength: "Last Name should be at least 2 characters long"
        },
        member_email: {
          required: "Please enter your Email Address",
          email: "Please enter a valid Email Address"
        },
        member_contact: {
          required: "Please enter your phone number",
          number: "Please enter a valid phone number"
        }
      },
      errorElement: 'div',
      errorPlacement: function(error, element) {
        var placement = $(element).closest('.form-group');
        if (placement.length) {
          $(placement).append(error);
        } else {
          error.insertAfter(element);
        }
      }
    });
  });
</script>



</body>
</html>