<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package minustwenty_jg
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary">
			<?php esc_html_e('Skip to content', 'minustwenty_jg'); ?>
		</a>

		<header id="masthead" class="site-header">
			<div class="site-branding">
				<?php
				the_custom_logo();
				?>
			</div>

			<nav id="site-navigation" class="main-navigation">
				<button class="toggle-burger-menu-container" aria-label="Open menu">
					<div>
						<div class="burger-menu">
							<span class="stroke stroke1"></span>
							<span class="stroke stroke2 stroke2-not-animated"></span>
							<span class="stroke stroke3 stroke3-not-animated"></span>
							<span class="stroke stroke4"></span>
							<span class="stroke stroke5"></span>
						</div>
					</div>
				</button>

				<?php
				wp_nav_menu(
					array(
						"menu" => "main-menu",
						"menu_class" => "menu-header"
					)
				);
				?>
			</nav>
		</header>