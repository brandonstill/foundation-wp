<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/dist/theme.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/vendor/font-awesome/css/font-awesome.min.css">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
      <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <section role="banner" class="banner">
      <header>
      
      </header>
    </section>
  