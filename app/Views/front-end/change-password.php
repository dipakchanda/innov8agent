<?php $pagename = 'changepassword' ; include 'include/header.php'; ?>

<?php include 'include/main-header.php'; ?>

<!-- Page Title -->
<section class="pageTitle">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4 class="m-0">Account Settings</h4>
            </div>
        </div>
    </div>
</section>

<!-- Account One -->
<section class="accountOne py-60 pt-0">
    <div class="container">
        <div class="row gap-y2">
            <div class="col-lg-3 col-md-4">
                <!-- Sidebar -->
                <?php include 'include/profileSidebar.php'; ?>
            </div>
            <div class="col-lg-9 col-md-8">
                <div class="contentSec">
                    <form name="registrationFrm" id="registrationFrm" method="post" action="<?php echo base_url(); ?>changepassword">
                    <?php if(session()->get('addedd')) { ?>
                    <div class="alert alert-primary mt-2" role="alert" id="cat-add" style="display:block">Password updated successfully.</div>
                    <?php } ?>
                    
                    <?php if(session()->get('not')) { ?>
                    <div class="alert alert-danger mt-2" role="alert" id="cat-add" style="display:block">New Password and Confirm new password does not match.</div>
                    <?php } ?>
                    
                    <?php if(session()->get('nomatch')) { ?>
                    <div class="alert alert-danger mt-2" role="alert" id="cat-add" style="display:block">Old password does not match.</div>
                    <?php } ?>
                    
                    <?php if(session()->get('valider')) { ?>
                    <div class="alert alert-danger mt-2" role="alert" id="cat-add" style="display:block">Please enter the information properly.</div>
                    <?php } ?>
                        
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">
                                    Old Password <em class="icon-info"></em>
                                </label>
                                <div class="inputBox leftIcon">
                                    <em class="icon-key emLeft"></em>
                                    <input type="password" class="form-control" name="member_password" id="member_password" value="" placeholder="Old Password">
                                </div>
                                 <div id="old-error" class="error-msg"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">
                                    New Password <em class="icon-info"></em>
                                </label>
                                <div class="inputBox leftIcon">
                                    <em class="icon-key emLeft"></em>
                                    <input type="password" class="form-control" name="new_member_password" id="new_member_password" value="" placeholder="New Password">
                                </div>
                                 <div id="new-error" class="error-msg"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">
                                    Confirm New Password <em class="icon-info"></em>
                                </label>
                                <div class="inputBox leftIcon">
                                    <em class="icon-key emLeft"></em>
                                    <input type="password" class="form-control" name="con_member_password" id="con_member_password" value="" placeholder="Confirm New Password">
                                </div>
                                 <div id="con-error" class="error-msg"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row gap-y1">
                        <div class="col-md-8">
                            <button type="submit" name="changeSubmit" id="changeSubmit" class="btn btnPrimary">Save changes <em class="icon-arrowRight"></em></button>
                        </div>
                        <div class="col-md-4 text-md-end">
                            
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'include/main-footer.php'; ?>

<?php include 'include/footer.php'; ?>

<script>
    $(document).ready(function() {
        $('#registrationFrm').validate({
            rules: {
                member_password: {
                    required: true,
                    minlength: 6
                },
				
                new_member_password: {
                    required: true,
                    minlength: 6
                },
                con_member_password: {
                    required: true,
                    equalTo: "#new_member_password"
                }
            },
            messages: {
                member_password: {
                    required: "Please enter old password",
                    minlength: "Your password must be at least 6 characters long"
                },
                new_member_password: {
                    required: "Please enter a password",
                    minlength: "Your password must be at least 6 characters long"
                },
                con_member_password: {
                    required: "Please re-enter your password",
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
    });
</script>





</body>
</html>