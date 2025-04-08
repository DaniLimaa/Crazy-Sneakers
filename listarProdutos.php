<?php
require './classes/Tenis.php';

$tenis = new Tenis();
$dadosTenis = $tenis->exibirListaTenis();

include './includes/header.php';

$exibirTitulo = false;
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