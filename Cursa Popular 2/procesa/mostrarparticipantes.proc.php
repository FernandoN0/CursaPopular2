<?php 
include "../services/conexion.php";

if (isset($_GET['id'])) {
	$sql="SELECT * FROM tbl_participantes where dni='".$_GET['id']."';";
}else{
	$sql="SELECT * FROM tbl_participantes;";
}



$result=mysqli_query($connexion,$sql);
$parti=array();

while($row = mysqli_fetch_assoc($result)){
    $parti[]=$row;

}

print json_encode($parti);

?>