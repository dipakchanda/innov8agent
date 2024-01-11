<?php $pagename = 'register' ; include 'include/header.php'; ?>

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
                            <span>No Account ? <a href="<?php echo base_url(); ?>login">Sign in</a></span>
                        </div>
                        
                        <h1>Sign up</h1>
                        <div class="btnList">
                            <?php include('include/social-login.php'); ?>
                        </div>
                    </div>
                    <form method="post" name="registrationFrm" id="registrationFrm" action="<?php echo base_url(); ?>register">
                        <?php if(session()->get('fail')) { ?>
                        <div class="alert alert-danger mt-2" role="alert" id="cat-add" style="display:block">Email address or username already exists.</div>
                        <?php } ?>
                        
                        <div class="form-group">
                            <label for="">Email address <em class="icon-info"></em></label>
                            <div class="inputBox leftIcon">
                                <em class="icon-email emLeft"></em>
                                <input type="text" class="form-control" name="member_email" id="member_email" value="" placeholder="Enter your email address">
                            </div>
                            <div id="email-error" class="error-msg"></div>
                        </div>
                        
                        <div class="form-group">
                            <label for="">Username <em class="icon-info"></em></label>
                            <div class="inputBox leftIcon">
                                <em class="icon-user emLeft"></em>
                                <input type="text" class="form-control" name="member_username" id="member_username" value="" placeholder="Enter your username">
                            </div>
                            <div id="username-error" class="error-msg"></div>
                        </div>
                        
                        <div class="form-group">
                            <label for="">Contact no. <em class="icon-info"></em></label>
                            <div class="inputBox leftIcon">
                                <em class="icon-call emLeft"></em>
                                <input type="text" class="form-control" name="member_contact" id="member_contact" value="" placeholder="Enter your mobile no.">
                            </div>
                            <div id="contact-error" class="error-msg"></div>
                        </div>
                        
                        <div class="form-group">
                            <label for="">Password <em class="icon-info"></em></label>
                            <div class="inputBox leftIcon">
                                <em class="icon-key emLeft"></em>
                                <input type="password" class="form-control" name="member_password" id="member_password" placeholder="Enter your Password">
                            </div>
                            <div id="pass-error" class="error-msg"></div>
                        </div>
                        
                        <div class="form-group">
                            <label for="">Confirm Password <em class="icon-info"></em></label>
                            <div class="inputBox leftIcon">
                                <em class="icon-key emLeft"></em>
                                <input type="password" class="form-control" name="member_con_password" id="member_con_password" placeholder="Re-enter your password">
                            </div>
                            <div id="conpass-error" class="error-msg"></div>
                        </div>
                        
                        <div class="mb-3">
                            <label class="customCheckbox">
                                <input type="checkbox" checked="checked" name="termschk" id="termschk" value="Y">
                                <span class="checkmark"></span>
                                I Agree with all of your <a href="#">Terms & Conditions</a>
                            </label>
                        </div>
                        
                        <div class="text-end">
                            <button type="submit" class="btn btnPrimary" id="SignBtn" name="SignBtn">Sign Up! <em class="icon-arrowRight"></em></button>
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
                member_email: {
                    required: true,
                    email: true
                },
                member_username: {
                    required: true,
                    minlength: 5
                },
                member_contact: {
                    required: true,
                    number: true
                },
                member_password: {
                    required: true,
                    minlength: 6
                },
                member_con_password: {
                    required: true,
                    equalTo: "#member_password"
                },
                termschk: {
                    required: true
                }
            },
            messages: {
                member_email: {
                    required: "Please enter your email address",
                    email: "Please enter a valid email address"
                },
                member_username: {
                    required: "Please enter your username",
                    minlength: "Your username must be at least 5 characters long"
                },
                member_contact: {
                    required: "Please enter your contact number",
                    number: "Please enter a valid contact number"
                },
                member_password: {
                    required: "Please enter a password",
                    minlength: "Your password must be at least 6 characters long"
                },
                member_con_password: {
                    required: "Please re-enter your password",
                    equalTo: "Passwords do not match"
                },
                termschk: {
                    required: "Please agree to the Terms & Conditions"
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
    });
</script>

</body>
</html>