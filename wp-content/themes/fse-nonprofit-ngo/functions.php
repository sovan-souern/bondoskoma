<?php
/**
 * FSE Nonprofit NGO functions and definitions
 *
 * @package fse_nonprofit_ngo
 * @since 1.0
 */

if ( ! function_exists( 'fse_nonprofit_ngo_support' ) ) :
	function fse_nonprofit_ngo_support() {

		load_theme_textdomain( 'fse-nonprofit-ngo', get_template_directory() . '/languages' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		add_theme_support('woocommerce');

		// Enqueue editor styles.
		add_editor_style(get_stylesheet_directory_uri() . '/assets/css/editor-style.css');

		/* Theme Credit link */
		define('FSE_NONPROFIT_NGO_BUY_NOW',__('https://www.cretathemes.com/products/nonprofit-wordpress-theme','fse-nonprofit-ngo'));
		define('FSE_NONPROFIT_NGO_PRO_DEMO',__('https://pattern.cretathemes.com/fse-nonprofit-ngo/','fse-nonprofit-ngo'));
		define('FSE_NONPROFIT_NGO_THEME_DOC',__('https://pattern.cretathemes.com/free-guide/fse-nonprofit-ngo/','fse-nonprofit-ngo'));
		define('FSE_NONPROFIT_NGO_PRO_THEME_DOC',__('https://pattern.cretathemes.com/pro-guide/fse-nonprofit-ngo/','fse-nonprofit-ngo'));
		define('FSE_NONPROFIT_NGO_SUPPORT',__('https://wordpress.org/support/theme/fse-nonprofit-ngo/','fse-nonprofit-ngo'));
		define('FSE_NONPROFIT_NGO_REVIEW',__('https://wordpress.org/support/theme/fse-nonprofit-ngo/reviews/#new-post','fse-nonprofit-ngo'));
		define('FSE_NONPROFIT_NGO_PRO_THEME_BUNDLE',__('https://www.cretathemes.com/products/wordpress-theme-bundle','fse-nonprofit-ngo'));
		define('FSE_NONPROFIT_NGO_PRO_ALL_THEMES',__('https://www.cretathemes.com/collections/wordpress-block-themes','fse-nonprofit-ngo'));

	}
endif;

add_action( 'after_setup_theme', 'fse_nonprofit_ngo_support' );

if ( ! function_exists( 'fse_nonprofit_ngo_styles' ) ) :
	function fse_nonprofit_ngo_styles() {
		// Register theme stylesheet.
		$fse_nonprofit_ngo_theme_version = wp_get_theme()->get( 'Version' );

		$fse_nonprofit_ngo_version_string = is_string( $fse_nonprofit_ngo_theme_version ) ? $fse_nonprofit_ngo_theme_version : false;
		wp_enqueue_style(
			'fse-nonprofit-ngo-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$fse_nonprofit_ngo_version_string
		);

		wp_enqueue_script( 'fse-nonprofit-ngo-custom-script', get_theme_file_uri( '/assets/js/custom-script.js' ), array( 'jquery' ), true );

		wp_enqueue_style( 'dashicons' );

		wp_style_add_data( 'fse-nonprofit-ngo-style', 'rtl', 'replace' );

		//font-awesome
		wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/inc/fontawesome/css/all.css'
			, array(), '6.7.0' );
	}
endif;

add_action( 'wp_enqueue_scripts', 'fse_nonprofit_ngo_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Add block styles
require get_template_directory() . '/inc/block-styles.php';

// Block Filters
require get_template_directory() . '/inc/block-filters.php';

// Svg icons
require get_template_directory() . '/inc/icon-function.php';

// TGM Plugin
require get_template_directory() . '/inc/tgm/tgm.php';

// Get Started.
require get_template_directory() . '/inc/get-started/get-started.php';

// Customizer
require get_template_directory() . '/inc/customizer.php';

// Add Getstart admin notice
function fse_nonprofit_ngo_admin_notice() { 
    global $pagenow;
    $theme_args      = wp_get_theme();
    $meta            = get_option( 'fse_nonprofit_ngo_admin_notice' );
    $name            = $theme_args->__get( 'Name' );
    $current_screen  = get_current_screen();

    if( !$meta ){
	    if( is_network_admin() ){
	        return;
	    }

	    if( ! current_user_can( 'manage_options' ) ){
	        return;
	    } if($current_screen->base != 'appearance_page_fse-nonprofit-ngo-guide-page' ) { ?>

	    <div class="notice notice-success dash-notice">
	        <h1><?php esc_html_e('Hey, Thank you for installing FSE Nonprofit NGO Theme!', 'fse-nonprofit-ngo'); ?></h1>
	        <p><a class="button button-primary customize load-customize hide-if-no-customize get-start-btn" href="<?php echo esc_url( admin_url( 'themes.php?page=fse-nonprofit-ngo-guide-page' ) ); ?>"><?php esc_html_e('Navigate Getstart', 'fse-nonprofit-ngo'); ?></a> 
	        	<a class="button button-primary site-edit" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>"><?php esc_html_e('Site Editor', 'fse-nonprofit-ngo'); ?></a> 
				<a class="button button-primary buy-now-btn" href="<?php echo esc_url( FSE_NONPROFIT_NGO_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'fse-nonprofit-ngo'); ?></a>
				<a class="button button-primary bundle-btn" href="<?php echo esc_url( FSE_NONPROFIT_NGO_PRO_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e('Get Bundle', 'fse-nonprofit-ngo'); ?></a>
	        </p>
	        <p class="dismiss-link"><strong><a href="?fse_nonprofit_ngo_admin_notice=1"><?php esc_html_e( 'Dismiss', 'fse-nonprofit-ngo' ); ?></a></strong></p>
	    </div>
	    <?php

	}?>
	    <?php

	}
}

add_action( 'admin_notices', 'fse_nonprofit_ngo_admin_notice' );

if( ! function_exists( 'fse_nonprofit_ngo_update_admin_notice' ) ) :
/**
 * Updating admin notice on dismiss
*/
function fse_nonprofit_ngo_update_admin_notice(){
    if ( isset( $_GET['fse_nonprofit_ngo_admin_notice'] ) && $_GET['fse_nonprofit_ngo_admin_notice'] = '1' ) {
        update_option( 'fse_nonprofit_ngo_admin_notice', true );
    }
}
endif;
add_action( 'admin_init', 'fse_nonprofit_ngo_update_admin_notice' );

//After Switch theme function
add_action('after_switch_theme', 'fse_nonprofit_ngo_getstart_setup_options');
function fse_nonprofit_ngo_getstart_setup_options () {
    update_option('fse_nonprofit_ngo_admin_notice', FALSE );
}

function fse_nonprofit_ngo_google_fonts() {
 
	wp_enqueue_style( 'montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap', false ); 
}
 
add_action( 'wp_enqueue_scripts', 'fse_nonprofit_ngo_google_fonts' );