<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php

#Se o metodo de envio for post
if($_SERVER['REQUEST_METHOD']=="POST"){
  if(isset($_REQUEST['fname'])){
    $name=$_REQUEST['fname'];
    if(empty($name))
    echo "campo não preenchido";
    else
    echo $name;
  }
}
?>

</body>
</html>