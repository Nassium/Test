<table> 
	<tr>		
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
            echo '<tr><td>'.$ligne['idClasse'].'</td><td>'.$ligne['nom'].'</td><td>'.$ligne['type'].'</td><td>'.$ligne['hp'].'</td><td>'.$ligne['mp'].'</td><td>'
			.$ligne['atk'].'</td><td>'.$ligne['def'].'</td><td>'.$ligne['mat'].'</td><td>'.$ligne['mdf'].'</td><td>'.$ligne['agi'].'</td><td>'
			.$ligne['luk'].'</td><td>'.$ligne['total'].'</td></tr>';            
        }
		echo '</table>';
        $mysqli->close();		
?>