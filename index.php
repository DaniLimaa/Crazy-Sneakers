<?php
require './classes/Tenis.php';

$titulo = 'Crazy Sneakers - Inicio';

$exibirTitulo = true;
include './includes/header.php';
include './includes/banner.php';

include './includes/marcas.php';

include './includes/modelos.php';

$tenis = new Tenis();
$dadosTenis = $tenis->exibirListaTenis(9);

include './includes/tenis_lista.php';

include './includes/footer.php';
?>