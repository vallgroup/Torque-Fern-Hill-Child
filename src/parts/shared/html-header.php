<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>
        <?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?>
    </title>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/statics/images/favicon/favicon.ico"/>
    <?php wp_head(); ?>	
    <?php $gaTrackingCode = get_field( 'google_analytics_code', 'options' );
    if ( $gaTrackingCode ) {
      echo $gaTrackingCode;
    } ?>
  </head>
<body <?php body_class(); ?> ontouchstart>

<?php do_action('tq_body'); ?>