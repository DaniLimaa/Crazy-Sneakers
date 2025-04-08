<section id="tenis-recomendados">
    <?php if (!empty($exibirTitulo)){ ?>
        <h1 class="titulo-recomendados">Recomendados</h1>
    <?php } ?>
    <main class="recomendados-container">
        <div class="row">

            <?php foreach ($dadosTenis as $value) {

                include './includes/tenis_card.php';
            }
            ?>

        </div>
    </main>
</section>