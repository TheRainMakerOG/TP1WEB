<?php
    class HomeController {

        private $model = null;

        public function __construct($model) {
            $this->model = $model;
        }

        public function home() {
            if (!isset($_SESSION['user']) or (time() - $_SESSION['timestamp'] > 5)){
              require_once("views/home_view.php");
              $view = new HomeView($this->model);
              $view->render_disconnected();
		        } else {
              require_once("views/home_view.php");
              $view = new HomeView($this->model);
              $view->render_connected();
		        }
        }

        function error(){
            print "Erreur!";
        }
    }
?>
