<?php
   //se incluye la pagina conexion.php para poder recoger la conexión a la BD
   include("../services/conexion.php");

    //Declarar variables y hacer request del formulario
    $id = htmlspecialchars($_REQUEST['idusu']);
    $nombre = htmlspecialchars($_REQUEST['nomusu']);

        //Hacemos el update
        $insertcursa = mysqli_query($connexion, "UPDATE tbl_usuarios SET nombre_usuario = '$nombre' WHERE id_usuario = '$id'");

        //Hacemos una consulta para despúes comprobar si se ha realizado correctamente el update
        $queryconsulta = mysqli_query($connexion, "SELECT * FROM tbl_usuarios WHERE nombre_usuario = '$nombre'");
        $row_cnt = mysqli_num_rows($queryconsulta);

        if ($row_cnt == "1") {
            echo"<script type='text/javascript'>alert('Usuari editat correctament')</script>";

        } else {
            echo"<script type='text/javascript'>alert('Hi ha hagut un problema al editar l'usuari'')</script>";

        }
        $close = mysqli_close($connexion);
