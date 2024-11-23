
<?php

	function my_theme_enqueue_scripts() {
		wp_enqueue_style('parent-theme-css', get_template_directory_uri() . '/style.css');
		
		
		if (is_singular('custom_data')){
			wp_enqueue_script('like-button-js', get_stylesheet_directory_uri() . '/assets/js/like-button.js', array(), null, true);
		}
		
		wp_localize_script('like-button-js', 'likeButtonAjax', array(
			'ajax_url' => admin_url('admin-ajax.php')
		));
	}
	add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');

	add_action('wp_ajax_increment_likes', 'increment_likes');
	add_action('wp_ajax_nopriv_increment_likes', 'increment_likes');

	function increment_likes() {
		if (!isset($_POST['post_id'])) {
			wp_send_json_error('Post ID not set');
		}

		$post_id = intval($_POST['post_id']);
		$likes = get_post_meta($post_id, '_custom_likes', true);
		$likes = $likes ? intval($likes) : 0;
		$likes++;
		update_post_meta($post_id, '_custom_likes', $likes);

		wp_send_json_success(['likes' => $likes]);
	}


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