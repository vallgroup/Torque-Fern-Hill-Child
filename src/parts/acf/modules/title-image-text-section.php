<?php
/**
 * Template: Image & Text Section
 */

$image_placement_class = $image_placement ? 'image-placement-' . $image_placement : '';
$enlarge_image_class = $enlarge_image ? 'enlarge-image-' . $enlarge_image : '';
?>

<section class="title-image-text-section <?php echo $image_placement_class; ?> <?php echo $enlarge_image_class; ?>">

<?php // Title
if ( $title ) { ?>
  <div class="image-text-section-title-container">
    <h4 class="image-text-section-title"><?php echo $title; ?></h4>
  </div>
<?php } ?>


  <div class="image-text-section-image-content-container">

  <?php // Image
  if ( !empty($image) ) { ?>
    <div class="image-text-section-image-container">
      <img class="image-text-section-image" src="<?php echo esc_url($image['url']); ?>);" alt="<?php echo esc_attr($image['alt']); ?>" />
    </div>
  <?php } ?>

  <?php // Sub-Title & Content ?>
    <div class="image-text-section-content-container">
      
    <?php // Sub-Title
    if ( $sub_title ) { ?>
      <div class="image-text-section-sub-title-wrapper">
        <h4 class="image-text-section-sub-title"><?php echo $sub_title; ?></h4>
      </div>
    <?php } ?>
      
    <?php // Content
    if ( $content ) { ?>
      <div class="image-text-section-content-wrapper">
        <?php echo $content; ?>
      </div>
    <?php } ?>

    </div>

  </div>

</section>