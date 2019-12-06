<?php
/**
 * Modules Switch for Case Study CPT
 */

$case_study_modules = 'modules';

if ( have_rows( $case_study_modules ) ): 

  while ( have_rows( $case_study_modules ) ) : the_row();

    switch ( get_row_layout() ) {

      case 'anchor_end_point' :

        $anchor_id = get_sub_field( 'anchor_id' );

        include locate_template( '/parts/acf/modules-case_study/anchor-end-point.php' );

        break;

      case 'layout_spacer' :

        $height_value = get_sub_field( 'height_value' );
        $height_units = get_sub_field( 'height_units' );

        // NB: located in general modules folder
        include locate_template( '/parts/acf/modules/layout-spacer.php' );

        break;

      case 'title_content_section' :

        $title = get_sub_field( 'title' );
        $content = get_sub_field( 'content' );

        include locate_template( '/parts/acf/modules-case_study/title-content-section.php' );

        break;

      case 'image_text_section' :

        $title = get_sub_field( 'title' );
        $sub_title = get_sub_field( 'sub_title' );
        $content = get_sub_field( 'content' );
        $image = get_sub_field( 'image' );
        $image_placement = get_sub_field( 'image_placement' );

        include locate_template( '/parts/acf/modules-case_study/image-text-section.php' );

        break;

    case 'stats_text_section' :

      $stats = get_sub_field( 'stats' );
      $content = get_sub_field( 'content' );

      include locate_template( '/parts/acf/modules-case_study/stats-text-section.php' );

      break;

    case 'block_quote_section' :

      $content = get_sub_field( 'content' );
      $placement = get_sub_field( 'placement' );
      $background_color = get_sub_field( 'background_color' );

      include locate_template( '/parts/acf/modules-case_study/block-quote-section.php' );

      break;

    case 'title_content_image_background_graphic_section' :

      $title = get_sub_field( 'title' );
      $sub_title = get_sub_field( 'sub_title' );
      $content = get_sub_field( 'content' );
      $image = get_sub_field( 'image' );
      $image_placement = get_sub_field( 'image_placement' );
      $background_color = get_sub_field( 'background_color' );
      $compact_view = get_sub_field( 'compact_view' );

      include locate_template( '/parts/acf/modules-case_study/title-content-image-background-graphic-section.php' );

      break;

    case 'map_section' :

      $map_id = get_sub_field( 'map_id' );

      // NB: located in general modules folder
      include locate_template( '/parts/acf/modules/map-section.php' );

      break;

    case 'blog_grid_section' :

      $title = get_sub_field( 'title' );
      $number_of_posts_to_display = get_sub_field( 'number_of_posts_to_display' );
      $show_link_to_blog_archive = get_sub_field( 'show_link_to_blog_archive' );
      $link_text = get_sub_field( 'link_text' );

      include locate_template( '/parts/acf/modules/blog-grid-section.php' );

      break;

    }

  endwhile; 
endif;

?>
