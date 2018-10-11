<!DOCTYPE html>
<html id="admin">
<title>Admin</title>
<meta charset="UTF-8>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="style.css">
<!-- <?php include($_SERVER["DOCUMENT_ROOT"].'/Outils/header.php'); ?> -->
 <?php include ('../Outils/header.php'); ?> 

<body>
<br><br><br>
<div id="formulaire">
	<form method="post" action="cible.php" ng-submit="login()"> 
		<label for="classe">Classe: </label><input type="text" name="classe" id="classe" required /><span id="missClass"></span>
		<label for="type">Type: </label><input type="text" name="type" id="type" required />
		<!-- <label for="Type">Type</label><br>
       <select name="le_type" id="le_type">
           <option value="Héroïque">Héroïque</option>
           <option value="Secondaire">Secondaire</option>
           <option value="Spéciale">Spéciale</option>
           <option value="Monstre/boss">Monstre/boss</option>                   
	</select> -->
		<label for="hp">HP: </label><input type="text" name="hp" id="hp" required /><span id="missHp"></span>
		<label for="mp">MP:</label><input type="text" name="mp" id="mp" required /><span id="missMp"></span>
		<label for="atk">ATK:</label><input type="text" name="atk" id="atk" required /><span id="missAtk"></span>
		<label for="def">DEF:</label><input type="text" name="def" id="def" required /><span id="missDef"></span>
		<label for="mat">MAT:</label><input type="text" name="mat" id="mat" required /><span id="missMat"></span>
		<label for="mdf">MDF:</label><input type="text" name="mdf" id="mdf" required /><span id="missMdf"></span>
		<label for="agi">AGI:</label><input type="text" name="agi" id="agi" required /><span id="missAgi"></span>
		<label for="luk">LUK:</label><input type="text" name="luk" id="luk" required /><span id="missLuk"></span><br><br>	
		<input type="submit" value="Valider" id="bouton_validation" />	 
	</form>
</div>

<script>
	var formValid = document.getElementById('bouton_validation');
	var classe = document.getElementById('classe');
	var missClass = document.getElementById('missClass');
	var class_valid = /^[A-Za-z]/;
	
	var hp = document.getElementById('hp');
	/*console.log(hp);*/
	var missHp = document.getElementById('missHp');
	var hp_valid = /^[0-9]/
	
	
	var mp = document.getElementById('mp')
	var missMp = document.getElementById('missMp')
	var mp_valid = /^[0-9]/
	
	var atk = document.getElementById('atk')
	var missAtk = document.getElementById('missAtk')
	var atk_valid = /^[0-9]/
	
	var def = document.getElementById('def')
	var missDef = document.getElementById('missDef')
	var def_valid = /^[0-9]/
	
	var mat = document.getElementById('mat')
	var missMat = document.getElementById('missMat')
	var mat_valid = /^[0-9]/
	
	var mdf = document.getElementById('mdf')
	var missMdf = document.getElementById('missMdf')
	var mdf_valid = /^[0-9]/
	
	var agi = document.getElementById('agi')
	var missAgi = document.getElementById('missAgi')
	var agi_valid = /^[0-9]/
	
	var luk = document.getElementById('luk')
	var missLuk = document.getElementById('missLuk')
	var luk_valid = /^[0-9]/
	
	
	formValid.addEventListener('click', validation_classe);
	
	
	
	function validation_classe(event){
		if (classe.validity.valueMissing){
			event.preventDefault();
			missClass.textContent = 'Nom manquant';
			missClass.style.color = 'red';
		}		
		else if (class_valid.test(classe.value) == false){
			event.preventDefault();
			missClass.textContent = 'Rentrez un mot !';
			missClass.style.color = 'red';
		}
		else if (hp.validity.valueMissing){
			event.preventDefault();
			missHp.textContent = 'HP manquant';
			missHp.style.color = 'red';
		}	
		else if (hp_valid.test(hp.value) == false){
			event.preventDefault();
			missHp.textContent = 'Rentrez un nombre !';
			missHp.style.color = 'red';
		}
		else if (mp.validity.valueMissing){
			event.preventDefault();
			missMp.textContent = 'MP manquant';
			missMp.style.color = 'red';
		}
		else if (mp_valid.test(mp.value) == false){
			event.preventDefault();
			missMp.textContent = 'Rentrez un nombre !';
			missMp.style.color = 'red';
		}
		else if (atk.validity.valueMissing){
			event.preventDefault();
			missAtk.textContent = 'ATK manquant';
			missAtk.style.color = 'red';
		}
		else if (atk_valid.test(atk.value) == false){
			event.preventDefault();
			missAtk.textContent = 'Rentrez un nombre !';
			missAtk.style.color = 'red';
		}
		else if (def.validity.valueMissing){
			event.preventDefault();
			missDef.textContent = 'DEF manquant';
			missDef.style.color = 'red';
		}
		else if (def_valid.test(def.value) == false){
			event.preventDefault();
			missDef.textContent = 'Rentrez un nombre !';
			missDef.style.color = 'red';
		}
		else if (mat.validity.valueMissing){
			event.preventDefault();
			missMat.textContent = 'MAT manquant';
			missMat.style.color = 'red';
		}
		else if (mat_valid.test(mat.value) == false){
			event.preventDefault();
			missMat.textContent = 'Rentrez un nombre !';
			missMat.style.color = 'red';
		}
		else if (mdf.validity.valueMissing){
			event.preventDefault();
			missMdf.textContent = 'MDF manquant';
			missMdf.style.color = 'red';
		}
		else if (mdf_valid.test(mdf.value) == false){
			event.preventDefault();
			missMdf.textContent = 'Rentrez un nombre !';
			missMdf.style.color = 'red';
		}
		else if (agi.validity.valueMissing){
			event.preventDefault();
			missAgi.textContent = 'AGI manquant';
			missAgi.style.color = 'red';
		}
		else if (agi_valid.test(mp.value) == false){
			event.preventDefault();
			missAgi.textContent = 'Rentrez un nombre !';
			missAgi.style.color = 'red';
		}
		else if (luk.validity.valueMissing){
			event.preventDefault();
			missLuk.textContent = 'LUK manquant';
			missLuk.style.color = 'red';
		}
		else if (luk_valid.test(luk.value) == false){
			event.preventDefault();
			missLuk.textContent = 'Rentrez un nombre !';
			missLuk.style.color = 'red';
		}
	}	
	
</script>
</body>