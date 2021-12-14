<?php 
	session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Livraria Teco Livros">
    <meta name="author" content="Matheus Possenti">
    <link rel="icon" href="img/logo1.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/cadastro.css">
    <title>Cadastro | Teco Livros</title>
</head>

<body>
    <nav class="site-header sticky-top py-1">
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
            <a class="py-2" href="principal.php">
                <img src="img/logo1.png" width="35px" alt="">
            </a>
            <a class="py-2 d-none d-md-inline-block" href="principal.php">Teco Livros</a>
            <form class="d-flex my-2 imput-group">
                <div class="input-group ">
                    <input type="text" class="form-control" placeholder="Pesquise aqui" aria-label="Recipient's username" aria-describedby="button-addon2" size="60%">
                    <button type="button" class="btn btn-outline-light">
                        <i class="fas fa-search text-light"></i>
                    </button>
                </div>
            </form>
            <a class="py-2 d-none d-md-inline-block" href="login.php">Log in</a>
            <a class="py-2 d-none d-md-inline-block" href="carrinho.php">Carrinho</a>
        </div>
    </nav>