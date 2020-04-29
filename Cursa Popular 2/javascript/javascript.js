function validacionLogin(){
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

//Comprobaciones De cursa
function validacionCursa(){
	var fecha_cursa=document.getElementById('fecha_cursa').value;
	var hora_cursa=document.getElementById('hora_cursa').value;
	var recorrido_cursa=document.getElementById('recorrido_cursa').value;
	var activa_cursa=document.getElementById('activa_cursa').value;
	var pasar=0;

	if (fecha_cursa=="") {
		pasar=pasar+1;
		document.getElementById('fecha_cursa').style.borderBottom = '2px solid red';
	}else{
		document.getElementById('fecha_cursa').style.borderBottom = '';
	}

	if (hora_cursa=="") {
		pasar=pasar+1;
		document.getElementById('hora_cursa').style.borderBottom = '2px solid red';
	}else{
		document.getElementById('hora_cursa').style.borderBottom = '';
	}

   if (recorrido_cursa=="") {
		pasar=pasar+1;
		document.getElementById('recorrido_cursa').style.borderBottom = '2px solid red';
	}else{
		document.getElementById('recorrido_cursa').style.borderBottom = '';
	}

   if (activa_cursa=="") {
		pasar=pasar+1;
		document.getElementById('activa_cursa').style.borderBottom = '2px solid red';
	}else{
		document.getElementById('activa_cursa').style.borderBottom = '';
	}

	if (pasar > 0) {
		return false;
	} else	{ 

		return true;
	}
	 
}

//Comprobaciones de cuentas de usuario 
function validacionUsuario(){
	var nomusu=document.getElementById('nomusu').value;
	var pasar=0;

	if (nomusu=="") {
		pasar=pasar+1;
		document.getElementById('nomusu').style.borderBottom = '2px solid red';
	}else{
		document.getElementById('nomusu').style.borderBottom = '';
	}

	if (pasar > 0) {
		return false;
	} else	{

		return true;
	}
	 
}

//Comprobaciones De participante
function validacionParticipante(){
	var nompart=document.getElementById('nompart').value;
	var apepart=document.getElementById('apepart').value;
	var separt=document.getElementById('separt').value;
	var edpart=document.getElementById('edpart').value;
	var dispart=document.getElementById('dispart').value;
	var pasar=0;

	if (nompart=="") {
		pasar=pasar+1;
		document.getElementById('nompart').style.borderBottom = '2px solid red';
	}else{
		document.getElementById('nompart').style.borderBottom = '';
	}

	if (apepart=="") {
		pasar=pasar+1;
		document.getElementById('apepart').style.borderBottom = '2px solid red';
	}else{
		document.getElementById('apepart').style.borderBottom = '';
	}

   if (separt=="") {
		pasar=pasar+1;
		document.getElementById('separt').style.borderBottom = '2px solid red';
	}else{
		document.getElementById('separt').style.borderBottom = '';
	}

   if (edpart=="") {
		pasar=pasar+1;
		document.getElementById('edpart').style.borderBottom = '2px solid red';
	}else{
		document.getElementById('edpart').style.borderBottom = '';
	}

	if (dispart=="") {
		pasar=pasar+1;
		document.getElementById('dispart').style.borderBottom = '2px solid red';
	}else{
		document.getElementById('dispart').style.borderBottom = '';
	}

	if (pasar > 0) {
		return false;
	} else	{ 

		return true;
	}
	 
}

//Comprobaciones De cursa
function validacionCategoria(){
	var nombre_categoria=document.getElementById('nombre_categoria').value;
	var edad_min=document.getElementById('edad_min').value;
	var edad_max=document.getElementById('edad_max').value;
	var pasar=0;

	if (nombre_categoria=="") {
		pasar=pasar+1;
		document.getElementById('nombre_categoria').style.borderBottom = '2px solid red';
	}else{
		document.getElementById('nombre_categoria').style.borderBottom = '';
	}

	if (edad_min=="") {
		pasar=pasar+1;
		document.getElementById('edad_min').style.borderBottom = '2px solid red';
	}else{
		document.getElementById('edad_min').style.borderBottom = '';
	}

   if (edad_max=="") {
		pasar=pasar+1;
		document.getElementById('edad_max').style.borderBottom = '2px solid red';
	}else{
		document.getElementById('edad_max').style.borderBottom = '';
	}

	if (pasar > 0) {
		return false;
	} else	{ 

		return true;
	}
	 
}