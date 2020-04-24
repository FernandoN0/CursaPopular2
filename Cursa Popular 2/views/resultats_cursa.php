<!DOCTYPE html>
<html>
<head>
	<title>Resultats clasificacio - Cursa de Bellvitge 2020</title>
	<!--Estilos-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/estilos_resultat.css">
	<link rel="shortcut icon" type="image/png" href="../img/favicon.png"/>
	<!--Scripts bootstrap-->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!--Google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<script type="text/javascript" src="../javascript/javascript.js"></script>
</head>
<body>
	<!---HEADER SUPERIOR CON INFORMACION BASICA--->
	<!--Menu-->
	<!--Scroll background-->
			<script type="text/javascript">
				$(window).scroll(function(){
					$('nav').toggleClass('scrolled', $(this).scrollTop() > 70)
				})
			</script>
		<!--Scroll background-->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark content-menu">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  	</button>
	  	<a href="https://www.joan23.fje.edu/es" target="blank"><img class="logoj23" src="../img/j23logo.png" width="250"></a>
	  	<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	      		<li class="nav-opt nav-opt-1">
					<a class="nav-item" href="#">Patrocinadors</a>
	      		</li>
	      		<li class="nav-opt">
					<a class="nav-item resultats" href="index.php">Inici</a>
	      		</li>
				<div class="btn-login nav navbar-nav navbar-right">
					<a class="login" href="#" data-toggle="modal" data-target="#modalLoginForm"><span class="txt-login">ZONA ADMIN</span></a>
				</div>
	    	</ul>
	  </div>
	</nav>

	<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header text-center">
	        <h4 class="modal-title w-100 font-weight-bold">Iniciar Sessió</h4>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <form id='login' action='../procesa/login.proc.php' method='post' accept-charset='UTF-8' onsubmit="return comprobar()">
	      <div class="modal-body mx-3">
	        <div class="md-form mb-5">
	          <i class="fas fa-envelope prefix grey-text"></i>
	              <input  type='text' class="form-control validate form-text" placeholder="Introduce el usuario" pattern="[a-z]{1,15}" name='nomusu' id='nomusu'  value="<?php 
                                if (isset($_GET['us'])) {
                                    $user=$_GET['us'];
                                    echo "$user";
                                }
                        ?>" maxlength="50"/>
	        </div>

	        <div class="md-form mb-4">
	          <i class="fas fa-lock prefix grey-text"></i>
	          <input type='password'class="form-control validate form-text" placeholder="Introduce contraseña" name='passusu' id='passusu' maxlength="50"/>
	        </div>

	      </div>
	      <div class="modal-footer d-flex justify-content-center">
	        <button class="btn btn-radius-2 enviar" type="submit">Iniciar Sessió</button>
	          </form>
	      </div>
	    </div>
	  </div>
	</div>
	<!---BANNER CON RECUADROS Y TITULO--->
	<div class="container-fluid cont-banner">
		<div class="row">
			<div class="col-12 banner">
				<h1 class="tituloprincipal"> RESULTATS CURSA BELLVITGE 2020</h1>
			</div>
		</div>
	</div>

	<div class="container-fluid cuerpo">
		<div class="row">
			<div class="col-lg-8" style="height: auto;">
				<div class="clasificaciones">
					<h1 class="tituloclasi">CLASSIFICACIONS</h1>
					<table class="tablaclasi">
						<tr class="trtop">
						    <th>Pos. abs.</th>
						    <th>Pos. rel.</th>
						    <th>Sexe</th>
						    <th>Dorsal</th>
						    <th>Nom</th>
						    <th>Temps meta</th>
						    <th>Discapacitat</th>
						</tr>

						<?php 
							include "../services/conexion.php";

							if (isset($_POST['buscar'])) {
							$nombrefil = htmlspecialchars($_REQUEST['nombrefil']);
						    $sexofil = htmlspecialchars($_REQUEST['sexofil']);
						    $catidfil = htmlspecialchars($_REQUEST['catidfil']);
							}else{
								$nombrefil = '%';
						    	$sexofil = '%';
						    	$catidfil = '%';
							}
							if ($catifil='%') {
								$sql="SELECT * 
								  FROM tbl_resultado  
								  INNER JOIN tbl_inscripcion ON tbl_resultado.id_inscripcion=tbl_inscripcion.id_inscripcion 
								  INNER JOIN tbl_participantes ON tbl_participantes.dni=tbl_inscripcion.id_participante 
								  INNER JOIN tbl_categorias ON tbl_categorias.id_categoria=tbl_inscripcion.Categoria_Cursa 
								  INNER JOIN tbl_cursa ON tbl_cursa.id_cursa=tbl_inscripcion.id_cursa 
								  WHERE tbl_cursa.id_cursa = (SELECT id_cursa FROM tbl_cursa ORDER BY fecha_cursa DESC LIMIT 1) AND CONCAT(nombre_parti,' ',apellido_parti) like '%$nombrefil%' AND tbl_participantes.Sexo_parti like '$sexofil' AND tbl_categorias.id_categoria like '$catidfil' ORDER BY tbl_resultado.Posicionabs_parti ASC;";
							}else{
								$sql="SELECT * 
								  FROM tbl_resultado  
								  INNER JOIN tbl_inscripcion ON tbl_resultado.id_inscripcion=tbl_inscripcion.id_inscripcion 
								  INNER JOIN tbl_participantes ON tbl_participantes.dni=tbl_inscripcion.id_participante 
								  INNER JOIN tbl_categorias ON tbl_categorias.id_categoria=tbl_inscripcion.Categoria_Cursa 
								  INNER JOIN tbl_cursa ON tbl_cursa.id_cursa=tbl_inscripcion.id_cursa 
								  WHERE tbl_cursa.id_cursa = (SELECT id_cursa FROM tbl_cursa ORDER BY fecha_cursa DESC LIMIT 1) AND CONCAT(nombre_parti,' ',apellido_parti) like '%$nombrefil%' AND tbl_participantes.Sexo_parti like '$sexofil' AND tbl_categorias.id_categoria like '$catidfil' ORDER BY tbl_resultado.Posicionrel_parti ASC;";
							}
							$result=mysqli_query($connexion,$sql);

							while($mostrar=mysqli_fetch_array($result)){

							?>
							<tr>
								<td><?php echo $mostrar['posicionabs_parti'] ?></td>
								<td><?php echo $mostrar['posicionrel_parti'] ?></td>
								<td><?php echo $mostrar['sexo_parti'] ?></td>
								<td><?php echo $mostrar['dorsal'] ?></td>
								<td><?php echo $mostrar['nombre_parti'] . ' ' . $mostrar['apellido_parti'] ?></td>
								<td><?php echo $mostrar['tiempo_parti'] ?></td>
								<td><?php echo $mostrar['discapacitado_parti'] ?></td>
							</tr>
							<?php 
							}

							 ?>

					</table>
				</div>
			</div>
			<div class="col-lg-4" style="height: auto;">
				<div class="filtros">
					<form action="resultats_cursa.php" method='post' id="form">
					<h1 class="titulofiltro">FILTRE AVANÇAT</h1>
					<h3 class="textofiltro">Nom :</h3>
					<input class="buscador" type="search" placeholder="  Inserte el nombre del corredor/a..." name="nombrefil">
					<h3 class="textofiltro">Sexe :</h3>
					<select name="sexofil">
						<option value="%">Seleccionar</option>
						<option value="H">Home</option>

						<option value="M">Dona</option>
					</select>
					<h3 class="textofiltro">Categories :</h3>
					<select name="catidfil">
						<option value="%">Seleccionar</option>

						<?php

			               $lista_cat = mysqli_query($connexion, "SELECT * FROM tbl_categorias");
			                 while ($modelo= mysqli_fetch_array($lista_cat)){
			                   echo "<option value=".$modelo['id_categoria'].">".$modelo['nombre_categoria']."</option>"; 
			                   
			                   }
			             ?>
					</select>

					<input type="submit" class="filtrabutton" value=" Filtrar " name="buscar">
					</form>

					<div class="ayuda">
						<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
						    	<div class="modal-content">
						      		<div class="modal-header titulo-modal">
						        		<h2 class="modal-title" id="myModalLabel">CONTACTA AMB NOSALTRES</h2>
						         		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
						         		</button>
						      </div>
						      <div class="modal-body contenido-modal" >
						         	<h5>Web: <a href="https://sites.google.com/a/fje.edu/associacio-mares-i-pares-joan-xxiii/registra-t">Anar al web</a></h2><br>
									<h5>Correu: ampa.joan23@fje.edu</h2><br>
									<h5>Web relacionada: <a href="https://sites.google.com/a/fje.edu/associacio-mares-i-pares-joan-xxiii/registra-t">Ir a la web</a></h2><br>
									<h5>Telèfon informació: 933351543</h3><br>
									<img src="../img/logo_j23.png" style="width: 70%;" alt="Centre d'estudis JOAN XXIII">
						      </div>
						    </div>
						  </div>
						</div>
					</div>

				</div>

				<div class="cartelcursa">
					<p></p>
				</div>		
			</div>



		</div>
	</div>
</body>
<footer>
				<!--Footer-->
			<div class="container-fluid footer">
		<div class="row">
			<div class="col-md-4">
				<p class="txt-footer">Ubicació<br>Passeig Sant Gervasi, 27, 08022 Barcelona<br>Contacte<br>Tel: +34 93 415 98 65</p>
			</div>
			<div class="col-md-4 borde">
				<div id="social">
					<i class="fab fa-facebook-square foot-icon fa-4x" href="https://www.joan23.fje.edu/"></i>
				    <i class="fas fa-rss-square foot-icon fa-4x"></i>
				    <i class="fab fa-twitter-square foot-icon fa-4x"></i>
				    <i class="fab fa-instagram foot-icon fa-4x"></i>
				</div>
			</div>
			<div class="col-md-4">
				<p class="txt-footer">Avís Legal</p>
				<p class="txt-footer">Política de cookies</p>
				<p class="txt-footer">Política de privacitat</p>
			</div>
		</div>
	</div>
			<!--Footer-->
</footer>
</html>