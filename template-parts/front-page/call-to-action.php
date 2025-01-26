<?php
$call_to_action_img = get_field('call_to_action_image');
$cta_get_quote = get_field('cta_get_quote');
$size = 'full';
?>

<div class="call-to-action-section">
  <div class="call-to-action-section-img-container">
  <?php if ($call_to_action_img) {
      echo wp_get_attachment_image($call_to_action_img, $size);
    } ?>
  </div>
  <section class="call-to-action-section-text">
    <h2>
      <?php echo get_field('call_to_action_title') ?>
    </h2>
    <?php
      if ($cta_get_quote) :
        $cta_get_quote_url = $cta_get_quote['url'];
        $cta_get_quote_title = $cta_get_quote['title'];
        $cta_get_quote_target = $cta_get_quote['target'] ? $cta_get_quote['target'] : '_self';
      ?>
        <a class="slide-btn" href="<?php echo esc_url($cta_get_quote_url); ?>" target="<?php echo esc_attr($cta_get_quote_target); ?>">
          <span>
            <?php echo esc_html($cta_get_quote_title); ?>
          </span>
        </a>
      <?php endif; ?>
  </section>
</div>