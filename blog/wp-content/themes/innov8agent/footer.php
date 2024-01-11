<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package innov8agent
 */

 $site_url="https://innov8agent.com";
$home_url="https://innov8agent.com/home";
?>

<footer class="mainFooter">
    <div class="footerTop">
        <div class="container">
            <div class="row gap-y2">
                <div class="col-lg-3 col-md-6">
                    <h6>Quick Links</h6>
                    <ul class="menuListOne">
                        <li><a href="<?php echo $home_url;?>">Home</a></li>
                        <li><a href="<?php echo $site_url;?>/how-it-works">How It Works</a></li>
                        <li><a href="<?php echo $site_url;?>/compare">Why Innov8Agent</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="<?php echo $site_url;?>/contact">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h6>What We Do</h6>
                    <ul class="menuListOne">
                        <li><a href="#">Encouraging Testing</a></li>
                        <li><a href="#">Strengthening Advocacy</a></li>
                        <li><a href="#">Sharing Information</a></li>
                        <li><a href="#">Building Leadership</a></li>
                        <li><a href="#">Engaging With Global Fund</a></li>
                        <li><a href="#">Shining a Light</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h6>Legal</h6>
                    <ul class="menuListOne">
                        <li><a href="#">General Info</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Rate Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h6>Talk to Us</h6>
                    <ul class="menuListOne">
                        <li><a href="mailto:contact@innov8Agent.com">contact@innov8Agent.com</a></li>
                        <li><a href="tel:+6623991145">+66 2399 1145</a></li>
                    </ul>
                    <h6>Follow Us</h6>
                    <ul class="socialList">
                        <li><a href="#"><em class="fab fa-facebook-f"></em></a></li>
                        <li><a href="#"><em class="fab fa-instagram"></em></a></li>
                        <li><a href="#"><em class="fab fa-x-twitter"></em></a></li>
                        <li><a href="#"><em class="fab fa-linkedin"></em></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="divider">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <hr>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="m-0">
                        © <?php echo date("Y");?> Innov8Agent. All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="bgLogo">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footerLogo.png" alt="">
                </div>
            </div>
        </div>
    </div>
</footer>

<a href="#" id="back-to-top">
    <em class="fa fa-angle-up"></em>
</a>

<?php wp_footer(); ?>
<!-- Jquery min -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-3.6.0.min.js"></script>

<!-- Bootstrap Bundle -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Slick Slider -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/vendors/slickslider/slick.min.js"></script>

<!-- Lightbox -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/vendors/lightbox/gallery.js"></script>

<!-- Video Player -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/vendors/videoplayer/video.min.js"></script>

<!-- Uploader -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/vendors/uploader/uploader.js"></script>

<!-- Default -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>
</body>
</html>
