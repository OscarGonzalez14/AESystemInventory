<?php

require ('../clases/conexion.php');


//////////////// VALORES INICIALES ///////////////////////
$total=0;
$tabla="";
$tabla1="";
$query="select*from detalleEntradas ;";

///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
if(isset($_POST['username']));
{
	$q=$mysqli->real_escape_string($_POST['username']);
	/*$query="SELECT * FROM ordenProduccion WHERE
		idOrden LIKE '%".$q."%'";*/
		//$h= $_POST['username'];
	$query="select*from detalleEntradas where fechaEntrada < '2018-02-02';";
}

$buscarOrdenes=$mysqli->query($query);
if ($buscarOrdenes->num_rows > 0)
{

	$tabla.=
	'<table class="table table-bordered">
		<tr class="bg-primary">
			<td>FECHA</td>
			<td>ORDEN</td>
			<td>MECANICO</td>
			<td>CLIENTE</td>
			<td>EQUIPO</td>
			<td>MEDIDAS</td>
			<td>PRODUCTO</td>
			<td>CANTIDAD</td>
			<td>PRECIO SAL</td>
			
		</tr>';


	while($queryOrden= $buscarOrdenes->fetch_assoc())
	{
		$tabla.=
		'
		<tr>
			<td>'.$queryOrden['idEntrada'].'</td>
			<td>'.$queryOrden['fechaEntrada'].'</td>
			<td>'.$queryOrden['codProducto'].'</td>
			<td>'.$queryOrden['Cantidad'].'</td>
			<td>'.$queryOrden['PrecioEntrada'].'</td>
			<td>'.$queryOrden['idBodega'].'</td>
			<td>'.$queryOrden['idProveedor'].'</td>
			<td>'.$queryOrden['sku'].'</td>
			<td>'.$queryOrden['ccf'].'</td>
			
		 </tr>
		';

		//$total=$total+$queryOrden['costo'];

	}

	$tabla.='</table>';

} else
	{
		$tabla="No ha Seleccionado Orden :(.";
	}


echo $tabla;
echo "<a align='right'><h3><b>Costo Total: $total<b></h3></a>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form  method="post">
    Nombre usuario: <input type="date" name="username" /><br />
   
    <input type="submit" name="submit" value="¡Enviarme!" />
</form>
</body>
</html>