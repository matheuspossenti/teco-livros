<?php

require "ConexaoBD.php";

class ClienteDAO{

    public function cadastrarCliente(Cliente $cliente)
    {
        $senhaCriptografada = md5($cliente->getSenha());

        $sql = "insert into clientes (nome, cpf, email, telefone, senha, endereco, numero, bairro, cep, cidade, estado) values 
        (
            '{$cliente->getNome()}',
            '{$cliente->getCpf()}',
            '{$cliente->getEmail()}',
            '{$cliente->getTelefone()}',
            '$senhaCriptografada',
            '{$cliente->getEndereco()}',
            '{$cliente->getNumero()}',
            '{$cliente->getBairro()}',
            '{$cliente->getCep()}',
            '{$cliente->getCidade()}',
            '{$cliente->getEstado()}'
        )";

        $conexaoBD = ConexaoBD::getConexao();

        return $conexaoBD->exec($sql);
    }

    public function verificarCliente(Cliente $cliente)
    {
        $senhaCriptografada = md5($cliente->getSenha());

        $sql = "select * from clientes where email='{$cliente->getEmail()}' and senha='$senhaCriptografada'";

        $conexao = ConexaoBD::getConexao();

        echo $sql;

        $stmt = $conexao->query($sql);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
