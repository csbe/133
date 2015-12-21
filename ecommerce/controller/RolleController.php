<?php
include_once 'model/Rolle.php';

class RolleController extends IndexController{

	protected $rollen = array();
	protected $path = 'data/roles';

	public function __construct(){
		parent::__construct();
		$this->loadInArray($this->path, $this->rollen);
	}
	
	public function loeschen(){
			if(isset($_GET['id'])) {
				unlink($this->path. '/' . $_GET['id'] . '.inc');
				$this->rollen = array();
				$this->loadInArray($this->path, $this->rollen);
			}
			$this->liste();
	}
	
	public function liste(){
		$this->addContent('view/rollenliste.php');	
	}
	
	public function erfassen(){
		$this->role = new Rolle(0,'');
		if(isset($_GET['id'])) {
			$this->role = $this->load($this->path.'/'.$_GET['id'].'.inc');		
		}
		$this->addContent('view/rolleerfassen.php');
	}
	
	public function speichern(){
		if(isset($_POST['name'])) {
			if(isset($_POST['id']) && $_POST['id'] > 0) {			
				$id = $_POST['id'];
			}else{
				$id = count($this->rollen)+1;			
			}
			$rolle = new Rolle($id, $_POST['name']);
			$this->save($rolle, $this->path.'/'.$id.'.inc');
			$this->rollen = array();
			$this->loadInArray($this->path, $this->rollen);
		}
		$this->liste();
	}
}

?>