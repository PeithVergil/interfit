<?php

// function load_jqueryui() {
// 	if ( !is_admin() ) {
// 		wp_register_script('jqueryui', get_bloginfo('template_url') . '/js/jquery.ui.js', array('jquery'), '1.8.20');
// 	}
// }
// add_action('init', 'load_jqueryui');

function interfit_init() {
	if ( !is_admin() ) {
		// Bootstrap CSS
		wp_register_style('bootstrap_css', get_bloginfo('template_url') . '/css/bootstrap/bootstrap.css', false, '2.0.3');
		wp_register_style('bootstrap_css_res', get_bloginfo('template_url') . '/css/bootstrap/bootstrap-res.css', false, '2.0.3');
		// Bootstrap JS
		wp_register_script('bootstrap_js', get_bloginfo('template_url') . '/js/bootstrap/bootstrap.js', array('jquery'), '2.0.3');
		
		// Interfit CSS
		wp_register_style('interfit_css', get_bloginfo('template_url') . '/style.css', false, '1.0');
	}
}
add_action('init', 'interfit_init');