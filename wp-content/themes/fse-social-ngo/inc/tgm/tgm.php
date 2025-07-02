<?php
/**
 * Recommended plugins.
 */
	
require get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';

function fse_social_ngo_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'WooCommerce', 'fse-social-ngo' ),
			'slug'             => 'woocommerce',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	fse_social_ngo_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'fse_social_ngo_register_recommended_plugins' );