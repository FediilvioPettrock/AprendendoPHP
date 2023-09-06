<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php

#Se o metodo de envio for post
if($_SERVER['REQUEST_METHOD']=="POST"){

  #Se a variável 'fname' em $_REQUEST está definida
  if(isset($_REQUEST['fname'])){
    $name=$_REQUEST['fname'];
    
    if(empty($name))
    echo "Campo vazio";
    else
    echo $name;
  }
}
?>

</body>
</html>