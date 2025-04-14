<?php

require './classes/Tenis.php';

$id = $_GET['id'];

$tenis = new Tenis();
$dados = $tenis-> exibirDetalheTenis();

$tenis = new Tenis();
$tamanho = $tenis->exibirTamanho();

?>

<section id="detalhes-produto">
    <main class="detalhes">
        <div class="row">

            <div class="col-6">
                <h1><?= $dados['nome'] ?></h1>

                <div class="container-tamanho">
                    <p>A partir de</p>
                    <h2>R$ <?=$dados['preco']?></h2>

                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Selecione o tamanho
                        </button>
                        <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                <h7><?= $tamanho['tamanho']?></h7>
                                <p>R$ <?=$dados['preco']?></p>
                                <a href="?adicionar=<?php echo $key?>"><button>Comprar</button></a></li>
                        </ul>
                    </div>
                </div>


                <div class="container-descricao">
                    <h3>SILHUETA</h3>
                    <p><?= $dados['silhueta'] ?></p>

                    <h3>COR</h3>
                    <p><?= $dados['cor'] ?></p>

                    <h3>MARCA</h3>
                    <p><?= $dados['marca'] ?></p>

                    <h3>DESCRIÇÃO</h3>
                    <p><?= $dados['descricao'] ?></p>
                </div>
            </div>

            <div class="col-6">
                <div class="fotos-produtos">
                    <div class="row">
                        <div class="col-6">
                            <figure>
                                <img src="./assets/img/<?= ('fotos-produtos/' . $dados['foto_1']) ?>" alt="">
                            </figure>
                            <figure>
                                <img src="./assets/img/<?= ('fotos-produtos/' . $dados['foto_2']) ?>" alt="">
                            </figure>
                        </div>
                        <div class="col-6">
                            <figure>
                                <img src="./assets/img/<?= ('fotos-produtos/' . $dados['foto_3']) ?>" alt="">
                            </figure>

                            <?php 
                            if (!empty($dados['foto_4']) && isset($dados['foto_4'])) { ?>
                            <figure>
                                <img src="./assets/img/<?= ('fotos-produtos/' . $dados['foto_4']) ?>" alt="">
                            </figure>
                            <?php } else {
                                echo '<style>
                                overflow: hidden;
                                </style>';
                            } ?>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
</section>