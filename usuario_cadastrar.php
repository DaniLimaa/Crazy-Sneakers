<?php

$dsn = 'mysql:dbname=db_crazy_sneakers;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$usuarioForm  =     $_POST['usuario'];
$senhaForm    =     $_POST['senha'];

$nomeForm           =   $_POST['nome'];
$emailForm          =   $_POST['email'];
$telefoneForm       =   $_POST['telefone'];
$ruaForm            =   $_POST['rua'];
$bairroForm         =   $_POST['bairro'];
$n_casaForm         =   $_POST['n_casa'];
$cidadeForm         =   $_POST['cidade'];
$ano_nascimentoForm =   $_POST['ano_nascimento'];

$insert = "INSERT INTO tb_info_usuario (nome, email, telefone, rua, bairro, n_casa, cidade, ano_nascimento) VALUE (:nome, :email, :telefone, :rua, :bairro, :n_casa, :cidade, :ano_nascimento)";

$box = $banco->prepare($insert);

$box->execute([
    'nome'           => $nomeForm,
    'email'          => $emailForm,
    'telefone'       => $telefoneForm,
    'rua'            => $ruaForm,
    'bairro'         => $bairroForm,
    'n_casa'         => $n_casaForm,
    'cidade'         => $cidadeForm,
    'ano_nascimento' => $ano_nascimentoForm
]);

$id_info_usuario = $banco->lastInsertId();

$insert = "INSERT INTO tb_usuario (usuario, senha, id_info_usuario) VALUE (:usuario, :senha, :id_info_usuario)";

$box = $banco->prepare($insert);

$box->execute([
    'usuario'         => $usuarioForm,
    'senha'           => $senhaForm,
    'id_info_usuario' => $id_info_usuario
]);

echo '<script>
    alert("Usuario cadastrado com sucesso")
    window.location.replace("index.php")
</script>';
