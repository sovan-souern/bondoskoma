<?php
/**
 * Block Styles
 *
 * @package fse_social_ngo
 * @since 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	function fse_social_ngo_register_block_styles() {

		//Wp Block Padding Zero
		register_block_style(
			'core/group',
			array(
				'name'  => 'fse-social-ngo-padding-0',
				'label' => esc_html__( 'No Padding', 'fse-social-ngo' ),
			)
		);

		//Wp Block Post Author Style
		register_block_style(
			'core/post-author',
			array(
				'name'  => 'fse-social-ngo-post-author-card',
				'label' => esc_html__( 'Theme Style', 'fse-social-ngo' ),
			)
		);

		//Wp Block Button Style
		register_block_style(
			'core/button',
			array(
				'name'         => 'fse-social-ngo-button',
				'label'        => esc_html__( 'Plain', 'fse-social-ngo' ),
			)
		);

		//Post Comments Style
		register_block_style(
			'core/post-comments',
			array(
				'name'         => 'fse-social-ngo-post-comments',
				'label'        => esc_html__( 'Theme Style', 'fse-social-ngo' ),
			)
		);

		//Latest Comments Style
		register_block_style(
			'core/latest-comments',
			array(
				'name'         => 'fse-social-ngo-latest-comments',
				'label'        => esc_html__( 'Theme Style', 'fse-social-ngo' ),
			)
		);


		//Wp Block Table Style
		register_block_style(
			'core/table',
			array(
				'name'         => 'fse-social-ngo-wp-table',
				'label'        => esc_html__( 'Theme Style', 'fse-social-ngo' ),
			)
		);


		//Wp Block Pre Style
		register_block_style(
			'core/preformatted',
			array(
				'name'         => 'fse-social-ngo-wp-preformatted',
				'label'        => esc_html__( 'Theme Style', 'fse-social-ngo' ),
			)
		);

		//Wp Block Verse Style
		register_block_style(
			'core/verse',
			array(
				'name'         => 'fse-social-ngo-wp-verse',
				'label'        => esc_html__( 'Theme Style', 'fse-social-ngo' ),
			)
		);
	}
	add_action( 'init', 'fse_social_ngo_register_block_styles' );
}
