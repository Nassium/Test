<!DOCTYPE html>
<html id="admin">
<title>Admin</title>
<meta charset="UTF-8>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php include($_SERVER["DOCUMENT_ROOT"].'../Outils/header.php'); ?>

<body>
<div id="formulaire" position="200px">
	<form method="post" action="cible.php" ng-submit="login()">
 
	<p>
		<label for="nom">Prenom: </label>
		<input type="text" name="prenom" /><br>
		<label for="nom">Nom:</label>
		<input type="text" name="nom" /><br>
		<input type="submit" value="Valider" />
	</p> 
	</form>
</div>
</body>