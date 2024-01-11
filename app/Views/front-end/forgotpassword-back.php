<?php include 'include/header.php'; ?>

<!-- Login -->
<section class="loginPg bgImg py-60" style="background-image:url(<?php echo base_url(); ?>front-panel/images/login/bg1.jpg);">
    <div class="container">
        <div class="row gap-y2">
            <div class="col-12">
                <div class="logoSec">
                    <a href="index.php">
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
                                <a href="<?php echo base_url(); ?>register">Sign up</a>
                            </span>
                        </div>
                        
                        <h1>Forgot Password?</h1>
                        
                        
                        <div class="btnList pt-2">
                            <a href="#" class="socialBtn">
                                <img src="<?php echo base_url(); ?>front-panel/images/icons/google.svg" alt="">
                                <span><span>Sign in with </span>Google</span>
                            </a>
                            <a href="#" class="socialBtn">
                                <img src="<?php echo base_url(); ?>front-panel/images/icons/facebook.svg" alt="">
                            </a>
                            <a href="#" class="socialBtn">
                                <img src="<?php echo base_url(); ?>front-panel/images/icons/apple.svg" alt="">
                            </a>
                        </div>
                    </div>
                    <form method="post" name="registrationFrm" id="registrationFrm" action="<?php echo base_url(); ?>forgotpassword">
                    	<?php if(session()->get('fail')) { ?>
                        <div class="alert alert-danger mt-2" role="alert" id="cat-add" style="display:block">Your email address or username is invalid.</div>
                        <?php } ?>
                        
                        <?php if(session()->get('addedd')) { ?>
                        <div class="alert alert-success mt-2" role="alert" id="cat-add" style="display:block">Your password has been successfully reset.</div>
                        <?php } ?>
                        
                        <div class="form-group">
                            <label for="">Username or email address <em class="icon-info"></em></label>
                            <div class="inputBox">
                                <div class="placeholderText">
                                    <em class="icon-user"></em>
                                    <input type="text" name="username" id="username" value="" class="form-control" placeholder="Enter your username or email address">
                                </div>
                            </div>
                            <div id="user-error" class="error-msg"></div>
                        </div>
                        
                        <div class="form-group">
                            <label for="">New Password <em class="icon-info"></em></label>
                            <div class="inputBox">
                                <div class="placeholderText">
                                    <em class="icon-key"></em>
                                    <input type="password" class="form-control" name="member_password" id="member_password" placeholder="Enter your new Password">
                                </div>
                                <em class="icon-eye icon-eye-pas"></em>
                            </div>
                            <div id="pass-error" class="error-msg"></div>
                        </div>
                        
                        <div class="form-group">
                            <label for="">Confirm New Password <em class="icon-info"></em></label>
                            <div class="inputBox">
                                <div class="placeholderText">
                                    <em class="icon-key"></em>
                                    <input type="password" class="form-control" name="member_con_password" id="member_con_password" placeholder="Re-enter your new password">
                                </div>
                                <em class="icon-eye icon-eye-con"></em>
                            </div>
                            <div id="conpass-error" class="error-msg"></div>
                        </div>
                        
                        <div class="form-group text-end"></div>
                        <div class="text-end">
                            <button type="submit" class="btn btnPrimary" id="SignresetBtn" name="SignresetBtn">Reset Password! <em class="icon-arrowRight"></em></button>
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
                username: {
                    required: true,
                    minlength: 5
                },
                member_password: {
                    required: true,
                    minlength: 6
                },
				member_con_password: {
                    required: true,
                    equalTo: "#member_password"
                },
            },
            messages: {
               
                username: {
                    required: "Please enter your username or email address",
                    minlength: "Your username must be at least 5 characters long"
                },
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
		$('.icon-eye-pas').click(function() {
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
		});
    });
</script>