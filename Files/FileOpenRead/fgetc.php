<?php 
$myFile=fopen("webdictionary.txt","r") or die("Erro ao Abrir o ficheiro"); 

while(!feof($myFile)){
    echo fgetc($myFile);
}
fclose($myFile);
?>