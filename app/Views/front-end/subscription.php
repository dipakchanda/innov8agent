<?php $pagename = 'subscriptions' ; include 'include/header.php'; ?>

<?php include 'include/main-header.php'; 

$subscriptionprice = subscriptionInfo();

$basic_discount = $subscriptionprice['basic_price']-(($subscriptionprice['basic_price']*20)/100);
$premium_discount = $subscriptionprice['premium_price']-(($subscriptionprice['premium_price']*20)/100);
$elite_discount = $subscriptionprice['elite_price']-(($subscriptionprice['elite_price']*20)/100);
?>

<!-- Hero Banner -->
<section class="heroBanner heroContact bgImg" style="background-image:url(<?php echo base_url(); ?>front-panel/images/contact/bg1.jpg);">
    <div class="container">
        <div class="row gap-y2">
            <div class="col-lg-6 col-md-8 col-12 offset-lg-3 offset-md-2 text-center">
                <div class="sectionTitle">
                    <h3>Innov8Agent</h3>
                    <h1 class="titleL">Subscriptions Plan</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="priceOne py-60 bgImg" style="background-image:url(<?php echo base_url(); ?>front-panel/images/price/bg1.jpg);">
    <div class="container">
        <div class="row gap-y2">
            <div class="col-12 text-center">
                <div class="sectionTitle" id="scrollHere">
                    <h6>
                        <em class="icon-arrowBottomRight"></em> Pricing & Plans
                    </h6>
                    <h1 class="titleL">
                        Flexible <span>Subscriptions</span> Tailored for You
                    </h1>
                    <p>
                        Monthly and Annual plans are available. Opt for an annual payment and get a 20% discount!
                    </p>
                    <p>Free Trial: 7 Days (Supported Agent Essentials and Agent Advantage Plan)</p>
                    <div class="planSwitch">
                        <span>Monthly</span>
                        <label class="toggleSwitch">
                            <input type="checkbox" name="annual_subs" id="annual_subs" value="Y">
                            <span class="slider"></span>
                        </label>
                        <span>Annually</span>
                    </div>
                    <h4>Business Plan: Contact for custom pricing <a href="mailto:business@innov8agent.com">(business@innov8agent.com)</a></h4>
                </div>
            </div>
            <div class="col-12" >
                <div class="row gap-y1">
                    <div class="col-md-4">
                        <div class="priceCardOne">
                            <div class="titleSec">
                                <div class="iconSec">
                                    <span>
                                        <img src="<?php echo base_url(); ?>front-panel/images/icons/price1.svg" alt="">
                                    </span>
                                    <div>
                                        <h6>For individuals</h6>
                                        <h5>Agent Essentials Plan</h5>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="priceSec">
                                <h1 id="basic">
                                    $<?php echo $subscriptionprice['basic_price']; ?>
                                    <small>/month</small>
                                </h1>
                            </div>
                            <div class="detailsSec">
                                <h6>Features:</h6>
                                <ul>
                                    <li>
                                        <i class="icon-check"></i>
                                      	Embrace the Future of Real Estate with Agent Essentials: At just $24 a month, Agent Essentials is your gateway to revolutionizing property marketing and eases you into an AI assistant. This plan is meticulously crafted to cater to the dynamic needs of modern real estate professionals.
                                    </li>
                                    <li>
                                        <i class="icon-check"></i>
                                       AI Content Creation: Enjoy the freedom of creating 100 pieces of full-form content. Everything from marketing messages and newsletters to social media posts and blogs. Our AI-driven platform delivers content that captivates and converts.
                                    </li>
                                    <li>
                                        <i class="icon-check"></i>
                                        AI-Powered Property Descriptions: Generate up to 50 captivating property descriptions monthly. Our advanced AI algorithms ensure each piece is unique, engaging, and tailored to showcase the best aspects of your properties.
                                    </li>
                                    <li>
                                        <i class="icon-check"></i>
                                       SEO Starter: Propel your online presence with optimization for up to 50 content pieces. Our SEO strategies are tailored to enhance your visibility, driving more traffic to your listings.
                                    </li>
                                    <li>
                                        <i class="icon-check"></i>
                                       Intelligence Reports: Stay ahead of the competition with monthly access to 2 comprehensive competitor or market reports. Gain insights into market trends and strategies to refine your approach.
                                    </li>
                                    
                                    <li>
                                        <i class="icon-check"></i>
                                        Professional Email Outreach: Effortlessly draft up to 25 polished emails for your listings and campaigns. Our templates are designed to engage and convert leads.
                                    </li>
                                    
                                    <li>
                                        <i class="icon-check"></i>
                                        Reliable Support: Experience peace of mind with our 24/7 email support. Our dedicated team guarantees a response within 48 hours, ensuring your queries are promptly addressed.
SEO Keywords: Real Estate AI, Property Marketing, Image Enhancement, Real Estate SEO, Competitor Analysis, Professional Email Templates.
                                    </li>
                                </ul>
                            </div>
                            <div class="btnSec">
                                <a href="javascript:void(0)" onclick="buySubscription('basic')" class="btn btnPrimary">
                                    Subscribe <em class="icon-arrowRight"></em>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="priceCardOne style2">
                            <div class="titleSec">
                                <div class="iconSec">
                                    <span>
                                        <img src="<?php echo base_url(); ?>front-panel/images/icons/price2.svg" alt="">
                                    </span>
                                    <div>
                                        <h6>For startups</h6>
                                        <h5>Agent Advantage Plan</h5>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="priceSec">
                                <h1 id="premium">
                                    $<?php echo $subscriptionprice['premium_price']; ?>
                                    <small>/month</small>
                                </h1>
                            </div>
                            <div class="detailsSec">
                                <h6>Features:</h6>
                                <ul>
                                    <li>
                                    <i class="icon-check"></i>Elevate Your Real Estate Game with Agent Advantage: For a modest $34 per month (the best price in the industry), the Agent Advantage plan offers an unparalleled suite of tools for the ambitious real estate professional.
                                    </li>
                                    <li>
                                    <i class="icon-check"></i>Unlimited AI Content Creation: Enjoy 250 pieces of content created to drive more business. Our AI-driven content is not only informative and engaging but also optimized for search engines.
                                    </li>
                                    <li>
                                    <i class="icon-check"></i>Advanced Visualization: Elevate up to 50 images including property images, realistic virtual staging, and visualizations of potential renovations or improvements. With our state-of-the-art image enhancement tools, the sky is the limit. Make each listing a visual masterpiece that stands out in the market.
                                    </li>
                                    <li>
                                    <i class="icon-check"></i>SEO Pro: Take your online ranking to the next level by optimizing up to 30 pieces of content. Our advanced AI capabilities redefine SEO strategies. Innov8Agent's AI excels in understanding search intent. It can accurately interpret the nuances of search queries, delivering more relevant results than ever before. This feature surpasses the other tools SEO methods, marking a significant leap in search technology effectiveness.
                                    </li>
                                    <li>
                                    <i class="icon-check"></i>Comprehensive Intelligence Suite: Gain weekly insights with competitor reports, SWOT analyses, and market trends. Stay informed and ahead in your industry.
                                    </li>
                                    <li>
                                    <i class="icon-check"></i>Extensive Email Outreach: Craft 50 professional email drafts, complete with 5 targeted retargeting campaigns. Engage your audience effectively and increase conversions.
                                    </li>
                                    <li>
                                    <i class="icon-check"></i>Priority Support: Benefit from our round-the-clock email and chat support with responses guaranteed within 24 hours.
                                    </li>
                                    
                                    <li>
                                    <i class="icon-check"></i>Exclusive Webinars: Stay informed with monthly webinars focused on leveraging AI in real estate. Gain valuable insights and stay ahead of the curve.
                                    </li>
                                    
                                    <li>
                                    <i class="icon-check"></i>Exclusive Offers: Enjoy periodic discounts on our newest features and services, keeping you ahead with the latest in real estate marketing technology.
                                    </li>
                                    
                                    <li>
                                    <i class="icon-check"></i>SEO Keywords: Unlimited Property Descriptions, Real Estate Visualization, Advanced SEO for Real Estate, Market Intelligence, Email Marketing in Real Estate, AI in Real Estate.
                                    </li>
                                </ul>
                            </div>
                            <div class="btnSec">
                                <a href="javascript:void(0)" onclick="buySubscription('premium')" class="btn btnPrimary">
                                    Subscribe <em class="icon-arrowRight"></em>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="priceCardOne">
                            <div class="titleSec">
                                <div class="iconSec">
                                    <span>
                                        <img src="<?php echo base_url(); ?>front-panel/images/icons/price3.svg" alt="">
                                    </span>
                                    <div>
                                        <h6>For big companies</h6>
                                        <h5>Agent Excellence Plan</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="priceSec">
                                <h1 id="elite">
                                    $<?php echo $subscriptionprice['elite_price']; ?>
                                    <small>/month</small>
                                </h1>
                            </div>
                            <div class="detailsSec">
                                <h6>Features:</h6>
                                <ul>
                                    <li>
                                    <i class="icon-check"></i>Achieve the Pinnacle of Real Estate Success with Agent Excellence: At $54 per month, the Agent Excellence plan is the epitome of high-end real estate marketing services.
                                    </li>
                                    <li>
                                    <i class="icon-check"></i>All-Inclusive Advantage Features: Enjoy unrestricted access to all features of the Advantage Plan.
                                    </li>
                                    <li>
                                    <i class="icon-check"></i>Unlimited AI Content Creation: Enjoy the freedom of creating limitless content creation.
                                    </li>
                                    <li>
                                    <i class="icon-check"></i>Premium Visualization Tools: Access our premium suite of image enhancement tools for unparalleled visual appeal.
                                    </li>
                                    <li>
                                    <i class="icon-check"></i>SEO Masterclass: Receive personalized content optimization strategies with monthly suggestions to ensure you remain at the forefront of search engine rankings and top of mind for prospective clients.
                                    </li>
                                    <li>
                                    <i class="icon-check"></i>Deep Intelligence Analysis: Delve into the market with daily in-depth analyses, demographic profiles, and property demand forecasts with a click of a button.
                                    </li>
                                    <li>
                                    <i class="icon-check"></i>Customized Email Campaigns: Benefit from personalized email campaigns tailored by AI to resonate with your specific audience.
                                    </li>
                                    
                                     <li>
                                    <i class="icon-check"></i>Priority Plus Support: Experience our most dedicated support level, including immediate response times and monthly system optimization consultations.
                                    </li>
                                    
                                    <li>
                                    <i class="icon-check"></i>Exclusive Updates: Enjoy our newest features and services FIRST and FREE! Stay ahead with the latest in real estate marketing technology, content creation, image enhancements, and key business strategies.
                                    </li>
                                    
                                    <li>
                                    <i class="icon-check"></i>SEO Keywords: Premium Real Estate Marketing, Advanced Visualization, Personalized SEO Strategies, Market Analysis Real Estate, Custom Email Campaigns, Premium Real Estate Services.
                                    </li>
                                </ul>
                                
                            </div>
                            
                            <div class="btnSec">
                                <a href="javascript:void(0)" onclick="buySubscription('elite')" class="btn btnPrimary">Subscribe <em class="icon-arrowRight"></em></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-8 col-12 offset-md-2 priceSecure">
                <div class="iconText">
                    <em class="icon-reload"></em> 7-day riskfree cancelation
                </div>
                
                <div class="iconText">
                    <em class="icon-certified"></em> Integrated with PayPal for a seamless & secure transaction
                    experience.
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'include/main-footer.php'; ?>

<?php include 'include/footer.php'; ?>

<script>
	window.onload = function() {
		var element = document.getElementById("scrollHere");
		if (element) {
			element.scrollIntoView();
		}
	};
</script>

<script>
$(document).ready(function() {
    // Function to handle checkbox change
    $('#annual_subs').change(function() {
        if ($(this).is(':checked')) {
			$("#basic").html('$<?php echo $basic_discount; ?> <small>/month</small>');
			$("#premium").html('$<?php echo $premium_discount; ?> <small>/month</small>');
			$("#elite").html('$<?php echo $elite_discount; ?> <small>/month</small>');
        } else {
            $("#basic").html('$<?php echo $subscriptionprice['basic_price']; ?> <small>/month</small>');
			$("#premium").html('$<?php echo $subscriptionprice['premium_price']; ?> <small>/month</small>');
			$("#elite").html('$<?php echo $subscriptionprice['elite_price']; ?> <small>/month</small>');
        }
    });
});

function buySubscription(val)
{
	if ($('#annual_subs').is(':checked')) {
        window.location.href='<?php echo base_url()?>buysubscribe/'+val+'/annually';
    } else {
         window.location.href='<?php echo base_url()?>buysubscribe/'+val+'/monthly';
    }
}

</script>

</body>
</html>