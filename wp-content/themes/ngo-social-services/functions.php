<?php
/**
 * NGO Social Services functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package NGO Social Services
 */


if ( ! function_exists( 'nonprofit_foundation_file_setup' ) ) :

    function nonprofit_foundation_file_setup() {

    if ( ! defined( 'CHARITY_ZONE_URL' ) ) {
        define( 'CHARITY_ZONE_URL', esc_url( 'https://www.themagnifico.net/products/social-services-wordpress-theme', 'ngo-social-services') );
    }
    if ( ! defined( 'CHARITY_ZONE_TEXT' ) ) {
        define( 'CHARITY_ZONE_TEXT', __( 'Social Services Pro','ngo-social-services' ));
    }
    if ( ! defined( 'CHARITY_ZONE_BUY_TEXT' ) ) {
        define( 'CHARITY_ZONE_BUY_TEXT', __( 'Buy NGO Social Services Pro','ngo-social-services' ));
    }
    if ( ! defined( 'CHARITY_ZONE_CONTACT_SUPPORT' ) ) {
        define('CHARITY_ZONE_CONTACT_SUPPORT',__('https://wordpress.org/support/theme/ngo-social-services','ngo-social-services'));
    }
    if ( ! defined( 'CHARITY_ZONE_REVIEW' ) ) {
        define('CHARITY_ZONE_REVIEW',__('https://wordpress.org/support/theme/ngo-social-services/reviews/#new-post','ngo-social-services'));
    }
    if ( ! defined( 'CHARITY_ZONE_LIVE_DEMO' ) ) {
        define('CHARITY_ZONE_LIVE_DEMO',__('https://demo.themagnifico.net/social-services/','ngo-social-services'));
    }
    if ( ! defined( 'CHARITY_ZONE_GET_PREMIUM_PRO' ) ) {
        define('CHARITY_ZONE_GET_PREMIUM_PRO',__('https://www.themagnifico.net/products/social-services-wordpress-theme','ngo-social-services'));
    }
    if ( ! defined( 'CHARITY_ZONE_PRO_DOC' ) ) {
        define('CHARITY_ZONE_PRO_DOC',__('https://demo.themagnifico.net/eard/wathiqa/charity-pro-doc/','ngo-social-services'));
    }
    if ( ! defined( 'CHARITY_ZONE_FREE_DOC' ) ) {
        define('CHARITY_ZONE_FREE_DOC',__('https://demo.themagnifico.net/eard/wathiqa/charity-pro-doc/','ngo-social-services'));
    }

    }
endif;
add_action( 'after_setup_theme', 'nonprofit_foundation_file_setup' );

function ngo_social_services_enqueue_styles() {
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.css');
    $ngo_social_services_parentcss = 'charity-zone-style';
    $ngo_social_services_theme = wp_get_theme(); wp_enqueue_style( $ngo_social_services_parentcss, get_template_directory_uri() . '/style.css', array(), $ngo_social_services_theme->parent()->get('Version'));
    wp_enqueue_style( 'ngo-social-services-style', get_stylesheet_uri(), array( $ngo_social_services_parentcss ), $ngo_social_services_theme->get('Version'));

    wp_enqueue_script( 'comment-reply', '/wp-includes/js/comment-reply.min.js', array(), false, true );

    wp_enqueue_style( 'ngo-social-services-style', get_stylesheet_uri() );
    require get_theme_file_path( '/custom-option.php' );
    wp_add_inline_style( 'ngo-social-services-style',$ngo_social_services_theme_css );
}

add_action( 'wp_enqueue_scripts', 'ngo_social_services_enqueue_styles' );

function ngo_social_services_admin_scripts() {
    // demo CSS
    wp_enqueue_style( 'ngo-social-services-demo-css', get_theme_file_uri( 'assets/css/demo.css' ) );
}
add_action( 'admin_enqueue_scripts', 'ngo_social_services_admin_scripts' );

/**
 * Enqueue theme color style.
 */
function ngo_social_services_theme_color() {

    $ngo_social_services_theme_color_css = '';
    $charity_zone_theme_color = get_theme_mod('charity_zone_theme_color');
    $charity_zone_theme_color_2 = get_theme_mod('charity_zone_theme_color_2');
    $charity_zone_preloader_bg_color = get_theme_mod('charity_zone_preloader_bg_color');
    $charity_zone_preloader_dot_1_color = get_theme_mod('charity_zone_preloader_dot_1_color');
    $charity_zone_preloader_dot_2_color = get_theme_mod('charity_zone_preloader_dot_2_color');

    if(get_theme_mod('charity_zone_preloader_bg_color') == '') {
        $charity_zone_preloader_bg_color = '#000';
    }
    if(get_theme_mod('charity_zone_preloader_dot_1_color') == '') {
        $charity_zone_preloader_dot_1_color = '#fff';
    }
    if(get_theme_mod('charity_zone_preloader_dot_2_color') == '') {
        $charity_zone_preloader_dot_2_color = '#f10026';
    }

    $ngo_social_services_theme_color_css = '
        .navbar-brand, .sticky .entry-title::before, .donate-btn a, .main-navigation .menu > li > a:hover, .main-navigation .sub-menu, #button, .sidebar input[type="submit"], .comment-respond input#submit, .post-navigation .nav-previous a:hover, .post-navigation .nav-next a:hover, posts-navigation .nav-previous a:hover, .posts-navigation .nav-next a:hover, .woocommerce .woocommerce-ordering select, .woocommerce ul.products li.product .onsale, .woocommerce span.onsale, .pro-button a, .woocommerce #respond input#submit, .woocommerce a.button,.woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce input.button.alt, .wp-block-button__link, .serv-box:hover, .woocommerce-account .woocommerce-MyAccount-navigation ul li, .btn-primary, .toggle-nav.mobile-menu button,.sidebar button[type="submit"],.sidebar .tagcloud a:hover,a.added_to_cart.wc-forward{
                background: '.esc_attr($charity_zone_theme_color).';
        }
        @media screen and (min-width: 320px) and (max-width: 1000px)
      		.sidenav {
      				background: '.esc_attr($charity_zone_theme_color).';
      		}
        .woocommerce button.button, woocommerce button.button.alt,thead{
                background: '.esc_attr($charity_zone_theme_color).'!important;
        }
        a,.sidebar a:hover, #colophon a:hover,#colophon a:focus, p.price, .woocommerce ul.products li.product .price, .woocommerce div.product p.price, .woocommerce div.product span.price, .woocommerce-message::before, .woocommerce-info::before,.donate-btn a:hover,.causes-inner-box li a {
            color: '.esc_attr($charity_zone_theme_color).';
        }
        .woocommerce-message, .woocommerce-info,.wp-block-pullquote,.wp-block-quote, .wp-block-quote:not(.is-large):not(.is-style-large), .wp-block-pullquote,.btn-primary,#causes-sec h3{
            border-color: '.esc_attr($charity_zone_theme_color).' !important;
        }
        .sidebar h5,#button:active,#button:hover,.donate-btn a:hover,.socialmedia,#colophon,.main-navigation .sub-menu > li > a:hover, .main-navigation .sub-menu > li > a:focus{
                background: '.esc_attr($charity_zone_theme_color_2).';
        }
        .woocommerce button.button:hover, woocommerce button.button.alt:hover{
                background: '.esc_attr($charity_zone_theme_color_2).'!important;
        }
        a:hover, h1, h2, h3, h4, h5, h6,.main-navigation .menu > li > a,{
                color: '.esc_attr($charity_zone_theme_color_2).';
        }
       .wp-block-quote, .wp-block-quote:not(.is-large):not(.is-style-large),.wp-block-pullquote,.btn-primary {
                border-color: '.esc_attr($charity_zone_theme_color_2).'!important;
        }
        .loading{
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
    ';
    wp_add_inline_style( 'ngo-social-services-style',$ngo_social_services_theme_color_css );

}
add_action( 'wp_enqueue_scripts', 'ngo_social_services_theme_color' );

function ngo_social_services_customize_register($wp_customize){

    // Pro Version
    class Ngo_Social_Services_Customize_Pro_Version extends WP_Customize_Control {
        public $type = 'pro_options';

        public function render_content() {
            echo '<span>For More <strong>'. esc_html( $this->label ) .'</strong>?</span>';
            echo '<a href="'. esc_url($this->description) .'" target="_blank">';
                echo '<span class="dashicons dashicons-info"></span>';
                echo '<strong> '. esc_html( CHARITY_ZONE_BUY_TEXT,'ngo-social-services' ) .'<strong></a>';
            echo '</a>';
        }
    }

    $wp_customize->add_setting('ngo_social_services_slider_button_setting', array(
        'default' => 1,
        'sanitize_callback' => 'charity_zone_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'ngo_social_services_slider_button_setting',array(
        'label'          => __( 'Enable Disable Slider Button', 'ngo-social-services' ),
        'section'        => 'charity_zone_top_slider',
        'settings'       => 'ngo_social_services_slider_button_setting',
        'type'           => 'checkbox',
        'priority' => 10,
    )));

    //Slider button text
    $wp_customize->add_setting('ngo_social_services_slider_button_text',array(
        'default'=> '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('ngo_social_services_slider_button_text',array(
        'label' => __('Slider Button Text','ngo-social-services'),
        'section'=> 'charity_zone_top_slider',
        'type'=> 'text',
        'priority' => 10,
    ));

    //Our Causes section
    $wp_customize->add_section( 'ngo_social_services_causes_section' , array(
        'title'      => __( 'Causes Settings', 'ngo-social-services' ),
        'priority'   => null
    ) );

    $wp_customize->add_setting('ngo_social_services_causes_setting', array(
        'default' => true,
        'sanitize_callback' => 'charity_zone_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'ngo_social_services_causes_setting',array(
        'label'          => __( 'Enable Disable Causes', 'ngo-social-services' ),
        'section'        => 'ngo_social_services_causes_section',
        'settings'       => 'ngo_social_services_causes_setting',
        'type'           => 'checkbox',
    )));

    $wp_customize->add_setting('ngo_social_services_causes_title', array(
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('ngo_social_services_causes_title', array(
        'label' => __('Section Title', 'ngo-social-services'),
        'section' => 'ngo_social_services_causes_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('ngo_social_services_causes_text', array(
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('ngo_social_services_causes_text', array(
        'label' => __('Section Text', 'ngo-social-services'),
        'section' => 'ngo_social_services_causes_section',
        'type' => 'text',
    ));

    $ngo_social_services_categories = get_categories();
    $ngo_social_services_cat_post = array();
    $ngo_social_services_cat_post[]= 'select';
    $i = 0;
    foreach($ngo_social_services_categories as $category){
        if($i==0){
            $default = $category->slug;
            $i++;
        }
        $ngo_social_services_cat_post[$category->slug] = $category->name;
    }

    $wp_customize->add_setting('ngo_social_services_causes',array(
        'default'   => 'select',
        'sanitize_callback' => 'charity_zone_sanitize_choices',
    ));
    $wp_customize->add_control('ngo_social_services_causes',array(
        'type'    => 'select',
        'choices' => $ngo_social_services_cat_post,
        'label' => __('Select Category to Display Causes','ngo-social-services'),
        'section' => 'ngo_social_services_causes_section',
    ));

     // Pro Version
    $wp_customize->add_setting( 'pro_version_services_causes', array(
        'sanitize_callback' => 'Charity_Zone_sanitize_custom_control'
    ));
    $wp_customize->add_control( new Ngo_Social_Services_Customize_Pro_Version ( $wp_customize,'pro_version_services_causes', array(
        'section'     => 'ngo_social_services_causes_section',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Customizer Options', 'ngo-social-services' ),
        'description' => esc_url( CHARITY_ZONE_URL ),
        'priority'    => 100
    )));

}
add_action('customize_register', 'ngo_social_services_customize_register');

if ( ! function_exists( 'ngo_social_services_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function ngo_social_services_setup() {

        add_theme_support( 'responsive-embeds' );

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

        add_image_size('ngo-social-services-featured-header-image', 2000, 660, true);

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
            'default-color' => '',
            'default-image' => '',
        ) ) );

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support( 'custom-logo', array(
            'height'      => 50,
            'width'       => 50,
            'flex-width'  => true,
        ) );

        add_editor_style( array( '/editor-style.css' ) );

        add_theme_support( 'align-wide' );

        add_theme_support( 'wp-block-styles' );
    }
endif;
add_action( 'after_setup_theme', 'ngo_social_services_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ngo_social_services_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'ngo-social-services' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'ngo-social-services' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>',
    ) );

}
add_action( 'widgets_init', 'ngo_social_services_widgets_init' );

function ngo_social_services_remove_customize_register() {
    global $wp_customize;

    $wp_customize->remove_setting( 'charity_zone_slider_opacity_color' );
    $wp_customize->remove_control( 'charity_zone_slider_opacity_color' );

    $wp_customize->remove_setting( 'charity_zone_search_setting' );
    $wp_customize->remove_control( 'charity_zone_search_setting' );
}
add_action( 'customize_register', 'ngo_social_services_remove_customize_register', 11 );

function ngo_social_services_remove_my_action() {
    remove_action( 'admin_menu','ngo_social_services_themepage' );
    remove_action( 'admin_menu','demo_importer_admin_page' );

    remove_action( 'remove_menu_page','charity-zone-info' );
    remove_action( 'admin_menu','demo_importer_admin_page' );
    remove_action( 'admin_notices','charity_zone_deprecated_hook_admin_notice' );
}
add_action( 'init', 'ngo_social_services_remove_my_action');

// Demo Content Code

// Ensure WordPress is loaded
if (!defined('ABSPATH')) {
    exit;
}

// Add admin menu page to trigger theme import
add_action('admin_menu', 'ngo_social_services_demo_importer_admin_page');

function ngo_social_services_demo_importer_admin_page() {
    add_theme_page(
        'Demo Theme Importer',     // Page title
        'Theme Importer',          // Menu title
        'manage_options',          // Capability
        'theme-importer',          // Menu slug
        'ngo_social_services_demo_importer_page',      // Callback function
    );
}

// Display the page content with the button
function ngo_social_services_demo_importer_page() {
    ?>
    <div class="wrap-main-box">
        <div class="main-box">
            <h2><?php echo esc_html('Welcome to NGO Social Services','ngo-social-services'); ?></h2>
            <h3><?php echo esc_html('Create your website in just one click','ngo-social-services'); ?></h3>
            <hr>
            <p><?php echo esc_html('The "Begin Installation" helps you quickly set up your website by importing sample content that mirrors the demo version of the theme. This tool provides you with a ready-made layout and structure, so you can easily see how your site will look and start customizing it right away. It\'s a straightforward way to get your site up and running with minimal effort.','ngo-social-services'); ?></p>
            <p><?php echo esc_html('Click the button below to install the demo content.','ngo-social-services'); ?></p>
            <hr>
            <button id="import-theme-mods" class="button button-primary"><?php echo esc_html('Begin Installation','ngo-social-services'); ?></button>
            <div id="import-response"></div>
        </div>
    </div>
    <?php
}

// Add the AJAX action to trigger theme mods import
add_action('wp_ajax_import_theme_mods', 'ngo_social_services_demo_importer_ajax_handler');

// Handle the AJAX request
function ngo_social_services_demo_importer_ajax_handler() {
    // Sample data to import
    $theme_mods_data = array(
        'header_textcolor' => '000000',  // Example: change header text color
        'background_color' => 'ffffff',  // Example: change background color
        'custom_logo'      => 123,       // Example: set a custom logo by attachment ID
        'footer_text'      => 'Custom Footer Text', // Example: custom footer text
    );

    // Call the function to import theme mods
    if (ngo_social_services_demo_theme_importer($theme_mods_data)) {
        // After importing theme mods, create the menu
        ngo_social_services_create_demo_menu();
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
function ngo_social_services_demo_theme_importer($import_data) {
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
function ngo_social_services_create_demo_menu() {

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
            'menu-item-title' =>  __('Home','ngo-social-services'),
            'menu-item-classes' => 'home',
            'menu-item-url' => home_url( '/' ),
            'menu-item-status' => 'publish'));

        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' => __('Events','ngo-social-services'),
            'menu-item-classes' => 'events',
            'menu-item-url' => home_url( '/' ),
            'menu-item-status' => 'publish',
        ));

        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' =>  __('Causes','ngo-social-services'),
            'menu-item-classes' => 'causes',
            'menu-item-url' => home_url( '/' ),
            'menu-item-status' => 'publish'
        ));

        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' =>  __('Projects','ngo-social-services'),
            'menu-item-classes' => 'projects',
            'menu-item-url' => home_url( '/' ),
            'menu-item-status' => 'publish'
        ));

        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' =>  __('News','ngo-social-services'),
            'menu-item-classes' => 'news',
            'menu-item-url' => home_url( '/' ),
            'menu-item-status' => 'publish'
        ));

        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' =>  __('Contact Us','ngo-social-services'),
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

		   $image_url = get_stylesheet_directory_uri().'/assets/img/slider.png';

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

    // Causes Section
    set_theme_mod( 'ngo_social_services_causes_title', 'Lorem Ipsum' );
    set_theme_mod( 'ngo_social_services_causes_text', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop.' );

    $post_heading = array('Childhood Development','Community center','Spread Happyness And Joy','Much Needed Help');
    for($i=1;$i<=4;$i++){


         $title = $post_heading[$i-1];
         $content = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.';
            // Create post object
         $my_post = array(
         'post_title'    => wp_strip_all_tags( $title ),
         'post_content'  => $content,
         'post_status'   => 'publish',
         'post_type'     => 'post',
         );

         // Insert the post into the database
         $post_id = wp_insert_post( $my_post );

         wp_set_object_terms( $post_id, 'Causes', 'category' );

         if ($post_id) {

            $image_url_course = get_stylesheet_directory_uri().'/assets/img/causes'.$i.'.jpg';

            $image_id = media_sideload_image($image_url_course, $post_id, null, 'id');

                if (!is_wp_error($image_id)) {
                    // Set the downloaded image as the post's featured image
                    set_post_thumbnail($post_id, $image_id);
                }
        }
    }
}
// Enqueue necessary scripts
add_action('admin_enqueue_scripts', 'ngo_social_services_demo_importer_enqueue_scripts');

function ngo_social_services_demo_importer_enqueue_scripts() {
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



add_action('admin_menu', 'remove_my_theme_page', 999);
function remove_my_theme_page() {
    remove_submenu_page('themes.php','charity-zone-info');
}

/**
 * Get CSS
 */

function ngo_social_services_getpage_css($hook) {
    wp_register_script( 'admin-notice-script', get_stylesheet_directory_uri() . '/inc/admin/js/admin-notice-script.js', array( 'jquery' ) );
    wp_localize_script('admin-notice-script','ngo_social_services',
        array('admin_ajax'  =>  admin_url('admin-ajax.php'),'wpnonce'  =>   wp_create_nonce('ngo_social_services_dismissed_notice_nonce')
        )
    );
    wp_enqueue_script('admin-notice-script');

    wp_localize_script( 'admin-notice-script', 'ngo_social_services_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
    if ( 'appearance_page_ngo-social-services-info' != $hook ) {
        return;
    }
}
add_action( 'admin_enqueue_scripts', 'ngo_social_services_getpage_css' );

//Admin Notice For Getstart
function ngo_social_services_ajax_notice_handler() {
    if ( isset( $_POST['type'] ) ) {
        $type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
        update_option( 'dismissed-' . $type, TRUE );
    }
}

function ngo_social_services_deprecated_hook_admin_notice() {

     // Check if the notice has been dismissed by the user
    $dismissed = get_user_meta(get_current_user_id(), 'ngo_social_services_dismissable_notice', true);

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
                <h2 style="font-weight: 600;line-height: 1.3; margin: 0px;"><?php esc_html_e('Thank You For Choosing ', 'ngo-social-services'); ?><?php echo wp_get_theme(); ?><h2>
                <p style="color: #3c434a; font-weight: 400; margin-bottom: 30px;"><?php _e('Get Started With Theme By Clicking On Getting Started.', 'ngo-social-services'); ?><p>
                <a class="admin-notice-btn button button-primary button-hero" target="_blank" href="<?php echo esc_url( admin_url( 'admin.php?page=theme-importer' )); ?>"><?php esc_html_e( 'Start Demo Import', 'charity-zone' ) ?></a>
                <a class="admin-notice-btn button button-primary button-hero" href="<?php echo esc_url( admin_url( 'themes.php?page=ngo-social-services-info.php' )); ?>"><?php esc_html_e( 'Get started', 'ngo-social-services' ) ?></a>
                <a class="admin-notice-btn button button-primary button-hero" target="_blank" href="<?php echo esc_url( CHARITY_ZONE_FREE_DOC ); ?>"><?php esc_html_e( 'Documentation', 'ngo-social-services' ) ?></a>
                <span style="padding-top: 15px; display: inline-block; padding-left: 8px;">
                <span class="dashicons dashicons-admin-links"></span>
                <a class="admin-notice-btn"  target="_blank" href="<?php echo esc_url( CHARITY_ZONE_LIVE_DEMO ); ?>"><?php esc_html_e( 'View Demo', 'ngo-social-services' ) ?></a>
                </span>
            </div>
        </div>
    <?php }
}

add_action( 'admin_notices', 'ngo_social_services_deprecated_hook_admin_notice' );

function ngo_social_services_switch_theme() {
    delete_user_meta(get_current_user_id(), 'ngo_social_services_dismissable_notice');
}
add_action('after_switch_theme', 'ngo_social_services_switch_theme');
function ngo_social_services_dismissable_notice() {
    update_user_meta(get_current_user_id(), 'ngo_social_services_dismissable_notice', true);
    die();
}