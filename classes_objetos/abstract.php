<div class="titulo">Abstract</div>

<?php

abstract class Abstrata{
    abstract public function metodo1();
    abstract protected function metodo2($parametro);
}

abstract class FilhaAbstrata extends Abstrata{
    public function metodo1(){
        echo 'executando método1 <br>';
    }

    abstract public function metodo3();
}

class Concreta extends FilhaAbstrata{
    public function metodo1(){
        echo 'Exec. método1 extendido<br>';
        parent::metodo1();
    }

    protected function metodo2($parametro){
        echo "Exec. método2 com o par $parametro <br>";
        parent::metodo1();
    }

    public function metodo3(){
        echo "Exec. o método3<br>";
        $this->metodo2('interno');
    }
}

$c = new Concreta();
$c->metodo1();
//$c->metodo2('externo');
$c->metodo3();
echo 'Fim!';