<?php

require './classes/BancoDados.php';

$bancoDados = new BancoDados();
$conexaoBanco = $bancoDados->conectarBancoDados();

$nomeSneakerForm            = $_POST['nomeSneaker'];
$corSneakerForm             = $_POST['corSneaker'];
$precoSneakerForm           = $_POST['precoSneaker'];
$descSneakerForm            = $_POST['descSneaker'];
$marcaSneakerForm           = $_POST['marcaSneaker'];
$silhuetaSneakerForm        = $_POST['silhuetaSneaker'];
$imagemExibicaoSneakerForm  = $_POST['imagemExibicaoSneaker'];
$imagemSneaker1Form         = $_POST['imagemSneaker1'];
$imagemSneaker2Form         = $_POST['imagemSneaker2'];
$imagemSneaker3Form         = $_POST['imagemSneaker3'];
$imagemSneaker4Form         = $_POST['imagemSneaker4'];