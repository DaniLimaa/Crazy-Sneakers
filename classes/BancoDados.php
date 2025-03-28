<?php

class BancoDados
{
    public $conexaoBanco;

    public function __construct()
    {
        $dsn = 'mysql:dbname=db_crazy_sneakers;host=127.0.0.1';
        $user = 'root';
        $password = '';

        return $this->conexaoBanco = new PDO($dsn, $user, $password);
    }

    public function conectarBancoDados()
    {
        return $this->conexaoBanco;
    }
}
