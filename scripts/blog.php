<?php

class Blog {

	public function __construct() {}

	public function view($post) {
		$post_slug = !empty($post) ? $post : null;
		$post_directory = './posts/' . $post_slug;
		if (!is_null($post_slug) && is_dir($post_directory)) {
			$post = json_decode(file_get_contents($post_directory . '/data.json'), true);

			$post['body'] = $post_directory . '/body.php';
			$post['slug'] = $post_slug;
			$post['images_directory'] = BASE_DIRECTORY . '/posts/' . $post['slug'] . '/images';
			$post['external_url'] = BASE_URL . '/blog/' . $post['slug'];

			require './views/layouts/blog.php';
		} else {
			App::throwHttpError(404);
		}
	}
}