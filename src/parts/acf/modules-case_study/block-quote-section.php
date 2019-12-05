<?php
/**
 * Template: Block Quote Section
 */

// Configure background color
$background_color_class = '';
if ( !empty( $background_color ) ) {
  // Inline background color style
  $background_color_style = "background-color: " . $background_color['value'] . ";";
  // Background color class, used to apply text color accordingly
  $background_color_class = strtolower( $background_color['label'] );
  $background_color_class = str_replace(' ', '-', $background_color_class );
  $background_color_class = "background-color-" . $background_color_class;
}
?>

<section class="block-quote-section content-placement-<?php echo $placement; ?> <?php echo $background_color_class; ?>" style="<?php echo $background_color_style; ?>">

  <div class="block-quote-section-content-container">

  <?php // Content
  if ( $content ) { ?>
    <div class="block-quote-section-content">
      <?php echo $content; ?>
    </div>
  <?php } ?>

  </div>
</section>