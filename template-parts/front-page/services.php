<?php
$service_image_1 = get_field('service_image_1');
$service_image_2 = get_field('service_image_2');
$service_image_3 = get_field('service_image_3');
$service_image_4 = get_field('service_image_4');
$service_image_5 = get_field('service_image_5');

$service_link_1 = get_field('service_link_1');
$service_link_2 = get_field('service_link_2');
$service_link_3 = get_field('service_link_3');
$service_link_4 = get_field('service_link_4');
$service_link_5 = get_field('service_link_5');

$size = 'medium'; // (thumbnail, medium, large, full or custom size)
?>

<span id="services-anchor"></span>

<section>
  <div class="outer-title-div">
    <div class="inner-title-div">
      <h2 class="title-section hidden-slide-title-up">
        Nos <span class="inner-span">services</span>
      </h2>
    </div>
  </div>

  <div class="service-container obj-pos-80">
    <?php if ($service_image_1) {
      echo wp_get_attachment_image($service_image_1, $size);
    } ?>
    <article class="service-description grey-theme"
      style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/img/grey-dot-background.svg'); ?>');">
      <h3 class="hidden-slide-title-right long-service-name">
        <?php echo get_field("service_title_1") ?>
      </h3>

      <p>
        <?php echo get_field("service_text_1") ?>
      </p>
      <?php
      if ($service_link_1):
        $service_link_1_url = $service_link_1['url'];
        $service_link_1_title = $service_link_1['title'];
        $service_link_1_target = $service_link_1['target'] ? $service_link_1['target'] : '_self';
        ?>
        <a class="slide-btn" href="<?php echo esc_url($service_link_1_url); ?>"
          target="<?php echo esc_attr($service_link_1_target); ?>"><span>
            <?php echo esc_html($service_link_1_title); ?>
          </span>
        </a>
      <?php endif; ?>
    </article>
  </div>
  <div class="service-container inverted obj-pos-80">
    <?php if ($service_image_2) {
      echo wp_get_attachment_image($service_image_2, $size);
    } ?>
    <article class="service-description">
      <h3 class="hidden-slide-title-left long-service-name">
        <?php echo get_field("service_title_2") ?>
      </h3>
      <p>
        <?php echo get_field("service_text_2") ?>
      </p>
      <?php
      if ($service_link_2):
        $service_link_2_url = $service_link_2['url'];
        $service_link_2_title = $service_link_2['title'];
        $service_link_2_target = $service_link_2['target'] ? $service_link_2['target'] : '_self';
        ?>
        <a class="slide-btn" href="<?php echo esc_url($service_link_2_url); ?>"
          target="<?php echo esc_attr($service_link_2_target); ?>"><span>
            <?php echo esc_html($service_link_2_title); ?>
          </span>
        </a>
      <?php endif; ?>
    </article>
  </div>
  <div class="service-container obj-pos-20">
    <?php if ($service_image_3) {
      echo wp_get_attachment_image($service_image_3, $size);
    } ?>
    <article class="service-description grey-theme"
      style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/img/grey-dot-background.svg'); ?>');">
      <h3 class="hidden-slide-title-right">
        <?php echo get_field("service_title_3") ?>
      </h3>
      <p>
        <?php echo get_field("service_text_3") ?>
      </p>

      <?php
      if ($service_link_3):
        $service_link_3_url = $service_link_3['url'];
        $service_link_3_title = $service_link_3['title'];
        $service_link_3_target = $service_link_3['target'] ? $service_link_3['target'] : '_self';
        ?>
        <a class="slide-btn" href="<?php echo esc_url($service_link_3_url); ?>"
          target="<?php echo esc_attr($service_link_3_target); ?>"><span>
            <?php echo esc_html($service_link_3_title); ?>
          </span>
        </a>
      <?php endif; ?>
    </article>
  </div>
  <div class="service-container inverted">
    <?php if ($service_image_4) {
      echo wp_get_attachment_image($service_image_4, $size);
    } ?>
    <article class="service-description">
      <h3 class="hidden-slide-title-left">
        <?php echo get_field("service_title_4") ?>
      </h3>
      <p>
        <?php echo get_field("service_text_4") ?>
      </p>
      <?php
      if ($service_link_4):
        $service_link_4_url = $service_link_4['url'];
        $service_link_4_title = $service_link_4['title'];
        $service_link_4_target = $service_link_4['target'] ? $service_link_4['target'] : '_self';
        ?>
        <a class="slide-btn" href="<?php echo esc_url($service_link_4_url); ?>"
          target="<?php echo esc_attr($service_link_4_target); ?>"><span>
            <?php echo esc_html($service_link_4_title); ?>
          </span>
        </a>
      <?php endif; ?>
    </article>
  </div>
  <div class="service-container obj-pos-20">
    <?php if ($service_image_5) {
      echo wp_get_attachment_image($service_image_5, $size);
    } ?>
    <article class="service-description grey-theme"
      style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/img/grey-dot-background.svg'); ?>');">
      <h3 class="hidden-slide-title-right">
        <?php echo get_field("service_title_5") ?>
      </h3>
      <p>
        <?php echo get_field("service_text_5") ?>
      </p>
      <?php
      if ($service_link_5):
        $service_link_5_url = $service_link_5['url'];
        $service_link_5_title = $service_link_5['title'];
        $service_link_5_target = $service_link_5['target'] ? $service_link_5['target'] : '_self';
        ?>
        <a class="slide-btn" href="<?php echo esc_url($service_link_5_url); ?>"
          target="<?php echo esc_attr($service_link_5_target); ?>"><span>
            <?php echo esc_html($service_link_5_title); ?>
          </span>
        </a>
      <?php endif; ?>
    </article>
  </div>
</section>