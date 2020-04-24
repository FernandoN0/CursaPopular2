<?php
//Mantiene la sesión.
session_start();
if(isset($_SESSION['nombre'])){
	echo "<a class='nav-item' href='../services/logout.php'>Cerrar sesión de ".$_SESSION['nombre']."</a>&nbsp;&nbsp;"	;

}else{
		header("Location: ../views/index.php");
}
?>
