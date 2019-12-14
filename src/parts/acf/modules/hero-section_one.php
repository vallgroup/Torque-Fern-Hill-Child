<?php
/**
 * Template: Hero Section One
 */
?>

<section id="hero-section-one" class="page-hero background-type-color background-color-<?php echo $background_color; ?>">

  <div class="hero-title-container">
  
  <?php // Green arrow
  if ( $show_arrow ) { ?>
    <div class="green-arrow-down-right"></div>
  <?php } ?>

  <?php // Title
  if ( $title ) { ?>
    <div class="hero-title">
      <h1><?php echo $title; ?></h1>
    </div>
  <?php } ?>

  </div>

  <?php // Sub-Title
  if ( $sub_title ) { ?>
    <div class="hero-sub-title">
      <p><?php echo $sub_title; ?></p>
    </div>
  <?php } ?>


</section>