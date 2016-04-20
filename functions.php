<?php 
  add_action( 'widgets_init', 'fwp_widget_area' );
  function fwp_widget_area() {
    register_sidebar( array(
      'name' => 'Sidebar',
      'id' => 'sidebar',
      'description' => 'This is the main sidebar',
      'before_widget' => '',
      'after_widget' => '',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>'
    ));
  }
?>