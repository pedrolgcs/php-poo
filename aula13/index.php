<?php  
	include_once 'class/Mamifero.php';
	include_once 'class/Lobo.php';
	include_once 'class/Cachorro.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>aula 13</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<pre>
		<?php  
			$m = new Mamifero(30, 2, 4, 'Marrom Claro');
			$l = new Lobo(22, 10, 4, 'Cinza');
			$c = new Cachorro(10, 5, 4, 'Preto');

			$m->emitirSom();
			$l->emitirSom();
			$c->emitirSom();
		?>
	</pre>	
</body>
</html>