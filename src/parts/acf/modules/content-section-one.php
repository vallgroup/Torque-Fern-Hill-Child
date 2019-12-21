<?php
/**
 * Template: Split Background Section with Text & Image
 */


// Configure styling classes
$split_background_class = $split_background_color === 'yes' ? 'split-background' : '';
$primary_background_color_class = $primary_background_color ? 'primary-background-color-' . $primary_background_color : '';
$secondary_background_color_class = $secondary_background_color ? 'secondary-background-color-' . $secondary_background_color : '';
?>

<section class="content-section-one <?php echo $split_background_class; ?> <?php echo $primary_background_color_class; ?> <?php echo $secondary_background_color_class; ?>">

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

  <?php // Image
    if ( !empty($image) ) { ?>
      <img class="content-section-one-image" src="<?php echo esc_url($image['url']); ?>);" alt="<?php echo esc_attr($image['alt']); ?>"/>
  <?php } ?>

</section>