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
			select p.codProducto,nombreProducto,p.Descripcion, sum(cantidad) as cantidad from Productos p join detalleEntradas e where p.codProducto=e.codProducto group by codProducto;
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
		 '".$_POST["stock"]."','".$_POST["precio"]."', '".$_POST["fecha"]."',
		 '".$_POST["categoria"]."','".$_POST["proveedor"]."','".$_POST["sku"]."');";
		 $this->db->query($sql);
	}
}


?>
