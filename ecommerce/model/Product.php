<?php

class Product{
	
	private $id;
	private $name;
	private $description;
	private $preis;
	private $image;

	public function __construct($id=null,$name=null,$description=null,$preis=0.0, $image=null){
		$this->id = $id;
		$this->name = $name;
		$this->description = $description;
		$this->preis = $preis;
		$this->image = $image;
	}
	
	public function getId(){
		return $this->id;	
	}
	
	public function getName(){
		return $this->name;	
	}
	
	public function getDescription(){
		return $this->description;	
	}
	
	public function getPreis(){
		return $this->preis;	
	}
	
	public function getImage(){
		return $this->image;	
	}
	

}