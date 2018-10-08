<!DOCTYPE html>
<p> Tu as choisi la classe <?php echo $_POST['classe']; ?> !</p>

<?php

$nom = $_POST['classe'];
$hp = $_POST['hp'];
$mp = $_POST['mp'];
$atk = $_POST['atk'];
$def = $_POST['def'];
$mat = $_POST['mat'];
$mdf = $_POST['mdf'];
$agi = $_POST['agi'];
$luk = $_POST['luk'];

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=dissidious_db;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$req = $bdd->prepare('INSERT INTO classe(nom, hp, mp, atk, def, mat, mdf, agi, luk) VALUES(:nom, :hp, :mp, :atk, :def, :mat, :mdf, :agi, :luk)');
$req->execute(array(
	'nom' => $nom,
	'hp' => $hp,
	'mp' => $mp,
	'atk' => $atk,
	'def' => $def,
	'mat' => $mat,
	'mdf' => $mdf,
	'agi' => $agi,
	'luk' => $luk	
	));


echo 'La classe a bien été ajouté !';
?>

