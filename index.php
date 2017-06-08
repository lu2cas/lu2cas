<?php

define('DS', DIRECTORY_SEPARATOR);
define('APP_PATH', dirname(__FILE__));

require __DIR__ . DS . 'scripts' . DS . 'autoload.php';

$base_directory = current(array_slice(explode(DS, dirname(__FILE__)), -1));

$uri_parameters = array_values(array_filter(explode('/', $_SERVER['REQUEST_URI'])));

if (current($uri_parameters) == $base_directory) {
	$base_directory = array_shift($uri_parameters);
}

define('BASE_URL', sprintf('http://%s', $_SERVER['HTTP_HOST']));
define('BASE_DIRECTORY', sprintf('/%s', $base_directory));

$router = new Router($uri_parameters);
$router->redirect();

exit();
