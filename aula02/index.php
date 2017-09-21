<?php
	require_once 'class/caneta.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$c1 = new Caneta();
		$c1->modelo = "Bic";
		$c1->cor = "Azul";
		$c1->ponta = 0.5;
		$c1->tampada = false;
		print_r($c1);
		$c1->rabiscar();
		echo "<hr>";
		$c1->tampar();
		print_r($c1);
		$c1->rabiscar();
	?>
</body>
</html>
