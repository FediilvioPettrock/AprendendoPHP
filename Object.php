
<?php
class carro{
   public $marca;
   public $cor;

   public function __construct($marca,$cor){
    $this->marca=$marca;
    $this->cor=$cor;
   }

   public function message(){
    return "este carro é de marca ".$this->marca." e tem a cor ".$this->cor;
   }

}

$mycar=new carro("mazda", "preta");
$mycar2=new carro("toyota", "branco");
$mycar3=new carro("camaro","amarelo");

$carros=array($mycar,$mycar2,$mycar3);
for($i=0;$i<3;$i++){
    echo $carros[$i]->message();
    echo"<br>";
}

?>