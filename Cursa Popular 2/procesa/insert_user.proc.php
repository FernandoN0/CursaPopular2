<?php
   //se incluye la pagina conexion.php para poder recoger la conexión a la BD
   include("../services/conexion.php");
   
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Declarar variables y hacer request del formulario
    $nombre = htmlspecialchars($_REQUEST['nomusu']);
    $password = htmlspecialchars($_REQUEST['passusu']);
    $pass = md5($password);

    if (isset($_REQUEST["nombre"])) {
        //Hacemos el insert
        $insertuser = mysqli_query($connexion, "INSERT INTO tbl_usuarios (nombre_usuario, pass_usuario) VALUES nombre_usuario = '$nombre',pass_usuario = '$pass'");

        //Hacemos una consulta para despúes comprobar si se ha realizado correctamente el insert
        $queryconsulta = mysqli_query($connexion, "SELECT * FROM tbl_usuarios WHERE nombre_usuario = '$nombre',pass_usuario = '$pass'");
        $row_cnt = mysqli_num_rows($queryconsulta);

        if ($row_cnt == "1") {
            echo"<script type='text/javascript'>alert('Usuari creat correctament')</script>";
            header("Location: ../views/panel_administracion.php");
        } else {
            echo"<script type='text/javascript'>alert('Hi ha hagut un problema al crear l'usuari')</script>";
            header("Location: ../views/panel_administracion.php");
        }
        $close = mysqli_close($connexion);
    } else {
        header("Location: ../views/panel_administracion.php");
    }
}