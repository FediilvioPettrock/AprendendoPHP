<?php
#RETORNAR O TAMANHO DE UMA STRING 
echo strlen("Hello WORLD!"); 
echo "<br>";


#CONTAR O NUMERO DE PALAVRAS EM UMA STRING
echo str_word_count("HELLO WORD");
echo "<br>";

#REVERTER STRING
echo strrev("HELLO WORLD!");
echo "<br>";

#ENCONTRAR UMA SUBSTRING DENTRO DE UMA STRING. CASO ENCONTRE, RETORNA A PRIMEIRA POSICAO ENCONTRADA, CASO NAO, RETORNA FALSE
echo strpos("HELLO WORLD","WORLD");
echo "<br>";

#SUBISTITUIR SUBSTRING DENTRO DE UMA STRING
echo str_replace("WORLD", "DOLLY","HELLO WORLD");
echo "<br>";

?>

