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
        <title>PEA | Contate-nos</title>
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
                <li><a class="ativa" href="materias.php">TEXTOS</a></li>
                <li><a href="sobre.php">SOBRE</a></li>
            </ul>
            <ul>
                <?php
                    if (!$logado) echo "<li><a href='login.php'>LOG IN</a></li>";
                    else echo "<li><a href='?logout=1'>SAIR</a></li>";
                ?>
            </ul>
        </nav>
            <h1 class="titulo-pagina">
                NOSSOS TEXTOS
            </h1>
            <p id="textos">
                A seguir estão alguns resumos sobre cada matéria ensinada em nossa plataforma:
            </p>
        <section class="conteudo-textos">
            <div>
                <h2>Português</h2>
                <h3> Classes Gramaticais </h3>
                <p> Classes gramaticais ou categoria gramatical são as categorias de palavras distribuídas de acordo com sua natureza e função gramatical no discurso. Existem dez tipos de Classes gramaticais... </p>
            </div>
            <a href="./conteudos/portugues.php"><button class="ponteiro">Ver mais</button></a>
        </section>
        <hr>
        <section class="conteudo-textos">
            <div>
                <h2>História</h2>
                <h3> Pré-História </h3>

                <p> Pré-História é o período do passado da humanidade que vai do aparecimento do homem à invenção da escrita e que abrange milhões de anos. A origem da humanidade é objeto de pesquisas de arqueólogos,
                paleontólogos, geólogos e biólogos. </p>

                <h3> Divisão da Pré-História </h3>

                <p> A Pré-História se divide em dois grandes períodos... </p>
            </div>
            <a href="./conteudos/historia.php"><button class="ponteiro">Ver mais</button></a>
        </section>
        <hr>
        <section class="conteudo-textos">
            <div>
                <h2>Geografia</h2>

                <h3>Orientação e localização</h3>
                <p>
                Os pontos cardeais são meios de orientação no espaço terrestre utilizados em diversos instrumentos, tais como as bússolas e os mapas. É, portanto, a partir dos pontos cardeais que podemos ter a correta consciência do lugar que ocupamos no espaço e da nossa posição relativa em relação a ele. Além dos pontos cardeais...
                </p>
            </div>
            <a href="./conteudos/geografia.php"><button class="ponteiro">Ver mais</button></a>
        </section>
        <hr>
        <section class="conteudo-textos">
            <div>
                <h2>Biologia</h2>
                <h3> Água e sais minerais </h3>
                <p> Para que os organismos funcionem, são necessárias substâncias orgânicas e inorgânicas que trabalham, por exemplo, em reações de anabolismo e catabolismo, como reguladores, na constituição estrutural ou como reserva energética. São substâncias inorgânicas a água e os sais minerais, enquanto os carboidratos são considerados substâncias orgânicas. </p>
                <h3> Água </h3>
                <p> A água é um composto inorgânico, formado por duas moléculas de hidrogênio e uma de oxigênio... </p>
            </div>
            <a href="./conteudos/biologia.php"><button class="ponteiro">Ver mais</button></a>
        </section>
        <footer class="rodape">
            <?php include_once "../templates/rodape.php" ?>
        </footer>
    </body>
</html>