<!DOCTYPE html>
<p> Tu as choisi la classe <?php echo $_POST['classe']; ?> !</p>

<?php

$nom = $_POST['classe'];
$type = $_POST['type'];
/*if ($choix == 1){
$type = 'Héroïque';
}
elseif ($choix == 2){
	$type = 'Secondaire';
}
elseif ($choix == 3){
	$type = 'Spéciale';
}
else{
	$type = 'Ennemi/Monstre/boss';
}*/
$hp = $_POST['hp'];
$mp = $_POST['mp'];
$atk = $_POST['atk'];
$def = $_POST['def'];
$mat = $_POST['mat'];
$mdf = $_POST['mdf'];
$agi = $_POST['agi'];
$luk = $_POST['luk'];
$total = $_POST['total'];

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=dissidious_db;charset=utf8', 'dissidious', 'revenge');
	//$bdd = new PDO('mysql:host=89.157.211.54:3306;dbname=dissidious_db;charset=utf8', 'dissidious', 'revenge');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
/*$req = ("SELECT COUNT(*) as verif_exist FROM classe WHERE nom = $nom");
$retour  = $bdd->query->($req);
$donnees = mysql_fetch_array($retour);

if ($donnees['verif_exist']>0){
	echo 'La classe existe déjà!';
}
else {*/
	
	$req = $bdd->prepare('INSERT INTO classe(nom, type, hp, mp, atk, def, mat, mdf, agi, luk, total) VALUES(:nom, :type, :hp, :mp, :atk, :def, :mat, :mdf, :agi, :luk, :total)');
	$req->execute(array(
		'nom' => $nom,
		'type' => $type,
		'hp' => $hp,
		'mp' => $mp,
		'atk' => $atk,
		'def' => $def,
		'mat' => $mat,
		'mdf' => $mdf,
		'agi' => $agi,
		'luk' => $luk,
		'total' => $total	
		));
		echo 'La classe a bien été ajouté !';
// echo Le type renvoyé est $_POST['le_type'],  $_POST['type'];


?> 

