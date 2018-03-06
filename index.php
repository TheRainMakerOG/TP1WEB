<?php 
	session_start();
	session_regenerate_id(true); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercice 4</title>
</head>
	<body>
		<?php require("./router.php"); ?>
		<br />
		<a href="<?php print $_SERVER["PHP_SELF"]; ?>">Accueil</a><br />
	</body>
</html>
