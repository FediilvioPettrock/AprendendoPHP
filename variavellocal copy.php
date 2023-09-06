<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variavelocal</title>
</head>
<body>
    <?php
    function myFunction(){
    $x="fedilvio";
    echo $x;
    }

    myFunction();
    
    #aqui vai dar erro pois a variavel é local e estamos a tentar acessar aartir de fora da função
    echo $x;
    ?>
</body>
</html>