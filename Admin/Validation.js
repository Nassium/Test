var nb_valid = /^[0-9]/
//var formValid = document.getElementById('bouton_validation');
var valid_nom = false;
var valid_hp = false;
var valid_mp = false;
var valid_atk = false;
var valid_def = false;
var valid_mat = false;
var valid_mdf = false;
var valid_agi = false;
var valid_luk = false;
var valid_total = false;
//var all_function = Promise.all([v_nom(),v_hp(),v_mp(),v_atk(),v_def(),v_mat(),v_mdf(),v_agi(),v_luk(),v_total()]);
//formValid.addEventListener('click', return_res);

function v_nom(){
	var classe = document.getElementById('classe');
	var missClass = document.getElementById('missClass');
	var class_valid = /^[A-Za-z]/;
		if (classe.validity.valueMissing){	
			missClass.textContent = 'Nom manquant';
			missClass.style.color = 'red';
			console.log("valid_nom:", valid_nom);
		}
		else if (class_valid.test(classe.value) == false){
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

function v_hp(){
	var hp = document.getElementById('hp');	
	var missHp = document.getElementById('missHp');
	if (hp.validity.valueMissing){			
			missHp.textContent = 'HP manquant';
			missHp.style.color = 'red';
			console.log("valid_hp:", valid_hp);

	}	
	else if (nb_valid.test(hp.value) == false){
			missHp.textContent = 'Rentrez un nombre !';
			missHp.style.color = 'red';
			console.log("valid_hp:", valid_hp);

	}
	else if (nb_valid.test(hp.value) == true){
		var type = document.getElementById('type').options[document.getElementById('type').selectedIndex].value;		
		if (type != 4){
			if (parseInt(hp.value, 10) > 2850){					
				missHp.textContent = '2850 en max !';
				missHp.style.color = 'red';
				console.log("valid_hp:", valid_hp);

			}
			else {
			missHp.textContent = '';
			valid_hp = true;
			console.log("valid_hp:", valid_hp);

			}
		}
		else {
			missHp.textContent = '';
			valid_hp = true;
			console.log("valid_hp:", valid_hp);
		}
	}	

}

function v_mp(){
	var mp = document.getElementById('mp')
	var missMp = document.getElementById('missMp')
	if (mp.validity.valueMissing){			
		missMp.textContent = 'MP manquant';
		missMp.style.color = 'red';
		console.log("valid_mp:", valid_mp);

	}	
	else if (nb_valid.test(mp.value) == false){
		missMp.textContent = 'Rentrez un nombre !';
		missMp.style.color = 'red';
		console.log("valid_mp:", valid_mp);

	}
	else if (nb_valid.test(mp.value) == true){
		var type = document.getElementById('type').options[document.getElementById('type').selectedIndex].value;		
		if (type != 4){
			if (parseInt(hp.value, 10) > 2850){					
				missMp.textContent = '2850 en max !';
				missMp.style.color = 'red';
				console.log("valid_mp:", valid_mp);

			}
			else {
			valid_mp = true;
			console.log("valid_mp:", valid_mp);
			}
		}
		else {
			valid_mp = true;
			console.log("valid_mp:", valid_mp);
			}
	}
	
}

function v_atk(){
	var atk = document.getElementById('atk');	
	var missAtk = document.getElementById('missAtk');
	if (atk.validity.valueMissing){			
		missAtk.textContent = 'ATK manquant';
		missAtk.style.color = 'red';
		console.log("valid_atk:", valid_atk);

	}	
	else if (nb_valid.test(atk.value) == false){
		missAtk.textContent = 'Rentrez un nombre !';
		missAtk.style.color = 'red';
		console.log("valid_atk:", valid_atk);

	}
	else if (nb_valid.test(atk.value) == true){
		var type = document.getElementById('type').options[document.getElementById('type').selectedIndex].value;		
		if (type != 4){
			if (parseInt(atk.value, 10) > 800){					
				missAtk.textContent = '800 en max !';
				missAtk.style.color = 'red';
				console.log("valid_atk:", valid_atk);

			}
			else {
				valid_atk = true;
				console.log("valid_atk:", valid_atk);
			}
		}
		else {
				valid_atk = true;
				console.log("valid_atk:", valid_atk);
			}
	}
	
}

function v_def(){
	var def = document.getElementById('def');	
	var missDef = document.getElementById('missDef');
	if (def.validity.valueMissing){			
		missDef.textContent = 'DEF manquant';
		missDef.style.color = 'red';
		console.log("valid_def:" ,valid_def);

	}	
	else if (nb_valid.test(def.value) == false){
		missDef.textContent = 'Rentrez un nombre !';
		missDef.style.color = 'red';
		console.log("valid_def:", valid_def);

	}
	else if (nb_valid.test(def.value) == true){
		var type = document.getElementById('type').options[document.getElementById('type').selectedIndex].value;		
		if (type != 4){
			if (parseInt(def.value, 10) > 800){					
				missDef.textContent = '800 en max !';
				missDef.style.color = 'red';
				console.log("valid_def:", valid_def);

			}
			else {
				valid_def = true;
				console.log("valid_def:", valid_def);
			}
		}
		else {
				valid_def = true;
				console.log("valid_def:", valid_def);
			}
	}
	
}

function v_mat(){
	var mat = document.getElementById('mat');	
	var missMat = document.getElementById('missMat');
	if (mat.validity.valueMissing){			
		missMat.textContent = 'MAT manquant';
		missMat.style.color = 'red';
		console.log("valid_mat:", valid_mat);

	}	
	else if (nb_valid.test(mat.value) == false){
			missMat.textContent = 'Rentrez un nombre !';
			missMat.style.color = 'red';
			console.log("valid_mat:", valid_mat);

	}
	else if (nb_valid.test(mat.value) == true){
		var type = document.getElementById('type').options[document.getElementById('type').selectedIndex].value;		
		if (type != 4){
			if (parseInt(mat.value, 10) > 800){					
				missMat.textContent = '800 en max !';
				missMat.style.color = 'red';
				console.log("valid_mat:", valid_mat);

			}
			else {
			valid_mat = true;
			console.log("valid_mat:", valid_mat);
			}
		}
		else {
			valid_mat = true;
			console.log("valid_mat:", valid_mat);
			}
	}
	
}

function v_mdf(){
	var mdf = document.getElementById('mdf');	
	var missMdf = document.getElementById('missMdf');
	if (mdf.validity.valueMissing){			
		missMdf.textContent = 'MDF manquant';
		missMdf.style.color = 'red';
		console.log("valid_mdf:", valid_mdf);

	}	
	else if (nb_valid.test(mdf.value) == false){
		missMdf.textContent = 'Rentrez un nombre !';
		missMdf.style.color = 'red';
		console.log("valid_mdf:", valid_mdf);

	}
	else if (nb_valid.test(mdf.value) == true){
		var type = document.getElementById('type').options[document.getElementById('type').selectedIndex].value;		
		if (type != 4){
			if (parseInt(mdf.value, 10) > 800){					
				missMdf.textContent = '800 en max !';
				missMdf.style.color = 'red';
				console.log("valid_mdf:", valid_mdf);

			}
			else {
				valid_mdf = true;
				console.log("valid_mdf:", valid_mdf);
			}			
		}
		else {
				valid_mdf = true;
				console.log("valid_mdf:", valid_mdf);
			}
	}
	
}

function v_agi(){
	var agi = document.getElementById('agi');	
	var missAgi = document.getElementById('missAgi');
	if (agi.validity.valueMissing){			
		missAgi.textContent = 'AGI manquant';
		missAgi.style.color = 'red';
		console.log("valid_agi:", valid_agi);

	}	
	else if (nb_valid.test(agi.value) == false){
		missAgi.textContent = 'Rentrez un nombre !';
		missAgi.style.color = 'red';
		console.log("valid_agi:", valid_agi);

	}
	else if (nb_valid.test(agi.value) == true){
		var type = document.getElementById('type').options[document.getElementById('type').selectedIndex].value;		
		if (type != 4){
			if (parseInt(agi.value, 10) > 800){					
				missAgi.textContent = '800 en max !';
				missAgi.style.color = 'red';
				console.log("valid_agi:", valid_agi);

			}
			else {
			valid_agi = true;
			console.log("valid_agi:", valid_agi);
			}
		}
		else {
			valid_agi = true;
			console.log("valid_agi:", valid_agi);
			}
	}
	
}

function v_luk(){	
	var luk = document.getElementById('luk');	
	var missLuk = document.getElementById('missLuk');
	if (luk.validity.valueMissing){			
		missLuk.textContent = 'LUK manquant';
		missLuk.style.color = 'red';
		console.log("valid_luk:", valid_luk);

	}	
	else if (nb_valid.test(luk.value) == false){
		missLuk.textContent = 'Rentrez un nombre !';
		missLuk.style.color = 'red';
		console.log("valid_luk:", valid_luk);

	}
	else if (nb_valid.test(luk.value) == true){
		var type = document.getElementById('type').options[document.getElementById('type').selectedIndex].value;		
		if (type != 4){
			if (parseInt(luk.value, 10) > 800){					
				missLuk.textContent = '800 en max !';
				missLuk.style.color = 'red';
				console.log("valid_luk:", valid_luk);

			}	
			else {
			valid_luk = true;
			console.log("valid_luk:", valid_luk);
			}
		}
		else {
			valid_luk = true;
			console.log("valid_luk:", valid_luk);
			}
	}
	
}

function v_total(){		
	var total = document.getElementById('total').value = (parseInt(hp.value) + parseInt(mp.value) + parseInt(atk.value) + parseInt(def.value)
	+ parseInt(mat.value) + parseInt(mdf.value) + parseInt(agi.value) + parseInt(luk.value)) ;				
	var missTotal = document.getElementById('missTotal');		
		if (type == 3){
			if (total > 3250){			
				missTotal.textContent = '3250 en max !';
				missTotal.style.color = 'red';	
				console.log("valid_total:", valid_total);
				
			}			
		}
		else if (type == 2){
			if (total > 2850){			
				missTotal.textContent = '2850 en max !';
				missTotal.style.color = 'red';
				console.log("valid_total:", valid_total);
				
			}				
		}
		else if (type == 1){
				if (total > 3350){
				missTotal.textContent = '3350 en max !';
				missTotal.style.color = 'red';	
				console.log("valid_total:", valid_total);
				}				
		}	
		else 
		{
			valid_total = true;
			console.log("valid_total:", valid_total);
		}	
}
function valid(){	
	Promise.all([v_nom(),v_hp(),v_mp(),v_atk(),v_def(),v_mat(),v_mdf(),v_agi(),v_luk(),v_total()]).then(function(){
	if (valid_nom == true && valid_hp == true && valid_mp == true && valid_atk == true && valid_def == true && valid_mat == true && valid_mdf == true && valid_agi == true && valid_luk == true && valid_total == true)	
		document.getElementById("formulaire").submit();
		var verif = valid_nom == true && valid_hp == true && valid_mp == true && valid_atk == true && valid_def == true && valid_mat == true && valid_mdf == true && valid_agi == true && valid_luk == true && valid_total == true;
		console.log("verif:" ,verif);
	});
}
	


	



			
		
			


	
	
	
	
			
		
	
