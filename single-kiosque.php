<?php

$current_post_id = get_the_ID();
$terms = wp_get_post_terms($current_post_id, 'type-de-kiosques');
$term_ids = wp_list_pluck($terms, 'term_id');

$args = array(
	'post_type' => 'kiosque',
	'posts_per_page' => 3,
	'post__not_in' => array($current_post_id),
	'tax_query' => array(
		array(
			'taxonomy' => 'type-de-kiosques',
			'field' => 'term_id',
			'terms' => $term_ids,
		),
	),
);

$related_posts = new WP_Query($args);

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
	<div class="page-content">
		<?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
		<?php
		while (have_posts()) :
			the_post();

			get_template_part('template-parts/content', get_post_type());


		endwhile; // End of the loop.
		if ($related_posts->have_posts()) {
		?>
			<section class="related-kiosques-section">
				<h2>Autres kiosques du même type :</h2>
				<div class="related-kiosques-wrapper">
					<?php
					while ($related_posts->have_posts()) {
						$related_posts->the_post();
					?>
						<a href="<?php the_permalink(); ?>" class="archive-article-link">
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<?php minustwenty_jg_post_thumbnail(); ?>
								<div class="archive-article-title-wrapper">
									<?php the_title('<h3 class="archive-article-title">', '</h3>'); ?>
								</div>
							</article>
						</a>
				<?php
					}
					wp_reset_postdata();
				}
				?>

				</div>
			</section>


	</div>


</main><!-- #main -->

<?php
get_footer();
