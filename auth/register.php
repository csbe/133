<?php
	if(isset($_POST['user'])){
		if($_POST['password'] == $_POST['password2']){
			$fp = fopen("users.txt", 'a');
			fwrite($fp, $_POST['user'] . ':' . $_POST['password'] . "\n");
			fclose($fp);
			echo 'Erfolgreich gespeichert!';	
			header('Refresh: 3; URL=loginform.php');	
		}else {
			echo 'Passworte nicht identisch';
			header('Refresh: 3; URL=registerform.php');	
		}
		
	}
?>