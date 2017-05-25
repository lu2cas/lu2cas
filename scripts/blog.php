<?php
	$post = isset($_REQUEST['post']) && !empty($_REQUEST['post']) ? $_REQUEST['post'] : null;

	$post_directory = './../posts/' . $post;
	if (!is_null($post) && is_dir($post_directory)) {
		$post = json_decode(file_get_contents($post_directory . '/data.json'), true);
		$post['body'] = $post_directory . '/body.php';
		$post['base_url'] = $post_directory;

		require './../views/layouts/blog.php';
	} else {
		$base_url = sprintf('http://%s/%s', $_SERVER['HTTP_HOST'], current(array_filter(explode('/', $_SERVER['REQUEST_URI']))));
		header(sprintf('Location: %s/404/', $base_url));
	}