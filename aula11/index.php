<?php  
	include_once 'class/Pessoa.php';
	include_once 'class/Visitante.php';
	include_once 'class/Aluno.php';
	include_once 'class/Bolsista.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>aula 11</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<pre>
		<?php
			$visitante = new Visitante('Carlos', 23, 'M');
			$aluno = new Aluno('Pedro', 25, 'M', 201210, 'T.I');
			$bolsista = new Bolsista('Janaina', 22, 'F', 201510, 'ADM', 765.54);
		?>
	</pre>
</body>
</html>