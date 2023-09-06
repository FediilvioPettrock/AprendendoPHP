<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variavelocal</title>
</head>
<body>
    <?php
    $x=10; $y=5;

    function myFunction(){
    global $x,$y; //x e y odem ser acessados e alterados dentro dessa função
    $y=$x+$y;
    }

    myFunction();
    
    //o valor será 15 pois y foi acessado e mudado seu valor dentro da função myFunction
    echo $y;
    ?>
</body>
</html>