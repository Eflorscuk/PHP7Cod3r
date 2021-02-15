<div class="titulo">Desafio dos Sete Erros</div>

<p>Este exercício foi feito para localizar sete erros no código
aqui abordado.</p>

<?php

interface Template{
    function metodo1();
    public function metodo2($parametro);
}

abstract class ClasseAbstrata implements Template{
    public function metodo3(){
        echo "Estou funcionando";
    }

    public function metodo1(){}
}

class Classe extends ClasseAbstrata{
    function __construct($parametro){
        
    }

    public function metodo2($parametro){
        
    }
}



//$exemplo = Classe();
//$exemplo.metodo3();

$exemplo = new Classe('...');
$exemplo->metodo3();