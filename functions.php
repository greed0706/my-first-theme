<?php
function myfirstblog_setup()
{
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  register_nav_menus([
    'main-menu' => 'Menu Chính',
  ]);
}



add_action('after_setup_theme', 'myfirstblog_setup'); ?>
  

<?php
function myproject_enqueue_styles()
{
  wp_enqueue_style('myproject-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'myproject_enqueue_styles');
?>