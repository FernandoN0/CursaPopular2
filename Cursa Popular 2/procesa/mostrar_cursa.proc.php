<?php 
include "../services/conexion.php";

if (isset($_GET['id'])) {
		$sql="SELECT * FROM tbl_cursa WHERE id_cursa = ".$_GET['id'].";";
	}else{
		$sql="SELECT * FROM tbl_cursa;";
	}



$result=mysqli_query($connexion,$sql);
$cursas=array();

while($row = mysqli_fetch_assoc($result)){
    $cursas[]=$row;

}

print json_encode($cursas);

?>