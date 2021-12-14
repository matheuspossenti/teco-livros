<?php
    require "src/UsuarioDAO.php";
    require "src/Usuario.php";

    $login = "teco2@admin.com";
    $senha = "asd123";

    $usuario = new Usuario();
    $usuario->setLogin($login);
    $usuario->setSenha($senha);

    $usuarioDAO = new UsuarioDAO();
    $usuarioDAO->cadastrarUsuario($usuario);
?>