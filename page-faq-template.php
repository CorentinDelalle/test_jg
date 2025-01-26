<?php
/*
Template Name: page-faq-template
*/



get_header();
?>

<main id="primary" class="site-main">

  <section class="page-title" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/img/grey-dot-background.svg'); ?>');">
  <?php the_title( '<h1>', '</h1>' ); ?>
  </section>

  <div class="faq-content">
  <?php the_content(); ?>
  </div>


</main>

<?php get_footer();
