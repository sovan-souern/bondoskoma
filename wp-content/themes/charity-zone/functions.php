<?php
/**
 * Charity Zone functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Charity Zone
 */

include get_theme_file_path( 'vendor/wptrt/autoload/src/Charity_Zone_Loader.php' );

$charity_zone_loader = new \WPTRT\Autoload\Charity_Zone_Loader();

$charity_zone_loader->charity_zone_add( 'WPTRT\\Customize\\Section', get_theme_file_path( 'vendor/wptrt/customize-section-button/src' ) );

$charity_zone_loader->charity_zone_register();

if ( ! function_exists( 'charity_zone_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function charity_zone_setup() {

		load_theme_textdomain( 'charity-zone', get_template_directory() . '/languages' );

		/*
		 * Enable support for Post Formats.
		 *
		 * See: https://codex.wordpress.org/Post_Formats
		*/
		add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

		add_theme_support( 'responsive-embeds');

		add_theme_support( 'woocommerce' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

        add_image_size('charity-zone-featured-header-image', 2000, 660, true);

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'primary' => esc_html__( 'Primary','charity-zone' ),
	        'footer'=> esc_html__( 'Footer Menu','charity-zone' ),
        ) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'charity_zone_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 100,
			'width'       => 100,
			'flex-width'  => true,
		) );

		add_editor_style( array( '/editor-style.css' ) );
		add_action('wp_ajax_charity_zone_dismissable_notice', 'charity_zone_dismissable_notice');

		add_theme_support( 'wp-block-styles' );

		add_theme_support( 'align-wide' );
	}
endif;
add_action( 'after_setup_theme', 'charity_zone_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function charity_zone_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'charity_zone_content_width', 1170 );
}
add_action( 'after_setup_theme', 'charity_zone_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function charity_zone_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'charity-zone' ),
		'id'            => 'sidebar',
		'description'   => '',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Woocommerce Single Product Page Sidebar', 'charity-zone' ),
		'id'            => 'woocommerce-single-product-page-sidebar',
		'description'   => '',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Woocommerce Shop Page Sidebar', 'charity-zone' ),
		'id'            => 'woocommerce-shop-page-sidebar',
		'description'   => '',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 1', 'charity-zone' ),
		'id'            => 'charity-zone-footer1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="footer-column-widget-title">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 2', 'charity-zone' ),
		'id'            => 'charity-zone-footer2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="footer-column-widget-title">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 3', 'charity-zone' ),
		'id'            => 'charity-zone-footer3',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="footer-column-widget-title">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 4', 'charity-zone' ),
		'id'            => 'charity-zone-footer4',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="footer-column-widget-title">',
		'after_title'   => '</h5>',
	) );
}
add_action( 'widgets_init', 'charity_zone_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function charity_zone_scripts() {

	require_once get_theme_file_path( 'inc/wptt-webfont-loader.php' );

		wp_enqueue_style(
		'lato',
		wptt_get_webfont_url( 'https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap' ),
		array(),
		'1.0'
	);

	wp_enqueue_style(
		'lobster',
		wptt_get_webfont_url( 'https://fonts.googleapis.com/css2?family=Lobster&display=swap' ),
		array(),
		'1.0'
	);

	wp_enqueue_style( 'charity-zone-block-editor-style', get_theme_file_uri('/assets/css/block-editor-style.css') );

    // load bootstrap css
    wp_enqueue_style( 'bootstrap-css',get_template_directory_uri() . '/assets/css/bootstrap.css');

	// fontawesome
	wp_enqueue_style( 'fontawesome-style',get_template_directory_uri().'/assets/css/fontawesome/css/all.css' );

	wp_enqueue_style( 'owl.carousel-style',get_template_directory_uri().'/assets/css/owl.carousel.css' );

	wp_enqueue_style( 'charity-zone-block-editor-style', get_theme_file_uri('/assets/css/block-editor-style.css') );

    wp_enqueue_style( 'charity-zone-style', get_stylesheet_uri() );
    require get_parent_theme_file_path( '/custom-option.php' );
	wp_add_inline_style( 'charity-zone-style',$charity_zone_theme_css );

	wp_style_add_data('charity-zone-basic-style', 'rtl', 'replace');

    wp_enqueue_script('owl.carousel-jquery',get_template_directory_uri() . '/assets/js/owl.carousel.js', array('jquery'), '', true );

    wp_enqueue_script('charity-zone-theme-js',get_template_directory_uri() . '/assets/js/theme-script.js', array('jquery'), '', true );

    wp_enqueue_script('charity-zone-skip-link-focus-fix',get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'charity_zone_scripts' );

/**
 * Enqueue theme color style.
 */
function charity_zone_theme_color() {

   $charity_zone_theme_color_css = '';
    $charity_zone_preloader_bg_color = get_theme_mod('charity_zone_preloader_bg_color');
    $charity_zone_preloader_dot_1_color = get_theme_mod('charity_zone_preloader_dot_1_color');
    $charity_zone_preloader_dot_2_color = get_theme_mod('charity_zone_preloader_dot_2_color');
  	$charity_zone_preloader2_dot_color = get_theme_mod('charity_zone_preloader2_dot_color');
    $charity_zone_theme_color = get_theme_mod('charity_zone_theme_color');
    $charity_zone_theme_color_2 = get_theme_mod('charity_zone_theme_color_2');
    $charity_zone_logo_max_height = get_theme_mod('charity_zone_logo_max_height');

	if(get_theme_mod('charity_zone_logo_max_height') == '') {
		$charity_zone_logo_max_height = '24';
	}
	if(get_theme_mod('charity_zone_preloader_dot_1_color') == '') {
		$charity_zone_preloader_dot_1_color = '#ffffff';
	}
	if(get_theme_mod('charity_zone_preloader_dot_2_color') == '') {
		$charity_zone_preloader_dot_2_color = '#f10026';
	}

	$charity_zone_theme_color_css = '
	.custom-logo-link img{
			max-height: '.esc_attr($charity_zone_logo_max_height).'px;
		 }
		.navbar-brand,.sidebar button[type="submit"],.sticky .entry-title::before,.donate-btn a,.main-navigation .menu > li > a:hover,.main-navigation .sub-menu,#button,.sidebar input[type="submit"],.comment-respond input#submit,.post-navigation .nav-previous a:hover, .post-navigation .nav-next a:hover, .posts-navigation .nav-previous a:hover, .posts-navigation .nav-next a:hover,.woocommerce .woocommerce-ordering select,.woocommerce ul.products li.product .onsale, .woocommerce span.onsale,.pro-button a, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.wp-block-button__link,.serv-box:hover,.woocommerce-account .woocommerce-MyAccount-navigation ul li,.btn-primary,.toggle-nav.mobile-menu button,thead,a.added_to_cart.wc-forward{
			background: '.esc_attr($charity_zone_theme_color).';
		}
		@media screen and (max-width:1000px){
	         .sidenav #site-navigation {
	        background: '.esc_attr($charity_zone_theme_color).';
	 		}
		}
		a,.sidebar a:hover,#colophon a:hover, #colophon a:focus,p.price, .woocommerce ul.products li.product .price, .woocommerce div.product p.price, .woocommerce div.product span.price,.woocommerce-message::before, .woocommerce-info::before,.slider-inner-box a h2,.social-link i,.socialmedia i, #colophon h5 {
			color: '.esc_attr($charity_zone_theme_color).';
		}
		.woocommerce-message, .woocommerce-info,.wp-block-pullquote,.wp-block-quote, .wp-block-quote:not(.is-large):not(.is-style-large), .wp-block-pullquote,.btn-primary,.sidebar th, #theme-sidebar td{
			border-color: '.esc_attr($charity_zone_theme_color).';
		}
		.has-black-background-color,.has-black-color,#button:hover,#button:active,.main-navigation .sub-menu > li > a:hover, .main-navigation .sub-menu > li > a:focus,#colophon,.sidebar h5,.socialmedia,.donate-btn a:hover,.woocommerce-account .woocommerce-MyAccount-navigation ul li:hover,.woocommerce .woocommerce-error .button:hover, .woocommerce .woocommerce-info .button:hover, .woocommerce .woocommerce-message .button:hover, .woocommerce-page .woocommerce-error .button:hover, .woocommerce-page .woocommerce-info .button, .woocommerce-page .woocommerce-message .button:hover,.woocommerce button.button:hover,.comment-respond input#submit:hover,.woocommerce a.button:hover,.woocommerce a.button.alt:hover,.woocommerce button.button:hover,.woocommerce button.button.alt:hover,a.added_to_cart.wc-forward:hover{
			background: '.esc_attr($charity_zone_theme_color_2).';
		}
		.main-navigation .menu > li > a,.custom-header .bg-gradient .centered a button,.custom-header .bg-gradient .centered a button,h1,h2,h3,h4,h5,h6,.serv-box a{
			color: '.esc_attr($charity_zone_theme_color_2).';
		}
		.woocommerce .quantity .qty{
			border-color: '.esc_attr($charity_zone_theme_color_2).';
		}
		.loading, .loading2{
			background-color: '.esc_attr($charity_zone_preloader_bg_color).';
		 }
		 @keyframes loading {
		  0%,
		  100% {
		  	transform: translatey(-2.5rem);
		    background-color: '.esc_attr($charity_zone_preloader_dot_1_color).';
		  }
		  50% {
		  	transform: translatey(2.5rem);
		    background-color: '.esc_attr($charity_zone_preloader_dot_2_color).';
		  }
		}
		.load hr {
			background-color: '.esc_attr($charity_zone_preloader2_dot_color).';
		}
	';
    wp_add_inline_style( 'charity-zone-style',$charity_zone_theme_color_css );

}
add_action( 'wp_enqueue_scripts', 'charity_zone_theme_color' );

/**
 * Enqueue S Header.
 */
function charity_zone_sticky_header() {

	$charity_zone_sticky_header = get_theme_mod('charity_zone_sticky_header');

	$charity_zone_custom_style= "";

	if($charity_zone_sticky_header != true){

		$charity_zone_custom_style .='.stick_header{';

			$charity_zone_custom_style .='position: static;';

		$charity_zone_custom_style .='}';
	}

	wp_add_inline_style( 'charity-zone-style',$charity_zone_custom_style );

}
add_action( 'wp_enqueue_scripts', 'charity_zone_sticky_header' );

function charity_zone_files_setup() {

	/**
	 * Customizer additions.
	 */
	require get_template_directory() . '/inc/customizer.php';

	if ( ! defined( 'CHARITY_ZONE_CONTACT_SUPPORT' ) ) {
		define('CHARITY_ZONE_CONTACT_SUPPORT',__('https://wordpress.org/support/theme/charity-zone/','charity-zone'));
	}
	if ( ! defined( 'CHARITY_ZONE_REVIEW' ) ) {
		define('CHARITY_ZONE_REVIEW',__('https://wordpress.org/support/theme/charity-zone/reviews/','charity-zone'));
	}
	if ( ! defined( 'CHARITY_ZONE_LIVE_DEMO' ) ) {
		define('CHARITY_ZONE_LIVE_DEMO',__('https://demo.themagnifico.net/charity-zone/','charity-zone'));
	}
	if ( ! defined( 'CHARITY_ZONE_GET_PREMIUM_PRO' ) ) {
		define('CHARITY_ZONE_GET_PREMIUM_PRO',__('https://www.themagnifico.net/products/charity-wordpress-theme','charity-zone'));
	}
	if ( ! defined( 'CHARITY_ZONE_PRO_DOC' ) ) {
		define('CHARITY_ZONE_PRO_DOC',__('https://demo.themagnifico.net/eard/wathiqa/charity-zone-pro-doc/','charity-zone'));
	}
	if ( ! defined( 'CHARITY_ZONE_FREE_DOC' ) ) {
		define('CHARITY_ZONE_FREE_DOC',__('https://demo.themagnifico.net/eard/wathiqa/charity-zone-free-doc/','charity-zone'));
	}

}

add_action( 'after_setup_theme', 'charity_zone_files_setup' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/* TGM. */
require get_parent_theme_file_path( '/inc/tgm.php' );

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/** * Posts pagination. */
if ( ! function_exists( 'charity_zone_blog_posts_pagination' ) ) {
	function charity_zone_blog_posts_pagination() {
		$pagination_type = get_theme_mod( 'charity_zone_blog_pagination_type', 'blog-nav-numbers' );
		if ( $pagination_type == 'blog-nav-numbers' ) {
			the_posts_pagination();
		} else {
			the_posts_navigation();
		}
	}
}

/*dropdown page sanitization*/
function charity_zone_sanitize_dropdown_pages( $page_id, $setting ) {
	// Ensure $input is an absolute integer.
	$page_id = absint( $page_id );
	// If $page_id is an ID of a published page, return it; otherwise, return the default.
	return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

function charity_zone_preloader1(){
	if(get_theme_mod('charity_zone_preloader_type', 'Preloader 1') == 'Preloader 1' ) {
		return true;
	}
	return false;
}

function charity_zone_preloader2(){
	if(get_theme_mod('charity_zone_preloader_type', 'Preloader 1') == 'Preloader 2' ) {
		return true;
	}
	return false;
}

/*radio button sanitization*/
function charity_zone_sanitize_choices( $input, $setting ) {
    global $wp_customize;
    $control = $wp_customize->get_control( $setting->id );
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function charity_zone_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

/* Excerpt Limit Begin */
function charity_zone_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function charity_zone_skip_link_focus_fix() {
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', 'charity_zone_skip_link_focus_fix' );

function charity_zone_sanitize_checkbox( $input ) {
	// Boolean check
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

function charity_zone_sanitize_select( $input, $setting ){
    $input = sanitize_key($input);
    $choices = $setting->manager->get_control( $setting->id )->choices;
    return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

 //Float
function charity_zone_sanitize_float( $input ) {
    return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
}

function charity_zone_sanitize_number_absint( $number, $setting ) {
	// Ensure $number is an absolute integer (whole number, zero or greater).
	$number = absint( $number );

	// If the input is an absolute integer, return it; otherwise, return the default
	return ( $number ? $number : $setting->default );
}

function charity_zone_sanitize_number_range( $number, $setting ) {
	
	// Ensure input is an absolute integer.
	$number = absint( $number );
	
	// Get the input attributes associated with the setting.
	$atts = $setting->manager->get_control( $setting->id )->input_attrs;
	
	// Get minimum number in the range.
	$min = ( isset( $atts['min'] ) ? $atts['min'] : $number );
	
	// Get maximum number in the range.
	$max = ( isset( $atts['max'] ) ? $atts['max'] : $number );
	
	// Get step.
	$step = ( isset( $atts['step'] ) ? $atts['step'] : 1 );
	
	// If the number is within the valid range, return it; otherwise, return the default
	return ( $min <= $number && $number <= $max && is_int( $number / $step ) ? $number : $setting->default );
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'charity_zone_shop_per_page', 9 );
function charity_zone_shop_per_page( $cols ) {
  	$cols = get_theme_mod( 'charity_zone_product_per_page', 9 );
	return $cols;
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'charity_zone_loop_columns');
if (!function_exists('charity_zone_loop_columns')) {
	function charity_zone_loop_columns() {
		$columns = get_theme_mod( 'charity_zone_products_per_row', 3 );
		return $columns; // 3 products per row
	}
}

/**
 * Get CSS
 */

 function charity_zone_getpage_css($hook) {
	wp_register_script( 'admin-notice-script', get_template_directory_uri() . '/inc/admin/js/admin-notice-script.js', array( 'jquery' ) );
    wp_localize_script('admin-notice-script','charity_zone',
		array('admin_ajax'	=>	admin_url('admin-ajax.php'),'wpnonce'  =>	wp_create_nonce('charity_zone_dismissed_notice_nonce')
		)
	);
	wp_enqueue_script('admin-notice-script');

    wp_localize_script( 'admin-notice-script', 'charity_zone_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
	if ( 'appearance_page_charity-zone-info' != $hook ) {
		return;
	}
}
add_action( 'admin_enqueue_scripts', 'charity_zone_getpage_css' );

//Admin Notice For Getstart
function charity_zone_ajax_notice_handler() {
    if ( isset( $_POST['type'] ) ) {
        $type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
        update_option( 'dismissed-' . $type, TRUE );
    }
}

function charity_zone_deprecated_hook_admin_notice() {

     // Check if the notice has been dismissed by the user
    $dismissed = get_user_meta(get_current_user_id(), 'charity_zone_dismissable_notice', true);

    // Exclude the notice from being shown on the "Theme Importer" page
    $current_screen = get_current_screen();
    if ($current_screen && $current_screen->id === 'appearance_page_theme-importer') {
        return; // Don't show the notice on this page
    }

    if (!$dismissed) {  
    	?>
        <div class="updated notice notice-success is-dismissible notice-get-started-class" data-notice="get_started" style="background: #f7f9f9; padding: 20px 10px; display: flex;">
	    	<div class="tm-admin-image">
	    		<img style="width: 100%;max-width: 320px;line-height: 40px;display: inline-block;vertical-align: top;border: 2px solid #ddd;border-radius: 4px;" src="<?php echo esc_url(get_stylesheet_directory_uri()) .'/screenshot.png'; ?>" />
	    	</div>
	    	<div class="tm-admin-content" style="padding-left: 30px; align-self: center">
	    		<h2 style="font-weight: 600;line-height: 1.3; margin: 0px;"><?php esc_html_e('Thank You For Choosing ', 'charity-zone'); ?><?php echo wp_get_theme(); ?><h2>
	    		<p style="color: #3c434a; font-weight: 400; margin-bottom: 30px;"><?php _e('Get Started With Theme By Clicking On Getting Started.', 'charity-zone'); ?><p>
	    		<a class="admin-notice-btn button button-primary button-hero" target="_blank" href="<?php echo esc_url( admin_url( 'admin.php?page=theme-importer' )); ?>"><?php esc_html_e( 'Start Demo Import', 'charity-zone' ) ?></a>
	        	<a class="admin-notice-btn button button-primary button-hero" href="<?php echo esc_url( admin_url( 'themes.php?page=charity-zone-info.php' )); ?>"><?php esc_html_e( 'Get started', 'charity-zone' ) ?></a>
	        	<a class="admin-notice-btn button button-primary button-hero" target="_blank" href="<?php echo esc_url( CHARITY_ZONE_FREE_DOC ); ?>"><?php esc_html_e( 'Documentation', 'charity-zone' ) ?></a>
	        	<span style="padding-top: 15px; display: inline-block; padding-left: 8px;">
	        	<span class="dashicons dashicons-admin-links"></span>
	        	<a class="admin-notice-btn"	 target="_blank" href="<?php echo esc_url( CHARITY_ZONE_LIVE_DEMO ); ?>"><?php esc_html_e( 'View Demo', 'charity-zone' ) ?></a>
	        	</span>
	    	</div>
        </div>
    <?php }
}

add_action( 'admin_notices', 'charity_zone_deprecated_hook_admin_notice' );

function charity_zone_switch_theme() {
    delete_user_meta(get_current_user_id(), 'charity_zone_dismissable_notice');
}
add_action('after_switch_theme', 'charity_zone_switch_theme');
function charity_zone_dismissable_notice() {
    update_user_meta(get_current_user_id(), 'charity_zone_dismissable_notice', true);
    die();
}

add_action( 'wp_ajax_charity-zone-check-plugin-exists', 'charity_zone_check_plugin_exists' );
add_action( 'wp_ajax_charity_zone_install_and_activate_plugin', 'charity_zone_install_and_activate_plugin' );

require_once get_parent_theme_file_path( '/inc/class-tm-helper.php' );

function charity_zone_check_plugin_exists() {
	$plugin_text_domain = $_POST['plugin_text_domain'];
	$main_plugin_file 	= $_POST['main_plugin_file'];
	$plugin_path = $plugin_text_domain . '/' . $main_plugin_file;

	$get_plugins					= get_plugins();
	$is_plugin_installed	= false;
	$activation_status 		= false;
	if ( isset( $get_plugins[$plugin_path] ) ) {
		$is_plugin_installed = true;

		$activation_status = is_plugin_active( $plugin_path );
	}
	wp_send_json_success(
		array(
			'install_status'  =>	$is_plugin_installed,
			'active_status'		=>	$activation_status,
			'plugin_path'			=>	$plugin_path,
			'plugin_slug'			=>	$plugin_text_domain
		)
	);
}

function charity_zone_install_and_activate_plugin() {
	$post_plugin_details = $_POST['plugin_details'];
	$plugin_text_domain = $post_plugin_details['plugin_text_domain'];
	$plugin_main_file		=	$post_plugin_details['plugin_main_file'];
	$plugin_url					=	$post_plugin_details['plugin_url'];

	$plugin = array(
		'text_domain'	=> $plugin_text_domain,
		'path' 				=> $plugin_url,
		'install' 		=> $plugin_text_domain . '/' . $plugin_main_file
	);

	$is_installed = charity_zone_get_plugins( $plugin );

	$msg = '';
	if ( $is_installed ) {
		$is_installed = true;
		$msg = 'Plugin Installed Successfully!';
	} else {
		$is_installed = false;
		$msg = 'Something Went Wrong!';
	}
	$response = array( 'status' => $is_installed, 'msg' => $msg );
	wp_send_json( $response );
	exit;
}
function charity_zone_get_plugins( $plugin ) {
	$args = array(
		'path'					=>	ABSPATH . 'wp-content/plugins/',
		'preserve_zip'	=>	false
	);

	$get_plugins = get_plugins();
	if ( !isset( $get_plugins[ trim( $plugin['install'] ) ] ) ) {
		charity_zone_plugin_download( $plugin['path'], $args['path'] . $plugin['text_domain'] . '.zip' );
		charity_zone_plugin_unpack( $args, $args['path'] . $plugin['text_domain'] . '.zip' );
		// sleep( 3 );
	}
	$is_activated = charity_zone_plugin_activate( $plugin['install'] );
	return $is_activated;
}

function charity_zone_plugin_download($url, $path) {
    $response = wp_safe_remote_get($url);

    if (is_wp_error($response)) {
        return false; // Error occurred during HTTP request
    }

    $body = wp_remote_retrieve_body($response);

    if (file_put_contents($path, $body)) {
        return true;
    } else {
        return false;
    }
}

function charity_zone_plugin_unpack( $args, $target ) {

	$file_system = Fashion_Estore_Helper::get_instance()->get_filesystem();

	$plugin_path = WP_PLUGIN_DIR . '/';

	/* Acceptable way to use the function */
	$file	=	$target;
	$to		=	$plugin_path;

	$result = unzip_file( $file, $to );

	if( $result !== true ) {
		return false;
	} else {
		wp_delete_file( $file );
		return true;
	}
}

function charity_zone_plugin_activate( $installer ) {
	wp_cache_flush();

	$plugin = plugin_basename( trim( $installer ) );
	$activate_plugin = activate_plugin( $plugin );
	return true;
}

// Demo Content Code

// Ensure WordPress is loaded
if (!defined('ABSPATH')) {
    exit;
}

// Add admin menu page to trigger theme import
add_action('admin_menu', 'demo_importer_admin_page');

function demo_importer_admin_page() {
    add_theme_page(
        'Demo Theme Importer',     // Page title
        'Theme Importer',          // Menu title
        'manage_options',          // Capability
        'theme-importer',          // Menu slug
        'demo_importer_page',      // Callback function
    );
}

// Display the page content with the button
function demo_importer_page() {
    ?>
    <div class="wrap-main-box">
        <div class="main-box">
            <h2><?php echo esc_html('Welcome to Charity Zone','charity-zone'); ?></h2>
            <h3><?php echo esc_html('Create your website in just one click','charity-zone'); ?></h3>
            <hr>
            <p><?php echo esc_html('The "Begin Installation" helps you quickly set up your website by importing sample content that mirrors the demo version of the theme. This tool provides you with a ready-made layout and structure, so you can easily see how your site will look and start customizing it right away. It\'s a straightforward way to get your site up and running with minimal effort.','charity-zone'); ?></p>
            <p><?php echo esc_html('Click the button below to install the demo content.','charity-zone'); ?></p>
            <hr>
            <button id="import-theme-mods" class="button button-primary"><?php echo esc_html('Begin Installation','charity-zone'); ?></button>
            <div id="import-response"></div>
        </div>
    </div>
    <?php
}

// Add the AJAX action to trigger theme mods import
add_action('wp_ajax_import_theme_mods', 'demo_importer_ajax_handler');

// Handle the AJAX request
function demo_importer_ajax_handler() {
    // Sample data to import
    $theme_mods_data = array(
        'header_textcolor' => '000000',  // Example: change header text color
        'background_color' => 'ffffff',  // Example: change background color
        'custom_logo'      => 123,       // Example: set a custom logo by attachment ID
        'footer_text'      => 'Custom Footer Text', // Example: custom footer text
    );

    // Call the function to import theme mods
    if (demo_theme_importer($theme_mods_data)) {
        // After importing theme mods, create the menu
        create_demo_menu();
        wp_send_json_success(array(
        	'msg' => 'Theme mods imported successfully.',
        	'redirect' => home_url()
        ));
    } else {
        wp_send_json_error('Failed to import theme mods.');
    }

    wp_die();
}

// Function to set theme mods
function demo_theme_importer($import_data) {
    if (is_array($import_data)) {
        foreach ($import_data as $mod_name => $mod_value) {
            set_theme_mod($mod_name, $mod_value);
        }
        return true;
    } else {
        return false;
    }
}

// Function to create demo menu
function create_demo_menu() {

    // Page import process
    $pages_to_create = array(
        array(
            'title'    => 'Home',
            'slug'     => 'home',
            'template' => 'page-template/custom-front-page.php',
        ),
        array(
            'title'    => 'Events',
            'slug'     => 'events',
            'template' => '',
        ),
        array(
            'title'    => 'Causes',
            'slug'     => 'causes',
            'template' => '',
        ),
        array(
            'title'    => 'Projects',
            'slug'     => 'projects',
            'template' => '',
        ),
        array(
            'title'    => 'News',
            'slug'     => 'News',
            'template' => '',
		),
        array(
            'title'    => 'Contact Us',
            'slug'     => 'contact-us',
            'template' => '',
        ),
    );

    // Loop through each page data to create pages
    foreach ($pages_to_create as $page_data) {
        $page_check = get_page_by_title($page_data['title']);
        
        // Check if the page doesn't exist already
        if (!$page_check) {
            $page = array(
                'post_type'    => 'page',
                'post_title'   => $page_data['title'],
                'post_status'  => 'publish',
                'post_author'  => 1,
                'post_slug'    => $page_data['slug'],
            );
            
            // Insert the page and get the inserted page ID
            $page_id = wp_insert_post($page);
            
            // Set the page template
            if ($page_id) {
                add_post_meta($page_id, '_wp_page_template', $page_data['template']);
            }
        }
    }

    // Set 'Home' as the front page
    $home_page = get_page_by_title('Home');
    if ($home_page) {
        update_option('page_on_front', $home_page->ID);
        update_option('show_on_front', 'page');
    }

    // Set 'Blog' as the posts page
    $blog_page = get_page_by_title('Blog');
    if ($blog_page) {
        update_option('page_for_posts', $blog_page->ID);
    }
    // ------- Create Main Menu --------
    $menuname =  'Primary Menu';
    $bpmenulocation = 'primary';
    $menu_exists = wp_get_nav_menu_object($menuname);
    
    if (!$menu_exists) {
        $menu_id = wp_create_nav_menu($menuname);
        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' =>  __('Home','charity-zone'),
            'menu-item-classes' => 'home',
            'menu-item-url' => home_url( '/' ),
            'menu-item-status' => 'publish'));

        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' => __('Events','charity-zone'),
            'menu-item-classes' => 'events',
            'menu-item-url' => home_url( '/' ),
            'menu-item-status' => 'publish',
        ));

        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' =>  __('Causes','charity-zone'),
            'menu-item-classes' => 'causes',
            'menu-item-url' => home_url( '/' ),
            'menu-item-status' => 'publish'
        ));

        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' =>  __('Projects','charity-zone'),
            'menu-item-classes' => 'projects',
            'menu-item-url' => home_url( '/' ),
            'menu-item-status' => 'publish'
        ));

        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' =>  __('News','charity-zone'),
            'menu-item-classes' => 'news',
            'menu-item-url' => home_url( '/' ),
            'menu-item-status' => 'publish'
        ));

        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' =>  __('Contact Us','charity-zone'),
            'menu-item-classes' => 'contact-us',
            'menu-item-url' => home_url( '/' ),
            'menu-item-status' => 'publish'
        ));

        // Assign the menu to the location
        if (!has_nav_menu($bpmenulocation)) {
            $locations = get_theme_mod('nav_menu_locations');
            $locations[$bpmenulocation] = $menu_id;
            set_theme_mod('nav_menu_locations', $locations);
        }
    }
    
    //Header
	set_theme_mod( 'charity_zone_facebook_icon', 'fab fa-facebook-f' );
    set_theme_mod( 'charity_zone_facebook_url', '#' );

	set_theme_mod( 'charity_zone_twitter_icon', 'fab fa-twitter' );
    set_theme_mod( 'charity_zone_twitter_url', '#' );

	set_theme_mod( 'charity_zone_instagram_icon', 'fab fa-instagram' );
    set_theme_mod( 'charity_zone_intagram_url', '#' );
	
	set_theme_mod( 'charity_zone_linkedin_icon', 'fab fa-linkedin-in' );
    set_theme_mod( 'charity_zone_linkedin_url', '#' );
	
	set_theme_mod( 'charity_zone_pinterest_icon', 'fab fa-pinterest-p' );
    set_theme_mod( 'charity_zone_pintrest_url', '#' );

	set_theme_mod( 'charity_zone_phone_icon', 'fas fa-phone-square' );
    set_theme_mod( 'charity_zone_phone_number_info', '1234567890' );

	set_theme_mod( 'charity_zone_email_icon', 'fas fa-envelope-square' );
    set_theme_mod( 'charity_zone_email_info', 'support@example.com' );

	set_theme_mod( 'charity_zone_donate_button_text', 'Donate Now' );
    set_theme_mod( 'charity_zone_donate_button_url', '#' );

    // Slider Section
	
	for($i=1;$i<=3;$i++){
		$title = 'LOREM IPSUM IS SIMPLY';
		$content = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.';
		   // Create post object
		$my_post = array(
		'post_title'    => wp_strip_all_tags( $title ),
		'post_content'  => $content,
		'post_status'   => 'publish',
		'post_type'     => 'page',
		);

		// Insert the post into the database
		$post_id = wp_insert_post( $my_post );

		if ($post_id) {
		   // Set the theme mod for the slider page
		   set_theme_mod('charity_zone_top_slider_page' . $i, $post_id);

		   $image_url = get_template_directory_uri().'/assets/img/slider'.$i.'.png';

		   $image_id = media_sideload_image($image_url, $post_id, null, 'id');

			   if (!is_wp_error($image_id)) {
				   // Set the downloaded image as the post's featured image
				   set_post_thumbnail($post_id, $image_id);
			   }
		 }
    }

	// Services

	$post_heading = array('Give Donation','Become a Volunteer','Give Scholarship');
    for($i=1;$i<=3;$i++){


         $title = $post_heading[$i-1];
         $content = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.';
            // Create post object
         $my_post = array(
         'post_title'    => wp_strip_all_tags( $title ),
         'post_content'  => $content,
         'post_status'   => 'publish',
         'post_type'     => 'post',
         );

         // Insert the post into the database
         $post_id = wp_insert_post( $my_post );

         wp_set_object_terms( $post_id, 'Services', 'category' );

         if ($post_id) {

            $image_url_course = get_stylesheet_directory_uri().'/assets/img/service'.$i.'.png';

            $image_id = media_sideload_image($image_url_course, $post_id, null, 'id');

                if (!is_wp_error($image_id)) {
                    // Set the downloaded image as the post's featured image
                    set_post_thumbnail($post_id, $image_id);
                }
        }
    }

	for($i=1;$i<=1;$i++){
		$title = 'About Us';
		$content = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop.';
		   // Create post object
		$my_post = array(
		'post_title'    => wp_strip_all_tags( $title ),
		'post_content'  => $content,
		'post_status'   => 'publish',
		'post_type'     => 'page',
		);

		// Insert the post into the database
		$post_id = wp_insert_post( $my_post );

		if ($post_id) {
		   // Set the theme mod for the slider page
		   set_theme_mod('charity_zone_about_page', $post_id);

		   $image_url = get_template_directory_uri().'/assets/img/about.jpg';

		   $image_id = media_sideload_image($image_url, $post_id, null, 'id');

			   if (!is_wp_error($image_id)) {
				   // Set the downloaded image as the post's featured image
				   set_post_thumbnail($post_id, $image_id);
			   }
		 }
    }
}
// Enqueue necessary scripts
add_action('admin_enqueue_scripts', 'demo_importer_enqueue_scripts');

function demo_importer_enqueue_scripts() {
    wp_enqueue_script(
        'demo-theme-importer',
        get_template_directory_uri() . '/assets/js/theme-importer.js', // Path to your JS file
        array('jquery'),
        null,
        true
    );

    wp_enqueue_style('demo-importer-style', get_template_directory_uri() . '/assets/css/importer.css', array(), '');

    // Localize script to pass AJAX URL to JS
    wp_localize_script(
        'demo-theme-importer',
        'demoImporter',
        array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce'    => wp_create_nonce('theme_importer_nonce')
        )
    );
}

//woocommerce plugin skip 
add_filter( 'woocommerce_prevent_automatic_wizard_redirect', '__return_true' );

/**
 * Theme Info.
 */
function charity_zone_theme_info_load() {
	require get_theme_file_path( '/inc/theme-installation/theme-installation.php' );
}
add_action( 'init', 'charity_zone_theme_info_load' );