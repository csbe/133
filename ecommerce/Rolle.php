<?php

class Rolle{
	
	private $id;
	private $name;

	public function __construct($id=null,$name=null){
		$this->id = $id;
		$this->name = $name;
	}
	
	public function getId(){
		return $this->id;	
	}
	
	public function getName(){
		return $this->name;	
	}

}