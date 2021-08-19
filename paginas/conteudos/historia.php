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
        <title>PEA | História</title>
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
            História
        </h1>
        <section class="conteudo-cursos">
            <h2> Pré-História </h2>

            <p> Pré-História é o período do passado da humanidade que vai do aparecimento do homem à invenção da escrita e que abrange milhões de anos. A origem da humanidade é objeto de pesquisas de arqueólogos,
            paleontólogos, geólogos e biólogos. </p>

            <h3> Divisão da Pré-História </h3>

            <p> A Pré-História se divide em dois grandes períodos: a Idade da Pedra e a Idade dos Metais. </p>

            <ul>
                <li> Idade da Pedra - está compreendida entre o aparecimento dos primeiros hominídeos e mais ou menos 10000 a.C.. Para fim de estudo também se divide: </li>

                <ul>
                    <li> Período Paleolítico ou Idade da Pedra Lascada (do surgimento da humanidade até 8000 a.C.); </li>

                    <li> Período Neolítico ou Idade da Pedra Polida (de 8000 a.C. até 5000 a.C.); </li>
                </ul>


                <li> Idade dos Metais (5000 a.C. até o surgimento da escrita, por volta de 3500 a.C.). </li>
            </ul>


            <h3> Paleolítico </h3>

            <p> Paleolítico é o período mais extenso da Pré-História da humanidade, compreendido entre seu surgimento, por volta de 4,4 milhões de anos, até 8000 a.C. </p>

            <p> Nessa época os homens viviam em bandos e ajudavam uns aos outros na obtenção de alimentos, através da caça, da pesca e da coleta de frutos, raízes e ovos, o que os obrigava a uma vida nômade. A baixa temperatura leva os grupos de hominídeos a se abrigar em cavernas e a construir habitações com galhos de árvores e a compartilhar o uso dos rios, das florestas e dos lagos. </p>

            <p> Os instrumentos utilizados, a princípio eram de osso e madeira, depois, lascas de pedra e marfim. Fabricavam machados, facas e outros instrumentos pontiagudos. Uma descoberta importante nesse período foi domínio do fogo. Estima-se que o fogo passou a ser controlado pela humanidade há 500 mil anos, na África oriental. Por volta de 30000 a.C., o Homo sapiens aperfeiçoou a técnica da caça e da pesca, inventou o arco e a flecha e criou a arte da pintura. Essas transformações, que duraram milhares de anos, mudaram significativamente a vida animal e vegetal do planeta e alteraram a relação entre homem e natureza. O homem entrou num período denominado Neolítico. </p>

            <h3> Neolítico </h3>

            <p> No período Neolítico, novas modificações climáticas alteraram a vegetação. Aumentaram as dificuldades para caçar e se instalaram nas  margens dos rios, o que contribuiu para o desenvolvimento da agricultura, com o plantio de trigo, cevada e aveia. Aprenderam a domesticar alguns animais e a criar gado. Surgiram os primeiros aglomerados populacionais, com finalidade principalmente defensiva. Seus objetos tornaram-se mais bem acabados, pois a pedra, depois de lascada, era esfregada no chão ou na areia até tornar-se polida. </p>

            <p> Desenvolveram a arte da cerâmica, fabricando grandes potes para guardar o excedente da produção agrícola. Desenvolveram as técnicas de fiação e tecelagem para a confecção de tecidos de lã e linho, em substituição aos trajes confeccionados com peles de animais. A organização social, denominada comunidade primitiva, baseava-se nos laços de sangue, idioma e costumes. A fase final do Neolítico caracterizou-se pela desintegração do sistema de comunidade primitiva e pela origem das sociedades organizadas em Estados e divididas em diferentes camadas sociais. </p>


            <h3> Idade dos Metais </h3>

            <p> O desenvolvimento de técnicas de fundição de metais possibilitou o abandono progressivo dos instrumentos de pedra. O primeiro metal a ser fundido foi o cobre, posteriormente o estanho. Da fusão desses dois metais, surgiu o bronze, mais duro e resistente, com o qual fabricavam espadas, lanças etc. Por volta de 3000 a.C. produzia-se bronze no Egito e na Mesopotâmia. A metalúrgica do ferro é posterior. Tem início por volta de 1500 a.C., na Ásia Menor. Por ser um minério mais difícil de ser trabalhado difundiu-se lentamente. Em razão da sua superioridade para a fabricação de armamentos, o ferro contribuiu para a supremacia dos povos que souberam utilizá-lo com essa finalidade. </p>

            <div class="mapas">
                <img class="img-mapas" src="../../imagens/mapa-historia.jpg">
            </div>
        </section>
        <footer class="rodape">
            <?php include_once "../../templates/rodape.php" ?>
        </footer>
    </body>
</html>