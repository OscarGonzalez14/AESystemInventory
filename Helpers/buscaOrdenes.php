<?php

require ('../clases/conexion.php');


//////////////// VALORES INICIALES ///////////////////////
$total=0;
$tabla="";
$tabla1="";
$query="SELECT o.fechaCreacion as Fecha, o.idOrden as NoOrden, m.nombre as Mecanico,o.Cliente, o.equipo as Equipo,o.medidas,p.nombreProducto, SUM(d.CantidaSalida) as cantidad, d.precioSalida,d.CantidaSalida as costo from detalleSalida d join ordenProduccion o on d.idOrden=o.idOrden join Productos p on d.codProducto=p.codProducto join Mecanico m on m.idMecanico=o.idMecanico WHERE o.idOrden LIKE '%rde%' GROUP BY p.codProducto LIMIT 0;";

///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
if(isset($_POST['getOrdenes']))
{
	$q=$mysqli->real_escape_string($_POST['getOrdenes']);
	/*$query="SELECT * FROM ordenProduccion WHERE
		idOrden LIKE '%".$q."%'";*/
	$query="SELECT o.fechaCreacion as Fecha, o.idOrden as NoOrden, m.nombre as Mecanico,o.Cliente, o.equipo as Equipo,o.medidas,p.nombreProducto, SUM(d.CantidaSalida) as cantidad, d.precioSalida,ROUND(SUM(d.precioSalida*d.CantidaSalida),1) as costo from detalleSalida d join ordenProduccion o on d.idOrden=o.idOrden join Productos p on d.codProducto=p.codProducto join Mecanico m on m.idMecanico=o.idMecanico WHERE o.idOrden LIKE '%".$q."%' OR m.nombre LIKE '%".$q."%' GROUP BY p.codProducto;";
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
			<td>COSTO</td>
		</tr>';


	while($queryOrden= $buscarOrdenes->fetch_assoc())
	{
		$tabla.=
		'
		<tr>
			<td>'.$queryOrden['Fecha'].'</td>
			<td>'.$queryOrden['NoOrden'].'</td>
			<td>'.$queryOrden['Mecanico'].'</td>
			<td>'.$queryOrden['Cliente'].'</td>
			<td>'.$queryOrden['Equipo'].'</td>
			<td>'.$queryOrden['medidas'].'</td>
			<td>'.$queryOrden['nombreProducto'].'</td>
			<td>'.$queryOrden['cantidad'].'</td>
			<td>'.$queryOrden['precioSalida'].'</td>
			<td>'.$queryOrden['costo'].'</td>
		 </tr>
		';

		$total=$total+$queryOrden['costo'];

	}

	$tabla.='</table>';

} else
	{
		$tabla="No ha Seleccionado Orden :(.";
	}


echo $tabla;
echo "<a align='right'><h3><b>Costo Total: $total<b></h3></a>";
?>
