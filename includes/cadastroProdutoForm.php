<section id="cadastro-produto">
    <main class="cadastro-produto-form">
        <h1>Cadastre um Sneaker</h1>

        <form enctype="multipart/form-data" action="./auxCadastrarProduto.php" method="POST">
            <div class="row">
                <div class="col-6">
                    <div class="info-sneakers">
                        <label>Nome do Sneaker</label>

                        <input type="hidden"  placeholder="id"     name="info_produto_id" >

                        <input type="hidden"  placeholder="id"     name="foto_produto_id" >

                        <input type="hidden"  placeholder="id"     name="marcas_id" >

                        <input type="hidden"  placeholder="id"     name="silhueta_id" >

                        <input type="text" name="nome">
                        
                        <label>Cor do Sneaker</label>
                        <input type="text" name="cor">
                        
                        <label>Preço do Sneaker</label>
                        <input type="text" name="preco">
                        
                        <label>Descricao do Sneaker</label>
                        <input type="text" name="descricao">
                        
                        <label>Marca do Sneaker</label>
                        <input type="text" name="marca">
                        
                        <label>Silhueta do Sneaker</label>
                        <input type="text" name="silhueta">
                    </div>
                </div>
                
                <div class="col-6">
                    <div class="img-sneakers">
                        <label>Imagem de exibição do Sneaker</label>
                        <input type="file" name="foto_exibicao">
                        
                        <label>Imagem 1 do Sneaker</label>
                        <input type="file" name="foto_1">
                        
                        <label>Imagem 2 do Sneaker</label>
                        <input type="file" name="foto_2">
                        
                        <label>Imagem 3 do Sneaker</label>
                        <input type="file" name="foto_3">
                        
                        <label>Imagem 4 do Sneaker</label>
                        <input type="file" name="foto_4">
                    </div>
                </div>
            </div>
    
            <input type="submit" value="Cadastrar Sneaker" class="btn-cadastrar-sneaker">
            
        </form>
    </main>
</section>
