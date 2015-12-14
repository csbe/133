<form action="#" method="post">
	<input type="text" name="user">
	<input type="password" name="pass">
	<input type="submit" value="login">
</form>

<?php
	session_start();

	if(isset($_GET['logout'])){
		session_unset();
	}

	if(isset($_SESSION['expire']) &&
			$_SESSION['expire']<time()) {
		session_unset();
		echo "sie wurden abgemeldet!";
	}
	
	if(isset($_POST['user'])){
		if($_POST['user'] == "max" &&
			$_POST['pass'] == "muster") {
			$_SESSION['login'] = true;
			$_SESSION['user'] = $_POST['user'];
			$_SESSION['expire'] = time()+15;
			echo "Login erfolgreich";
		}else {
			$_SESSION['login'] = false;
			echo "Login nicht erfolgreich";
		}
	}
	
	if(isset($_SESSION['login']) && 
			$_SESSION['login']){
		echo '<a href="?logout">Logout</a>';	
	}
	
	/*
	if(!isset($_SESSION['test'])) {
		echo "session wird gesetzt";
		$_SESSION['test'] = 5;
	}
		
	echo $_SESSION['test'];	*/
	
?>	