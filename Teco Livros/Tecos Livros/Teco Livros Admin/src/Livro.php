<?php

class Livro {

    private int $id;
    private String $titulo;
    private String $autor;
    private String $isbn;
    private String $editora;
    private int $edicao;
    private int $anoPubli;
    private String $estilo;
    private String $resumo;
    private float $valor;
    private int $promocao;
    private String $imagem;

    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    public function getIsbn()
    {
        return $this->isbn;
    }

    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;

        return $this;
    }

    public function getEditora()
    {
        return $this->editora;
    }

    public function setEditora($editora)
    {
        $this->editora = $editora;

        return $this;
    }

    public function getEdicao()
    {
        return $this->edicao;
    }

    public function setEdicao($edicao)
    {
        $this->edicao = $edicao;

        return $this;
    }

    public function getAnoPubli()
    {
        return $this->anoPubli;
    }

    public function setAnoPubli($anoPubli)
    {
        $this->anoPubli = $anoPubli;

        return $this;
    }

    public function getEstilo()
    {
        return $this->estilo;
    }

    public function setEstilo($estilo)
    {
        $this->estilo = $estilo;

        return $this;
    }

    public function getResumo()
    {
        return $this->resumo;
    }

    public function setResumo($resumo)
    {
        $this->resumo = $resumo;

        return $this;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    public function getPromocao()
    {
        return $this->promocao;
    }

    public function setPromocao($promocao)
    {
        $this->promocao = $promocao;

        return $this;
    }

    public function getImagem()
    {
        return $this->imagem;
    }

    public function setImagem($imagem)
    {
        $this->imagem = $imagem;

        return $this;
    }
    
    
}

?>