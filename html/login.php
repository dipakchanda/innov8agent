<?php include 'include/header.php'; ?>

<!-- Login -->
<section class="loginPg bgImg py-60" style="background-image:url(images/login/bg1.jpg);">
    <div class="container">
        <div class="row gap-y2">
            <div class="col-12">
                <div class="logoSec">
                    <a href="index.php">
                        <img src="images/logo/logoColor.svg" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-8 offset-lg-6 offset-md-2">
                <div class="loginBox">
                    <div class="logoIcon">
                        <img src="images/logo/iconColor.svg" alt="">
                    </div>
                    <div class="titleSec">
                        <div class="slogan">
                            <h6>Welcome to <span>Innov8Agent</span></h6>
                            <span>
                                No Account ?
                                <a href="register.php">Sign up</a>
                            </span>
                        </div>
                        <h1>Sign in</h1>
                        <div class="btnList">
                            <a href="#" class="socialBtn">
                                <img src="images/icons/google.svg" alt="">
                                <span>
                                    <span>Sign in with </span>Google
                                </span>
                            </a>
                            <a href="#" class="socialBtn">
                                <img src="images/icons/facebook.svg" alt="">
                            </a>
                            <a href="#" class="socialBtn">
                                <img src="images/icons/apple.svg" alt="">
                            </a>
                        </div>
                    </div>
                    <form action="">
                        <div class="form-group">
                            <label for="">
                                Username or email address <em class="icon-info"></em>
                            </label>
                            <div class="inputBox leftIcon">
                                <em class="icon-user emLeft"></em>
                                <input type="text" class="form-control"
                                    placeholder="Enter your username or email address">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">
                                Password <em class="icon-info"></em>
                            </label>
                            <div class="inputBox leftIcon">
                                <em class="icon-key emLeft"></em>
                                <input type="password" class="form-control" placeholder="Enter your password">
                            </div>
                        </div>
                        <div class="form-group text-end">
                            <a href="#">Forgot Password</a>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btnPrimary">
                                Sign In! <em class="icon-arrowRight"></em>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'include/footer.php'; ?>