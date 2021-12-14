<?php
    session_start();      
    require "Cliente.php";
    require "ClienteDAO.php";

    $email = $_POST['email'];
    $senha = $_POST['senha'];
      
    $cliente = new Cliente();
    $cliente->setEmail($email);
    $cliente->setSenha($senha);
    
    $clienteDAO = new ClienteDAO();

    if($cliente = $clienteDAO->verificarCliente($cliente)){
        $_SESSION['email'] = $email;   
        $_SESSION['clienteId'] = $cliente['id'];
        
        header("Location:../pagamento.php");
    }else{

        header("Location:../login.php");
    }
    
?>