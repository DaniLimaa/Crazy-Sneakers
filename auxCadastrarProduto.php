<?php

require './classes/BancoDados.php';

$bancoDados = new BancoDados();
$conexaoBanco = $bancoDados->conectarBancoDados();


$nomeSneakerForm      = $_POST['nome'];
$corSneakerForm       = $_POST['cor'];
$precoSneakerForm     = $_POST['preco'];
$descricaoSneakerForm = $_POST['descricao'];
$marcaSneakerForm     = $_POST['marca'];
$silhuetaSneakerForm  = $_POST['silhueta'];

$fotoExibicaoForm  = $_FILES['foto_exibicao']['name'];

$fotoProduto1  = $_FILES['foto_1']['name'];
$fotoProduto2  = $_FILES['foto_2']['name'];
$fotoProduto3  = $_FILES['foto_3']['name'];
$fotoProduto4  = $_FILES['foto_4']['name'];


//UPLOAD DA IMAGEM DE EXIBIÇÃO
if (isset($_FILES['foto_exibicao']['name']) && $_FILES['foto_exibicao']['error'] == 0) {

    $arquivo_tmp = $_FILES['foto_exibicao']['tmp_name'];
    $nome = $_FILES['foto_exibicao']['name'];
    $extensao = pathinfo($nome, PATHINFO_EXTENSION);

    $extensao = strtolower($extensao);

    if (strstr('.jpg;.jpeg;.gif;.png', $extensao)) {

        $destino = 'assets/img/foto-exibir/ ' . $nome;
    }

    if ( @move_uploaded_file ( $arquivo_tmp, $destino ) ) {
        echo 'Arquivo salvo com sucesso em : <strong>' . $destino . '</strong><br />';
        echo ' < img src = "' . $destino . '" />';
    }
}

//FOTO DO PRODUTO 1

if (isset($_FILES['foto_1']['name']) && $_FILES['foto_1']['error'] == 0) {

    $arquivo_tmp = $_FILES['foto_1']['tmp_name'];
    $nome = $_FILES['foto_1']['name'];
    $extensao = pathinfo($nome, PATHINFO_EXTENSION);

    $extensao = strtolower($extensao);

    if (strstr('.jpg;.jpeg;.gif;.png', $extensao)) {

        $destino = 'assets/img/fotos-produtos/ ' . $nome;
    }

    if ( @move_uploaded_file ( $arquivo_tmp, $destino ) ) {
        echo 'Arquivo salvo com sucesso em : <strong>' . $destino . '</strong><br />';
        echo ' < img src = "' . $destino . '" />';
    }
}

//IMAGEM DO PRODUTO 2

if (isset($_FILES['foto_2']['name']) && $_FILES['foto_2']['error'] == 0) {

    $arquivo_tmp = $_FILES['foto_2']['tmp_name'];
    $nome = $_FILES['foto_2']['name'];
    $extensao = pathinfo($nome, PATHINFO_EXTENSION);

    $extensao = strtolower($extensao);

    if (strstr('.jpg;.jpeg;.gif;.png', $extensao)) {

        $destino = 'assets/img/fotos-produtos/ ' . $nome;
    }

    if ( @move_uploaded_file ( $arquivo_tmp, $destino ) ) {
        echo 'Arquivo salvo com sucesso em : <strong>' . $destino . '</strong><br />';
        echo ' < img src = "' . $destino . '" />';
    }
}

//IMAGEM DO PRODUTO 3

if (isset($_FILES['foto_3']['name']) && $_FILES['foto_3']['error'] == 0) {

    $arquivo_tmp = $_FILES['foto_3']['tmp_name'];
    $nome = $_FILES['foto_3']['name'];
    $extensao = pathinfo($nome, PATHINFO_EXTENSION);

    $extensao = strtolower($extensao);

    if (strstr('.jpg;.jpeg;.gif;.png', $extensao)) {

        $destino = 'assets/img/fotos-produtos/ ' . $nome;
    }

    if ( @move_uploaded_file ( $arquivo_tmp, $destino ) ) {
        echo 'Arquivo salvo com sucesso em : <strong>' . $destino . '</strong><br />';
        echo ' < img src = "' . $destino . '" />';
    }
}

//IMAGEM DO PRODUTO 4

if (isset($_FILES['foto_4']['name']) && $_FILES['foto_4']['error'] == 0) {

    $arquivo_tmp = $_FILES['foto_4']['tmp_name'];
    $nome = $_FILES['foto_4']['name'];
    $extensao = pathinfo($nome, PATHINFO_EXTENSION);

    $extensao = strtolower($extensao);

    if (strstr('.jpg;.jpeg;.gif;.png', $extensao)) {

        $destino = 'assets/img/fotos-produtos/ ' . $nome;
    }

    if ( @move_uploaded_file ( $arquivo_tmp, $destino ) ) {
        echo 'Arquivo salvo com sucesso em : <strong>' . $destino . '</strong><br />';
        echo ' < img src = "' . $destino . '" />';
    }
}


$insert = "INSERT INTO tb_info_produto (nome, cor, preco, descricao, foto_exibicao) VALUE (:nome, :cor, :preco, :descricao, :foto_exibicao)";

$box = $conexaoBanco->prepare($insert);

$box->execute([
    'nome'           => $nomeSneakerForm,
    'cor'            => $corSneakerForm,
    'preco'          => $precoSneakerForm,
    'descricao'      => $descricaoSneakerForm,
    'foto_exibicao'  => $fotoExibicaoForm
]);

$id_info_produto = $conexaoBanco->lastInsertId();

$insert = "INSERT INTO tb_foto_produto (foto_1, foto_2, foto_3, foto_4) VALUE (:foto_1, :foto_2, :foto_3, :foto_4)";

$box = $conexaoBanco->prepare($insert);

$box->execute([
    'foto_1' => $fotoProduto1,
    'foto_2' => $fotoProduto2,
    'foto_3' => $fotoProduto3,
    'foto_4' => $fotoProduto4
]);

$id_foto_produto = $conexaoBanco->lastInsertId();

//Procurando id das marcas
$script = "SELECT id FROM tb_marcas WHERE marca = :marca";

$box = $conexaoBanco->prepare($script);

$box->execute([
    'marca' => $marcaSneakerForm
]);

$resultadoMarca = $box->fetch(PDO::FETCH_ASSOC);

$idMarca = $resultadoMarca['id'];

//Procurando id das silhuetas
$script = "SELECT id FROM tb_silhueta WHERE silhueta = :silhueta";

$box = $conexaoBanco->prepare($script);

$box->execute([
    'silhueta' => $silhuetaSneakerForm
]);

$resultadoSilhueta = $box->fetch(PDO::FETCH_ASSOC);

$idSilhueta = $resultadoSilhueta['id'];

