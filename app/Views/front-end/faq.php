<?php $pagename = 'faq';
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
                    <h3>All FAQs</h3>
                    <h1 class="titleL">&nbsp;</h1>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Testimonial Section -->
<section class="faqOne py-60">
    <div class="container">
        <div class="row gap-y2">
            <div class="col-lg-8 col-md-10 col-12 offset-lg-2 offset-md-1">
                <div class="accordion" id="faqAccordian">
                    <?php $f = 1;
                    foreach ($faqs as $faq) { ?>
                        <div class="accordion-item faqItem px-faq">
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