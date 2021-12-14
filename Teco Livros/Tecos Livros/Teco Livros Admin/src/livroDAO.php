<?php
require_once "ConexaoBD.php";
require_once "Livro.php";

class LivroDAO
{

    function cadastrarLivro(Livro $livro)
    {
        $conexaoBD = ConexaoBD::getConexao();

        $sql = "insert into livro (titulo, autor, isbn, editora, edicao, anoPubli, estilo, resumo, valor, promocao, imagem) values (
            '{$livro->getTitulo()}',
            '{$livro->getAutor()}',
            '{$livro->getISBN()}',
            '{$livro->getEditora()}',
            '{$livro->getEdicao()}',
            '{$livro->getAnoPubli()}',
            '{$livro->getEstilo()}',
            '{$livro->getResumo()}',
            '{$livro->getValor()}',
            '{$livro->getPromocao()}',
            '{$livro->getImagem()}'
        )";

        return $conexaoBD->exec($sql);
    }

    function editarLivro(Livro $livro){

        $conexaoBD = ConexaoBD::getConexao();

        if ($livro->getImagem() == "")

            $sql = "update livro set " .
                "titulo = '{$livro->getTitulo()}', " .
                "autor = '{$livro->getAutor()}', " .
                "isbn = '{$livro->getIsbn()}', " .
                "editora = '{$livro->getEditora()}', " .
                "edicao = '{$livro->getEdicao()}', " .
                "anoPubli = '{$livro->getAnoPubli()}', " .
                "estilo = '{$livro->getEstilo()}', " .
                "resumo = '{$livro->getResumo()}', " .
                "valor = '{$livro->getValor()}', " .
                "promocao = '{$livro->getPromocao()}' " .
                "where id='{$livro->getId()}'";

        else

            $sql = "update livro set " .
                "titulo = '{$livro->getTitulo()}', " .
                "autor = '{$livro->getAutor()}', " .
                "isbn = '{$livro->getIsbn()}', " .
                "editora = '{$livro->getEditora()}', " .
                "edicao = '{$livro->getEdicao()}', " .
                "anoPubli = '{$livro->getAnoPubli()}', " .
                "estilo = '{$livro->getEstilo()}', " .
                "resumo = '{$livro->getResumo()}', " .
                "valor = '{$livro->getValor()}', " .
                "promocao = '{$livro->getPromocao()}', " .
                "imagem = '{$livro->getImagem()}' " .
                "where id='{$livro->getId()}'";

        return $conexaoBD->exec($sql);
    }



    function obterLivros()
    {
        $conexaoBD = ConexaoBD::getConexao();

        $sql = "select * from livro";

        $stmt = $conexaoBD->query($sql);

        $livros = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $livros;
    }

    function obterLivrosPromocao()
    {
        $conexaoBD = ConexaoBD::getConexao();

        $sql = "select * from livro where promocao=1";

        $stmt = $conexaoBD->query($sql);

        $livros = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $livros;
    }

    function obterLivrosSemPromocao()
    {
        $conexaoBD = ConexaoBD::getConexao();

        $sql = "select * from livro where promocao=0";

        $stmt = $conexaoBD->query($sql);

        $livros = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $livros;
    }

    function obterLivroPorId(int $id)
    {
        $conexaoBD = ConexaoBD::getConexao();

        $sql = "select * from livro where id=$id";

        $stmt = $conexaoBD->query($sql);

        $livros = $stmt->fetch(PDO::FETCH_ASSOC);

        return $livros;
    }

    function pesquisarLivros(String $chave)
    {
        $conexaoBD = ConexaoBD::getConexao();

        $sql = "select * from livro where autor like '%$chave%' or titulo like '%$chave%'";

        $stmt = $conexaoBD->query($sql);

        $livros = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $livros;
    }

    function removerLivro(int $id)
    {

        $sql = "delete from livro where id=$id";

        $conexaoBD = ConexaoBD::getConexao();

        return $conexaoBD->exec($sql);
    }
}
