<section id="perfil">
    <main class="container-perfil">
        <h1>Informações do Usuario</h1>

        <form action="#" method="POST">

            <div class="row">
                <div class="col-6">
                    <div class="primeira-coluna">
                        <label>Nome:</label>
                        <input type="text" value="<?= $informacoesUsuario['nome'] ?>" disabled>
                        <label>Email:</label>
                        <input type="email" value="<?= $informacoesUsuario['email'] ?>" disabled>
                        <label>Telefone:</label>
                        <input type="number" value="<?= $informacoesUsuario['telefone'] ?>" disabled>
                        <label>Rua:</label>
                        <input type="text" value="<?= $informacoesUsuario['rua'] ?>" disabled>
                        <label>Nome de usuario:</label>
                        <input type="text" value="<?= $informacoesUsuario['usuario'] ?>" disabled>

                        <a href="./exibirDadosUsuario.php?sair=true" class="btn btn-primary">Sair</a>

                    </div>
                </div>

                <div class="col-6">
                    <div class="segunda-coluna">
                        <label>Bairro:</label>
                        <input type="text" value="<?= $informacoesUsuario['bairro'] ?>" disabled>
                        <label>Numero da casa:</label>
                        <input type="number" value="<?= $informacoesUsuario['n_casa'] ?>" disabled>
                        <label>Cidade:</label>
                        <input type="text" value="<?= $informacoesUsuario['cidade'] ?>" disabled>
                        <label>Ano nascimento:</label>
                        <input type="number" value="<?= $informacoesUsuario['ano_nascimento'] ?>" disabled>
                        <label>Senha:</label>
                        <input type="text" value="<?= $informacoesUsuario['senha'] ?>" disabled>

                        <a href="#" class="btn btn-primary">Editar Informações</a>

                    </div>
                </div>
            </div>


        </form>
    </main>
</section>