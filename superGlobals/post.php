<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
     $nome=isset($_POST['fname'])?$_POST['fname']:"Variavel não encontrada";
    if(empty($nome))
    echo "Campo vazio";
    else
    echo $nome;
}
?>

</body>
</html>