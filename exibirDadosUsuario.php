<?php

include './includes/header.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET) && $_GET['sair'] == true) {
    session_destroy();
    header('location:./index.php');
}

if (empty($_SESSION) && !isset($_SESSION['id'])) {
    header('location:loginUsuario.php');
} else if (isset($_SESSION['id']['status']) && $_SESSION['id']['status'] == "ADMIN") {
    require './classes/DadosUsuarios.php';

    $dadosUsuarios = new DadosUsuarios();
    $informacoesUsuario = $dadosUsuarios->exibirInformacoesUsuario();

    include './includes/dadosUsuarioForm.php';
} else if (!empty($_SESSION['id']) && isset($_SESSION['id'])) {

    require './classes/DadosUsuarios.php';

    $dadosUsuarios = new DadosUsuarios();
    $informacoesUsuario = $dadosUsuarios->exibirInformacoesUsuario();


    include './includes/dadosUsuarioForm.php';
}

if ($_SERVER["REQUEST_METHOD"] == 'POST' && !empty($_POST)) {

    $_SESSION['id'] = $resultado['id'];
    $_SESSION['status'] = $status;

}

include './includes/footer.php';
