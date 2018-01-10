<?php

require ('../clases/conexion.php');

$salida = "";
$query = "select nombreProducto from Productos order by nombreProducto ASC";

if(isset($_POST['consulta'])){

	$q = $mysqli -> real_escape_string( $_POST['consulta']);
	 $query = "SELECT nombreProducto from Productos where nombreProducto LIKE '%".$q."%'";
	}

	$resultado = $mysqli->query($query);

	if ($resultado->num_rows > 0){
		$salida.="<table class='tabla_datos'>
		<thead>
			<tr>
				<td>Producto</td>
			</tr>
		</thead>
		<tbody>";

		while($fila=$resultado->fetch_assoc()){
			$salida.="<tr>
				<td>".$fila['nombreProducto']."</td>
			</tr>";

		}
		$salida.="</tbody></table>";
	} else {
		$salida.="No se encontraron registros";

	}

	echo $salida;

?>