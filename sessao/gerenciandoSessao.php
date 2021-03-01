<div class="titulo">Gerenciando Sessão</div>

<?php
//session_id('583e0a18fed51b7241842070101260d0');
session_start();
//original 583e0a18fed51b7241842070101260d0
echo session_id();

$contador = &$_SESSION['contador'];

$contador = $contador ? $contador + 1 : 1;

echo'<br>' . $_SESSION['contador'];

if($_SESSION['contador'] % 5 === 0){
    session_regenerate_id();
    //primeira nova sessão b39d9c3ca72ec06ca1d33ccd13849743
}

if($_SESSION['contador'] >= 15){
    session_destroy();
    //surge um novo id 00caf1fe476eeeda24bca3c6ebe49f62
}