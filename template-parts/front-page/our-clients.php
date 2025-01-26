<?php
$banner = get_field("clients_section_banner");
$banner_responsive = get_field("clients_section_banner_responsive");
$portfolio_link = get_field("portfolio_link");
?>

<section class="clients">
  <div class="outer-title-div">
    <div class="inner-title-div">
      <h2 class="title-section hidden-slide-title-up title-lines">
        Imprimeur <span class="inner-span">de confiance</span>
      </h2>
    </div>
  </div>

  <div class="clients_img_txt">
    <img class="desktop_banner" src="<?php echo esc_url($banner['url']); ?>" alt="<?php echo esc_attr($banner['alt']); ?>" />
    <img class="responsive_banner" src="<?php echo esc_url($banner_responsive['url']); ?>" alt="<?php echo esc_attr($banner_responsive['alt']); ?>" />
    <div class="clients_txt" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/img/grey-dot-background.svg'); ?>');">
      <span class="section-subtitle lime-subtitle">
        <?php echo get_field("clients_section_subtitle"); ?>
      </span>
      <p>
        <?php echo get_field("clients_section_text"); ?>
      </p>
      <?php
      if ($portfolio_link) :
        $portfolio_link_url = $portfolio_link['url'];
        $portfolio_link_title = $portfolio_link['title'];
        $portfolio_link_target = $portfolio_link['target'] ? $portfolio_link['target'] : '_self';
      ?>
        <a class="slide-btn" href="<?php echo esc_url($portfolio_link_url); ?>" target="<?php echo esc_attr($portfolio_link_target); ?>">
          <span>
            <?php echo esc_html($portfolio_link_title); ?>
          </span>
        </a>
      <?php endif; ?>

    </div>
  </div>
</section>