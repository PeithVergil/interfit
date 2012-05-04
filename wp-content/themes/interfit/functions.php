<?php

function interfit_init() {
	if ( !is_admin() ) {
		// Bootstrap CSS
		wp_register_style('bootstrap_css', get_bloginfo('template_url') . '/css/bootstrap/bootstrap.css', false, '2.0.3');
		wp_register_style('bootstrap_css_res', get_bloginfo('template_url') . '/css/bootstrap/bootstrap-res.css', false, '2.0.3');
		// Bootstrap JS
		wp_register_script('bootstrap_js', get_bloginfo('template_url') . '/js/bootstrap/bootstrap.js', array('jquery'), '2.0.3');
		
		// Interfit CSS
		wp_register_style('interfit_css', get_bloginfo('template_url') . '/style.css', false, '1.0');
		
		// Cloud Carousel JS
		wp_register_script('cloud_carousel_js', get_bloginfo('template_url') . '/js/cloud-carousel/cloud-carousel.js', array('jquery'), '1.0.5');
	}
}
add_action('init', 'interfit_init');