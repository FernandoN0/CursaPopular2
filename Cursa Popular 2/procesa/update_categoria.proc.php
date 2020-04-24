<?php
   //se incluye la pagina conexion.php para poder recoger la conexión a la BD
   include("../services/conexion.php");
   
    //Declarar variables y hacer request del formulario
    $idcat = htmlspecialchars($_REQUEST['id_categoria']);
    $nombrecat = htmlspecialchars($_REQUEST['nombre_categoria']);
    $edadmin = htmlspecialchars($_REQUEST['edad_min']);
    $edadmax = htmlspecialchars($_REQUEST['edad_max']);

        // Hacemos el update
        // '$variable' > entre comillas cuando sea una cadena de caracteres
        // $variable > sin comillas cuando sea un numero
        $updatecategoria = mysqli_query($connexion, "UPDATE tbl_categorias SET nombre_categoria = '$nombrecat', edad_min = $edadmin, edad_max = $edadmax WHERE id_categoria = $idcat");

        //Hacemos una consulta para despúes comprobar si se ha realizado correctamente el update
        //$queryconsulta = mysqli_query($connexion, "SELECT * FROM tbl_usuarios WHERE nombre_usuario = '$nombre',pass_usuario = '$pass'");
        // $row_cnt = mysqli_num_rows($queryconsulta);

        // if ($row_cnt == "1") {
        //     echo"<script type='text/javascript'>alert('Usuari editat correctament')</script>";
        //     header("Location: ../views/panel_administracion.php");
        // } else {
        //     echo"<script type='text/javascript'>alert('Hi ha hagut un problema al editar l'usuari'')</script>";
        //     header("Location: ../views/panel_administracion.php");
        // }
        // $close = mysqli_close($connexion);
