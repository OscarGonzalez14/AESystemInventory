<?php

require ('../clases/conexion.php');


//////////////// VALORES INICIALES ///////////////////////
$tabla="";

$query="select codProducto, nombreProducto, Descripcion, Existencia,stock from Productos group by codProducto;";

///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
if(isset($_POST['getProductos']))
{
	$q=$mysqli->real_escape_string($_POST['getProductos']);
	/*$query="SELECT * FROM ordenProduccion WHERE
		idOrden LIKE '%".$q."%'";*/
	$query="select codProducto, nombreProducto, Descripcion, Existencia,stock from Productos group by codProducto;";
}

$buscarProductos=$mysqli->query($query);
if ($buscarProductos->num_rows > 0)
{ 
	
	$tabla.= 
	'<table class="table table-bordered">
		<tr class="bg-primary">
			<td>Codigo</td>
			<td>Producto</td>
			<td>Descripcion</td>
			<td>Existencia</td>
		</tr>';

		
	while($queryProducto= $buscarProductos->fetch_assoc())
	{
		$tabla.=
		'	
		<tr>
			<td>'.$queryProducto['codProducto'].'</td>
			<td>'.$queryProducto['nombreProducto'].'</td>
			<td>'.$queryProducto['Descripcion'].'</td>
			<td>'.$queryProducto['Existencia'].'</td>
			
		 </tr>
		';

	}

	$tabla.='</table>';
	
} else
	{
		$tabla="No ha Seleccionado Orden :(.";
	}


echo $tabla;
?>
