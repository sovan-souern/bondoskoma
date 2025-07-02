<?php
 /**
  * Title: Main Header
  * Slug: fse-social-ngo/main-header
  */
?>

<!-- wp:group {"className":"header-box","layout":{"type":"constrained","contentSize":"85%"}} -->
<div class="wp-block-group header-box"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|60","right":"0"}}},"backgroundColor":"header-bg","className":"top-header","layout":{"type":"default"}} -->
<div class="wp-block-group top-header has-header-bg-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:var(--wp--preset--spacing--60)"><!-- wp:columns {"className":"top-header-inner"} -->
<div class="wp-block-columns top-header-inner"><!-- wp:column {"verticalAlignment":"center","width":"40%","className":"info-box"} -->
<div class="wp-block-column is-vertically-aligned-center info-box" style="flex-basis:40%"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"call-box","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group call-box"><!-- wp:image {"id":64,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo get_parent_theme_file_uri( '/assets/images/call.png' ); ?>" alt="" class="wp-image-64"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"17px"}},"textColor":"white"} -->
<p class="has-white-color has-text-color has-link-color" style="font-size:17px"><?php esc_html_e('0761-8523-398','fse-social-ngo'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"mail-box","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group mail-box"><!-- wp:image {"id":61,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo get_parent_theme_file_uri( '/assets/images/mail.png' ); ?>" alt="" class="wp-image-61"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"18px"}},"textColor":"white"} -->
<p class="has-white-color has-text-color has-link-color" style="font-size:18px"><?php esc_html_e('support@example.com','fse-social-ngo'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%","className":"dumy-box"} -->
<div class="wp-block-column is-vertically-aligned-center dumy-box" style="flex-basis:20%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"40%","className":"top-right-box"} -->
<div class="wp-block-column is-vertically-aligned-center top-right-box" style="flex-basis:40%"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","className":"social-box"} -->
<div class="wp-block-column is-vertically-aligned-center social-box"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"18px"}},"textColor":"white"} -->
<p class="has-white-color has-text-color has-link-color" style="font-size:18px"><?php esc_html_e('follow us','fse-social-ngo'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"header-bg","iconColorValue":"#123A54","iconBackgroundColor":"white","iconBackgroundColorValue":"#ffffff","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"40%","className":"top-btn-box"} -->
<div class="wp-block-column is-vertically-aligned-center top-btn-box" style="flex-basis:40%"><!-- wp:group {"className":"donate-btn-upper","layout":{"type":"default"}} -->
<div class="wp-block-group donate-btn-upper"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"backgroundColor":"primary","className":"donate-btn","layout":{"type":"default"}} -->
<div class="wp-block-group donate-btn has-primary-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"id":74,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo get_parent_theme_file_uri( '/assets/images/money.png' ); ?>" alt="" class="wp-image-74"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"}},"textColor":"white"} -->
<p class="has-white-color has-text-color has-link-color" style="font-size:18px;font-style:normal;font-weight:700;text-transform:uppercase"><a href="#"><?php esc_html_e('donate','fse-social-ngo'); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|60","left":"0","top":"0","bottom":"0"}}},"backgroundColor":"background","className":"lower-header","layout":{"type":"default"}} -->
<div class="wp-block-group lower-header has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--60);padding-bottom:0;padding-left:0"><!-- wp:columns {"verticalAlignment":"center","className":"lower-header-inner"} -->
<div class="wp-block-columns are-vertically-aligned-center lower-header-inner"><!-- wp:column {"verticalAlignment":"center","width":"30%","className":"header-logo"} -->
<div class="wp-block-column is-vertically-aligned-center header-logo" style="flex-basis:30%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"backgroundColor":"primary","className":"logodiv","layout":{"type":"default"}} -->
<div class="wp-block-group logodiv has-primary-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:site-logo /-->

<!-- wp:site-title {"textAlign":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"28px","fontStyle":"normal","fontWeight":"800"}},"textColor":"white"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"60%","className":"header-nav"} -->
<div class="wp-block-column is-vertically-aligned-center header-nav" style="flex-basis:60%"><!-- wp:navigation {"textColor":"heading","overlayBackgroundColor":"background","overlayTextColor":"heading","className":"header-navigation","style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400","textTransform":"uppercase"}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:navigation-link {"label":"Home","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"About","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"causes","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"events","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Blog","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"shop","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Contact Us","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"10%","className":"header-right-box"} -->
<div class="wp-block-column is-vertically-aligned-center header-right-box" style="flex-basis:10%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search","buttonText":"Search","buttonPosition":"button-only","buttonUseIcon":true,"isSearchFieldHidden":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","className":"header-search"} /-->

<!-- wp:woocommerce/mini-cart {"miniCartIcon":"bag-alt","iconColor":{"slug":"heading","color":"#0D2C40","name":"heading","class":"has-heading-icon-color"},"productCountColor":{"slug":"primary","color":"#14B986","name":"Secondary Bg Color","class":"has-primary-product-count-color"},"style":{"typography":{"fontSize":"15px"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->