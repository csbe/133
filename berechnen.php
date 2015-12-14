<!doctype html>
<html>
	<head>
		<title>Modul 133 - berechnen</title>
		<meta charset="UTF-8">	
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="mobile.css" media="(max-width:200px)">
	</head>
	<body>
		<header>
			<h1>Modul 133 berechnen</h1>		
		</header>
		<div>
			<?php
				session_start();
				if(isset($_POST['name'])) {
					$_SESSION['name'] = $_POST['name'];
					$oper;					
					switch($_POST['operand']) {
						case 'add': $oper = '+'; break;
						case 'sub': $oper = '-'; break;
						case 'mul': $oper = '*'; break;
						case 'div': $oper = '/'; break;					
					}
					$_SESSION['rechnung'] = (isset($_SESSION['rechnung']))? $_SESSION['rechnung'] : array();		
					$_SESSION['rechnung'][$_SESSION['name']] = (isset($_SESSION['rechnung'][$_SESSION['name']]))?$_SESSION['rechnung'][$_SESSION['name']]:array(); 			
					$res = $_POST['zahl1'] . $oper . $_POST['zahl2'];
					eval('$x='.$res.';');
					$_SESSION['rechnung'][$_SESSION['name']][] .= $res . '=' . $x;
					echo $_SESSION['name'] . '<br>';
					echo implode('<br>', $_SESSION['rechnung'][$_SESSION['name']]);			
				}else if(isset($_SESSION['name'])) {
					echo $_SESSION['name'] . '<br>';	
					echo implode('<br>', $_SESSION['rechnung'][$_SESSION['name']]);			
				}
			?>
			<br>
			<a href="index.php">Zur&uuml;ck zum Formular</a>
		</div>
	</body>
</html>