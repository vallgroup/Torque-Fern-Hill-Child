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
        $background_color = get_sub_field( 'background_color' );

        include locate_template( '/parts/acf/modules/hero-section_one.php' );

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

      case 'content_section_one' :

        $title = get_sub_field( 'title' );
        $content = get_sub_field( 'content' );
        $cta = get_sub_field( 'call_to_action' );
        $image = get_sub_field( 'image' );
        $split_background_color = get_sub_field( 'split_background_color' );
        $primary_background_color = get_sub_field( 'primary_background_color' );
        $secondary_background_color = get_sub_field( 'secondary_background_color' );

        include locate_template( '/parts/acf/modules/content-section-one.php' );

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
