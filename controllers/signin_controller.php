<?php

	require ("models/signin_model.php");

	class SigninController {

			private $model = null;

			public function __construct($model) {
					$this->model = $model;
			}


	function requestSignin(){
		require("views/signin_view.php");
		$view = new SigninView($this->model);
		$view->render();
	}

	function processSignin(){
		$this->model->login = strip_tags($_POST['login']);
		$this->model->password = strip_tags($_POST['password']);
		if ($this->model->validateSignin()) {
			$_SESSION['user'] = $this->model->login;
			$_SESSION['timestamp'] = time();
			require_once("views/home_view.php");
			$view = new HomeView($this->model);
			$view->render_connected();
		} else {
			require_once("views/home_view.php");
			$view = new HomeView($this->model);
			$view->render_disconnected();
		}
	}

	function processSignout(){
		session_unset();
		session_destroy();
		require("views\layouts\disconnected_home_layout_view.php");
	}


}
?>
