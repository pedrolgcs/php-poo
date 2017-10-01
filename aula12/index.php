<?php  
	include_once 'class/Mamifero.php';
	include_once 'class/Reptil.php';
	include_once 'class/Peixe.php';
	include_once 'class/Cachorro.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>aula 12</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<pre>
		<?php  
			$m = new Mamifero(100, 23, 4, 'Marrom');
			$r = new Reptil(3, 10, 4, 'Verde');
			$p = new Peixe(3, 1, 2, 'Azul');
			$c = new Cachorro(100, 23, 4, 'Marrom');
		?>
	</pre>	
</body>
</html>