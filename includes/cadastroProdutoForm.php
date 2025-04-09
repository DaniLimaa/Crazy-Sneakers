<?php

    if ( isset($_FILES["imagemExibicaoSneaker"]) && !empty($_FILES['imagemExibicaoSneaker']))
    {
        move_uploaded_file($_FILES["imagemExibicaoSneaker"]["tmp_name"], "./assets/img/foto-exibir/" . $_FILES["imagemExibicaoSneaker"]["name"]);
    }


?>

<section id="cadastro-produto">
    <main class="cadastro-produto-form">
        <h1>Cadastre um Sneaker</h1>

        <form enctype="multipart/form-data" action="#" method="POST">
            <div class="row">
                <div class="col-6">
                    <div class="info-sneakers">
                        <label>Nome do Sneaker</label>
                        <input type="text" name="nomeSneaker">
                        
                        <label>Cor do Sneaker</label>
                        <input type="text" name="corSneaker">
                        
                        <label>Preço do Sneaker</label>
                        <input type="text" name="precoSneaker">
                        
                        <label>Descricao do Sneaker</label>
                        <input type="text" name="descSneaker">
                        
                        <label>Marca do Sneaker</label>
                        <input type="text" name="marcaSneaker">
                        
                        <label>Silhueta do Sneaker</label>
                        <input type="text" name="silhuetaSneaker">
                    </div>
                </div>
                
                <div class="col-6">
                    <div class="img-sneakers">
                        <label>Imagem de exibição do Sneaker</label>
                        <input type="file" accept="image/*" name="imagemExibicaoSneaker">
                        
                        <label>Imagem 1 do Sneaker</label>
                        <input type="file" accept="image/*" name="imagemSneaker1">
                        
                        <label>Imagem 2 do Sneaker</label>
                        <input type="file" accept="image/*" name="imagemSneaker2">
                        
                        <label>Imagem 3 do Sneaker</label>
                        <input type="file" accept="image/*" name="imagemSneaker3">
                        
                        <label>Imagem 4 do Sneaker</label>
                        <input type="file" accept="image/*" name="imagemSneaker4">
                    </div>
                </div>
            </div>

            <input type="submit" value="Cadastrar Sneaker" class="btn-cadastrar-sneaker">
            
        </form>
    </main>
</section>