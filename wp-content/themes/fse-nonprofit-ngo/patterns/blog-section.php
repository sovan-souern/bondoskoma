<?php
 /**
  * Title: Blog Section
  * Slug: fse-nonprofit-ngo/blog-section
  */
?>

<!-- wp:group {"className":" wp-block-section blog-sec alignfull","style":{"spacing":{"padding":{"right":"0px","left":"0px","top":"0px","bottom":"70px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"70%"}} -->
<div class="wp-block-group wp-block-section blog-sec alignfull" style="margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:70px;padding-left:0px"><!-- wp:group {"className":"sec-header-box","layout":{"type":"default"}} -->
<div class="wp-block-group sec-header-box"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"20px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|40"}}},"textColor":"primary"} -->
<h3 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--40);font-size:20px;font-style:normal;font-weight:700"><?php esc_html_e('Blog','fse-nonprofit-ngo'); ?></h3>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"30px","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<h2 class="wp-block-heading has-text-align-center" style="margin-top:0;margin-bottom:0;font-size:30px;font-style:normal;font-weight:700"><?php esc_html_e('Insights and Updates','fse-nonprofit-ngo'); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"12px"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
<p class="has-text-align-center has-foreground-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:0;font-size:12px"><?php esc_html_e('Stay informed with the latest news, stories, and insights on global issues and our ongoing efforts.','fse-nonprofit-ngo'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":5,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"blog-box","style":{"border":{"radius":"15px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0px","right":"0px"}}},"backgroundColor":"footer-bg","layout":{"type":"default"}} -->
<div class="wp-block-group blog-box has-footer-bg-background-color has-background" style="border-radius:15px;padding-top:0;padding-right:0px;padding-bottom:0;padding-left:0px"><!-- wp:post-featured-image {"style":{"border":{"radius":"15px"}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-title {"textAlign":"center","isLink":true,"style":{"typography":{"fontSize":"21px","fontStyle":"normal","fontWeight":"500"}}} /-->

<!-- wp:post-excerpt {"textAlign":"center","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"var:preset|spacing|20","bottom":"0"}},"typography":{"fontSize":"14px"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:buttons {"className":"service-btn","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons service-btn"><!-- wp:button {"style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
<div class="wp-block-button has-custom-font-size" style="font-size:14px;font-style:normal;font-weight:700"><a class="wp-block-button__link wp-element-button" href="#" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><?php esc_html_e('View All','fse-nonprofit-ngo'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->