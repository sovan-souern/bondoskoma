<?php
/**
 *  Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Charity Zone
 */

$charity_zone_single_post_thumb =  get_theme_mod( 'charity_zone_single_post_thumb', 1 );
$charity_zone_single_post_meta =  get_theme_mod( 'charity_zone_single_post_meta', 1 );
$charity_zone_single_post_title = get_theme_mod( 'charity_zone_single_post_title', 1 );
$charity_zone_single_post_tags = get_theme_mod( 'charity_zone_single_post_tags', 1 );
$charity_zone_single_post_page_content =  get_theme_mod( 'charity_zone_single_post_page_content', 1 );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php if ($charity_zone_single_post_title == 1 ) {?>
            <?php the_title('<h2 class="entry-title">', '</h2>'); ?>
        <?php }?>
        <?php if ($charity_zone_single_post_thumb == 1 ) {?>
            <?php if(has_post_thumbnail()){
            the_post_thumbnail();
            } else{?>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/slider1.png" alt="" />
          <?php } ?>
        <?php }?>
        <?php if ('post' === get_post_type()) :?>
            <?php if ($charity_zone_single_post_meta == 1 ) {?>
                <div class="entry-meta">
                    <?php
                    charity_zone_posted_on();
                    ?>
                </div>
            <?php }?>
        <?php endif; ?>
    </header>
    <div class="entry-content">
        <?php if ($charity_zone_single_post_page_content == 1 ) {?>
            <?php
            the_content(sprintf(
                wp_kses(
                /* translators: %s: Name of current post. Only visible to screen readers */
                    __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'charity-zone'),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                esc_html( get_the_title() )
            ));

            wp_link_pages(array(
                'before' => '<div class="page-links">' . esc_html__('Pages:', 'charity-zone'),
                'after' => '</div>',
            ));
            ?>
        <?php }?>
    </div>
    <?php if ($charity_zone_single_post_tags == 1 ) {?>
        <footer class="entry-footer">
            <?php charity_zone_entry_footer(); ?>
        </footer>
    <?php }?>
</article>