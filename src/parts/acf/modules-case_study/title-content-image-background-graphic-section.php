<?php
/**
 * Template: Title, Content, Image & Background Graphic Section
 */

// Configure background grandient
$background_gradient = '';
if ($compact_view !== 'yes') {
  // Not compact view
  if ($image_placement !== 'bottom') {
    // White top, colored bottom
    $background_gradient = "background: #FFF; background: -moz-linear-gradient(top,  #FFF 30%, " . $background_color . " 30%); background: -webkit-linear-gradient(top,  #FFF 30%, " . $background_color . " 30%); background: linear-gradient(to bottom, #FFF 30%, " . $background_color . " 30%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#FFF', endColorstr='" . $background_color . "',GradientType=0 );";
  } else {
    // Colored bottom, white top
    $background_gradient = "background: " . $background_color . "; background: -moz-linear-gradient(top,  " . $background_color . " 70%, #FFF 70%); background: -webkit-linear-gradient(top,  " . $background_color . " 70%,#FFF 70%); background: linear-gradient(to bottom,  " . $background_color . " 70%,#FFF 70%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='" . $background_color . "', endColorstr='#FFF',GradientType=0 );";
  }
} else {
  // Compact view
  $background_gradient = "background-color: " . $background_color . ";";
}

// Configure background color class, for styling text colors
$background_color_class = 'background-color-';
$background_color_class .= $background_color === '#c8c8c8' ? 'gray' : 'dark-blue';
?>

<section class="title-content-image-background-graphic-section image-placement-<?php echo $image_placement; ?> <?php echo $background_color_class; ?>" style="<?php echo $background_gradient; ?>">

  <?php // Background wrapper ?>
  <div class="full-width-background-graphic"></div>

  <div class="section-content-container">

  <?php // Title
  if ( $title ) { ?>
    <div class="section-title-container">
      <h4 class="section-title"><?php echo $title; ?></h4>
    </div>
  <?php } ?>
    
  <?php // Sub-Title
  if ( $sub_title ) { ?>
    <div class="section-sub-title-wrapper">
      <h4 class="section-sub-title"><?php echo $sub_title; ?></h4>
    </div>
  <?php } ?>
    
  <?php // Content
  if ( $content ) { ?>
    <div class="section-content-wrapper">
      <?php echo $content; ?>
    </div>
  <?php } ?>

  </div>


  <div class="section-image-container">
    <?php // Image
    if ( !empty($image) ) { ?>
        <img class="section-image" src="<?php echo esc_url($image['url']); ?>);" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php } ?>
  </div>

</section>