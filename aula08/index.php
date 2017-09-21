<?php  
	include_once 'class/Lutador.php';
	include_once 'class/Luta.php';
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
			$l[0] = new Lutador('Pretty Boy', 'França', 31, 1.75, 68.9, 11, 2, 1);
			$l[1] = new Lutador('Putscript', 'Brasil', 21, 1.68, 57.8, 14, 2, 3);
			$l[2] = new Lutador('SnapShadow', 'EUA', 35, 1.65, 80.9, 12, 2, 1);
			$l[3] = new Lutador('Dead Code', 'Austrália', 28, 1.93, 81.6, 13, 0, 2);

			$UEC01 = new Luta();
			$UEC01->marcarLuta($l[0], $l[1]);
			$UEC01->lutar();
		?>
	</pre>
</body>
</html>