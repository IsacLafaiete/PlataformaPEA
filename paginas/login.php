<?php
    session_start();
    $logado = $_SESSION['logado'] ?? NULL;

    if (isset($_GET['logout']) && $_GET['logout'] == 1){
        $_SESSION = array();
        session_unset();
        session_destroy();
        header('Location: login.php');
    }
?>

<html>
    <head>
        <title>PEA | Faça login</title>
        <link rel="shortcut icon" type="image/x-icon" href="../imagens/logo-login.png">
        <link rel="stylesheet" type="text/css" href="../css/main.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <nav class="menu">
            <a href="../index.php"><img class="img-menu" src="../imagens/logo-pea.png"></a>
            <ul>
                <li><a href="../index.php">INÍCIO</a></li>
                <li><a href="materias.php">TEXTOS</a></li>
                <li><a href="sobre.php">SOBRE</a></li>
            </ul>
            <ul>
                <?php
                    if (!$logado) echo "<li><a class='ativa' href='login.php'>LOG IN</a></li>";
                    else echo "<li><a href='?logout=1'>SAIR</a></li>";
                ?>
            </ul>
        </nav>
        <section class="section-login">
            <img src="../imagens/logo-login.png" alt="Logo da plataforma" class="img-login">
            <h1 class="titulo-login">Log in</h1>
            <form method="POST" action="../php/login.php" id="form-login">
                <section class="conteudo-login">
                    <label for="usuario">Usuário</label>
                    <input type="text" name="usuario" id="usuario">
                </section>
                <section class="conteudo-login">
                    <div>
                        <label for="senha">Senha</label>
                    </div>
                    <input type="password" name="senha" id="senha">
                </section>
                <button type="submit">Enviar</button>
            </form>
            <p>Novo na plataforma? <a href="cadastro.php">Crie uma conta.</a></p>
        </section>
        <div id="mensagem">
            <?php
                echo $_SESSION['mensagem'];
                unset($_SESSION['mensagem']);
            ?>
        </div>
        <script src="../js/efeitos.js"></script>
        <footer class="rodape">
            <?php include_once "../templates/rodape.php" ?>
        </footer>
    </body>
</html>