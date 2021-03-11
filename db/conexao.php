<?php

//Criar um banco de dados, um schema, nessa pasta
//Aqui é criada a rota
//Não é ideial colocar os dados assim, mas, criar um outro arquivo com os dados
function novaConexao($banco = 'curso_php'){
    $servidor = '127.0.0.1';
    $usuario = 'root';
    $senha = '';

    $conexao = new mysqli($servidor, $usuario, $senha);

    if($conexao->connect_error){
        die('Erro' . $conexao->conect_error); //die não é interessante, pois mata todo o fluxo do programa
        //ou
        //echo('Erro' . $conexao->conect_error); //die não é interessante, pois mata todo o fluxo do programa
        //exit()
    }

    return $conexao;
}