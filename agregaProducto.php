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
  		<p>
  			<label for="codigo"> Código del Producto: </label>
  			<input type="text" name="codigo">
  		</p>

  		<p>
  			<label for="categoria">Elija una Categoría:</label>
				<select class="form-control" name="cbx_categoria" id="cbx_categoria">
					<option value="0"> Seleccione Categoria</option>
					<?php while($row = $resultado->fetch_assoc()) {?>
						<option value="<?php echo $row['idCategoria'];?>" ><?php echo $row['nombreCategoria'];?></option>
						<?php } ?>
				</select>
  		</p>

  		<p>
  			<label for="nombre"> Nombre del Producto: </label>
  			<input type="text" name="nombre" class="form-control">
  		</p>

  		<p>
  			<label for="descripcion"> Descripción del Producto: </label>
  			<input type="text" name="descripcion" class="form-control">
  		</p>

  			<p>
  			<label for="stock"> Stock Minimo: </label>
  			<input type="number" name="stock" class="form-control">
  		</p>

			<p>
			<label for="precio"> Precio: </label>
			<input type="number" name="precio" class="form-control">
		</p>

    <p>
      <label for="sku"> SKU de Proveedor: </label>
      <input type="text" name="sku" class="form-control">
    </p>

          <p>
        <label for="proveedor">Proveedor:</label>
        <select class="form-control" id="proveedor">
          <option value="proveedor">Seleccione:</option>
          <?php
            $query = $mysqli -> query ("select nombreProveedor from Proveedor;");
            while ($valores = mysqli_fetch_array($query)) {
             echo '<option value="categoria'.$valores[idProveedor].'">'.$valores[nombreProveedor].'</option>';
            }
          ?>
        </select>
      </p>


        <p>
        <label for="fecha"> Fecha Creación: </label>
        <input type="date" name="fecha" class="form-control">
      </p>

  		<button type="submit" value="Enviar" class="btn btn-info"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Crear Producto</button>

  		</form>

  	</div>


</body>
</html>
