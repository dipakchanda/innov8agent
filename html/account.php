<?php include 'include/header.php'; ?>

<?php include 'include/mainHeader.php'; ?>

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
                    <div class="profileImg">
                        <img src="images/avatar/1.png" alt="">
                        <div class="btns">
                            <a href="#">Update</a>
                            <a href="#">
                                <em class="icon-trash"></em> Remove
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">
                                    Username <em class="icon-info"></em>
                                </label>
                                <div class="inputBox leftIcon">
                                    <em class="icon-user emLeft"></em>
                                    <input type="text" class="form-control" placeholder="Morty Smith">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">
                                    Welcome Message <em class="icon-info"></em>
                                </label>
                                <div class="inputBox leftIcon">
                                    <em class="icon-edit emLeft"></em>
                                    <input type="text" class="form-control"
                                        placeholder="Welcome to my scheduling page. Please follow the instructions to add an event to my calendar.">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">
                                    Real Estate Name (Your Company) <em class="icon-info"></em>
                                </label>
                                <div class="inputBox leftIcon">
                                    <em class="icon-edit emLeft"></em>
                                    <input type="text" class="form-control" placeholder="Century 21 Real Estate">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="">
                                    Date Format <em class="icon-info"></em>
                                </label>
                                <div class="inputBox leftIcon rightIcon">
                                    <em class="icon-calender emLeft"></em>
                                    <select name="" id="" class="form-control">
                                        <option value="">Select</option>
                                        <option value="">DD/MM/YYYY</option>
                                    </select>
                                    <em class="icon-angleDown emRight"></em>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="">
                                    Time Format <em class="icon-info"></em>
                                </label>
                                <div class="inputBox leftIcon rightIcon">
                                    <em class="icon-clock emLeft"></em>
                                    <select name="" id="" class="form-control">
                                        <option value="">Select</option>
                                        <option value="">12h (am/pm)</option>
                                    </select>
                                    <em class="icon-angleDown emRight"></em>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="">Country</label>
                                <div class="inputBox rightIcon">
                                    <select name="" id="" class="form-control">
                                        <option value="">Select</option>
                                        <option value="">United States</option>
                                    </select>
                                    <em class="icon-angleDown emRight"></em>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="">Time ZOne</label>
                                <div class="inputBox rightIcon">
                                    <select name="" id="" class="form-control">
                                        <option value="">Select</option>
                                        <option value="">Central Time - US & Canada</option>
                                    </select>
                                    <em class="icon-angleDown emRight"></em>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="uploader">
                                <div class="row align-items-center gap-y1">
                                    <div class="col-md-6">
                                        <div class="title">
                                            <h6>Upload Your Logo</h6>
                                            <p>Upload image (8M Max)</p>
                                        </div>
                                        <form action="#">
                                            <input class="file-input" type="file" name="file" hidden>
                                            <em class="icon-upload"></em>
                                            <p>
                                                <span>Click to upload</span> or drag and drop
                                                <small>PNG, JPG, GIF, or MP4 (max. 8MB)</small>
                                            </p>
                                        </form>
                                        <button class="btn btnPrimary style2">Add Logo</button>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="progress-area"></div>
                                        <div class="uploaded-area"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group m-0">
                                <h6>Connect to social media</h6>
                                <ul class="socialConnect">
                                    <li>
                                        <span>
                                            <img src="images/icons/facebook.svg" alt=""> Facebook
                                        </span>
                                        <a href="" class="btn btnPrimary style2">Connect</a>
                                    </li>
                                    <li>
                                        <span>
                                            <img src="images/icons/twitter.svg" alt=""> X (Twitter)
                                        </span>
                                        <a href="" class="btn btnPrimary style2">Connect</a>
                                    </li>
                                    <li>
                                        <span>
                                            <img src="images/icons/instagram.svg" alt=""> Instagram
                                        </span>
                                        <a href="" class="btn btnPrimary style2">Connect</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row gap-y1">
                        <div class="col-md-8">
                            <button class="btn btnPrimary">
                                Save changes <em class="icon-arrowRight"></em>
                            </button>
                            <button class="btn btnSecondaryBorder style2">Cancel</button>
                        </div>
                        <div class="col-md-4 text-md-end">
                            <button class="btn btnSecondary style2">Delete Account</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'include/mainFooter.php'; ?>

<?php include 'include/footer.php'; ?>