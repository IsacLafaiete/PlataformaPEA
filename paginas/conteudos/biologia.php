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
        <title>PEA | Biologia</title>
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
            Biologia
        </h1>
        <section class="conteudo-cursos">
            <h2> Água e sais minerais </h2>
            <p> Para que os organismos funcionem, são necessárias substâncias orgânicas e inorgânicas que trabalham, por exemplo, em reações de anabolismo e catabolismo, como reguladores, na constituição estrutural ou como reserva energética. São substâncias inorgânicas a água e os sais minerais, enquanto os carboidratos são considerados substâncias orgânicas. </p>
            <h3> Água </h3>
            <p> A água é um composto inorgânico, formado por duas moléculas de hidrogênio e uma de oxigênio. Dizemos que a água é um dipolo, pois ela possui carga elétrica negativa próxima ao átomo de oxigênio e carga positiva próxima aos átomos de hidrogênio. Por isso a água funciona como um solvente universal, pois consegue reagir com facilidade com outras moléculas polares. A presença das ligações de hidrogênio faz com que a água seja uma molécula com alta capacidade de interagir com outras moléculas, conferindo uma grande capacidade de coesão (água ligadas com outras molécula de água) e adesão (água ligada com outras substâncias). Dentre as funções da água no organismo, podemos citar o transporte de substâncias pelo corpo, carregando excretas e nutrientes e a regulação térmica, principalmente nos animais endotérmicos, possível graças ao alto calor específico da água, que faz com que ela possa ganhar calor sem alterar seu estado físico. Ela também atua no metabolismo em reações de anabolismo (de construção) e catabolismo (de quebra), como por exemplo a fotossíntese e a quebra da glicose, respectivamente. As reações de quebra da água são chamadas de hidrólise. </p>
            <h3> Sais Minerais </h3>
            <p> Os sais minerais são substâncias inorgânicas reguladoras do metabolismo, e são encontradas principalmente em verduras, frutas, ovos, carnes e alimentos derivados do leite. São alguns sais minerais importantes para o organismo: </p>
            <ul>
                <li><strong> Cálcio: </strong> Forma ossos e dentes, além de auxiliar na contração dos músculos e coagulação do sangue. </li>
                <li><strong> Fósforo: </strong> Participa da transferência de energia, e constitui moléculas de ácidos nucleicos. Também está presente nos ossos e dentes. </li>
                <li><strong> Sódio: </strong> Auxilia na osmorregulação e atua no impulso nervoso. </li>
                <li><strong> Cloro: </strong> Forma o ácido clorídrico do estômago. </li>
                <li><strong> Potássio: </strong> Auxilia na osmorregulação e atua no impulso nervoso. </li>
                <li><strong> Magnésio: </strong> Forma a clorofila, além de atuar em reações químicas com enzimas e vitaminas. </li>
                <li><strong> Zinco: </strong> Participa da formação de enzimas e hormônios. </li>
                <li><strong> Ferro: </strong> Forma a hemoglobina. </li>
                <li><strong> Iodo: </strong> Forma os hormônios da tireoide. </li>
                <li><strong> Flúor: </strong> Fortalece os ossos. </li>
            </ul>
            <div class="porta-mapas">
                <p> Abaixo se encontram alguns mapas mentais que também tratam sobre o assunto explicado acima:</p>
                <div class="mapas">
                    <img class="img-mapas" src="../../imagens/mapa-biologia1.jpg">
                </div>
                <div class="mapas">
                    <img class="img-mapas" src="../../imagens/mapa-biologia2.jpg">
                </div>
            </div>
        </section>
        <footer class="rodape">
            <?php include_once "../../templates/rodape.php" ?>
        </footer>
    </body>
</html>