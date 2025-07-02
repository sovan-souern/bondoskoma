<?php
/**
 * Block Patterns
 *
 * @package fse_nonprofit_ngo
 * @since 1.0
 */

function fse_nonprofit_ngo_register_block_patterns() {
	$fse_nonprofit_ngo_block_pattern_categories = array(
		'fse-nonprofit-ngo' => array( 'label' => esc_html__( 'FSE Nonprofit NGO', 'fse-nonprofit-ngo' ) ),
		'pages' => array( 'label' => esc_html__( 'Pages', 'fse-nonprofit-ngo' ) ),
	);

	$fse_nonprofit_ngo_block_pattern_categories = apply_filters( 'fse_nonprofit_ngo_fse_nonprofit_ngo_block_pattern_categories', $fse_nonprofit_ngo_block_pattern_categories );

	foreach ( $fse_nonprofit_ngo_block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'fse_nonprofit_ngo_register_block_patterns', 9 );