<?php
require_once("clases/conexion.php");
require_once("clases/productos.php");
$u = new Productos();
$datos=$u->getDatos();
//echo ($datos);exit;**/

?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>..::Productos::..</title>
	 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
     <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

	<nav aria-label="breadcrumb" role="navigation">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="index.php">Principal</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Listado de Productos</li>
	  </ol>

	

	</nav>
	<div class="container" >
		<div class="panel panel-primary">
        	<div class="panel-heading">
    			<h3 class="panel-title">Listado de Productos</h3>
  			</div>
  		<div class="panel-body">
   			
   				<a href="agregaProducto.php" class="btn btn-success "><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Agregar Producto</a> ||

   				<a href="stockMinimo.php" class="btn btn-danger" class="pull-right"><span class="glyphicon glyphicon-alert" aria-hidden="true"></span> Ver stock Bajo</a>
   			

			
			  <div class="col-lg-6">
			    <div class="input-group">
			      <span class="input-group-btn">
			        <button class="btn btn-secondary" type="button">Buscar Producto</button>
			      </span>
			      <input type="text" class="form-control" name="buscar" id="buscar" placeholder="Busca Por Codigo o Nombre" aria-label="">
			    </div>
			    <hr>
		</div>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Códigos</th>
					<th>Nombre del Producto </th>
					<th>Descripción</th>
					<th width="3%">Existencia </th>
					<th width="3%">Estado</th>

				</tr>
			</thead>
			<tbody>
<?php

  foreach($datos as $dato)
                        {   
                         
                            ?>
                            <tr>
                                <td> <?php echo $dato->codProducto ?> </td>
                                <td> <?php echo $dato->nombreProducto?> </td>
                                <td> <?php echo $dato->Descripcion ?> </td>
                                <td><b><center> <?php echo $dato->Existencia ?></center></b> </td>
                                <?php
                                 if($dato->Existencia <= $dato->stock){
                           echo "<td style='background-color:#F6CECE;'>"."<b>Bajo</b>";
                            }else{
                            	 echo "<td style='background-color:#A9F5F2;'>"."<b>OK</b>";
                            }

                                ?>
                            </tr>


                            <?php

                        }
                        ?>                      
							
												
			</tbody>

		</table>

  	</div>


</body>
</html>
