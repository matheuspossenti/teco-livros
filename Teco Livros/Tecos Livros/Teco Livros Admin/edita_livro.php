<?php

include "src/menu.php";
require_once "src/Livro.php";
require_once "src/livroDAO.php";
require_once "funcoes.php";

$id = $_GET['id'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$isbn = $_POST['isbn'];
$editora = $_POST['editora'];
$edicao = $_POST['edicao'];
$anoPubli = $_POST['anoPubli'];
$estilo = $_POST['estilo'];
$resumo = $_POST['resumo'];
$valor = $_POST['valor'];
$promocao = $_POST['promocao'];
if ($_FILES['imagem']['size'] == 0)
    $imagem = "";
else
    $imagem = pegarImagem($_FILES);

$livro = new Livro();

$livro->setId($id);
$livro->setTitulo($titulo);
$livro->setAutor($autor);
$livro->setIsbn($isbn);
$livro->setEditora($editora);
$livro->setEdicao($edicao);
$livro->setAnoPubli($anoPubli);
$livro->setEstilo($estilo);
$livro->setResumo($resumo);
$livro->setValor($valor);
$livro->setPromocao($promocao);
$livro->setImagem($imagem);

$livroDAO = new LivroDAO();

$resposta = $livroDAO->editarLivro($livro);

if ($resposta == 1)
    header("Location:form_lista_livro.php?mensagem=Livro editado com sucesso!");
else
    header("Location:form_lista_livro.php?mensagem=Erro na edição do livro!");

include "src/rodape.php"

?>