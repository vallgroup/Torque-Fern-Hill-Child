<?php
/**
 * Template: Content Columns Section
 */

// configure cols per row
$cols_per_row_cls = 'col' . $columns_per_row;
?>

<section class="content-columns-section">

  <?php // Background wrapper
  if ( 'yes' === $background_graphic ) { ?>
    <div class="full-width-background-graphic"></div>
  <?php } ?>

  <?php if ( have_rows( $columns ) ): ?>

    <div class="col-container">

      <?php // loop through the rows of data
      while ( have_rows( $columns ) ) : the_row(); ?>

        <div class="col-wrapper <?php echo $cols_per_row_cls; ?>">
    
          <?php // get sub-fields for each row
          $image = get_sub_field('image');
          $title = get_sub_field('title');
          $content = get_sub_field('content');

          // Image
          if ( !empty($image) ) { ?>
            <img class="content-section-one-image" src="<?php echo esc_url($image['url']); ?>);" alt="<?php echo esc_attr($image['alt']); ?>"/>
          <?php }
          
          // Title
          if ( $title ) { ?>
          <div class="content-section-one-title">
            <h4><?php echo $title; ?></h4>
          </div>
          <?php }
          
          // Content
          if ( $content ) { ?>
          <div class="content-section-one-content">
            <?php echo $content; ?>
          </div>
          <?php } ?>

        </div>

      <?php endwhile; ?>

    </div>

  <?php endif; ?>

</section>