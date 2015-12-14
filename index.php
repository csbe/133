<!doctype html>
<html>
	<head>
		<title>Modul 133</title>
		<meta charset="UTF-8">	
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="mobile.css" media="(max-width:200px)">
	</head>
	<body>
		<header>
			<h1>Modul 133</h1>		
		</header>
		<div>
			<form action="berechnen.php" method="post">
				<label for="name">Ihr Name</label>
				<input type="text" name="name" id="name" required>
				<br>
				<label for="zahl1">Zahl1</label>
				<input type="number" name="zahl1" id="zahl1" required min="1">
				<br>
				<label for="zahl2">Zahl2</label>
				<input type="number" name="zahl2" id="zahl2" required min="1">
				<br>
				<label for="addition">Addition</label>
				<input type="radio" value="add" name="operand" id="addition" required>
				<label for="subtraktion">Subtraktion</label>
				<input type="radio" value="sub" name="operand" id="subtraktion" required>
				<label for="multiplikation">Multiplikation</label>
				<input type="radio" value="mul" name="operand" id="multiplikation" required>
				<label for="division">Division</label>
				<input type="radio" value="div" name="operand" id="division" required>
				<br>
				<input type="submit" value="berechnen">
			</form>
		</div>
	</body>
</html>