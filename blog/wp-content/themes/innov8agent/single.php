<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package innov8agent
 */

get_header();
?>
<?php
while (have_posts()) :
    the_post();

    $read_time_text = get_field("read_time_text");
?>
    <!-- Hero Banner -->
    <section class="heroBlogDetails">
        <div class="container">
            <div class="row align-items-center gap-y2">
                <div class="col-md-7">
                    <div class="sectionTitle">
                        <div class="metaTags">
                        <?php
    $categories = get_the_category(); // Retrieve post categories
    if ($categories) {
        $first_category = $categories[0]->name; // Get the name of the first category
        echo '<span class="border">' . esc_html($first_category) . '</span>';
    }
    ?>
                            <?php if ($read_time_text) { ?>
                                <span><?php echo $read_time_text; ?></span>
                            <?php } ?>
                        </div>
                        <h1 class="titleL"><?php the_title() ?></h1>
                        <p>
                            <?php the_field('short_description'); ?>
                        </p>
                        <div class="avatar">
                            <?php
                            $author_id = get_the_author_meta('ID');
                            $avatar_url = get_avatar_url($author_id, ['size' => 80]); // Adjust size as needed
                            ?>
                            <img src="<?php echo esc_url($avatar_url); ?>" alt="<?php the_author(); ?>'s Avatar">
                            <div class="name">
                                <h6><?php the_author(); ?></h6>
                                <span>Published <?php echo get_the_date('M j, Y'); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $banner_image = get_field('banner_image');
                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                if ($banner_image) {
                ?>
                    <div class="col-md-5">
                        <div class="imgSec">
                            <?php echo wp_get_attachment_image($banner_image, $size); ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php
    $table_of_contents = get_field("table_of_contents");
    $introduction = get_field("introduction");
    $software_and_tools = get_field("software_and_tools");
    $other_resources = get_field("other_resources");
    $conclusion = get_field("conclusion");
    ?>
    <!-- Blog Details -->
    <section class="blogDetailsOne py-60 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="leftSec">
                        <ul class="menuListOne">
                            <?php if ($table_of_contents) { ?>
                                <li><a href="#tableContent">Table of contents</a></li>
                            <?php } ?>
                            <?php if ($introduction) { ?>
                                <li><a href="#introduction">Introduction</a></li>
                            <?php } ?>
                            <?php if ($software_and_tools) { ?>
                                <li><a href="#softwareTools">Software and tools</a></li>
                            <?php } ?>
                            <?php if ($other_resources) { ?>
                                <li><a href="#otherResources">Other resources</a></li>
                            <?php } ?>
                            <?php if ($conclusion) { ?>
                                <li><a href="#conclusion">Conclusion</a></li>
                            <?php } ?>
                        </ul>
                        <hr class="m-0">
                        <ul class="socialList">
                            <li><a href="#"><em class="fab fa-facebook-f"></em></a></li>
                            <li><a href="#"><em class="fab fa-instagram"></em></a></li>
                            <li><a href="#"><em class="fab fa-x-twitter"></em></a></li>
                            <li><a href="#"><em class="fab fa-linkedin"></em></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="rightSec">
                        <?php if ($table_of_contents) { ?>
                            <div id="tableContent">
                                <?php echo $table_of_contents; ?>
                            </div>
                        <?php } ?>
                        <?php if ($introduction) { ?>
                            <div id="introduction">
                                <h3>Introduction</h3>
                                <?php echo $introduction; ?>
                            </div>
                        <?php } ?>
                        <?php if ($software_and_tools) { ?>
                            <div id="softwareTools">
                                <h4>Software and tools</h4>
                                <?php echo $software_and_tools; ?>
                            </div>
                        <?php } ?>
                        <?php if ($other_resources) { ?>
                            <div id="otherResources">
                                <h4>Other resources</h4>
                                <?php echo $other_resources; ?>
                            </div>
                        <?php } ?>

                        <div id="conclusion">
                            <?php if ($conclusion) { ?>
                                <div class="bgCard">
                                    <h3>Conclusion</h3>
                                    <?php echo $conclusion; ?>
                                </div>
                            <?php } ?>
                            <div class="shortcode">
                                <?php
                                $post_tags = get_the_tags(); // Retrieve post tags
                                if ($post_tags) {
                                    $count = 0;
                                    foreach ($post_tags as $tag) {
                                        $count++;
                                        $tag_class = ($count % 2 === 0) ? 'blue' : 'geen'; // Alternating classes based on even/odd count
                                        echo '<a href="' . esc_url(get_tag_link($tag->term_id)) . '" class="tagLink ' . $tag_class . '">' . esc_html($tag->name) . '</a>';
                                    }
                                }
                                ?>
                            </div>

                            <ul class="socialList">
                                <li><a href="#"><em class="fab fa-facebook-f"></em></a></li>
                                <li><a href="#"><em class="fab fa-instagram"></em></a></li>
                                <li><a href="#"><em class="fab fa-x-twitter"></em></a></li>
                                <li><a href="#"><em class="fab fa-linkedin"></em></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog -->
    <section class="blogRecent py-60">
        <div class="container">
            <div class="row gap-y2">
                <div class="col-12">
                    <div class="sectionTitle">
                        <div class="row gap-y1">
                            <div class="col-lg-6 col-md-8">
                                <h6>
                                    <em class="icon-arrowBottomRight"></em> Innov8Agent
                                </h6>
                                <h1>Latest posts</h1>
                                <p>
                                    Interviews, tips, guides, industry best practices, and news.
                                </p>
                            </div>
                            <div class="col-lg-3 col-md-4 offset-lg-3 text-start text-md-end">
                                <a href="<?php echo $home_url; ?>" class="btn btnPrimary style2">View all posts</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 10,
                    'post_status' => 'publish',
                    'orderby' => 'date',
                    'order' => 'DESC'
                );

                $latest_posts = new WP_Query($args);

                if ($latest_posts->have_posts()) :

                ?>
                    <div class="col-12">
                        <div class="blogSliderOne">
                            <?php while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
                                <a href="<?php the_permalink(); ?>" class="blogCardOne">
                                    <?php the_post_thumbnail('medium'); ?>
                                    <div class="detailsSec">
                                        <span><?php the_author(); ?> | <?php echo get_the_date('M j, Y'); ?></span>
                                        <h5><?php the_title(); ?></h5>
                                    </div>
                                </a>
                            <?php
                            endwhile;
                            wp_reset_postdata();

                            ?>

                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php
endwhile; // End of the loop.
?>

<?php
get_footer();
