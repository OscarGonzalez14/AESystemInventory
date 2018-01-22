<?php
require_once("clases/salidas.php");
require_once("clases/conexion.php");

$query3 = "SELECT idOrden FROM ordenProduccion order by fechaCreacion DESC";
$resultado3=$mysqli->query($query3);

if (isset($_POST["search"])) {
  $u = new Salidas();
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
<script>
function validateForm() {
    var x = document.forms["form"]["cantidad"].value;
   
    if (x ==0) {
        alert("Ya no hay de este producto");
        return false;
    }
}
</script>
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

  		<form name="form" action="" method="post" onsubmit="return validateForm()">

			<div class="form-group col-md-2">
    			<label for="codigo"> Codigo Producto</label>
    			<input class="form-control" type="text" autocomplete="off" name="search" id="search">
  		</div>


      <div class="form-group col-md-3">
          <label for="codigo"> Cantidad: </label>
          <input class="form-control" type="text" required name="cantidad" id="cantidad">
      </div>

      <!--<div class="form-group col-md-3">
          <label for="codigo"> Precio de Salida: </label>
          <input class="form-control" type="text" name="precio" id="precio">
      </div>

      <div class="form-group col-md-6">
          <label for="codigo"> Orden: </label>
          <input class="form-control" type="text" name="orden" id="orden">
      </div>-->
      <p class="form-group col-md-3">
        <label for="categoria">Orden:</label>
        <select class="form-control" name="orden" id="categoria">
          <option value="0"> Seleccione Orden</option>
          <?php while($row = $resultado3->fetch_assoc()) {?>
            <option value="<?php echo $row['idOrden'];?>" ><?php echo $row['idOrden'];?></option>
            <?php } ?>
        </select>
      </p>


  		<button type="submit" value="Enviar" class="btn btn-primary btn-lg btn-block"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Agregar Salida</button>

  		</form>

   <div class="col-md-10 " id="result">
   </div>
      
    </div>
    </div>         
    </div>

 <!--<?php
//require_once("ordenesProduccion.php");

 ?>-->


</body>
</html>
