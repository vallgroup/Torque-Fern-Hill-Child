<?php
/**
 * Template Content: Case Study
 *
 * @package Torque
 */

// Sub Navigation
$nav_items = 'sub_navigation';

if ( have_rows( $nav_items ) ): ?>

  <div class="case-study-sub-nav-container">

  <?php while ( have_rows( $nav_items ) ) : the_row();

    // Nav item title
    $nav_item_title = get_sub_field( 'title' );
    
    // Nav item anchor ID
    $nav_item_anchor_id = get_sub_field( 'anchor_id' );
    $illegal_chars = array( '#', ' ', '.', ',', '/', '@', '~', '|', '<', '>', '?', ':', ';', '"', '[', ']', '{', '}', '(', ')' );
    $nav_item_anchor_id = str_replace( $illegal_chars, '-',  $nav_item_anchor_id ); ?>

    <a class="sub-nav-item" href="#<?php echo $nav_item_anchor_id; ?>"><?php echo $nav_item_title; ?></a>

  <?php endwhile; ?>

  </div>

<?php endif;

// Content Modules
get_template_part( 'parts/acf/modules', 'case_study' );

?>
