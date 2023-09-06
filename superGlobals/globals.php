<?php 
$x=5;
$y=10;

function soma()  {
    $GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
}

soma();
echo $z;

?>