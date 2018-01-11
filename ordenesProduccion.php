<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>OrdenesProduccion</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/estilos.css" rel="stylesheet">
    <script src="jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="js/funcionOrdenes.js" type="text/javascript"></script>
</head>
<body>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Ordenes de Produccion</li>
  </ol>
</nav>
    <header>
      <div class="alert alert-info">
      <h3>ORDENES DE PRODUCCION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4:
      </div>
    

      <a href="crearOrden.php" class="btn btn-success "><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> <b>Crear orden</b></a>
    
      <!--</header>-->

    <div class="row">
      <div class="col-lg-6">
         <div class="input-group">
         <span class="input-group-btn">
          <button class="btn btn-secondary" type="button"><span class="glyphicon glyphicon-search"         aria-hidden="true"></span>
          </button>
      </span>
      <input type="text" class="form-control" id="busqueda" placeholder="Busque una orden...">
    </div>
  </div>
  </div>
  </header>
<hr/>
    <!--<section>
      <span class="glyphicon glyphicon-search" aria-hidden="true"></span><input type="text" name="busqueda" id="busqueda" placeholder="Buscar...">
    </section>-->

    <section id="tabla_resultado">
    <!-- AQUI SE DESPLEGARA NUESTRA TABLA DE CONSULTA -->
    </section


</body>
</html>