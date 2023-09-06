<?php 
#informações de estudantes
$estudantes=array(
array("Fedilvio Petrok "," 22 "," E.Informática "),
array("Caculo Miguel "," 28 "," G.Informática "),
array("Vivaldo Manuel "," 29 "," Contabilidade "),
);

    for($i=0;$i<3;$i++){
        for($j=0;$j<3;$j++){
            echo $estudantes[$i][$j];
        }
        echo "<br>";
    }

    echo "<br><br>";

    for($i=0;$i<3;$i++){
       echo "<p><h1>Estudante numero $i </h1></p>"; 
       echo "<ul>";
        for($j=0;$j<3;$j++){
            echo "<li>".$estudantes[$i][$j]."</li>";
        }
        echo "</ul>";
        echo "<br>";
    }
?>