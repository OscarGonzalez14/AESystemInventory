<?php 
if(!isset($_POST['search'])) exit('No se recibió el valor a buscar');

require ('../clases/conectaAjax.php');

function search()
{
  $mysqli = getConnexion();
  $search = $mysqli->real_escape_string($_POST['search']);
  $query = "SELECT nombreProducto,codProducto FROM Productos WHERE codProducto LIKE '%$search%' LIMIT 5";
  $res = $mysqli->query($query);
  while ($row = $res->fetch_array(MYSQLI_ASSOC)) {
  echo "<p><strong>$row[codProducto]</strong> $row[nombreProducto] </p>";

   
  }
}

search();