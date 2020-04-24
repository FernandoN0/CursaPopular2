<?php 
include "../services/conexion.php";

if ($catifil='%') {
	$sql="SELECT * 
	  FROM tbl_resultado  
	  INNER JOIN tbl_inscripcion ON tbl_resultado.id_inscripcion=tbl_inscripcion.id_inscripcion 
	  INNER JOIN tbl_participantes ON tbl_participantes.dni=tbl_inscripcion.id_participante 
	  INNER JOIN tbl_categorias ON tbl_categorias.id_categoria=tbl_inscripcion.Categoria_Cursa 
	  INNER JOIN tbl_cursa ON tbl_cursa.id_cursa=tbl_inscripcion.id_cursa 
	  WHERE cu.id_cursa = (SELECT id_cursa FROM tbl_cursa ORDER BY fecha_cursa DESC LIMIT 1) AND CONCAT(nombre_parti,' ',apellido_parti) like '%$nombrefil%' AND tbl_participantes.Sexo_parti like '$sexofil' AND tbl_categorias.id_categoria like '$catidfil' ORDER BY tbl_resultado.Posicionabs_parti ASC;";
}else{
	$sql="SELECT * 
	  FROM tbl_resultado  
	  INNER JOIN tbl_inscripcion ON tbl_resultado.id_inscripcion=tbl_inscripcion.id_inscripcion 
	  INNER JOIN tbl_participantes ON tbl_participantes.dni=tbl_inscripcion.id_participante 
	  INNER JOIN tbl_categorias ON tbl_categorias.id_categoria=tbl_inscripcion.Categoria_Cursa 
	  INNER JOIN tbl_cursa ON tbl_cursa.id_cursa=tbl_inscripcion.id_cursa 
	  WHERE cu.id_cursa = (SELECT id_cursa FROM tbl_cursa ORDER BY fecha_cursa DESC LIMIT 1) AND CONCAT(nombre_parti,' ',apellido_parti) like '%$nombrefil%' AND tbl_participantes.Sexo_parti like '$sexofil' AND tbl_categorias.id_categoria like '$catidfil' ORDER BY tbl_resultado.Posicionrel_parti ASC;";
}

$result=mysqli_query($connexion,$sql);

while($mostrar=mysqli_fetch_array($result)){

?>
<tr>
	<td><?php echo $mostrar['posicionabs_parti'] ?></td>
	<td><?php echo $mostrar['posicionrel_parti'] ?></td>
	<td><?php echo $mostrar['sexo_parti'] ?></td>
	<td><?php echo $mostrar['dorsal'] ?></td>
	<td><?php echo $mostrar['nombre_parti'] . ' ' . $mostrar['apellido_parti'] ?></td>
	<td><?php echo $mostrar['tiempo_parti'] ?></td>
	<td><?php echo $mostrar['discapacitado'] ?></td>
</tr>
<?php 
}

 ?>