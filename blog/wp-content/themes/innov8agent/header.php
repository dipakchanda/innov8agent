<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package innov8agent
 */
$site_url="https://innov8agent.com";
$home_url="https://innov8agent.com/home";

// Check if $_SESSION['member_id'] is set
if (isset($_SESSION['member_id'])) {
    $account_link = $site_url . '/my-account'; // Define the account link
    $account_text = 'My Account'; // Text for logged-in users
} else {
    $account_link = $site_url . '/login'; // Default login link
    $account_text = 'Sign In'; // Default text for non-logged-in users
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-BWRBK46TXJ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-BWRBK46TXJ');
</script>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/custom.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="loaderWrapper">
        <div class="loader"></div>
    </div>

    <div class="mainHeader" id="navbar">
    <div class="container">
        <nav class="navbar navbar-expand-lg align-items-center">
            <a class="navbar-brand" href="<?php echo $home_url;?>">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo/logoColor.svg" alt="">
            </a>
            <a href="<?php echo $account_link; ?>" class="btn btnPrimary">
    <?php echo $account_text; ?> <em class="icon-arrowRight"></em>
</a>
            <a class="navbar-toggler" data-bs-toggle="offcanvas" href="#navbarOffcanvas" role="button"
                aria-controls="navbarOffcanvas">
                <em class="icon-bars"></em>
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="<?php echo $home_url;?>" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo $site_url;?>/how-it-works" class="nav-link">How It Works</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo $site_url;?>/compare" class="nav-link">Why Innov8Agent</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-link active">The Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo $site_url;?>/contact" class="nav-link">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

<div class="mobileSidebar offcanvas offcanvas-end" data-bs-backdrop="static" tabindex="-1" id="navbarOffcanvas">
    <div class="offcanvas-header">
        <a href="<?php echo $home_url;?>" class="logo">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo/logoColor.svg" alt="">
        </a>
        <button type="button" class="closeBtn" data-bs-dismiss="offcanvas" aria-label="Close">
            <em class="fa fa-close"></em>
        </button>
    </div>
    <div class="offcanvas-body">
        <ul class="menuListOne">
            <li>
                <a href="<?php echo $home_url;?>">Home</a>
            </li>
            <li>
                <a href="<?php echo $home_url;?>/how-it-works">How It Works</a>
            </li>
            <li>
                <a href="<?php echo $home_url;?>/compare">Why Innov8Agent</a>
            </li>
            <li>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="active">The Blog</a>
            </li>
            <li>
                <a href="<?php echo $home_url;?>/contact">Contact Us</a>
            </li>
        </ul>
        <div class="offcanvasBtn">
            <a href="<?php echo $site_url;?>/login" class="btn btnPrimary">
                Sign Up! <em class="icon-arrowRight"></em>
            </a>
        </div>
    </div>
</div>
