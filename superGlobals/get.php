<html>
<body>

<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == "GET") {
    if (isset($_GET['fname'])) {
        $nome = $_GET['fname'];
        if (empty($nome))
            echo "Campo vazio";
        else
            echo $nome;
    }
}
?>

</body>
</html>
