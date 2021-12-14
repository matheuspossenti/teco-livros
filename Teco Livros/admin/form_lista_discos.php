<?php
    include "menu.php";    

    require_once "discoDAO.php";
    
    $discoDAO = new DiscoDAO;

    $discos = $discoDAO->obterDiscos();
?>

    <table>
        <tr>            
            <th>Artista</th>
            <th>Título</th>
            <th>Valor</th>
            <th>Quantidade</th>
            <th>Descrição</th>
            <th>---</th>
        </tr>
    
                <?php 
                    foreach ($discos as $disco) {
                ?>
                    <tr>                    
                        <td><?=$disco['artista']?></td>
                        <td><?=$disco['titulo']?></td>
                        <td><?=$disco['valor']?></td>
                        <td><?=$disco['quantidade']?></td>
                        <td><?=$disco['descricao']?></td>
                        <td>
                            <a href="remove_disco.php?id=<?=$disco['id']?>" class="btn btn-danger btn-sm">Remover</a>
                            <a href="form_edita_disco.php?id=<?=$disco['id']?>" class="btn btn-primary btn-sm">Editar</a> 
                        </td>
                    </tr>
                <?php 
                    }
                ?>
        <?php
            
        ?>

    </table>


<?php

    include "rodape.php";
?>