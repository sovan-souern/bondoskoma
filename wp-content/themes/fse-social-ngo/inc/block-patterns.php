<?php
/**
 * Block Patterns
 *
 * @package fse_social_ngo
 * @since 1.0
 */

function fse_social_ngo_register_block_patterns() {
	$fse_social_ngo_block_pattern_categories = array(
		'fse-social-ngo' => array( 'label' => esc_html__( 'FSE Social NGO', 'fse-social-ngo' ) ),
		'pages' => array( 'label' => esc_html__( 'Pages', 'fse-social-ngo' ) ),
	);

	$fse_social_ngo_block_pattern_categories = apply_filters( 'fse_social_ngo_fse_social_ngo_block_pattern_categories', $fse_social_ngo_block_pattern_categories );

	foreach ( $fse_social_ngo_block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'fse_social_ngo_register_block_patterns', 9 );