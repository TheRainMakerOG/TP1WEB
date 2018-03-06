<?php
	class SignupController {

			private $model = null;

			public function __construct($model) {
				$this->model = $model;
			}

		function requestSignup() {
			require("./views/signup_view.php");
			$view = new SignupView($this->model);
			$view->render();
		}



	function processSignup() {
		$this->model->login = strip_tags($_POST['login']);
		$this->model->firstname = strip_tags($_POST['firstname']);
		$this->model->lastname = strip_tags($_POST['lastname']);
		$this->model->birthdate = strip_tags($_POST['birthdate']);
		$this->model->email = strip_tags($_POST['email']);
		$this->model->password = strip_tags($_POST['password']);
		$this->model->confirmpassword = strip_tags($_POST['confirmpassword']);
		if ($form_errors = $this->model->validate_form()) {

				require_once("views/signup_view.php");
				$view = new SignupView($this->model);
				$view->show_errors($form_errors);
				$view->render();

		} else {
			$this->model->process();
		}
	}
}


?>
