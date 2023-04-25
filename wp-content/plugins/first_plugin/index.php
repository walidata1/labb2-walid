<?php
/*
 Plugin Name: My First Plugin
 Author: Walid A.
 Version: 1.0
 */

add_action('admin_menu', 'addMenu');

function addMenu()
{
  add_menu_page('first_plugin', 'first_plugin', 3, 'example-options', 'exampleMenu');
}

function exampleMenu()
{
  echo 'This is my first first plugin!!';
}
