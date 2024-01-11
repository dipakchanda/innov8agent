<?php $pagename = 'successstories';
include 'include/header.php'; ?>

<?php
include 'include/main-header.php';
?>

<!-- Hero Banner -->
<section class="heroBanner heroPromo bgImg"
    style="background-image:url(<?php echo base_url(); ?>front-panel/images/promo/bg1.jpg);">
    <div class="container">
        <div class="row gap-y2">
            <div class="col-12 text-center">
                <div class="sectionTitle">
                    <h3>Success Stories</h3>
                    <h1 class="titleL">&nbsp;</h1>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Testimonial Section -->
<section class="testimonialTwo py-60">
    <div class="container">
        <?php if (count($testimonials) > 0): ?>
            <div class="row gap-y1">
                <?php foreach ($testimonials as $left_testimonial): ?>
                    <div class="col-md-4">
                        <?php
                        if ($left_testimonial->testimonialsimage != '' && file_exists('uploads/testimonials/' . $left_testimonial->testimonialsimage)) {
                            $testimonialsimage = base_url() . 'uploads/testimonials/' . $left_testimonial->testimonialsimage;
                        } else {
                            $testimonialsimage = base_url() . 'admin-panel/assets/img/profiles/avatar.jpg';
                        }
                        ?>
                        <div class="testimonialCardOne" onclick="getTestimonialDetails('<?php echo $left_testimonial->testimonials_id; ?>')" style="cursor:pointer"> 
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
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>


<?php include 'include/main-footer.php'; ?>

<?php include 'include/footer.php'; ?>
<script>
function getTestimonialDetails(testimonials_id)
{
 window.location.href="<?php echo base_url(); ?>success-stories-details/"+testimonials_id;
}
</script>