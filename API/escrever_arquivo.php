<div class="titulo">Escrevendo Arquivo</div>

<?php
$arquivo = fopen('texte.txt', 'w');
fwrite($arquivo, "Valor inicial\n");
$str = "Segunda Linha\n";
fwrite($arquivo, $str);
fclose($arquivo);

$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "Novo conteúdo");
fclose($arquivo);

$arquivo = fopen('texte.txt', 'a');
fwrite($arquivo, "com novos valores\n");
fwrite($arquivo, "Adicionamdo um segundo segundo momento");
fclose($arquivo);

//Aqui, se vc usar essas duas linhas, vc não vai sobrescrever um arquivo
//Você terá que criar um arquivo novo
ini_set('display_errors', 1);
$arquivo = fopen('teste.txt', 'x');
