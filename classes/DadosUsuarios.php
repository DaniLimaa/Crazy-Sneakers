<?php

class DadosUsuarios
{
    public $conexaoBanco;

    public function __construct()
    {
        $dsn = 'mysql:dbname=db_crazy_sneakers;host=127.0.0.1';
        $user = 'root';
        $password = '';

        return $this->conexaoBanco = new PDO($dsn, $user, $password);
    }

    public function exibirInformacoesUsuario()
    {
        $teste = $_SESSION['id'];

        $select = "SELECT 
    tb_usuario.id,
    tb_usuario.usuario,
    tb_usuario.senha,
    tb_info_usuario.nome,
    tb_info_usuario.email,
    tb_info_usuario.telefone,
    tb_info_usuario.rua,
    tb_info_usuario.bairro,
    tb_info_usuario.n_casa,
    tb_info_usuario.cidade,
    tb_info_usuario.ano_nascimento,
    tb_info_usuario.status
FROM tb_usuario
INNER JOIN tb_info_usuario ON tb_usuario.id_info_usuario = tb_info_usuario.id
WHERE tb_info_usuario.id = " . $teste;

    return $this->conexaoBanco->query($select)->fetch();
    }
}