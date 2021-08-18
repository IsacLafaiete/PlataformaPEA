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
        <title>PEA | Sobre o projeto</title>
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
                <li><a class="ativa" href="sobre.php">SOBRE</a></li>
            </ul>
            <ul>
                <?php
                    if (!$logado) echo "<li><a href='login.php'>LOG IN</a></li>";
                    else echo "<li><a href='?logout=1'>SAIR</a></li>";
                ?>
            </ul>
        </nav>
        <h1 class="titulo-pagina">
            SAIBA MAIS SOBRE NOSSO PROJETO
        </h1>
        <section class="conteudo-sobre">
            <p>
                Olá! Acredito que se chegou a esta página é porque deseja saber mais sobre o projeto, então aqui está. O projeto Plataforma de Ensino e Aprendizagem, ou mais conhecido como PEA, surgiu da junção de um projeto de Conclusão de Curso, do aluno Isac Lafaeite, e da vontade de criar uma plataforma para ensinar os assuntos básicos para muitos jovens, e usuários de todas as idades, relacionados à matérias básicas como Português, História, Geografia e Biologia.
            </p>
            <p>
                Qualquer usuário que acessar a plataforma terá acesso a um pequeno texto sobre cada matéria, mas, para que o usuário tenha acesso aos textos completos é necessário estar cadastrado na plataforma (<a href="cadastro.php">cadastre-se aqui</a>).
            </p>
            <br><br><br>
            <h1 class="titulo-pagina contatos">
                ENTRE EM CONTATO CONOSCO
            </h1>
            <div class="formas-contato">
                <p>
                    A seguir estão algumas formas de contato com a administração da plataforma:
                </p>
                <div id="porta-cards-contatos">
                    <div class="card-contatos">
                        <p>Nosso projeto está guardado em um repositório no GitHub e que pode ser acessado no link a seguir:</p>
                        <a href="https://github.com/IsacLafaieite/..."><button class="ponteiro">GitHub</button></a>
                    </div>
                    <div class="card-contatos">
                        <p>Caso tenham alguma dúvida, crítica ou sugestão, mande-nos uma mensagem pelo email:</p>
                        <a href=""><button>isaclafaiete@dominio.com</button></a>
                    </div>
                </div>
            </div>
        </section>
        <br><br><br>
        <footer class="rodape">
            <?php include_once "../templates/rodape.php" ?>
        </footer>
    </body>
</html>