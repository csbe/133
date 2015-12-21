<?php

include_once 'Product.php';

class Warenkorb{
	private $products = array();

	public function __construct(){
			
	}
	
	public function get(){
		return $this->products;	
	}

	public function add($product, $count){
		if(isset($this->products[$product->getName()])) {
			$this->products[$product->getName()] = array('article'=>$product,'anzahl'=>$this->products[$product->getName()]['anzahl']+$count);
		}else {
			$this->products[$product->getName()] = array('article'=>$product,'anzahl'=>$count);
		}
	}
	
	public function remove($product){
		unset($this->products[$product->getName()]);	
	}

}