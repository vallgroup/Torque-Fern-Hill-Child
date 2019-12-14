<?php
/**
 * Template: Content Columns Section
 */

// configure background position style
$background_position = '';
if ( 'yes' === $background_graphic ) {
  $background_graphic_elem = 'background-graphic';
  $background_position = 'background-position-y: ' . $background_offset . '%';
}

// configure cols per row
$cols_per_row_cls = $columns_per_row . '-cols-per-row';
?>

<section class="content-columns-section <?php echo $background_cls; ?>" style="<?php echo $background_position; ?>">

  <?php if ( have_rows( $columns ) ): ?>

    <div class="col-container <?php echo $cols_per_row_cls; ?>">

      <?php // loop through the rows of data
      while ( have_rows( $columns ) ) : the_row(); ?>

        <div class="col-wrapper">
    
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