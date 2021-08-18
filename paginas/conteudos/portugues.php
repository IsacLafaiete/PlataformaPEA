<?php
    session_start();
    $logado = $_SESSION['logado'] ?? NULL;

    if (!$logado){
        $_SESSION['mensagem'] = "<div class='alerta erro' role='alert'>Você precisa fazer login para acessar essa página.</div>";
        header("Location: ../login.php");
    }

    if (isset($_GET['logout']) && $_GET['logout'] == 1){
        $_SESSION = array();
        session_unset();
        session_destroy();
        header('Location: ../login.php');
    }
?>

<html>
    <head>
        <title>PEA | Português</title>
        <link rel="shortcut icon" type="image/x-icon" href="../../imagens/logo-login.png">
        <link rel="stylesheet" type="text/css" href="../../css/main.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <nav class="menu">
            <a href="../../index.php"><img class="img-menu" src="../../imagens/logo-pea.png"></a>
            <ul>
                <li><a href="../../index.php">INÍCIO</a></li>
                <li><a href="../materias.php">TEXTOS</a></li>
                <li><a href="../sobre.php">SOBRE</a></li>
            </ul>
            <ul>
                <?php
                    if (!$logado) echo "<li><a href='../login.php'>LOG IN</a></li>";
                    else echo "<li><a href='?logout=1'>SAIR</a></li>";
                ?>
            </ul>
        </nav>
        <h1 class="titulo-pagina">
            Português
        </h1>
        <section class="conteudo-cursos tela">
            <p>
                A seguir estão algumas formas de contato com a administração da plataforma:
            </p>
        </section>
        <footer class="rodape">
            <?php include_once "../../templates/rodape.php" ?>
        </footer>
    </body>
</html>