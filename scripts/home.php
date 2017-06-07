<?php

class Home {

	public function __construct() {}

	public function render() {
		$home_directory = APP_PATH . DS . 'views' . DS . 'home';

		$home['presentation'] = $home_directory . DS . 'presentation.php';
		$home['social_links'] = $home_directory . DS . 'social-links.php';

		$home['blog_posts'] = array();

		$posts_directory = APP_PATH . DS . 'posts';
		$posts = scandir($posts_directory);
		foreach ($posts as $post) {
			if (is_dir($posts_directory . DS . $post) && !in_array($post, array('.', '..'))) {
				$post_data = json_decode(file_get_contents($posts_directory . DS . $post . DS . 'data.json'), true);
				$post_data['slug'] = $post;
				$home['blog_posts'][] = $post_data;
			}
		}

		require APP_PATH . DS .'views' . DS . 'layouts' . DS . 'home.php';
	}
}