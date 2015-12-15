<?php
class Account{
	private $id;
	private $name;
	private $vorname;
	private $username;
	private $password;
	private $rolle;
	
	public function __construct($id=null,$name=null,$vorname=null, $username=null,$password=null, $rolle=null){
			$this->id = $id;
			$this->name = $name;
			$this->vorname = $vorname;
			$this->username = $username;
			$this->password = $password;
			$this->rolle = $rolle;
	}

	public function getId(){
		return $this->id;	
	}
	
	public function getName(){
		return $this->name;	
	}
	
	public function getVorname(){
		return $this->vorname;	
	}
	
	public function getUsername(){
		return $this->username;	
	}
	
	public function getPassword(){
		return $this->password;	
	}
	
	public function getRolle(){
		return $this->rolle;	
	}	
	
}

?>