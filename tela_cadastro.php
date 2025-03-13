<?php
include './includes/header.php';
?>
<html lang="pt-br">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<link rel="stylesheet" href="./assets/css/tela-cadastro.css">

<section id="tela-login">
    <main class="container-login">
        <div class="row">

            <div class="col-6">
                <figure>
                    <img src="./assets/img/tela-login/img-tela-login.png" alt="imagem da tela de login">
                </figure>
            </div>

            <div class="col-6">
                <div class="container-form">
                    <form action="">
                        <h1>Login</h1>
                        <input type="email" placeholder="Insira seu email" name="email" class="input-email">
                        <input type="password" placeholder="Insira sua senha" name="senha">
                        <div class="aceitar-termos">
                            <input type="checkbox" name="checkbox-termos" class="checkbox-termos">
                            <label>Você concorda com os Termos de Uso e Políticas de privacidade da Crazy Sneakers?</label>
                        </div>
                    </form>
                    <div class="btn-registrar">
                        <a href="#" class="btn btn-primary">Registrar-se</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</section>

<?php
include './includes/footer.php';
?>