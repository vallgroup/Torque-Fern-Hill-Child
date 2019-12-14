<?php

$page_intro = get_field('page_intro');

if ( !empty($page_intro) ) {
  $type = $page_intro['page_intro_type'];
  $heading = $page_intro['page_heading'];
  $intro = $page_intro['page_intro'];
  $background_color = $page_intro['background_color'];
}

if ( $type ) { ?>
  <section class="page-intro type-<?php echo $type; ?> background-color-<?php echo $background_color; ?>">

    <?php if ($heading) { ?>
      <h1><?php echo $heading; ?></h1>
    <?php } ?>

    <?php if ($intro) { ?>
      <div class="page-intro-intro"><?php echo $intro; ?></div>
    <?php } ?>
  </section>
<?php } ?>