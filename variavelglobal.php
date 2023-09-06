<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicios</title>
</head>
<body>
    <?php

    $teste="fedilvio";

    //dentro de uma função a variavel x não será reconhecida pois ela é uma variável global
    function myTest(){    
        echo "variavel x tem o valor: $teste";
    }

    myTest();

    echo"variavel x tem o valor : $teste";
    
    ?>
</body>
</html>