<html>
<body>

<a href="http://localhost/exercicioPHP/superGlobals/getdehiperlink.php?name=Fedilvio&idade=25">
    enviar pela URL
</a>

<?php
if(isset($_GET['name']))
echo "<br>".$_GET['name']. "<br>".$_GET['idade'];
?>

</body>
</html>
