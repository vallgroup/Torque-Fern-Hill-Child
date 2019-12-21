<?php
/**
 * Modules Switch for Pages
 */

$modules = 'modules';

if ( have_rows( $modules ) ): 

  while ( have_rows( $modules ) ) : the_row();

    switch ( get_row_layout() ) {

      case 'hero_section_one' :

        $title = get_sub_field( 'title' );
        $sub_title = get_sub_field( 'sub_title' );
        $show_arrow = get_sub_field( 'show_arrow' );
        $background_color = get_sub_field( 'background_color' ); // returns name, not color code

        include locate_template( '/parts/acf/modules/hero-section_one.php' );

        break;

      case 'layout_spacer' :

        $height_value = get_sub_field( 'height_value' );
        $height_units = get_sub_field( 'height_units' );

        include locate_template( '/parts/acf/modules/layout-spacer.php' );

        break;

      case 'title_content_section' :

        $title = get_sub_field( 'title' );
        $content = get_sub_field( 'content' );

        include locate_template( '/parts/acf/modules/title-content-section.php' );

        break;

      case 'title_image_text_section' :

        $title = get_sub_field( 'title' );
        $sub_title = get_sub_field( 'sub_title' );
        $content = get_sub_field( 'content' );
        $image = get_sub_field( 'image' );
        $image_placement = get_sub_field( 'image_placement' );
        $enlarge_image = get_sub_field( 'enlarge_image' );

        include locate_template( '/parts/acf/modules/title-image-text-section.php' );

        break;

      case 'hover_slide_section' :

        $project = get_sub_field( 'project' );
        $title_alignment = get_sub_field( 'title_alignment' );
        $title = get_sub_field( 'title' );
        $content = get_sub_field( 'content' );
        $cta = get_sub_field( 'call_to_action' );
        $initial_image = get_sub_field( 'initial_background_image' );
        $hover_image = get_sub_field( 'hover_background_image' );

        include locate_template( '/parts/acf/modules/hover-slide-section.php' );

        break;

      case 'block_quote_section' :
  
        $content = get_sub_field( 'content' );
        $placement = get_sub_field( 'placement' );
        $background_color = get_sub_field( 'background_color' );
  
        include locate_template( '/parts/acf/modules/block-quote-section.php' );
  
        break;

      case 'content_section_one' :

        $split_background_color = get_sub_field( 'split_background_color' );
        $primary_background_color = get_sub_field( 'primary_background_color' );
        $secondary_background_color = get_sub_field( 'secondary_background_color' );
        $title = get_sub_field( 'title' );
        $content = get_sub_field( 'content' );
        $cta = get_sub_field( 'call_to_action' );
        $image = get_sub_field( 'image' );

        include locate_template( '/parts/acf/modules/content-section-one.php' );

        break;

      case 'blog_grid_section' :

        $title = get_sub_field( 'title' );
        $number_of_posts_to_display = get_sub_field( 'number_of_posts_to_display' );
        $show_cta = get_sub_field( 'show_cta' );
        $cta = get_sub_field( 'cta' );

        include locate_template( '/parts/acf/modules/blog-grid-section.php' );

        break;

      case 'team_grid_section' :
  
        $team_grid = get_sub_field( 'team_grid' );

        include locate_template( '/parts/acf/modules/team-grid-section.php' );
  
        break;

      case 'content_columns_section' :
  
        $background_graphic = get_sub_field( 'background_graphic' );
        $columns_per_row = get_sub_field( 'columns_per_row' );
        $columns = 'columns'; // repeater field, see template file below

        include locate_template( '/parts/acf/modules/content-columns-section.php' );
  
        break;

    }

  endwhile; 
endif;

?>
