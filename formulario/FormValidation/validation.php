<?php
    #define variables and set to empty values
    $name=$email=$gender=$comment=$website="";

    if($_SERVER['REQUEST_METHOD']=="POST"){
      $name=test_input($_POST['name']);
      $email=test_input($_POST['email']);
      $gender=test_input($_POST['gender']);
      $comment=test_input($_POST['comment']);
      $website=test_input($_POST['website']);


      $data=array($name, $email,$gender,$comment,$website);
      printAllData($data);
    }

    function test_input($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }

    function printAllData($datas){
      foreach($datas as $data){
        echo $data."<br>";
      }  
    }
?>