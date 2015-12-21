<?php

class IndexController{
	private $title;
	private $head;
	private $content = '';
	public function __construct(){
		$this->title = get_class($this);
		$this->head = "E-Commerce";
	}
	
	public function index(){
		$this->addContent('view/index.php');	
	}
	
	public function addContent($file){
		$this->content .= $this->includeToVar($file);	
	}
	
	public function includeToVar($file){
	    ob_start();
	    include_once($file);
	    return ob_get_clean();
	}
	
	protected function save($dataobject, $file){
		$serialize = serialize($dataobject);	
		file_put_contents($file, $serialize);
	}
	
	protected function loadInArray($path, &$array){
		foreach(glob($path.'/*.inc') as $file){
			$array[] = $this->load($file);
		}		
	}
	
	protected function load($file){
		return Helper::load($file);
	}
	
	public function __destruct(){
		include __DIR__ . '/../layout/layout.php';	
	}
}