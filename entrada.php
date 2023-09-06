<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrada</title>
    <link rel="stylesheet" href="entrada.css">

    
</head>
<body>
    <form action="soma.php" method="post">
        <div class="entradas">

       
                 <label for="entrada1"> Entrada1</label>
                <input type="text" name="entrada1" id="Entrada1">
          
           
       
                <label for="entrada2">Entrada2</label>
                <input type="text" name="entrada2" id="Entrada2">
         
       
        
        <input type="submit" id="send" value="enviar">
        </div>

        <?php
        session_start();
        if(isset($_SESSION['resultado'])){
             echo "<div class='respostas'>
             <label for='resposta'>Resposta</label>
             <input type='text' name='resposta' id='resosta' value='{$_SESSION['resultado']}' readonly>
             </div>";
        }

        ?>
         
       

    </form>
</body>
</html>