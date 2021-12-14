<?php

    include "menu.php";
    require_once "discoDAO.php";

    $id = $_GET['id'];

    $discoDAO = new DiscoDAO();
    $disco = $discoDAO->obterDiscoPorId($id);
    
?>
    <h2>Edição de Discos</h2>
    <form enctype="multipart/form-data" action="edita_disco.php?id=<?=$disco['id']?>" method="POST" >
            <label for="artistaInput">Artista: </label>
            <input type="text" name="artista" value="<?=$disco['artista']?>" id="artistaInput" class="input-padrao" required="true" size=100>

            <label for="tituloInput">Titulo: </label>
            <input type="text" name="titulo" value="<?=$disco['titulo']?>" id="tituloInput" class="input-padrao" size=100>

            <label for="valorInput">Valor: </label>
            <input type="text" name="valor" value="<?=$disco['valor']?>" id="valorInput" class="input-padrao" required="true" size=5>

            <label for="quantidadeInput">Quantidade: </label>
            <input type="number" name="quantidade" value="<?=$disco['quantidade']?>" id="quantidadeInput" class="input-padrao" required="true" size=5>

            <label for="imagemInput">Imagem: </label>
            <input type="file" name="imagem" id="imagemInput" class="input-padrao" required="true">

            <label for="descricaoInput">Descrição: </label>
            <textarea name="descricao" id="descricaoInput" cols="50" rows="5"><?=$disco['artista']?></textarea>
            
            <button type="submit" id="botaoId">Confirmar</button>

    </form>

<?php

    include "rodape.php";
?>