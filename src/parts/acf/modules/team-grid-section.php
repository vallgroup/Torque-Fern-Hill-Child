<?php
/**
 * Template: Team Grid Section
 */

$team_grid_slug = $team_grid->post_name;

if ( $team_grid ) { ?>
<section class="team-grid-section">
  <?php // Torque Map
  $shortcode = '[torque_image_grid';
  $shortcode .= ' slug="' . $team_grid_slug . '"';
  $shortcode .= ']';
  echo do_shortcode( $shortcode ); ?>
</section>
<?php } ?>