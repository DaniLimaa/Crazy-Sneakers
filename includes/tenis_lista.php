<section id="tenis-recomendados">
    <h1 class="titulo-recomendados">Recomendados</h1>
    <main class="recomendados-container">
        <div class="row">

            <?php for ($i = 0; $i < 9; $i++) {
                include './includes/tenis_card.php';
            }
            ?>
            
        </div>
    </main>
</section>