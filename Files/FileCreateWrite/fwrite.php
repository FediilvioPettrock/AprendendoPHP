<?php 
$myFile=fopen("newfile.txt","w");
$txt="Fedilvio Petrock\n";
fwrite($myFile,$txt);
$txt="Marcia Buienga\n";
fwrite($myFile,$txt);
fclose($myFile);
?>