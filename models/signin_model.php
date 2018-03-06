<?php
  class SigninModel {
      public $login = null;
      public $password = null;

      public function __construct() {}

      function validateSignin(){
      		return ($this->login == "admin" and $this->password = "admin");
      }
  }
?>
