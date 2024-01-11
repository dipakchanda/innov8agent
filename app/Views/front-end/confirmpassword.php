<?php $pagename = 'confirm' ; include 'include/header.php'; $request = \Config\Services::request(); ?>

<!-- Login -->
<section class="loginPg bgImg py-60" style="background-image:url(<?php echo base_url(); ?>front-panel/images/login/bg1.jpg);">
    <div class="container">
        <div class="row gap-y2">
            <div class="col-12">
                <div class="logoSec">
                    <a href="<?php echo base_url(); ?>home">
                        <img src="<?php echo base_url(); ?>front-panel/images/logo/logoColor.svg" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-8 offset-lg-6 offset-md-2">
                <div class="loginBox">
                    <div class="logoIcon">
                        <img src="<?php echo base_url(); ?>front-panel/images/logo/iconColor.svg" alt="">
                    </div>
                    <div class="titleSec">
                        <div class="slogan">
                            <h6>Welcome to <span>Innov8Agent</span></h6>
                            <span>
                                No Account ?
                                <a href="<?php echo base_url(); ?>register">Sign in</a>
                            </span>
                        </div>
                        
                        <h1>Confirm Password?</h1>
                        
                        <div class="btnList pt-2">
                            <?php include('include/social-login.php'); ?>
                        </div>
                    </div>
                    <form method="post" name="registrationFrm" id="registrationFrm" action="<?php echo base_url(); ?>confirmpassword/<?php echo $request->uri->getSegment(2); ?>">
                    <input type="hidden" name="reset_code" id="reset_code" value="<?php echo $request->uri->getSegment(2); ?>" />
                    	<?php if(session()->get('fail')) { ?>
                        <div class="alert alert-danger mt-2" role="alert" id="cat-add" style="display:block">Your reset password link is invalid.</div>
                        <?php } ?>
                        
                        <?php if(session()->get('addedd')) { ?>
                        <div class="alert alert-success mt-2" role="alert" id="cat-add" style="display:block">Your password has been successfully reset.</div>
                        <?php } ?>
                        
                        <div class="form-group">
                            <label for="">New Password <em class="icon-info"></em></label>
                            <div class="inputBox leftIcon">
                                <em class="icon-key emLeft"></em>
                                <input type="password" class="form-control" name="member_password" id="member_password" placeholder="Enter your new Password">
                            </div>
                            <div id="pass-error" class="error-msg"></div>
                        </div>
                        
                        <div class="form-group">
                            <label for="">Confirm New Password <em class="icon-info"></em></label>
                            <div class="inputBox leftIcon">
                                <em class="icon-key emLeft"></em>
                                <input type="password" class="form-control" name="member_con_password" id="member_con_password" placeholder="Re-enter your new password">
                            </div>
                            <div id="conpass-error" class="error-msg"></div>
                        </div>
                        
                        <div class="form-group text-end"></div>
                        <div class="text-end">
                            <button type="submit" class="btn btnPrimary" id="SignresetBtn" name="SignresetBtn">Confirm Password! <em class="icon-arrowRight"></em></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'include/footer.php'; ?>

<script>
    $(document).ready(function() {
        $('#registrationFrm').validate({
            rules: {
                member_password: {
                    required: true,
                    minlength: 6
                },
				member_con_password: {
                    required: true,
                    equalTo: "#member_password"
                }
            },
            messages: {
                member_password: {
                    required: "Please enter a new password",
                    minlength: "Your password must be at least 6 characters long"
                },
                member_con_password: {
                    required: "Please re-enter your new password",
                    equalTo: "Passwords do not match"
                }
            },
            errorPlacement: function(error, element) {
                // Customizing error message placement and styling
                error.appendTo(element.closest('.form-group').find('.error-msg'));
                // Adding class to input parent div for highlighting
                element.closest('.form-group').addClass('has-error');
            },
            success: function(label, element) {
                // Removing error message and highlighting on success
                label.closest('.form-group').removeClass('has-error');
                label.remove();
            },
            invalidHandler: function(form, validator) {
                // Adding class to input parent div for highlighting
                $(validator.currentElements).closest('.form-group').addClass('has-error');
            },
            submitHandler: function(form) {
                // Your form submission logic goes here
                form.submit();
            }
        });
		
		// Optional: Toggle password visibility
		/*$('.icon-eye-pas').click(function() {
			var passwordField = $('#member_password');
			var fieldType = passwordField.attr('type');
	
			if (fieldType === 'password') {
				passwordField.attr('type', 'text');
			} else {
				passwordField.attr('type', 'password');
			}
		});
		
		
		$('.icon-eye-con').click(function() {
			var passwordField = $('#member_con_password');
			var fieldType = passwordField.attr('type');
	
			if (fieldType === 'password') {
				passwordField.attr('type', 'text');
			} else {
				passwordField.attr('type', 'password');
			}
		});*/
    });
</script>

</body>
</html>