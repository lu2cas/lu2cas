<?php

class App {

	public function __construct() {}

	public static function throwHttpError($code) {
		http_response_code(404);
		include './views/errors/' . $code . '.php';
	}
}