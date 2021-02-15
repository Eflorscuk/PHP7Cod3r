<div class="titulo">Visibilidade</div>

<?php
class A{
    public $publico = 'Público';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';

    public function mostrarA(){
        echo "Classe A Público = {$this->publico}<br>";
        echo "Classe A Protegido = {$this->protegido}<br>";
        echo "Classe A Privado = {$this->privado}<br>";
    }

    protected function vaiPorHeranca(){
        echo "<br>Essa função foi por herança<br>";
    }

    private function naoMostrar(){ //chama através de outras funções1
        echo 'Não vou imprimir!<br>';
    }
}

$a = new A();
$a->mostrarA();
//$a->naoMostrar();

class B extends A{
    public function mostrarB(){
        echo "Classe B Público = {$this->publico}<br>";
        echo "Classe B Protegido = {$this->protegido}<br>"; //É mostrado somente através da herança
        //echo "Classe B Privado = {$this->privado}<br>"; não vai mostrar
        echo "O atributo privado fica dentro da própria classe";
        parent::vaiPorHeranca();
    }
}

echo '<br>';

$b = new B();
$b->mostrarB();





//echo "Fim!";