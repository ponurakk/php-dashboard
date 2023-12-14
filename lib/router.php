<?php
include_once "../config.php";

class Router {
	function get($route, $path_to_include) { $this->validate_method("GET", $route, $path_to_include); }
	function post($route, $path_to_include) { $this->validate_method("POST", $route, $path_to_include); }
	function put($route, $path_to_include) { $this->validate_method("PUT", $route, $path_to_include); }
	function patch($route, $path_to_include) { $this->validate_method("PATCH", $route, $path_to_include); }
	function delete($route, $path_to_include) { $this->validate_method("DELETE", $route, $path_to_include); }
	function any($route, $path_to_include) { $this->route($route, $path_to_include); }

	private function validate_method($method, $route, $path_to_include) {
		if ($_SERVER["REQUEST_METHOD"] == $method) {
			$this->route($route, $path_to_include);
		}
	}

	private function route($route, $path_to_include) {
		if (!strpos($path_to_include, '.php')) {
			$path_to_include .= '.php';
		}

		// Match 404 page
		if ($route == "/404") {
			include_once "./$path_to_include";
			die();
		}

		$request_url = filter_var($_SERVER["REQUEST_URI"], FILTER_SANITIZE_URL);
		$route_parts = explode('/', $route);
		$request_url_parts = explode('/', strtok(rtrim($request_url, '/'), '?'));

		// Remove first "/"
		array_shift($route_parts);
		array_shift($request_url_parts);

		// Match index
		if ($route_parts[0] == '' && count($request_url_parts) == 0) {
			include_once "./$path_to_include";
			die();
		}

		// Validate route
		if ($route_parts != $request_url_parts) {
			return;
		}

		include_once "./$path_to_include";
		die();
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

	public function redirect(string $route) {
		header("Location: ".BasePath.$route);
	}
}
