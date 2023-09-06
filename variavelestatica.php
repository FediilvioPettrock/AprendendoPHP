
    <?php
     function myFuction(){
        static $x=0;
        echo "<br>";
        echo $x;
        $x++;
     }

     #neste caso serão impressos os valores 0,1,2 pois x vai incrementar sempre que a função for for chamada
     myFuction();
     myFuction();
     myFuction();
     
    ?>



