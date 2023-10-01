<?php 
    $myFile=fopen("webdictionary.txt", "r+") or die("Incapaz de abrir o ficheiro");
    echo fread($myFile,filesize("webdictionary.txt")); 
    fclose($myFile);
?>