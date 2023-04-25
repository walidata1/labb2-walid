<?php




if (!defined('WP_DEBUG')) {

  die('Direct access forbidden.');
}

add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
});


function mytheme_add_woocommerce_support()
{
  add_theme_support('woocommerce');
}

add_action('after_setup_theme', 'mytheme_add_woocommerce_support');

// Using add_action med function to replace all with emoji 
function replace_o_with_o($var)
{
  $letter = str_replace('o', "\u{1F600}", $var);
  return $letter;
}

add_action('the_title', 'replace_o_with_o');

// Using filter to not show admin bar
//add_filter('show_admin_bar', '__return_false');
