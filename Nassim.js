

function couleur(){	
	var Color = document.getElementById('body-nass');
	if (Color.style.backgroundColor == 'red')
		Color.style.backgroundColor="black";
	else if (Color.style.backgroundColor == 'black')
		Color.style.backgroundColor='white';
	else
		Color.style.backgroundColor='red';
}