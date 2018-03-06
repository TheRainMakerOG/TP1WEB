<?php

	$controllers = array(
		'home'   => ['home', 'error'],
		'signin' => ['requestSignin', 'processSignin', 'processSignout'],
		'signup' => ['requestSignup', 'processSignup']
	);

		function call($controller, $action) {
		require_once("./controllers/" . $controller . "_controller.php");
		require_once("./models/" . $controller . "_model.php");
		switch ($controller) {
			case 'home':
				$controller = new HomeController(new HomeModel());
				break;
			case 'signin':
				$controller = new SigninController(new SigninModel());
				break;
			case 'signup':
				$controller = new SignupController(new SignupModel());
				break;
			default:
				$controller = new HomeController(new HomeModel());
				break;
		}
		$controller->{ $action }();
	}

	if (isset($_GET['controller']) && isset($_GET['action'])) {
		$controller = strip_tags($_GET['controller']);
		$action = strip_tags($_GET['action']);
	} else {
		$controller = 'home';
		$action = 'home';
	}

	if (array_key_exists($controller, $controllers))	{
		if (in_array($action, $controllers[$controller])) {
			call($controller, $action);
		} else {
			call('home', 'home');
		}
	} else {
		call('home', 'error');
	}

?>
