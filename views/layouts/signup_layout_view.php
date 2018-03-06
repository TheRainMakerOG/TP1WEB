<form method="POST" action="?controller=signup&action=processSignup">
	<label for="signin">Nom d'utilisateur</label><br />
	<input type="text" name="login" value="<?php print $_POST['login'] ?? '' ?>" /><br />
	<label for="firstname">Prénom</label><br />
	<input type="text" name="firstname" value="<?php print $_POST['firstname'] ?? '' ?>" /><br />
	<label for="lastname">Nom</label><br />
	<input type="text" name="lastname" value="<?php print $_POST['lastname'] ?? '' ?>" /><br />
	<label for="date">Date de naissance</label><br />
	<input type="date" name="birthdate" value="<?php print $_POST['birthdate'] ?? '' ?>" /><br />
	<label for="email">Courriel</label><br />
	<input type="email" name="email" value="<?php print $_POST['email'] ?? '' ?>" /><br />
	<label for="password">Mot de passe</label><br />
	<input type="password" name="password" /><br />
	<label for="confirmpassword">Confirmation</label><br />
	<input type="password" name="confirmpassword" /><br />
	<input type="submit" value="S'inscrire" /><br />
</form>
