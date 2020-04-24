<?php
   //se incluye la pagina conexion.php para poder recoger la conexión a la BD
   include("../services/conexion.php");
   
    //Declarar variables y hacer request del formulario
    $id = htmlspecialchars($_REQUEST['id']);
    $nombre = htmlspecialchars($_REQUEST['nompart']);
    $apellido = htmlspecialchars($_REQUEST['apepart']);
    $sexo = htmlspecialchars($_REQUEST['separt']);
    $edad = htmlspecialchars($_REQUEST['edpart']);
    $discapacidad = htmlspecialchars($_REQUEST['dispart']);


    //Hacemos el update
    $insertcursa = mysqli_query($connexion, "UPDATE tbl_participantes SET  nombre_parti = '$nombre',apellido_parti = '$apellido', sexo_parti = '$sexo', fechanac_parti = '$edad', discapacitado_parti = '$discapacidad' WHERE dni = '$id'");

?>