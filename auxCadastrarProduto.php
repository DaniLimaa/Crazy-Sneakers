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

if (isset($_FILES['foto_exibicao']['name']) && $_FILES['foto_exibicao']['error'] == 0) {

    $arquivo_tmp = $_FILES['foto_exibicao']['tmp_name'];
    $nome = $_FILES['foto_exibicao']['name'];
    $extensao = pathinfo($nome, PATHINFO_EXTENSION);

    // Converte a extensão para letras minúsculas
    $extensao = strtolower($extensao);

    if (strstr('.jpg;.jpeg;.gif;.png', $extensao)) {

        $destino = 'assets/img/foto-exibir/ ' . $nome;
    }

    if ( @move_uploaded_file ( $arquivo_tmp, $destino ) ) {
        echo 'Arquivo salvo com sucesso em : <strong>' . $destino . '</strong><br />';
        echo ' < img src = "' . $destino . '" />';
    }
    else
        echo 'Você poderá enviar apenas arquivos "*.jpg;*.jpeg;*.gif;*.png"<br />';
    
}
else
    echo 'Você não enviou nenhum arquivo!';


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