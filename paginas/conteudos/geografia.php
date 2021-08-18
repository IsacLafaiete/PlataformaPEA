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
        <title>PEA | Geografia</title>
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
            Geografia
        </h1>
        <section class="conteudo-cursos">
            <h2>Orientação e localização</h2>
            <p> Os pontos cardeais são meios de orientação no espaço terrestre utilizados em diversos instrumentos, tais como as bússolas e os mapas. É, portanto, a partir dos pontos cardeais que podemos ter a correta consciência do lugar que ocupamos no espaço e da nossa posição relativa em relação a ele. Além dos pontos cardeais, há também pontos mais específicos, os chamados pontos colaterais, e outros ainda mais precisos, os pontos subcolaterais, que nada mais são do que a combinação dos pontos cardeais e subcolaterais. </p>

            <p> Os pontos cardeais – e seus respectivos símbolos – são: Norte, Sul, Leste e Oeste. Os pontos colaterais, cuja posição encontra-se entre os pontos cardeais, são: Noroeste, Nordeste, Sudeste e Sudoeste. Por fim, temos os pontos subcolaterais, com uma posição mais específica: </p>
            <ul>
            <li> Entre o Norte e o Noroeste: Nor-noroeste </li>
            <li> Entre o Norte e o Nordeste: Nor-nordeste </li>
            <li> Entre o Oeste e o Noroeste: Oés-noroeste </li>
            <li> Entre o Oeste e o Sudoeste: Oés-sudoeste </li>
            <li> Entre o Leste e o Nordeste: Lés-nordeste </li>
            <li> Entre o Leste e o Sudeste: Lés-sudeste </li>
            <li> Entre o Sul e o Sudoeste: Sul-suldoeste </li>
            <li> Entre o Sul e o Sudeste: Sul-suldeste </li>
            </ul>

            <div class="mapas">
                <img class="img-mapas" src="../../imagens/rosa2.png">
            </div>

            <p> Observando a rosa dos ventos acima, temos a conjunção de todos os pontos cardeais, colaterais e subcolaterais. Como já foi mencionado, eles nos ajudam a situar a nossa orientação no espaço e também indicam a posição relativa, por exemplo: “a escola encontra-se a nordeste de nossa posição atual”; “a padaria encontra-se a lés-sudeste da sorveteria”; “o Brasil encontra-se ao sul da Linha do Equador”. </p>

            <div class="mapas">
                <img class="img-mapas" src="../../imagens/mapa-geografia.jpg">
            </div>
        </section>
        <footer class="rodape">
            <?php include_once "../../templates/rodape.php" ?>
        </footer>
    </body>
</html>