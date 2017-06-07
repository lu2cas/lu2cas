<?php

class Blog {

	public function __construct() {}

	public function view($post) {
		$post_slug = !empty($post) ? $post : null;
		$post_directory = APP_PATH . DS . 'posts' . DS . $post_slug;

		if (!is_null($post_slug) && is_dir($post_directory)) {
			$post = json_decode(file_get_contents($post_directory . DS . 'data.json'), true);

			$post['body'] = $post_directory . DS . 'body.php';
			$post['slug'] = $post_slug;
			$post['images_directory'] = $post_directory . DS . 'images';
			$post['external_url'] = BASE_URL . '/blog/' . $post_slug;

			require APP_PATH . DS . 'views' . DS . 'layouts' . DS . 'blog.php';
		} else {
			App::throwHttpError(404);
		}
	}
}