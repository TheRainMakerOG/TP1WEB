<?php
    class SignupView {

      private $model = null;

      public function __construct($model) {
        $this->model = $model;
      }

      public function render() {
        require_once("./views/layouts/signup_layout_view.php");
      }

      public function show_errors($errors = null){
        if ($errors != null){
          print '<p style="color:red">';
          foreach ($errors as $error){
            print "  *** ".htmlentities($error)."<br />";
          }
          print "</p>\n";
        }
      }
    }
 ?>
