<?php
require_once "src/ConexaoBD.php";
require_once "Disco.php";

class DiscoDAO {

    function cadastrarDisco(Disco $disco) {
        $conexaoBD = ConexaoBD::getConexao();

        $sql = "insert into discos (titulo, artista, valor, quantidade, descricao, imagem) values (
            '{$disco->getTitulo()}',
            '{$disco->getArtista()}',
            '{$disco->getValor()}',
            '{$disco->getQuantidade()}',
            '{$disco->getDescricao()}',
            '{$disco->getImagem()}'
        )";

        return $conexaoBD->exec($sql);
    }

    function editarDisco(Disco $disco) {

        $conexaoBD = ConexaoBD::getConexao();

        $sql = "update discos set " . 
                "titulo = '{$disco->getTitulo()}', " .
                "artista = '{$disco->getArtista()}', " .
                "valor = '{$disco->getValor()}', " .
                "quantidade = '{$disco->getQuantidade()}', " .
                "descricao = '{$disco->getDescricao()}', " .
                "imagem = '{$disco->getImagem()}'" .
                "where id = '{$disco->getId()}'";
    
        return $conexaoBD->exec($sql);
    }

    

    function obterDiscos() {
        $conexaoBD = ConexaoBD::getConexao();

        $sql = "select * from discos";

        $stmt = $conexaoBD->query($sql);

        $discos = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $discos;
    }

    function obterDiscoPorId(int $id) {
        $conexaoBD = ConexaoBD::getConexao();

        $sql = "select * from discos where id=$id";

        $stmt = $conexaoBD->query($sql);

        $discos = $stmt->fetch(PDO::FETCH_ASSOC);

        return $discos;
    }

    function removerDisco(int $id) {
        
        $sql = "delete from discos where id=$id";

        $conexaoBD = ConexaoBD::getConexao();

        return $conexaoBD->exec($sql);
    }

 }

?>