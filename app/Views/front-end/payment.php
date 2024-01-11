<?php include 'include/header.php'; ?>

<!-- Login -->
<section class="paymentPg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 leftSec">
                <div class="logoSec">
                    <a href="index.php">
                        <em class="icon-arrowLeft"></em>
                        <img src="images/logo/iconColor.svg" alt="">
                        <span>Innov8Agent</span>
                    </a>
                </div>
                <div class="titleSec">
                    <h6>Try Teams</h6>
                    <h1>7 days free</h1>
                    <p>Then $125.00 per month</p>
                </div>
                <div class="paymentSec">
                    <div class="borderCard">
                        <div class="headSec">
                            <h6>
                                <span>Teams</span>
                                <span>7 days free</span>
                            </h6>
                            <p>
                                <span>Qty 3</span>
                                <span>$125.00 / month after</span>
                            </p>
                        </div>
                        <div class="bodySec">
                            <div class="togBox">
                                <label class="toggleSwitch">
                                    <input type="checkbox">
                                    <span class="slider"></span>
                                </label>
                                <span>Switch to annual billing</span>
                            </div>
                            <span>$1,188.00/year</span>
                        </div>
                    </div>
                    <ul>
                        <li>
                            <span>Subtotal</span>
                            <span>$125.00</span>
                        </li>
                        <li>
                            <span>Total after trial</span>
                            <span>$125.00</span>
                        </li>
                        <li>
                            <span>Total due today</span>
                            <span>$0.00</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 rightSec">
                <h5 class="mb-0">Enter payment details</h5>
                <div class="form-group mb-0">
                    <label for="">
                        Username or email address <em class="icon-info"></em>
                    </label>
                    <div class="inputBox">
                        <div class="placeholderText">
                            <em class="icon-user"></em>
                            <input type="text" class="form-control" placeholder="Enter your username or email address">
                        </div>
                    </div>
                </div>
                <h5 class="mb-0">Payments method</h5>
                <div class="cardSec">
                    <div class="form-group style2">
                        <label for="">
                            Card information <em class="icon-info"></em>
                        </label>
                        <div class="inputOne">
                            <div class="inputBox">
                                <div class="placeholderText">
                                    <input type="text" class="form-control" placeholder="1234 1234 1234 1234">
                                    <div class="iconSec">
                                        <img src="images/icons/payment/visa.svg" alt="">
                                        <img src="images/icons/payment/amex.svg" alt="">
                                        <img src="images/icons/payment/jcb.svg" alt="">
                                        <img src="images/icons/payment/mastercard.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="inputTwo">
                            <div class="inputBox">
                                <div class="placeholderText">
                                    <input type="text" class="form-control" placeholder="MM/YYYY">
                                </div>
                            </div>
                            <div class="inputBox">
                                <div class="placeholderText">
                                    <input type="text" class="form-control" placeholder="CVC">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">
                            Cardholder name <em class="icon-info"></em>
                        </label>
                        <div class="inputBox">
                            <div class="placeholderText">
                                <em class="icon-user"></em>
                                <input type="text" class="form-control" placeholder="Full name on card">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">
                            Country or Region <em class="icon-info"></em>
                        </label>
                        <div class="inputBox">
                            <div class="placeholderText">
                                <em class="icon-globeSearch"></em>
                                <input type="text" class="form-control" placeholder="India">
                            </div>
                        </div>
                    </div>
                    <div class="form-group boxCheck">
                        <label class="customCheckbox">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                            <h6>Securely save my information for 1-click checkout</h6>
                            <p>Pay faster on Innov8 and everywhere. Link is accepted</p>
                        </label>
                    </div>
                    <label class="customCheckbox">
                        <input type="checkbox">
                        <span class="checkmark"></span>
                        I Agree with all of your <a href="#">Terms & Conditions</a>
                    </label>
                </div>
                <button class="btn btnPrimary style2">Start trial</button>
            </div>
        </div>
    </div>
</section>

<?php include 'include/footer.php'; ?>