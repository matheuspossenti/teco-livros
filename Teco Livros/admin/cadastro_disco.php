<?php

require_once "Disco.php";
require_once "discoDAO.php";
require_once "funcoes.php";

$titulo = $_POST['titulo'];
$artista = $_POST['artista'];
$valor = $_POST['valor'];
$quantidade = $_POST['quantidade'];
$descricao = $_POST['descricao'];
$imagem = pegarImagem($_FILES);

$disco = new Disco();

$disco->setTitulo($titulo);
$disco->setArtista($artista);
$disco->setValor($valor);
$disco->setQuantidade($quantidade);
$disco->setDescricao($descricao);
$disco->setImagem($imagem);

$discoDAO = new DiscoDAO();

$discoDAO->cadastrarDisco($disco);

?>
<body>
    <?php

    include "menu.php";

    ?>

    <h2>Cadastro Realizado com sucesso!</h2>

    <?php

    include "rodape.php";
    
    ?>
</body>