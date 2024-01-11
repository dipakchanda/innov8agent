<?php  $pagename = 'contact' ; include 'include/header.php'; ?>

<?php include 'include/main-header.php'; ?>

<!-- Hero Banner -->
<section class="heroBanner heroContact bgImg" style="background-image:url(<?php echo base_url(); ?>front-panel/images/contact/bg1.jpg);">
    <div class="container">
        <div class="row gap-y2">
            <div class="col-lg-6 col-md-8 col-12 offset-lg-3 offset-md-2 text-center">
                <div class="sectionTitle">
                    <h3>Innov8Agent</h3>
                    <h1 class="titleL">Contact Us</h1>
                    <p>
                        Empowering Real Estate Agents with AI-Driven Solutions.
                    </p>
                    <div class="btnSec">
                        <a href="<?php echo base_url(); ?>register" class="btn btnPrimaryBorder style2">Start Free Trial</a>
                        <a href="<?php echo base_url(); ?>register" class="btn btnPrimary">
                            Sign Up! <em class="icon-arrowRight"></em>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact One -->
<section class="contactOne bgImg py-60 pb-0" style="background-image:url(<?php echo base_url(); ?>front-panel/images/contact/bg2.jpg);">
    <div class="container">
        <div class="row align-items-center gap-y2">
            <div class="col-md-6">
                <div class="sectionTitle">
                    <h6>
                        <em class="icon-arrowBottomRight"></em> Welcome to Innov8Agent
                    </h6>
                    <h1>How can we help?</h1>
                    <p>
                        Want to chat? We’d love to hear from you! Get in touch with our Customer Success Team to inquire
                        about speaking events, advertising rates, or just say hello.
                    </p>
                </div>
                <form action="" class="searchSec">
                    <div class="form-group m-0">
                        <div class="inputBox leftIcon">
                            <em class="icon-search emLeft"></em>
                            <input type="text" class="form-control" placeholder="Enter your username or email address">
                        </div>
                        <button class="btn btnPrimary">
                            Search <em class="icon-arrowRight"></em>
                        </button>
                        <small><b>Popular searches :</b> billing brand voice knowledge base commands API chat</small>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="imgSec">
                    <img src="<?php echo base_url(); ?>front-panel/images/contact/1.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Two -->
<section class="contactTwo py-60">
    <div class="container">
        <div class="row gap-y2">
            <div class="col-md-10 col-12 offset-md-1 text-center">
                <div class="sectionTitle">
                    <h6>
                        <em class="icon-arrowBottomRight"></em> Innov8Agent
                    </h6>
                    <h1>Welcome 👋</h1>
                    <p>Our Help Center is designed with you in mind, to find answers quickly and access on-hand resources crafted by our team. Search our knowledge base for documentation on specific product and account related functionality, answers to common questions, how-to's, best practices, and more!</p>
                </div>
            </div>
            <div class="col-12">
                <div class="row gap-y1">
                
                    <div class="col-md-3" onclick="getDetails('new')" style="cursor:pointer">
                        <div class="contactCardOne">
                            <em class="icon-book"></em>
                            <h5>What's New</h5>
                        </div>
                    </div>
                    
                    <div class="col-md-3" onclick="getDetails('started')" style="cursor:pointer">
                        <div class="contactCardOne">
                            <em class="icon-book"></em>
                            <h5>Getting Started</h5>
                        </div>
                    </div>
                    
                    <div class="col-md-3" onclick="getDetails('billing')" style="cursor:pointer">
                        <div class="contactCardOne">
                            <em class="icon-book"></em>
                            <h5>Plans and Billing</h5>
                        </div>
                    </div>
                    
                    <div class="col-md-3" onclick="getDetails('faq')" style="cursor:pointer">
                        <div class="contactCardOne">
                            <em class="icon-book"></em>
                            <h5>Features FAQ</h5>
                        </div>
                    </div>
                    
                    <div class="col-md-3" onclick="getDetails('settings')" style="cursor:pointer">
                        <div class="contactCardOne">
                            <em class="icon-book"></em>
                            <h5>Account Settings</h5>
                        </div>
                    </div>
                    
                    <div class="col-md-3" onclick="getDetails('troubleshooting')" style="cursor:pointer">
                        <div class="contactCardOne">
                            <em class="icon-book"></em>
                            <h5>Troubleshooting</h5>
                        </div>
                    </div>
                    
                    <div class="col-md-3" onclick="getDetails('support')" style="cursor:pointer">
                        <div class="contactCardOne">
                            <em class="icon-book"></em>
                            <h5>Business Support</h5>
                        </div>
                    </div>
                    
                    <div class="col-md-3" onclick="getDetails('integrations')" style="cursor:pointer">
                        <div class="contactCardOne">
                            <em class="icon-book"></em>
                            <h5>Integrations</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Two -->
<section class="contactTwo py-60 pt-0">
    <div class="container">
        <div class="row gap-y2">
            <div class="col-md-10 col-12 offset-md-1 text-center">
                <div class="sectionTitle">
                    <h6>
                        <em class="icon-arrowBottomRight"></em> Innov8Agent
                    </h6>
                    <h1>Promoted articles</h1>
                </div>
            </div>
            <div class="col-12">
                <div class="row gap-y1">
                    <div class="col-md-3" onclick="getDetails('what')" style="cursor:pointer">
                        <div class="contactCardTwo">
                            <h6>
                                <em class="icon-bar"></em> What should I put for tone of voice?
                            </h6>
                            <p>
                                Some templates allow you to augment the tone o...
                            </p>
                        </div>
                    </div>
                    
                    <div class="col-md-3" onclick="getDetails('helpful')" style="cursor:pointer">
                        <div class="contactCardTwo">
                            <h6>
                                <em class="icon-bar"></em> 500+ Helpful Innov8 Prompts
                            </h6>
                            <p>
                                Our vast prompt database features 500+ ideas to...
                            </p>
                        </div>
                    </div>
                    
                    <div class="col-md-3" onclick="getDetails('cancel')" style="cursor:pointer">
                        <div class="contactCardTwo">
                            <h6>
                                <em class="icon-bar"></em> Cancel your account
                            </h6>
                            <p>
                                We're sad to see you go! You can cancel your a...
                            </p>
                        </div>
                    </div>
                    
                    <div class="col-md-3" onclick="getDetails('api')" style="cursor:pointer">
                        <div class="contactCardTwo">
                            <h6>
                                <em class="icon-bar"></em> Do you have an API?
                            </h6>
                            <p>
                                Yes! Bring the power of generative AI directly ...
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Three -->
<section class="contactThree py-60">
    <div class="container">
        <div class="row gap-y2">
            <div class="col-md-6">
                <div class="box">
                    <div class="sectionTitle">
                        <h6>
                            <em class="icon-arrowBottomRight"></em> Innov8Agent
                        </h6>
                        <h3>Get In touch</h3>
                        <p> Feel free contact with us, we love to make new partners & friends</p>
                    </div>
                    <ul>
                        <li>
                            <span>
                                <em class="icon-mapMarker"></em> Address
                            </span>
                            <span>300 Delaware Ave<br/>Wilmington, DE 19801, USA</span>
                        </li>
                        <li>
                            <span>
                                <em class="icon-call"></em> Phone Number
                            </span>
                            <span><a href="tel:+(302) 601-1483">(302) 601-1483</a></span>
                        </li>
                        <li>
                            <span>
                                <em class="icon-email"></em> Email address
                            </span>
                            <span>
							<a href="mailto:help.company@gmail.com">help.company@gmail.com</a>
                            <a href="mailto:career.company@gamil.com">career.company@gamil.com</a>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box">
                    <form name="contactFrm" id="contactFrm" method="post" action="<?php echo base_url(); ?>contact">
					<?php if(session()->get('addedd')) { ?>
                    <div class="alert alert-primary mt-2" role="alert" id="cat-add" style="display:block">Thank your for contact us.</div>
                    <?php } ?>
                    
                    <?php if(session()->get('fail')) { ?>
                    <div class="alert alert-danger mt-2" role="alert" id="cat-add" style="display:block">Something went wrong.</div>
                    <?php } ?>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">
                                        First Name <em class="icon-info"></em>
                                    </label>
                                    <div class="inputBox leftIcon">
                                        <em class="icon-user emLeft"></em>
                                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="John">
                                    </div>
                                    <small id="first_name_error" class="error-msg"></small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">
                                        Last Name <em class="icon-info"></em>
                                    </label>
                                    <div class="inputBox leftIcon">
                                        <em class="icon-user emLeft"></em>
                                        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Doe">
                                    </div>
                                    <small id="last_name_error" class="error-msg"></small>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">
                                Email Address <em class="icon-info"></em>
                            </label>
                            <div class="inputBox leftIcon">
                                <em class="icon-email emLeft"></em>
                                <input type="text" class="form-control" name="contact_email" id="contact_email" placeholder="example@company.com">
                            </div>
                            <small id="contact_email_error" class="error-msg"></small>
                        </div>
                        <div class="form-group">
                            <label for="">Subject</label>
                            <div class="inputBox">
                                <input type="text" class="form-control" name="contact_subject" id="contact_subject" placeholder="Subject placeholder">
                            </div>
                            <small id="contact_subject_error" class="error-msg"></small>
                        </div>
                        <div class="form-group">
                            <label for="">Message <em class="icon-info"></em></label>
                            <div class="inputBox">
                                <textarea name="contact_msg" id="contact_msg" rows="6" class="form-control" placeholder="Type message here"></textarea>
                            </div>
                            <small id="contact_msg_error" class="error-msg"></small>
                        </div>
                        <button class="btn btnPrimary" type="submit" name="sendBtn" id="sendBtn">Send Message <em class="icon-arrowRight"></em></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map -->
<section class="mapContact"><?php echo stripslashes($contactsdetails[0]->contact_map); ?></section>

<?php include 'include/main-footer.php'; ?>

<?php include 'include/footer.php'; ?>

<!-- Include jQuery Validation Plugin -->
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

<script>
    $(document).ready(function () {
        // Add validation rules to your form elements
        $("#contactFrm").validate({
            rules: {
                first_name: {
                    required: true,
                    minlength: 2 // Example: minimum length is 2 characters
                },
                last_name: {
                    required: true,
                    minlength: 2 // Example: minimum length is 2 characters
                },
                contact_email: {
                    required: true,
                    email: true // Validates if it's a valid email address
                },
                contact_subject: {
                    required: true
                },
                contact_msg: {
                    required: true,
                    minlength: 140 // Example: minimum length is 10 characters
                }
            },
            messages: {
                first_name: {
                    required: "Please enter your first name",
                    minlength: "Your first name must consist of at least 2 characters"
                },
                last_name: {
                    required: "Please enter your last name",
                    minlength: "Your last name must consist of at least 2 characters"
                },
                contact_email: {
                    required: "Please enter your email address",
                    email: "Please enter a valid email address"
                },
                contact_subject: {
                    required: "Please enter the subject"
                },
                contact_msg: {
                    required: "Please enter your message",
                    minlength: "Your message must consist of at least 140 characters"
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
			
            // Submit handler if the form is valid
            submitHandler: function (form) {
                // Here you can do something when the form is valid, for example, submit via AJAX
                form.submit(); // or use AJAX to submit the form data
            }
        });
    });
</script>

<script>
function getDetails(val)
{
	if(val == 'new') {
	window.location.href="<?php echo base_url(); ?>whats-new";
	}
	
	if(val == 'started') {
	window.location.href="<?php echo base_url(); ?>getting-started";
	}
	
	if(val == 'billing') {
	window.location.href="<?php echo base_url(); ?>plans-billing";
	}
	
	if(val == 'faq') {
	window.location.href="<?php echo base_url(); ?>features-faq";
	}
	
	if(val == 'settings') {
	window.location.href="<?php echo base_url(); ?>account-settings";
	}
	
	if(val == 'troubleshooting') {
	window.location.href="<?php echo base_url(); ?>troubleshooting";
	}
	
	if(val == 'support') {
	window.location.href="<?php echo base_url(); ?>business-support";
	}
	
	if(val == 'integrations') {
	window.location.href="<?php echo base_url(); ?>integrations";
	}
	
	if(val == 'what') {
	window.location.href="<?php echo base_url(); ?>what-articles";
	}
	
	if(val == 'helpful') {
	window.location.href="<?php echo base_url(); ?>helpful-articles";
	}
	
	if(val == 'cancel') {
	window.location.href="<?php echo base_url(); ?>cancel-articles";
	}
	
	if(val == 'api') {
	window.location.href="<?php echo base_url(); ?>api-articles";
	}
}
</script>
