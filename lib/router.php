<?php
include_once "./config.php";
include_once "./lib/utils.php";

class Router {
	function get($route, $path_to_include, $is_protected = false) { $this->validate_method("GET", $route, $path_to_include, $is_protected); }
	function post($route, $path_to_include, $is_protected = false) { $this->validate_method("POST", $route, $path_to_include, $is_protected); }
	function put($route, $path_to_include, $is_protected = false) { $this->validate_method("PUT", $route, $path_to_include, $is_protected); }
	function patch($route, $path_to_include, $is_protected = false) { $this->validate_method("PATCH", $route, $path_to_include, $is_protected); }
	function delete($route, $path_to_include, $is_protected = false) { $this->validate_method("DELETE", $route, $path_to_include, $is_protected); }
	function any($route, $path_to_include, $is_protected = false) { $this->route($route, $path_to_include, $is_protected); }

	private function validate_method($method, $route, $path_to_include, $is_protected) {
		if ($_SERVER["REQUEST_METHOD"] == $method) {
			$this->route($route, $path_to_include, $is_protected);
		}
	}

	private function route($route, $path_to_include, $is_protected) {
		if (!strpos($path_to_include, '.php')) {
			$path_to_include .= '.php';
		}

		if ($is_protected == true) {
			$db = new Database();
			if (!$db->checkValidLogin()) {
				$this->redirect("/login");
			}
		}

		// Match 404 page
		if ($route == "/404") {
			include_once "./$path_to_include";
			echo '<script src="'.BasePath.'/scripts/cursors.js"></script>';
			die();
		}

		$request_url = filter_var($_SERVER["REQUEST_URI"], FILTER_SANITIZE_URL);
		$route_parts = explode('/', $route);
		$request_url_parts = explode('/', strtok(rtrim($request_url, '/'), '?'));

		// Remove first "/"
		array_shift($route_parts);
		array_shift($request_url_parts);

		// Match index
		if (count($request_url_parts) == 0) {
			include_once "./$path_to_include";
			(new Render(ComponentType::Footer))->render();
			echo '<script src="'.BasePath.'/scripts/cursors.js"></script>';
			die();
		}

		// Validate route
		if ($route_parts != $request_url_parts) {
			return;
		}

		try {
			require_once "./$path_to_include";
			if (!str_starts_with($path_to_include, "api")) {
				(new Render(ComponentType::Footer))->render();
				echo '<script src="'.BasePath.'/scripts/cursors.js"></script>';
			}
		} catch (Exception $e) {
			(new Render(ComponentType::Footer))->render();
			echo '<script src="'.BasePath.'/scripts/cursors.js"></script>';
			throw $e;
		}
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

	public function errorRedirect(string $route, $e) {
		$url = "http://$_SERVER[HTTP_HOST]".BasePath.$route;
		$data = [$e->getMessage(), $e->getLine(), $e->getTraceAsString()];

		$options = [
			'http' => [
				'header' => "Content-type: application/x-www-form-urlencoded\r\n",
				'method' => 'POST',
				'content' => http_build_query($data),
			],
		];

		$context = stream_context_create($options);
		$result = file_get_contents($url, false, $context);

		ob_end_clean();
		echo $result;
	}
}
