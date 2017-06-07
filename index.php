<?php
require __DIR__ . '/scripts/autoload.php';
$base_directory = 'home';

$uri_parameters = array_values(array_filter(explode('/', $_SERVER['REQUEST_URI'])));

if (in_array(current($uri_parameters), array('home', 'lu2cas'))) {
	$base_directory = array_shift($uri_parameters);
	$uri_parameters = array_values(array_filter($uri_parameters));
}

define('BASE_URL', sprintf('http://%s/%s', $_SERVER['HTTP_HOST'], $base_directory));
define('BASE_DIRECTORY', sprintf('/%s', $base_directory));
define('APP_PATH', dirname(__FILE__));
define('DS', DIRECTORY_SEPARATOR);

$router = new Router($uri_parameters);
$router->redirect();

exit();