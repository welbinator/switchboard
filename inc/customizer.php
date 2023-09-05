<?php
/**
 * Switchboard Theme Customizer
 *
 * @package Switchboard
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function switchboard_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'switchboard_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'switchboard_customize_partial_blogdescription',
			)
		);
	}
	 // Add setting for logo width
	 $wp_customize->add_setting( 'logo_width', array(
        'default'           => '200', // Default width in pixels
        'sanitize_callback' => 'absint', // Ensuring the value is an absolute integer
    ));

    // Add control for logo width
    $wp_customize->add_control( 'logo_width', array(
        'label'       => __( 'Logo Width', 'mytheme' ),
        'description' => __( 'Set the width of the logo in pixels.', 'mytheme' ),
        'section'     => 'title_tagline', // Adding it to the existing title & tagline section
        'type'        => 'number',
    ));
}
add_action( 'customize_register', 'switchboard_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function switchboard_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function switchboard_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function switchboard_customize_preview_js() {
	wp_enqueue_script( 'switchboard-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'switchboard_customize_preview_js' );

/**
 * Adds width option to logo in customizer
 */

// Function to apply the custom logo width
function switchboard_customizer_css() {
    $logo_width = get_theme_mod( 'logo_width', '200' ); // Getting the value

    // Applying the width to the logo
    echo '<style type="text/css">
        .custom-logo {
            width: ' . esc_attr( $logo_width ) . 'px;
        }
    </style>';
}
add_action( 'wp_head', 'switchboard_customizer_css' );

