<?php
require __DIR__ . '/../vendor/autoload.php';

spl_autoload_register(function ($class_name) {
	include strtolower($class_name) . '.php';
});