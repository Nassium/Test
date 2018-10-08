<!DOCTYPE html>
<html id="admin">
<title>Admin</title>
<meta charset="UTF-8>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="style.css">
<?php include($_SERVER["DOCUMENT_ROOT"].'../Outils/header.php'); ?>

<body>
<br><br><br>
<div id="formulaire">
	<form method="post" action="cible.php" ng-submit="login()"> 
		<label for="classe">Classe: </label><input type="text" name="classe" id="classe" required /><span id="missClass"></span> <br>
		<label for="hp">HP: </label><input type="text" name="hp" required /><br>
		<label for="mp">MP:</label><input type="text" name="mp" required /><br>
		<label for="atk">ATK:</label><input type="text" name="atk" required /><br>
		<label for="def">DEF:</label><input type="text" name="def" required /><br>
		<label for="mat">MAT:</label><input type="text" name="mat" required /><br>
		<label for="mdf">MDF:</label><input type="text" name="mdf" required /><br>
		<label for="agi">AGI:</label><input type="text" name="agi" required /><br>
		<label for="luk">LUK:</label><input type="text" name="luk" required /><br>	
		<input type="submit" value="Valider" id="bouton_validation" />	 
	</form>
</div>

<script>
	var formValid = document.getElementById('bouton_validation');
	var classe = document.getElementById('classe')
	var missClass = document.getElementById('missClass')
	
	formValid.addEventListener('click', validation);
	
	function validation(event){
		if (classe.validity.valueMissing){
			event.preventDefault();
			missClass.textContent = 'Nom manquant';
			missClass.style.color = 'red';
		}
	}
</script>
</body>