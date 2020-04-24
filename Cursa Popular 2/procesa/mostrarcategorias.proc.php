<?php 
include "../services/conexion.php";

if (isset($_GET['id'])) {
	$sql="SELECT * FROM tbl_categorias where id_categoria=".$_GET['id'].";";
}else{
	$sql="SELECT * FROM tbl_categorias;";
}



$result=mysqli_query($connexion,$sql);
$categoria=array();

while($row = mysqli_fetch_assoc($result)){
    $categoria[]=$row;

}

print json_encode($categoria);

?>