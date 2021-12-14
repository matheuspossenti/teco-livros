<?php

require "ConexaoBD.php";

class CompraDAO{

    public function cadastrarCompra(array $sessao)
    {

        $conexao = ConexaoBD::getConexao();

        date_default_timezone_set('America/Sao_Paulo');
        $data = date("Y-m-d H:i");
        $sql = "insert into compras (clienteId, data, total) values 
        (
            '{$sessao['clienteId']}',
            '{$data}',
            '{$sessao['total']}'
        )";
        
        $conexao->exec($sql);

        $compraId = $conexao->lastInsertId();

        $carrinho = $sessao['carrinho'];
        
        foreach ($carrinho as $item) {
            $sql = "insert into itens_compra (livroId, quantidade, valor, compraId) values
            (
                '{$item['id']}',
                '{$item['quantidade']}',
                '{$item['valor']}',
                '{$compraId}'
            )";
                        
            $conexao->exec($sql);
        }
        return $compraId;
    }
}
