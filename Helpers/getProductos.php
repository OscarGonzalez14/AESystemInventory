<?php
	require ('../clases/conexion.php');
  $id_estado = $_POST['id_estado'];

	$queryM = "SELECT codProducto,nombreProducto FROM Productos where idCategoria= '$id_estado' ORDER BY nombreProducto ASC";
	$resultadoM = $mysqli->query($queryM);

	$html= "<option value='0'>Producto</option>";

	while($rowM = $resultadoM->fetch_assoc())
	{
		$html.= "<option value='".$rowM['codProducto']."'>".$rowM['nombreProducto']."</option>";
	}

	echo $html;

?>
