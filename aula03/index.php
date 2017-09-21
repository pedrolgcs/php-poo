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
	<pre>
	<?php
		$c1 = new Caneta();
		$c1->modelo = 'Bic cristal';
		$c1->cor = "Azul";
		$c1->tampar();
		print_r($c1);
		$c1->rabiscar();
	?>
	</pre>
</body>
</html>
