<?php
$icon_1 = get_field('about_us_section_icon_1');
$icon_2 = get_field('about_us_section_icon_2');
$icon_3 = get_field('about_us_section_icon_3');
?>

<span id="about-us-anchor"></span>

<section  class="about-us-section">
  <div class="outer-title-div">
    <div class="inner-title-div">
      <h2 class="title-section hidden-slide-title-up title-lines">
        À <span class="inner-span">propos</span>
      </h2>
    </div>
  </div>
  <div class="about-us-introduction">
    <span class="section-subtitle magenta-subtitle">
      <?php echo get_field("about_us_subtitle") ?>
    </span>
    <p>
      <?php echo get_field("about_us_text") ?>
    </p>
    <!-- <a href="" class="slide-btn"><span>Découvrir notre histoire</span></a> -->
  </div>
  <div class="about-us-features-container">
    <article class="about-us-feature">
      <img src="<?php echo esc_url($icon_1['url']); ?>" alt="<?php echo esc_attr($icon_1['alt']); ?>" />
      <h3>
        <?php echo get_field("about_us_section_title_1") ?>
      </h3>
      <p>
        <?php echo get_field("about_us_section_text_1") ?>
      </p>
    </article>
    <article class="about-us-feature">
      <img src="<?php echo esc_url($icon_2['url']); ?>" alt="<?php echo esc_attr($icon_2['alt']); ?>" />
      <h3>
        <?php echo get_field("about_us_section_title_2") ?>
      </h3>
      <p>
        <?php echo get_field("about_us_section_text_2") ?>
      </p>
    </article>
    <article class="about-us-feature">
      <img src="<?php echo esc_url($icon_3['url']); ?>" alt="<?php echo esc_attr($icon_3['alt']); ?>" />
      <h3>
        <?php echo get_field("about_us_section_title_3") ?>
      </h3>
      <p>
        <?php echo get_field("about_us_section_text_3") ?>
      </p>
    </article>
  </div>
</section>