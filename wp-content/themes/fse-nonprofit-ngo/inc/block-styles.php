<?php
/**
 * Block Styles
 *
 * @package fse_nonprofit_ngo
 * @since 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	function fse_nonprofit_ngo_register_block_styles() {

		//Wp Block Padding Zero
		register_block_style(
			'core/group',
			array(
				'name'  => 'fse-nonprofit-ngo-padding-0',
				'label' => esc_html__( 'No Padding', 'fse-nonprofit-ngo' ),
			)
		);

		//Wp Block Post Author Style
		register_block_style(
			'core/post-author',
			array(
				'name'  => 'fse-nonprofit-ngo-post-author-card',
				'label' => esc_html__( 'Theme Style', 'fse-nonprofit-ngo' ),
			)
		);

		//Wp Block Button Style
		register_block_style(
			'core/button',
			array(
				'name'         => 'fse-nonprofit-ngo-button',
				'label'        => esc_html__( 'Plain', 'fse-nonprofit-ngo' ),
			)
		);

		//Post Comments Style
		register_block_style(
			'core/post-comments',
			array(
				'name'         => 'fse-nonprofit-ngo-post-comments',
				'label'        => esc_html__( 'Theme Style', 'fse-nonprofit-ngo' ),
			)
		);

		//Latest Comments Style
		register_block_style(
			'core/latest-comments',
			array(
				'name'         => 'fse-nonprofit-ngo-latest-comments',
				'label'        => esc_html__( 'Theme Style', 'fse-nonprofit-ngo' ),
			)
		);


		//Wp Block Table Style
		register_block_style(
			'core/table',
			array(
				'name'         => 'fse-nonprofit-ngo-wp-table',
				'label'        => esc_html__( 'Theme Style', 'fse-nonprofit-ngo' ),
			)
		);


		//Wp Block Pre Style
		register_block_style(
			'core/preformatted',
			array(
				'name'         => 'fse-nonprofit-ngo-wp-preformatted',
				'label'        => esc_html__( 'Theme Style', 'fse-nonprofit-ngo' ),
			)
		);

		//Wp Block Verse Style
		register_block_style(
			'core/verse',
			array(
				'name'         => 'fse-nonprofit-ngo-wp-verse',
				'label'        => esc_html__( 'Theme Style', 'fse-nonprofit-ngo' ),
			)
		);
	}
	add_action( 'init', 'fse_nonprofit_ngo_register_block_styles' );
}
