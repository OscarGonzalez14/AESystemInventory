<?php
require_once("conectar.php");

/**
*
*/
class Salidas extends Conectar
{
	private $db;

	public function __construct()
	{
		$this->db=parent::conectar();
		parent::setNames();
	}


	public function insertar()
	{
		$sql="insert into detalleSalida
		values
		 (null, CURRENT_TIMESTAMP,'".($_POST["cantidad"])."',(select AVG(PrecioEntrada) from detalleEntradas),
		 '".$_POST["search"]."','".$_POST["orden"]."');";
		 $this->db->query($sql);
	}
}





