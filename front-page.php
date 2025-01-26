<?php 
/*
Template Name: front-page
*/

get_header();?>
<main>
  
  <?php get_template_part('template-parts/front-page/hero'); ?>
  <?php get_template_part('template-parts/front-page/services'); ?>
  <?php get_template_part('template-parts/front-page/our-clients'); ?>
  <?php get_template_part('template-parts/front-page/about-us'); ?>
  <?php get_template_part('template-parts/front-page/call-to-action'); ?>
</main>
<?php get_footer();?>