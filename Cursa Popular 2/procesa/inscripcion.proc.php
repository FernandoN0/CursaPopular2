<?php
   //se incluye la pagina conexion.php para poder recoger la conexión a la BD
   include("../services/conexion.php");
   
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Declarar variables y hacer request del formulario
    $DNI = htmlspecialchars($_REQUEST['DNI']);
    $nompart = htmlspecialchars($_REQUEST['nompart']);
    $apepart = htmlspecialchars($_REQUEST['apepart']);
    $separt = htmlspecialchars($_REQUEST['separt']);
    $edpart = htmlspecialchars($_REQUEST['edpart']);
    $discpart = htmlspecialchars($_REQUEST['discpart']);
    //Calculamos la edad del participante
    $cumpleanos = new DateTime($_REQUEST['edpart']);
    $hoy = new DateTime();
    $edad = $hoy->diff($cumpleanos);
    $edadreal= $edad->y;

    if (isset($_REQUEST["nompart"])) {
        //Comprobamos si el usuario ya ha participado en otra cursa
        $q = mysqli_query($connexion, "SELECT * FROM tbl_participantes WHERE DNI = '$DNI'");
        $row_cnt = mysqli_num_rows($q);

        //Cogemos la categoria de la cursa donde va a participar el usuario
        $querycategoria = mysqli_query($connexion, "SELECT id_categoria FROM tbl_categorias WHERE edad_max > '$edadreal' AND edad_min < '$edadreal' limit 1");
    
		while($mostrar=mysqli_fetch_array($querycategoria)){
			 $idcat = $mostrar['id_categoria'];
		}

        //Cogemos la cursa donde se va a inscribir el usuario
        $querycursa = mysqli_query($connexion, "SELECT * FROM tbl_cursa WHERE activa_cursa='si'");

        while($resultadocursa=mysqli_fetch_array($querycursa)){
			   $idcursa = $resultadocursa['id_cursa'];
			     
		}
        if ($idcursa == null) {
            $idcursa = 1;

        }

        //Calculamos el dorsal
        $querydorsal = mysqli_query($connexion, "SELECT MAX(Dorsal+1) FROM `tbl_inscripcion` WHERE id_cursa = '$idcursa'");

        $resultadodorsal=mysqli_fetch_array($querydorsal);
        $dorsal = $resultadodorsal['MAX(Dorsal+1)'];

		if ($dorsal == null) {
        	    $dorsal = 1;
        }

        //Si el usuario ya ha participado en otra cursa, entra en el if, si no, entra en el else
        if ($row_cnt == "1") {
            $insertinscripcion = mysqli_query($connexion, "INSERT INTO tbl_inscripcion (dorsal, id_participante, categoria_cursa,id_cursa) VALUES ('$dorsal', '$DNI', '$idcat', '$idcursa')");

            $querycompinscripcion = mysqli_query($connexion, "SELECT * FROM tbl_inscripcion WHERE dorsal = '$dorsal' AND id_participante = '$DNI' AND categoria_cursa = '$idcat' AND id_cursa = '$idcursa'");
            $row_cnt1 = mysqli_num_rows($querycompinscripcion);
            if ($row_cnt1 == "1") {
                echo"<script type='text/javascript'>alert('Inscripción creada correctamente')</script>";
            }else{
                echo"<script type='text/javascript'>alert('Ha ocurrido un problema al crear la inscripción, por favor intentalo de nuevo más tarde o pongase en contacto con el centro')</script>";
            }
        } else {
            $insertparticipante = mysqli_query($connexion, "INSERT INTO tbl_participantes VALUES ('$DNI', '$nompart', '$apepart', '$separt', '$edpart', '$discpart')");
            $insertinscripcion = mysqli_query($connexion, "INSERT INTO tbl_inscripcion (dorsal, id_participante, categoria_cursa,id_cursa) VALUES ('$dorsal', '$DNI', '$idcat', '$idcursa')");

            $querycompparticipante = mysqli_query($connexion, "SELECT * FROM tbl_participantes WHERE dni = '$DNI' AND nombre_parti = '$nompart' AND apellido_parti = '$apepart' AND fechanac_parti = '$edpart' AND discapacitado_parti = '$discpart'");
            $row_cnt2 = mysqli_num_rows($querycompparticipante);
            $querycompinscripcion = mysqli_query($connexion, "SELECT * FROM tbl_inscripcion WHERE dorsal = '$dorsal' AND id_participante = '$DNI' AND categoria_cursa = '$idcat' AND id_cursa = '$idcursa'");
            $row_cnt3 = mysqli_num_rows($querycompinscripcion);
            if ($row_cnt2 == "1") {
                if ($row_cnt3 == "1") {
                    echo"<script type='text/javascript'>alert('Inscripción creada correctamente')</script>";
                }else{
                    echo"<script type='text/javascript'>alert('Ha ocurrido un problema al crear la inscripción, por favor intentalo de nuevo más tarde o pongase en contacto con el centro')</script>";
                }
            }else{
                echo"<script type='text/javascript'>alert('Ha ocurrido un problema al registrar el participante, por favor intentalo de nuevo más tarde o pongase en contacto con el centro')</script>";
            }
        }
        $close = mysqli_close($connexion);
        header("Refresh:0; url = ../views/index.php");
    } else {
       header("Location: ../views/index.php");
    }
}
