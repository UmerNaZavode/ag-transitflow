<?php 

	// wp_enqueue_style('ag_transitflow-lightgallery-css', get_template_directory_uri() . '/assets/libs/lightgallery.js/dist/css/lightgallery.min.css');
	// wp_enqueue_style('ag_transitflow-magnific-css', get_template_directory_uri() . '/assets/libs/magnific-popup/magnific-popup.css');
	wp_enqueue_style('ag_transitflow-slick-css', get_template_directory_uri() . '/assets/libs/slick/slick.css');
	wp_enqueue_style('ag_transitflow-leaflet-css', get_template_directory_uri() . '/assets/libs/leaflet/leaflet.css');
	// wp_enqueue_style('ag_transitflow-style', get_stylesheet_uri());
  wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css', array(), filemtime(get_stylesheet_directory() . '/style.css'));
	// wp_enqueue_style('ag_transitflow-form-styler-css', get_template_directory_uri() . '/assets/libs/jquery-form-styler/jquery.formstyler.css');
	// wp_enqueue_style('ag_transitflow-form-styler-css-theme', get_template_directory_uri() . '/assets/libs/jquery-form-styler/jquery.formstyler.theme.css');

?>
