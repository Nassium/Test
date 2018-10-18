<!DOCTYPE html>
<head>
<html id="admin">
<title>Admin</title>
<meta charset="UTF-8>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="../style.css">
<?php include ('../Outils/header.php'); ?> 
</head>

<body>
<br><br><br>
	<form method="post" action="base_send.php" id="formulaire" > 
		<label for="classe">Classe: </label><input type="text" name="classe" id="classe" required /><span id="missClass"></span>
		<label for="type">Type: </label>
       <select name="type" id="type">
           <option value=Héroïque>Héroïque</option>
           <option value=Secondaire>Secondaire</option>
           <option value=Spéciale>Spéciale</option>
           <option value=4>Ennemi/Monstre/boss</option>                   
	</select>
		<label for="hp">HP: </label><input type="text" name="hp" id="hp" required /><span id="missHp"></span>
		<label for="mp">MP:</label><input type="text" name="mp" id="mp" required /><span id="missMp"></span>
		<label for="atk">ATK:</label><input type="text" name="atk" id="atk" required /><span id="missAtk"></span>
		<label for="def">DEF:</label><input type="text" name="def" id="def" required /><span id="missDef"></span>
		<label for="mat">MAT:</label><input type="text" name="mat" id="mat" required /><span id="missMat"></span>
		<label for="mdf">MDF:</label><input type="text" name="mdf" id="mdf" required /><span id="missMdf"></span>
		<label for="agi">AGI:</label><input type="text" name="agi" id="agi" required /><span id="missAgi"></span>
		<label for="luk">LUK:</label><input type="text" name="luk" id="luk" required /><span id="missLuk"></span><br><br>
		<label for="total">Total:</label><input type="text" name="total" id="total" required readonly /><span id="missTotal"></span><br><br>
		<input type="submit" value="Valider" onClick="valid(); return false;"> 	 
	</form>
<script src="Validation.js" type="text/javascript"></script>

<?php include ('../Outils/read_base_classe.php'); ?>   
</body>
</html>