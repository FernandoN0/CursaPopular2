<?php
   //se incluye la pagina conexion.php para poder recoger la conexión a la BD
   include("../services/conexion.php");

    //Declarar variables y hacer request del formulario
    $id = htmlspecialchars($_REQUEST['idcursa']);
    $fecha = htmlspecialchars($_REQUEST['fecursa']);
    $hora = htmlspecialchars($_REQUEST['hocursa']);
    $recorrido = htmlspecialchars($_REQUEST['recursa']);
    $activa = htmlspecialchars($_REQUEST['accursa']);

        //Hacemos el update
        $insertcursa = mysqli_query($connexion, "UPDATE tbl_cursa SET fecha_cursa = '$fecha',hora_cursa = '$hora',recorrido_cursa = '$recorrido',activa_cursa = '$activa' WHERE id_cursa = '$id'");

        //Hacemos una consulta para despúes comprobar si se ha realizado correctamente el update
        $queryconsulta = mysqli_query($connexion, "SELECT * FROM tbl_cursa WHERE fecha_cursa = '$fecha' AND hora_cursa = '$hora' AND recorrido_cursa = '$recorrido' AND activa_cursa = '$activa'");

        $row_cnt = mysqli_num_rows($queryconsulta);

        if ($row_cnt == "1") {
            echo"<script type='text/javascript'>alert('Cursa editada correctament')</script>";

        } else {
            echo"<script type='text/javascript'>alert('Hi ha hagut un problema al editar la cursa')</script>";

        }
        $close = mysqli_close($connexion);

