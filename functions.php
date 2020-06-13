<?php
  // StyleSheets
  function load_stylesheets(){

      wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', array(), 1, 'all');
      wp_enqueue_style('bootstrap');

      //Custom CSS
      wp_register_style('custom', get_template_directory_uri() . '/custom.css', array(), 1, 'all');
      wp_enqueue_style('custom');


  }

  add_action('wp_enqueue_scripts', 'load_stylesheets');

//Load Scripts

function addjs()
{

  wp_deregister_script('jquery');

  wp_register_script('jquery', get_template_directory_uri() . '/jquery/jquery.min.js', array(), 1, 1, 1);
  wp_enqueue_script('jquery');

  wp_register_script('bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.bundle.min.js', array(), 1, 1, 1);
  wp_enqueue_script('bootstrap');

  wp_register_script('customJquery', get_template_directory_uri() . '/customJquery.js', array(), 1, 1, 1);
  wp_enqueue_script('customJquery');

  wp_register_script('customjs', get_template_directory_uri() . '/custom.js', array(), 1, 1, 1);
  wp_enqueue_script('customjs');

}

add_action('wp_enqueue_scripts', 'addjs');

// Add menu support
add_theme_support('menus');



register_nav_menus(
        array(
          'top-menu' => __('TopMenu', 'theme'),
          'bottom-menu' => __('BottomMenu', 'theme'),
          'not-frontpage' => __('notFrontPageMenu', 'theme'),
          'not-frontpageBottom' => __('notFrontPageBottom', 'theme'),

      )
    );

// Add class names to the <li> elements
function add_additional_class_on_li($classes, $item, $args){
    if(isset($args->add_li_class)){
      $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);