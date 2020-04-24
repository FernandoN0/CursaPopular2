<!DOCTYPE html>
<html>
<head>
	<title>Panel de Administracion</title>
	<!--Estilos-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/estilo_panel.css">
	<link rel="shortcut icon" type="image/png" href="../img/favicon.png"/>
	<!--Scripts bootstrap-->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script type="text/javascript" src="../javascript/ajax.js"></script>
	<!--Google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body class="body-admin" id="bodyid">
	<!--Menu-->
	<!--Scroll background-->
		<script type="text/javascript">
			$(window).scroll(function(){
				$('nav').toggleClass('scrolled', $(this).scrollTop() > 70)
			})
		</script>
	<!--Scroll background-->
	<!--Menu-->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark content-menu">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  	</button>
	  	<a href="https://www.joan23.fje.edu/es" target="blank"><img class="logoj23" src="../img/j23logo.png" width="250"></a>
	  	<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	      		<?php include("../services/header.php")?>
	    	</ul>
	  </div>
	</nav>
	<!--Menu-->
	<div class="titulo-panel">
		<h1 style="padding-top: 20vh;">Panell d'administració</h1>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-12 contenido-admin">

			<div class="recuadros">

				<div class="recuadro_left-admin hvr-admin">
						  <button type="button" class="btn btn-primary btn-lg boton-admin" data-toggle="modal" data-target="#ModalUsuarios" onclick="consultar(1)">USUARIS</button>
				</div>

				<div class="modal fade" id="ModalUsuarios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">
			      <div class="modal-dialog modal-lg" role="document">
			        <div class="modal-content">
			          <div class="modal-header text-center">
			            <h4 class="modal-title w-100 font-weight-bold">Administració d'usuaris</h4>
			            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			              <span aria-hidden="true">&times;</span>
			            </button>
			          </div>
			          <div class="modal-body mx-3" id="modalVer1">

			          </div>
			          <div class="modal-footer d-flex justify-content-center">
			          </div>
			        </div>
			      </div>
			    </div>

				<div class="recuadro_center-admin hvr-admin">
						  <button type="button" class="btn btn-primary btn-lg boton-admin" data-toggle="modal" data-target="#ModalCursas" onclick="consultar(2)">Curses</button>
				</div>

				<div class="modal fade" id="ModalCursas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">
			      <div class="modal-dialog modal-lg" role="document">
			        <div class="modal-content">
			          <div class="modal-header text-center">
			            <h4 class="modal-title w-100 font-weight-bold">Administració de Curses</h4>
			            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			              <span aria-hidden="true">&times;</span>
			            </button>
			          </div>
			          <div class="modal-body mx-3" id="modalVer2">
			            

			          </div>
			          <div class="modal-footer d-flex justify-content-center">
			          </div>
			        </div>
			      </div>
			    </div>

				<div class="recuadro_right-admin hvr-admin">
						  <button type="button" class="btn btn-primary btn-lg boton-admin" data-toggle="modal" data-target="#ModalParticipantes" onclick="consultar(3)">PARTICIPANTS</button>
				</div>

				<div class="modal fade" id="ModalParticipantes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">
			      <div class="modal-dialog modal-lg" role="document">
			        <div class="modal-content">
			          <div class="modal-header text-center">
			            <h4 class="modal-title w-100 font-weight-bold">Administració de Participants</h4>
			            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			              <span aria-hidden="true">&times;</span>
			            </button>
			          </div>
			          <div class="modal-body mx-3" id="modalVer3">
			            
			          </div>
			          <div class="modal-footer d-flex justify-content-center">
			          </div>
			        </div>
			      </div>
			    </div>

			    <div class="modal fade" id="ModalEditar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">
			      <div class="modal-dialog modal-lg" role="document">
			        <div class="modal-content">
			          <div class="modal-header text-center">
			            <h4 class="modal-title w-100 font-weight-bold">Edita</h4>
			            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			              <span aria-hidden="true">&times;</span>
			            </button>
			          </div>
			          <div class="modal-body mx-3 formulario_modificar" id="modalVerEditar">
			            
			          </div>
			          <div class="modal-footer d-flex justify-content-center">
			          </div>
			        </div>
			      </div>
			    </div>

			    <div class="recuadro_cat-admin hvr-admin">
						  <button type="button" class="btn btn-primary btn-lg boton-admin" data-toggle="modal" data-target="#ModalCategorias" onclick="consultar(4)">Categories</button>
				</div>

				<div class="modal fade" id="ModalCategorias" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">
			      <div class="modal-dialog modal-lg" role="document">
			        <div class="modal-content">
			          <div class="modal-header text-center">
			            <h4 class="modal-title w-100 font-weight-bold">Administració de categories</h4>
			            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			              <span aria-hidden="true">&times;</span>
			            </button>
			          </div>
			          <div class="modal-body mx-3" id="modalVer4">
			            
			          </div>
			          <div class="modal-footer d-flex justify-content-center">
			          </div>
			        </div>
			      </div>
			    </div>

			</div>
			</div>

		</div>
	</div>
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
</body>
</html>