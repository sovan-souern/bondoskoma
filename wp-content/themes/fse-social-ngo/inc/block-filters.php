<?php
/**
 * Block Filters
 *
 * @package fse_social_ngo
 * @since 1.0
 */

function fse_social_ngo_block_wrapper( $fse_social_ngo_block_content, $fse_social_ngo_block ) {

	if ( 'core/button' === $fse_social_ngo_block['blockName'] ) {
		
		if( isset( $fse_social_ngo_block['attrs']['className'] ) && strpos( $fse_social_ngo_block['attrs']['className'], 'has-arrow' ) ) {
			$fse_social_ngo_block_content = str_replace( '</a>', fse_social_ngo_get_svg( array( 'icon' => esc_attr( 'caret-circle-right' ) ) ) . '</a>', $fse_social_ngo_block_content );
			return $fse_social_ngo_block_content;
		}
	}

	if( ! is_single() ) {
	
		if ( 'core/post-terms'  === $fse_social_ngo_block['blockName'] ) {
			if( 'post_tag' === $fse_social_ngo_block['attrs']['term'] ) {
				$fse_social_ngo_block_content = str_replace( '<div class="taxonomy-post_tag wp-block-post-terms">', '<div class="taxonomy-post_tag wp-block-post-terms flex">' . fse_social_ngo_get_svg( array( 'icon' => esc_attr( 'tags' ) ) ), $fse_social_ngo_block_content );
			}

			if( 'category' ===  $fse_social_ngo_block['attrs']['term'] ) {
				$fse_social_ngo_block_content = str_replace( '<div class="taxonomy-category wp-block-post-terms">', '<div class="taxonomy-category wp-block-post-terms flex">' . fse_social_ngo_get_svg( array( 'icon' => esc_attr( 'category' ) ) ), $fse_social_ngo_block_content );
			}
			return $fse_social_ngo_block_content;
		}
		if ( 'core/post-date' === $fse_social_ngo_block['blockName'] ) {
			$fse_social_ngo_block_content = str_replace( '<div class="wp-block-post-date">', '<div class="wp-block-post-date flex">' . fse_social_ngo_get_svg( array( 'icon' => esc_attr( 'calendar' ) ) ), $fse_social_ngo_block_content );
			return $fse_social_ngo_block_content;
		}
		if ( 'core/post-author' === $fse_social_ngo_block['blockName'] ) {
			$fse_social_ngo_block_content = str_replace( '<div class="wp-block-post-author">', '<div class="wp-block-post-author flex">' . fse_social_ngo_get_svg( array( 'icon' => esc_attr( 'user' ) ) ), $fse_social_ngo_block_content );
			return $fse_social_ngo_block_content;
		}
	}
	if( is_single() ){

		// Add chevron icon to the navigations
		if ( 'core/post-navigation-link' === $fse_social_ngo_block['blockName'] ) {
			if( isset( $fse_social_ngo_block['attrs']['type'] ) && 'previous' === $fse_social_ngo_block['attrs']['type'] ) {
				$fse_social_ngo_block_content = str_replace( '<span class="post-navigation-link__label">', '<span class="post-navigation-link__label">' . fse_social_ngo_get_svg( array( 'icon' => esc_attr( 'prev' ) ) ), $fse_social_ngo_block_content );
			}
			else {
				$fse_social_ngo_block_content = str_replace( '<span class="post-navigation-link__label">Next Post', '<span class="post-navigation-link__label">Next Post' . fse_social_ngo_get_svg( array( 'icon' => esc_attr( 'next' ) ) ), $fse_social_ngo_block_content );
			}
			return $fse_social_ngo_block_content;
		}
		if ( 'core/post-date' === $fse_social_ngo_block['blockName'] ) {
            $fse_social_ngo_block_content = str_replace( '<div class="wp-block-post-date">', '<div class="wp-block-post-date flex">' . fse_social_ngo_get_svg( array( 'icon' => 'calendar' ) ), $fse_social_ngo_block_content );
            return $fse_social_ngo_block_content;
        }
		if ( 'core/post-author' === $fse_social_ngo_block['blockName'] ) {
            $fse_social_ngo_block_content = str_replace( '<div class="wp-block-post-author">', '<div class="wp-block-post-author flex">' . fse_social_ngo_get_svg( array( 'icon' => 'user' ) ), $fse_social_ngo_block_content );
            return $fse_social_ngo_block_content;
        }

	}
    return $fse_social_ngo_block_content;
}
	
add_filter( 'render_block', 'fse_social_ngo_block_wrapper', 10, 2 );
