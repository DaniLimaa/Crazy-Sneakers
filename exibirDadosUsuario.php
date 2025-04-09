<?php

include './includes/header.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET) && $_GET['sair'] == true) {
    session_destroy();
    header('location:./index.php');
}

if (empty($_SESSION) && !isset($_SESSION['id'])){
    header('location:loginUsuario.php');

}else if(!empty($_SESSION['id']) && isset($_SESSION['id'])) {
    
    require './classes/DadosUsuarios.php';
    
    $dadosUsuarios = new DadosUsuarios();
    $informacoesUsuario = $dadosUsuarios->exibirInformacoesUsuario();
    
    
    include './includes/dadosUsuarioForm.php';
}

    include './includes/footer.php';