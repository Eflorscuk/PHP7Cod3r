<div class="titulo">Métodos Mágicos</div>

<?php
class Pessoa{
    public $nome;
    public $idade;

    function __construct($nome, $idade){
        echo 'Construtor invocado!<br>';
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct(){
        echo 'E morreu!';
    }

    public function __toString(){
        return "{$this->nome} tem {$this->idade} anos.";
    }

    public function apresentar(){
        echo $this . "<br>";
    }

}

$pessoa = new Pessoa('Ricardo', 40);
// $pessoa->apresentar();
// echo '<br>', $pessoa, '<br>';

$pessoa->nomeCompleto;