<?php

class Router {

	private $__uriParameters;

	private $__availableRoutes = array(
		'blog',
		'contact'
	);

	public function __construct($uri_parameters) {
		$this->__uriParameters = $uri_parameters;
	}

	public function redirect() {
		if (empty($this->__uriParameters)) {
			// Redirecionar para a página inicial
			$home = new Home();
			$home->render();
		} else if (in_array(current($this->__uriParameters), $this->__availableRoutes)) {
			// Redirecionar para o script solicitado
			$class_name = ucfirst(array_shift($this->__uriParameters));

			switch ($class_name) {
				case 'Blog':
					$post = current($this->__uriParameters);
					$blog = new Blog();
					$blog->view($post);
					break;
			}
		} else {
			// Redirecionar para a página 404
			App::throwHttpError(404);
		}
	}
}