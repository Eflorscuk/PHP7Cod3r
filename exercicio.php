<<<<<<< HEAD
<?php
=======
<?php 
>>>>>>> d43d1c0d8c51ace7dff107e86b83796127059e58
session_start();

if($_COOKIE['usuario']) {
    $_SESSION['usuario'] = $_COOKIE['usuario'];
}

<<<<<<< HEAD
if(!$_SESSION['usuario']){
=======
if(!$_SESSION['usuario']) {
>>>>>>> d43d1c0d8c51ace7dff107e86b83796127059e58
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <link rel="stylesheet" href="recursos/css/exercicio.css">
    <title>Exercício</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercício</h2>
    </header>
    <nav class="navegacao">
        <span class="usuario">Usuário: <?= $_SESSION['usuario'] ?></span>
        <a href=<?= "/{$_GET['dir']}/{$_GET['file']}.php" ?> 
            class="verde">Sem formatação</a>
<<<<<<< HEAD
        <a href="index.php"">Voltar</a>
        <a href="logout.php class="vermelho">Sair</a>
=======
        <a href="index.php">Voltar</a>
        <a href="logout.php" class="vermelho">Sair</a>
>>>>>>> d43d1c0d8c51ace7dff107e86b83796127059e58
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
            ?>
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS © <?= date('Y'); ?>
    </footer>
</body>
</html>