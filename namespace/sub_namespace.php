<?php namespace App; ?>

<div class="titulo">Sub namespaces</div>

<?php

echo __NAMESPACE__ . '<br>';
const constante = 123;

namespace App\Principal;
echo __NAMESPACE__ . '<br>';
const constante = 234;

namespace App\Principal\Especifico;
echo __NAMESPACE__ . '<br>';
const constate = 345;

echo constate . '<br>';
echo constant('\\' . __NAMESPACE__ . '\constante') . '<br>';
echo \App\constante . '<br>';
echo \App\Principal\constante . '<br>';
echo \App\Principal\Especifico\constante;
