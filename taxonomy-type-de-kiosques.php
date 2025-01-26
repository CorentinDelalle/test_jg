<?php
$terms = get_terms(array(
	'taxonomy' => 'type-de-kiosques',
	'hide_empty' => false,
));

get_header();
?>
<div class="kiosques-sub-nav">
	<?php
	if (!empty($terms) && !is_wp_error($terms)) {
		foreach ($terms as $term) {
			echo '<a href="' . get_term_link($term) . '">' . $term->name . '</a>';
		}
	}
	?>
</div>

<main id="primary" class="site-main">
	<?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>

	<?php if (have_posts()) : ?>

		<header class="page-header">
			<div class="outer-title-div">
				<div class="inner-title-div">
					<?php
					the_archive_title('<h1 class="title-section hidden-slide-title-up">', '</h1>');
					?>
				</div>
			</div>

		</header><!-- .page-header -->

		<div class="archive-wrapper">
		<?php
		/* Start the Loop */
		while (have_posts()) :
			the_post();

			/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
			get_template_part('template-parts/content-archive', get_post_type());

		endwhile;

		the_posts_navigation();

	endif;
		?>
		</div>

</main><!-- #main -->

<?php

get_footer();
