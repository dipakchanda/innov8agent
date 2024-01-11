<?php $pagename = 'howitworks'; include 'include/header.php'; ?>

<?php 
include 'include/main-header.php'; 

/*if($hwmarketing[0]->cms_image!='' && file_exists('uploads/othersfiles/'.$hwmarketing[0]->cms_image))
{
	$marketing_image = base_url().'uploads/othersfiles/'.$hwmarketing[0]->cms_image;
}
else
{
	$marketing_image = base_url().'admin-panel/assets/img/noimage.jpg';
}*/

/*if($hwoptimized[0]->cms_image!='' && file_exists('uploads/othersfiles/'.$hwoptimized[0]->cms_image))
{
	$optimized_image = base_url().'uploads/othersfiles/'.$hwoptimized[0]->cms_image;
}
else
{
	$optimized_image = base_url().'admin-panel/assets/img/noimage.jpg';
}*/
?>

<!-- Hero Banner -->
<section class="heroBanner heroPromo bgImg" style="background-image:url(<?php echo base_url(); ?>front-panel/images/promo/bg1.jpg);">
    <div class="container">
        <div class="row gap-y2">
            <div class="col-12 text-center">
                <div class="sectionTitle">
                    <h3>Innov8Agent</h3>
                    <h1 class="titleL">Enhance. Elevate. Innov8.</h1>
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
            <div class="col-12 text-center">
                <div class="imgSec">
                    <img src="<?php echo base_url(); ?>front-panel/images/promo/1.jpg" alt="">
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
                    <h1 class="titleL">
                        Revolutionizing <span>Real Estate</span>
                    </h1>
                    <p>
                        Our vision is to revolutionize the way professional real estate agents target, reach, and engage their leads. You should be spending time on building your business, not chasing new technologies that change every day! Let <b>Innov8Agent</b> take the lead, you focus on servicing your clients!
                    </p>
                    <div class="btnSec">
                        <a href="<?php echo base_url(); ?>success-stories" class="btn btnSecondary style2">
                            View all success stories
                        </a>
                        <a href="<?php echo base_url(); ?>register" class="btn btnPrimary">
                            Sign Up Now! <em class="icon-arrowRight"></em>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="imgSec rounded">
                    <img src="<?php echo base_url(); ?>front-panel/images/promo/2.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Trial -->
<section class="trialOne py-60 pb-0 bgImg" style="background-image:url(<?php echo base_url(); ?>front-panel/images/promo/bg2.jpg);">
    <div class="container">
        <div class="row gap-y2">
            <div class="col-12 text-center">
                <div class="logoSec">
                    <img src="<?php echo base_url(); ?>front-panel/images/logo/logoWhite.svg" alt="">
                </div>
            </div>
            <div class="col-12 text-center">
                <div class="sectionTitle">
                    <h1>7-Day Free Trial</h1>
                </div>
            </div>
            <div class="col-12">
                <div class="freeService">
                    <ul>
                        <li>
                            <em class="icon-check"></em> AI created for Real Estate Agents
                        </li>
                        <li>
                            <em class="icon-check"></em> Supercharged Content Creation
                        </li>
                        <li>
                            <em class="icon-check"></em> Beautiful Listing Image Enhancements
                        </li>
                        <li>
                            <em class="icon-check"></em> Your Voice Enhanced, Not Replaced
                        </li>
                        <li>
                            <em class="icon-check"></em> Ethical AI
                        </li>
                        <li>
                            <em class="icon-check"></em> Emails That Convert
                        </li>
                        <li>
                            <em class="icon-check"></em> Text Messages That Connect
                        </li>
                        <li>
                            <em class="icon-check"></em> Social Media That Engages
                        </li>
                        <li>
                            <em class="icon-check"></em> Continuous Real Estate Learning
                        </li>
                        <li>
                            <em class="icon-check"></em>Innov8Agent’s Exclusive Data Sets
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12">
                <div class="btnSec">
                    <a href="<?php echo base_url(); ?>subscription" class="btn btnPrimary">
                        Start Your Free Trial
                        <em class="icon-arrowRight"></em>
                    </a>
                </div>
            </div>
            <div class="col-12">
                <div class="imgSec">
                    <img src="<?php echo base_url(); ?>front-panel/images/promo/3.png" alt="">
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
                <div class="imgSec rounded">
                    <img src="<?php echo base_url(); ?>front-panel/images/promo/4.jpg" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="sectionTitle">
                    <h6>
                        <em class="icon-arrowBottomRight"></em> Innov8Agent
                    </h6>
                    <h1 class="titleL">
                        AI Real Estate <span>Marketing</span>
                    </h1>
                    <p>DOML is a digital media agency powered by AI technology providing real time, <a href="#">data-driven insights</a> on your business and audience. The mission of DOML is to create the best experiences for companies through intelligent insights, powerful analytics and <a href="#">strategic execution</a>.</p>

                    <div class="btnSec">
                        <a href="" class="btn btnSecondary style2">
                            View all success stories
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

<!-- Brand -->
<section class="brandPromo py-60 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h6>Professionals & teams choose Openup</h6>
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

<!-- About One -->
<section class="aboutOne py-60">
    <div class="container">
        <div class="row align-items-center gap-y2">
            <div class="col-md-6">
                <div class="sectionTitle">
                    <h6>
                        <em class="icon-arrowBottomRight"></em> Innov8Agent
                    </h6>
                    <h1 class="titleL">
                        AI Marketing <span>Optimized Reach</span>
                    </h1>
                    <p>It&#39;s all about getting your message in front of the right audience and creating those valuable <a href="#">relationships</a>. Learn More about how DOML can help you do just that - all with a simple, easy-to-use platform.</p>
                    <div class="btnSec">
                        <a href="" class="btn btnSecondary style2">
                            View all success stories
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="imgSec rounded">
                    <img src="<?php echo base_url(); ?>front-panel/images/promo/5.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'include/main-footer.php'; ?>

<?php include 'include/footer.php'; ?>