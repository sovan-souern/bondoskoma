<?php
 /**
  * Title: Main Header
  * Slug: fse-nonprofit-ngo/main-header
  */
?>

<!-- wp:group {"className":"top-bar","style":{"spacing":{"padding":{"right":"0px","left":"0px","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"secondary-bg-color","layout":{"type":"constrained","contentSize":"70%"}} -->
<div class="wp-block-group top-bar has-secondary-bg-color-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:0px;padding-bottom:var(--wp--preset--spacing--30);padding-left:0px"><!-- wp:columns {"className":"top-bar-inner"} -->
<div class="wp-block-columns top-bar-inner"><!-- wp:column {"verticalAlignment":"center","width":"20%","className":"translator-box "} -->
<div class="wp-block-column is-vertically-aligned-center translator-box" style="flex-basis:20%"><!-- wp:shortcode -->
<!-- /wp:shortcode --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"80%","className":"top-right-box"} -->
<div class="wp-block-column is-vertically-aligned-center top-right-box" style="flex-basis:80%"><!-- wp:group {"className":"top-main-row","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group top-main-row"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"12px"}},"textColor":"white"} -->
<p class="has-white-color has-text-color has-link-color" style="font-size:12px"><a href="#"><?php esc_html_e('Have any question?','fse-nonprofit-ngo'); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"top-info-row","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group top-info-row"><!-- wp:image {"id":130,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo get_parent_theme_file_uri( '/assets/images/envelope.png' ); ?>" alt="" class="wp-image-130"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"12px"}},"textColor":"white"} -->
<p class="has-white-color has-text-color has-link-color" style="font-size:12px"><?php esc_html_e('support@example.com','fse-nonprofit-ngo'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"top-info-row","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group top-info-row"><!-- wp:image {"id":125,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo get_parent_theme_file_uri( '/assets/images/phone.png' ); ?>" alt="" class="wp-image-125"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"12px"}},"textColor":"white"} -->
<p class="has-white-color has-text-color has-link-color" style="font-size:12px"><?php esc_html_e('+91-1234-456-789','fse-nonprofit-ngo'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:social-links {"iconColor":"black","iconColorValue":"#000000","iconBackgroundColor":"primary","iconBackgroundColorValue":"#F4B03E","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"lower-header-upper","style":{"spacing":{"padding":{"right":"0px","left":"0px","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"70%"}} -->
<div class="wp-block-group lower-header-upper has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:0px;padding-bottom:var(--wp--preset--spacing--30);padding-left:0px"><!-- wp:columns {"verticalAlignment":"center","className":"lower-header"} -->
<div class="wp-block-columns are-vertically-aligned-center lower-header"><!-- wp:column {"verticalAlignment":"center","width":"25%","className":"logo-box"} -->
<div class="wp-block-column is-vertically-aligned-center logo-box" style="flex-basis:25%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:site-logo /-->

<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontSize":"20px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"700"}},"textColor":"foreground","fontFamily":"nunito-sans"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"55%","className":"nav-box"} -->
<div class="wp-block-column is-vertically-aligned-center nav-box" style="flex-basis:55%"><!-- wp:navigation {"textColor":"body-text","overlayBackgroundColor":"background","overlayTextColor":"foreground","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account"]},"style":{"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"400","textTransform":"capitalize"},"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:navigation-link {"label":"Home","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"About","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Cases","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Events","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Contact","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Blog","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%","className":"btn-box"} -->
<div class="wp-block-column is-vertically-aligned-center btn-box" style="flex-basis:20%"><!-- wp:buttons {"style":{"typography":{"fontSize":"14px"}},"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons has-custom-font-size" style="font-size:14px"><!-- wp:button {"backgroundColor":"background","textColor":"body-text","style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"border":{"radius":"10px","width":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|body-text"}}},"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"600"}},"borderColor":"foreground"} -->
<div class="wp-block-button has-custom-font-size" style="font-size:12px;font-style:normal;font-weight:600"><a class="wp-block-button__link has-body-text-color has-background-background-color has-text-color has-background has-link-color has-border-color has-foreground-border-color wp-element-button" href="#" style="border-width:1px;border-radius:10px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><?php esc_html_e('Donate Now','fse-nonprofit-ngo'); ?> <i class="fa-solid fa-heart"></i></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->