<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <nav class="navbar navbar-default" role="navigation">
<!-- El logotipo y el icono que despliega el menú se agrupan
   para mostrarlos mejor en los dispositivos móviles -->
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse"
        data-target=".navbar-ex1-collapse">
  <span class="sr-only"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="index.php">Logotipo</a>
</div>

<!-- Agrupar los enlaces de navegación, los formularios y cualquier
   otro elemento que se pueda ocultar al minimizar la barra -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
<ul class="nav navbar-nav">
    <li class="active"><a href="listadoProductos.php"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Ver Productos</a></li>
    <li class="active"><a href="agregaProducto.php"><span class="glyphicon glyphicon-pencil" aria-hidden="false"></span> Crear Productos</a></li>
    <li class="active"><a href="detalleIngresos.php"><span class="glyphicon glyphicon-save" aria-hidden="false"></span> Ingresos</a></li>
    <li class="active"><a href="agregaProducto.php"><span class="glyphicon glyphicon-export" aria-hidden="false"></span> Salidas</a></li>
    <li><a href="#">Reportes</a></li>
<!--  <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
      Menú #1 <b class="caret"></b>
    </a>
    <ul class="dropdown-menu">
      <li><a href="#">Acción #1</a></li>
      <li><a href="listadoProductos.php">listadoProductos</a></li>
      <li><a href="#">Movimientos</a></li>
      <li class="divider"></li>
      <li><a href="#">Reportes</a></li>
      <li class="divider"></li>
      <li><a href="#"></a></li>
    </ul>
  </li>-->
</ul>

<form class="navbar-form navbar-left" role="search">
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Buscar en AESystemInventory">
  </div>
  <button type="submit" class="btn btn-default">Buscar</button>
</form>


  </li>
</ul>
</div>
</nav>
  </body>
</html>
