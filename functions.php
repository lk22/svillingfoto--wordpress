<?php 

/**
 * Theme setup
 */
function sf_theme_setup() {
	register_nav_menus(['primary' => __('Primary Menu')] );
      register_nav_menus(['galleries' => __('Gallery Menu')]);
}
add_action('after_setup_theme', 'sf_theme_setup');


/***
 * load styles and other scripts ressources
 * @todo register the ressources through wp hook
 */
function svilling_foto_stylesheets()
{
      wp_enqueue_style(
            'style',
            get_stylesheet_uri()
      );
}

function sf_load_scripts($scripts = []){
      foreach($scripts as $script){	
            echo "<script src='" . $script . "'></script>";
      }
}

// hook the ressources to wordpress
add_action('wp_enqueue_scripts', 'svilling_foto_stylesheets');

/**
 * get title name of the page
 *
 * @return void
 */
function page_title(){
      global $post;
      return $post->post_title;
}

/**
 * debugging wrapper
 */
function debug($bug) {
	if($_SERVER['REMOTE_HOST'] === '127.0.0.1'){
		echo "<pre>";
	    var_dump($bug);
	    echo "</pre>";
	}
	
}

function add_menu($nav = ['theme_location' => 'primary']) {
	wp_nav_menu($nav);
}
