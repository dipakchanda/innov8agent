<?php $pagename = 'myaccunt';
include 'include/header.php'; ?>

<?php
include 'include/main-header.php';

if ($userinfo[0]->user_image != '' && file_exists('uploads/profileimg/' . $userinfo[0]->user_image)) {
    $user_image = base_url() . 'uploads/profileimg/' . $userinfo[0]->user_image;
} else {
    $user_image = base_url() . 'admin-panel/assets/img/profiles/avatar.jpg';
}

if ($userinfo[0]->user_logo != '' && file_exists('uploads/profileimg/' . $userinfo[0]->user_logo)) {
    $user_logo = base_url() . 'uploads/profileimg/' . $userinfo[0]->user_logo;
} else {
    $user_logo = base_url() . 'admin-panel/assets/img/profiles/avatar.jpg';
}
?>

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
                <form name="editFrm" id="editFrm" method="post" enctype="multipart/form-data"
                    action="<?php echo base_url(); ?>myaccount">
                    <?php if (session()->get('addedd')) { ?>
                        <div class="alert alert-primary mt-2" role="alert" id="cat-add" style="display:block">
                            Profile updated successfully completed.
                        </div>
                    <?php } ?>
                    <div class="contentSec">
                        <div class=" profileImg">
                            <img src="<?php echo $user_image; ?>" alt="">
                            <div class="uploadBtn">
                                <input type="file" name="user_image" id="user_image" accept=".png,.jpg">
                                <input type="hidden" name="old_user_image" id="old_user_image"
                                    value="<?php echo $userinfo[0]->user_image; ?>" />
                                <span>Update</span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">
                                        Username <em class="icon-info" data-toggle="tooltip" data-placement="top"
                                            title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam nec nulla iaculis, hendrerit tellus quis, consequat mi."></em>
                                    </label>
                                    <div class="inputBox leftIcon">
                                        <em class="icon-user emLeft"></em>
                                        <input type="text" class="form-control" name="member_username"
                                            id="member_username" value="<?php echo $userinfo[0]->member_username; ?>"
                                            readonly="readonly" placeholder="Morty Smith">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">
                                        Email address <em class="icon-info" data-toggle="tooltip" data-placement="top"
                                            title="Tooltip on top"></em>
                                    </label>
                                    <div class="inputBox leftIcon">
                                        <em class="icon-email emLeft"></em>
                                        <input type="text" class="form-control" name="member_email" id="member_email"
                                            value="<?php echo $userinfo[0]->member_email; ?>" readonly="readonly"
                                            placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">
                                        Welcome Message <em class="icon-info" data-toggle="tooltip" data-placement="top"
                                            title="Tooltip on top"></em>
                                    </label>
                                    <div class="inputBox leftIcon">
                                        <em class="icon-edit emLeft"></em>
                                        <input type="text" class="form-control" name="welcome_message"
                                            id="welcome_message"
                                            value="<?php echo stripslashes($userinfo[0]->welcome_message); ?>"
                                            placeholder="Welcome to my scheduling page. Please follow the instructions to add an event to my calendar.">
                                    </div>

                                    <div id="welcome_message-error" class="error-msg"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">
                                        Real Estate Name (Your Company) <em class="icon-info" data-toggle="tooltip"
                                            data-placement="top" title="Tooltip on top"></em>
                                    </label>
                                    <div class="inputBox leftIcon">
                                        <em class="icon-edit emLeft"></em>
                                        <input type="text" class="form-control" name="welcome_estate"
                                            id="welcome_estate"
                                            value="<?php echo stripslashes($userinfo[0]->welcome_estate); ?>"
                                            placeholder="Century 21 Real Estate">
                                    </div>
                                    <div id="welcome_estate-error" class="error-msg"></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="">
                                        Date Format <em class="icon-info" data-toggle="tooltip" data-placement="top"
                                            title="Tooltip on top"></em>
                                    </label>
                                    <div class="inputBox leftIcon rightIcon">
                                        <em class="icon-calender emLeft"></em>
                                        <select name="date_formats" id="date_formats" class="form-control">
                                            <option value="">Select</option>
                                            <option value="DD/MM/YYYY" <?php if ($userinfo[0]->date_formats == 'DD/MM/YYYY') {
                                                echo "selected";
                                            } ?>>
                                                DD/MM/YYYY</option>
                                            <option value="MM/DD/YYYY" <?php if ($userinfo[0]->date_formats == 'MM/DD/YYYY') {
                                                echo "selected";
                                            } ?>>
                                                MM/DD/YYYY</option>
                                        </select>
                                        <em class="icon-angleDown emRight"></em>
                                    </div>
                                    <div id="date_formats-error" class="error-msg"></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="">
                                        Time Format <em class="icon-info" data-toggle="tooltip" data-placement="top"
                                            title="Tooltip on top"></em>
                                    </label>
                                    <div class="inputBox leftIcon rightIcon">
                                        <em class="icon-clock emLeft"></em>
                                        <select name="time_formats" id="time_formats" class="form-control">
                                            <option value="">Select</option>
                                            <option value="12H (am/pm)" <?php if ($userinfo[0]->time_formats == '12H (am/pm)') {
                                                echo "selected";
                                            } ?>>12H (am/pm)</option>
                                            <option value="24H (am/pm)" <?php if ($userinfo[0]->time_formats == '24H (am/pm)') {
                                                echo "selected";
                                            } ?>>24H (am/pm)</option>
                                        </select>
                                        <em class="icon-angleDown emRight"></em>
                                    </div>
                                    <div id="time_formats-error" class="error-msg"></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="">Country</label>
                                    <div class="inputBox rightIcon">
                                        <select name="member_country" id="member_country" class="form-control">
                                            <option value="">Select</option>
                                            <?php foreach ($country as $countrys) { ?>
                                                <option value="<?php echo $countrys->countryname; ?>" <?php if ($userinfo[0]->member_country == $countrys->countryname) {
                                                       echo "selected";
                                                   } ?>>
                                                    <?php echo $countrys->countryname; ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                        <em class="icon-angleDown emRight"></em>
                                    </div>
                                    <div id="member_country-error" class="error-msg"></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="">Time Zone</label>
                                    <div class="inputBox rightIcon">
                                        <select name="time_zone" id="time_zone" class="form-control">
                                            <option value="">Select</option>
                                            <option value="Eastern Standard Time(EST)" <?php if ($userinfo[0]->time_zone == 'Eastern Standard Time(EST)') {
                                                echo "selected";
                                            } ?>>Eastern Standard Time(EST)</option>

                                            <option value="Central Standard Time(CST)" <?php if ($userinfo[0]->time_zone == 'Central Standard Time(CST)') {
                                                echo "selected";
                                            } ?>>Central Standard Time(CST)</option>

                                            <option value="Mountain Standard Time(MST)" <?php if ($userinfo[0]->time_zone == 'Mountain Standard Time(MST)') {
                                                echo "selected";
                                            } ?>>Mountain Standard Time(MST)</option>

                                            <option value="Pacific Standard Time(PST)" <?php if ($userinfo[0]->time_zone == 'Pacific Standard Time(PST)') {
                                                echo "selected";
                                            } ?>>Pacific Standard Time(PST)</option>

                                            <option value="Alaska Standard Time(AKST)" <?php if ($userinfo[0]->time_zone == 'Alaska Standard Time(AKST)') {
                                                echo "selected";
                                            } ?>>Alaska Standard Time(AKST)</option>

                                            <option value="Yukon Standard Time(YST)" <?php if ($userinfo[0]->time_zone == 'Yukon Standard Time(YST)') {
                                                echo "selected";
                                            } ?>>Yukon Standard Time(YST)</option>

                                            <option value="Alaska-Hawaii Standard Time(AHST)" <?php if ($userinfo[0]->time_zone == 'Alaska-Hawaii Standard Time(AHST)') {
                                                echo "selected";
                                            } ?>>Alaska-Hawaii Standard Time(AHST)</option>
                                        </select>
                                        <em class="icon-angleDown emRight"></em>
                                    </div>
                                    <div id="time_zone-error" class="error-msg"></div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="fileUploader">
                                    <div class="row">
                                        <div class="col-12">
                                            <h6>Upload Your Logo</h6>
                                            <p>Upload image (8M Max)</p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="imgUploaer">
                                                <input type="file" name="user_logo" id="user_logo" accept=".png,.jpg">
                                                <input type="hidden" name="old_user_logo" id="old_user_logo"
                                                    value="<?php echo $userinfo[0]->user_logo; ?>" />
                                                <div class="boxSec">
                                                    <em class="icon-upload"></em>
                                                    <p>
                                                        <span>Click to upload</span> or drag and drop
                                                        <small>PNG, JPG, GIF, or MP4 (max. 8MB)</small>
                                                    </p>
                                                </div>
                                                <span class="btn btnPrimary style2 w-100">Add Logo</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="imgSec">
                                                <img src="<?php echo $user_logo; ?>" alt="" id="img-preview">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 pt-3">
                                <div class="form-group m-0">
                                    <h6>Connect to social media</h6>
                                    <ul class="socialConnect">
                                        <li>
                                            <span>
                                                <img src="<?php echo base_url(); ?>front-panel/images/icons/facebook.svg"
                                                    alt=""> Facebook
                                            </span>
                                            <a href="" class="btn btnPrimary style2">Connect</a>
                                        </li>

                                        <li>
                                            <span>
                                                <img src="<?php echo base_url(); ?>front-panel/images/icons/twitter.svg"
                                                    alt=""> X (Twitter)
                                            </span>
                                            <a href="" class="btn btnPrimary style2">Connect</a>
                                        </li>

                                        <li>
                                            <span>
                                                <img src="<?php echo base_url(); ?>front-panel/images/icons/instagram.svg"
                                                    alt=""> Instagram
                                            </span>
                                            <a href="" class="btn btnPrimary style2">Connect</a>
                                        </li>

                                        <li>
                                            <span>
                                                <img src="<?php echo base_url(); ?>front-panel/images/icons/linkedin.svg"
                                                    alt=""> Linkedin
                                            </span>
                                            <a href="" class="btn btnPrimary style2">Connect</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="row gap-y1 pt-3">
                            <div class="col-md-8">
                                <button type="submit" class="btn btnPrimary" name="editBtn" id="editBtn">Save changes
                                    <em class="icon-arrowRight"></em></button>
                                <button type="reset" class="btn btnSecondaryBorder style2">Cancel</button>
                            </div>
                            <div class="col-md-4 text-md-end">
                                <button class="btn btnSecondary style2">Delete Account</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include 'include/main-footer.php'; ?>

<?php include 'include/footer.php'; ?>

<script>
    $(document).ready(function () {
        $('#editFrm').validate({
            rules: {
                welcome_message: {
                    required: true,
                    minlength: 5 // Example minimum length
                },
                welcome_estate: {
                    required: true
                },
                date_formats: {
                    required: true
                },
                time_formats: {
                    required: true
                },
                member_country: {
                    required: true
                },
                time_zone: {
                    required: true
                }
                // Add more rules for other fields as needed
            },
            messages: {
                welcome_message: {
                    required: "Please enter a welcome message",
                    minlength: "Please enter at least 5 characters"
                },
                welcome_estate: {
                    required: "Please enter your real estate name"
                },
                date_formats: {
                    required: "Please select a date format"
                },
                time_formats: {
                    required: "Please select a time format"
                },
                member_country: {
                    required: "Please select a country"
                },
                time_zone: {
                    required: "Please select a time zone"
                }
                // Add more messages for other fields as needed
            },
            errorPlacement: function (error, element) {
                error.appendTo(element.closest('.form-group').find('.error-msg'));
            }
        });
    });
</script>

<script>
    $(document).ready(function () {
        // Handling file input change event
        $('#user_logo').on('change', function (e) {
            var file = e.target.files[0];
            var reader = new FileReader();

            reader.onload = function (e) {
                // Set the src attribute of the image to the uploaded image data
                $('#img-preview').attr('src', e.target.result);
            };

            if (file) {
                // Read the uploaded file as a data URL
                reader.readAsDataURL(file);
            }
        });
    });
</script>

</body>

</html>