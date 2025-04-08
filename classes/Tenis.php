<?php

class Tenis
{
    public $conexaoBanco;

    public function __construct()
    {
        $dsn = 'mysql:dbname=db_crazy_sneakers;host=127.0.0.1';
        $user = 'root';
        $password = '';

        return $this->conexaoBanco = new PDO($dsn, $user, $password);
    }

    public function exibirListaTenis($limite = '')
    {
        $auxScript = '';

        if (!empty($limite)) {
            $auxScript = " ORDER BY RAND() LIMIT {$limite}";
        }
        $script = "SELECT * FROM tb_info_produto" . $auxScript;

        return $this->conexaoBanco->query($script)->fetchAll();
    }

    public function exibirDetalheTenis()
    {
        $id = $_GET['id'];

        $script = "SELECT 
    tb_produtos.id,
    tb_info_produto.nome,
    tb_info_produto.cor,
    tb_info_produto.preco,
    tb_info_produto.descricao,
    tb_info_produto.foto_exibicao,
    tb_marcas.marca,
    tb_silhueta.silhueta,
    tb_foto_produto.foto_1,
    tb_foto_produto.foto_2,
    tb_foto_produto.foto_3,
    tb_foto_produto.foto_4
    FROM tb_produtos
    JOIN tb_info_produto ON tb_produtos.info_produto_id = tb_info_produto.id
    JOIN tb_marcas ON tb_produtos.marcas_id = tb_marcas.id
    JOIN tb_silhueta ON tb_produtos.silhueta_id = tb_silhueta.id
    JOIN tb_foto_produto ON tb_produtos.foto_produto_id = tb_foto_produto.id
    WHERE tb_produtos.id = {$id}";

        return $this->conexaoBanco->query($script)->fetch();
    }
    
    public function exibirSilhuetaDunkLow($limite = '')
    {
        $auxScript = '';

        if (!empty($limite)) {
            $auxScript = " ORDER BY RAND() LIMIT {$limite}";
        }
        $script = "SELECT *
                    FROM tb_info_produto
                    WHERE LOWER(nome) LIKE '%dunk low%';" . $auxScript;

        return $this->conexaoBanco->query($script)->fetchAll();
    }

    public function exibirSilhuetaCampus00s($limite = '')
    {
        $auxScript = '';

        if (!empty($limite)) {
            $auxScript = " ORDER BY RAND() LIMIT {$limite}";
        }
        $script = "SELECT *
                    FROM tb_info_produto
                    WHERE LOWER(nome) LIKE '%campus 00s%';" . $auxScript;

        return $this->conexaoBanco->query($script)->fetchAll();
    }

    public function exibirSilhuetaKnuSkool($limite = '')
    {
        $auxScript = '';

        if (!empty($limite)) {
            $auxScript = " ORDER BY RAND() LIMIT {$limite}";
        }
        $script = "SELECT *
                    FROM tb_info_produto
                    WHERE LOWER(nome) LIKE '%knu skool%';" . $auxScript;

        return $this->conexaoBanco->query($script)->fetchAll();
    }

    public function exibirSilhuetaAirMaxPlus($limite = '')
    {
        $auxScript = '';

        if (!empty($limite)) {
            $auxScript = " ORDER BY RAND() LIMIT {$limite}";
        }
        $script = "SELECT *
                    FROM tb_info_produto
                    WHERE LOWER(nome) LIKE '%air max plus%';" . $auxScript;

        return $this->conexaoBanco->query($script)->fetchAll();
    }

    public function exibirMarcaNike($limite = '')
    {
        $auxScript = '';

        if (!empty($limite)) {
            $auxScript = " ORDER BY RAND() LIMIT {$limite}";
        }
        $script = "SELECT tb_produtos.*, tb_marcas.marca, tb_info_produto.nome, tb_info_produto.preco, tb_info_produto.foto_exibicao
                FROM tb_produtos
                JOIN tb_marcas ON tb_produtos.marcas_id = tb_marcas.id
                JOIN tb_info_produto ON tb_produtos.info_produto_id = tb_info_produto.id
                WHERE LOWER(tb_marcas.marca) = 'nike';" . $auxScript;

        return $this->conexaoBanco->query($script)->fetchAll();
    }

    public function exibirMarcaAdidas($limite = '')
    {
        $auxScript = '';

        if (!empty($limite)) {
            $auxScript = " ORDER BY RAND() LIMIT {$limite}";
        }
        $script = "SELECT tb_produtos.*, tb_marcas.marca, tb_info_produto.nome, tb_info_produto.preco, tb_info_produto.foto_exibicao
                FROM tb_produtos
                JOIN tb_marcas ON tb_produtos.marcas_id = tb_marcas.id
                JOIN tb_info_produto ON tb_produtos.info_produto_id = tb_info_produto.id
                WHERE LOWER(tb_marcas.marca) = 'adidas';" . $auxScript;

        return $this->conexaoBanco->query($script)->fetchAll();
    }

    public function exibirMarcaPuma($limite = '')
    {
        $auxScript = '';

        if (!empty($limite)) {
            $auxScript = " ORDER BY RAND() LIMIT {$limite}";
        }
        $script = "SELECT tb_produtos.*, tb_marcas.marca, tb_info_produto.nome, tb_info_produto.preco, tb_info_produto.foto_exibicao
                FROM tb_produtos
                JOIN tb_marcas ON tb_produtos.marcas_id = tb_marcas.id
                JOIN tb_info_produto ON tb_produtos.info_produto_id = tb_info_produto.id
                WHERE LOWER(tb_marcas.marca) = 'puma';" . $auxScript;

        return $this->conexaoBanco->query($script)->fetchAll();
    }

    public function exibirMarcaVans($limite = '')
    {
        $auxScript = '';

        if (!empty($limite)) {
            $auxScript = " ORDER BY RAND() LIMIT {$limite}";
        }
        $script = "SELECT tb_produtos.*, tb_marcas.marca, tb_info_produto.nome, tb_info_produto.preco, tb_info_produto.foto_exibicao
                FROM tb_produtos
                JOIN tb_marcas ON tb_produtos.marcas_id = tb_marcas.id
                JOIN tb_info_produto ON tb_produtos.info_produto_id = tb_info_produto.id
                WHERE LOWER(tb_marcas.marca) = 'vans';" . $auxScript;

        return $this->conexaoBanco->query($script)->fetchAll();
    }
    public function exibirMarcaNewBalance($limite = '')
    {
        $auxScript = '';

        if (!empty($limite)) {
            $auxScript = " ORDER BY RAND() LIMIT {$limite}";
        }
        $script = "SELECT tb_produtos.*, tb_marcas.marca, tb_info_produto.nome, tb_info_produto.preco, tb_info_produto.foto_exibicao
                FROM tb_produtos
                JOIN tb_marcas ON tb_produtos.marcas_id = tb_marcas.id
                JOIN tb_info_produto ON tb_produtos.info_produto_id = tb_info_produto.id
                WHERE LOWER(tb_marcas.marca) = 'new balance';" . $auxScript;

        return $this->conexaoBanco->query($script)->fetchAll();
    }
}
