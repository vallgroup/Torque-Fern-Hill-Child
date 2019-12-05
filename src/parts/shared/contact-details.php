<?php

$address = get_field('address', 'options');
$social_channels = have_rows('social_media', 'options');

?>

<div class="contact-details">

  <?php if ($address) { ?>
    <div class="address" >
      <?php echo $address; ?>
    </div>
  <?php } ?>

</div>
