<?php
/**
 * Template: Title, Content, Image & Background Graphic Section
 */

// Configure styling classes
$image_placement_class = 'image-placement-' . $image_placement . ' ';
$background_color_class = 'background-color-' . $background_color . ' ';
$compact_view_class = $compact_view === 'yes' ? 'compact-view ' : '';
?>

<section class="title-content-image-background-graphic-section <?php 
  echo $image_placement_class; 
  echo $background_color_class; 
  echo $compact_view_class; 
?>">

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