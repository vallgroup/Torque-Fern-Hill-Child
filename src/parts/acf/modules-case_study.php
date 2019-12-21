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

        // NB: located in general modules folder
        include locate_template( '/parts/acf/modules/title-content-section.php' );

        break;

      case 'title_image_text_section' :

        $title = get_sub_field( 'title' );
        $sub_title = get_sub_field( 'sub_title' );
        $content = get_sub_field( 'content' );
        $image = get_sub_field( 'image' );
        $image_placement = get_sub_field( 'image_placement' );
        $enlarge_image = get_sub_field( 'enlarge_image' );

        // NB: located in general modules folder
        include locate_template( '/parts/acf/modules/title-image-text-section.php' );

        break;

    case 'stats_text_section' :

      $stats = get_sub_field( 'stats' );
      $content = get_sub_field( 'content' );
      $stats_placement = get_sub_field( 'stats_placement' );

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

      $map_id = get_sub_field( 'map' );

      // NB: located in general modules folder
      include locate_template( '/parts/acf/modules/map-section.php' );

      break;

    case 'blog_grid_section' :

      $title = get_sub_field( 'title' );
      $number_of_posts_to_display = get_sub_field( 'number_of_posts_to_display' );
      $show_cta = get_sub_field( 'show_cta' );
      $cta = get_sub_field( 'cta' );

      // NB: located in general modules folder
      include locate_template( '/parts/acf/modules/blog-grid-section.php' );

      break;

    case 'team_grid_section' :

      $team_grid = get_sub_field( 'team_grid' );

      // NB: located in general modules folder
      include locate_template( '/parts/acf/modules/team-grid-section.php' );

      break;

    }

  endwhile; 
endif;

?>
