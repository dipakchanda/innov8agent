<?php $pagename = 'home';
include 'include/header.php'; ?>

<?php include 'include/main-header.php';

/*if($banner[0]->banner_image!='' && file_exists('uploads/othersfiles/'.$banner[0]->banner_image))
{
    $banner_image = base_url().'uploads/othersfiles/'.$banner[0]->banner_image;
}
else
{
    $banner_image = base_url().'admin-panel/assets/img/noimage.jpg';
}*/

/*if($revolutionizing[0]->cms_image!='' && file_exists('uploads/othersfiles/'.$revolutionizing[0]->cms_image))
{
    $revolutionizing_image = base_url().'uploads/othersfiles/'.$revolutionizing[0]->cms_image;
}
else
{
    $revolutionizing_image = base_url().'admin-panel/assets/img/noimage.jpg';
}*/

/*if($about[0]->cms_image!='' && file_exists('uploads/othersfiles/'.$about[0]->cms_image))
{
    $about_video = base_url().'uploads/othersfiles/'.$about[0]->cms_image;
}
else
{
    $about_video = '';
}*/

$subscriptionprice = subscriptionInfo();

$basic_discount = $subscriptionprice['basic_price'] - (($subscriptionprice['basic_price'] * 20) / 100);
$premium_discount = $subscriptionprice['premium_price'] - (($subscriptionprice['premium_price'] * 20) / 100);
$elite_discount = $subscriptionprice['elite_price'] - (($subscriptionprice['elite_price'] * 20) / 100);

$wordpressApiUrl = 'https://innov8agent.com/blog/wp-json/wp/v2/posts?per_page=3';
$ch = curl_init($wordpressApiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$posts = json_decode($response);
?>

<!-- Hero Banner -->
<section class="heroBanner heroHome bgImg"
    style="background-image:url(<?php echo base_url(); ?>front-panel/images/hero/bg1.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="sectionTitle">
                    <h1>
                        <span>Professional</span>
                        <span>Real Estate Agents,</span>
                        <span>Elevate Your Game!</span>
                    </h1>
                    <p>
                        Unlock the power of Innov8Agent to transform your listings, improve your outreach, and
                        streamline your processes. Sign up now and make every deal a masterpiece!
                    </p>
                    <div class="btnSec">
                        <a href="<?php echo base_url(); ?>register" class="btn btnPrimaryBorder style2">Start Free
                            Trial</a>
                        <a href="<?php echo base_url(); ?>register" class="btn btnPrimary">
                            Sign Up! <em class="icon-arrowRight"></em>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Highlight -->
<section class="serviceOne py-60">
    <div class="container">
        <div class="row gap-y2">
            <div class="col-12">
                <div class="sectionTitle">
                    <div class="row gap-y1">
                        <div class="col-lg-7 col-md-6">
                            <h6>
                                <em class="icon-arrowBottomRight"></em> Innov8Agent
                            </h6>
                            <h1 class="titleL">
                                Turn the Key to Success with <span>Innov8Agent</span>
                            </h1>
                            <p>
                                With an ultra-intuitive platform that harnesses the power of cutting-edge AI,
                                Innov8Agent transcends the ordinary to deliver the extraordinary. We’re not just a
                                service; we’re your strategic ally, empowering you to make every listing a masterpiece
                                and every deal a victory dance.
                            </p>
                            <div class="btnSec">
                                <a href="#" class="btn btnPrimary">
                                    Get Started <em class="icon-arrowRight"></em>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <div class="imgSec">
                                <img src="<?php echo base_url(); ?>front-panel/images/logo/logoColor.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="bgBox">
                    <div class="row gap-y1">
                        <div class="col-lg-4 col-md-5 leftSec">
                            <ul>
                                <li>
                                    <div class="serviceCardOne">
                                        <h6>Customer Highlight</h6>
                                        <p>
                                            Meet Sarah. Once an overlooked agent, she felt lost amidst the sea of
                                            listings.
                                            Then
                                            she found Innov8Agent. In just 6 months, Sarah didn't just rise; she soared,
                                            becoming her region's top seller.
                                        </p>
                                        <a href="#" class="btn btnPrimary">
                                            Your Legendary Journey <em class="icon-arrowRight"></em>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="serviceCardOne">
                                        <h6>Imagine, What If You Could...</h6>
                                        <p>
                                            Transform Every Listing? Showcase properties in ways you never thought
                                            possible,
                                            capturing the heart and imagination of every potential buyer and seller.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="serviceCardOne">
                                        <h6>Sarah's Tale: </h6>
                                        <p>
                                            A beachfront property she couldn't sell was transformed overnight. With
                                            Innov8Agent,
                                            Sarah unearthed the magic of sunset views, sealing a record sale!
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-8 col-md-7 rightSec">
                            <div class="imgSec">
                                <img src="<?php echo base_url(); ?>front-panel/images/service/1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Highlight -->
<section class="serviceTwo py-60 bgImg"
    style="background-image:url(<?php echo base_url(); ?>front-panel/images/service/bg1.jpg);">
    <div class="container">
        <div class="row gap-y2">
            <div class="col-12 brandSec">
                <div class="imgSec">
                    <img src="<?php echo base_url(); ?>front-panel/images/service/2.jpg" alt="">
                </div>
                <div class="bgBox">
                    <h6 class="text-center">Professional Agents Choose Innov8Agent</h6>
                    <div class="brandSlider">
                        <?php
                        foreach ($prfteams as $prfteam) {
                            if ($prfteam->prfteam_logo != '' && file_exists('uploads/othersfiles/' . $prfteam->prfteam_logo)) {
                                $prfteam_logo = base_url() . 'uploads/othersfiles/' . $prfteam->prfteam_logo;
                            } else {
                                $prfteam_logo = base_url() . 'admin-panel/assets/img/noimage.jpg';
                            }
                            ?>
                            <img src="<?php echo $prfteam_logo; ?>" alt="">
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-12 serviceSec">
                <div class="sectionTitle">
                    <div class="row align-items-center gap-y1">
                        <div class="col-lg-6 col-md-8">
                            <h6>
                                <em class="icon-arrowBottomRight"></em> Innov8Agent
                            </h6>
                            <h1 class="titleL">
                                Elevating Real Estate <span>Smart AI Solutions!</span>
                            </h1>
                            <p>
                                Step into the future of real estate with Innov8Agent, where our exclusive AI-driven
                                capabilities transform the way you do business. Designed specifically for ambitious real
                                estate agents and brokers, our platform empowers you with a suite of revolutionary
                                tools:
                            </p>
                        </div>
                        <div class="col-lg-3 col-md-4 offset-lg-3 text-start text-md-end">
                            <a href="#" class="btn btnPrimary style2">Explore All Features</a>
                        </div>
                    </div>
                </div>
                <div class="serviceSliderOne">
                    <div class="serviceCardTwo">
                        <span>
                            <em class="icon-eye"></em>
                        </span>
                        <h6>
                            Property Visualization
                            <em class="icon-arrowRight"></em>
                        </h6>
                        <p>
                            Enhance your property images, making them more captivating and appealing.
                        </p>
                    </div>
                    <div class="serviceCardTwo">
                        <span>
                            <em class="icon-pencil"></em>
                        </span>
                        <h6>
                            Content Creation
                            <em class="icon-arrowRight"></em>
                        </h6>
                        <p>
                            From listing descriptions to promotional property content, let Innov8Agent craft compelling
                            narratives for you.
                        </p>
                    </div>
                    <div class="serviceCardTwo">
                        <span>
                            <em class="icon-globeSearch"></em>
                        </span>
                        <h6>
                            SEO Rich Content
                            <em class="icon-arrowRight"></em>
                        </h6>
                        <p>
                            Drive new business with SEO-optimized content for social posts, blogs, and videos.
                        </p>
                    </div>
                    <div class="serviceCardTwo">
                        <span>
                            <em class="icon-chart"></em>
                        </span>
                        <h6>
                            Intelligent Analyses
                            <em class="icon-arrowRight"></em>
                        </h6>
                        <p>
                            Stay ahead with competitor reports, market trends, and insightful SWOT analyses.
                        </p>
                    </div>
                    <div class="serviceCardTwo">
                        <span>
                            <em class="icon-mic"></em>
                        </span>
                        <h6>
                            Efficient Outreach
                            <em class="icon-arrowRight"></em>
                        </h6>
                        <p>
                            Draft impactful emails, text messages, proposals, and campaigns that convert.
                        </p>
                    </div>

                    <div class="serviceCardTwo">
                        <span>
                            <em class="icon-eye"></em>
                        </span>
                        <h6>
                            Captivating Content
                            <em class="icon-arrowRight"></em>
                        </h6>
                        <p>
                            Generate captivating listings and marketing materials effortlessly.
                        </p>
                    </div>
                    <div class="serviceCardTwo">
                        <span>
                            <em class="icon-pencil"></em>
                        </span>
                        <h6>
                            Business Mastery
                            <em class="icon-arrowRight"></em>
                        </h6>
                        <p>
                            From scheduling to client communication, our platform optimizes every aspect of your
                            business.
                        </p>
                    </div>
                    <div class="serviceCardTwo">
                        <span>
                            <em class="icon-globeSearch"></em>
                        </span>
                        <h6>
                            Social Engagement
                            <em class="icon-arrowRight"></em>
                        </h6>
                        <p>
                            Analyze social trends and engagement patterns, helping you create impactful, targeted
                            campaigns that connect on a deeper level.
                        </p>
                    </div>
                    <div class="serviceCardTwo">
                        <span>
                            <em class="icon-chart"></em>
                        </span>
                        <h6>
                            Lead Closing
                            <em class="icon-arrowRight"></em>
                        </h6>
                        <p>
                            Insights and strategies to effectively nurture and convert leads, boosting your closing
                            rates like never before.
                        </p>
                    </div>
                    <div class="serviceCardTwo">
                        <span>
                            <em class="icon-mic"></em>
                        </span>
                        <h6>
                            Client Enhancement
                            <em class="icon-arrowRight"></em>
                        </h6>
                        <p>
                            Elevate your client interactions. Our sophisticated algorithms help you understand your
                            clients' needs and preferences.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Success Stories -->
<section class="successOne py-60">
    <div class="container">
        <div class="row gap-y2">
            <div class="col-12">
                <div class="sectionTitle">
                    <div class="row align-items-center gap-y1">
                        <div class="col-lg-10 col-md-8">
                            <h6>
                                <em class="icon-arrowBottomRight"></em> Innov8Agent
                            </h6>
                            <h1 class="titleL">
                                Ethical AI for <span>Real Estate Success</span>
                            </h1>
                            <p>
                                At Innov8Agent, we recognize the transformative power of artificial intelligence (AI) in
                                reshaping the real estate industry. Yet, with this potential comes the responsibility to
                                ensure that our AI-driven solutions are designed, deployed, and used ethically. We are
                                committed to advancing the success of real estate agents, ensuring they thrive with less
                                effort while upholding the highest standards of ethical AI.
                            </p>
                        </div>
                        <div class="col-lg-2 col-md-4 text-start text-md-end">
                            <a href="#" class="btn btnPrimary style2">Explore All Features</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="imgSec">
                    <img src="<?php echo base_url(); ?>front-panel/images/success.png" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="detailsSec">
                    <ul>
                        <li class="successCardOne">
                            <span>1</span>
                            <div class="content">
                                <h6>Transparency:</h6>
                                <p>
                                    Understandable AI: We ensure that the AI tools and systems we offer are transparent.
                                    Real estate agents can understand how our solutions work and the kind of results
                                    they can expect.
                                </p>
                                <p>
                                    Clear Communication: Our documentation and user guides are written in plain
                                    language, ensuring that agents, irrespective of their technical background, can use
                                    our tools with confidence.
                                </p>
                            </div>
                        </li>
                        <li class="successCardOne">
                            <span>2</span>
                            <div class="content">
                                <h6>Fairness:</h6>
                                <p>
                                    Bias Mitigation: Real estate markets and clientele are diverse. We strive to ensure
                                    our AI models are free from biases, promoting fairness across all transactions and
                                    interactions.
                                </p>
                                <p>
                                    Inclusive Design: Our AI solutions are developed with a diverse set of data,
                                    representing a wide range of property types, geographies, and client profiles.
                                </p>
                            </div>
                        </li>
                        <li class="successCardOne">
                            <span>3</span>
                            <div class="content">
                                <h6>Privacy & Security:</h6>
                                <p>
                                    Data Protection: We employ state-of-the-art encryption and data protection measures
                                    to safeguard agents' and clients' data.
                                </p>
                                <p>
                                    Consent First: We ensure that any data used to train or fine-tune our AI models is
                                    sourced with explicit consent and is used ethically and responsibly.
                                </p>
                            </div>
                        </li>
                    </ul>
                    <div class="btnSec">
                        <a href="<?php echo base_url(); ?>success-stories" class="btn btnPrimaryBorder style2">View all
                            success stories</a>
                        <a href="<?php echo base_url(); ?>register" class="btn btnPrimary">
                            Sign Up! <em class="icon-arrowRight"></em>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About One -->
<section class="aboutOne py-60 pt-0">
    <div class="container">
        <div class="row align-items-center gap-y2">
            <div class="col-md-6">
                <div class="sectionTitle">
                    <h6>
                        <em class="icon-arrowBottomRight"></em> Innov8Agent
                    </h6>
                    <h1 class="titleL">
                        Revolutionizing <span>Real Estate</span>
                    </h1>
                    <p>Innov8Agent is transforming the workflow of real estate professionals, providing them with a
                        significant edge in a competitive market. By integrating essential tasks like business
                        management and content creation into an AI ecosystem, our platform saves invaluable time,
                        allowing agents to focus on nurturing client relationships and closing deals. The AI-driven
                        communication not only captivates potential buyers and sellers but also establishes agents as
                        thought leaders in their communities. This enhanced reputation drives new business and sets our
                        users apart from their competitors. With Innov8Agent, agents aren't just keeping pace; they're
                        setting the standards in their industry, leading to more efficient operations and successful
                        outcomes.</p>

                    <p>When stacked against competitors, Innov8Agent's offerings are not just comprehensive; they’re
                        transformative.</p>

                    <div class="btnSec">
                        <a href="<?php echo base_url(); ?>register" class="btn btnSecondary">
                            Sign Up Now! <em class="icon-arrowRight"></em>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="imgSec">
                    <img src="<?php echo base_url(); ?>front-panel/images/about/1.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About One -->
<section class="aboutOne py-60 bgImg"
    style="background-image:url(<?php echo base_url(); ?>front-panel/images/about/bg1.jpg);">
    <div class="container">
        <div class="row align-items-center gap-y2">
            <div class="col-md-6">
                <div class="sectionTitle">
                    <h6>
                        <em class="icon-arrowBottomRight"></em> Innov8Agent
                    </h6>
                    <h1 class="titleL">
                        Begin Your <span>Legendary Journey</span>
                    </h1>
                    <p>
                        Join a community of real estate professionals leveraging Innov8Agent for success. Sign up today
                        and redefine your real estate journey.
                    </p>
                    <div class="btnSec">
                        <a href="" class="btn btnPrimaryBorder style2">
                            Start Free Trial
                        </a>
                        <a href="<?php echo base_url(); ?>register" class="btn btnPrimary">
                            Sign Up Now! <em class="icon-arrowRight"></em>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="imgSec">
                    <img src="<?php echo base_url(); ?>front-panel/images/about/2.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About One -->
<section class="aboutOne py-60">
    <div class="container">
        <div class="row gap-y2">
            <div class="col-md-6">
                <div class="videoSec">
                    <video id="videoOne" class="video-js" controls preload="auto"
                        poster="<?php echo base_url(); ?>front-panel/images/about/videoPoster.jpg" data-setup="{}">
                        <source src="<?php echo base_url(); ?>front-panel/images/about/video.mp4" type="video/mp4" />
                        <source src="<?php echo base_url(); ?>front-panel/images/about/video.webm" type="video/mp4" />
                        <p class="vjs-no-js">
                            To view this video please enable JavaScript, and consider upgrading to a
                            web browser that
                            <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                        </p>
                    </video>
                </div>
            </div>
            <div class="col-md-6">
                <div class="sectionTitle">
                    <h6>
                        <em class="icon-arrowBottomRight"></em> About Us
                    </h6>
                    <h1 class="titleL">
                        Why Choose <span>Innov8Agent</span>?
                    </h1>
                    <p>We understand the dynamic world of real estate. Our platform uses the latest AI technologies to
                        offer solutions tailored for real estate professionals, ensuring your listings shine, your
                        outreach resonates, and your deals close faster.</p>
                    <div class="btnSec">
                        <a href="<?php echo base_url(); ?>register" class="btn btnSecondary">
                            Sign Up Now! <em class="icon-arrowRight"></em>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonial -->
<section class="testimonialOne">
    <div class="container">
        <div class="row align-items-center gap-y2">
            <div class="col-md-6">
                <div class="sectionTitle">
                    <img src="<?php echo base_url(); ?>front-panel/images/quote.png" alt="">
                    <h6>
                        <em class="icon-arrowBottomRight"></em> Testimonials
                    </h6>
                    <h1 class="titleL">
                        What Our <span>Users Say</span>
                    </h1>
                    <p>
                        Hear firsthand the transformative experiences of real estate professionals who have embraced
                        Innov8Agent. Our users are not just clients; they are our success stories. In their own words,
                        learn how our platform has redefined their workflow, enhanced client relationships, and
                        propelled their careers to new heights.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="sliderSec">
                    <?php if (count($left_testimonials) > 0) { ?>
                        <div class="boxOne">
                            <div class="testimonialList">
                                <?php
                                foreach ($left_testimonials as $left_testimonial) {
                                    if ($left_testimonial->testimonialsimage != '' && file_exists('uploads/testimonials/' . $left_testimonial->testimonialsimage)) {
                                        $testimonialsimage = base_url() . 'uploads/testimonials/' . $left_testimonial->testimonialsimage;
                                    } else {
                                        $testimonialsimage = base_url() . 'admin-panel/assets/img/profiles/avatar.jpg';
                                    }
                                    ?>
                                    <div class="testimonialCardOne">
                                        <div class="avatar">
                                            <img src="<?php echo $testimonialsimage; ?>"
                                                alt="<?php echo $left_testimonial->testimonialsby; ?>">
                                            <div class="name">
                                                <h6>-
                                                    <?php echo $left_testimonial->testimonialsby; ?>
                                                </h6>
                                                <span>
                                                    <?php echo $left_testimonial->testimonialstype; ?>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="details">
                                            <p>
                                                <?php echo stripslashes($left_testimonial->testimonialsdesc); ?>
                                            </p>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>

                    <?php if (count($right_testimonials) > 0) { ?>
                        <div class="boxTwo">
                            <div class="testimonialList">
                                <?php
                                foreach ($right_testimonials as $right_testimonial) {
                                    if ($right_testimonial->testimonialsimage != '' && file_exists('uploads/testimonials/' . $right_testimonial->testimonialsimage)) {
                                        $right_testimonialsimage = base_url() . 'uploads/testimonials/' . $right_testimonial->testimonialsimage;
                                    } else {
                                        $right_testimonialsimage = base_url() . 'admin-panel/assets/img/profiles/avatar.jpg';
                                    }
                                    ?>
                                    <div class="testimonialCardOne">
                                        <div class="avatar">
                                            <img src="<?php echo $right_testimonialsimage; ?>"
                                                alt="<?php echo $right_testimonial->testimonialsby; ?>">
                                            <div class="name">
                                                <h6>-
                                                    <?php echo $right_testimonial->testimonialsby; ?>
                                                </h6>
                                                <span>
                                                    <?php echo $right_testimonial->testimonialstype; ?>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="details">
                                            <p>
                                                <?php echo stripslashes($right_testimonial->testimonialsdesc); ?>
                                            </p>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Price -->
<section class="priceOne py-60 bgImg"
    style="background-image:url(<?php echo base_url(); ?>front-panel/images/price/bg1.jpg);">
    <div class="container">
        <div class="row gap-y2">
            <div class="col-12 text-center">
                <div class="sectionTitle">
                    <h6>
                        <em class="icon-arrowBottomRight"></em> Pricing & Plans
                    </h6>
                    <h1 class="titleL">
                        Flexible <span>Subscriptions</span> Tailored for You
                    </h1>
                    <p>
                        Monthly and Annual plans are available. Opt for an annual payment and get a 20% discount!
                    </p>

                    <p><strong>Free Trial: 7 Days</strong></p>
                    <div class="planSwitch">
                        <span>Monthly</span>
                        <label class="toggleSwitch">
                            <input type="checkbox" name="annual_subs" id="annual_subs" value="Y">
                            <span class="slider"></span>
                        </label>
                        <span>Annually</span>
                    </div>
                </div>
            </div>

            <div class="col-12">
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
                                    $
                                    <?php echo $subscriptionprice['basic_price']; ?> <small>/month</small>
                                </h1>
                            </div>
                            <div class="detailsSec">
                                <h6>Features:</h6>
                                <ul>
                                    <li>
                                        <b>
                                            <i class="icon-check"></i> Embrace the Future of Real Estate with Agent
                                            Essentials:
                                        </b> At just $24 a month, Agent Essentials is your gateway to revolutionizing
                                        property marketing and eases you into an AI assistant. This plan is meticulously
                                        crafted to cater to the dynamic needs of modern real estate professionals.
                                    </li>
                                    <li>
                                        <b>
                                            <i class="icon-check"></i> AI Content Creation:
                                        </b> Enjoy the freedom of creating 100 pieces of full-form
                                        content. Everything from marketing messages and newsletters to social media
                                        posts and blogs. Our AI-driven platform delivers content that captivates and
                                        converts.
                                    </li>
                                    <li>
                                        <b>
                                            <i class="icon-check"></i> AI-Powered Property Descriptions:
                                        </b> Generate up to 50 captivating property descriptions monthly. Our advanced
                                        AI algorithms ensure each piece is unique, engaging, and tailored to showcase
                                        the best aspects of your properties.
                                    </li>
                                    <li>
                                        <b>
                                            <i class="icon-check"></i> SEO Starter:
                                        </b> Propel your online presence with optimization for up to 50 content pieces.
                                        Our SEO strategies are tailored to enhance your visibility, driving more traffic
                                        to your listings.
                                    </li>
                                    <li>
                                        <b>
                                            <i class="icon-check"></i> Intelligence Reports:
                                        </b> Stay ahead of the competition with monthly access to 2 comprehensive
                                        competitor or market reports. Gain insights into market trends and strategies to
                                        refine your approach.
                                    </li>

                                    <li>
                                        <b>
                                            <i class="icon-check"></i> Professional Email Outreach:
                                        </b> Effortlessly draft up to 25 polished emails for your listings and
                                        campaigns. Our templates are designed to engage and convert leads.
                                    </li>

                                    <li>
                                        <b>
                                            <i class="icon-check"></i> Reliable Support:
                                        </b> Experience peace of mind with our 24/7 email support. Our dedicated team
                                        guarantees a response within 48 hours, ensuring your queries are promptly
                                        addressed. SEO Keywords: Real Estate AI, Property Marketing, Image Enhancement,
                                        Real Estate SEO, Competitor Analysis, Professional Email Templates.
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
                                    $
                                    <?php echo $subscriptionprice['premium_price']; ?>
                                    <small>/month</small>
                                </h1>
                            </div>
                            <div class="detailsSec">
                                <h6>Features:</h6>
                                <ul>
                                    <li>
                                        <b>
                                            <i class="icon-check"></i> Elevate Your Real Estate Game with Agent
                                            Advantage:
                                        </b> For a modest $34 per month (the best price in the industry), the Agent
                                        Advantage plan offers an unparalleled suite of tools for the ambitious real
                                        estate professional.
                                    </li>
                                    <li>
                                        <b>
                                            <i class="icon-check"></i> Unlimited AI Content Creation:
                                        </b> Enjoy 250 pieces of content created to drive more business. Our AI-driven
                                        content is not only informative and engaging but also optimized for search
                                        engines.
                                    </li>
                                    <li>
                                        <b>
                                            <i class="icon-check"></i> Advanced Visualization:
                                        </b> Elevate up to 50 images including property images, realistic virtual
                                        staging, and visualizations of potential renovations or improvements. With our
                                        state-of-the-art image enhancement tools, the sky is the limit. Make each
                                        listing a visual masterpiece that stands out in the market.
                                    </li>
                                    <li>
                                        <b>
                                            <i class="icon-check"></i> SEO Pro:
                                        </b> Take your online ranking to the next level by optimizing up to 30 pieces of
                                        content. Our advanced AI capabilities redefine SEO strategies. Innov8Agent's AI
                                        excels in understanding search intent. It can accurately interpret the nuances
                                        of search queries, delivering more relevant results than ever before. This
                                        feature surpasses the other tools SEO methods, marking a significant leap in
                                        search technology effectiveness.
                                    </li>
                                    <li>
                                        <b>
                                            <i class="icon-check"></i> Comprehensive Intelligence Suite:
                                        </b> Gain weekly insights with competitor reports, SWOT analyses, and market
                                        trends. Stay informed and ahead in your industry.
                                    </li>
                                    <li>
                                        <b>
                                            <i class="icon-check"></i> Extensive Email Outreach:
                                        </b> Craft 50 professional email drafts, complete with 5 targeted retargeting
                                        campaigns. Engage your audience effectively and increase conversions.
                                    </li>
                                    <li>
                                        <b>
                                            <i class="icon-check"></i> Priority Support:
                                        </b> Benefit from our round-the-clock email and chat support with responses
                                        guaranteed within 24 hours.
                                    </li>

                                    <li>
                                        <b>
                                            <i class="icon-check"></i> Exclusive Webinars:
                                        </b> Stay informed with monthly webinars focused on leveraging AI in real
                                        estate. Gain valuable insights and stay ahead of the curve.
                                    </li>

                                    <li>
                                        <b>
                                            <i class="icon-check"></i> Exclusive Offers:
                                        </b> Enjoy periodic discounts on our newest features and services, keeping you
                                        ahead with the latest in real estate marketing technology.
                                    </li>

                                    <li>
                                        <b>
                                            <i class="icon-check"></i> SEO Keywords:
                                        </b> Unlimited Property Descriptions, Real Estate Visualization, Advanced SEO
                                        for Real Estate, Market Intelligence, Email Marketing in Real Estate, AI in Real
                                        Estate.
                                    </li>
                                </ul>

                            </div>
                            <div class="btnSec">
                                <a href="javascript:void(0)" onclick="buySubscription('premium')"
                                    class="btn btnPrimary">
                                    Subscribe<em class="icon-arrowRight"></em>
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
                                    $
                                    <?php echo $subscriptionprice['elite_price']; ?>
                                    <small>/month</small>
                                </h1>
                            </div>
                            <div class="detailsSec">
                                <h6>Features:</h6>
                                <ul>
                                    <li>
                                        <b>
                                            <i class="icon-check"></i> Achieve the Pinnacle of Real Estate Success with
                                            Agent Excellence:
                                        </b> At $54 per month, the Agent Excellence plan is the epitome of
                                        high-end real estate marketing services.
                                    </li>
                                    <li>
                                        <b>
                                            <i class="icon-check"></i> All-Inclusive Advantage Features:
                                        </b> Enjoy unrestricted access to all features of the Advantage Plan.
                                    </li>
                                    <li>
                                        <b>
                                            <i class="icon-check"></i> Unlimited AI Content Creation:
                                        </b> Enjoy the freedom of creating limitless content creation.
                                    </li>
                                    <li>
                                        <b>
                                            <i class="icon-check"></i> Premium Visualization Tools:
                                        </b> Access our premium suite of image enhancement tools for unparalleled visual
                                        appeal.
                                    </li>
                                    <li>
                                        <b>
                                            <i class="icon-check"></i> SEO Masterclass:
                                        </b> Receive personalized content optimization strategies with monthly
                                        suggestions to ensure you remain at the forefront of search engine rankings and
                                        top of mind for prospective clients.
                                    </li>
                                    <li>
                                        <b>
                                            <i class="icon-check"></i> Deep Intelligence Analysis:
                                        </b> Delve into the market with daily in-depth analyses, demographic profiles,
                                        and property demand forecasts with a click of a button.
                                    </li>
                                    <li>
                                        <b>
                                            <i class="icon-check"></i> Customized Email Campaigns:
                                        </b> Benefit from personalized email campaigns tailored by AI to resonate with
                                        your specific audience.
                                    </li>

                                    <li>
                                        <b>
                                            <i class="icon-check"></i> Priority Plus Support:
                                        </b> Experience our most dedicated support level, including immediate response
                                        times and monthly system optimization consultations.
                                    </li>

                                    <li>
                                        <b>
                                            <i class="icon-check"></i> Exclusive Updates:
                                        </b> Enjoy our newest features and services FIRST and FREE! Stay ahead with the
                                        latest in real estate marketing technology, content creation, image
                                        enhancements, and key business strategies.
                                    </li>

                                    <li>
                                        <b>
                                            <i class="icon-check"></i> SEO Keywords:
                                        </b> Premium Real Estate Marketing, Advanced Visualization, Personalized SEO
                                        Strategies, Market Analysis Real Estate, Custom Email Campaigns, Premium Real
                                        Estate Services.
                                    </li>
                                </ul>

                            </div>
                            <div class="btnSec">
                                <a href="javascript:void(0)" onclick="buySubscription('elite')" class="btn btnPrimary">
                                    Subscribe<em class="icon-arrowRight"></em>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-12 offset-md-2 priceSecure">
                <div class="iconText">
                    <em class="icon-reload"></em> Business Plan for teams: Contact for custom pricing <a
                        href="mailto:business@innov8agent.com">(business@innov8agent.com)</a>
                </div>
                <div class="iconText">
                    <em class="icon-reload"></em> 7-day Risk-Free Cancelation
                </div>
                <div class="iconText">
                    <em class="icon-certified"></em> Integrated with PayPal for a seamless & secure transaction
                    experience.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog -->
<section class="blogOne py-60">
    <div class="container">
        <div class="row gap-y2">
            <div class="col-lg-8 col-md-10 col-12">
                <div class="sectionTitle">
                    <h6>
                        <em class="icon-arrowBottomRight"></em> Innov8Agent
                    </h6>
                    <h1>
                        Don't Just List Properties. Create Real Estate Legacies with <span>Innov8Agent</span>.
                    </h1>
                </div>
            </div>
            <div class="col-12">
                <div class="row gap-y1">
                    <?php
                    if (!empty($posts)) {
                        foreach ($posts as $post) {
                            $author_id = $post->author;
                            $featured_media_id = $post->featured_media;

                            // Fetching author information
                            $author_info_url = $post->_links->author[0]->href;
                            $author_response = file_get_contents($author_info_url);
                            $author_data = json_decode($author_response);
                            $author_name = $author_data->name;

                            // Fetching featured image URL
                            $featured_media_url = $post->_links->{'wp:featuredmedia'}[0]->href;
                            $featured_media_response = file_get_contents($featured_media_url);
                            $featured_media_data = json_decode($featured_media_response);
                            $featured_image_url = $featured_media_data->source_url; // Assuming 'source_url' contains the image URL
                    
                            // Your HTML output
                            ?>
                            <div class="col-md-4">
                                <a href="<?php echo $post->link; ?>" class="blogCardOne">
                                    <img src="<?php echo $featured_image_url; ?>" alt="Blog Image">
                                    <div class="detailsSec">
                                        <span>
                                            <?php echo $author_name; ?> |
                                            <?php echo date("M j, Y", strtotime($post->date)); ?>
                                        </span>
                                        <h5>
                                            <?php echo $post->title->rendered; ?>
                                        </h5>
                                    </div>
                                </a>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!--  Press -->
<section class="pressOne py-40">
    <div class="container">
        <div class="row div col-12">
            <ul>
                <li>
                    <img src="<?php echo base_url(); ?>front-panel/images/press/1.png" alt="">
                </li>
                <li>
                    <img src="<?php echo base_url(); ?>front-panel/images/press/2.png" alt="">
                </li>
                <li>
                    <img src="<?php echo base_url(); ?>front-panel/images/press/3.png" alt="">
                </li>
                <li>
                    <img src="<?php echo base_url(); ?>front-panel/images/press/4.png" alt="">
                </li>
                <li>
                    <img src="<?php echo base_url(); ?>front-panel/images/press/5.png" alt="">
                </li>
                <li>
                    <img src="<?php echo base_url(); ?>front-panel/images/press/6.png" alt="">
                </li>
                <li>
                    <img src="<?php echo base_url(); ?>front-panel/images/press/7.png" alt="">
                </li>
                <li>
                    <img src="<?php echo base_url(); ?>front-panel/images/press/8.png" alt="">
                </li>
                <li>
                    <img src="<?php echo base_url(); ?>front-panel/images/press/9.png" alt="">
                </li>
                <li>
                    <img src="<?php echo base_url(); ?>front-panel/images/press/10.png" alt="">
                </li>
                <li>
                    <img src="<?php echo base_url(); ?>front-panel/images/press/11.png" alt="">
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- Faq -->
<section class="faqOne py-60">
    <div class="container">
        <div class="row gap-y2">
            <div class="col-md-6">
                <div class="sectionTitle">
                    <h6>
                        <em class="icon-arrowBottomRight"></em> FAQ
                    </h6>
                    <h1 class="titleL">
                        Got Questions?
                    </h1>
                    <p>
                        Find answers to commonly asked questions about how our platform can help you.
                    </p>
                    <div class="btnSec">
                        <a href="<?php echo base_url(); ?>FAQ" class="btn btnPrimary">
                            View all FAQs <em class="icon-arrowRight"></em>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="accordion" id="faqAccordian">
                    <?php $f = 1;
                    foreach ($faqs as $faq) { ?>
                        <div class="accordion-item faqItem">
                            <h6 class="accordion-header" id="faq-<?php echo $f; ?>">
                                <button class="accordion-button <?php if ($f > 1) {
                                    echo "collapsed";
                                } ?>" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse<?php echo $f; ?>" aria-expanded="<?php if ($f == 1) {
                                           echo "true";
                                       } else {
                                           echo "false";
                                       } ?>" aria-controls="collapse<?php echo $f; ?>">
                                    <?php echo stripslashes($faq->faq_question); ?>
                                </button>
                            </h6>

                            <div id="collapse<?php echo $f; ?>" class="accordion-collapse collapse <?php if ($f == 1) {
                                   echo "show";
                               } ?>" aria-labelledby="faq-<?php echo $f; ?>" data-bs-parent="#faqAccordian">
                                <div class="accordion-body">
                                    <p>
                                        <?php echo stripslashes($faq->faq_answer); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php $f++;
                    } ?>
                </div>

            </div>
        </div>
    </div>
</section>

<?php include 'include/main-footer.php'; ?>

<?php include 'include/footer.php'; ?>

<script>
    $(document).ready(function () {
        // Function to handle checkbox change
        $('#annual_subs').change(function () {
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

    function buySubscription(val) {
        <?php
        if (isset($_SESSION['member_id']) && $_SESSION['member_id'] != '') {
            $current_date = current_date();
            $memberpayment = memberPayment($_SESSION['member_id']);
            $results = memberInformation($_SESSION['member_id']);
            $payment_status = $results[0]->payment_status;
            //$subscription_type = $results[0]->subscription_type;
            $end_date = $results[0]->end_date;
            ?>
            <?php if ($current_date <= $end_date && $payment_status == 'Y') { ?>
                window.location.href = '<?php echo base_url(); ?>myaccount';
            <?php } else { ?>
                if ($('#annual_subs').is(':checked')) {
                    window.location.href = '<?php echo base_url() ?>buysubscribe/' + val + '/annually';
                } else {
                    window.location.href = '<?php echo base_url() ?>buysubscribe/' + val + '/monthly';
                }
            <?php } ?>
        <?php } else { ?>
            window.location.href = '<?php echo base_url(); ?>login';
        <?php } ?>
    }
</script>

</body>

</html>