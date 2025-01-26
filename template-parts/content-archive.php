<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package minustwenty_jg
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php minustwenty_jg_post_thumbnail(); ?>
	<div class="archive-article-title-wrapper">
		<?php the_title('<h3 class="archive-article-title">', '</h3>'); ?>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->