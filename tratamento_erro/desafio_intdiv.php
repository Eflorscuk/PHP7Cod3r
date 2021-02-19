<?php
namespace Aritimetica;

/*
Sobreescreva o método intdiv para...
- Lançar uma exceção quando tentar dividir por zer
- Lançar uma exceção quando o resultado não for inteiro
- Dividir normalmente os demais casos

Os testes
- intdiv com os par 8 e 2 [Sucesso]
- intdiv com os par 8 e  3 [exceção]
- intdiv com os pars 8 e 0 [exceção]
- intdiv "original" com os pars 8 e 3 [Sucesso]
*/


class NaoInteiroException extends \Exception{

}

function intdiv($a, $b){
    if($b == 0){
        throw new \DivisionByZeroError();
    }
    if($a % $b > 0){
        throw new NaoInteiroException();
    }
    return $a / $b;
}