<?php
/**
 * minustwenty_jg Theme Customizer
 *
 * @package minustwenty_jg
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function minustwenty_jg_customize_register_postMessage($wp_customize)
{
	$wp_customize->get_setting('blogname')->transport = 'postMessage';
	$wp_customize->get_setting('blogdescription')->transport = 'postMessage';
	$wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

	if (isset($wp_customize->selective_refresh)) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector' => '.site-title a',
				'render_callback' => 'minustwenty_jg_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector' => '.site-description',
				'render_callback' => 'minustwenty_jg_customize_partial_blogdescription',
			)
		);
	}

	$wp_customize->add_section('hero_image_section', array(
		'title' => __('Hero Image', 'custom-theme'),
		'priority' => 30,
	)
	);

	$wp_customize->add_setting('hero_image', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
	);

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_image', array(
		'label' => __('Upload Hero Image', 'custom-theme'),
		'section' => 'hero_image_section',
		'settings' => 'hero_image',
	)
	));
}
add_action('customize_register', 'minustwenty_jg_customize_register_postMessage');


/**
 * Add hero section support for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function minustwenty_jg_customize_register_hero_section($wp_customize)
{
	$wp_customize->add_section('hero_section', array(
		'title' => __('Hero section', 'minustwenty_jg'),
		'priority' => 30,
	)
	);

	$wp_customize->add_setting('hero_image', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
	);

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_image', array(
		'label' => __('Upload Hero Image', 'minustwenty_jg'),
		'section' => 'hero_section',
		'settings' => 'hero_image',
	)
	));

	// Hero Heading Setting
	$wp_customize->add_setting('hero_h1', array(
		'default' => 'Des solutions imprimées, depuis plus de 60 ans !',
		'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control('hero_h1', array(
		'label' => __('Hero H1', 'minustwenty_jg'),
		'section' => 'hero_section',
		'type' => 'text',
	));

	//Hero paragraph setting
	$wp_customize->add_setting('hero_paragraph', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control('hero_paragraph', array(
		'label' => __('Hero paragraph', 'minustwenty_jg'),
		'section' => 'hero_section',
		'type' => 'text',
	));


}
add_action('customize_register', 'minustwenty_jg_customize_register_hero_section');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function minustwenty_jg_customize_partial_blogname()
{
	bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function minustwenty_jg_customize_partial_blogdescription()
{
	bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function minustwenty_jg_customize_preview_js()
{
	wp_enqueue_script('minustwenty_jg-customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), _S_VERSION, true);
}
add_action('customize_preview_init', 'minustwenty_jg_customize_preview_js');
