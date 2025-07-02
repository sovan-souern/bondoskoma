<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Charity Zone
 */

get_header(); ?>

    <div id="skip-content" class="container">
        <div class="row mb-5">
            <?php if (get_theme_mod('charity_zone_blog_sidebar_position','Right Side') == 'Left Side'){?>
                <?php get_sidebar(); ?>
            <?php }?>
            <div id="primary" class="content-area col-lg-9 col-md-8">
                <main id="main" class="site-main module-border-wrap">
                    <div class="row">
                        <?php if (have_posts()) { ?>

                            <header class="page-header">
                                <?php
                                the_archive_title('<h2 class="page-title">', '</h2>');
                                the_archive_description('<div class="archive-description">', '</div>');
                                ?>
                            </header>

                            <?php /* Start the Loop */
                            while (have_posts()) :
                                the_post();
                                
                                get_template_part( 'template-parts/content',get_post_format());

                            endwhile; ?>
                                
                            <?php if( get_theme_mod('charity_zone_post_page_pagination',1) == 1){ 
                                charity_zone_blog_posts_pagination(); 
                            }

                        }else {

                            get_template_part('template-parts/content', 'none');

                        } ?>
                    </div>
                </main>
            </div>
            <?php if (get_theme_mod('charity_zone_blog_sidebar_position','Right Side') == 'Right Side'){?>
                <?php get_sidebar(); ?>
            <?php }?>
        </div>
    </div>

<?php get_footer();