<?php
include_once 'model/Rolle.php';

class RolleController{

	private $rollen = array();

	public function __construct(){
		echo "Rolle Controller Aufgerufen!";
		$this->rollen[] = new Rolle(1,'Admin');
		$this->rollen[] = new Rolle(2, 'Kunde');	
	}
	
	public function liste(){
		echo "Rolle Liste Aufgerufen!";
		include 'view/rollenliste.php';	
	}
	
	public function erfassen(){
		echo "Rolle Liste Aufgerufen!";
		include 'view/rolleerfassen.php';	
	}
	
	public function speichern(){
		echo "Rolle wurde gespeichert";
		include 'view/rollenliste.php';	
	}
}

?>