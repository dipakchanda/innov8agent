<?php $pagename = 'forgotpassword' ; include 'include/header.php'; ?>

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
                                <a href="<?php echo base_url(); ?>register">Sign up</a>
                            </span>
                        </div>
                        
                        <h1>Forgot Password?</h1>
                        
                        <div class="btnList pt-2">
                            <?php include('include/social-login.php'); ?>
                        </div>
                    </div>
                    <form method="post" name="registrationFrm" id="registrationFrm" action="<?php echo base_url(); ?>forgotpassword">
                    	<?php if(session()->get('fail')) { ?>
                        <div class="alert alert-danger mt-2" role="alert" id="cat-add" style="display:block">Your email address or username is invalid.</div>
                        <?php } ?>
                        
                        <?php if(session()->get('addedd')) { ?>
                        <div class="alert alert-success mt-2" role="alert" id="cat-add" style="display:block">Reset password sent to your registered email address. Please check your email.</div>
                        <?php } ?>
                        
                        <div class="form-group">
                            <label for="">Username or email address <em class="icon-info"></em></label>
                            <div class="inputBox leftIcon">
                                <em class="icon-user emLeft"></em>
                                <input type="text" name="username" id="username" value="" class="form-control" placeholder="Enter your username or email address">
                            </div>
                            <div id="user-error" class="error-msg"></div>
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
                }
            },
            messages: {
               
                username: {
                    required: "Please enter your username or email address",
                    minlength: "Your username must be at least 5 characters long"
                },
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
    });
</script>
</body>
</html>