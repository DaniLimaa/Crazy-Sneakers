<?php
require './classes/BancoDados.php';
include './includes/header.php';

$bancoDados = new BancoDados();
$conexaoBanco = $bancoDados->conectarBancoDados();

if ($_SERVER["REQUEST_METHOD"] == 'POST' && !empty($_POST)) {

    $usuarioForm = $_POST['usuario'];
    $senhaForm   = $_POST['senha'];
    
    $verificar = "SELECT * FROM tb_usuario WHERE usuario = '{$usuarioForm}' AND senha = '{$senhaForm}'";

    $resultado = $conexaoBanco->query($verificar)->fetch();

    if (!empty($resultado) && $resultado != false){
        
        $selectUser = "SELECT * FROM tb_info_usuario WHERE id = {$resultado['id_info_usuario']}";
        $dadosUser = $conexaoBanco->query($selectUser)->fetch();

        session_start();
        
        $_SESSION['id']              = $dadosUser['id'];
        $_SESSION['nome']            = $dadosUser['nome'];
        $_SESSION['email']           = $dadosUser['email'];
        $_SESSION['telefone']        = $dadosUser['telefone'];
        $_SESSION['rua']             = $dadosUser['rua'];
        $_SESSION['bairro']          = $dadosUser['bairro'];
        $_SESSION['n_casa']          = $dadosUser['n_casa'];
        $_SESSION['cidade']          = $dadosUser['cidade'];
        $_SESSION['ano_nascimento']  = $dadosUser['ano_nascimento'];
        
        

        header('Location: exibirDadosUsuario.php');

    } else {
        echo '<script>
            alert("Usuario ou senha inválidos")
            window.location.replace(./loginUsuario.php)
        </script>';
    }
}

include 'includes/loginForm.html';

include_once 'includes/footer.php';