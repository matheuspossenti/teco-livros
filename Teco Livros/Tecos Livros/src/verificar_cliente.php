<?php
    session_start();
    if(!isset($_SESSION['clienteId'])){
        header("Location:../login.php");
    }
?>