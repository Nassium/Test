<head>
<title>Quiz Ronaldo</title>
<meta charset="UTF-8">
<?php include('./Outils/header.php'); ?>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="body-nass"> 

<div class="w3-content w3-padding" style="max-width:1564px">

    <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Quiz Ronaldo</h3>
  </div>
  
	<script src="Nassim.js" type="text/javascript"></script>
	
		<label for="nom">Nom: </label><input type="text" name="nom" id="nom" required /><span id="missNom"></span>
		<label for="prenom">Prenom: </label><input type="text" name="prenom" id="prenom" required /><span id="missPrenom"></span>
		<label for="nationalite">Nationalite: </label><input type="text" name="nationalite" id="nationalite" required /><span id="missNationalite"></span>
		<label for="age">Age: </label><input type="text" name="age" id="age" required /><span id="missAge"></span>
		
		<br><br><br>
	
		<input type="submit" value="Valider" onClick="valid(); return false;"> 	 
	</form>
	
</div> 


</body>
</html>
