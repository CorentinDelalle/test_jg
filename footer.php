<?php

// Retrieve the homepage ID to display the fields instead of rewriting it every time
$homepage_id = get_option('page_on_front');


$footer_logo = get_field('footer_logo', $homepage_id);
$service_link_1 = get_field('footer_service_1',$homepage_id);
$service_link_2 = get_field('footer_service_2',$homepage_id);
$service_link_3 = get_field('footer_service_3',$homepage_id);
$service_link_4 = get_field('footer_service_4',$homepage_id);
$service_link_5 = get_field('footer_service_5',$homepage_id);
$footer_other_1= get_field('footer_other_1',$homepage_id);
$footer_other_2= get_field('footer_other_2',$homepage_id);
$footer_other_3= get_field('footer_other_3',$homepage_id);
?>

<footer id="colophon" class="site-footer">
	<div class="main-footer">
		<img src="<?php echo esc_url($footer_logo['url']); ?>" alt="<?php echo esc_attr($footer_logo['alt']); ?>"
			class="logo-jg-footer" />

		<div class="right-part-footer">
			<section>
				<h4>
					<?php echo get_field('footer_company_infos_title', $homepage_id) ?>
				</h4>
				<div class="footer-products-list">
					<ul class="footer-ul">

						<li>
							<?php echo get_field('footer_company_infos_1', $homepage_id) ?>
						</li>
						<li>
							<?php echo get_field('footer_company_infos_2', $homepage_id) ?>
						</li>
						<li>
							<?php echo get_field('footer_company_infos_3',$homepage_id) ?>
						</li>
						<li>
							<?php echo get_field('footer_company_infos_4',$homepage_id) ?>
						</li>
						<li>
							<?php echo get_field('footer_company_infos_5',$homepage_id) ?>
						</li>
					</ul>
				</div>
			</section>
			<section>
				<h4>
					<?php echo get_field('footer_services_title',$homepage_id) ?>
				</h4>
				<div class="footer-products-list">
					<ul class="footer-ul">
						<li>
							<?php
							if ($service_link_1):
								$service_link_1_url = $service_link_1['url'];
								$service_link_1_title = $service_link_1['title'];
								$service_link_1_target = $service_link_1['target'] ? $service_link_1['target'] : '_self';
								?>
								<a class="footer-link" href="<?php echo esc_url($service_link_1_url); ?>"
									target="<?php echo esc_attr($service_link_1_target); ?>">
									<?php echo esc_html($service_link_1_title); ?>
								</a>
							<?php endif; ?>
						</li>
						<li>
						<?php
							if ($service_link_2):
								$service_link_2_url = $service_link_2['url'];
								$service_link_2_title = $service_link_2['title'];
								$service_link_2_target = $service_link_2['target'] ? $service_link_2['target'] : '_self';
								?>
								<a class="footer-link" href="<?php echo esc_url($service_link_2_url); ?>"
									target="<?php echo esc_attr($service_link_2_target); ?>">
									<?php echo esc_html($service_link_2_title); ?>
								</a>
							<?php endif; ?>
						</li>
						<li>
						<?php
							if ($service_link_3):
								$service_link_3_url = $service_link_3['url'];
								$service_link_3_title = $service_link_3['title'];
								$service_link_3_target = $service_link_3['target'] ? $service_link_3['target'] : '_self';
								?>
								<a class="footer-link" href="<?php echo esc_url($service_link_3_url); ?>"
									target="<?php echo esc_attr($service_link_3_target); ?>">
									<?php echo esc_html($service_link_3_title); ?>
								</a>
							<?php endif; ?>
						</li>
						<li>
						<?php
							if ($service_link_4):
								$service_link_4_url = $service_link_4['url'];
								$service_link_4_title = $service_link_4['title'];
								$service_link_4_target = $service_link_4['target'] ? $service_link_4['target'] : '_self';
								?>
								<a class="footer-link" href="<?php echo esc_url($service_link_4_url); ?>"
									target="<?php echo esc_attr($service_link_4_target); ?>">
									<?php echo esc_html($service_link_4_title); ?>
								</a>
							<?php endif; ?>
						</li>
						<li>
						<?php
							if ($service_link_5):
								$service_link_5_url = $service_link_5['url'];
								$service_link_5_title = $service_link_5['title'];
								$service_link_5_target = $service_link_5['target'] ? $service_link_5['target'] : '_self';
								?>
								<a class="footer-link" href="<?php echo esc_url($service_link_5_url); ?>"
									target="<?php echo esc_attr($service_link_5_target); ?>">
									<?php echo esc_html($service_link_5_title); ?>
								</a>
							<?php endif; ?>
						</li>

					</ul>
				</div>
			</section>
			<section>
				<h4>
					<?php echo get_field('footer_other_title',$homepage_id) ?>
				</h4>
				<ul class="footer-ul">
					<li>
					<?php
							if ($footer_other_1):
								$footer_other_1_url = $footer_other_1['url'];
								$footer_other_1_title = $footer_other_1['title'];
								$footer_other_1_target = $footer_other_1['target'] ? $footer_other_1['target'] : '_self';
								?>
								<a class="footer-link" href="<?php echo esc_url($footer_other_1_url); ?>"
									target="<?php echo esc_attr($footer_other_1_target); ?>">
									<?php echo esc_html($footer_other_1_title); ?>
								</a>
							<?php endif; ?>
					</li>
					<li>
												<?php
							if ($footer_other_2):
								$footer_other_2_url = $footer_other_2['url'];
								$footer_other_2_title = $footer_other_2['title'];
								$footer_other_2_target = $footer_other_2['target'] ? $footer_other_2['target'] : '_self';
								?>
								<a class="footer-link" href="<?php echo esc_url($footer_other_2_url); ?>"
									target="<?php echo esc_attr($footer_other_2_target); ?>">
									<?php echo esc_html($footer_other_2_title); ?>
								</a>
							<?php endif; ?>
					</li>
					<li>
												<?php
							if ($footer_other_3):
								$footer_other_3_url = $footer_other_3['url'];
								$footer_other_3_title = $footer_other_3['title'];
								$footer_other_3_target = $footer_other_3['target'] ? $footer_other_3['target'] : '_self';
								?>
								<a class="footer-link" href="<?php echo esc_url($footer_other_3_url); ?>"
									target="<?php echo esc_attr($footer_other_3_target); ?>">
									<?php echo esc_html($footer_other_3_title); ?>
								</a>
							<?php endif; ?>
					</li>
				</ul>
			</section>
		</div>
	</div>
	<div class="sub-footer">
		<p>©
			<?php echo date("Y"); ?>
			Production JG Inc. | Tous droits réservés.
		</p>
	</div>
</footer>
</div>

<?php wp_footer(); ?>

</body>

</html>