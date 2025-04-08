<?php
require './classes/Tenis.php';

$tenis = new Tenis();
$dadosTenis = $tenis->exibirMarcaVans();

include './includes/header.php';

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