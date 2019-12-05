<?php

// Copyright
$copyright = get_field('copyright', 'options');

// Contact Form Section
get_template_part( 'parts/shared/contact-form'); 
?>

<footer>

  <div class="footer-block footer-logo">

    <div class="footer-logo">
      <?php get_template_part( 'parts/shared/logo', 'white'); ?>
    </div>

    <div class="footer-contact-details">
      <?php get_template_part( 'parts/shared/contact-details' ); ?>
    </div>

  </div>

  <div class="footer-block footer-latest-work">
    <?php 
    // Case Study
    $work_shortcode = '[torque_filtered_loop ';
    $work_shortcode .= 'post_type="torque_case_study" ';
    $work_shortcode .= 'posts_per_page="1" ';
    $work_shortcode .= 'filters_types="dropdown_tax" ';
    $work_shortcode .= 'filters_args="category"';
    $work_shortcode .= ']';
    echo do_shortcode( $work_shortcode );
    ?>
  </div>

  <div class="footer-block footer-blog-post">
    <?php 
    // Blog/thoughts
    $blog_shortcode = '[torque_filtered_loop ';
    $blog_shortcode .= 'post_type="post" ';
    $blog_shortcode .= 'posts_per_page="1" ';
    $blog_shortcode .= 'filters_types="dropdown_tax" ';
    $blog_shortcode .= 'filters_args="category"';
    $blog_shortcode .= ']';
    echo do_shortcode( $blog_shortcode );
    ?>
  </div>

  <?php if ($copyright) { ?>
    <div class="footer-copyright">
      <?php echo '&copy; ' . date('Y') . $copyright; ?>
    </div>
  <?php } ?>

</footer>

<div class="back-to-top-container">
  <div class="back-to-top-btn fa fa-arrow-up"></div>
</div>
