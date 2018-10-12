var nb_valid = /^[0-9]/
var formValid = document.getElementById('bouton_validation');

formValid.addEventListener('click', v_total);

function v_nom(){
	var classe = document.getElementById('classe');
	var missClass = document.getElementById('missClass');
	var class_valid = /^[A-Za-z]/;
		if (classe.validity.valueMissing){	
			missClass.textContent = 'Nom manquant';
			missClass.style.color = 'red';
		}
		else if (class_valid.test(classe.value) == false){
			missClass.textContent = 'Rentrez un mot !';
			missClass.style.color = 'red';
			return false;
		}
		else {
			missClass.textContent = '';
		}
	}

function v_hp(){
	var hp = document.getElementById('hp');	
	var missHp = document.getElementById('missHp');
	if (hp.validity.valueMissing){			
			missHp.textContent = 'HP manquant';
			missHp.style.color = 'red';
	}	
	else if (nb_valid.test(hp.value) == false){
			missHp.textContent = 'Rentrez un nombre !';
			missHp.style.color = 'red';
	}
	else if (nb_valid.test(hp.value) == true){
		var type = document.getElementById('type').options[document.getElementById('type').selectedIndex].value;		
		if (type != 4){
			if (parseInt(hp.value, 10) > 2850){					
				missHp.textContent = '2850 en max !';
				missHp.style.color = 'red';
			}			
		}
	}			
}

function v_mp(){
	var mp = document.getElementById('mp')
	var missMp = document.getElementById('missMp')
	if (mp.validity.valueMissing){			
		missMp.textContent = 'MP manquant';
		missMp.style.color = 'red';
	}	
	else if (nb_valid.test(mp.value) == false){
		missMp.textContent = 'Rentrez un nombre !';
		missMp.style.color = 'red';
	}
	else if (nb_valid.test(mp.value) == true){
		var type = document.getElementById('type').options[document.getElementById('type').selectedIndex].value;		
		if (type != 4){
			if (parseInt(hp.value, 10) > 2850){					
				missMp.textContent = '2850 en max !';
				missMp.style.color = 'red';
			}			
		}
	}			
}

function v_atk(){
	var atk = document.getElementById('atk');	
	var missAtk = document.getElementById('missAtk');
	if (atk.validity.valueMissing){			
		missAtk.textContent = 'ATK manquant';
		missAtk.style.color = 'red';
	}	
	else if (nb_valid.test(atk.value) == false){
		missAtk.textContent = 'Rentrez un nombre !';
		missAtk.style.color = 'red';
	}
	else if (nb_valid.test(atk.value) == true){
		var type = document.getElementById('type').options[document.getElementById('type').selectedIndex].value;		
		if (type != 4){
			if (parseInt(atk.value, 10) > 800){					
				missAtk.textContent = '800 en max !';
				missAtk.style.color = 'red';
			}			
		}
	}			
}

function v_def(){
	var def = document.getElementById('def');	
	var missDef = document.getElementById('missDef');
	if (def.validity.valueMissing){			
		missDef.textContent = 'DEF manquant';
		missDef.style.color = 'red';
	}	
	else if (nb_valid.test(def.value) == false){
		missDef.textContent = 'Rentrez un nombre !';
		missDef.style.color = 'red';
	}
	else if (nb_valid.test(def.value) == true){
		var type = document.getElementById('type').options[document.getElementById('type').selectedIndex].value;		
		if (type != 4){
			if (parseInt(def.value, 10) > 800){					
				missDef.textContent = '800 en max !';
				missDef.style.color = 'red';
			}			
		}
	}			
}

function v_mat(){
	var mat = document.getElementById('mat');	
	var missMat = document.getElementById('missMat');
	if (mat.validity.valueMissing){			
		missMat.textContent = 'MAT manquant';
		missMat.style.color = 'red';
	}	
	else if (nb_valid.test(mat.value) == false){
			missMat.textContent = 'Rentrez un nombre !';
			missMat.style.color = 'red';
	}
	else if (nb_valid.test(mat.value) == true){
		var type = document.getElementById('type').options[document.getElementById('type').selectedIndex].value;		
		if (type != 4){
			if (parseInt(hp.value, 10) > 800){					
				missMat.textContent = '800 en max !';
				missMat.style.color = 'red';
			}			
		}
	}			
}

function v_mdf(){
	var mdf = document.getElementById('mdf');	
	var missMdf = document.getElementById('missMdf');
	if (mdf.validity.valueMissing){			
		missMdf.textContent = 'MDF manquant';
		missMdf.style.color = 'red';
	}	
	else if (nb_valid.test(mdf.value) == false){
		missMdf.textContent = 'Rentrez un nombre !';
		missMdf.style.color = 'red';
	}
	else if (nb_valid.test(mdf.value) == true){
		var type = document.getElementById('type').options[document.getElementById('type').selectedIndex].value;		
		if (type != 4){
			if (parseInt(mdf.value, 10) > 800){					
				missMdf.textContent = '800 en max !';
				missMdf.style.color = 'red';
			}			
		}
	}			
}

function v_agi(){
	var agi = document.getElementById('agi');	
	var missAgi = document.getElementById('missAgi');
	if (agi.validity.valueMissing){			
		missAgi.textContent = 'AGI manquant';
		missAgi.style.color = 'red';
	}	
	else if (nb_valid.test(agi.value) == false){
		missAgi.textContent = 'Rentrez un nombre !';
		missAgi.style.color = 'red';
	}
	else if (nb_valid.test(agi.value) == true){
		var type = document.getElementById('type').options[document.getElementById('type').selectedIndex].value;		
		if (type != 4){
			if (parseInt(agi.value, 10) > 800){					
				missAgi.textContent = '800 en max !';
				missAgi.style.color = 'red';
			}			
		}
	}			
}

function v_luk(){	
	var luk = document.getElementById('luk');	
	var missLuk = document.getElementById('missLuk');
	if (luk.validity.valueMissing){			
		missLuk.textContent = 'LUK manquant';
		missLuk.style.color = 'red';
	}	
	else if (nb_valid.test(luk.value) == false){
		missLuk.textContent = 'Rentrez un nombre !';
		missLuk.style.color = 'red';
	}
	else if (nb_valid.test(luk.value) == true){
		var type = document.getElementById('type').options[document.getElementById('type').selectedIndex].value;		
		if (type != 4){
			if (parseInt(luk.value, 10) > 800){					
				missLuk.textContent = '800 en max !';
				missLuk.style.color = 'red';
			}			
		}
	}			
}

function v_total(){		
	var total = document.getElementById('total').value = (parseInt(hp.value) + parseInt(mp.value) + parseInt(atk.value) + parseInt(def.value)
	+ parseInt(mat.value) + parseInt(mdf.value) + parseInt(agi.value) + parseInt(luk.value)) ;
	Promise.all([v_nom(),v_hp(),v_mp(),v_atk(),v_def(),v_mat(),v_mdf(),v_agi(),v_luk()]).then(function(){			
	var missTotal = document.getElementById('missTotal');	
		if (type == 3){
			if (total > 3250){			
				missTotal.textContent = '3250 en max !';
				missTotal.style.color = 'red';			
			}			
		}
		else if (type == 2){
			if (total > 2850){			
				missTotal.textContent = '2850 en max !';
				missTotal.style.color = 'red';			
			}						
		}
		else {
			if (total > 3350){			
				missTotal.textContent = '3350 en max !';
				missTotal.style.color = 'red';			
			}			
		}
	});
}


			
		
			


	
	
	
	
			
		
	
