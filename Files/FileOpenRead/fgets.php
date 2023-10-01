<?php 
$myFile=fopen("webdictionary.txt","r") or die ("Erro abrindo o ficheiro!");

while(!feof($myFile)){
    echo fgets($myFile);
}
fclose($myFile);
?>