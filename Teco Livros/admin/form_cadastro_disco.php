<?php

    include "menu.php";
    
?>
    <h2>Cadastro de Discos</h2>
    <form enctype="multipart/form-data" method="post" action="cadastro_disco.php">
            <label for="artistaInput">Artista: </label>
            <input type="text" name="artista" id="artistaInput" class="input-padrao" required="true" size=100>

            <label for="tituloInput">Titulo: </label>
            <input type="text" name="titulo" id="tituloInput" class="input-padrao" size=100>

            <label for="valorInput">Valor: </label>
            <input type="text" name="valor" id="valorInput" class="input-padrao" required="true" size=5>

            <label for="quantidadeInput">Quantidade: </label>
            <input type="number" name="quantidade" id="quantidadeInput" class="input-padrao" required="true" size=5>

            <label for="imagemInput">Imagem: </label>
            <input type="file" name="imagem" id="imagemInput" class="input-padrao" required="true">

            <label for="descricaoInput">Descrição: </label>
            <textarea name="descricao" id="descricaoInput" cols="50" rows="5"></textarea>
            
            <button type="submit" id="botaoId">Cadastrar</button>

    </form>

<?php

    include "rodape.php";
?>