<?php
add_action( 'admin_menu', 'fse_social_ngo_getting_started' );
function fse_social_ngo_getting_started() {
	add_theme_page( esc_html__('Get Started', 'fse-social-ngo'), esc_html__('Get Started', 'fse-social-ngo'), 'edit_theme_options', 'fse-social-ngo-guide-page', 'fse_social_ngo_test_guide');
}

// Add a Custom CSS file to WP Admin Area
function fse_social_ngo_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/get-started/get-started.css');
}
add_action('admin_enqueue_scripts', 'fse_social_ngo_admin_theme_style');

//guidline for about theme
function fse_social_ngo_test_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'fse-social-ngo' );
?>
	<div class="wrapper-outer">
		<div class="left-main-box">
			<div class="intro"><h3><?php echo esc_html( $theme->Name ); ?></h3></div>
			<div class="left-inner">
				<div class="about-wrapper">
					<div class="col-left">
						<p><?php echo esc_html( $theme->get( 'Description' ) ); ?></p>
					</div>
					<div class="col-right">
						<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/screenshot.png" alt="" />
					</div>
				</div>
				<div class="link-wrapper">
					<h4><?php esc_html_e('Important Links', 'fse-social-ngo'); ?></h4>
					<div class="link-buttons">
						<a href="<?php echo esc_url( FSE_S0CIAL_NGO_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Free Setup Guide', 'fse-social-ngo'); ?></a>
						<a href="<?php echo esc_url( FSE_S0CIAL_NGO_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'fse-social-ngo'); ?></a>
						<a href="<?php echo esc_url( FSE_S0CIAL_NGO_PRO_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'fse-social-ngo'); ?></a>
						<a href="<?php echo esc_url( FSE_S0CIAL_NGO_PRO_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Setup Guide', 'fse-social-ngo'); ?></a>
					</div>
				</div>
				<div class="support-wrapper">
					<div class="editor-box">
						<i class="dashicons dashicons-admin-appearance"></i>
						<h4><?php esc_html_e('Theme Customization', 'fse-social-ngo'); ?></h4>
						<p><?php esc_html_e('Effortlessly modify & maintain your site using editor.', 'fse-social-ngo'); ?></p>
						<div class="support-button">
							<a class="button button-primary" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>" target="_blank"><?php esc_html_e('Site Editor', 'fse-social-ngo'); ?></a>
						</div>
					</div>
					<div class="support-box">
						<i class="dashicons dashicons-microphone"></i>
						<h4><?php esc_html_e('Need Support?', 'fse-social-ngo'); ?></h4>
						<p><?php esc_html_e('Go to our support forum to help you in case of queries.', 'fse-social-ngo'); ?></p>
						<div class="support-button">
							<a class="button button-primary" href="<?php echo esc_url( FSE_S0CIAL_NGO_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Get Support', 'fse-social-ngo'); ?></a>
						</div>
					</div>
					<div class="review-box">
						<i class="dashicons dashicons-star-filled"></i>
						<h4><?php esc_html_e('Leave Us A Review', 'fse-social-ngo'); ?></h4>
						<p><?php esc_html_e('Are you enjoying Our Theme? We would Love to hear your Feedback.', 'fse-social-ngo'); ?></p>
						<div class="support-button">
							<a class="button button-primary" href="<?php echo esc_url( FSE_S0CIAL_NGO_REVIEW ); ?>" target="_blank"><?php esc_html_e('Rate Us', 'fse-social-ngo'); ?></a>
						</div>
					</div>
				</div>
			</div>
			<div class="go-premium-box">
				<h4><?php esc_html_e('Why Go For Premium?', 'fse-social-ngo'); ?></h4>
				<ul class="pro-list">
					<li><?php esc_html_e('Advanced Customization Options', 'fse-social-ngo');?></li>
					<li><?php esc_html_e('One-Click Demo Import', 'fse-social-ngo');?></li>
					<li><?php esc_html_e('WooCommerce Integration & Enhanced Features', 'fse-social-ngo');?></li>
					<li><?php esc_html_e('Performance Optimization & SEO-Ready', 'fse-social-ngo');?></li>
					<li><?php esc_html_e('Premium Support & Regular Updates', 'fse-social-ngo');?></li>
				</ul>
			</div>
		</div>
		<div class="right-main-box">
			<div class="right-inner">
				<div class="pro-boxes">
					<h4><?php esc_html_e('Get Theme Bundle', 'fse-social-ngo'); ?></h4>
					<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/bundle.png" alt="bundle image" />
					<p><?php esc_html_e('SUMMER SALE: ', 'fse-social-ngo'); ?><strong><?php esc_html_e('Extra 20%', 'fse-social-ngo'); ?></strong><?php esc_html_e(' OFF on WordPress Theme Bundle Use Code: ', 'fse-social-ngo'); ?><strong><?php esc_html_e('“HEAT20”', 'fse-social-ngo'); ?></strong></p>
					<a href="<?php echo esc_url( FSE_S0CIAL_NGO_PRO_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e('Get Theme Bundle For $86', 'fse-social-ngo'); ?></a>
				</div>
				<div class="pro-boxes">
					<h4><?php esc_html_e('FSE Social NGO Pro', 'fse-social-ngo'); ?></h4>
					<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/premium.png" alt="premium image" />
					<p><?php esc_html_e('SUMMER SALE: ', 'fse-social-ngo'); ?><strong><?php esc_html_e('Extra 25%', 'fse-social-ngo'); ?></strong><?php esc_html_e(' OFF on WordPress Block Themes! Use Code: ', 'fse-social-ngo'); ?><strong><?php esc_html_e('“SUMMER25”', 'fse-social-ngo'); ?></strong></p>
					<a href="<?php echo esc_url( FSE_S0CIAL_NGO_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade To Pro', 'fse-social-ngo'); ?></a>
				</div>
				<div class="pro-boxes last-pro-box">
					<h4><?php esc_html_e('View All Our Themes', 'fse-social-ngo'); ?></h4>
					<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/all-themes.png" alt="all themes image" />
					<a href="<?php echo esc_url( FSE_S0CIAL_NGO_PRO_ALL_THEMES ); ?>" target="_blank"><?php esc_html_e('View All Our Premium Themes', 'fse-social-ngo'); ?></a>
				</div>
			</div>
		</div>
	</div>
<?php } ?>