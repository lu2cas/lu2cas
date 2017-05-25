<?php

class Home {

	public function __construct() {}

	public function render() {
		$home_directory = './views/home';

		$home['presentation'] = $home_directory . '/presentation.php';

		$home['blog_posts'] = array();

		$posts_directory = APP_PATH . DIRECTORY_SEPARATOR . 'posts';
		$posts = scandir($posts_directory);
		foreach ($posts as $post) {
			if (is_dir($posts_directory . DIRECTORY_SEPARATOR . $post) && !in_array($post, array('.', '..'))) {
				$post_data_path = $posts_directory . DIRECTORY_SEPARATOR . $post . DIRECTORY_SEPARATOR . 'data.json';
				$post_data = json_decode(file_get_contents($post_data_path), true);
				$post_data['slug'] = $post;
				$home['blog_posts'][] = $post_data;
			}
		}

		require './views/layouts/home.php';
	}
}