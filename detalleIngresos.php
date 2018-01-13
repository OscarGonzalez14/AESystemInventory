
<?php
require_once("navbar.php");
require_once("clases/salidas.php");
require_once("clases/conexion.php");
$query3 = "SELECT idOrden FROM ordenProduccion order by fechaCreacion DESC";
$resultado3=$mysqli->query($query3);

if (isset($_POST["search"])) {
  $u = new Salidas();
  $u->insertar();


?>



<html lang="es">

	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
		<script src="js/ingresosMultiples.js" type="text/javascript"></script>
		<script language="javascript" src="js/selectDinamicos.js" ></script>
		<script src="js/funciones.js" type="text/javascript"></script>

	</head>

	<body>
<!-- Formulario de Ingresos-->

	<div class="container">
		<div class="panel panel-primary">
				  <div class="panel-heading"><h4><center><strong>Ingresos</strong></center></h4></div>
				  <div class="panel-body">

			<form class="from-row" method="post">

				<table class="table bg-info"  id="tabla">
					<tr class="fila-fija">



					<td>
				<div class="form-group col-md-6">
    			<label for="codigo"> Codigo Producto</label>
    			<input class="form-control" type="text" autocomplete="off" name="search" id="search">
  				</div>
					</td>




<!--Campo Cantidad-->

				<td>
				      <div class="form-group col-md-6">
          <label for="codigo"> Cantidad: </label>
          <input class="form-control" type="text" required name="cantidad" id="cantidad">
      </div>
				</td>
<!--Campo PrecioEntrada-->

				<td>      <div class="form-group col-md-6">
          <label for="codigo"> Precio de Salida: </label>
          <input class="form-control" type="text" name="precio" id="precio">
      </div>
				</td>
<!--Campo Bodega-->

<td>
    <p class="form-group col-md-6">
        <label for="categoria">Orden:</label>
        <select class="form-control" name="orden" id="categoria">
          <option value="0"> Seleccione Orden</option>
          <?php while($row = $resultado3->fetch_assoc()) {?>
            <option value="<?php echo $row['idOrden'];?>" ><?php echo $row['idOrden'];?></option>
            <?php } ?>
        </select>
      </p>
</td>

<!--Boton Eliminar-->

<td class="eliminar"><div class="row">
		<div class="col-lg-18">
			<label for="eliminar">&nbsp;&nbsp;</label>
				<div class="input-group">
							<span class="input-group-btn"></span>
							<!--<input type="button" value="Menos">-->
							<button type="button" class="btn btn-danger" value="Menos"><strong> <strong><span class="glyphicon glyphicon-minus-sign" aria-hidden="true">
							</span></button>



				</div>
		</div>
</td>


</tr>
				</table>

				<div class="btn-der">
					<button id="adicional" name="adicional" type="button" class="btn btn-success"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
						<strong>Agregar Entrada</strong></button>
					<button type="submit" name="insertar" class="btn btn-primary "><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
						 <strong>Guardar</strong></button>



				</div>
			</form>

			   <div class="col-md-10 " id="result">
   </div>

  </div>
</div>
</div>


		</section>

	</body>

</html>
