<!DOCTYPE html>
<html>
<head>
	<title>Galeria de imatges</title>
	<!--Estilos-->
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/estilos_galeria.css">
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
					<a class="nav-item resultats" href="resultats_cursa.php">Resultats</a>
	      		</li>
	      		<li class="nav-opt">
					<a class="nav-item resultats" href="galeria.php">Galeria</a>
	      		</li>
				<div class="btn-login nav navbar-nav navbar-right">
					<a class="login" href="#" data-toggle="modal" data-target="#modalLoginForm"><span class="txt-login">ZONA ADMIN</span></a>
				</div>
	    	</ul>
	  </div>
	</nav>
	<!--Menu-->
	<!--Cabecera-->
	<div class="container-fluid" id="cabecera">
		<div class="row">
			<div class="col-md-12 justify-content-center text-center align-items-center">
				<div id="content-cab">
					<h3 class="titulo-cab">Encuentra aqui todas las imagenes de la cursa :</h3>

					<div class="buscador">
						<div style="padding-bottom: 2%;">
							<i class="fas fa-search"></i>
							<input type="search" id="barrabusca" name="busqueda" placeholder=" Busca la imatge que vulguis!">
							<button class="botonbusca">Buscar</button>
						</div>
					</div>
					<br><br>

				</div>
			</div>
		</div>
	</div>
	<!--Cabecera-->

	<div class="grid-galeria">
		<a class="grid-galeria_item" href="#">
			<img class="grid-galeria_imagen" src="../img/test1.jpg">
		</a>
		<a class="grid-galeria_item" href="#">
			<img class="grid-galeria_imagen" src="../img/test2.jpg">
		</a>
		<a class="grid-galeria_item" href="#">
			<img class="grid-galeria_imagen" src="../img/test3.jpg">
		</a>
		<a class="grid-galeria_item" href="#">
			<img class="grid-galeria_imagen" src="../img/test4.jpg">
		</a>
		<a class="grid-galeria_item" href="#">
			<img class="grid-galeria_imagen" src="../img/test5.jpg">
		</a>
		<a class="grid-galeria_item" href="#">
			<img class="grid-galeria_imagen" src="../img/test6.jpg">
		</a>
		<a class="grid-galeria_item" href="#">
			<img class="grid-galeria_imagen" src="../img/test7.jpg">
		</a>
		<a class="grid-galeria_item" href="#">
			<img class="grid-galeria_imagen" src="../img/test8.jpg">
		</a>
		<a class="grid-galeria_item" href="#">
			<img class="grid-galeria_imagen" src="../img/test9.jpg">
		</a>
		<a class="grid-galeria_item" href="#">
			<img class="grid-galeria_imagen" src="../img/test10.jpg">
		</a>
		<a class="grid-galeria_item" href="#">
			<img class="grid-galeria_imagen" src="../img/test11.jpg">
		</a>
		<a class="grid-galeria_item" href="#">
			<img class="grid-galeria_imagen" src="../img/test12.jpg">
		</a>
		<a class="grid-galeria_item" href="#">
			<img class="grid-galeria_imagen" src="../img/test13.jpg">
		</a>
		<a class="grid-galeria_item" href="#">
			<img class="grid-galeria_imagen" src="../img/test14.jpg">
		</a>
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