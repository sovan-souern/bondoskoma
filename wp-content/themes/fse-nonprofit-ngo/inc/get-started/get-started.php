<?php
add_action( 'admin_menu', 'fse_nonprofit_ngo_getting_started' );
function fse_nonprofit_ngo_getting_started() {
	add_theme_page( esc_html__('Get Started', 'fse-nonprofit-ngo'), esc_html__('Get Started', 'fse-nonprofit-ngo'), 'edit_theme_options', 'fse-nonprofit-ngo-guide-page', 'fse_nonprofit_ngo_test_guide');
}

// Add a Custom CSS file to WP Admin Area
function fse_nonprofit_ngo_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/get-started/get-started.css');
}
add_action('admin_enqueue_scripts', 'fse_nonprofit_ngo_admin_theme_style');

//guidline for about theme
function fse_nonprofit_ngo_test_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'fse-nonprofit-ngo' );
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
					<h4><?php esc_html_e('Important Links', 'fse-nonprofit-ngo'); ?></h4>
					<div class="link-buttons">
						<a href="<?php echo esc_url( FSE_NONPROFIT_NGO_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Free Setup Guide', 'fse-nonprofit-ngo'); ?></a>
						<a href="<?php echo esc_url( FSE_NONPROFIT_NGO_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'fse-nonprofit-ngo'); ?></a>
						<a href="<?php echo esc_url( FSE_NONPROFIT_NGO_PRO_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'fse-nonprofit-ngo'); ?></a>
						<a href="<?php echo esc_url( FSE_NONPROFIT_NGO_PRO_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Setup Guide', 'fse-nonprofit-ngo'); ?></a>
					</div>
				</div>
				<div class="support-wrapper">
					<div class="editor-box">
						<i class="dashicons dashicons-admin-appearance"></i>
						<h4><?php esc_html_e('Theme Customization', 'fse-nonprofit-ngo'); ?></h4>
						<p><?php esc_html_e('Effortlessly modify & maintain your site using editor.', 'fse-nonprofit-ngo'); ?></p>
						<div class="support-button">
							<a class="button button-primary" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>" target="_blank"><?php esc_html_e('Site Editor', 'fse-nonprofit-ngo'); ?></a>
						</div>
					</div>
					<div class="support-box">
						<i class="dashicons dashicons-microphone"></i>
						<h4><?php esc_html_e('Need Support?', 'fse-nonprofit-ngo'); ?></h4>
						<p><?php esc_html_e('Go to our support forum to help you in case of queries.', 'fse-nonprofit-ngo'); ?></p>
						<div class="support-button">
							<a class="button button-primary" href="<?php echo esc_url( FSE_NONPROFIT_NGO_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Get Support', 'fse-nonprofit-ngo'); ?></a>
						</div>
					</div>
					<div class="review-box">
						<i class="dashicons dashicons-star-filled"></i>
						<h4><?php esc_html_e('Leave Us A Review', 'fse-nonprofit-ngo'); ?></h4>
						<p><?php esc_html_e('Are you enjoying Our Theme? We would Love to hear your Feedback.', 'fse-nonprofit-ngo'); ?></p>
						<div class="support-button">
							<a class="button button-primary" href="<?php echo esc_url( FSE_NONPROFIT_NGO_REVIEW ); ?>" target="_blank"><?php esc_html_e('Rate Us', 'fse-nonprofit-ngo'); ?></a>
						</div>
					</div>
				</div>
			</div>
			<div class="go-premium-box">
				<h4><?php esc_html_e('Why Go For Premium?', 'fse-nonprofit-ngo'); ?></h4>
				<ul class="pro-list">
					<li><?php esc_html_e('Advanced Customization Options', 'fse-nonprofit-ngo');?></li>
					<li><?php esc_html_e('One-Click Demo Import', 'fse-nonprofit-ngo');?></li>
					<li><?php esc_html_e('WooCommerce Integration & Enhanced Features', 'fse-nonprofit-ngo');?></li>
					<li><?php esc_html_e('Performance Optimization & SEO-Ready', 'fse-nonprofit-ngo');?></li>
					<li><?php esc_html_e('Premium Support & Regular Updates', 'fse-nonprofit-ngo');?></li>
				</ul>
			</div>
		</div>
		<div class="right-main-box">
			<div class="right-inner">
				<div class="pro-boxes">
					<h4><?php esc_html_e('Get Theme Bundle', 'fse-nonprofit-ngo'); ?></h4>
					<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/bundle.png" alt="bundle image" />
					<p><?php esc_html_e('SUMMER SALE: ', 'fse-nonprofit-ngo'); ?><strong><?php esc_html_e('Extra 20%', 'fse-nonprofit-ngo'); ?></strong><?php esc_html_e(' OFF on WordPress Theme Bundle Use Code: ', 'fse-nonprofit-ngo'); ?><strong><?php esc_html_e('“HEAT20”', 'fse-nonprofit-ngo'); ?></strong></p>
					<a href="<?php echo esc_url( FSE_NONPROFIT_NGO_PRO_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e('Get Theme Bundle For $86', 'fse-nonprofit-ngo'); ?></a>
				</div>
				<div class="pro-boxes">
					<h4><?php esc_html_e('FSE Nonprofit NGO Pro', 'fse-nonprofit-ngo'); ?></h4>
					<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/premium.png" alt="premium image" />
					<p><?php esc_html_e('SUMMER SALE: ', 'fse-nonprofit-ngo'); ?><strong><?php esc_html_e('Extra 25%', 'fse-nonprofit-ngo'); ?></strong><?php esc_html_e(' OFF on WordPress Block Themes! Use Code: ', 'fse-nonprofit-ngo'); ?><strong><?php esc_html_e('“SUMMER25”', 'fse-nonprofit-ngo'); ?></strong></p>
					<a href="<?php echo esc_url( FSE_NONPROFIT_NGO_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade To Pro', 'fse-nonprofit-ngo'); ?></a>
				</div>
				<div class="pro-boxes last-pro-box">
					<h4><?php esc_html_e('View All Our Themes', 'fse-nonprofit-ngo'); ?></h4>
					<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/all-themes.png" alt="all themes image" />
					<a href="<?php echo esc_url( FSE_NONPROFIT_NGO_PRO_ALL_THEMES ); ?>" target="_blank"><?php esc_html_e('View All Our Premium Themes', 'fse-nonprofit-ngo'); ?></a>
				</div>
			</div>
		</div>
	</div>
<?php } ?>