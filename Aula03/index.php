<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Aula02 POO PHP</title>
</head>
<body>
    <pre>
    <?php 

require_once 'Caneta.php';
$c1 = new Caneta;
$c1->modelo = "BIC Cristal";
$c1->cor = "Azul";
print_r($c1);
$c1->rabiscar() ;
    ?>
    </pre>
</body>
</html>