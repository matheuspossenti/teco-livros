<?php
    session_start();
    require "src/CompraDAO.php";

    $compraDAO = new CompraDAO();
    

    if($compraDAO->cadastrarCompra($_SESSION)){
        header("Location:principal.php");
    }else
        echo "erro";
?>