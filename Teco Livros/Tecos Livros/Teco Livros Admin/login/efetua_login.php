<?php
    session_start();      
    require "src/Usuario.php";
    require "src/UsuarioDAO.php";

    
    $login = $_POST['login'];
    $senha = $_POST['senha'];
      
    $usuario = new Usuario();
    $usuario->setLogin($login);
    $usuario->setSenha($senha);
    
    $usuarioDAO = new UsuarioDAO();

    if($usuario = $usuarioDAO->verificarUsuario($usuario)){
        $_SESSION['email'] = $usuario['login'];
        $_SESSION['usuarioId'] = $usuario['id'];
        header("Location:../index.php");
    }else{
        header("Location:login.php");
    }
    
?>