

function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
		try {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		} catch (E) {
			xmlhttp = false;
		}
	}
	if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
	  xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}



/*Muestra registros de la base de datos*/
function consultar(idBoton){
	
	divTabla = document.getElementById('modalVer'+idBoton);
	//pokemon = document.getElementById('pokemon').value;
	var ajax2=objetoAjax();
	if (idBoton == 1) {
		ajax2.open("POST", "../procesa/mostrarusuarios.proc.php", true);
	}else{
		if (idBoton == 2) {
			ajax2.open("POST", "../procesa/mostrar_cursa.proc.php", true);
		} else {
			if (idBoton == 3) {
				ajax2.open("POST", "../procesa/mostrarparticipantes.proc.php", true);
			} else {
				if (idBoton == 4) {
					ajax2.open("POST", "../procesa/mostrarcategorias.proc.php", true);
				}
			}
		}
	}
	
	ajax2.onreadystatechange=function() {

		if (ajax2.readyState==4 && ajax2.status==200) {

			if (idBoton == 1) {

				var tabla =  '<table class="tablaclasi"><tr class="trtop"><th>Nom del usuari</th><th>Editar</th></tr>';
				var respuesta1=JSON.parse(ajax2.responseText);
				for(var i=0;i<respuesta1.length;i++) {
					tabla +='<tr><td>'+respuesta1[i].nombre_usuario+'</td>';
					tabla +='<td><a data-dismiss="modal" data-toggle="modal" href="#ModalEditar" onclick="cargarform('+idBoton+','+respuesta1[i].id_usuario+')">Editar</a></td>';
					tabla +='</tr>';
				}
				tabla +='</table>';
				divTabla.innerHTML=tabla;

			}else{
				if (idBoton == 2) {

					var tabla =  '<table class="tablaclasi"><tr class="trtop"><th>Data</th><th>Hora</th><th>Recorregut</th><th>Activa</th><th>Editar</th></tr>';
					var respuesta2=JSON.parse(ajax2.responseText);
					for(var i=0;i<respuesta2.length;i++) {
						tabla +='<tr><td>'+respuesta2[i].fecha_cursa+'</td>';
						tabla +='<td>'+respuesta2[i].hora_cursa+'</td>';
						tabla +='<td>'+respuesta2[i].recorrido_cursa+'</td>';
						tabla +='<td>'+respuesta2[i].activa_cursa+'</td>';
						tabla +='<td><a data-dismiss="modal" data-toggle="modal" href="#ModalEditar" onclick="cargarform('+idBoton+','+respuesta2[i].id_cursa+')">Editar</a></td>';
						tabla +='</tr>';
					}
					tabla +='</table>';
					divTabla.innerHTML=tabla;

				} else {
					if (idBoton == 3) {
						
						var tabla =  '<table class="tablaclasi"><tr class="trtop"><th>DNI</th><th>Nom</th><th>Cognom</th><th>Sexe</th><th>Data naix.</th><th>Discapacidad</th><th>Editar</th></tr>';
						var respuesta3=JSON.parse(ajax2.responseText);
						for(var i=0;i<respuesta3.length;i++) {
							tabla +='<tr><td>'+respuesta3[i].dni+'</td>';
							tabla +='<td>'+respuesta3[i].nombre_parti+'</td>';
							tabla +='<td>'+respuesta3[i].apellido_parti+'</td>';
							tabla +='<td>'+respuesta3[i].sexo_parti+'</td>';
							tabla +='<td>'+respuesta3[i].fechanac_parti+'</td>';
							tabla +='<td>'+respuesta3[i].discapacitado_parti+'</td>';
							var idcompl = new String (""+respuesta3[i].dni+"");
							tabla +='<td><a data-dismiss="modal" data-toggle="modal" href="#ModalEditar" onclick="cargarform('+idBoton+',\''+idcompl+'\')">Editar</a></td>';
							tabla +='</tr>';
						}
						tabla +='</table>';
						divTabla.innerHTML=tabla;

					} else {
						if (idBoton == 4) {
							
							var tabla =  '<table class="tablaclasi"><tr class="trtop"><th>Nom</th><th>Edat min.</th><th>Edat max.</th><th>Editar</th></tr>';
							var respuesta4=JSON.parse(ajax2.responseText);
							for(var i=0;i<respuesta4.length;i++) {
								tabla +='<tr><td>'+respuesta4[i].nombre_categoria+'</td>';
								tabla +='<td>'+respuesta4[i].edad_min+'</td>';
								tabla +='<td>'+respuesta4[i].edad_max+'</td>';
								tabla +='<td><a data-dismiss="modal" data-toggle="modal" href="#ModalEditar" onclick="cargarform('+idBoton+','+respuesta4[i].id_categoria+')">Editar</a></td>';
								tabla +='</tr>';
							}
							tabla +='</table>';
							divTabla.innerHTML=tabla;

						}
					}
				}
			}

			
	}
	}
		ajax2.send();
	

}

function cargarform(idBoton,idPasado){
	divTabla = document.getElementById('modalVerEditar');
	//pokemon = document.getElementById('pokemon').value;
	var ajax2=objetoAjax();
	if (idBoton == 1) {
		ajax2.open("POST", "../procesa/mostrarusuarios.proc.php?id="+idPasado, true);
	}else{
		if (idBoton == 2) {
			ajax2.open("POST", "../procesa/mostrar_cursa.proc.php?id="+idPasado, true);
		} else {
			if (idBoton == 3) {
				ajax2.open("POST", "../procesa/mostrarparticipantes.proc.php?id="+idPasado, true);
			} else {
				if (idBoton == 4) {
					ajax2.open("POST", "../procesa/mostrarcategorias.proc.php?id="+idPasado, true);
				}
			}
		}
	}
	
	ajax2.onreadystatechange=function() {

		if (ajax2.readyState==4 && ajax2.status==200) {

			if (idBoton == 1) {

				var formulario =  '<div class="editform">';
				var respuesta3=JSON.parse(ajax2.responseText);
				for(var i=0;i<respuesta3.length;i++) {

					formulario +='<form class="formularioedit" onsubmit="registrar('+idBoton+',\''+respuesta3[i].id_usuario+'\'); return false">';
					formulario +='<label for="fname"><b>Nom del usuari</b></label><br><input type="text" id="nomusu" name="nomusu" value="'+respuesta3[i].nombre_usuario+'"><br><br>';
					formulario +='<input type="submit" value="Modificar">';
					formulario +='</form>';
					formulario +='</div>';

				}

				divTabla.innerHTML=formulario;

			}else{
				if (idBoton == 2) {
					
					var formulario =  '<div class="editform">';
					var respuesta3=JSON.parse(ajax2.responseText);
					for(var i=0;i<respuesta3.length;i++) {

						formulario +='<form class="formularioedit" onsubmit="registrar('+idBoton+',\''+respuesta3[i].id_cursa+'\'); return false">';
						formulario +='<label><b>Recorregut</b></label><br><input type="text" id="recursa" name="recursa" value="'+respuesta3[i].recorrido_cursa+'"><br><br>';
						formulario +='<label><b>Hora</b></label><br><input type="time" id="hocursa" name="hocursa" value="'+respuesta3[i].hora_cursa+'"><br><br>';
						formulario +='<label><b>Data</b></label><input type="date" id="fecursa" name="fecursa" value="'+respuesta3[i].fecha_cursa+'"><br><br>';
						formulario +='<label><b>Activa</b></label><br><select id="accursa"><option value="%">Seleccionar</option><option value="si">Si</option><option value="no">No</option></select><br><br>';
						formulario +='<input type="submit" value="Modificar">';
						formulario +='</form>';
						formulario +='</div>';

					}

					divTabla.innerHTML=formulario;

				} else {
					if (idBoton == 3) {

						var formulario =  '<div class="editform">';
						var respuesta3=JSON.parse(ajax2.responseText);
						for(var i=0;i<respuesta3.length;i++) {
							formulario +='<form class="formularioedit" onsubmit="registrar('+idBoton+',\''+respuesta3[i].dni+'\'); return false">';
							formulario +='<label for="fname"><b>Nom del participant</b></label><br><input type="text" id="nompart" name="nompart" value="'+respuesta3[i].nombre_parti+'"><br><br>';
							formulario +='<label for="lname"><b>Cognoms del participant</b></label><br><input type="text" id="apepart" name="apepart" value="'+respuesta3[i].apellido_parti+'"><br><br>';
							formulario +='<label><b>Sexe</b></label><br><select name="sexofil" id="separt"><option value="%">Seleccionar</option><option value="H">Home</option><option value="M">Dona</option></select><br><br>';
							formulario +='<label for="nacimiento"><b>Data de naixement</b></label><br><input type="date" id="edpart" name="edpart" value="'+respuesta3[i].fechanac_parti+'"><br><br>';
							formulario +='<label><b>Discapacitat</b></label><br><select id="dispart"><option value="%">Seleccionar</option><option value="si">Si</option><option value="no">No</option></select><br><br>';
							formulario +='<input type="submit" value="Modificar">';
							formulario +='</form>';
							formulario +='</div>';

						}

						divTabla.innerHTML=formulario;

					} else {
						if (idBoton == 4) {
							
							var formulario =  '<div class="editform">';
							var respuesta3=JSON.parse(ajax2.responseText);
							for(var i=0;i<respuesta3.length;i++) {
								formulario +='<form class="formularioedit" onsubmit="registrar('+idBoton+',\''+respuesta3[i].id_categoria+'\'); return false">';
								formulario +='<label><b>Nom</b></label><br><input type="text" id="nombre_categoria" name="nombre_categoria" value="'+respuesta3[i].nombre_categoria+'"><br><br>';
								formulario +='<label><b>Edat mínima</b></label><br><input type="number" id="edad_min" name="edad_min" value="'+respuesta3[i].edad_min+'"><br><br>';
								formulario +='<label><b>Edat máxima</b></label><br><input type="number" id="edad_max" name="edad_max" value="'+respuesta3[i].edad_max+'"><br><br>';
								formulario +='<input type="submit" value="Modificar">';
								formulario +='</form>';
								formulario +='</div>';

							}

							divTabla.innerHTML=formulario;

						}
					}
				}
			}

			
	}
	}
		ajax2.send();
	

}

/*Funcion para registrar nuevos contactos*/
function registrar(idBoton,idPasado){

	ajax2=objetoAjax();
	if (idBoton == 1) {

		nomusu = document.getElementById('nomusu').value;
				
		ajax2.open("POST", "../procesa/update_user.proc.php", true);
		ajax2.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		ajax2.send("idusu="+idPasado+"&nomusu="+nomusu);


	}else{
		if (idBoton == 2) {

			fecursa = document.getElementById('fecursa').value;
			hocursa = document.getElementById('hocursa').value;
			recursa = document.getElementById('recursa').value;
			accursa = document.getElementById('accursa').value;

			ajax2.open("POST", "../procesa/update_cursa.proc.php", true);
			ajax2.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
			ajax2.send("idcursa="+idPasado+"&fecursa="+fecursa+"&hocursa="+hocursa+"&recursa="+recursa+"&accursa="+accursa);

		} else {
			if (idBoton == 3) {

				nombre = document.getElementById('nompart').value;
				apellido = document.getElementById('apepart').value;
				sexo = document.getElementById('separt').value;
				edad = document.getElementById('edpart').value;
				discapacidad = document.getElementById('dispart').value;

				ajax2.open("POST", "../procesa/update_parti.proc.php", true);
				ajax2.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
				ajax2.send("id="+idPasado+"&nompart="+nombre+"&apepart="+apellido+"&separt="+sexo+"&edpart="+edad+"&dispart="+discapacidad);
			
			} else {
				if (idBoton == 4) {

					nombre_categoria = document.getElementById('nombre_categoria').value;
					edad_min = document.getElementById('edad_min').value;
					edad_max = document.getElementById('edad_max').value;

					ajax2.open("POST", "../procesa/update_categoria.proc.php", true);
					ajax2.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
					ajax2.send("id_categoria="+idPasado+"&nombre_categoria="+nombre_categoria+"&edad_min="+edad_min+"&edad_max="+edad_max);

				}
			}
		}
	}
	ajax2.onreadystatechange=function() {
		
		if (ajax2.readyState==4) {
			
			if (idBoton == 1) {
				consultar(idBoton);
						var bodyid = document.getElementById('bodyid');
						bodyid.className = "body-admin";
						
						var modalEditar = document.getElementById('ModalEditar');
						modalEditar.style = "";
						modalEditar.className = "modal fade";
						modalEditar.setAttribute('aria-hidden', 'true');
						modalEditar.setAttribute('aria-modal', '');
						
						var divmierda = document.getElementsByClassName('modal-backdrop fade show');
						divmierda[0].className = "hola";
			}else{
				if (idBoton == 2) {
					consultar(idBoton);
						var bodyid = document.getElementById('bodyid');
						bodyid.className = "body-admin";
						
						var modalEditar = document.getElementById('ModalEditar');
						modalEditar.style = "";
						modalEditar.className = "modal fade";
						modalEditar.setAttribute('aria-hidden', 'true');
						modalEditar.setAttribute('aria-modal', '');
						
						var divmierda = document.getElementsByClassName('modal-backdrop fade show');
						divmierda[0].className = "hola";
				} else {
					if (idBoton == 3) {
						consultar(idBoton);
						var bodyid = document.getElementById('bodyid');
						bodyid.className = "body-admin";
						
						var modalEditar = document.getElementById('ModalEditar');
						modalEditar.style = "";
						modalEditar.className = "modal fade";
						modalEditar.setAttribute('aria-hidden', 'true');
						modalEditar.setAttribute('aria-modal', '');
						
						var divmierda = document.getElementsByClassName('modal-backdrop fade show');
						divmierda[0].className = "hola";

					} else {
						if (idBoton == 4) {
							consultar(idBoton);
							var bodyid = document.getElementById('bodyid');
							bodyid.className = "body-admin";
							
							var modalEditar = document.getElementById('ModalEditar');
							modalEditar.style = "";
							modalEditar.className = "modal fade";
							modalEditar.setAttribute('aria-hidden', 'true');
							modalEditar.setAttribute('aria-modal', '');
							
							var divmierda = document.getElementsByClassName('modal-backdrop fade show');
							divmierda[0].className = "hola";						}
					}
				}
			}
			
		}


		
	}
	
}

