<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Charity Zone
 */

get_header(); ?>

    <div id="skip-content" class="container">
        <div class="row">
            <?php if (get_theme_mod('charity_zone_single_page_sidebar_layout','No Sidebar') == 'Left Side'){?>
                <?php get_sidebar(); ?>
            <?php }?>
            <div id="primary" class="content-area <?php if (get_theme_mod('charity_zone_single_page_sidebar_layout','No Sidebar') == 'Left Side' || get_theme_mod('charity_zone_single_page_sidebar_layout','No Sidebar') == 'Right Side'){?> col-lg-9 col-md-8 <?php }?>">
                <main id="main" class="site-main module-border-wrap mb-4">
                    <?php
                    while (have_posts()) : the_post();

                        get_template_part('template-parts/content', 'page');

                        // If comments are open or we have at least one comment, load up the comment template.
                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif;

                    endwhile; // End of the loop.
                    ?>
                </main>
            </div>
            <?php if (get_theme_mod('charity_zone_single_page_sidebar_layout','No Sidebar') == 'Right Side'){?>
                <?php get_sidebar(); ?>
            <?php }?>
        </div>
    </div>
    
<?php get_footer();