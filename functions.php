<?php
//https://css-tricks.com/snippets/wordpress/include-jquery-in-wordpress-theme/
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}

function enqueue_all_the_things() {
  wp_enqueue_style( 'purecss', 'http://yui.yahooapis.com/pure/0.6.0/pure-min.css', false, false, 'all');
  wp_enqueue_style( 'grids', 'http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css', false, false, 'all');
  wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', false, false, 'all');
  wp_enqueue_script( 'typekit', '//use.typekit.net/laq2dyu.js', '', '', false);
  wp_enqueue_script( 'load-fonts', get_template_directory_uri() . '/dev/js/load-typekit.js', array('typekit'), '', false);
  wp_enqueue_script( 'color-theif', get_template_directory_uri(). '/dev/js/color-thief.min.js', '', '', true);
  wp_enqueue_script( 'init-color-theif', get_template_directory_uri(). '/dev/js/init-color-theif.js', array('color-theif'), '', true);
}


add_action ('wp_enqueue_scripts', 'enqueue_all_the_things');

function get_this_projects_cover_img( $post_id) {
	$img_id = get_post_thumbnail_id( $post_id );
	$cover = wp_get_attachment_image_src( $img_id, 'large', false );
	return $cover[0];
}
function set_single_img_wrapper_size_w( $post_id ) {
  $img_id = get_post_thumbnail_id( $post_id );
  $width = wp_get_attachment_image_src( $img_id, 'large', false );
  return $width[1];
}
function set_single_img_wrapper_size_h( $post_id ) {
  $img_id = get_post_thumbnail_id( $post_id );
  $height = wp_get_attachment_image_src( $img_id, 'large', false );
  return $height[2];
}
function set_single_total_width( $post_id ) {
  $img_width = set_single_img_wrapper_size_w( $post_id );
  return $img_width;
}

add_theme_support( 'post-thumbnails' );