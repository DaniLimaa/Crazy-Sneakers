<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crazy Sneakers</title>

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
</head>

<body>
    <header>
        <nav>
            <a class="logo">
                <img src="assets/img/logo.png" alt="imagem da logo">
            </a>

            <ul class="menu">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="#">Populares</a></li>
                <li><a href="#">menu</a></li>
            </ul>

            <ul class="menu-icones">
                <li><a href="#"><i class="bi bi-search"></i></a></li>
                <li><a href="#"><i class="bi bi-cart3"></i></a></li>
                <li><a href="#"><i class="bi bi-heart"></i></a></li>
                <li><a href="./loginUsuario.php"><i class="bi bi-person-circle"></i></a></li>
            </ul>
        </nav>
    </header>