function comprobar(){
	var nomusu=document.getElementById('nomusu').value;
	var passusu=document.getElementById('passusu').value;
	var pasar=0;

	if (nomusu=="") {
		pasar=pasar+1;
		document.getElementById('nomusu').style.borderBottom = '2px solid red';
	}else{
		document.getElementById('nomusu').style.borderBottom = '';
	}

	if (passusu=="") {
		pasar=pasar+1;
		document.getElementById('passusu').style.borderBottom = '2px solid red';
	}else{
		document.getElementById('passusu').style.borderBottom = '';
	}

	if (pasar > 0) {
		return false;
	} else	{

		return true;
	}
	 
}

function validacionInscripcion(){
	var nombre=document.getElementById('nombre').value;
	var apellido=document.getElementById('apellido').value;
	var dni=document.getElementById('dni').value;
	var sexe=document.getElementById('sexe').value;
	var discap=document.getElementById('discap').value;
	var fechanacimiento=document.getElementById('fechanacimiento').value;
	var pasar=0;
	
	if (nombre=="") {
		pasar=pasar+1;
		document.getElementById('nombre').style.borderBottom = '2px solid red';
	}else{
		document.getElementById('nombre').style.borderBottom = '';
	}

	if (apellido=="") {
		pasar=pasar+1;
		document.getElementById('apellido').style.borderBottom = '2px solid red';
	}else{
		document.getElementById('apellido').style.borderBottom = '';
	}

	if (dni=="") {
		pasar=pasar+1;
		document.getElementById('dni').style.borderBottom = '2px solid red';
	}else{

		//Se separan los números de la letra
		var letraDNI = dni.substring(8, 9).toUpperCase();
		var numDNI = parseInt(dni.substring(0, 8));

		//Se calcula la letra correspondiente al número
		var letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];
		var letraCorrecta = letras[numDNI % 23];

		if(letraDNI!= letraCorrecta){
			alert("El DNI que has introducido no es correcto");
			pasar=pasar+1;
			document.getElementById('dni').style.borderBottom = '2px solid red';
		} else {
			document.getElementById('dni').style.borderBottom = '';
		}
	}

	if (fechanacimiento=="") {
		pasar=pasar+1;
		document.getElementById('fechanacimiento').style.border = '2px solid red';
	}else{
		document.getElementById('fechanacimiento').style.border = '';
	}

	if (sexe=="") {
		pasar=pasar+1;
		document.getElementById('sexe').style.border = '2px solid red';
	}else{
		document.getElementById('sexe').style.border = '';
	}

	if (discap=="") {
		pasar=pasar+1;
		document.getElementById('discap').style.border = '2px solid red';
	}else{
		document.getElementById('discap').style.border = '';
	}

	if (pasar > 0) {
		return false;
	} else	{
		return true;
	}
}