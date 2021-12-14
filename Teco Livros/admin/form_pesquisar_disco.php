<?php include "menu.php"; ?>

<h2>Pesquisar Discos</h2>
<form action="cadastro_disco.php">
        <label for="">Digite nome do artista ou título do álbum:  </label>
        <input type="text" name="pesquisa" id="" class="input-padrao" required="true" size=50>
                    
        <button type="submit" id="botaoId">Pesquisar</button>

</form>

<?php include "rodape.php";  ?>