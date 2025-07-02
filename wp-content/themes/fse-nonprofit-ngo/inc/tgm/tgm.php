<?php
/**
 * Recommended plugins.
 */
	
require get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';

function fse_nonprofit_ngo_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Contact Form 7', 'fse-nonprofit-ngo' ),
			'slug'             => 'contact-form-7',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'GTranslate', 'fse-nonprofit-ngo' ),
			'slug'             => 'gtranslate',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	fse_nonprofit_ngo_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'fse_nonprofit_ngo_register_recommended_plugins' );