<?php
/**
 * FSE Nonprofit NGO: Customizer
 *
 * @package FSE Nonprofit NGO
 * @subpackage fse_nonprofit_ngo
 */

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class FSE_Nonprofit_Ngo_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'FSE_Nonprofit_Ngo_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new FSE_Nonprofit_Ngo_Customize_Section_Pro(
				$manager,
				'fse_nonprofit_ngo_section_pro',
				array(
					'priority'   => 9,
					'title'    => esc_html__( 'FSE Nonprofit NGO Pro', 'fse-nonprofit-ngo' ),
					'pro_text' => esc_html__( 'GET PRO', 'fse-nonprofit-ngo' ),
					'pro_url'  => esc_url( 'https://www.cretathemes.com/products/nonprofit-wordpress-theme', 'fse-nonprofit-ngo' ),
				)
			)
		);

	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'fse-nonprofit-ngo-customize-controls', trailingslashit( esc_url( get_template_directory_uri() ) ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'fse-nonprofit-ngo-customize-controls', trailingslashit( esc_url( get_template_directory_uri() ) ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
FSE_Nonprofit_Ngo_Customize::get_instance();