<!DOCTYPE html>
<html>
<head>
	<title>Cursa Bellvitge 2020</title>
	<!--Estilos-->
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
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

	<?php
    function obtenerFechaEnLetra($fecha){
    $dia= conocerDiaSemanaFecha($fecha);
    $num = date("j", strtotime($fecha));
    $anno = date("Y", strtotime($fecha));
    $mes = array('gener', 'febrer', 'març', 'abril', 'maig', 'juny', 'juliol', 'agost', 'septembre', 'octubre', 'novembre', 'decembre');
    $mes = $mes[(date('m', strtotime($fecha))*1)-1];
    return $dia.', '.$num.' de '.$mes.' del '.$anno;
    }

    function conocerDiaSemanaFecha($fecha) {
        $dias = array('Diumenge', 'Dilluns', 'Dimarts', 'Dimecres', 'Dijous', 'Divendres', 'Dissabte');
        $dia = $dias[date('w', strtotime($fecha))];
        return $dia;
    }
    ?>
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
					<h1 class="titulo-cab">CURSA DE BELLVITGE 2020</h1>
					<p class="texto-cab"><i>Organitzada per l’AMPA Jesuïtes Bellvitge – C.E. Joan XXIII, la cursa tindrà lloc el proper diumenge 10 de maig 2020 al matí i donarà tots els diners recaptats a la Fundació La Vinya.</i></p>
					<button type="button" class="btn btn-primary boton-inscripcion"><a href="#form-inscripcion">INSCRIPCIÓ</a></button>
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header text-center">
	        <h4 class="modal-title w-100 font-weight-bold">Iniciar sessió</h4>∫
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <form id='login' action='../procesa/login.proc.php' method='post' accept-charset='UTF-8' onsubmit="comprobar();return false">
	      <div class="modal-body mx-3">
	        <div class="md-form mb-5">
	          <i class="fas fa-envelope prefix grey-text"></i>
	              <input  type='text' class="form-control validate form-text" placeholder="Introdueix l'usuari" pattern="[a-z]{1,15}" name='nomusu' id='nomusu'  value="<?php 
                                if (isset($_GET['us'])) {
                                    $user=$_GET['us'];
                                    echo "$user";
                                }
                        ?>" maxlength="50"/>
	        </div>

	        <div class="md-form mb-4">
	          <i class="fas fa-lock prefix grey-text"></i>
	          <input type='password'class="form-control validate form-text" placeholder="Introdueix el contrasenya" name='passusu' id='passusu' maxlength="50"/>
	        </div>

	      </div>
	      <div class="modal-footer d-flex justify-content-center">
	        <button class="btn btn-radius-2 enviar" type="submit">Iniciar Sessió</button>
	          </form>
	      </div>
	    </div>
	  </div>
	</div>
	<!--Modal login-->
	<!--Cabecera-->
	<!--Contador fecha-->
	<div class="container-fluid" id="contador">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10 fecha">
				<img src="../img/calendario.png" width="150">
				<h2 class="fecha-cursa">
					<?php 
                    include "../services/conexion.php";
                    $sql="SELECT fecha_cursa FROM tbl_cursa WHERE activa_cursa='si' ORDER BY fecha_cursa ASC";


                    $result=mysqli_query($connexion,$sql);

                    $row_cnt = mysqli_num_rows($result);

                    if ($row_cnt == "1") {
                        while($mostrar=mysqli_fetch_array($result)){

                        ?>
                        <?php $fecha = $mostrar['fecha_cursa'];

                        echo obtenerFechaEnLetra($fecha);
                        }
                    }else{
                        echo "No hi han curses actives";
                    }
                     ?>
				</h2>
				<!--<div id="clock"></div>
				<script type="text/javascript" src="countdown.js"></script>-->
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
	<!--Contador fecha-->
	<!--Info+-->
	<div class="container" id="info">
		<div class="row">
			<div class="col-md-4 first">
				<img src="../img/reglas.png" width="150">
				<h3>Regles</h3>
				<div class="content-txt-info">
					<p class="texto-info">Cras sit amet odio id felis sagittis ultrices ut eu felis. Curabitur eu sem ipsum. Mauris nisi turpis, volutpat vel metus vitae, ornare euismod tellus. Suspendisse eu leo at nisi gravida tincidunt eget vulputate sem.</p>
				</div>
			</div>
			<div class="col-md-4 second">
				<img src="../img/informacion.png" width="150">
				<h3>Informació</h3>
				<div class="content-txt-info">
					<p class="texto-info">Cras sit amet odio id felis sagittis ultrices ut eu felis. Curabitur eu sem ipsum. Mauris nisi turpis, volutpat vel metus vitae, ornare euismod tellus. Suspendisse eu leo at nisi gravida tincidunt eget vulputate sem.</p>
				</div>
			</div>
			<div class="col-md-4 third">
				<img src="../img/recaudacion.png" width="150">
				<h3>Recaptació</h3>
				<div class="content-txt-info">
					<p class="texto-info">Cras sit amet odio id felis sagittis ultrices ut eu felis. Curabitur eu sem ipsum. Mauris nisi turpis, volutpat vel metus vitae, ornare euismod tellus. Suspendisse eu leo at nisi gravida tincidunt eget vulputate sem.</p>
				</div>
			</div>
		</div>
	</div>
	<!--Info+-->
	<!--Slider-->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
				    	<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    	<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				    	<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				  	</ol>
				  	<div class="carousel-inner">
				    	<div class="carousel-item active">
				      		<img class="d-block w-100" src="../img/1.jpg" alt="First slide">
				    	</div>
					    <div class="carousel-item">
					      	<img class="d-block w-100" src="../img/2.jpg" alt="Second slide">
					    </div>
					    <div class="carousel-item">
					      	<img class="d-block w-100" src="../img/3.jpg" alt="Third slide">
					    </div>
				  	</div>
				  	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    	<span class="sr-only">Previous</span>
				  	</a>
				  	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
				    	<span class="sr-only">Next</span>
				  	</a>
				</div>
			</div>
		</div>
	</div>
	<!--Slider-->
	<hr class="separador">
	<div class="container txt-inscripcion text-justify">
		<div class="row">
			<div class="col-md-12">
				<h2>Inscripció a la cursa</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac nisl pharetra, blandit ante id, maximus odio. Integer elementum vehicula urna, at cursus lorem suscipit et. Mauris maximus orci non tristique blandit. Praesent fringilla varius consequat. Morbi eget nunc pharetra, pretium sem ut, rhoncus metus. Aenean iaculis pretium varius. Phasellus eget dolor a sapien sagittis ultrices nec ac nisl. Nunc massa est, bibendum quis ante in, faucibus viverra tellus. Vivamus consequat rutrum erat, ac vehicula leo feugiat eu. Integer ultrices dictum urna, eget tristique sem semper sit amet. Sed imperdiet lacus id orci mollis consectetur. Praesent consectetur quam risus, a viverra augue consectetur id.</p>
			</div>
		</div>
	</div>
	<!--Formulario inscripcion-->
	<div class="container-fluid" id="form-inscripcion">
		<div class="row">
			<div class="col-md-12">
				<div id="formulario">
					<form action="../procesa/inscripcion.proc.php" method='post'id="form" autocomplete="off">
						<div class="form-group">
							<input type="text" class="form-control form-text" id="nombre"  name="nompart"placeholder="Nom">
						</div>
						<div class="form-group">
							<input type="text" class="form-control form-text" id="apellido" name="apepart"placeholder="Cognoms">
						</div>
						<div class="form-group">
							<input type="text" class="form-control form-text" id="dni" name="DNI" placeholder="DNI">
						</div>
						<div class="md-form">
						<div class="form-group date">
							<label for="date">Data de naixement</label>
							<input class="form-control" type="date" id="fecha-nacimiento" name="edpart">
						</div>
						<div id="sexo">
		                    <select name="separt" class="opt">
		                        <option disabled="disabled" selected="selected">Sexe</option>
		                        <option value="h">Home</option>
		                        <option value="m">Dona</option>
		                    </select>
		                    <select name="discpart" class="opt">
	                            <option disabled="disabled" selected="selected">Discapacitat
	                            </option>
	                            <option>Si</option>
	                            <option>No</option>
                            </select>
		                    <div class="select-dropdown"></div>
						</div>
						</div>
		<!--Si no hay cursas activas no te deja inscribirte-->
<?php
if ($row_cnt == "1") {
         echo '<button class="btn btn-radius-2 enviar" type="submit">Inscipció</button>';
}else{
         echo '<button disabled class="btn btn-radius-2 enviar" type="submit">Inscipció</button>';
}
?>
                    </form>
				</div>
			</div>
		</div>
	</div>
	<!--Formulario inscripcion-->
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