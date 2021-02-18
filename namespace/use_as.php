<?php namespace Outro\Nome; ?>

<div class="titulo">Use / As</div>

<?php
echo __NAMESPACE__ . '<br>';

include('use_as_arquivo.php');

function soma($a, $b){
    return $a . $b; //Sei que está errado. Só para teste
}

class Classe {
    public $var;

    function func(){
        echo __NAMESPACE__ . '->' . __CLASS__ . '->' . __METHOD__ . '<br>';
    }
}

//echo Nome\Bem\Grande\constante . '<br>'; //Não funciona porque estou acessando de forma relativa

//Para imprimir a constante

echo \Nome\Bem\Grande\constante . '<br>';

use const /*\ é opcional essa barra aqui*/Nome\Bem\Grande\constante;
echo constante . '<br>';

//definir apelido

use Nome\Bem\Grande as ctx;
echo soma(1, 2) . '<br>';
echo ctx\soma(1, 2) . '<br>';

//use function \Nome\Bem\Grande\soma; gera conflito
//a maneira certa

use function Nome\Bem\Grande\soma as somaReal;
echo somaReal(100, 212) . '<br>';

$a = new Classe();
$a->func();

//usando caminho completo absoluto

$b = new \Nome\Bem\Grande\Classe();
$b->func();

$c = new ctx\Classe();
$c->func();

//Alias diretamente na classe
use \Nome\Bem\Grande\Classe as D;
$d = new D();
$d->func();

