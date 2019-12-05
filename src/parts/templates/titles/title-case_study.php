<?php
/**
 * Template Title: Case Study
 */

// Featured image
$featured_image = get_the_post_thumbnail_url(null, 'full');
$title = get_the_title();
?>

<section id="case-study-hero-section" class="case-study-hero-section">

  <?php // Title
  if ( $title ) { ?>
  <h1 class="case-study-title"><?php echo $title; ?></h1>
  <?php } ?>

  <?php // Featured image
  if ( $featured_image ) { ?>
  <div class="case-study-featured-image-wrapper" >
    <img class="case-study-featured-image" src="<?php echo $featured_image; ?>"/>
  </div>
  <?php } ?>

</section>