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
		 (null, CURRENT_TIMESTAMP,'".($_POST["cantidad"])."','".$_POST["precio"]."',
		 '".$_POST["search"]."','".$_POST["orden"]."');";
		 $this->db->query($sql);
	}
}





