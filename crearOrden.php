<?php
require_once("clases/ordenes.php");
require_once("clases/conexion.php");

$query6 = "select idMecanico, nombre from Mecanico;";
$resultado6=$mysqli->query($query6);

//($datos);exit;**/
if (isset($_POST["idorden"])) {
	$u = new Ordenes();
	$u->crearOrden();

}

?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>..::Crear Orden::..</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

	<div class="container" >
		<ol class="breadcrumb">
 	    	<li><a href="index.php">Home</a></li>
        <li><a href="ordenesProduccion.php">Ordenes de Producción</a></li>
        <li class="active">Ordenes</li>
        </ol>
 
		<div class="panel panel-success">
        	<div class="panel-heading">
    			<h3 class="panel-title"><center><strong>CREAR ORDENES DE PRODUCCION</strong></center></h3>
  			</div>
  		<div class="panel-body">

  		<form name="form" action="" method="post">

  		<div class="form-group col-md-6">
  			<label for="idorden">Código de Orden: </label>
  			<input class="form-control" type="text" name="idorden" id="idorden" autocomplete="off">
  		</div>

  		<p class="form-group col-md-6">
  			<label for="categoria">Elija Mecanico:</label>
				<select class="form-control" name="mecanico" id="mecanico">
					<option value="0"> Seleccione Mecanico</option>
					<?php while($row = $resultado6->fetch_assoc()) {?>
						<option value="<?php echo $row['idMecanico'];?>" ><?php echo $row['nombre'];?></option>
						<?php } ?>
				</select>
  		</p>



  		<p class="form-group col-md-12" >
  			<label for="equipo"> Equipo: </label>
  			<input type="text" name="equipo" class="form-control">
  		</p>

      <p class="form-group col-md-6">
        <label for="medida">Medidas: </label>
        <input type="text" name="medida" id="medida" class="form-control">
      </p>

      <p class= "form-group col-md-6" >
        <label for="cliente"> Cliente: </label>
        <input type="text" name="cliente" class="form-control">
      </p>

  		<button type="submit" value="Enviar" class="btn btn-primary btn-lg btn-block"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Crear Orden</button>

  		</form>

  	</div>


</body>
</html>
