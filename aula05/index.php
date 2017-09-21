<?php  
	include_once 'class/ContaBanco.php';
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
			$c1 = new ContaBanco(13107, 'cc', 'Pedro H');
			print_r($c1);
		?>
	</pre>
</body>
</html>