<div class="mainHeader" id="navbar">
    <div class="container">
        <nav class="navbar navbar-expand-lg align-items-center">
            <a class="navbar-brand" href="<?php echo base_url(); ?>home">
                <img src="<?php echo base_url(); ?>front-panel/images/logo/logoColor.svg" alt="">
            </a>
            
            <?php if(isset($_SESSION['member_id']) && $_SESSION['member_id']!='') { ?>
            <a href="<?php echo base_url(); ?>myaccount" class="btn btnPrimary">My Account <em class="icon-arrowRight"></em></a>
            <?php } else { ?>
            <a href="<?php echo base_url(); ?>login" class="btn btnPrimary">Sign In <em class="icon-arrowRight"></em></a>
            <?php } ?>
            
            <a class="navbar-toggler" data-bs-toggle="offcanvas" href="#navbarOffcanvas" role="button"
                aria-controls="navbarOffcanvas">
                <em class="icon-bars"></em>
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="<?php echo base_url(); ?>home" class="nav-link <?php if($pagename=='home') { ?>active<?php } ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url(); ?>how-it-works" class="nav-link <?php if($pagename=='howitworks') { ?>active<?php } ?>">How It Works</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url(); ?>compare" class="nav-link <?php if($pagename=='compare') { ?>active<?php } ?>">Why Innov8Agent</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url(); ?>blog" class="nav-link">The Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url(); ?>contact" class="nav-link <?php if($pagename=='contact') { ?>active<?php } ?>">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

<div class="mobileSidebar offcanvas offcanvas-end" data-bs-backdrop="static" tabindex="-1" id="navbarOffcanvas">
    <div class="offcanvas-header">
        <a href="<?php echo base_url(); ?>home" class="logo">
            <img src="<?php echo base_url(); ?>front-panel/images/logo/logoColor.svg" alt="">
        </a>
        <button type="button" class="closeBtn" data-bs-dismiss="offcanvas" aria-label="Close">
            <em class="fa fa-close"></em>
        </button>
    </div>
    <div class="offcanvas-body">
        <ul class="menuListOne">
            <li>
                <a href="<?php echo base_url(); ?>home" class="active">Home</a>
            </li>
            <li>
                <a href="#">How It Works</a>
            </li>
            <li>
                <a href="#">Why Innov8Agent</a>
            </li>
            <li>
                <a href="#">The Blog</a>
            </li>
            <li>
                <a href="#">Contact Us</a>
            </li>
        </ul>
        <div class="offcanvasBtn">
            <a href="<?php echo base_url(); ?>register" class="btn btnPrimary">
                Sign Up! <em class="icon-arrowRight"></em>
            </a>
        </div>
    </div>
</div>