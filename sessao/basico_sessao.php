<div class="titulo">Sessão</div>

<?php
session_start();

print_r($_SESSION);
echo '<br>';

<<<<<<< HEAD
if(!$_SESSION['nome']){
    $_SESSION['nome'] = 'Gabriel';
}

if(!$_SESSION['email']){
    $_SESSION['email'] = 'gabriel@gabs.com';
=======
if(!$_SESSION['nome']) {
    $_SESSION['nome'] = 'Gabriel';
}

if(!$_SESSION['email']) {
    $_SESSION['email'] = 'gabriel@azmail.com';
>>>>>>> d43d1c0d8c51ace7dff107e86b83796127059e58
}

print_r($_SESSION);

?>

<p>
<<<<<<< HEAD
    <a href='sessao/alterar.php'>Alterar Sessão</a>
</p>

=======
    <a href='/sessao/basico_sessao_alterar.php'>
        Alterar Sessão
    </a>
</p>
>>>>>>> d43d1c0d8c51ace7dff107e86b83796127059e58
