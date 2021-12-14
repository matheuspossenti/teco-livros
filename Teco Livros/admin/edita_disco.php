<?php

require_once "Disco.php";
require_once "discoDAO.php";
require_once "funcoes.php";

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
    $imagem = pegarImagem($_FILES);

    $livro = new Livro();

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

    $livroDAO->editarLivro($livro);

?>
<body>
    <?php

    include "menu.php";

    ?>

    <h2>Atualização realizada com sucesso!</h2>

    <?php

    include "rodape.php";
    
    ?>
</body>