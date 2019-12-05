<?php
/**
 * Template: Split Background Section with Text & Image
 */

// Configure background grandient
if ( $split_background_color === 'yes' ) {
  $background_gradient = "background: " . $primary_background_color . "; background: -moz-linear-gradient(top,  " . $primary_background_color . " 70%, " . $secondary_background_color . " 70%); background: -webkit-linear-gradient(top,  " . $primary_background_color . " 70%," . $secondary_background_color . " 70%); background: linear-gradient(to bottom,  " . $primary_background_color . " 70%," . $secondary_background_color . " 70%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='" . $primary_background_color . "', endColorstr='" . $secondary_background_color . "',GradientType=0 );";
} else {
  $background_gradient = "background: " . $primary_background_color;
}
?>

<section class="content-section-one" style="<?php echo $background_gradient; ?>">

<?php // Title
if ( $title ) { ?>
  <div class="content-section-one-title">
    <h3><?php echo $title; ?></h3>
  </div>
<?php } ?>

<?php // Content
if ( $content ) { ?>
  <div class="content-section-one-content">
    <?php echo $content; ?>
  </div>
<?php } ?>

<?php // CTA
  if ( !empty($cta) ) { ?>
    <a class="content-section-one-cta green-arrow-right" href="<?php echo $cta['url']; ?>" target="<?php echo $cta['target']; ?>"><?php echo $cta['title']; ?></a>
<?php } ?>

<?php // Hover Image
  if ( !empty($image) ) { ?>
    <img class="content-section-one-image" src="<?php echo esc_url($image['url']); ?>);" alt="<?php echo esc_attr($image['alt']); ?>"/>
<?php } ?>


</section>