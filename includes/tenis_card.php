<div class="col col-4 d-flex justify-content-center">
    <a href="./consultarProduto.php ? id=<?= $value['id'] ?>">
        <figure>
            <img src="./assets/img/<?= ('foto-exibir/' . $value['foto_exibicao']) ?>"
            alt="Nike air max plus tn photo blue black" class="foto-tenis">
            <figcaption>
                <div class="nome-preco">
                    <h2><?= $value['nome'] ?></h2>
                    <span class="preco">R$ <?= $value['preco'] ?></span>
                </div>
            </figcaption>
        </figure>
    </a>
</div>