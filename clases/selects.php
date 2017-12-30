<?php
require_once("conectar.php");
/**
 *
 */
class selectores extends Conectar
{
  private $selects;

  publicfunction __construct()
  {
    # code...
    $this->selects=parent::conectar();
    parent::setNames();
  }

  public funtion getCategorias(){
    $sql="
    select nombreCategoria from  Categoria;
		";
		$datos = $this->selects->query($sql);
		$arreglo = array();
		while ($reg=$datos->fetch_object()) {
			# code...
			$arreglo[]=$reg;

		}
		return $arreglo;
}


?>
