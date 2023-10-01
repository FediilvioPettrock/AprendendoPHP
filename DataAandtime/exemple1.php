<?php 

date_default_timezone_set("Africa/Luanda"); #define a hora uma determinada zona
    #dates
    echo "Today is ". date("d/m/y")."<br>"; //dia(numero), mes(numero), ano(numero de dois digitos)
    echo "Today is ". date("D/M/Y")."<br>"; //dia(da semana), mes( por extenço), ano(todos digitos)

    echo "Today is ". date("Y.m.d")."<br>"; 
    echo "Today is ". date("Y-m-d")."<br>";
    echo "Today is ". date("l")."\n"; // dia da semana
    echo "it's ".date("h:i:s"); #hora minutos segundos


    $d=mktime(11, 14, 54, 8, 12, 2014);
    echo date("d:m:y",$d);
?>