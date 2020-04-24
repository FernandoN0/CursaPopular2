<?php 
include "../services/conexion.php";

if (isset($_GET['id'])) {
	$sql="SELECT * FROM tbl_usuarios where id_usuario=".$_GET['id'].";";
}else{
	$sql="SELECT * FROM tbl_usuarios;";
}

$result=mysqli_query($connexion,$sql);
$usuarios=array();

while($row = mysqli_fetch_assoc($result)){
    $usuarios[]=$row;

}

print json_encode($usuarios);

?>