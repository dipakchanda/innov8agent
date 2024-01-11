<?php $pagename = 'phone' ; include 'include/header.php'; ?>

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
                    <form name="phoneFrm" id="phoneFrm" method="post" action="<?php echo base_url(); ?>phone">
                    <?php if(session()->get('addedd')) { ?>
                    <div class="alert alert-primary mt-2" role="alert" id="cat-add" style="display:block">Phone number updated successfully completed.</div>
                    <?php } ?>
                        
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">
                                    Contact no. <em class="icon-info"></em>
                                </label>
                                <div class="inputBox leftIcon">
                                    <em class="icon-call emLeft"></em>
                                    <input type="text" class="form-control" name="member_contact" id="member_contact" value="<?php echo $userinfo[0]->member_contact;?>" placeholder="Contact Number">
                                </div>
                                 <div id="phone-error" class="error-msg"></div>
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
    $(document).ready(function () {
        $('#phoneFrm').validate({
            rules: {
                member_contact: {
                    required: true,
                    number: true,
                    minlength: 10,
                    maxlength: 15
                    // Add other rules as needed
                }
            },
            messages: {
                member_contact: {
                    required: "Please enter a contact number",
                    number: "Please enter a valid number",
                    minlength: "Contact number should be at least 10 digits",
                    maxlength: "Contact number should not exceed 15 digits"
                    // Add custom messages for other rules if needed
                }
            },
            submitHandler: function (form) {
                // Your form submission logic here, if needed
                form.submit();
            }
        });
    });
</script>


</body>
</html>