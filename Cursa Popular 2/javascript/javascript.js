

function comprobar(){
	var nomusu=document.getElementById('nomusu').value;
	var passusu=document.getElementById('passusu').value;
	var pasar=0;
	if (nomusu=="") {
		var pasar=1;
		alert("Faltan campos por rellenar user");
		return false;
	}

	if (passusu=="") {
		var pasar=1;
		alert("Faltan campos por rellenar password");
		return false;
		}	 
}