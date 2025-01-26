<?php

/*
Template Name: page-contact-template
*/

get_header(); ?>
<main id="primary" class="site-main">
  <section class="page-title"
    style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/img/grey-dot-background.svg'); ?>');">
    <?php the_title('<h1>', '</h1>'); ?>
  </section>
  <section class="contact-introduction">
    <h2>Des idées à concrétiser ? Une demande d'informations ?</h2>
    <p>Contactez-nous dès maintenant ! Nous vous répondrons au plus vite</p>
  </section>
  <?php the_content() ?>
</main>
<?php get_footer(); ?>