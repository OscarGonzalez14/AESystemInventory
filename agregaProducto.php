<?php
require_once("clases/productos.php");
require_once("clases/conexion.php");

$query = "select idCategoria,nombreCategoria from Categoria order by nombreCategoria ASC";
$resultado=$mysqli->query($query);

//($datos);exit;**/
if (isset($_POST["codigo"])) {
	$u = new Productos();
	$u->insertar();

}

?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>..::Agregar Productos::..</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

	<div class="container" >
		<ol class="breadcrumb">
 	    	<li><a href="index.php">Principal</a></li>
        	<li class="active">Agregar Productos</li>
        </ol>
 
		<div class="panel panel-primary">
        	<div class="panel-heading">
    			<h3 class="panel-title"><center><strong>Agregar Productos</strong></center></h3>
  			</div>
  		<div class="panel-body">

  		<form name="form" action="" method="post">
  		<div class="form-group col-md-6">
  			<label for="codigo"> Código del Producto: </label>
  			<input class="form-control" type="text" name="codigo">
  		</div>

  		<p class="form-group col-md-6">
  			<label for="categoria">Elija una Categoría:</label>
				<select class="form-control" name="categoria" id="categoria">
					<option value="0"> Seleccione Categoria</option>
					<?php while($row = $resultado->fetch_assoc()) {?>
						<option value="<?php echo $row['idCategoria'];?>" ><?php echo $row['nombreCategoria'];?></option>
						<?php } ?>
				</select>
  		</p>

  		<p class="form-group col-md-12" >
  			<label for="nombre"> Nombre del Producto: </label>
  			<input type="text" name="nombre" class="form-control">
  		</p>

  		<p class="form-group col-md-12">
  			<label for="descripcion"> Descripción del Producto: </label>
  			<input type="text" name="descripcion" class="form-control">
  		</p>

  		<p class= "form-group col-md-4" >
  			<label for="stock"> Stock Minimo: </label>
  			<input type="number" name="stock" class="form-control">
  		</p>


 
  		<button type="submit" value="Enviar" class="btn btn-primary btn-lg btn-block"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Crear Producto</button>

  		</form>

  	</div>


</body>
</html>
