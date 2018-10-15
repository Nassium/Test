<!DOCTYPE html>
<html id="home">
<title>Accueil</title>
<meta charset="UTF-8">
<?php include('./Outils/header.php'); ?>
<body>





<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Projects</h3>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-mar">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Children Of Memories</div>
		<br><br><br>
        <!--<img src="/w3images/house5.jpg" style="width:100%"> -->
		<iframe width="560" height="315" src="https://www.youtube.com/embed/OCLjYwgE43k" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </div>
    </div>
    <!--<div class="w3-col l3 m6 w3-margin-bottom"> -->
      <div class="w3-display-container">
        <div class="w3-display-topright w3-black w3-padding">Dissidious Revenge (Bientot disponible)</div>
		<br><br><br>
        <img src="img/Dissidious.png" width="560" height="315" style="float:right;margin:0 10px 0 20px;" /> 
      </div>
    </div>
</div>    

  <!-- About Section -->
  <div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">A propos </h3>
    <p> Fan de jeux videos ainsi que de manga, developpeur depuis quelques mois, j'essaye toujours d'en apprendre plus dans le domaine et vous sortir
	de tres beaux scenarios pour mes jeux-videos ! Bien que l'aspect equilibre est a revoir ! Notamment pour mon premier jeu Children Of Memories.
    </p>
  </div>

  <!--
  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="/w3images/team2.jpg" alt="John" style="width:100%">
      <h3>John Doe</h3>
      <p class="w3-opacity">CEO & Founder</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="/w3images/team1.jpg" alt="Jane" style="width:100%">
      <h3>Jane Doe</h3>
      <p class="w3-opacity">Architect</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="/w3images/team3.jpg" alt="Mike" style="width:100%">
      <h3>Mike Ross</h3>
      <p class="w3-opacity">Architect</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="/w3images/team4.jpg" alt="Dan" style="width:100%">
      <h3>Dan Star</h3>
      <p class="w3-opacity">Architect</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
  </div>
  
-->

  <!-- Contact Section -->
  <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Contact</h3>
    <p>Parlons un peu du prochain projet ou exposez-nous vos bugs diverses et varies !</p>		
      <input class="w3-input w3-border" type="text" placeholder="Nom" required name="Nom">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Email" required name="Email">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Objet" required name="Objet">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Commentaire" required name="Commentaire">
      <button class="w3-button w3-black w3-section" type="submit">
        <i class="fa fa-paper-plane"></i> Envoyer un message
      </button>
    
  </div>
  
<!-- End page content -->
</div>

</body>
</html>
