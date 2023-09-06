<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $valor1=$_POST["entrada1"];
    $valor2=$_POST["entrada2"];
    if($valor1>0){
    $_SESSION['resultado']="Valor positivo";
    }
    else{
 if($valor1<0){
    $_SESSION['resultado']="Valor negativo";
    }
    else{
    $_SESSION['resultado']="igual a zero";  
    }

    } 
   
  
    header("Location: entrada.php");
    exit();

}
?>