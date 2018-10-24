var nb_valid = /^[0-9]/;
var valid_nom = false;

function couleur(){	
	var Color = document.getElementById('body-nass');
	if (Color.style.backgroundColor == 'red')
		Color.style.backgroundColor="black";
	else if (Color.style.backgroundColor == 'black')
		Color.style.backgroundColor='white';
	else
		Color.style.backgroundColor='red';
}

function v_nom(){
	var nom = document.getElementById('nom'); // Recup de l'élement du champ nom
	var missClass = document.getElementById('missClass'); // Recup du span du champ nom
	var class_valid = /^[A-Za-z]/; // Vérification que le nom est bien constitué de lettres et non de chiffres
		if (nom.validity.valueMissing){	// Utilisateur ne rentrant aucune valeur au moment du clic
			missClass.textContent = 'Nom manquant'; // Affichage du texte de restriction 
			missClass.style.color = 'red'; // Couleur du texte de restriction 
			console.log("valid_nom:", valid_nom); // Affichage dans la console Firefox ou Google Chrome de la valeur de valid_nom
		}
		else if (nom.test(nom.value) == false){ // Si la valeur n'est pas valide 
			missClass.textContent = 'Rentrez un mot !'; 
			missClass.style.color = 'red';
			console.log("valid_nom:", valid_nom);
			
		}
		else {
			missClass.textContent = '';
			valid_nom = true;
			console.log("valid_nom:", valid_nom);
		}
		
	}

function v_prenom(){
	var prenom = document.getElementById('prenom'); // Recup de l'élement du champ prenom
	var missPrenom = document.getElementById('missPrenom'); // Recup du span du champ prenom
	var class_valid = /^[A-Za-z]/; // Vérification que le prenom est bien constitué de lettres et non de chiffres
		if (prenom.validity.valueMissing){	// Utilisateur ne rentrant aucune valeur au moment du clic
			missPrenom.textContent = 'prenom manquant'; // Affichage du texte de restriction 
			missPrenom.style.color = 'red'; // Couleur du texte de restriction 
			console.log("valid_prenom:", valid_prenom); // Affichage dans la console Firefox ou Google Chrome de la valeur de valid_prenom
		}
		else if (prenom.test(prenom.value) == false){ // Si la valeur n'est pas valide 
			prenom.textContent = 'Rentrez un mot !'; 
			mmissPrenom.style.color = 'red';
			console.log("valid_prenom:", valid_prenom);
			
		}
		else {
			prenom.textContent = '';
			valid_nom = true;
			console.log("valid_prenom:", valid_prenom);
		}
		
	}

function v_email(){
		var email = document.getElementById('email'); // Recup de l'élement du champ email
		var missEmail = document.getElementById('missEmail'); // Recup du span du champ email
	    var email = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/; // Vérification que l'email est composé que de lettre, chiffre et " . - _ " et qu'il contient un @
		   if (email.validity.valueMissing){	// Utilisateur ne rentrant aucune valeur au moment du clic
			missClass.textContent = 'email manquant'; // Affichage du texte de restriction 
			missClass.style.color = 'red'; // Couleur du texte de restriction 
			console.log("valid_email:", valid_email); // Affichage dans la console Firefox ou Google Chrome de la valeur de valid_email
			}
		   
		   if(!email.test(champ.value))
		   {
			  surligne(champ, true);
			  return false;
		   }
		   else
		   {
			  surligne(champ, false);
			  return true;
		   }
		}

}
