<?php
require_once("conectar.php");

/**
*
*/
class Entradas extends Conectar
{
	private $db;

	public function __construct()
	{
		$this->db=parent::conectar();
		parent::setNames();
	}


	public function ingresar()
	{
		$sql="insert into detalleEntradas
		values
		 (null,CURRENT_TIMESTAMP,'".($_POST["search"])."','".$_POST["cantidad"]."','".$_POST["unitario"]."',
		 '".$_POST["bodega"]."','".$_POST["proveedor"]."','".$_POST["sku"]."','".$_POST["cff"]."');";
		 $this->db->query($sql);
	}
}
