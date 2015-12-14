<!doctype html>
<html>
	<head>
		<title>Loginform</title>
		<meta charset="UTF-8">	
		<link rel="stylesheet" href="../example/style.css">
		<link rel="stylesheet" href="../example/mobile.css" media="(max-width:200px)">
	</head>
	<body>
		<header>
			<h1>Login</h1>		
		</header>
		<div>
			<form action="login.php" method="post">
				<label for="user">Username</label>
				<input type="text" name="user" id="user" required>
				<br>
				<label for="password">Password</label>
				<input type="password" name="password" id="password" required>
				<br>
				<a href="registerform.php">Registrieren</a><br>
				<input type="submit" value="login">
			</form>
		</div>
	</body>
</html>