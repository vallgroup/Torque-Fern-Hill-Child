<?php
/**
 * Template: Contact Form Section
 */

$title = get_field( 'title', 'options' );
$content = get_field( 'content', 'options' );

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

<!-- FORM FIELDS -->

</section>