<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package minustwenty_jg
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="page-content">
		<?php
		while (have_posts()):
			the_post();

			get_template_part('template-parts/content', get_post_type());

			the_post_navigation(
				array(
					'prev_text' => '<span>' . esc_html__('Previous:', 'minustwenty_jg') . '</span> <span>%title</span>',
					'next_text' => '<span>' . esc_html__('Next:', 'minustwenty_jg') . '</span> <span>%title</span>',
				)
			);


		endwhile; // End of the loop.
		?>

	</div>

</main><!-- #main -->

<?php
get_footer();
