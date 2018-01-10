<?php

require_once("clases/salidas.php");
if (isset($_POST["codproducto"])) {
  $u = new Saidas();
  $u->insertar();

}

?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>..::Salidas::..</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="js/funciones.js" type="text/javascript"></script>
</head>
<body>

	<div class="container" >
		<ol class="breadcrumb">
 	    	<li><a href="index.php">Home</a></li>
        	<li class="active">Detalle Salidas</li>
        </ol>

		<div class="panel panel-primary">
        	<div class="panel-heading">
    			<h3 class="panel-title"><center><strong>Salidas</strong></center></h3>
  			</div>
  		<div class="panel-body">

  		<form name="form" action="" method="post">

			<div class="form-group col-md-6">
    			<label for="producto"> Codigo Producto</label>
    			<input class="form-control" type="text" name="codproducto" id="codproducto">
  		</div>


      <div class="form-group col-md-6">
          <label for="cantidad"> Cantidad: </label>
          <input class="form-control" type="text" name="cantidad" id="cantidad">
      </div>

      <div class="form-group col-md-6">
          <label for="precio"> Precio de Salida: </label>
          <input class="form-control" type="text" name="precio" id="precio">
      </div>

      <div class="form-group col-md-6">
          <label for="orden"> Orden: </label>
          <input class="form-control" type="text" name="orden" id="orden">
      </div>


  		<button type="submit" value="Enviar" class="btn btn-primary btn-lg btn-block"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Agregar Salida</button>

  		</form>

    <div class="col-md-3 " id="result">
    </div>
      
    </div>
    </div>         
    </div>




</body>
</html>
