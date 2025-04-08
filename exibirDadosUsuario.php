<?php

include './includes/header.php';

require './classes/DadosUsuarios.php';

$dadosUsuarios = new DadosUsuarios();
$informacoesUsuario = $dadosUsuarios->exibirInformacoesUsuario();

include './includes/dadosUsuarioForm.php';

include './includes/footer.php';
