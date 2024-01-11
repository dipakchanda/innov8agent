<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>innov8agent</title>
    <link rel="icon" type="https://innov8agent.com/front-panel/image/png" href="https://innov8agent.com/front-panel/images/favicon.png">
    <link rel="stylesheet" href="<?php echo base_url(); ?>front-panel/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>front-panel/css/custom.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>front-panel/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>front-panel/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>front-panel/assets/css/responsive.css">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BWRBK46TXJ"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    
    gtag('config', 'G-BWRBK46TXJ');
    </script>
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
        <div class="modal-header text-center">
          <h5 class="modal-title" id="staticBackdropLabel">SECURE YOU PLACE NOW <span>100% FREE!</span> </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        
        <div class="modal-header" id="staticBackdropLabelOpen" style="display:none">
          <h2 class="modal-title" style="font-size:30px; text-transform:uppercase; padding-left:240px">Thank You!</h2>
        </div>
        
        <div class="modal-body">
            <form method="post" name="emailFrm" id="emailFrm" action="" >
            <div class="mt-2 text-center" role="alert" id="cat-add" style="display:none; font-size:22px">Thank you! You have been added to the Beta 2 community. You will receive an email with sign in instructions when we launch. Get ready to kick your real estate business into overdrive!</div>
            
            <div class="row" id="div-id-1">
                                   
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
            
            <div class="form-group" id="div-id-2">
            <label for="">Email Address <em class="icon-info"></em></label>
            <div class="inputBox leftIcon">
            <em class="icon-email emLeft"></em>
            <input type="email" class="form-control" name="member_email" id="member_email" required="required" value="" placeholder="Enter your Email Address">
            </div>
            <div id="email-error" class="error-msg"></div>
            </div>
            
            <div class="form-group" id="div-id-3">
            <label for="">Phone Number <em class="icon-info"></em></label>
            <div class="inputBox leftIcon">
                <em class="icon-call emLeft"></em>
                <input type="tel" class="form-control" name="member_contact" id="member_contact" required="required" value="" placeholder="Enter your mobile no.">
            </div>
            <div id="contact-error" class="error-msg"></div>
            </div>
            
            <div class="d-flex align-items-center justify-content-between flex-wrap-reverse" id="div-id-4">
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
    
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#emailFrm').submit(function(event) {
            event.preventDefault(); // Prevent the default form submission

            // Validation logic goes here
            // Example: Validate the email field
            var email = $('#member_email').val().trim();
            if (email === '') {
                $('#email-error').text('Please enter your email address');
                return;
            } else {
                $('#email-error').text('');
            }
 			
			$('#SignBtn').html('Please wait <em class="icon-arrowRight"></em>');
			
            // If all validations pass, proceed with AJAX
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('IAlanding/sendEmail'); ?>',
                data: $(this).serialize(),
                success: function(response) {
                    // Handle success response here
					//alert(response);
					if(response=='success')
					{
						$('#cat-add').show();
						$('#div-id-1').hide();
						$('#div-id-2').hide();
						$('#div-id-3').hide();
						//$('#div-id-4').hide();
						$('#staticBackdropLabel').css('display', 'none');
						$('#staticBackdropLabelOpen').css('display', 'block');
						$('#div-id-4').css('visibility', 'hidden');
						
						$('#member_email').val('');
						$('#member_first').val('');
						$('#member_last').val('');
						$('#member_contact').val('');
						
					}
                    console.log(response); 
                    // You can show a success message or redirect the user
                },
                error: function(xhr, status, error) {
                    // Handle errors here
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>




</body>
</html>