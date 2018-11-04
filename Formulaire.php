<head>
<title>Formulaire</title>
<meta charset="UTF-8">
<?php include('./Outils/header.php'); ?>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="body-nass"> 

<div class="w3-content w3-padding" style="max-width:1564px">

    <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Formulaire d'inscription</h3>
  </div>
  
	<form>
		<input type="button" value="Retour" onclick="history.go(-1)">
	</form>
	<br><br>
	
	<script src="Nassim.js" type="text/javascript"></script>
		
		<label for="nom">Nom: </label><input type="text" name="nom" id="nom" required /><span id="missNom"></span>
		<label for="prenom">Prenom: </label><input type="text" name="prenom" id="prenom" required /><span id="missPrenom"></span>
		<label for="email">Email: </label><input type="text" name="email" id="email" required /><span id="missEmail"></span>
		<label for="age">Age: </label><input type="text" name="age" id="age" required /><span id="missAge"></span>
		<br><br>
		<select name="type" id="type">
           <option value=Homme>Homme</option>
           <option value=Femme>Femme</option>               
		</select>
		
		
		<br><br><br>
		
		<!-- onClick = valid(); mais tu n'as aucune fonction valid() dans ton js -->
		<input type="submit" value="Valider" onClick="v_prenom(); return false;"> 	 
	</form>
	
</div> 


</body>
</html>
