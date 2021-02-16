<div class="titulo">Polimorfismo</div>

<?php
abstract class Comida {
    public $peso;
}

class Arroz extends Comida {

}

class Feijao extends Comida {

}

class Sorvete extends Comida {

}

class ArrozAGrega extends Arroz{

}

class Pessoa {
    public $peso;

    function __construct($peso){
        $this->peso = $peso;
    }

    function comer(Arroz $comida){ //ou ela come somente arroz ou algo que herde só de arroz, aqui está o Polimorfismo
        $this->peso += $comida->peso;
    }
}

$c1 = new Arroz();
$c1->peso = 0.65;

$c2 = new ArrozAGrega();
$c2->peso = 0.25;

$p = new Pessoa(83.45);
$p->comer($c1);

echo $p->peso;