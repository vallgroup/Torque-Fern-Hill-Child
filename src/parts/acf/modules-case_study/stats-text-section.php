<?php
/**
 * Template: Statistics & Text Section
 */
$stats_placement_class = $stats_placement ? 'stats-placement-' . $stats_placement : '';
?>

<section class="stats-text-section <?php echo $stats_placement_class; ?>">

  <?php // Sub Navigation
  $stats_items = 'stats';
  if ( have_rows( $stats_items ) ): ?>
    <div class="stats-text-section-stats-container">
    <?php while ( have_rows( $stats_items ) ) : the_row();
      // Nav item title
      $statistic = get_sub_field( 'statistic' ); ?>
      <h4 class="stats-text-section-statistic"><?php echo $statistic; ?></h4>
    <?php endwhile; ?>
    </div>
  <?php endif; ?>

  <div class="stats-text-section-content-container">
  <?php // Content
  if ( $content ) { ?>
    <div class="stats-text-section-content">
      <?php echo $content; ?>
    </div>
  <?php } ?>
  </div>

</section>