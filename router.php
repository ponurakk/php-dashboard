<?php

function get($route, $path_to_include) {
	validate_method("GET", $route, $path_to_include);
}

function post($route, $path_to_include) {
	validate_method("POST", $route, $path_to_include);
}

function put($route, $path_to_include) {
	validate_method("PUT", $route, $path_to_include);
}

function patch($route, $path_to_include) {
	validate_method("PATCH", $route, $path_to_include);
}

function delete($route, $path_to_include) {
	validate_method("DELETE", $route, $path_to_include);
}

function any($route, $path_to_include) {
	route($route, $path_to_include);
}

function validate_method($method, $route, $path_to_include) {
	if ($_SERVER["REQUEST_METHOD"] == $method) {
		route($route, $path_to_include);
	}
}

function route($route, $path_to_include) {
	$callback = $path_to_include;
	if (!is_callable($callback)) {
		if (!strpos($path_to_include, '.php')) {
			$path_to_include .= '.php';
		}
	}

	if ($route == "/404") {
		include_once __DIR__ . "/$path_to_include";
		exit();
	}

	$request_url = filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL);
	$request_url = rtrim($request_url, '/');
	$request_url = strtok($request_url, '?');
	$route_parts = explode('/', $route);
	$request_url_parts = explode('/', $request_url);
	array_shift($route_parts);
	array_shift($request_url_parts);

	if ($route_parts[0] == '' && count($request_url_parts) == 0) {
		// Callback function
		if (is_callable($callback)) {
			call_user_func_array($callback, []);
			exit();
		}
		include_once __DIR__ . "/$path_to_include";
		exit();
	}

	if (count($route_parts) != count($request_url_parts)) {
		return;
	}

	$parameters = [];
	for ($i = 0; $i < count($route_parts); $i++) {
		$route_part = $route_parts[$i];
		if (preg_match("/^[$]/", $route_part)) {
			$route_part = ltrim($route_part, '$');
			array_push($parameters, $request_url_parts[$i]);
			$$route_part = $request_url_parts[$i];
		} else if ($route_parts[$i] != $request_url_parts[$i]) {
			return;
		}
	}

	// Callback function
	if (is_callable($callback)) {
		call_user_func_array($callback, $parameters);
		exit();
	}

	include_once __DIR__ . "/$path_to_include";
	exit();
}

function out($text) {
	echo htmlspecialchars($text);
}

function set_csrf() {
	session_start();
	if (!isset($_SESSION["csrf"])) {
		$_SESSION["csrf"] = bin2hex(random_bytes(50));
	}
	echo '<input type="hidden" name="csrf" value="' . $_SESSION["csrf"] . '">';
}

function is_csrf_valid() {
	session_start();
	if (!isset($_SESSION['csrf']) || !isset($_POST['csrf'])) {
		return false;
	}

	if ($_SESSION['csrf'] != $_POST['csrf']) {
		return false;
	}

	return true;
}
