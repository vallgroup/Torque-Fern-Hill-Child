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

    case 'abc' :

      // $title = get_sub_field( 'title' );

      // include locate_template( '/parts/acf/modules-case_study/abc.php' );

      break;

    }

  endwhile; 
endif;

?>
