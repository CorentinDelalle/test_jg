<?php
/*
Template Name: page-services-template
*/
$service_title = get_field("page_service_title");
$service_featured_image = get_field("page_featured_image");
$size = "medium";

get_header();
?>

<main id="primary" class="site-main">

  <div class="service-container">
    <?php if ($service_featured_image) {
      echo wp_get_attachment_image($service_featured_image, $size);
    } ?>
    <article class="service-description grey-theme"
      style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/img/grey-dot-background.svg'); ?>');">
      <h1 class="hidden-slide-title-right service-page-name"><?php echo $service_title ?> </h1>


      <h2 class="page-subtitle">
        <?php echo get_field("page_introduction_title") ?>
      </h2>
      <p>
        <?php echo get_field("page_introduction_text") ?>
      </p>

    </article>
  </div>



  <?php get_template_part('template-parts/page/product-grid'); ?>

  <?php get_template_part('template-parts/page/contact-us'); ?>


</main>

<?php get_footer();
