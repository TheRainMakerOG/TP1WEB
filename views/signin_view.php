<?php
    class SigninView {

      private $model = null;

      public function __construct($model) {
        $this->model = $model;
      }

      public function render() {
        require_once("./views/layouts/signin_layout_view.php");
      }
    }
 ?>
