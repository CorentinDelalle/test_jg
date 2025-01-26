<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package minustwenty_jg
 */

get_header();
?>

<main id="primary" class="site-main">

    <?php if ( have_posts() ) : ?>

        <header class="page-header">
            <?php
            the_archive_title( '<h1 class="page-title">', '</h1>' );
            ?>
        </header><!-- .page-header -->

        <div class="archive-wrapper">
            <?php
            /* Start the Loop */
            while ( have_posts() ) :
                the_post();

                /*
                 * Include the Post-Type-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                 */
                get_template_part( 'template-parts/content-archive', get_post_type() );

            endwhile;

            the_posts_navigation();

            ?>
        </div>

    <?php else : ?>

        <div class="no-posts-found">
            <h2>No posts found</h2>
            <p>It seems we can't find what you're looking for. Perhaps searching can help.</p>
        </div>

    <?php endif; ?>

</main><!-- #main -->

<?php

get_footer();
