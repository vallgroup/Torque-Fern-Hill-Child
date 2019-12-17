<?php
/**
 * Template Title: Post Title 
 */

// Featured image
$featured_image = get_the_post_thumbnail_url(null, 'full');
$title = get_the_title();
?>

<section id="post-hero-section" class="post-hero-section">

  <?php // Title
  if ( $title ) { ?>
  <h1 class="post-title"><?php echo $title; ?></h1>
  <?php } ?>

  <?php // Featured image
  if ( $featured_image ) { ?>
  <div class="post-featured-image-wrapper" >
    <img class="post-featured-image" src="<?php echo $featured_image; ?>"/>
  </div>
  <?php } ?>

</section>