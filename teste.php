<?php
include './includes/header.php';
?>

<section>
    <main>
        <h1>informações do usuario</h1>
        
        <form action="POST">
            <div>
                <label>Nome</label>
                <input type="text" disabled>
                <label>Email</label>
                <input type="email" disabled>
                <label>Telefone</label>
                <input type="number" disabled>
                <label>Rua</label>
                <input type="text" disabled>
                <label>Nome de usuario</label>
                <input type="text" disabled>
            </div>
            
            <div>
                <label>Bairro</label>
                <input type="text" disabled>
                <label>Numero da casa</label>
                <input type="number" disabled>
                <label>Cidade</label>
                <input type="text" disabled>
                <label>Ano nascimento</label>
                <input type="number" disabled>
                <label>Senha</label>
                <input type="text" disabled>
            </div>

            <button type="button" class="btn btn-danger">Sair</button>
            <button type="button" class="btn btn-warning">Editar informações</button>
            
        </form>
    </main>
</section>

<?php
include_once './includes/footer.php';