<?php 
    #função para imprimir elementos de um vetor indexado
    function imprimirValoresDeVetor($vetor){
        echo "Existem ".count($vetor)." elementos neste vetor:<br>";
        for($i=0;$i<count($vetor);$i++){
            echo $vetor[$i]."<br>";
        }
    }
    $vetor=array("banana","morango","loengo","turanja","laranja");
    imprimirValoresDeVetor($vetor);

    $vetor[5]="goiaba";
    imprimirValoresDeVetor($vetor);

    #exemplo de vetor associativo
    function associativeVector($vetor){
        echo "<br>";
        foreach($vetor as $chave=>$valor){
            echo $chave." tem ".$valor." anos <br>";
        }
    }
    $idade=array("Pedro"=>"24","Fedilvio"=>"25", "Joel"=>"20");
    associativeVector($idade);

    #acrescentando valor ao array
    $idade['Eduardo']="50";
    associativeVector($idade);

    
?>