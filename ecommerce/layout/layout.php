<!doctype html>
<html>
	<head>
		<title><?php echo $this->title ?></title>	
		<meta charset="UTF-8">
		<link rel="stylesheet" href="style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	</head>
	<body>
		<header>
			<h1><?php echo $this->head ?></h1>
		</header>
		<div>
			<?php
				echo $this->content;
			?>
			<aside id="warenkorb">
				<?php
					$warenkorb = new WarenkorbController();
					$warenkorb->get();
				?>			
			</aside>		
		</div>
		<footer>
			&copy; 2015 by Enrico Buchs		
		</footer>	
	</body>
</html>