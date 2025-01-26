<?php
$hero_image = get_field("hero_image");
$hero_image_responsive = get_field("hero_image_responsive");
$hero_link_get_quote = get_field("hero_get_quote");
$hero_link_send_file = get_field("hero_send_file");
$size = 'full'; // (thumbnail, medium, large, full or custom size)

?>


<div class="hero-section">
  <div class="hero-section-img-container">
    <?php if ($hero_image) {
      echo wp_get_attachment_image($hero_image, $size);
    } ?>
  </div>
  <div class="hero-section-img-container-responsive">
    <?php if ($hero_image_responsive) {
      echo wp_get_attachment_image($hero_image_responsive, "medium");
    } ?>
  </div>
  <section class="hero-section-text">

    <h1>
      <?php echo get_field("hero_title_h1") ?>
    </h1>
    <p>
      <?php echo get_field("hero_text") ?>
    </p>
    <div class="action-links">
      <?php
      if ($hero_link_get_quote) :
        $hero_link_get_quote_url = $hero_link_get_quote['url'];
        $hero_link_get_quote_title = $hero_link_get_quote['title'];
        $hero_link_get_quote_target = $hero_link_get_quote['target'] ? $hero_link_get_quote['target'] : '_self';
      ?>
        <a class="slide-btn" href="<?php echo esc_url($hero_link_get_quote_url); ?>" target="<?php echo esc_attr($hero_link_get_quote_target); ?>">
          <span>
            <?php echo esc_html($hero_link_get_quote_title); ?>
          </span>
        </a>
      <?php endif; ?>
      <?php
      if ($hero_link_send_file) :
        $hero_link_send_file_url = $hero_link_send_file['url'];
        $hero_link_send_file_title = $hero_link_send_file['title'];
        $hero_link_send_file_target = $hero_link_send_file['target'] ? $hero_link_send_file['target'] : '_self';
      ?>
        <a class="alternate-btn" href="<?php echo esc_url($hero_link_send_file_url); ?>" target="<?php echo esc_attr($hero_link_send_file_target); ?>">
          <span>
            <?php echo esc_html($hero_link_send_file_title); ?>
          </span>
        </a>
      <?php endif; ?>
    </div>
  </section>
</div>