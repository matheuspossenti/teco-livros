<?php
    include "menu.php";
    require_once "discoDAO.php";
?>
    <?php
        $id = $_GET['id'];

        $discoDAO = new DiscoDAO();

        $resposta = $discoDAO->removerDisco($id);

        if($resposta == 1){
            echo "<p class='destaque'>Produto $id removido com sucesso!</p>";
        }else{
            echo "<p class='destaque'>Erro na remoção do produto $id!</p>";
        }
    ?>
        
<?php
    include "rodape.php"
?>