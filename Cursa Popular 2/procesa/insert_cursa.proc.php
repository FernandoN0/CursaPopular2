<?php
   //se incluye la pagina conexion.php para poder recoger la conexión a la BD
   include("../services/conexion.php");
   
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Declarar variables y hacer request del formulario
    $fecha = htmlspecialchars($_REQUEST['fecursa']);
    $hora = htmlspecialchars($_REQUEST['hocursa']);
    $recorrido = htmlspecialchars($_REQUEST['recursa']);
    $activa = htmlspecialchars($_REQUEST['accursa']);

    if (isset($_REQUEST["fecursa"])) {
        //Hacemos el insert
        $insertcursa = mysqli_query($connexion, "INSERT INTO tbl_cursa (fecha_cursa, hora_cursa, recorrido_cursa, activa_cursa) VALUES fecha_cursa = '$fecha',hora_cursa = '$hora',recorrido_cursa = '$recorrido',activa_cursa = '$activa'");

        //Hacemos una consulta para despúes comprobar si se ha realizado correctamente el insert
        $queryconsulta = mysqli_query($connexion, "SELECT * FROM tbl_cursa WHERE fecha_cursa = '$fecha',hora_cursa = '$hora',recorrido_cursa = '$recorrido',activa_cursa = '$activa'");
        $row_cnt = mysqli_num_rows($queryconsulta);

        if ($row_cnt == "1") {
            echo"<script type='text/javascript'>alert('Cursa creada correctament')</script>";
            header("Location: ../views/panel_administracion.php");
        } else {
            echo"<script type='text/javascript'>alert('Hi ha hagut un problema al crear la cursa')</script>";
            header("Location: ../views/panel_administracion.php");
        }
        $close = mysqli_close($connexion);
    } else {
        header("Location: ../views/panel_administracion.php");
    }
}