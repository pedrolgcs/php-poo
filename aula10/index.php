<?php  
	include_once 'class/Pessoa.php';
	include_once 'class/Aluno.php';
	include_once 'class/Professor.php';
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
			$p = new Pessoa('Pedro', 25, 'M');
			print_r($p);
			$a = new Aluno('Pedro', 23, 'M', 23213123, 'TI');
			print_r($a);
			$pro = new Professor('Janian', 22, 'F', 'ADM', 2300);
			print_r($pro);
		?>
	</pre>
</body>
</html>