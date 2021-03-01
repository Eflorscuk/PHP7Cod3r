<?php
session_start();
//modificar a página
print_r($_SESSION);
?>

<p>
    <b>Nome: </b> <?= $_SESSION['nome']?>
    <b>Email: </b> <?= $_SESSION['email']?>
</p>

<?php
$_SESSION['email'] = 'gabielfilho@email.com.br';
?>

<p>
    <a href='basico_sessao.php'>Voltar</a>
</p>

<p>
    <!--Para limpar a sessão-->
    <a href='destroy.php'>Limpar Sessão</a>
</p>