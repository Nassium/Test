

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
	var nom = document.getElementById('nom')
	var missNom = document.getElementById('missNom')
	if (mp.validity.valueMissing){			
		missMp.textContent = 'Nom manquant';
		missMp.style.color = 'red';
		console.log("valid_mp:", valid_mp);

	}	
	else if (nb_valid.test(mp.value) == false){
		missMp.textContent = 'Rentrez un nombre !';
		missMp.style.color = 'red';
		console.log("valid_mp:", valid_mp);

	}
}
