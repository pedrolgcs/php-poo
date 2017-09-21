<?php
    include_once 'class/Caneta.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
                $c1 = new Caneta('Bic', 'Azul', 0.5);
                print_r($c1);
            ?>
        </pre>
    </body>
</html>
