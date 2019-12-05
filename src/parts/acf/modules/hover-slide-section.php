<?php

/**
 * Template: Hover Slide Section
 */
?>

<section class="hover-slide-section">

  <?php // Initial Image
  if ( $initial_image ) { ?>
    <div class="hover-slide-image initial-image" style="background-image: url(<?php echo $initial_image; ?>);">
    </div>
  <?php } ?>

  <?php // Hover Image
  if ( $hover_image ) { ?>
    <div class="hover-slide-image hover-image" style="background-image: url(<?php echo $hover_image; ?>);">
    </div>
  <?php } ?>

  <?php // Green Bar 
  ?>
  <div class="green-bar-top">

    <?php // Project
    if ( $project ) { ?>
      <div class="hover-slide-project-container">
        <div class="project-title">Project</div>
        <h4 class="project-name"><?php echo $project; ?></h4>
      </div>
    <?php } ?>

  </div>

  <?php // Content Container 
  ?>
  <div class="hover-slide-content-container align-title-<?php echo $title_alignment; ?>">

    <?php // Title
    if ( $title ) { ?>
      <div class="hover-slide-title">
        <h2><?php echo $title; ?></h2>
      </div>
    <?php } ?>

    
    <div class="hover-slide-content-inner-container">
    
      <div class="hover-slide-content">

      <?php // Content
      if ( $content ) { ?>
        <?php echo $content; ?>
      <?php } ?>

      <?php // CTA
        if ( !empty($cta) ) { ?>
          <a class="hover-slide-cta green-arrow-right" href="<?php echo $cta['url']; ?>" target="<?php echo $cta['target']; ?>"><?php echo $cta['title']; ?></a>
      <?php } ?>

      </div>
    </div>

  </div>


</section>