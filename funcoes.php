<?php declare(strict_types=1); #usamos para indicar que devemos especificar o tipo 

#função básica
function escreverMensagem(){
    echo "Olá Mundo <br>";

}
escreverMensagem();

#funcao com parametro
function myName(string $name, $surname){
    echo($name." ".$surname);
}
myName("Fedilvio","Petrock <br>");

#somar dois  numeros
function soma(int $n1, int $n2){
echo $n1+$n2."<br>";
}

soma(5,5);

#função que retorna valor e tem um parametro padrão
function soma1($n1, $n2=10){
    return $n1+$n2;
}
echo "5+10=".soma1(5)."<br>";

#função com tipo de valor a ser retornado especificado
function soma2(float $n1, float $n2): float{
        return $n1+$n2;
}
echo soma2(2.5,2.5)."<br>";

#retornar tipo diferente do que o esperado(CAST)
function soma3(float $n1, float $n2): float{
    return (int) ($n1+$n2);
}
echo soma3(3.5,3.5)."<br>";

#Passagem por referencia
function add_five(&$num){
$num+=5;
}
$num=4;
add_five($num);
echo $num;

?>