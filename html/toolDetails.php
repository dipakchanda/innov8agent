<?php include 'include/header.php'; ?>

<?php include 'include/mainHeader.php'; ?>

<!-- Page Title -->
<section class="pageTitle">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4 class="m-0">Member Tool List</h4>
            </div>
        </div>
    </div>
</section>

<!-- Tool Heading -->
<section class="toolDetailsOne py-60 pt-0">
    <div class="container">
        <div class="row gap-y2">
            <div class="col-12 headSec">
                <div class="row align-items-center gap-y1">
                    <div class="col-lg-3 col-md-4">
                        <a href="#" class="btn btnPrimary">
                            New Project <em class="icon-plus"></em>
                        </a>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <h3>
                            <img src="images/icons/emoji/1.svg" alt="">
                            Create A Social Media Post |
                            <small>Transform Every Aspect of Your Real Estate Business</small>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-12 bodySec">
                <div class="row gap-y2">
                    <div class="col-lg-3 col-md-4">
                        <!-- Sidebar -->
                        <?php include 'include/profileSidebar.php'; ?>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="progressArea">
                            <div class="progress customProgress">
                                <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70"
                                    aria-valuemin="0" aria-valuemax="70"></div>
                            </div>
                            <small>70 Complete%</small>
                        </div>
                        <div class="form-group">
                            <label for="">
                                What type of Social Post do you want to create? <sup>*</sup>
                            </label>
                            <div class="inputBox rightIcon">
                                <select name="" id="" class="form-control">
                                    <option value="">Select</option>
                                    <option value="">Facebook</option>
                                </select>
                                <em class="icon-angleDown emRight"></em>
                            </div>
                            <small>Select your social media post type.</small>
                        </div>
                        <div class="form-group">
                            <label for="">
                                What is your post focus? <sup>*</sup>
                            </label>
                            <div class="inputBox rightIcon">
                                <select name="" id="" class="form-control">
                                    <option value="">Select</option>
                                    <option value="">New Listing</option>
                                </select>
                                <em class="icon-angleDown emRight"></em>
                            </div>
                            <small>Select your product or service.</small>
                        </div>
                        <div class="form-group">
                            <label for="">
                                Who is your intended audience? <sup>*</sup>
                            </label>
                            <div class="inputBox rightIcon">
                                <select name="" id="" class="form-control">
                                    <option value="">Select</option>
                                    <option value="">Home Buyers, Age 18-30</option>
                                </select>
                                <em class="icon-angleDown emRight"></em>
                            </div>
                            <small>Select your product or service.</small>
                        </div>
                        <div class="mb-3">
                            <label class="customCheckbox">
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                                Create 3 Headlines for A/B testing
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="">MLS #</label>
                            <div class="inputBox rightIcon">
                                <input type="text" class="form-control" placeholder="">
                                <em class="icon-info emRight"></em>
                            </div>
                            <small>This is not necessary if you do not want t show in the social post.</small>
                        </div>
                        <div class="form-group">
                            <label for="">Enter Any Keywords You Would Like To Use</label>
                            <div class="inputBox rightIcon">
                                <input type="text" class="form-control" placeholder="">
                                <em class="icon-info emRight"></em>
                            </div>
                            <small>Keywords help your post resonate better with your audience .</small>
                        </div>
                        <div class="form-group">
                            <label for="">
                                Select The Tone of Your Post <sup>*</sup>
                            </label>
                            <div class="inputBox rightIcon">
                                <select name="" id="" class="form-control">
                                    <option value="">Select</option>
                                    <option value="">Professional, Informative</option>
                                </select>
                                <em class="icon-angleDown emRight"></em>
                            </div>
                            <small>Select your product or service.</small>
                        </div>
                        <div class="form-group">
                            <label for="">
                                Select Your Language <sup>*</sup>
                            </label>
                            <div class="inputBox rightIcon">
                                <select name="" id="" class="form-control">
                                    <option value="">Select</option>
                                    <option value="">English</option>
                                </select>
                                <em class="icon-angleDown emRight"></em>
                            </div>
                            <small>Select your product or service.</small>
                        </div>
                        <div class="form-group">
                            <label for="">Your Details </label>
                            <div class="inputBox">
                                <input type="text" class="form-control" placeholder="Enter details...">
                            </div>
                            <small>The more details you add the better your content will be.</small>
                        </div>
                        <div class="form-group">
                            <div class="uploader">
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
                                <div class="progress-area"></div>
                                <div class="uploaded-area"></div>
                            </div>
                        </div>
                        <div class="">
                            <button class="btn btnPrimary w-100">
                                Create It <em class="icon-arrowRight"></em>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-4 postVer">
                        <div class="form-group m-0">
                            <label for="">Create your post</label>
                            <div class="inputBox rightIcon">
                                <input type="text" class="form-control" placeholder="">
                                <em class="icon-info emRight"></em>
                            </div>
                            <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi quam veritatis
                                incidunt qui aliquam ad.</small>
                        </div>
                        <div class="form-group m-0">
                            <div class="uploader">
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
                                <div class="progress-area"></div>
                                <div class="uploaded-area"></div>
                            </div>
                        </div>
                        <h6 class="postTitle m-0">
                            Post Version 1
                            <div class="togBox">
                                <label class="toggleSwitch">
                                    <input type="checkbox">
                                    <span class="slider"></span>
                                </label>
                            </div>
                        </h6>
                        <div class="imgSec">
                            <img src="images/tools/1.jpg" alt="">
                        </div>
                        <p>
                            Ipsum sit mattis nulla quam nulla. Gravida id gravida ac enim mauris id. Non pellentesque
                            congue eget consectetur turpis. Sapien, dictum molestie sem tempor. Diam elit, orci,
                            tincidunt aenean tempus. Quis velit eget ut tortor tellus. Sed vel, orci. Ipsum sit mattis
                            nulla quam nulla. Gravida id gravida ac enim mauris id. Non pellentesque congue eget
                            consectetur turpis. Sapien, dictum molestie sem tempor. Diam elit, orci, tincidunt aenean
                            tempus. Quis velit eget ut tortor tellus. Sed vel, orci.Ipsum sit mattis nulla quam nulla.
                            Gravida id gravida ac enim mauris id. Non pellentesque congue eget consectetur turpis.
                            Sapien, dictum molestie sem tempor. Diam elit, orci, tincidunt aenean tempus. Quis velit
                            eget ut tortor tellus. Sed vel, orci. #newlisting #homebuyers #openhouse
                            #scottsdalehomeforsale
                        </p>
                        <div class="bgPost">
                            <h6 class="postTitle mb-4">
                                Post Version 2
                                <div class="togBox">
                                    <label class="toggleSwitch">
                                        <input type="checkbox">
                                        <span class="slider"></span>
                                    </label>
                                </div>
                            </h6>
                            <p>
                                Morbi sed imperdiet in ipsum, adipiscing elit dui lectus. Tellus id scelerisque est
                                ultricies ultricies. Duis est sit sed leo nisl, blandit elit sagittis. Quisque tristique
                                consequat quam sed. Nisl at scelerisque amet nulla purus habitasse.
                            </p>
                            <p>
                                Nunc sed faucibus bibendum feugiat sed interdum. Ipsum egestas condimentum mi massa. In
                                tincidunt pharetra consectetur sed duis facilisis metus. Etiam egestas in nec sed et.
                                Quis lobortis at sit dictum eget nibh tortor commodo cursus.
                            </p>
                            <p>
                                Odio felis sagittis, morbi feugiat tortor vitae feugiat fusce aliquet. Nam elementum
                                urna nisi aliquet erat dolor enim. Ornare id morbi eget ipsum. Aliquam senectus neque ut
                                id eget consectetur dictum. Donec posuere pharetra odio consequat scelerisque et, nunc
                                tortor.
                            </p>
                        </div>
                        <div class="btnShort">
                            <a href="">
                                <em class="icon-copy"></em> Copy
                            </a>
                            <a href="">
                                <em class="icon-printer"></em> Print
                            </a>
                            <a href="">
                                <em class="icon-fileDocument"></em> Save
                            </a>
                            <a href="">
                                <em class="fab fa-facebook-f"></em>
                            </a>
                            <a href="">
                                <em class="fab fa-instagram"></em>
                            </a>
                            <a href="">
                                <em class="fab fa-x-twitter"></em>
                            </a>
                            <a href="">
                                <em class="fab fa-linkedin-in"></em>
                            </a>
                            <a href="">
                                <em class="fab fa-google"></em>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'include/mainFooter.php'; ?>

<?php include 'include/footer.php'; ?>