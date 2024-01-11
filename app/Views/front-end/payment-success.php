<?php $pagename = 'success' ; include 'include/header.php'; ?>

<?php include 'include/main-header.php'; ?>

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
                        <em class="icon-arrowBottomRight"></em> Payment Success
                    </h6>
                    <h4 class="titleL">
                        Congratulations! Your Payment Has been successfully completed.
                    </h4>
                    <p>
                       Please <a href="<?php echo base_url()?>myaccount">click here</a> to go to myaccount
                    </p>
                    
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

</body>
</html>