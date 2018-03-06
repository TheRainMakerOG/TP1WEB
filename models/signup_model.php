<?php
    class SignupModel {

        public $login = null;
        public $firstname = null;
        public $lastname = null;
        public $birthday = null;
        public $email = null;
        public $password = null;
        public $confirmpassword = null;

        public function __construct() {}

        function validate_form(){
      		$errors = null;
      		if (strlen($this->login) == 0) {
      			$errors[] = "Vous devez entrer un nom d'utilisateur.";
      		}
      		if (strlen($this->firstname) == 0) {
      			$errors[] = "Vous devez entrer un prénom.";
      		}
      		if (strlen($this->lastname) == 0) {
      			$errors[] = "Vous devez entrer un nom.";
      		}
      		if (strlen($this->email) == 0) {
      			$errors[] = "Vous devez entrer un courriel.";
      		}
      		if (!filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
      			$errors[] = "Entrer une adresse courriel valide.";
      		}
      		if (strlen($this->password) < 8) {
      			$errors[] = "Vous devez entrer un mot de passe d'au moins 8 caractères.";
      		}
      		if (strlen($this->confirmpassword) < 8) {
      			$errors[] = "Vous devez entrer une confirmation de mot de passe d'au moins 8 caractères.";
      		}
      		if ($this->password !== $this->confirmpassword) {
      			$errors[] = "Les mots de passe doivent être identiques.";
      		}
      		return $errors;
      	}
        function process(){
          print "Le nom d’utilisateur que vous avez choisi est : ". htmlentities($_POST['login'])."<br />";
          print "Votre nom complet est : ".htmlentities($_POST['firstname'])." ".htmlentities($_POST['lastname'])."<br />";
          print "Il est possible de vous joindre par 	 courriel à l’adresse : ".htmlentities($_POST['email'])."<br />";
          print "Votre mot de passe MD5 est : ".hash('md5', htmlentities($_POST['password']))."<br />";
          $dob = new DateTime($_POST['birthdate']);
          $now = new DateTime();
          $diffe = $now->diff($dob);
          $age = $diffe->y;
          print "Vous êtes âgé de : ". $age." ans". "<br />";
        }
      }
?>
