<?php
    session_start();
    if(!isset($_SESSION['usuarioId'])){
        header("Location:login/login.php");
    }
?>