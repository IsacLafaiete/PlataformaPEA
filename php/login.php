<?php
    session_start();

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $conexao = mysqli_connect("localhost", "root", "", "banco_pea");

    $verificarUsuario = "SELECT * FROM Usuario WHERE username = '$usuario'";
    $sql = mysqli_query($conexao, $verificarUsuario);
    $resultado = mysqli_fetch_assoc($sql);

    if ($resultado['username'] == $usuario){
        $senhaCriptografada = crypt($senha, '$6$rounds=5000$pl4tf0rm/p3a.ens1n0');

        if ($resultado['senha'] == $senhaCriptografada){
            $_SESSION['mensagem'] = "<div class='alerta sucesso' role='alert'>Usuário logado com sucesso!</div>";
            $_SESSION['logado'] = True;
            $_SESSION['usuario'] = $usuario;
            header("Location: ../index.php");
        }else {
            $_SESSION['mensagem'] = "<div class='alerta erro' role='alert'>Login inválido! Tente novamente.</div>";
            header("Location: ../paginas/login.php");
        }
    }else {
        $_SESSION['mensagem'] = "<div class='alerta erro' role='alert'>Login inválido! Tente novamente.</div>";
        header("Location: ../paginas/login.php");
    }

    mysqli_close($conexao);
?>