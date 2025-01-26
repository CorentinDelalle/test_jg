<?php 
$page_contact_link = get_field('page_contact_link');
?>

	<div class="contact-us">
		<section class="contact-us-cta">
			<h2>Un produit que vous ne trouvez pas ?</h2>
			<p>Nous avons une solution pour vous !</p>
			<?php
      if ($page_contact_link):
        $page_contact_link_url = $page_contact_link['url'];
				$page_contact_link_title = $page_contact_link['title'];
        $page_contact_link_target = $page_contact_link['target'] ? $page_contact_link['target'] : '_self';
        ?>
        <a class="slide-btn" href="<?php echo esc_url($page_contact_link_url); ?>"
          target="<?php echo esc_attr($page_contact_link_target); ?>"><span>
            <?php echo esc_html($page_contact_link_title); ?>
          </span>
        </a>
      <?php endif; ?>
		</section>


		<div class="bottom-control-img">
			<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/print-control/grey-control-bar.svg'); ?>" alt="barre de controle couleur gris" class="control-bar" />
			<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/print-control/hirondelle.svg'); ?>" alt="repère d'impression hirondelle" class="hirondelle" />
			<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/print-control/color-control-bar.svg'); ?>" alt="barre de controle couleur" class="control-bar" />
		</div>
	</div>