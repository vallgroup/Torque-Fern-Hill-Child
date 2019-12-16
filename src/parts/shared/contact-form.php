<?php
/**
 * Template: Contact Form Section
 */

$footer_contact_form = get_field( 'footer_contact_form', 'options' );
if ($footer_contact_form) {
  $title = $footer_contact_form['title'];
  $content = $footer_contact_form['content'];
  $form_content = $footer_contact_form['form_content'];
} 
?>

<section id="lets-talk" class="contact-form-section">

<?php // Title
if ( $title ) { ?>
  <div class="contact-form-section-title">
    <h4><?php echo $title; ?></h4>
  </div>
<?php } ?>

<?php // Content
if ( $content ) { ?>
  <div class="contact-form-section-content">
    <?php echo $content; ?>
  </div>
<?php } ?>

<?php // Form Content
if ( !empty($form_content) ) { ?>
  <div class="contact-form-section-form">
    <?php if ( has_blocks( $form_content->post_content ) ) {
      $blocks = parse_blocks( $form_content->post_content );
      $content_markup = "";
      foreach ( $blocks as $block ) {
        if ( 'jetpack/contact-form' === $block['blockName'] ) {
          $content_markup .= render_block( $block );
          break;
        }
      }
      echo apply_filters( 'the_content', $content_markup );
    } ?>
  </div>
<?php } ?>

</section>