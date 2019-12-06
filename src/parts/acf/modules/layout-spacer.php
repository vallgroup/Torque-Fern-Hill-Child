<?php
/**
 * Template: Layout Spacer
 */

 if ( $height_value && $height_units ) { ?>
  <div style="display: block; width: 100%; height: <?php echo $height_value . $height_units; ?>"></div>
 <?php } ?>