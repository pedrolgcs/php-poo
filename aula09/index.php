<?php  
	include_once 'class/Pessoa.php';
	include_once 'class/Livro.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<pre>
		<?php  
			$pedro = new Pessoa('Pedro H', 24, 'M');
			$livro = new Livro('Dracula', 'Van D.', 550, $pedro);
		?>
	</pre>
</body>
</html>