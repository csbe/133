<!doctype html>
<html>
	<head>
		<title>Registerform</title>
		<meta charset="UTF-8">	
		<link rel="stylesheet" href="../style.css">
		<link rel="stylesheet" href="../mobile.css" media="(max-width:200px)">
	</head>
	<body>
		<header>
			<h1>Login</h1>		
		</header>
		<div>
			<form action="register.php" method="post">
				<label for="user">Username</label>
				<input type="text" name="user" id="user" required>
				<br>
				<label for="password">Password</label>
				<input type="password" name="password" id="password" required><br>
				<label for="password2">Password</label>
				<input type="password" name="password2" id="password2" required>
				<br>
				<a href="loginform.php">Zur&uuml;ck zum Login</a><br>
				<input type="submit" value="register">
			</form>
		</div>
	</body>
</html>