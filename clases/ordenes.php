<?php
require_once("conectar.php");

/**
*
*/
class Ordenes extends Conectar
{
	private $db;

	public function __construct()
	{
		$this->db=parent::conectar();
		parent::setNames();
	}


	public function crearOrden()
	{
$sql="insert into ordenProduccion
		values
		 ('".$_POST["idorden"]."',CURRENT_TIMESTAMP,'".$_POST["equipo"]."',		 
		 '".$_POST["cliente"]."','".$_POST["mecanico"]."','".$_POST["medida"]."');";
		 $this->db->query($sql);;
	}
}