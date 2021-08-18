<?php
    session_start();

    $username = $_POST['usuario'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];

    $conexao = mysqli_connect("localhost", "root", "", "banco_pea");

    $verificarUsuario = "SELECT * FROM Usuario WHERE username = '$username'";
    $sql = mysqli_query($conexao, $verificarUsuario);
    $resultado = mysqli_fetch_assoc($sql);

    if ($resultado['username'] == $username){
        $_SESSION['mensagem'] = "<div class='alerta erro' role='alert'>Usuário já existente! Experimente outro.</div>";
        header("Location: ../paginas/cadastro.php");
    }else {
        $senhaCriptografada = crypt($senha, '$6$rounds=5000$pl4tf0rm/p3a.ens1n0');

        $sql2 = "INSERT INTO Usuario (username, email, senha) VALUES('$username', '$email', '$senhaCriptografada')";

        if (mysqli_query($conexao, $sql2)){
            $_SESSION['mensagem'] = "<div class='alerta sucesso' role='alert'>Usuário cadastrado com sucesso!</div>";
            header("Location: ../paginas/login.php");
        }else {
            $_SESSION['mensagem'] = "<div class='alerta erro' role='alert'>Usuário ou senha inválidos!</div>";
            header("Location: ../paginas/cadastro.php");
        }
    }

    mysqli_close($conexao);
?>