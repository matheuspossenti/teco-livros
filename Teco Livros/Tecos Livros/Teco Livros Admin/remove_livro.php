<?php
include "src/menu.php";
require_once "src/livroDAO.php";

$id = $_GET['id'];

$livroDAO = new LivroDAO();

$resposta = $livroDAO->removerLivro($id);

    if ($resposta == 1)
        header("Location:form_lista_livro.php?mensagem=Livro removido com sucesso!");
    else 
        header("Location:form_lista_livro.php?mensagem=Erro na remoção do livro!");

include "src/rodape.php"
?>