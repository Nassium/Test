<head>
<?php include ('../../Outils/header.php'); ?> 
<title> Classe </title>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<br><br><br>
	<table> 
		<caption>Malfrat</caption>
		<tr>
			<th>HP init</th>
			<th>MP init</th>
			<th>ATK init</th>
			<th>DEF init</th>
			<th>MAT init</th>
			<th>MDF init</th>
			<th>AGI init</th>
			<th>LUK init</th>		 
		</tr>
		<tr>
			<td>35</td>
			<td>15</td>
			<td>25</td>
			<td>10</td>
			<td>5</td>
			<td>10</td>
			<td>28</td>
			<td>30</td>
		</tr>
	</table>	
	<br>
	<div class="container">
		<h2 style="text-align: center;">Caractéristiques</h2>
		<ul class="list-group">
			<a href="#" onclick="notify(this)" class="list-group-item">Chance d'être prit pour cible:				
				<span class="badge badge-primary badge-pill">100</span>
			</a>
			<a href="#" onclick="notify(this)" class="list-group-item">Esquive:				
				<span class="badge badge-primary badge-pill">15</span>
			</a>
			<a href="#" onclick="notify(this)" class="list-group-item">Critique:
				<span class="badge badge-primary badge-pill">10</span>
			</a>
			<a href="#" onclick="notify(this)" class="list-group-item">Type de Compétences: 
				<span class="badge badge-primary badge-pill">Spéciale</span>
			</a>
			<a href="#" onclick="notify(this)" class="list-group-item">Type d'Arme: 
				<span class="badge badge-primary badge-pill">Dague</span>
			</a>
			<a href="#" onclick="notify(this)" class="list-group-item">Type d'Armure: 
				<span class="badge badge-primary badge-pill">Armure légère</span>
			</a>
			<a href="#" onclick="notify(this)" class="list-group-item">Précision: 
				<span class="badge badge-primary badge-pill">100</span>
			</a>    
		</ul>
	</div>
	<br>
	<div class="container">
		<h2 style="text-align: center;">Skills</h2>
	</div>

	<script>
		function notify(el) {
  resetElements();
  console.log(el.innerHTML);
  el.classList.add('active');
}

function resetElements() {
  // Get all elements with "active" class
  var els = document.getElementsByClassName("active");

  // Loop over Elements to remove active class;
  for (var i = 0; i < els.length; i++) {
    els[i].classList.remove('active')
  }
}
	</script>

</body>