<!DOCTYPE html>
<p> Tu as choisi la classe <?php echo $_POST['classe']; ?> !</p>

<?php

$nom = "test" ;//$_POST['classe'];
$type = "test_type" ;//$_POST['type'];
$hp = 212 ;//$_POST['hp'];
$mp = 125; //$_POST['mp'];
$atk = 14 ;//$_POST['atk'];
$def = 10; //$_POST['def'];
$mat = 35; //$_POST['mat'];
$mdf = 17 ;//$_POST['mdf'];
$agi = 36; //$_POST['agi'];
$luk = 19; //$_POST['luk'];
$total = 14555 ;

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=dissidious_db;charset=utf8', 'dissidious', 'revenge');
	//$bdd = new PDO('mysql:host=89.157.211.54:3306;dbname=dissidious_db;charset=utf8', 'dissidious', 'revenge');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$req = $bdd->prepare('INSERT INTO classe(nom, type, hp, mp, atk, def, mat, mdf, agi, luk, total) VALUES(:nom, :hp, :type, :mp, :atk, :def, :mat, :mdf, :agi, :luk, :total)');
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

