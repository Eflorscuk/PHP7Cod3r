<?php namespace contexto;?>

<div class="titulo">Exemplo Básico</div>

<?php
echo __NAMESPACE__ . '<br>';

const constate1 = 123;

define('contexto\constante2', 234);

define(__NAMESPACE__ . '\constante3', 345);

define('outro_contexto\constante4', 456);

echo constate1 . '<br>';
echo constante2. '<br>';