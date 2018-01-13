<?php
require_once("clases/ingresos.php");
require_once("clases/conexion.php");

$query4 = "SELECT  idProveedor, nombreProveedor from Proveedor;";
$resultado4=$mysqli->query($query4);

if (isset($_POST["search"])) {
  $u = new Entradas();
  $u->ingresar();

}

?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>..::Entradas::..</title>

<!--Snipets-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="js/funciones.js" type="text/javascript"></script>

<!--Calcula Precio Unitario Funcion-->
    <script type="text/javascript" >
       function cal() {
       try {
        var a = parseInt(document.form.precio.value),
            b = parseInt(document.form.cantidad.value);
        document.form.unitario.value = a/b;
        
    } catch (e) {
  }
}
</script>
<!--Calcula Precio Unitario Funcion FIN-->
</head>

<body>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Ingresos</li>
  </ol>
</nav>

  <div class="container" name="container">
        

    <div class="panel panel-primary">
          <div class="panel-heading">
             <h3 class="panel-title"><center><strong>Entradas</strong></center></h3>
          </div>
    <div class="panel-body">

    <!--Inicia Formulario-->

    <form name="form" action="" method="post">

      <div class="form-group col-md-4">
          <label for="codigo"> Codigo Producto</label>
          <input class="form-control" type="text" autocomplete="off" name="search" id="search">
      </div>


      <div class="form-group col-md-2">
          <label for="codigo"> Cantidad: </label>
          <input class="form-control" type="number" required name="cantidad" value="0" id="cantidad" onchange="cal()">
      </div>

      <div class="form-group col-md-2">
          <label for="codigo">  Precio Total: </label>
          <input class="form-control" type="number" name="precio" id="precio" value="0" onchange="cal()">
      </div>

     <!-- <div class="form-group col-md-2">
          <label for="codigo">  Precio Unitario: </label>-->
            <input class="form-control" type="hidden" name="unitario" value="0" readonly="readonly" />
      <!--</div>-->

           <p class="form-group col-md-3">
        <label for="categoria">Proveedor:</label>
        <select class="form-control" name="proveedor" id="proveedor">
          <option value="0"> Seleccione Proveedor</option>
          <?php while($row = $resultado4->fetch_assoc()) {?>
            <option value="<?php echo $row['idProveedor'];?>" ><?php echo $row['nombreProveedor'];?></option>
            <?php } ?>
        </select>
      </p>

      <div class="form-group col-md-1">
          <label for="codigo">Bodega: </label>
          <input class="form-control" type="number" required name="bodega" id="bodega" max="2" autocomplete="off">
      </div>

<center>
<div>
      <div class="form-group col-md-3">
          <label for="codigo">sku Proveedor: </label>
          <input class="form-control" type="text" required name="sku" id="sku" autocomplete="off">
      </div>

      <div class="form-group col-md-2">
          <label for="codigo">CFF: </label>
          <input class="form-control" type="text" name="cff" id="cff"  autocomplete="off">
      </div>

</div>     

</center>


      <button type="submit" value="Enviar" class="btn btn-primary btn-lg btn-block"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Agregar Entrada</button>

   

      </form>

   <div class="col-md-10 " id="result">
   </div>
</form>
      
    </div>
    </div>
    </div>




   </body>
   </html>


