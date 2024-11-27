
<?php

	function my_theme_enqueue_scripts() {
		wp_enqueue_style('parent-theme-css', get_template_directory_uri() . '/style.css');
	}
	add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');

	function filter_search_results($query) {
		if ($query->is_search && !is_admin()) {
			$query->set('post_type', 'custom_data');
		}
		return $query;
	}
	add_action('pre_get_posts', 'filter_search_results');

	add_filter('widget_text', 'shortcode_unautop');
	add_filter('widget_text', 'do_shortcode');

?>