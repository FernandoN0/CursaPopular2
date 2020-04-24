<?php
   //se incluye la pagina conexion.php para poder recoger la conexión a la BD
   include("../services/conexion.php");
   
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Declarar variables y hacer request del formulario

    $myusername = $_REQUEST['nomusu'];
    $mypassword = $_REQUEST['passusu'];
    $pass = md5($mypassword);

    if (isset($_REQUEST["nomusu"])) {
        $q = mysqli_query($connexion, "SELECT * FROM tbl_usuarios WHERE nombre_usuario = '$myusername' AND pass_usuario = '$pass'");
        $row_cnt = mysqli_num_rows($q);
        
        if ($row_cnt == "1") {
            session_start();
            $_SESSION['nombre'] = $myusername;
            header("Location: ../views/panel_administracion.php");
        } else {
            echo"<script type='text/javascript'>alert('Usuario o contraseña incorrectos')</script>";
           header('Refresh:0; url = ../views/index.php?us=' . $myusername);
        }
        $close = mysqli_close($connexion);
    } else {
        header("Location: ../views/home.php");
    }
}