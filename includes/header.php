<?php
    session_start();

    $isAdmin = isset($_SESSION['status']) && $_SESSION['status'] === 'ADMIN';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crazy Sneakers</title>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/carrossel.css">
    <link rel="stylesheet" href="./assets/css/tenis_recomendados.css">
    <link rel="stylesheet" href="./assets/css/modelos.css">
    <link rel="stylesheet" href="./assets/css/marcas.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="./assets/css/tela_login.css">
    <link rel="stylesheet" href="./assets/css/tela_cadastro.css">
    <link rel="stylesheet" href="./assets/css/detalhes.css">
    <link rel="stylesheet" href="./assets/css/perfil.css">
    <link rel="stylesheet" href="./assets/css/cadastrarProdutoAdmin.css">

</head>

<body>
    <header>
        <nav>
            <a class="logo">
                <img src="assets/img/logo.png" alt="imagem da logo">
            </a>

            <ul class="menu">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="./listarProdutos.php">Drops</a></li>
                <?php if ($isAdmin) { ?>
                <li><a href="./cadastrarProdutoAdmin.php">Adicionar Produto</a></li>
                <?php }  ?>
            </ul>

            <ul class="menu-icones">
                <li><a href="./teste.php"><i class="bi bi-cart3"></i></a></li>
                <li><a href="./sobre.php"><i class="bi bi-info-circle"></i></i></a></li>
                <li><a href="./exibirDadosUsuario.php"><i class="bi bi-person-circle"></i></a></li>
            </ul>
        </nav>
    </header>