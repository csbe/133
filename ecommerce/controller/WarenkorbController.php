<?php
session_start();
include_once 'model/Warenkorb.php';

class WarenkorbController{

	private $warenkorb;

	public function __construct(){
		$this->getWarenkorb();
	}	
	
	private function getWarenkorb(){
		//unset($_SESSION['warenkorb']);
		if(isset($_SESSION['warenkorb'])) {
			$this->warenkorb = unserialize($_SESSION['warenkorb']);
		}else {
			$this->warenkorb = new Warenkorb();
			$_SESSION['warenkorb'] = serialize($this->warenkorb);
		}
	}
	
	public function add(){
			$product = Helper::load('data/products/'.$_GET['id'].'.inc');
			$this->warenkorb->add($product,(isset($_GET['count']))?$_GET['count']:1);
			$_SESSION['warenkorb'] = serialize($this->warenkorb);
			$this->get();
	}
	
	public function get(){
			$this->getWarenkorb();
			include __DIR__ . '/../view/warenkorb.php';
	}
	
	public function remove(){
			$product = Helper::load('data/products/'.$_GET['id'].'.inc');
			$this->warenkorb->remove($product);
			$_SESSION['warenkorb'] = serialize($this->warenkorb);
			$this->get();
	}
	
}