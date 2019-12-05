<?php
/**
 * Template: Blog Grid Section
 */

$shortcode = '[torque_filtered_loop ';
$shortcode .= 'post_type="post" ';
$shortcode .= 'posts_per_page="' . $number_of_posts_to_display . '" ';
$shortcode .= 'filters_types="dropdown_tax" ';
$shortcode .= 'filters_args="category"';
$shortcode .= ']';

?>

<section class="blog-grid-section">

<?php // Title
if ( $title ) { ?>
  <div class="blog-grid-section-title">
    <h4><?php echo $title; ?></h4>
  </div>
<?php } ?>

<?php 
  // Blog Grid
  echo do_shortcode($shortcode);

  // Link to blog page
  if ( $show_link_to_blog_archive && $link_text ) { ?>
    <a class="blog-archive-link green-arrow-right" href="<?php echo get_post_type_archive_link( 'post' ); ?>"><?php echo $link_text; ?></a>
  <?php } ?>

</section>