<?php $pagename = 'compare'; include 'include/header.php'; ?>

<?php include 'include/main-header.php'; 
$wordpressApiUrl = 'https://innov8agent.com/blog/wp-json/wp/v2/posts?per_page=3';
$ch = curl_init($wordpressApiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$posts = json_decode($response);

if($hwmarketing[0]->cms_image!='' && file_exists('uploads/othersfiles/'.$hwmarketing[0]->cms_image))
{
	$marketing_image = base_url().'uploads/othersfiles/'.$hwmarketing[0]->cms_image;
}
else
{
	$marketing_image = base_url().'admin-panel/assets/img/noimage.jpg';
}
?>

<!-- Hero Banner -->
<section class="herocompare">
    <div class="container">
        <div class="row gap-y2">
            <div class="col-md-8 col-12 offset-md-2 text-center">
                <div class="sectionTitle">
                    <div class="compareLogo">
                        <img src="<?php echo base_url(); ?>front-panel/images/logo/iconColor.svg" alt="">
                        <span>vs.</span>
                        <img src="<?php echo base_url(); ?>front-panel/images/icons/chatgpt.svg" alt="">
                    </div>
                    <h1>Innov8Agent vs. ChatGPT: Which is Right For You? [2024]</h1>
                    <p>
                        Let Innov8Agent supercharge your marketing with on-brand content creation that scales.
                    </p>
                    <div class="btnSec">
                        <a href="<?php echo base_url(); ?>register" class="btn btnPrimaryBorder style2">Start Free Trial</a>
                        <a href="<?php echo base_url(); ?>register" class="btn btnPrimary">
                            Sign Up! <em class="icon-arrowRight"></em>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-8 col-12 offset-lg-3 offset-md-2 text-center">
                <div class="videoSec">
                    <video id="videoOne" class="video-js" controls preload="auto"
                        poster="<?php echo base_url(); ?>front-panel/images/compare/videoPoster.jpg" data-setup="{}">
                        <source src="<?php echo base_url(); ?>front-panel/images/compare/video.mp4" type="video/mp4" />
                        <source src="<?php echo base_url(); ?>front-panel/images/compare/video.webm" type="video/webm" />
                        <p class="vjs-no-js">
                            To view this video please enable JavaScript, and consider upgrading to a
                            web browser that
                            <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                        </p>
                    </video>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Brand -->
<section class="brandPromo py-60 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h6>Professional Agents & Brokers Choose Innov8Agent</h6>
                <div class="brandSlider">
                    <?php 
					foreach ($prfteams as $prfteam) 
					{
						if($prfteam->prfteam_logo!='' && file_exists('uploads/othersfiles/'.$prfteam->prfteam_logo))
						{
							$prfteam_logo = base_url().'uploads/othersfiles/'.$prfteam->prfteam_logo;
						}
						else
						{
							$prfteam_logo = base_url().'admin-panel/assets/img/noimage.jpg';
						}
					?>
					<img src="<?php echo $prfteam_logo; ?>" alt="">
					<?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Compare One -->
<section class="compareOne py-60">
    <div class="container">
        <div class="row gap-y2">
            <div class="col-lg-8 col-md-10 col-12 offset-lg-2 offset-md-1 text-center">
                <div class="sectionTitle">
                    <h6>
                        <em class="icon-arrowBottomRight"></em> Innov8Agent
                    </h6>
                    <h1>
                        Innov8Agent is the <span>Platform Built for the Real Estate Business</span>
                    </h1>
                    <p>
                        Recent Innov8Agent advancements in generative AI and Large Language Models (LLMs) have unlocked productivity benefits that agents only used to dream of. Now it’s a reality!
                    </p>
                </div>
            </div>
            <div class="col-12">
                <div class="row gap-y1">
                    <div class="col-md-4">
                        <div class="compareCardOne">
                            <em class="icon-fingerPrint"></em>
                            <div class="details">
                                <h6>AI in your brand voice, not generic content that the other systems offer you</h6>
                                <p>
                                    Innov8Agent becomes trained on your brand’s tone, style, and key facts about your business, so
                                    you can create on-brand content as scale.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="compareCardOne">
                            <em class="icon-bookmark"></em>
                            <div class="details">
                                <h6>Up-to-date, accurate information</h6>
                                <p>
                                    You need content to be fresh and accurate, but other platforms use models trained on
                                    old
                                    data. Innov8Agent's AI engine pulls up-to-date information and data straight from Google and Bing.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="compareCardOne">
                            <em class="icon-thumbsUp"></em>
                            <div class="details">
                                <h6>Guaranteed 99.99% uptime</h6>
                                <p>
                                    Platforms can’t afford for their features to go down when their API provider goes
                                    down.
                                    Innov8Agent has 99.99% uptime by using our proprietary AI engine, increasing performance
                                    and
                                    reliability.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Compare Two -->
<section class="compareTwo">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="box">
                    <h3>What is ChatGPT?</h3>
                    <div>
                        <p>
                            ChatGPT is a natural language processing tool made by OpenAI that allows you to have
                            human-like
                            conversations with an AI chatbot. The GPT-3-based language model helps users with all sorts
                            of
                            tasks, like:
                        </p>
                        <ul class="menuListOne dotList">
                            <li>Answering simple, Google-style questions</li>
                            <li>Writing copy</li>
                            <li>Generating code</li>
                            <li>Writing creative stories</li>
                        </ul>
                    </div>
                    <h3>Jasper vs ChatGPT</h3>
                    <div>
                        <p>
                            "Vs" is not the right mindset here. Both are great conversational AI tools that can be used
                            for
                            different purposes.
                        </p>
                        <p>
                            OpenAI is an incredibly powerful source and partner to Jasper, our AI content platform.
                            Still,
                            the two do have a few differences.
                        </p>
                    </div>
                    <h3>How Jasper is different from ChatGPT</h3>
                    <div>
                        <p>
                            Like ChatGPT, Jasper offers a best-in-class AI chatbot called Jasper Chat, a new, more
                            conversational way of interacting with generative AI in Jasper. Instead of having to think
                            in
                            commands or strict prompts, you can converse with AI and refine responses with each
                            engagement.
                        </p>
                        <p>
                            OpenAI is a partner of Jasper's and GPT 4 is just one of the language models we use in our
                            proprietary AI engine.
                        </p>
                        <p>
                            Jasper is different from ChatGPT in that it is built for business use cases like marketing,
                            sales, and more. But both interfaces offer a way to make AI much more accessible to the
                            audiences they serve.
                        </p>
                        <p>
                            What OpenAI has created in ChatGPT is nothing short of incredible, but there’s still work to
                            be
                            done with that technology to make AI practical and usable for everyday businesses.
                        </p>
                    </div>
                    <h3>Where ChatGPT ends and we begin is in two key places:</h3>
                    <div>
                        <h5>1. Business Use Cases</h5>
                        <p>
                            First, we tailor learning models for practical use in businesses - building both the
                            interfaces
                            and the original workflows to make AI more accessible for everyday use.
                        </p>
                    </div>
                    <div>
                        <h5>2. Proprietary AI Engine</h5>
                        <p>
                            Second, Jasper's proprietary AI engine offers access to all the best large language models
                            from
                            OpenAI, Google, Anthropic, and others including our own customized model. Our software is
                            able
                            to distinguish the best combination of models for a specific use-case or industry. This
                            intersection and informed selection helps companies avoid over-dependence on any one source
                            and
                            makes outputs better.
                        </p>
                        <p>
                            Open AI helps create proper patterns of words that will generate human language thought in
                            written form but it is entirely generic. Jasper takes that language and tailors it to
                            specific
                            use cases.
                        </p>
                        <p>
                            This is just like how any human needs to learn how to leverage generic language and apply it
                            to
                            specific use cases. Humans learn how to write as children and then learn how to specialize
                            that
                            writing to tasks at hand.
                        </p>
                        <p>
                            Jasper tailors the generic language to the marketing or business use case at hand. With more
                            than 100,000 business users, the outputs you get from Jasper's AI engine will be more
                            relevant
                            to businesses and their customers.
                        </p>
                        <p>
                            Let's take a look at what else Jasper has to offer that ChatGPT doesn't.
                        </p>
                    </div>
                    <iframe src="https://www.youtube.com/embed/xcJtL7QggTI?si=TAJc7FlhVzBP2lH7"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                    <h3>How people are using Jasper Differently than ChatGPT</h3>
                    <div>
                        <p>
                            Jasper's best use-case today is content-forward marketing and sales teams at scaling
                            companies.
                            But the diversity of our user-base is exciting:
                        </p>
                        <ul class="menuListOne dotList">
                            <li>
                                7-year-old “Devon” who wrote a children’s book with Jasper and his mom. The book now
                                sells
                                on amazon and his mom (Chrissy Carol) used it to teach him about building a business.
                            </li>
                            <li>
                                Heads of departments at SentinelOne, Iheartmedia, Morningstar and other companies using
                                Jasper to scale.
                            </li>
                            <li>
                                Marketing agencies using Jasper to adapt their knowledge and lexicon quickly to a wide
                                range
                                of clients enabling them to leap between health industry clients, manufacturing clients,
                                finance and other drastically different fields.
                            </li>
                            <li>
                                Single users with great ideas who struggle to convey them due to language barriers or
                                learning disabilities.
                            </li>
                        </ul>
                    </div>
                    <h3>How does ChatGPT work?</h3>
                    <p>
                        OpenAI used Reinforcement Learning from Human Feedback (RLHF) to teach its language model. With
                        the help of human AI trainers, it was exposed to interactive conversations between humans and
                        virtual assistants, a great way for the model learn how real-life dialogue works.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About One -->
<section class="aboutOne py-60">
    <div class="container">
        <div class="row align-items-center gap-y2">
            <div class="col-md-6">
                <div class="sectionTitle">
                    <h6>
                        <em class="icon-arrowBottomRight"></em> Innov8Agent
                    </h6>
                    <h1>
                        <p>DOML is a digital media agency powered by AI technology providing real time, <a href="#">data-driven insights</a> on your business and audience. The mission of DOML is to create the best experiences for companies through intelligent insights, powerful analytics and <a href="#">strategic execution</a>.</p>
                    </h1>
                    <?php echo stripslashes($hwmarketing[0]->cms_desc); ?>
                    <div class="btnSec">
                        <a href="<?php echo base_url(); ?>success-stories" class="btn btnPrimaryBorder style2">View all success stories</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="imgSec rounded">
                    <img src="<?php echo base_url(); ?>front-panel/images/promo/4.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Compare Two -->
<section class="compareTwo py-60 pt-0">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="box">
                    <h3>What is ChatGPT?</h3>
                    <div>
                        <p>
                            ChatGPT is a natural language processing tool made by OpenAI that allows you to have
                            human-like
                            conversations with an AI chatbot. The GPT-3-based language model helps users with all sorts
                            of
                            tasks, like:
                        </p>
                        <ul class="menuListOne dotList">
                            <li>Answering simple, Google-style questions</li>
                            <li>Writing copy</li>
                            <li>Generating code</li>
                            <li>Writing creative stories</li>
                        </ul>
                    </div>
                    <h3>Jasper vs ChatGPT</h3>
                    <div>
                        <p>
                            "Vs" is not the right mindset here. Both are great conversational AI tools that can be used
                            for
                            different purposes.
                        </p>
                        <p>
                            OpenAI is an incredibly powerful source and partner to Jasper, our AI content platform.
                            Still,
                            the two do have a few differences.
                        </p>
                    </div>
                    <h3>How Jasper is different from ChatGPT</h3>
                    <div>
                        <p>
                            Like ChatGPT, Jasper offers a best-in-class AI chatbot called Jasper Chat, a new, more
                            conversational way of interacting with generative AI in Jasper. Instead of having to think
                            in
                            commands or strict prompts, you can converse with AI and refine responses with each
                            engagement.
                        </p>
                        <p>
                            OpenAI is a partner of Jasper's and GPT 4 is just one of the language models we use in our
                            proprietary AI engine.
                        </p>
                        <p>
                            Jasper is different from ChatGPT in that it is built for business use cases like marketing,
                            sales, and more. But both interfaces offer a way to make AI much more accessible to the
                            audiences they serve.
                        </p>
                        <p>
                            What OpenAI has created in ChatGPT is nothing short of incredible, but there’s still work to
                            be
                            done with that technology to make AI practical and usable for everyday businesses.
                        </p>
                    </div>
                    <h3>Where ChatGPT ends and we begin is in two key places:</h3>
                    <div>
                        <h5>1. Business Use Cases</h5>
                        <p>
                            First, we tailor learning models for practical use in businesses - building both the
                            interfaces
                            and the original workflows to make AI more accessible for everyday use.
                        </p>
                    </div>
                    <div>
                        <h5>2. Proprietary AI Engine</h5>
                        <p>
                            Second, Jasper's proprietary AI engine offers access to all the best large language models
                            from
                            OpenAI, Google, Anthropic, and others including our own customized model. Our software is
                            able
                            to distinguish the best combination of models for a specific use-case or industry. This
                            intersection and informed selection helps companies avoid over-dependence on any one source
                            and
                            makes outputs better.
                        </p>
                        <p>
                            Open AI helps create proper patterns of words that will generate human language thought in
                            written form but it is entirely generic. Jasper takes that language and tailors it to
                            specific
                            use cases.
                        </p>
                        <p>
                            This is just like how any human needs to learn how to leverage generic language and apply it
                            to
                            specific use cases. Humans learn how to write as children and then learn how to specialize
                            that
                            writing to tasks at hand.
                        </p>
                        <p>
                            Jasper tailors the generic language to the marketing or business use case at hand. With more
                            than 100,000 business users, the outputs you get from Jasper's AI engine will be more
                            relevant
                            to businesses and their customers.
                        </p>
                        <p>
                            Let's take a look at what else Jasper has to offer that ChatGPT doesn't.
                        </p>
                    </div>
                    <h3>How people are using Jasper Differently than ChatGPT</h3>
                    <div>
                        <p>
                            Jasper's best use-case today is content-forward marketing and sales teams at scaling
                            companies.
                            But the diversity of our user-base is exciting:
                        </p>
                        <ul class="menuListOne dotList">
                            <li>
                                7-year-old “Devon” who wrote a children’s book with Jasper and his mom. The book now
                                sells
                                on amazon and his mom (Chrissy Carol) used it to teach him about building a business.
                            </li>
                            <li>
                                Heads of departments at SentinelOne, Iheartmedia, Morningstar and other companies using
                                Jasper to scale.
                            </li>
                            <li>
                                Marketing agencies using Jasper to adapt their knowledge and lexicon quickly to a wide
                                range
                                of clients enabling them to leap between health industry clients, manufacturing clients,
                                finance and other drastically different fields.
                            </li>
                            <li>
                                Single users with great ideas who struggle to convey them due to language barriers or
                                learning disabilities.
                            </li>
                        </ul>
                    </div>
                    <h3>How does ChatGPT work?</h3>
                    <p>
                        OpenAI used Reinforcement Learning from Human Feedback (RLHF) to teach its language model. With
                        the help of human AI trainers, it was exposed to interactive conversations between humans and
                        virtual assistants, a great way for the model learn how real-life dialogue works.
                    </p>
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
                        In the fast-paced world of real estate, staying ahead means leveraging the best tools available.
                        Enter Innov8Agent
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="sliderSec">
                	<?php if(count($left_testimonials)>0) { ?>
                    <div class="boxOne">
                        <div class="testimonialList">
                            <?php 
							foreach ($left_testimonials as $left_testimonial) 
							{
								if($left_testimonial->testimonialsimage!='' && file_exists('uploads/testimonials/'.$left_testimonial->testimonialsimage))
								{
									$testimonialsimage = base_url().'uploads/testimonials/'.$left_testimonial->testimonialsimage;
								}
								else
								{
									$testimonialsimage = base_url().'admin-panel/assets/img/profiles/avatar.jpg';
								}
							?>
                            <div class="testimonialCardOne">
                                <div class="avatar">
                                    <img src="<?php echo $testimonialsimage;?>" alt="<?php echo $left_testimonial->testimonialsby;?>">
                                    <div class="name">
                                        <h6>- <?php echo $left_testimonial->testimonialsby;?></h6>
                                        <span><?php echo $left_testimonial->testimonialstype;?></span>
                                    </div>
                                </div>
                                <div class="details">
                                    <p><?php echo stripslashes($left_testimonial->testimonialsdesc);?></p>
                                </div>
                            </div>
                             <?php } ?>
                             
                        </div>
                    </div>
                    <?php } ?>
                    
                    <?php if(count($right_testimonials)>0) { ?>
                    <div class="boxTwo">
                        <div class="testimonialList">
                            <?php 
							foreach ($right_testimonials as $right_testimonial) 
							{
								if($right_testimonial->testimonialsimage!='' && file_exists('uploads/testimonials/'.$right_testimonial->testimonialsimage))
								{
									$right_testimonialsimage = base_url().'uploads/testimonials/'.$right_testimonial->testimonialsimage;
								}
								else
								{
									$right_testimonialsimage = base_url().'admin-panel/assets/img/profiles/avatar.jpg';
								}
							?>
                            <div class="testimonialCardOne">
                                <div class="avatar">
                                    <img src="<?php echo $right_testimonialsimage;?>" alt="<?php echo $right_testimonial->testimonialsby;?>">
                                    <div class="name">
                                        <h6>- <?php echo $right_testimonial->testimonialsby;?></h6>
                                        <span><?php echo $right_testimonial->testimonialstype;?></span>
                                    </div>
                                </div>
                                <div class="details">
                                    <p><?php echo stripslashes($right_testimonial->testimonialsdesc);?></p>
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
                        Don't Just List Properties.Create Real Estate Legacies with <span>Innov8Agent</span>.
                    </h1>
                </div>
            </div>
            <div class="col-12">
                <div class="row gap-y1">
                    <?php
                    if (!empty($posts))
                    {
                    foreach ($posts as $post) 
                    {
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
                    ?>
                    <div class="col-md-4">
                        <a href="<?php echo $post->link; ?>" class="blogCardOne">
                            <img src="<?php echo $featured_image_url; ?>" alt="Blog Image">
                            <div class="detailsSec">
                                <span><?php echo $author_name; ?> | <?php echo date("M j, Y", strtotime($post->date)); ?></span>
                                <h5><?php echo $post->title->rendered; ?></h5>
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

<?php include 'include/main-footer.php'; ?>

<?php include 'include/footer.php'; ?>