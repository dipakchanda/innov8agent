<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package innov8agent
 */
$site_url = "https://innov8agent.com";
$home_url = "https://innov8agent.com/home";
get_header();

?>

<!-- Hero Banner -->
<section class="heroBanner heroBlog bgImg" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/images/blog/bg1.jpg);">
	<div class="container">
		<div class="row gap-y2">
			<div class="col-lg-6 col-md-8 col-12 offset-lg-3 offset-md-2 text-center">
				<div class="sectionTitle">
					<h3>Innov8Agent</h3>
					<h1 class="titleL">Flexible Subscriptions Tailored for You</h1>
					<p>
						Empowering Real Estate Agents with AI-Driven Solutions.
					</p>
					<div class="btnSec">
						<a href="<?php echo $site_url; ?>/login" class="btn btnPrimaryBorder style2">Start Free Trial</a>
						<a href="<?php echo $site_url; ?>/login" class="btn btnPrimary">
							Sign Up! <em class="icon-arrowRight"></em>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Blog -->
<section class="listingBlog py-60">
	<div class="container">
		<div class="row gap-y2">
			<header class="page-header">
				<?php
				the_archive_title('<h1 class="page-title">', '</h1>');
				the_archive_description('<div class="archive-description">', '</div>');
				?>

			</header>
			<?php if (have_posts()) : ?>
				<div class="col-12">

					<div class="row gap-y1">

						<?php while (have_posts()) : the_post(); ?>

							<div class="col-md-4">
								<a href="<?php the_permalink() ?>" class="blogCardOne">
									<?php the_post_thumbnail('medium_large'); ?>
									<div class="detailsSec">
										<span><?php the_author(); ?> | <?php echo get_the_date('M j, Y'); ?></span>
										<h5><?php the_title(); ?></h5>
									</div>
								</a>
							</div>

						<?php endwhile; ?>
					</div>
				</div>
				<div class="col-12">
					<div class="paginationSec">
						<nav>
							<?php
							$paged = max(1, get_query_var('paged'));
							$total_pages = $wp_query->max_num_pages;

							echo paginate_links(array(
								'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
								'format' => '?paged=%#%',
								'current' => $paged,
								'total' => $total_pages,
								//'prev_text' => '<em class="icon-arrowLeft"></em> Previous',
								//'next_text' => 'Next <em class="icon-arrowRight"></em>',
								'type' => 'list', // Generates an unordered list
								//'prev_next' => true, // Previous and next links
								//'before_page_number' => '<li class="page-item"><a class="page-link">', // Opening <li> tag
								//'after_page_number' => '</a></li>', // Closing </li> tag
								'mid_size' => 1, // Number of links to show before and after the current page
								'end_size' => 1, // Number of links to show at the beginning and end
							));
							?>
						</nav>
					</div>

				</div>
			<?php else :

				get_template_part('template-parts/content', 'none');

			endif; ?>
		</div>
	</div>
</section>

<?php
get_footer();
