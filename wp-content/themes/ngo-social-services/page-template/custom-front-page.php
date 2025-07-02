<?php
/**
 * Template Name: Custom Front Page
 */

get_header(); ?>

<main id="skip-content">
  <section id="top-slider">
    <?php if(get_theme_mod('charity_zone_slider_setting',true) != ''){ ?>
    <?php $charity_zone_slide_pages = array();
      for ( $ngo_social_services_count = 1; $ngo_social_services_count <= 3; $ngo_social_services_count++ ) {
        $ngo_social_services_mod = intval( get_theme_mod( 'charity_zone_top_slider_page' . $ngo_social_services_count ));
        if ( 'page-none-selected' != $ngo_social_services_mod ) {
          $charity_zone_slide_pages[] = $ngo_social_services_mod;
        }
      }
      if( !empty($charity_zone_slide_pages) ) :
        $ngo_social_services_args = array(
          'post_type' => 'page',
          'post__in' => $charity_zone_slide_pages,
          'orderby' => 'post__in'
        );
        $ngo_social_services_query = new WP_Query( $ngo_social_services_args );
        if ( $ngo_social_services_query->have_posts() ) :
          $i = 1;
    ?>
    <div class="owl-carousel" role="listbox">
      <?php  while ( $ngo_social_services_query->have_posts() ) : $ngo_social_services_query->the_post(); ?>
        <div class="slider-box">
          <?php if(has_post_thumbnail()){
            the_post_thumbnail();
            } else{?>
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/slider.png" alt="" />
          <?php } ?>
          <div class="slider-inner-box">
            <?php if(get_theme_mod('charity_zone_slider_title_setting',1) == 1){ ?>
              <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
            <?php }?>
            <?php if(get_theme_mod('charity_zone_slider_content_setting',1) == 1){ ?>
              <p><?php the_excerpt(); ?></p>
            <?php }?>
            <?php if(get_theme_mod('ngo_social_services_slider_button_setting',1) == 1 && get_theme_mod('ngo_social_services_slider_button_text','Donate Now') != ''){ ?>
              <div class="donate-btn text-center">
                <a href="<?php the_permalink(); ?>"><?php esc_html_e(get_theme_mod('ngo_social_services_slider_button_text','Donate Now')); ?></a>
              </div>
            <?php }?>
          </div>
        </div>
      <?php $i++; endwhile;
      wp_reset_postdata();?>
    </div>
    <?php else : ?>
      <div class="no-postfound"></div>
    <?php endif;
    endif;?>
    <?php } ?>
  </section>

<?php if(get_theme_mod('charity_zone_services_setting',true) != ''){ ?>
  <section id="serve-sec">
    <div class="container">
      <div class="row">
        <?php
          $charity_zone_catData = get_theme_mod('charity_zone_services','services');
          if($charity_zone_catData){
            $charity_zone_page_query = new WP_Query(array( 'category_name' => esc_html($charity_zone_catData,'ngo-social-services')));
            while( $charity_zone_page_query->have_posts() ) : $charity_zone_page_query->the_post(); ?>
              <div class="col-lg-4 col-md-4">
                <div class="serv-box my-2">
                  <?php if(has_post_thumbnail()){
                    the_post_thumbnail();
                    } else{?>
                    <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/slider.png" alt="" />
                  <?php } ?>
                  <h4><a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
                  <p><?php $charity_zone_excerpt = get_the_excerpt(); echo esc_html( charity_zone_string_limit_words( $charity_zone_excerpt,8 ) ); ?></p>
                </div>
              </div>
            <?php endwhile;
            wp_reset_postdata();
          } ?>
      </div>
    </div>
  </section>
<?php } ?>

<?php if(get_theme_mod('charity_zone_about_setting',true) != ''){ ?>
  <section id="about_sec">
    <div class="container">
      <?php $charity_zone_about_pages = array();
        $ngo_social_services_mod = intval( get_theme_mod( 'charity_zone_about_page','' ));
        if ( 'page-none-selected' != $ngo_social_services_mod ) {
          $charity_zone_about_pages[] = $ngo_social_services_mod;
        }
        if( !empty($charity_zone_about_pages) ) :
          $ngo_social_services_args = array(
            'post_type' => 'page',
            'post__in' => $charity_zone_about_pages,
            'orderby' => 'post__in'
          );
          $ngo_social_services_query = new WP_Query( $ngo_social_services_args );
          if ( $ngo_social_services_query->have_posts() ) :
      ?>
      <?php  while ( $ngo_social_services_query->have_posts() ) : $ngo_social_services_query->the_post(); ?>
        <div class="row">
          <div class="col-lg-6 col-md-6 align-self-center">
            <div class="about-inner-box">
              <h3><?php the_title(); ?></h3>
              <p><?php the_excerpt(); ?></p>
              <div class="donate-btn">
                <a href="<?php the_permalink(); ?>"><?php esc_html_e('Donate Now','ngo-social-services'); ?></a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 align-self-center">
            <img src="<?php the_post_thumbnail_url('full'); ?>"/>
          </div>
        </div>
      <?php $i++; endwhile;
      wp_reset_postdata();?>
      <?php else : ?>
        <div class="no-postfound"></div>
      <?php endif;
      endif;?>
    </div>
  </section>
<?php } ?>

<?php if(get_theme_mod('ngo_social_services_causes_setting',true) != ''){ ?>
  <section id="causes-sec" class="pb-5">
    <div class="container">
      <div class="row mb-4">
        <div class="col-lg-4 col-md-4 col-sm-4 self-align">
          <?php if(get_theme_mod('ngo_social_services_causes_title') != ''){ ?>
            <h3 class="mb-0"><?php echo esc_html(get_theme_mod('ngo_social_services_causes_title','')); ?></h3>
          <?php }?>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 self-align">
          <?php if(get_theme_mod('ngo_social_services_causes_text') != ''){ ?>
            <p class="mb-0"><?php echo esc_html(get_theme_mod('ngo_social_services_causes_text','')); ?></p>
          <?php }?>
        </div>
      </div>
      <div class="row">
        <?php
          $ngo_social_services_catData = get_theme_mod('ngo_social_services_causes','causes');
          if($ngo_social_services_catData){
            $ngo_social_services_page_query = new WP_Query(array( 'category_name' => esc_html($ngo_social_services_catData,'ngo-social-services')));
            while( $ngo_social_services_page_query->have_posts() ) : $ngo_social_services_page_query->the_post(); ?>
              <div class="col-lg-3 col-md-3">
                <div class="causes-box mb-4">
                  <?php the_post_thumbnail(); ?>
                  <div class="causes-inner-box">
                    <h5><?php the_category(); ?></h5>
                    <h4><a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
                    <p class="mb-0"><?php $ngo_social_services_excerpt = get_the_excerpt(); echo esc_html( charity_zone_string_limit_words( $ngo_social_services_excerpt,8 ) ); ?></p>
                  </div>
                </div>
              </div>
            <?php endwhile;
            wp_reset_postdata();
          } ?>
      </div>
    </div>
  </section>
<?php } ?>

</main>

<?php get_footer(); ?>
