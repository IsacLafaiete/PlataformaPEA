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
        <section class="conteudo-cursos">
            <h2> Classes Gramaticais </h2>
            <p> Classes gramaticais ou categoria gramatical são as categorias de palavras distribuídas de acordo com sua natureza e função gramatical no discurso. Existem dez tipos de Classes gramaticais: </p>
        
            <ul> 
                <li> Substantivos - são palavras comuns nomeadas a partir de objetos, fenômenos, lugares, qualidades, comportamentos, etc., como: Ana, Brasil e beleza. Há vários tipos de substantivos: comum, próprio, concreto, abstrato, coletivo. 
                    <ul>
                        <li> Comum: Responsável por nomear as semelhanças de criaturas semelhantes, elementos abstratos, objetos e fenômenos naturais.
                        Por exemplo: casa, ódio. </li>
                        <li> Próprio: Refere-se a uma existência específica.
                        Exemplo: Maria, Terra. </li>
                        <li> Primitivo: não derivado de outros termos existentes na mesma língua.
                        Por exemplo: Apple, porta. </li>
                        <li> Derivado: palavras de outras pessoas.
                        Exemplos: macieira (árvore) - maçã (fruta).  </li>
                        <li> Simples: eles consistem em apenas uma raiz (parte do significado principal de uma palavra).
                        Por exemplo: garrafas, calçados esportivos, feijão.  </li>
                        <li> Compostos: há mais de um grupo em sua estrutura.
                        Exemplos: beija-flores. </li>
                        <li> Concreto: nomeiam sua própria existência, ou seja, personagens independentes pertencentes ao universo real ou imaginário.
                        Por exemplo: caneta, vampiro (entidade), São Paulo (cidade), Ministério da Saúde (instituição). </li>
                        <li> Abstrato: Especifique qualidades, ações, sentimentos, estados e sentimentos.
                        Por exemplo: arrogância, riso, solidão, juventude, conforto. </li>
                    </ul>
                </li>
                
                <li> Verbos - são palavras que expressam ações naturais, estados ou fenômenos, por exemplo: vamos sair, correr ou chover. Os verbos são classificados em: regulares, irregulares, defectivos e abundantes. </li>
                
                <li> Adjetivos - são palavras que caracterizam e dão qualidades aos substantivos, como: feliz, super divertido e gentil. </li>
                
                <li> Pronomes - são palavras que substituem ou acompanham substantivos, expressando a relação entre as pessoas na fala, como: eu, contigo, aquilo. Existem vários tipos de pronomes: pronomes pessoais, pronomes possessivos, pronomes demonstrativos, pronomes relativos, pronomes indefinidos e pronomes interrogativos. </li>
                
                <li> Artigos - é a palavra antes do substantivo, por exemplo: o, as, uns, um, umas, uma. Os artigos são divididos em: artigos definidos e artigos indefinidos. </li>
                
                <li> Numeral - é uma palavra que indica a posição ou quantidade de um elemento, como: um, primeiro, dez. Os números são divididos em: base, ordinal, multiplicação, fração e coletivo. </li>
                
                <li> Preposição - é uma palavra que conecta dois elementos de uma cláusula, por exemplo: a, depois, para. As preposições são divididas em preposições básicas e preposições acidentais. </li>
                
                <li> Conjunção - é uma palavra que conecta dois termos ou duas orações com o mesmo valor gramatical, tais como: mas, portanto, está em conformidade. As conjunções são divididas em conjunções coordenativas (adicional, antônimo, substituição, conclusivo e explicativo) e conjunções subordinantes (inteiro, causal, comparação, concessão, condição, conformação, contínuo, tempo, final e proporção). </li>
                
                <li> Interjeições - são palavras que expressam emoções e sentimentos, tais como: olá, longa vida! Silêncio! </li>
                
                <li> Advérbios - são palavras que modificam verbos, adjetivos ou outros advérbios, expressando tempo, emoção, intensidade, etc., tais como: melhor, demais, aí. Os advérbios são divididos em: emoção, intensidade, localização, tempo, negação, afirmação e dúvida. </li>
            </ul>

            <div class="mapas">
                <img class="img-mapas" src="../../imagens/mapa-portugues.jpg">
            </div>
        </section>
        <footer class="rodape">
            <?php include_once "../../templates/rodape.php" ?>
        </footer>
    </body>
</html>