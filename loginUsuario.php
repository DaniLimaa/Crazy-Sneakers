<?php

include 'includes/header.php';

if ($_SERVER["REQUEST_METHOD"] == 'POST' && !empty($_POST)) {

    $usuarioForm = $_POST['usuario'];
    $senhaForm   = $_POST['senha'];

    $dsn = 'mysql:dbname=db_crazy_sneakers;host=127.0.0.1';
    $user = 'root';
    $password = '';

    $banco = new PDO($dsn, $user, $password);

    $verificar = "SELECT * FROM tb_usuario WHERE usuario '{$usuarioForm}' AND senha = '{$senhaForm}'";

    $resultado = $banco->query($verificar)->fetch();

    if (!empty($resultado) && $resultado != false){
        
        $selectUser = "SELECT * FROM tb_info_usuario WHERE id = {$resultado['id_info_usuario']}";
        $dadosUser = $banco->query($selectUser)->fetch();

        session_start();

        $_SESSION['id_info_usuario'] = $dadosUser['id_info_usuario'];
        $_SESSION['nome']            = $dadosUser['nome'];
        $_SESSION['email']           = $dadosUser['email'];
        $_SESSION['telefone']        = $dadosUser['telefone'];
        $_SESSION['ano_nascimento']  = $dadosUser['ano_nascimento'];


        header('Location: index.php');

    } else {
        echo '<script>
            alert("Usuario ou senha inválidos")
            window.location.replace(./loginUsuario.php)
        </script>';
    }
}

include 'includes/loginForm.html';

include_once 'includes/footer.php';