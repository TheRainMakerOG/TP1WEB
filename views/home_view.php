<?php
    class homeView {

      private $model = null;

      public function __construct($model) {
        $this->model = $model;
      }

      public function render_disconnected() {
        require_once("./views/layouts/disconnected_home_layout_view.php");
      }

      public function render_connected() {
        require_once("./views/layouts/connected_home_layout_view.php");
      }

    }
 ?>
