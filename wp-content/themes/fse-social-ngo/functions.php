<?php
/**
 * FSE Social NGO functions and definitions
 *
 * @package fse_social_ngo
 * @since 1.0
 */

if ( ! function_exists( 'fse_social_ngo_support' ) ) :
	function fse_social_ngo_support() {

		load_theme_textdomain( 'fse-social-ngo', get_template_directory() . '/languages' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		add_theme_support('woocommerce');

	 add_editor_style(get_stylesheet_directory_uri() . '/assets/css/editor-style.css');

	/* Theme Credit link */
	define('FSE_S0CIAL_NGO_BUY_NOW',__('https://www.cretathemes.com/products/social-ngo-wordpress-theme','fse-social-ngo'));
	define('FSE_S0CIAL_NGO_PRO_DEMO',__('https://pattern.cretathemes.com/fse-social-ngo/','fse-social-ngo'));
	define('FSE_S0CIAL_NGO_THEME_DOC',__('https://pattern.cretathemes.com/free-guide/fse-social-ngo/','fse-social-ngo'));
	define('FSE_S0CIAL_NGO_PRO_THEME_DOC',__('https://pattern.cretathemes.com/pro-guide/fse-social-ngo/','fse-social-ngo'));
	define('FSE_S0CIAL_NGO_SUPPORT',__('https://wordpress.org/support/theme/fse-social-ngo/','fse-social-ngo'));
	define('FSE_S0CIAL_NGO_REVIEW',__('https://wordpress.org/support/theme/fse-social-ngo/reviews/#new-post','fse-social-ngo'));
	define('FSE_S0CIAL_NGO_PRO_THEME_BUNDLE',__('https://www.cretathemes.com/products/wordpress-theme-bundle','fse-social-ngo'));
	define('FSE_S0CIAL_NGO_PRO_ALL_THEMES',__('https://www.cretathemes.com/collections/wordpress-block-themes','fse-social-ngo'));
		

	}
endif;
add_action( 'after_setup_theme', 'fse_social_ngo_support' );


if ( ! function_exists( 'fse_social_ngo_styles' ) ) :
	function fse_social_ngo_styles() {
		// Register theme stylesheet.
		$fse_social_ngo_theme_version = wp_get_theme()->get( 'Version' );

		$fse_social_ngo_version_string = is_string( $fse_social_ngo_theme_version ) ? $fse_social_ngo_theme_version : false;
		wp_enqueue_style(
			'fse-social-ngo-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$fse_social_ngo_version_string
		);

		wp_enqueue_style( 'dashicons' );

		wp_style_add_data( 'fse-social-ngo-style', 'rtl', 'replace' );

		//font-awesome
		wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/inc/fontawesome/css/all.css'
			, array(), '6.7.0' );

		// Enqueue Swiper CSS
		wp_enqueue_style(
		    'fse-social-ngo-swiper-bundle-style',
		    get_template_directory_uri() . '/assets/css/swiper-bundle.css',
		    array(),
		    $fse_social_ngo_version_string
		);

		// Enqueue Swiper JS
		wp_enqueue_script(
		    'fse-social-ngo-swiper-bundle-scripts',
		    get_template_directory_uri() . '/assets/js/swiper-bundle.js',
		    array('jquery'),
		    $fse_social_ngo_version_string,
		    true
		);

		// Enqueue Custom Script (depends on Swiper too)
		wp_enqueue_script(
		    'fse-social-ngo-custom-script',
		    get_template_directory_uri() . '/assets/js/custom-script.js',
		    array('jquery', 'fse-social-ngo-swiper-bundle-scripts'),
		    $fse_social_ngo_version_string,
		    true
		);
	}
endif;

add_action( 'wp_enqueue_scripts', 'fse_social_ngo_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Add block styles
require get_template_directory() . '/inc/block-styles.php';

// Block Filters
require get_template_directory() . '/inc/block-filters.php';

// Svg icons
require get_template_directory() . '/inc/icon-function.php';

// Get Started.
require get_template_directory() . '/inc/get-started/get-started.php';

// Customizer
require get_template_directory() . '/inc/customizer.php';

// TGM Plugin
require get_template_directory() . '/inc/tgm/tgm.php';


// Add Getstart admin notice
function fse_social_ngo_admin_notice() { 
    global $pagenow;
    $theme_args      = wp_get_theme();
    $meta            = get_option( 'fse_social_ngo_admin_notice' );
    $name            = $theme_args->__get( 'Name' );
    $current_screen  = get_current_screen();

    if( !$meta ){
	    if( is_network_admin() ){
	        return;
	    }

	    if( ! current_user_can( 'manage_options' ) ){
	        return;
	    } if($current_screen->base != 'appearance_page_fse-social-ngo-guide-page' ) { ?>

	    <div class="notice notice-success dash-notice">
	        <h1><?php esc_html_e('Hey, Thank you for installing FSE Social NGO Theme!', 'fse-social-ngo'); ?></h1>
	        <p><a class="button button-primary customize load-customize hide-if-no-customize get-start-btn" href="<?php echo esc_url( admin_url( 'themes.php?page=fse-social-ngo-guide-page' ) ); ?>"><?php esc_html_e('Navigate Getstart', 'fse-social-ngo'); ?></a> 
	        	<a class="button button-primary site-edit" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>"><?php esc_html_e('Site Editor', 'fse-social-ngo'); ?></a> 
				<a class="button button-primary buy-now-btn" href="<?php echo esc_url( FSE_S0CIAL_NGO_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'fse-social-ngo'); ?></a>
				<a class="button button-primary bundle-btn" href="<?php echo esc_url( FSE_S0CIAL_NGO_PRO_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e('Get Bundle', 'fse-social-ngo'); ?></a>
	        </p>
	        <p class="dismiss-link"><strong><a href="?fse_social_ngo_admin_notice=1"><?php esc_html_e( 'Dismiss', 'fse-social-ngo' ); ?></a></strong></p>
	    </div>
	    <?php

	}?>
	    <?php

	}
}

add_action( 'admin_notices', 'fse_social_ngo_admin_notice' );

if( ! function_exists( 'fse_social_ngo_update_admin_notice' ) ) :
/**
 * Updating admin notice on dismiss
*/
function fse_social_ngo_update_admin_notice(){
    if ( isset( $_GET['fse_social_ngo_admin_notice'] ) && $_GET['fse_social_ngo_admin_notice'] = '1' ) {
        update_option( 'fse_social_ngo_admin_notice', true );
    }
}
endif;
add_action( 'admin_init', 'fse_social_ngo_update_admin_notice' );

//After Switch theme function
add_action('after_switch_theme', 'fse_social_ngo_getstart_setup_options');
function fse_social_ngo_getstart_setup_options () {
    update_option('fse_social_ngo_admin_notice', FALSE );
}

function fse_social_ngo_google_fonts() {
 
	wp_enqueue_style( 'montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap', false ); 
}
 
add_action( 'wp_enqueue_scripts', 'fse_social_ngo_google_fonts' );