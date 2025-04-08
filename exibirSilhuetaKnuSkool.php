<?php
require './classes/Tenis.php';
include './includes/header.php';

$tenis = new Tenis();
$dadosTenis = $tenis->exibirSilhuetaKnuSkool();


include './includes/tenis_lista.php';
?>
<style> 
    #tenis-recomendados {
        margin-top: 70px;
    }
</style>

<?php
include './includes/footer.php';
?>