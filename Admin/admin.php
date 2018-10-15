<!DOCTYPE html>
<html id="admin">
<title>Admin</title>
<meta charset="UTF-8>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="../style.css">
<?php include ('../Outils/header.php'); ?> 
 

<body>
<br><br><br>
	<form method="post" action="cible.php" id="formulaire" > 
		<label for="classe">Classe: </label><input type="text" name="classe" id="classe" required /><span id="missClass"></span>
		<label for="type">Type: </label>
       <select name="type" id="type">
           <option value=1>Heroique</option>
           <option value=2">Secondaire</option>
           <option value=3>Speciale</option>
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

<style type="text/css">
	table {
		border-collapse:collapse;
		width:100%;
		color:#d96459;
		font-family:monospace;
		font-size:25px;
		text-align:left;
	}
	th {
		background-color: #d96459;
		color: white;
	}
	tr:nth-child(even) {background-color: #f2f2f2;}
</style>

<table> 
	<tr>
		<!--<th>idClasse</th>-->
		<th>Nom</th>
		<th>Type</th>		
		<th>HP</th>
		<th>MP</th>
		<th>ATK</th>
		<th>DEF</th>
		<th>MAT</th>
		<th>MDF</th>
		<th>AGI</th>
		<th>LUK</th>
		<th>Total</th> 
	</tr>
<?php

$mysqli = new mysqli('localhost', 'dissidious', 'revenge', 'dissidious_db');
        $mysqli->set_charset("utf8");
        $requete = 'SELECT * FROM classe';
        $resultat = $mysqli->query($requete);
        while ($ligne = $resultat->fetch_assoc()) {
            echo '<tr><td>'.$ligne['nom'].'</td><td>'.$ligne['type'].'</td><td>'.$ligne['hp'].'</td><td>'.$ligne['mp'].'</td><td>'
			.$ligne['atk'].'</td><td>'.$ligne['def'].'</td><td>'.$ligne['mat'].'</td><td>'.$ligne['mdf'].'</td><td>'.$ligne['agi'].'</td><td>'
			.$ligne['luk'].'</td><td>'.$ligne['total'].'</td></tr>';            
        }
		echo '</table>';
        $mysqli->close();		
?>
</table>  
</body>
</html>