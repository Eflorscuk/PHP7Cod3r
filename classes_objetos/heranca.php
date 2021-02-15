<div class="titulo">Herança</div>

<?php
class Pessoa{
    public $nome;
    public $idade;

    function __construct($novoNome, $idade){
        $this->nome = $novoNome;
        $this->idade = $idade;
        echo 'O objeto foi criado<br>';
    }

    function __destruct(){
        echo 'Pessoa diz: Tchau!<br>';
    }

    public function apresentar(){
        echo "{$this->nome}, {$this->idade} anos<br>";
    }
}

class Usuario extends Pessoa {
    public $login;

    function __construct($nome, $idade, $login){
        // $this->nome = $nome;
        // $this->idade = $idade;
        parent::__construct($nome, $idade);
        $this->login = $login;
        echo 'Usuário Criado!<br>';
    }

    function __destruct(){
        echo 'Usuário diz: Tchau<br>';
        parent::__destruct();
    }

    public function apresentar(){
        echo "@{$this->login}<br>";
        parent::apresentar();
    }
}

$usuario = new Usuario('Gustavo', 21, 'gust');
$usuario->apresentar();
unset($usuario);