<?php
	if(isset($_GET['controller'])){
		include_once 'controller/'.$_GET['controller'].'Controller.php';
		$cname = $_GET['controller'].'Controller';
		$controller = new $cname();
		if(isset($_GET['action'])) {		
			$controller->$_GET['action']();
		}
		//$controller->liste();
	}else{
		echo "Standartseite aufgerufen";	
	}

	
	//$controller = new RolleController();
	//$controller->liste();


	/*include_once 'Rolle.php';
	include_once 'Account.php';
	
	$rollea = new Rolle(1,'Admin');
	$rollek = new Rolle(2,'Kunde');
	//echo $rolle->getName();
	$accounts = array();
	$accounts[] = new Account(1,"Buchs", "Enrico", "ebuchs", "sagichnicht",$rollea);
	$accounts[] = new Account(2,"Steffen", "Carlos", "mexicho", "mafia",$rollek);
	
	foreach($accounts as $account){
		var_dump($account);		
		
		echo $account->getName() . ' ' . $account->getRolle()->getName() . '<br>';	
	}	*/	
	
?>