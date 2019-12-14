<?php

// Copyright
$copyright = get_field('copyright', 'options');
$footer_logo = get_field('footer_logo', 'options');

// Contact Form Section
get_template_part( 'parts/shared/contact-form');
?>

<footer>

  <div class="footer-block footer-logo-container">

    <div class="footer-logo">
      <?php if ( $footer_logo ) { ?>
      <img src="<?php echo $footer_logo; ?>" />
      <?php } ?>
    </div>

    <div class="footer-contact-details">
      <?php get_template_part( 'parts/shared/contact-details' ); ?>
    </div>

  </div>

  <div class="footer-block footer-latest-work">
    <div class="footer-col-title">Latest Work</div>
    <?php 
    // Case Study
    $cs_shortcode = '[torque_filtered_loop ';
    $cs_shortcode .= 'post_type="torque_case_study" ';
    $cs_shortcode .= 'posts_per_page="1" ';
    $cs_shortcode .= 'filters_types="dropdown_tax" ';
    $cs_shortcode .= 'filters_args="category"';
    $cs_shortcode .= ']';
    echo do_shortcode( $cs_shortcode );
    ?>
  </div>

  <div class="footer-block footer-blog-post">
    <div class="footer-col-title">What's on Our Mind</div>
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
