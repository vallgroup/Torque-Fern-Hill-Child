<?php
/**
 * Template: Statistics & Text Section
 */
?>

<section class="title-content-section">

  <?php // Content
  if ( $title ) { ?>
    <h4 class="title-content-section-title"><?php echo $title; ?></h4>
  <?php } ?>

  <div class="title-content-section-content-container">
  <?php // Content
  if ( $content ) { ?>
    <div class="title-content-section-content">
      <?php echo $content; ?>
    </div>
  <?php } ?>
  </div>

</section>