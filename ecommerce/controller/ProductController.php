<?php
include_once 'model/Product.php';

class ProductController extends IndexController{

	protected $products = array();
	protected $path = 'data/products';

	public function __construct(){
		parent::__construct();
		$this->loadInArray($this->path, $this->products);
	}
	
	public function loeschen(){
			if(isset($_GET['id'])) {
				unlink($this->path. '/' . $_GET['id'] . '.inc');
				$this->products = array();
				$this->loadInArray($this->path, $this->products);
			}
			$this->liste();
	}
	
	public function liste(){
		$this->addContent('view/productliste.php');	
	}
	
	public function erfassen(){
		$this->product = new Product(0);
		if(isset($_GET['id'])) {
			$this->product = $this->load($this->path.'/'.$_GET['id'].'.inc');		
		}
		$this->addContent('view/producterfassen.php');
	}
	
	public function speichern(){
		if(isset($_POST['name'])) {
			if(isset($_POST['id']) && $_POST['id'] > 0) {			
				$id = $_POST['id'];
			}else{
				$id = count($this->products)+1;			
			}
			$product = new Product($id, $_POST['name'], $_POST['description'], $_POST['preis'], $this->upload($_POST['image']));
			$this->save($product, $this->path.'/'.$id.'.inc');
			$this->products = array();
			$this->loadInArray($this->path, $this->products);
		}
		$this->liste();
	}
	
	private function upload($img){
		$target_dir = "images/";
		$target_file = $target_dir . basename($_FILES["image"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		if(isset($_POST["id"]) && !empty($_FILES["image"]["name"])) {
		    $check = getimagesize($_FILES["image"]["tmp_name"]);
		    if($check !== false) {
		        //echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        //echo "File is not an image.";
		        $uploadOk = 0;
		    }
		    
		    // Check file size
			if ($_FILES["image"]["size"] > 500000) {
			    //echo "Sorry, your file is too large.";
			    $uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			    $uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			    //echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
			        //echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
			        return $target_file;
			    } else {
			        //echo "Sorry, there was an error uploading your file.";
			    }
			}
		}else {
			return $img;		
		}	
	}
}

?>