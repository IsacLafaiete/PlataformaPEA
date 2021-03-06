<?php
    session_start();
    $logado = $_SESSION['logado'] ?? NULL;

    if (isset($_GET['logout']) && $_GET['logout'] == 1){
        $_SESSION = array();
        session_unset();
        session_destroy();
        header('Location: ./paginas/login.php');
    }
?>

<html>
    <head>
        <title>PEA | Bem-vindo(a)!</title>
        <link rel="shortcut icon" type="image/x-icon" href="./imagens/logo-login.png">
        <link rel="stylesheet" type="text/css" href="./css/main.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.12.0/devicon.min.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <nav class="menu">
            <a href="index.php"><img class="img-menu" src="./imagens/logo-pea.png"></a>
            <ul>
                <li><a class="ativa" href="index.php">INÍCIO</a></li>
                <li><a href="./paginas/materias.php">TEXTOS</a></li>
                <li><a href="./paginas/sobre.php">SOBRE</a></li>
            </ul>
            <ul>
                <?php
                    if (!$logado) echo "<li><a href='./paginas/login.php'>LOG IN</a></li>";
                    else echo "<li><a href='?logout=1'>SAIR</a></li>";
                ?>
            </ul>
        </nav>
        <h1 class="titulo-pagina">
            BEM-VINDO AO PEA
        </h1>
        <section class="conteudo">
            <div class="porta-cards-home">
                <a href="./paginas/conteudos/portugues.php">
                    <div class="card-home">
                        <h2>Português</h2>
                        <p>Tem muitas dúvidas sobre as classes gramaticais da nossa lingua? Então aprenda agora sobre elas.</p>
                    </div>
                </a>
                <a href="./paginas/conteudos/historia.php">
                    <div class="card-home">
                        <h2>História</h2>
                        <p>Venha conhecer mais sobre os períodos mais estudados da história mundial.</p>
                    </div>
                </a>
                <a href="./paginas/conteudos/geografia.php">
                    <div class="card-home">
                        <h2>Geografia</h2>
                        <p>Saiba como se orientar melhor usando a Rosa dos Ventos.</p>
                    </div>
                </a>
                <a href="./paginas/conteudos/biologia.php">
                    <div class="card-home">
                        <h2>Biologia</h2>
                        <p>Fique sabendo um pouco mais sobre a água e os sais minerais.</p>
                    </div>
                </a>
            </div>
        </section>
        <div id="mensagem">
            <?php
                echo $_SESSION['mensagem'];
                unset($_SESSION['mensagem']);
            ?>
        </div>
        <script src="./js/efeitos.js"></script>
        <footer class="rodape">
            <?php include_once "./templates/rodape.php" ?>
        </footer>
    </body>
</html>