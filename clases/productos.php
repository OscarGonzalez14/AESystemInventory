<?php
require_once("conectar.php");

/**
*
*/
class Productos extends Conectar
{
	private $db;

	public function __construct()
	{
		$this->db=parent::conectar();
		parent::setNames();
	}

		public function getDatos()
	{
		$salida="";
		$sql="
			select codProducto, nombreProducto, Descripcion, Existencia from Productos group by codProducto;
		";

		$datos = $this->db->query($sql);
		$arreglo = array();
		while ($reg=$datos->fetch_object()) {
			# code...
			$arreglo[]=$reg;

		}
		return $arreglo;
	}
	public function insertar()
	{
		$sql="insert into Productos
		values
		 ('".$_POST["codigo"]."','".$_POST["nombre"]."','".$_POST["descripcion"]."',
		 0, CURRENT_TIMESTAMP,
		 '".$_POST["categoria"]."',0,'".$_POST["stock"]."');";
		 $this->db->query($sql);
	}
}


?>
