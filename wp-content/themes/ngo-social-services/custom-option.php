<?php

    $ngo_social_services_theme_css= "";

    /*--------------------------- Scroll to top positions -------------------*/

    $charity_zone_scroll_position = get_theme_mod( 'charity_zone_scroll_top_position','Right');
    if($charity_zone_scroll_position == 'Right'){
        $ngo_social_services_theme_css .='#button{';
            $ngo_social_services_theme_css .='right: 20px;';
        $ngo_social_services_theme_css .='}';
    }else if($charity_zone_scroll_position == 'Left'){
        $ngo_social_services_theme_css .='#button{';
            $ngo_social_services_theme_css .='left: 20px;right: auto;';
        $ngo_social_services_theme_css .='}';
    }else if($charity_zone_scroll_position == 'Center'){
        $ngo_social_services_theme_css .='#button{';
            $ngo_social_services_theme_css .='right: auto;left: 50%; transform:translateX(-50%);';
        $ngo_social_services_theme_css .='}';
    }

    /*--------------------------- Scroll To Top Border Radius -------------------*/

    $charity_zone_scroll_to_top_border_radius = get_theme_mod('charity_zone_scroll_to_top_border_radius');
    $charity_zone_scroll_bg_color = get_theme_mod('charity_zone_scroll_bg_color');
    $charity_zone_scroll_color = get_theme_mod('charity_zone_scroll_color');
    $charity_zone_scroll_font_size = get_theme_mod('charity_zone_scroll_font_size');
    if($charity_zone_scroll_to_top_border_radius != false || $charity_zone_scroll_bg_color != false || $charity_zone_scroll_color != false || $charity_zone_scroll_font_size != false){
        $ngo_social_services_theme_css .='#colophon #button{';
            $ngo_social_services_theme_css .='border-radius: '.esc_attr($charity_zone_scroll_to_top_border_radius).'px; background-color: '.esc_attr($charity_zone_scroll_bg_color).'; color: '.esc_attr($charity_zone_scroll_color).' !important; font-size: '.esc_attr($charity_zone_scroll_font_size).'px;';
        $ngo_social_services_theme_css .='}';
    }

    /*--------------------------- Preloader color -------------------*/
    $charity_zone_preloader2_dot_color = get_theme_mod( 'charity_zone_preloader2_dot_color');
    if( $charity_zone_preloader2_dot_color != '') {
        $ngo_social_services_theme_css .='.load hr {';
            $ngo_social_services_theme_css .='background-color: '. $charity_zone_preloader2_dot_color. ';';
        $ngo_social_services_theme_css .='}';
    }