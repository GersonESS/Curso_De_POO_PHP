<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Aula02 POO PHP</title>
</head>
<body>
    <?php 
        require_once 'Caneta.php';
        $c1 = new Caneta;
        $c1->cor = "Azul";
        $c1->ponta = 0.5;
        $c1->tampar();
        $c1->rabiscar();
        print_r($c1);
        echo "<br/>";
        $c2 = new Caneta;
        $c2->cor = "Verde";
        $c2->carga = 50;
        $c2->ponta = 0.5;
        $c2->destampar();
        $c2->rabiscar();
        print_r($c2);
        //var_dump($c1);
    ?>
</body>
</html>